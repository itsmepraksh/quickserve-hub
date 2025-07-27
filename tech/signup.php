<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Signup Page</title>
<link href="css/signup.css" rel="stylesheet"/>
</head>
<body>
<div class="form-container">
<h2>Sign Up</h2>
<form action="signupprocess.php" method="post">
<input name="action" type="hidden" value="signup"/>
<input name="uname" placeholder="Username" required="" type="text"/>
<input name="email" placeholder="Email" required="" type="email"/>
<input name="password" placeholder="Password" required="" type="password"/>
<select name="role" required>
  <option value="">Select Role</option>
  <option value="vendor">Vendor</option>
  <option value="supplier">Supplier</option>
</select>

<button name="submit" type="submit" value="submit">Sign Up</button>
</form>
<p>Already have an account? <a href="login.php">Login here</a></p>
</div>
</body>
</html>
