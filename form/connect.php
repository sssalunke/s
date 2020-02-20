
<?php
  include("db.php");
  if(isset($_POST['submit']))
  {

      $name = $_POST['name'];
      $email = $_POST['email']; 
      $mobile = $_POST['mobile'];

      $INSERT = mysqli_query($conn,"INSERT INTO login_page (name,email,mobile) VALUES ('$name','$email','$mobile')");

      if($INSERT==TRUE)
      {
      	echo "Inserted";
      }
      else 
      {
      	echo "Not Inserted";
      }
  }
    
    ?>
