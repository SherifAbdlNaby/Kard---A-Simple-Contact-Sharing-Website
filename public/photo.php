
<?php

    // configuration
    require("../includes/config.php");
?>

<?php 
       
        $data = CS50::query("SELECT cover,img FROM account WHERE id = ?",$_SESSION["id"]);
        if($data[0]["cover"] == null || $data[0]["cover"] == "") { $style = ""; $cover="0";}
        else {$style = 'text-shadow: 0px 0px 8px rgba(0, 0, 0, 0.68);'; $cover = $data[0]["cover"];}
        if($data[0]["img"] == null || $data[0]["img"] == "" ) {render("photo.php", ["title" => "Profile Picture", "cover" => $cover, "img" => "img/default.png" ]);}
        else render("photo.php", ["title" => "Profile Picture", "cover" => $cover, "img" => $data[0]["img"] , "style" => $style  ]);
?>
