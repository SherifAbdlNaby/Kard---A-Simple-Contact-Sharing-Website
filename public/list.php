
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
    $x = CS50::query("SELECT indexed FROM account WHERE id = ?", $_SESSION["id"]);
    if($x[0]["indexed"]) $x[0]["indexed"] = false;
    else $x[0]["indexed"] = true;
    CS50::query("UPDATE account SET indexed = ? WHERE id = ?", $x[0]["indexed"], $_SESSION["id"]);
    redirect("/account.php");
        
        
    }

?>
