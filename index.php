<?php include('header.php'); ?>

<div id="bg-signIn-container">
	<img src="assets/images/signin-bg.jpg" alt="img">
	<div id="overlay-panel"></div>

	<div id="open-acccount-content">
		<p>Digital Account Opening Portal</p>
		<p>TREC Holder - Pakistan Mercantile Exchange</p>
	</div>

<div id="my-signin-container">

	<div id="my-signin-container-left">
		<img id="my-signin-container-left-bg" src="assets/images/left-bg.jpg" alt="img">
		<div id="my-signin-container-left-overlay"></div>
		<p>Enricher Private Limited</p>
		<img id="laptop-img" src="assets/images/laptop.png" alt="enricher img">
	</div>
	<div id="my-signin-container-right">
		<p>Sign In</p>
		<div id="my-signin-field-container">
			<div id="my-signin-field">
				<label>UserID / Email</label>
				<input type="text" name="" placeholder="Enter your Registered Email Address">
			</div>
			<div id="my-signin-field">
				<label>Password</label>
				<input type="text" name="" placeholder="Enter your Registered Email Address">
			</div>
			<div id="signin-forget-field">
				<div>
					<input type="checkbox" name="">
					<label>Remember me</label>
				</div>
				<div>
					<a href="">forget passowrd?</a>
				</div>
			</div>
			<div id="my-signin-field">
				<button id="sign-in-btn">Sign in</button>
			</div>
			<div id="my-signin-field">
				<hr>
			</div>
			<div id="my-signin-field">
				<a href="register.php"><button id="create-account-btn">
					Don't have account? <b>Register Now</b>
				</button></a>
			</div>
			<div id="my-signin-field">
				<p id="copyRight-text">Copyright © VisionMAX (Private) Limited 2024</p>
			</div>
		</div>
	</div>
</div>

</div>

<?php include('footer.php'); ?>