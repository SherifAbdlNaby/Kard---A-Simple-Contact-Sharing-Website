
<?php

    // configuration
    require("../includes/config.php");
?>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        if($_POST["username"] == null || $_POST["password"] == null || $_POST["confirmation"] == null || $_POST["email"] == null || $_POST["emailagain"] == null || $_POST["name"]== null) apologize("Please fill all forms");
        else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) apologize("Sorry, Invalid Email formate");
        else if (!preg_match("/^[a-zA-Z\-\ ]+$/",$_POST["name"])) apologize("Sorry!, Name can only consist of Letters and Spaces (Symbols and Digits are not allowed)");
        else if ($_POST["password"] != $_POST["confirmation"]) apologize("Passwords are not the same!");
        else if ($_POST["email"] != $_POST["emailagain"]) apologize("Emails are not the same!");
        else if (strlen($_POST["username"]) > 18 || strlen($_POST["username"]) < 3) apologize("Username cannot be longer than 18 letter or less than 3");
        else if (strlen($_POST["name"]) > 60 || strlen($_POST["name"]) < 2) apologize("Sorry! Name cannot be less than two letters or more than 60");
        else if (strlen($_POST["username"]) < 2) apologize("Username can't be less than 2 digits");
        else if ( !ctype_alnum( $_POST["username"] )) apologize("Username can consist of only Letters & Numbers");
        else {
                   if(CS50::query("INSERT IGNORE INTO account (username, hash, email, name) VALUES(?, ?, ?, ?)",
                   $_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT), $_POST["email"], ucwords($_POST["name"]) )==0) apologize("Username or Email Already Exist!");
                   $rows = CS50::query("SELECT LAST_INSERT_ID() AS id");
                   $id = $rows[0]["id"];
                   $_SESSION["id"] = $id;
                   $_SESSION["username"] = $_POST["username"];
                   $_SESSION["complete"] = 0;
                   $_SESSION["name"] = ucwords($_POST["name"]);
                   CS50::query("INSERT IGNORE INTO networks (id) VALUES(?)",$_SESSION["id"]);
                   redirect("/registerComp.php");
                   
        }
        
    }

?>
