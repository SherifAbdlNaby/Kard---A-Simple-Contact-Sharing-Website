
<?php

    // configuration
    require("../includes/config.php");
    function ageCalculator($dob){
    if(!empty($dob)){
        $birthdate = new DateTime($dob);
        $today   = new DateTime('today');
        $age = $birthdate->diff($today)->y;
        return $age;
    }else{
        return 0;
    }
}
?>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        if(empty($_GET["n"])) redirect("/");
        else {
            $account = CS50::query("SELECT * FROM account WHERE username = ?",$_GET["n"]);
            if($account == null) apologize("USER NOT FOUND");
            else
            {
                $accounts = $account[0];
                $networks = CS50::query("SELECT * FROM networks WHERE id = ?",$account[0]["id"]);
                $info = CS50::query("SELECT email,gender,mobile,telephone,work,education,relationship FROM account WHERE username = ?",$_GET["n"]);
                $loc = CS50::query("SELECT country,city,address FROM account WHERE username = ?",$_GET["n"]);
                $age1["age"]=null;
                if((!$accounts["hideBirth"]) && $accounts["day"] && $accounts["month"] )
                {
                  $age = CS50::query("SELECT day,month,year FROM account WHERE username = ?",$_GET["n"]);
                  if($age[0]["day"] < 10) $age[0]["day"]= "0".$age[0]["day"];
                  $dob = $age[0]["day"]." / ".$age[0]["month"]." / ".$age[0]["year"]; 
                  $dob1 =$age[0]["year"].$age[0]["day"].$age[0]["month"];
                  $age1["age"] = ageCalculator($dob1);
                  $age1["birthday"] = $dob;
                }
                if( $accounts["img"]==NULL || $accounts["img"]=="")
                    { $accounts["img"] = "img/default.png"; }
                
                
                if( $accounts["cover"]==NULL || $accounts["cover"]=="" )
                    {
                      $style = "";
                    }
                    else $style = "text-shadow: 0px 0px 8px rgba(0, 0, 0, 0.68);";
                
                
                
                foreach ($networks[0] as $key => $value) {
                    if( !islink($networks[0][$key]) && ( $value != "" && $value != " " && $value != NULL && $key != "id") ) 
                    {
                        if($networks[0][$key]{0} == '@') { $value = substr($value,1);}
                        $networks[0][$key] = "https://www.".$key.".com/".$value;
                    }
                }
                
                
                
                
                render("profile_view.php", ["title" => $accounts["name"], "account" => $accounts , "networks" => $networks[0] , "info" => $info[0], "loc" => $loc[0], "age" => $age1, "style" => $style ]);
            }
        }
    }
?>
