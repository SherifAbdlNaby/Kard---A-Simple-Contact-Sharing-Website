
<?php

    // configuration
    require("../includes/config.php");
?>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        redirect("/account.php");
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        
            if($_POST["name"]==""  || $_POST["email"] =="") apologize("Name, Username, Mail cannot be blank! #6800!");
            else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) apologize("Sorry, Invalid Email formate");
            else if (!preg_match("/^[a-zA-Z\-\ ]+$/",$_POST["name"])) apologize("Sorry!, Name can only consist of Letters and Spaces (Symbols and Digits are not allowed)");
            else if (strlen($_POST["name"]) > 60 || strlen($_POST["name"]) < 2) apologize("Sorry! Name cannot be less than two letters or more than 60");
             if(CS50::query("UPDATE account SET  name = ?, email = ?, work = ?, education = ?, day= ?, month= ?, year= ?, country= ?, city= ?, address= ?, mobile= ?, telephone= ?, gender= ?, relationship=? WHERE id = ?",
              $_POST["name"],
              $_POST["email"],              
              $_POST["work"],
              $_POST["education"],
              $_POST["day"],
              $_POST["month"],
              $_POST["year"],
              $_POST["country"],
              $_POST["city"],
              $_POST["address"],
              $_POST["mobile"],
              $_POST["telephone"],
              $_POST["gender"], 
              $_POST["relationship"],
              $_SESSION["id"])==0) {$_SESSION["name"] = $_POST["name"]; redirect("/");}
              $_SESSION["name"] = $_POST["name"];
              redirect("/account.php");
              
            
            
            

        
        
    }

?>
