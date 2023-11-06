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
          <form name="form" method="POST" action="dbconnection.php">
            <h1>Sign Up form</h1>
            <div class="form-group">
              <label for="FirstName">Firsname</label>
              <input type="text" name="name" required>
            </div>
            <div class="form-group">
              <label for="LastName">Last Name</label>
              <input type="text"  name="lastname" required>
            </div>
            
            <div class="form-group">
              <label for="new-username">Username</label>
              <input type="text" name="username" required>
            <div class="form-group">
              <label for="Email">E-mail</label>
              <input type="email" name="Email" required>
            </div>
            <div class="form-group">
              <label for="Gender">Gender</label>
              <input type="text" name="Gender" required>
            </div>
           
            <div class="form-group">
              <label for="new-password">Password</label>
              <input type="password" name="Password" required>
            </div>
            <button type="submit" value="submit">Submit</button>
            <p>Already have an account? <a href="Loginpage.php">Login</a></p>
          </form>
         
 </body>
 </html>