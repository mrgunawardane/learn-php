<?php
    // connect the database
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $conn = mysqli_connect('localhost','root', '', 'Test-form-DB') or die("Connection Failed" .mysqli_connect_error());

        // get data from the form
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['bday']) && isset($_POST['passwd']) && isset($_POST['cpasswd'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $bday = $_POST['bday'];
            $passwd = $_POST['passwd'];
            $cpasswd = $_POST['cpasswd'];
        }

        // mysql query
        $sql = "INSERT INTO 'Users'('Name', 'Email' , 'Date of Birth', 'Password') VALUES ('$name','$email', '$bday', '$passwd')";
        // enter data to data base
        $query = mysqli_query($conn, $sql);

        if($query){
            echo "Entry successful";
        }else{
            echo "Error occured";
        }

    }
?>