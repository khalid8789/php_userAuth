<?php


if(isset($_POST['submit'])){
   
    $email = $_POST['email'];
    $password = $_POST['password'];


loginUser($email, $password);

} 
function loginUser($email, $password){
    $filename = './users.csv';
    $fp = fopen($filename, 'r+');
    fgetcsv($fp);
    if ($email === $_POST['email'] && $password === $_POST['password']){
        session_start();
      $_SESSION['email'] = $email;
      $_SESSION['password'] = $password;
     header("Location: ../dashboard.php");
    }else{
      session_unset();
      header("Location: ../forms/login.html");
    };
     
  }


