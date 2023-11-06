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
     <form name="form" method="POST" action="conn.php">
       
       <h1>Registration form</h1>
        <div class="form-group">
          <div class="form-group">
            <label for="Username">Username</label>
            <input type="text" id="address" name="Username" required>
          </div>
          <div class="form-group">
            <label for="job Title">Job Tilte</label>
            <input type="text" id="address" name="JobTitle" required>

		
          </div>
          <div class="form-group">
            <label for="company">Company Name</label>
            <input type="text" id="address" name="Company" required>
          </div>
          <label for="address">Resident Address</label>
          <input type="text" id="address" name="Address" required>
        </div>
  
        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" name="phonenumber" required>
        </div>
             <div class="form-group"> 
                <label > Cover Letter:</label>
                 <textarea placeholder="Write your cover letter here please!(at least 50 character.)" name="coverletter"></textarea>
            </div>
        <button type="submit" value="submit">Submit</button>
      </form>
    </div>
  </div>
</body>
</html>