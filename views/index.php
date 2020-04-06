

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<title>Emag | Hero Game</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


	<!-- CSS Files -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet" />
	<link href="public/css/paper-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="public/css/demo.css" rel="stylesheet" />

	<!-- Fonts and Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="public/css/themify-icons.css" rel="stylesheet">


	<!--   Core JS Files   -->
	<script src="public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="public/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="public/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<script src="public/js/demo.js" type="text/javascript"></script>

	</head>

	<body>
	

	<div class="image-container set-full-height" style="background-image: url('public/img/background.jpg')">
	    <!--   Creative Tim Branding   -->
	    <a href="#">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="public/img/new_logo.png">
	            </div>
	        </div>
	    </a>
	    <!--   Big container   -->
	    <div id="gameContainer" class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2" style="top: 30px">
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
		                                    	<p class="info-text" style="text-align: left;"> Once upon a time there was a great hero, called <b>Orderus</b>, with some strengths and weaknesses,
												as all heroes have.<br>
After battling all kinds of monsters for more than a hundred years, <b>Orderus</b> now has the
following stats:</p>
		                            		</div>	
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group">
		                                        	<label>Health</label>
		                                        	<input type="text" class="form-control" disabled value="70-100" placeholder="Where is your place located?">
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5">
		                                    	<div class="form-group">
		                                        	<label>Strength</label>
		                                        	<input type="text" class="form-control" disabled value="70-80" placeholder="Where is your place located?">
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group">
		                                        	<label>Defence</label>
		                                        	<input type="text" class="form-control" disabled value="45-55" placeholder="Where is your place located?">
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5">
		                                    	<div class="form-group">
		                                        	<label>Speed</label>
		                                        	<input type="text" class="form-control" disabled  value="45-50" placeholder="Where is your place located?">
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group">
		                                        	<label>Luck</label>
		                                        	<input type="text" class="form-control" disabled value="10%-30%" placeholder="Where is your place located?">
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-12 text-center">
		                                		<button class="btn-danger btn btn-lg" onclick="game.startGame()">START GAME</button>
		                                	</div>
		                            	</div>
		                            </div>
		                      
		                            </div>
		                        </div>
		                       
		                        </div>
		       
		                </div>
		            </div> <!-- wizard container -->
		        </div>

		        <div class="footer">
	        	<div class="container text-center">
	        	     Made with <i class="fa fa-heart heart"></i> by <a href="https://www.linkedin.com/in/sebastian-schiau">Schiau Sebastian</a>.
	        	</div>
	    	</div>  

	        </div> <!-- row -->

	      
	    </div> <!--  big container -->

		
	</div>

</body>

	


</html>
