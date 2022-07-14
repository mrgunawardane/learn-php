<!DOCTYPE html>
<html lang="en">
    <head>

    </head>
    <body>
        
        <?php
        //get the data
            $name = $_POST['name'];
            $email = $_POST['email'];
            $passwd = $_POST['passwd'];
        
            echo "Display information";
            echo "Name : $name";
            echo "email : $email";
            echo "password : $passwd";
        ?>

    </body>
</html>