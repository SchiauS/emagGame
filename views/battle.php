
<div class="row">
				<div class="col-sm-12">
		    	<div class="roundContainer">Stage <?php echo ($data['wins']+1) ?></div>	
		    	<div class="logs"></div>
		    	</div>
		        <div class="col-sm-4 col-sm-offset-1" style="top: 30px">

		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                		<div class="card wizard-card" data-color="red" id="wizard">
		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title"><img src="public/img/orderus.png"> </h3>		             
		                    	</div>
	
											                    	
		                    	<div class="tab-content">
		                            <div class="tab-pane active">
		                            	<div class="row">
		                                	<div class="col-sm-10 col-sm-offset-1">
		                                		<h3>Orderus</h3>
		                                    	<div class="progress">
  													<div id="heroHealth" class="progress-bar bg-success" role="progressbar" style="width: <?php echo $data['hero']->health ?>%" aria-valuenow="<?php echo $data['hero']->health ?>" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
		                      				</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group">
		                                        	<label>Health</label>
		                                        	<input type="text" class="form-control heroHealth" disabled value="<?php echo $data['hero']->health ?>" placeholder="Where is your place located?">
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5">
		                                    	<div class="form-group">
		                                        	<label>Strength</label>
		                                        	<input type="text" class="form-control" disabled value="<?php echo $data['hero']->strength ?>" placeholder="Where is your place located?">
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group">
		                                        	<label>Defence</label>
		                                        	<input type="text" class="form-control" disabled value="<?php echo $data['hero']->defence ?>" placeholder="Where is your place located?">
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5">
		                                    	<div class="form-group">
		                                        	<label>Speed</label>
		                                        	<input type="text" class="form-control heroSpeed" disabled  value="<?php echo $data['hero']->speed ?>" placeholder="Where is your place located?">
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group">
		                                        	<label>Luck</label>
		                                        	<input type="text" class="form-control heroLuck" disabled value="<?php echo $data['hero']->luck ?>%" data-value="<?php echo $data['hero']->luck ?>" placeholder="Where is your place located?">
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-12 text-center">
		                                		<button class="btn-danger btn btn-lg" onclick="game.heroAttack()">ATTACK</button>
		                                	</div>
		                            	</div>
		                            </div>		                   
		                	</div>
		            	</div> <!-- wizard container -->
		        </div>
		    </div>
		    <div class="col-sm-2"><img class="swordsImg" src="public/img/swords.png"></div>
		    <div class="col-sm-4" style="top: 30px">

		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                		<div class="card wizard-card" data-color="red" id="wizard">
		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title"><img src="public/img/monster<?php echo rand(1, 4)?>.png"> </h3>
		                    	</div>
		                    	<div class="tab-content">
		                            <div class="tab-pane active">
		                            	<div class="row">
		                                	<div class="col-sm-10 col-sm-offset-1">
		                                		<h3>Monster</h3>
		                                    	<div class="progress">
  													<div id="monsterHealth" class="progress-bar bg-success" role="progressbar" style="width: <?php echo $data['monster']->health ?>%" aria-valuenow="<?php echo $data['monster']->health ?>" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
		                      				</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group">
		                                        	<label>Health</label>
		                                        	<input type="text" class="form-control monsterHealth" disabled value="<?php echo $data['monster']->health ?>" placeholder="Where is your place located?">
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5">
		                                    	<div class="form-group">
		                                        	<label>Strength</label>
		                                        	<input type="text" class="form-control" disabled value="<?php echo $data['monster']->strength ?>" placeholder="Where is your place located?">
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group">
		                                        	<label>Defence</label>
		                                        	<input type="text" class="form-control" disabled value="<?php echo $data['monster']->defence ?>" placeholder="Where is your place located?">
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5">
		                                    	<div class="form-group">
		                                        	<label>Speed</label>
		                                        	<input type="text" class="form-control monsterSpeed" disabled  value="<?php echo $data['monster']->speed ?>" placeholder="Where is your place located?">
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group">
		                                        	<label>Luck</label>
		                                        	<input type="text" class="form-control monsterLuck" disabled value="<?php echo $data['monster']->luck ?>%" data-value="<?php echo $data['monster']->luck ?>" placeholder="Where is your place located?">
		                                    	</div>
		                                	</div>
		                                	
		                            	</div>
		                            </div>		                   
		                	</div>
		            	</div> <!-- wizard container -->
		        </div>
		    </div>


	        </div> <!-- row -->
