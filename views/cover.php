<div class="coverphoto" style="background-image: url('<?= $cover ?>');"></div>
<?php if($cover != "0") print("</br>  </br>"); ?> 
<div style="display: inline-block;">
    <div id="profile-pic-wrap">
      <div id="profile-pic">
          <img src="<?= $img ?>"></img>
      </div>
</div>
    
    <h1 style="<?= $style?>"><?= $_SESSION["name"] ?> </h1>
 <?php if($cover != "0") print("</br>  </br>  </br>  </br>"); ?> 
<form action="uploadcover.php" method="post" enctype="multipart/form-data">
    <h4>Select Cover photo to upload:</h4>
    <input type="file" class="btn btn-default" name="fileToUpload" id="fileToUpload"></br>
    <input type="submit" class="btn btn-default" value="Upload Image" name="submit">
</form>

</div>