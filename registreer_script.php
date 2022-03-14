<?php
var_dump($_POST["email"]);

if (empty($_POST["email"])) {
header("Location: ./index.php?content=message&alert=no-email");
} else {

}
?>