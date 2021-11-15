<?php 

    include './file_functions.php';
    include './users_functions.php';
    require './auth_functions.php';
    
    checkAuth();

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $drzava = $_POST['drzava'];
        $grad = $_POST['grad'];
        $id = $_POST['id'];

        $users = getUsersFromFile(); // fetch from "DB"
        
        foreach($users as &$user){
            if ($user['id'] == $id){

                $user['first_name'] = $first_name;
                $user['last_name'] = $last_name;
                $user['email'] = $email;
                $user['drzava'] = $drzava;
                $user['grad'] = $grad;
                
            }
           
        }
        
        writeToFile(json_encode($users));  // save to "DB"

        // redirect to index with message
        header("location:index.php?user_updated=1");
    }

    

?>