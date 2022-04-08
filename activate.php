<?php 
    if (!(isset($_GET["content"]) && isset($_GET["id"]) && isset($_GET["pwh"]))){
        header("Location: ./index.php?content=message&alert=hacker-alert");
    }
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-6">
            <form action="./index.php?content=activate_script" method="post">
                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Please choose a new password:</label>
                    <input name="password" type="password" class="form-control" id="inputPassword" aria-describedby="passwordHelp">
                    <div id="passwordHelp" class="form-text">Choose a good and secure password...</div>
                </div>
                <div class="mb-3">
                    <label for="inputPasswordCheck" class="form-label">Confirm your new password:</label>
                    <input name="passwordCheck" type="password" class="form-control" id="inputPasswordCheck" aria-describedby="passwordHelpCheck">
                    <div id="passwordHelpCheck" class="form-text">Please enter your password again for verification...</div>
                </div>
                <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
                <input type="hidden" name="pwh" value="<?php echo $_GET["pwh"]; ?>">
                <button type="submit" class="btn btn-outline-success btn-lg">Activate</button>
            </form>
        </div>
        <div class="col-12 col-sm-6">
            <img src="./img/hokages2.webp" alt="hokages" class="w-75 mx-auto d-block">
        </div>
    </div>
</div>