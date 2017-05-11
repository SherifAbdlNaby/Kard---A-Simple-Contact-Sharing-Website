
<?php

    // configuration
    require("../includes/config.php");
?>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $networks = CS50::query("SELECT * FROM networks WHERE id = ?",$_SESSION["id"]);
        render("social.php", ["title" => "Edit Social Networks", "network" => $networks[0]]);
    }
    
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
             CS50::query("UPDATE networks SET facebook=?, youtube=?, twitter=?, linkedin=?, pintrest=?, behance=?, tumblr=?, instagram=?,reddit=?, vk=?, vine=?, soundcloud=?, snapchat=?, quora=? WHERE id = ?",
                   $_POST["facebook"],
                   $_POST["youtube"],
                   $_POST["twitter"],
                   $_POST["linkedin"],
                   $_POST["pintrest"],
                   $_POST["behance"],
                   $_POST["tumblr"],
                   $_POST["instagram"],
                   $_POST["reddit"],
                   $_POST["vk"],
                   $_POST["vine"],
                   $_POST["soundcloud"],
                   $_POST["snapchat"],
                   $_POST["quora"],
                   $_SESSION["id"]);
              redirect("/p.php?n=".$_SESSION["username"]);
    }
        

?>
