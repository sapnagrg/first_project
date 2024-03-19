<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Sign Up</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">
        <?php 
         
         include("php/config.php");
         if(isset($_POST['submit'])){
            $firstname = $_POST['Firstname'];
            $lastname = $_POST['Lastname'];
            $email = $_POST['Email'];
            $phonenumber=$_POST['Phone'];
            $password = $_POST['Password'];

         //verifying the unique email

         $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
         }
         else{

            mysqli_query($con,"INSERT INTO users(Firstname,Lastname,Email,Phone,Password) VALUES('$firstname',
            '$lastname','$email','$phonenumber''$password')") or die("Error Occured");

            echo "<div class='message'>
                      <p>Registration successfully!</p>
                  </div> <br>";
            echo "<a href='login.php'><button class='btn'>Login Now</button>";
         

         }

         }else{
         
        ?>
            
            <header>Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstname" placeholder="Your First Name" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" id="lastname" placeholder="Your Last Name" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Enter your Email Address" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="phone">Phone number:</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" title="Please enter a valid phone number (e.g., 123-456-7890)" required>
                </div>
                
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Sign Up" required>
                </div>
                <div class="links">
                    Already have an account? <a href="login.php">Login</a>
                </div>
            </form>
            
        </div>
        <?php } ?>
      </div>
      
</body>
</html>