

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form-box">
          <form name="form" method="POST" action="connection.php" >
            <h1>Login</h1>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="username" name="email" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" name="Pass" required>
            </div>
            <button type="submit">Submit</button>
            <p>Don't have an account? <a href="Signup.php" id="signup-link">Sign up</a></p>
          </form>
</body>
</html>