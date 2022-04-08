<?php 
    include("./connect_db.php");
    include("./functions.php");

    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);

    if(empty($email) || empty($password)){

        header("Location: ./index.php?content=message&alert=loginform-empty");
    } else {

            $sql = "SELECT * FROM `applicants` WHERE `email` = '$email'";

            $result = mysqli_query($conn, $sql);

            // var_dump((bool) mysqli_num_rows($result));

            if (!mysqli_num_rows($result)) {
                // email onbekend
                header("Location: ./index.php?content=message&alert=email-unknown");

            } else {

                    $record = mysqli_fetch_assoc($result);

                    // var_dump($record["activated"]);

                    if (!$record["activated"]) {
                    header("Location: ./index.php?content=message&alert=not-activated&email=$email");
                    } else {
                        
                        var_dump($record["password"]);
                        var_dump($password);
                        var_dump(password_hash($password, PASSWORD_BCRYPT));

                        echo password_verify($password, $record["password"]);

                    }
            } 
    }
?>