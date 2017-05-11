<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("password_form.php", ["title" => "Change Password"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if($_POST["password"] == null || $_POST["confirmation"] == null || $_POST["oldpass"] == null) apologize("Please fill all fields.");
        else if($_POST["password"] != $_POST["confirmation"]) apologize("New Password didn't match!");
        else if(strlen($_POST["password"]) < 4) apologize("Please choose a longer password ( x > 3 )"); 
        $rows = CS50::query("SELECT hash FROM account WHERE id = ?", $_SESSION["id"]);
        if (password_verify($_POST["oldpass"], $rows[0]["hash"]))
        {
            CS50::query("UPDATE account SET hash = ? WHERE id = ?",password_hash($_POST["password"], PASSWORD_DEFAULT) ,$_SESSION["id"]);
            redirect("/");
        }
        else apologize("Incorrect Old Password");

    }

?>
