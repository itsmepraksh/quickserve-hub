<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Login Page</title>
<link href="css/login.css" rel="stylesheet"/>
<style>
        body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background: #f4f4f4;
}

.form-container {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

h2 {
    margin-bottom: 20px;
    color: #333;
}

form input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    width: 100%;
    padding: 10px;
    background: #007BFF;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background: #0056b3;
}

a {
    color: #007BFF;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}


    </style>
<style>
        * {
            box-sizing: border-box;
        }
        body {
            max-width: 100%;
            margin: 0;
            padding: 10px;
            font-family: Arial, sans-serif;
        }
        img, video {
            max-width: 100%;
            height: auto;
        }
        input, button, select, textarea {
            max-width: 100%;
        }
        </style></head>
<body>
<div class="form-container">
<h2>Login</h2>
<form action="loginprocess.php" method="post">
  <input type="text" name="uname" placeholder="Username" required>
  <input type="password" name="password" placeholder="Password" required>
  <button type="submit">Login</button>
</form>
<p>Don't have an account? <a href="signup.php">Sign up here</a></p>
</div>
</body>
</html>


