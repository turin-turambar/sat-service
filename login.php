<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login page</title>
	<link rel="stylesheet" href="foundation-6/css/foundation.css" />
</head>
<body>
	<div class="top-bar">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text">Site Title</li>
      <li>
        <a href="#">One</a>
        <ul class="menu vertical">
          <li><a href="#">One</a></li>
          <li><a href="#">Two</a></li>
          <li><a href="#">Three</a></li>
        </ul>
      </li>
      <li><a href="#">Two</a></li>
      <li><a href="#">Three</a></li>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li><input type="search" placeholder="Search"></li>
      <li><button type="button" class="button">Search</button></li>
    </ul>
  </div>
</div>
	<div class="row">
		<div class="small-7 large-expand columns"><h2>This is the service login page</h2></div>
	</div>
	<div class = "row">
		<div class = "small-3 columns">
			<label for = "right-label" class = "text-left middle">Username:</label>
		</div>
		<div class = "small-4 columns">
			<input type = "text" id = "right-label" placeholder = "Username">
		</div>
	</div>
	<div class = "row">
	<div class = "small-3 columns">
			<label for = "right-label" class = "text-left middle">Password:</label>
		</div>
		<div class = "small-4 columns">
			<input type = "password" id = "right-label" placeholder = "Password">
		</div>
	</div>
	<div class = "row">
		<div class="input-group-button">
			<input type="submit" class="button" value="Log in">
		</div>
	</div>
	<script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
</body>
</html>