
<?php

    // configuration
    require("../includes/config.php");
?>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        if(empty($_GET["name"])) redirect("/");
        else {
        $var = "%". $_GET["name"] ."%";
        $data1 = CS50::query("SELECT name,username,email,img FROM account WHERE (name LIKE ? OR username LIKE ? OR email = ? OR mobile = ? OR telephone = ?) AND indexed = 1", $var, $var, $_GET["name"],$_GET["name"],$_GET["name"]);
        render("search_view.php", ["title" => "Search", "data" => $data1, "search" => $_GET["name"]]);
    }
    }
?>
