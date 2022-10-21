<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){

    $data = [$username, $email, $password];

    $file = fopen('users.csv', 'a');

    if($file){

        if(fputcsv($file,$data)){
            
           fclose($file);
        };
    }
}
echo "User Successfully registered";


