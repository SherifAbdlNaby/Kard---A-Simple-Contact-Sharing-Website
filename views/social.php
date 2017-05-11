
<form class="form-group" action="networksedit.php" method="post">
    <fieldset>

        <h1>Edit Social Networks</h1>
        </br>
         <div class="form-group">
            <img src="/img/facebook.png"></img>
            <input autocomplete="off" autofocus class="form-control" value="<?= $network["facebook"] ?>" name="facebook" placeholder="Facebook" type="text"/>
            <span class="eta"></span>            
            <img src="/img/twitter.png"></img>
            <input autocomplete="off" autofocus class="form-control" value="<?= $network["twitter"] ?>" name="twitter" placeholder="Twitter" type="text"/>
        </div>     
   

        <div class="form-group">
            <img src="/img/instagram.png"></img>
            <input autocomplete="off" autofocus class="form-control" value="<?= $network["instagram"] ?>" name="instagram" placeholder="Instagram" type="text"/>
            <span class="eta"></span>            
            <img src="/img/snapchat.png"></img>
            <input autocomplete="off" autofocus class="form-control" value="<?= $network["snapchat"] ?>" name="snapchat" placeholder="Snapchat" type="text"/>
        </div>
        
        
        <div class="form-group">
            <img src="/img/behance.png"></img>
            <input autocomplete="off" autofocus class="form-control" value="<?= $network["behance"] ?>" name="behance" placeholder="Behance" type="text"/>
            <span class="eta"></span>
            <img src="/img/soundcloud.png"></img>
            <input autocomplete="off" autofocus class="form-control" value="<?= $network["soundcloud"] ?>"name="soundcloud" placeholder="Soundcloud" type="text"/>
        </div> 
        
        
        <div class="form-group">
            <img src="/img/reddit.png"></img>
            <input autocomplete="off" autofocus class="form-control" value="<?= $network["reddit"] ?>"  name="reddit" placeholder="reddit" type="text"/>
            <span class="eta"></span>
            <img src="/img/quora.png"></img>
            <input autocomplete="off" autofocus class="form-control" name="quora" value="<?= $network["quora"] ?>" placeholder="Quora" type="text"/>
        </div> 
        
        <div class="form-group">
            <img src="/img/vine.png"></img>
            <input autocomplete="off" autofocus class="form-control" name="vine" value="<?= $network["vine"] ?>" placeholder="Vine" type="text"/>
            <span class="eta"></span>
            <img src="/img/vk.png"></img>
            <input autocomplete="off" autofocus class="form-control" name="vk" placeholder="Vk" value="<?= $network["vk"] ?>" type="text"/>
        </div> 
        <div class="form-group">
            <img src="/img/youtube.png"></img>
            <input autocomplete="off" autofocus class="form-control" name="youtube" placeholder="Youtube" value="<?= $network["youtube"] ?>" type="text"/>
            <span class="eta"></span>
            <img src="/img/tumblr.png"></img>
            <input autocomplete="off" autofocus class="form-control" name="tumblr" placeholder="Tumblr" value="<?= $network["tumblr"] ?>" type="text"/>
        </div> 

        <div class="form-group">
            
            <img src="/img/linkedin.png"></img>
            <input autocomplete="off" autofocus class="form-control" name="linkedin" placeholder="LinkedIn" value="<?= $network["linkedin"] ?>" type="text"/>
            <span class="eta"></span>
            <img src="/img/pintrest.png"></img>
            <input autocomplete="off" autofocus class="form-control" name="pintrest" placeholder="Pinterest" value="<?= $network["pintrest"] ?>" type="text"/>
        </div> 
        
        </br>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-pencil"></span>
                 Save
            </button>
        </div>
    </fieldset>
    
    
</form>


