<?php
    include("../api/CRUD.php");
    include("head.php");
    include("nav.php");
?>
    <body>
    <div class="login-form">
        <form action="../repository/login.php" method="post">
            <h2 class="text-center">Log in</h2>
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary btn-block">Log in</button>
            </div>
            <div class="clearfix">
                <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
                <a href="#" class="float-right">Forgot Password?</a>
            </div>
        </form>
        <p class="text-center"><a href="#">Create an Account</a></p>
    </div>
    </body>
<?php
    include("footer.php");
?>