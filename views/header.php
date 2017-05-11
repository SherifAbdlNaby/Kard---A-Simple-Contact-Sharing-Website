<!DOCTYPE html>

<html>

    <head>

        <!-- http://getbootstrap.com/ -->
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>

        <link href="/css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title><?= htmlspecialchars($title) ?>  :: Kard</title>
        <?php else: ?>
            <title>Kard</title>
        <?php endif ?>

        <!-- https://jquery.com/ -->
        <script src="/js/jquery-1.11.3.min.js"></script>

        <!-- http://getbootstrap.com/ -->
        <script src="/js/bootstrap.min.js"></script>

        <script src="/js/scripts.js"></script>

    </head>

    <body>

        <div id="top">
            <div class="head">
                <div class="col-sm-12">
                <div class="col-sm-6" style="top:5px; width: 30%; margin-right: 30px;">
                    <a class="logo"href="/"><img  alt="Kard" src="/img/logosmall.jpg"/></a>
                </div>
                    <?php if (! empty($_SESSION["id"]) ): ?>
            <div class="col-sm-8" style=" margin-top: 30px;  text-align: right; ">
                <div class="bar" >
                        <ul class="nav nav-pills" style=" text-align: left; ">
                            <li><a href="p.php?n=<?=$_SESSION["username"]?>"><span style="margin-right: 4px;" class="glyphicon glyphicon-user"></span><b> <?=$_SESSION["name"]?></b> </a></li>
                            <li><a href="/"><span style="margin-right: 4px;" class="glyphicon glyphicon-search"></span>Search</a></li>
                            <li><a href="account.php"><span style="margin-right: 4px;" class="glyphicon glyphicon-pencil"></span>My Account</a></li>
                            <li><a href="logout.php"><span style="margin-right: 4px;" class="glyphicon glyphicon-log-out"></span>Log Out</a></li>
                        </ul>
                    <?php else : ?>
            <div class="col-sm-8" style=" margin-top: 30px; left: 20px; text-align: right; ">
                <div class="bar">
                        <ul  class="nav navbar-nav navbar-right">
                          <li><a href="register.php"><span style="margin-right: 4px;" class="glyphicon glyphicon-user"></span>  Register</a></li>
                          <li><a href="login.php"><span style="margin-right: 4px;" class="glyphicon glyphicon-log-in"></span>  Login</a></li>
                        </ul>
                    <?php endif ?>
                </div>
                </div>
                </div>
                
            </div>
            
        </div>
            
        
        
        <div class="container">

            <div id="middle">
