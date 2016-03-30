<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<script type="text/javascript">
		
	</script>
</head>
<body>
	<div id="modalOverlay">
		<div id="modalContent">
			<div id="loginForm">
				<div class="halfWidth">
					<div class="close" targetclose="loginForm" alt="Close window" title="Click to close this window"></div>
					<h3>Sign Up</h3>
					<form>
						<input type="text" name="login_newUsername" placeholder="enter a username" />
						<input type="text" name="login_newEmail" placeholder="enter your email address" />
						<input type="text" name="login_newPassword" placeholder="enter a password" />
						<input type="text" name="login_confirmPassword" placeholder="confirm your password" />
						<button id="login_signup">Sign Up</button>
					</form>
				</div>
				<div class="halfWidth">
					<h3>Log in</h3>
					<form>
						<input type="text" name="login_username" placeholder="username" />
						<input type="text" name="login_password" placeholder="password" />
						<button id="login_login">Login</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div id="pageHeader">
		<div class="widthWrapper">
			<div id="pageHeaderLogo"></div>
			<nav>
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Cards</a>
						<ul>
							<li><a href="">By Name</a></li>
							<li><a href="">By Color</a></li>
							<li><a href="">By Edition</a></li>
							<li><a href="">By Cost</a></li>
						</ul>
					</li>
					<li><a href="">System</a>
						<ul>
							<li><a href="">Versions/Updates</a></li>
							<li><a href="">Users</a></li>
							<li><a href="">System</a></li>
						</ul>
					</li>
					<li id="accountOptions">
						<a href="" onclick="showLoginModal()">Login or Sign Up</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>