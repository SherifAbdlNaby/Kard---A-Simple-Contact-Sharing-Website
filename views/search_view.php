<script type="text/javascript">
    $(document).ready(function(){
    $('table tr').click(function(){
        window.location = $(this).attr('href');
        return false;
    });
});
</script>

<div id= "centero">
    <h1> Search for people ! </h1>
    <form class="navbar-form" role="search" action="u.php" method="get">
        <div style="width:70%;" class="input-group">
            <input style="width:101%; height: 60px;" type="text" class="form-control" value="<?= $search ?>" placeholder="Search for people!  e.g(Name, Handle, Email, Mobile, Telephone)" name="name" id="srch-term">
            <div class="input-group-btn">
                <button  style=" width: 100%; height: 60px;" class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
    </form>
 </br>
 </br>
<?php

if ($data == null):{print("<h1>Sorry!, Nothing found !<h1> ");}
?> 

<?php else: ?>

    <div id="table">
        <div class="datagrid"><table>
        <thead><tr><th>Profile</th><th>Name</th><th>Email</th><th>Handle</th><th>#</th></tr></thead>
        <tbody>
        <?php
        $count = 1;
        foreach ($data as $row)
        {
            if($row["img"] == "" || $row["img"] == null ) $row["img"] = "img/pp.jpg";
            if(!($count%2))
            {
                print ('<tr style="cursor: pointer;" href="p.php?n='.$row["username"].'"><td>'."<img style='width:40px;'src=".$row["img"]."></img>"."</td><td style='font-weight: bold;'>".$row["name"]."</td><td>".$row["email"]."</td><td style='color: rgb(42, 189, 243);'>@".$row["username"]."</td><td>".$count."</td></tr>");
            }
            else 
            {
                print ('<tr class="alt" style="cursor: pointer;" href="p.php?n='.$row["username"].'"><td>'."<img style='width:40px;'src=".$row["img"]."></img>"."</td><td style='font-weight: bold;'>".$row["name"]."</td><td>".$row["email"]."</td><td style='color: rgb(42, 189, 243);'>@".$row["username"]."</td><td>".$count."</td></tr>");
            }
            $count++;
            
            
        }
           
        
?>
        </tbody>
        </table>
        </div>
    </div>
</div>
 <?php endif ?>