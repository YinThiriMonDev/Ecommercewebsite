<!DOCTYPE HTML>
<html lang="en-US">
<head>
<title>Login</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<script type="text/javascript">
		const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>

<div class="container-fluid">
	<div class="row">
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h4>Create Account</h4>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-heart-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
http://localhost/Unit39/hoppie&mochi/home.php#			<input type="password" placeholder="Password" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="login.php" method="POST">
			<h5>Login to Admin Site</h5>
			  <label for="name">Name</label>
              <input type="text" name="name" id="name">
  
               <label for="password">Password</label>
                <input type="password" name="password" id="password">
			<input type="submit" value="Admin Login">
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<h5 style="font-family: Lucida Calligraphy;">Hoppie & mochi cosmetics</h5>
				<p style="text-align: center;">Gorgeous and Beauty which you deserves</p>
				
			</div>
		</div>
	</div>
</div>
</div>
</div>
</body>
</html>

