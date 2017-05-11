
<?php

    // configuration
    require("../includes/config.php");
?>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        if ($_SESSION["complete"]) redirect("/");
        else render("register_comp.php", ["title" => "Register"]);
    }
    
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
             if(CS50::query("UPDATE account SET work = ?, education = ?, day= ?, month= ?, year= ?, country= ?, city= ?, address= ?, mobile= ?, telephone= ?, gender= ?, relationship=?, hideBirth= ? WHERE id = ?",
              $_POST["work"],$_POST["education"],$_POST["day"],$_POST["month"],$_POST["year"],$_POST["country"],$_POST["city"],$_POST["address"],$_POST["mobile"],$_POST["telephone"], $_POST["gender"], $_POST["relationship"],$_POST["showBirth"], $_SESSION["id"])==0) apologize("Sorry an error has occured! #6800!");
             if(CS50::query("UPDATE networks SET facebook=?, youtube=?, twitter=?, linkedin=?, pintrest=?, behance=?, tumblr=?, instagram=?,reddit=?, vk=?, vine=?, soundcloud=?, snapchat=?, quora=? WHERE id = ?",
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
                   $_SESSION["id"])==0) apologize("Sorry an error has occured! #6801!");
              $_SESSION["complete"]=1;
              $_SESSION["complete1"]=0;
              redirect("/photo.php");
    }
        

?>
