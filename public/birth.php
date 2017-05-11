
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
    $x = CS50::query("SELECT hideBirth FROM account WHERE id = ?", $_SESSION["id"]);
    if($x[0]["hideBirth"]) $x[0]["hideBirth"] = false;
    else $x[0]["hideBirth"] = true;
    CS50::query("UPDATE account SET hideBirth = ? WHERE id = ?", $x[0]["hideBirth"], $_SESSION["id"]);
    redirect("/p.php?n=".$_SESSION["username"]);
        
        
    }

?>
