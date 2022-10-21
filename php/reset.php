<?php
if(isset($_POST['submit'])){
    $email = $_POST['email']; //complete this;
    $newpassword = $_POST['password']; //complete this;

    resetPassword($email, $newpassword);
}

function resetPassword($email, $newpassword){

    $csv = array_map('str_getcsv', file('users.csv'));

    foreach($csv as $row){
        if(in_array($email, $row)){
           
        }else{
       $data = [$newpassword];

            $file = fopen('users.csv', 'a');
        
            if($file){
        
                if(fputcsv($file,$data)){
                    
                   fclose($file);
                };
            }
        }
    }
    //open file and check if the username exist inside
    //if it does, replace the password
}
echo "New Password Saved";


