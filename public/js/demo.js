

game = {

	startGame:function(wins = 0){
		$.ajax({
			type:"POST",
			url:"startGame",
			data:{
				wins:wins
			},
			dataType: "html",
			success: function(response){
				$('#gameContainer').html(response);
				if($('.monsterSpeed').val() > $('.heroSpeed').val()){
	 				console.log('aici');
	 			}else if($('.monsterSpeed').val() == $('.heroSpeed').val()){
	 				if($('.monsterLuck').attr('data-value') > $('.heroLuck').attr('data-value'))
	 					game.monsterAttack(); 
	 			}

			}

		});



	},



	heroAttack:function(){
		$('.attackBtn').prop('disabled', true);
		$.ajax({
			type:"POST",
			url:"heroAttack",
			dataType: "json",
			success: function(response){
				for (var i = 1, len = response.damage; i < len; i++) {
   						var $cur = $('#monsterHealth');
   						var getprogressPuan = response.lastHealth - i;
   						$cur.css("width", getprogressPuan + "%");
   						if ((getprogressPuan > 0) && (getprogressPuan <= 40)) {
   						    $cur.removeClass("bg-warning");
   						    $cur.addClass("bg-danger");
   						} else if ((getprogressPuan >= 40) && (getprogressPuan < 70)) {
   						    $cur.removeClass("bg-success");
   						    $cur.addClass("bg-warning");
   						}
				}
				$('.monsterHealth').val(response.health);
				if(!response.win){
					if(response.skill)
							game.heroAttack();
					else
							game.monsterAttack();
				}else{
					if(response.wins == 20){
						game.win();
					}else{
						game.startGame(response.wins);
					}
					
				}
				
			}

		})


	},

	monsterAttack:function(){
		$.ajax({
			type:"POST",
			url:"monsterAttack",
			dataType: "json",
			success: function(response){
				for (var i = 1, len = response.damage; i < len; i++) {
						var $cur = $('#heroHealth');
   						var getprogressPuan = response.lastHealth - i;
   						$cur.css("width", getprogressPuan + "%");
   						if ((getprogressPuan > 0) && (getprogressPuan <= 40)) {
   						    $cur.removeClass("bg-warning");
   						    $cur.addClass("bg-danger");
   						} else if ((getprogressPuan >= 40) && (getprogressPuan < 70)) {
   						    $cur.removeClass("bg-success");
   						    $cur.addClass("bg-warning");
   						}
   				}
   				$('.heroHealth').val(response.health);
   				$('.attackBtn').prop('disabled', false);
   				if(response.lose){
   					game.over();
   				}	
			}

		})

	},

	over:function(){
		$.ajax({
			type:"POST",
			url:"gameOver",
			dataType: "html",
			success: function(response){
				$('#gameContainer').html(response);
			}

		})	

	},
	win:function(){
		$.ajax({
			type:"POST",
			url:"winner",
			dataType: "html",
			success: function(response){
				$('#gameContainer').html(response);
			}

		})	

	},


}

