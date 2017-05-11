<div class="coverphoto" style="background-image: url('<?= $account["cover"] ?>');"></div>
<div class="col-sm-12" style="">    
      <div id="profile-pic1">
          <img src="<?= $account["img"] ?>"></img>
      </div>
</div>
    
<div class="col-sm-12" style="<?= $style?>">    
<h1   > <?= $account["name"] ?> </h1>
<h5  > @<?= $account["username"]?></h5>
</div>

<div class="infofield1">
    <div class="infofield">
        <div class="container-fluid">
                <div class="col-sm-12"><h2 style="text-align: left; color: #7d7d7d;">Basic Information</h2></br></div>
                <?php $count =0; ?>
                <?php foreach($info as $key => $row):  ?>
        
                    <?php if ( $row != "" && $row != " " && $row != NULL && $key!="hash" && $key != "id" && $key != "gender" ): $count++;  ?>
                    <div class="col-sm-6" >
                      <p style="text-align: left;"> <img src="img/<?=$key?>.png"/> <?= ucfirst($key).": ". ucfirst($row) ?> </p>
                    </div>
                    <?php elseif ( $key == "gender" && ( $row != "" || $row != NULL) ):?>
                    <div class="col-sm-6" >
                      <p style="text-align: left;"> <img src="img/<?=$row?>.png"/> <?=ucfirst($row) ?> </p>
                    </div>
                    <?php endif; ?>
         
                <?php endforeach; ?>
                <?php if($count%2)print('<div class="col-sm-6"><p>-</p></div>')?>
                
                
                <?php $count =0; ?>
                <?php foreach($loc as $key => $row):  ?>
        
                    <?php if ( $row != "" && $row != " " && $row != NULL && $key!="hash" && $key != "id" ): $count++;  ?>
                    <div class="col-sm-6" >
                      <p style="text-align: left;"><img src="img/<?=$key?>.png"/> <?= ucfirst($key).": ". ucfirst($row) ?> </p>
                    </div>
                    <?php endif; ?>
         
                <?php endforeach; ?>

                <?php foreach($age as $key => $row):  ?>
        
                    <?php if ( $row != "" && $row != " " && $row != NULL && $key!="hash" && $key != "id" ): ?>
                    <div class="col-sm-6" >
                      <p style="text-align: left;"><img src="img/<?=$key?>.png"/> <?= ucfirst($key).": " . ucfirst($row) ?> </p>
                    </div>
                    <?php endif; ?>
         
                <?php endforeach; ?>



                
                
                
        </div>
        
        <div class="container-fluid">
            <?php
            $pass = false;
                foreach($networks as $key => $row){
                if ( $row != "" && $row != " " && $row != NULL && $key != "id") $pass = true;
                }
            if($pass) print('<div class="col-sm-12"><h2 style="text-align: left;     color: #7d7d7d;">Social Networks</h2></br></div>');
            ?>

            <?php foreach($networks as $key => $row): ?>
                
                <?php if ( $row != "" && $row != " " && $row != NULL && $key != "id"): $count++;  ?>
                <?php $linko = "https://www.".$key.".com/"; $handle = substr($row,strlen($linko)); if($key == "facebook" || $key == "twitter" || $key == "snapchat" ||$key == "instagram") $handle = "@".$handle; ?>
                <div class="col-sm-6" style="text-align: -webkit-auto; ">
                 <p> <img style="margin-right: 5px;" src="/img/<?=$key?>.png"></img>  <a href="<?=$row?>"><?= $handle ?> </p></a>
                </div>
                
            <?php endif; ?>
            <?php endforeach; ?>
            
        </div>
        </br>
        
        
        
    </div>