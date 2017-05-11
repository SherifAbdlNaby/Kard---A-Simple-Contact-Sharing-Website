<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        $data = CS50::query("SELECT * FROM account WHERE id = ?",$_SESSION["id"]);
        $network = CS50::query("SELECT * FROM networks WHERE id = ?",$_SESSION["id"]);

        if($data[0]["cover"] == null || $data[0]["cover"] == "") { $style = ""; $cover="0";}
        else {$style = 'text-shadow: 0px 0px 8px rgba(0, 0, 0, 0.68);'; $cover = $data[0]["cover"];}
        if($data[0]["img"] == null || $data[0]["img"] == "" )
        {render("account_form.php", ["title" => "Edit Account", "cover" => $cover, "img" => "img/default.png", "data" => $data[0], "network" => $network[0] ]);}
        else render("account_form.php", ["title" => "Edit Account", "cover" => $cover, "img" => $data[0]["img"] , "style" => $style  , "data" => $data[0], "network" => $network[0]]);
    }

?>
