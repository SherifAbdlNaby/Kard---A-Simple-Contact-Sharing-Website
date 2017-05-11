<form action="register.php" method="post">
    <fieldset>
        <h1>Create your own personal Kard!</h1>
        </br>
        <div class="form-group">
            <input autocomplete="on" autofocus class="form-control" name="username"  required="required" placeholder="Username" type="text"/>
        </div>
        <div class="form-group">
            <input autocomplete="on" autofocus class="form-control" name="name" required="required" placeholder="Full Name" type="text"/>
            <h6>e.g (john smith)</h6>
        </div>
        
        <div class="form-group">
            <input autocomplete="on" autofocus class="form-control" name="email" placeholder="Email"  required="required"type="email"/>
            <input autocomplete="on" autofocus class="form-control" name="emailagain"  required="required" placeholder="Email (again)" type="email"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="password" placeholder="Password"  required="required" type="password"/>
            <input class="form-control" name="confirmation" placeholder="Password (again)"   required="required"type="password"/>
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span> Register!
            </button>
        </div>

    </fieldset>
</form>
<div><h5>
    or <a style="color:white; text-decoration: underline;" href="login.php">log in</a></h5>
</div>
