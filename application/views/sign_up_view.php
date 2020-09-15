<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/themify-icons.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/cryptocoins.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/cryptocoins-colors.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="<?php echo base_url();?>assets/icon/favicon-32x32.png">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/tostr/toastr.min.css">
    
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>Smart Mine – Sign Up</title>

</head>
<body>
	<!-- sign form -->
	<div class="sign">
		<!-- particles -->
		<div id="particles-js" class="sign__particles"></div>
		<!-- end particles -->

		<div class="sign__content">
			<form action="#" class="sign__form">
				
				<a href="<?php echo base_url();?>"><img class="sign__logo" src="<?php echo base_url();?>assets/img/logo.svg" alt=""></a>

				<input type="text" class="form__input" placeholder="Name" id="name">

				<input type="email" class="form__input" placeholder="Email" id="email">

				<input type="password" class="form__input" placeholder="Password" id="pass">

				<button class="btn" type="button" id="btn_sign_up">Sign up</button>

				<div class="sign__box">
					<p>Already have an account? <a href="<?php echo base_url();?>Sign_In">Sign in</a></p>
				</div>
			</form>
		</div>
	</div>
	<!-- end sign form -->

	<!-- JS -->
	<script src="<?php echo base_url();?>assets/js/jquery-3.5.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/smooth-scroll.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/particles.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/particles-app.js"></script>
	<script src="<?php echo base_url();?>assets/js/main.js"></script>
	<script src="<?php echo base_url();?>assets/tostr/toastr.min.js"></script>
	<script type="text/javascript">
		$("#btn_sign_up").click(function(){
			var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			var name = $('#name').val();
			var email = $('#email').val();
			var pass = $('#pass').val();
			if( name == "" || email == "" || pass == "" || !emailReg.test(email)){
				toastr.error("Input email again");
				return;
			}else{
				$.post("<?php echo base_url();?>Sign_up/signup",
				{
					name	: 	name,
					email	: 	email,
					pass	: 	pass
				},function(result){
					if(result == "1"){
						toastr.warning("Input email again");
					}else{
						toastr.success("Sign Up Successfully");
					}	
				});
			}
		});
	</script>
</body>
</html>