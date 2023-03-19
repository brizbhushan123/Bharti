<!DOCTYPE html>
<html>
	<head>
		<title>4th Annual HSE Summit 2020</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="loginassets/css/bootstrap.min.css" rel="stylesheet">
		<link href="loginassets/css/font-awesome.min.css" rel="stylesheet">
		
		
		<link href="loginassets/css/custom.css" rel="stylesheet" type="text/css">
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/
		html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/
		respond.min.js"></script>
		<![endif]-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<script src="loginassets/js/bootstrap.min.js"></script>
		
	</head>

	<body class="c2fo-landing">
			<div class="landing-wrapper">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-lg-5">
						<div class="left-side-content text-center">
			 				<h3 class="title-welcome">WELCOME TO</h3>
			 				<div class="main-logo">
			 					<img src="loginassets/images/HSE_logo.png">
			 				</div>
			 				<div class="live-dec">
			 					<span><img src="loginassets/images/live-logo.png"> 3D Virtual Edition</span>
			 				</div>
			 				<div class="summit-time">
			 					<p>05-06 November 2020 |  09:00 AM Onwards</p>
			 				</div>
			 			</div>			 				
					</div>
					<div class="col-lg-7 text-center">
						<div class="right-side-content text-center">
							<div class="conception-partner">
						 		<p class="text-white">Conceptualized By</p>
						 		<img src="loginassets/images/inventicon.png">
						 	</div>
							<iframe width="100%" height="auto" src="https://www.youtube.com/embed/AR9Kq_tJcmY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							
							<form id="login_form" method="post" class="loginsection">
    							<div class="login-field">
    							
    									<input type="email" name="email" id="email" placeholder="Enter your email address" required>
    									<input style="background: orange; width: 34%;" type="submit" class="btn btn-primary btn-block" value="Login">							
    							
    							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			 <div class="bottom-content">
			 	<div class="gold-partner">
			 		<p>Gold Partner</p>
			 		<img src="loginassets/images/dnv-logo.png">
			 		
			 	</div>
			 	<div class="silver-partner">
			 		<p>Silver Partners</p>
			 		
			 		<img src="loginassets/images/PM-logo.png" class="pm-logo">
			 		<img src="loginassets/images/LO-logo.png" class="lo-logo">
			 		
			 	</div>
			 	
			 </div>
			 
			</div>




			<div class="modal" id="chatbox">
				<div class="modal-dialog modal-lg modal-dialog-centered" style="max-width: 60%;">
				   <div class="modal-content" style="border: 0px; border-radius: 0px">
					  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					  <h2 style="text-align:center; color: #000000;">Please login on 5th Nov 2020 at 9 AM IST.</h2>
				   </div>
				</div>
			 </div>
			
			 <script>
				$(function (){
				
				  $('#login_form').on('submit', function (e){
				
				  e.preventDefault();
					$.ajax({
					  type: 'post',
					  url: '<?php echo base_url()."serverrequest/login";?>',
					  data: $('#login_form').serialize(),
					  success: function (data) {
						if(data==4){
							window.location.href = "<?php echo base_url();?>welcome ";
						   }
						else{
						  $('#chatbox').modal('show');
						}
					  }
					});
	   
				// $('#chatbox').modal('show');
	   
				  });
				 });
			 </script>

		<script src="loginassets/js/custom.js"></script>
	</body>
</html>
