<?php
    if (empty($_POST["email"])) {
        header("Location: ./index.php?content=message&alert=no-email");
    } else {
        include("./connect_db.php");
        include("./functions.php");

        $email = sanitize($_POST["email"]);

        $sql = "SELECT * FROM `applicants` WHERE `email` = '$email'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)) {
            header("Location: ./index.php?content=message&alert=emailexists");
        } else {
            // De functie mk_password_hash_from_microtime() maakt een password hash,
            // haalt de tijd en datum op op basis van de php-functie microtime()
            // en geeft dit terug in $array.
            $array = mk_password_hash_from_microtime();

            $sql = "INSERT INTO `applicants` (`id`,
                                              `email`,
                                              `password`,
                                              `userrole`,
                                              `activated`)
                    VALUES                    (NULL,
                                               '$email',
                                               '{$array["password_hash"]}',
                                               'user',
                                               0)";

            if (mysqli_query($conn, $sql)) {

                $id = mysqli_insert_id($conn);

                $to = $email;
                $subject = "Activation link for your account for Hokage 2.0";
                $message = '<!doctype html>
                                <html lang="en">
                                <head>
                                    <!-- Required meta tags -->
                                    <meta charset="utf-8">
                                    <meta name="viewport" content="width=device-width, initial-scale=1">
                                
                                    <!-- Bootstrap CSS -->
                                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                                    
                                    <style>
                                        body { font-size: 1.2em; }
                                    </style>
                                </head>
                                <body>
                                    <h2>Dear User,</h2>
                                    <p>You have recently registered for the site www.hokage2.0.com</p>
                                    <p>Please click <a href="http://www.hokage2.0.com/index.php?content=activate&id=' . $id . '&pwh=' . $array['password_hash'] . '">here</a> to activate and change your account password.</p>
                                    <p>Thank you for registering.</p>
                                    <p>With kind regards,</p>
                                    <p>S. Benaissa</p>
                                    <p>CEO Hokage2.0 INC.</p>
                                    <br>
                                    <br>

                                    ' . $array["date"] . ' - ' . $array["time"] . '
                                
                                    <!-- Optional JavaScript; choose one of the two! -->
                                
                                    <!-- Option 1: Bootstrap Bundle with Popper -->
                                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                                
                                    <!-- Option 2: Separate Popper and Bootstrap JS -->
                                    <!--
                                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
                                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
                                    -->
                                </body>
                                </html>';

                $headers = "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/html; charset=UTF-8\r\n";
                $headers .= "From: admin@hokage2.org\r\n";
                $headers .= "Cc: moderator@hokage2.org\r\n";
                $headers .= "Bcc: root@hokage2.org";

                mail($to, $subject, $message, $headers);

                header("Location: ./index.php?content=message&alert=register-success");
            } else {
                header("Location: ./index.php?content=message&alert=register-error");
            }
        }
    }
?>