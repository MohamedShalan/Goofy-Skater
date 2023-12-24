<?php
 $email=$_REQUEST['email'];
 $password=$_REQUEST['password'];
 $phone=$_REQUEST['phone'];

 if(isset($_POST['btn'])){


   $host='localhost';
   $user= 'root';
   $password='';
   $db='gofy';




    @$conn= mysqli_connect($host,$user,$password,$db);
    $insert= "insert into customer values('$email','$password','$phone')";
     mysqli_query($conn,$insert);
    



   if($conn){
    echo("<h1 style='color:green';>Your Registration Is Good<h1\>");

   }
   else{
    echo("<h1 style='color:red';>Your Registration Is Failed<h1\>");
   }








 }

































?>