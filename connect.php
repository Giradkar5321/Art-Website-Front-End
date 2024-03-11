<?php

     $con = new mysqli("localhost","root","","tutorial");
     if(!$con){
        die("not connect".mysqli_error());
     }
     else{

      if(isset($_POST['register']))
      {
         $name = mysqli_real_escape_string($con,$_POST['user']);
         $age = mysqli_real_escape_string($con,$_POST['age']);
         $batch = mysqli_real_escape_string($con,$_POST['batch']);
         $sql = "INSERT INTO register(username,age,batch) VALUES('$name','$age','$batch')";
         $result = mysqli_query($con,$sql);
         if(!$result){
            echo "Not Registered....:-(";
         }
         else{
            echo "Registered Successfully";
         }
         mysqli_close($con);
      }
     }


?>