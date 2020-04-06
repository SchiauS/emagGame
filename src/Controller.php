<?php
namespace Src;

use Src\Monster;
use Src\Hero;


class Controller {

 
     public function startGame($request){
         
         session_start();   
         $data['monster'] = new Monster();
         $data['hero'] = new Hero();
         if(isset($request['wins']))
             $data['wins'] = $request['wins'];
         else
             $data['wins'] = 0;

         $_SESSION['data'] = serialize($data);
         extract($data);
         ob_start();
         include_once('../views/battle.php');
         $result = ob_get_contents(); 
         ob_end_clean(); 
         echo $result;
     }

     public function gameOver(){
         session_start();
         $data = unserialize($_SESSION['data']);
         extract($data);
         ob_start();
         include_once('../views/gameover.php');
         $result = ob_get_contents(); 
         ob_end_clean(); 
         echo $result;
     }  

     public function winner(){
         ob_start();
         include_once('../views/winner.php');
         $result = ob_get_contents(); 
         ob_end_clean(); 
         echo $result;
     }  

     public function heroAttack(){

         session_start();  
         $win = false;

         //Get the variables from the session
         $settings = unserialize($_SESSION['data']);
         $hero = $settings['hero'];
         $monster = $settings['monster'];

         //The damage that the hero does to the monster is calculated
         $damage = $hero->strength - $monster->defence;

         //The chance the monster has to avoid the hero's attack
         $chance1 = rand(1, 100);
         if($chance1 <= $monster->luck)
             $damage = 0;

         //The chance the hero has to activate Rapid Strike skill
         $chance2 = rand(1, 100);
         $rapidStrikeChance = 10;
         $skill = false;
         if($chance1 <= $rapidStrikeChance)
             $skill = true;

         //The monster health after hero's attack
         $lastHealth = $monster->health;   
         $settings['monster']->health = $lastHealth - $damage; 
         if($settings['monster']->health <= 0){
             $win = true;
             $settings['wins'] += 1; 
         }

         //Modify the session values
         $_SESSION['data'] = serialize($settings);
            
         echo json_encode([
             "damage" => $damage,
             "lastHealth" => $lastHealth,
             "health" => $settings['monster']->health,
             "win" => $win,
             "wins" => $settings['wins'],
             "skill" => $skill
         ]);
     }
        
     public function monsterAttack(){
         session_start();
         $lose = false; 

         //Get the variables from session
         $settings = unserialize($_SESSION['data']);
         $hero = $settings['hero'];
         $monster = $settings['monster'];

          //The damage that the monster does to the hero is calculated
         $damage = $monster->strength - $hero->defence;

         //The chance the hero has to avoid the monster's attack
         $chance1 = rand(1, 100);
         if($chance1 <= $monster->luck)
             $damage = 0;

         //The chance the hero has to activate Magic Shield skill
         $chance2 = rand(1, 100);
         $magicShieldChance = 20;
         $skill = false;
         if($chance1 <= $magicShieldChance){
             $skill = true;
             if($damage > 0)
                 $damage = $damage/2;
         }
         
         //The hero health after monster's attack       
         $lastHealth = $hero->health;  
         $settings['hero']->health = $lastHealth - $damage;
         if($settings['hero']->health <= 0)
             $lose = true;

         //Modify the session values
         $_SESSION['data'] = serialize($settings);

         echo json_encode([
             "damage" => $damage,
             "lastHealth" => $lastHealth,
             "health" => $settings['hero']->health,
             "lose" => $lose,
             "skill" => $skill
         ]);

    }     


    

    

}