<?php

   $connection = mysqli_connect('localhost','root','','righes');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $date = $_POST['date'];  
      $text = $_POST['text'];

      $request = " insert into book_form(name, email, phone, date,text) values('$name','$email','$phone','$date','$text') ";
      mysqli_query($connection, $request);

      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>