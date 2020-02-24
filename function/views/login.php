<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-xs-6">
            <form method="post" action="?route=listing">
                <div class="form-group">
                    <input class="form-control" type="text" name="username" placeholder="Username"/>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password"/>
                </div>
                <?php if(isset($_SESSION['login_err'])):?>
                <p style="color: red"><?php echo $_SESSION['login_err'];?></p>
                <?php $_SESSION['login_err']=null; endif;?>
                <div class="form-group">
                    <button type="submit" class="btn btn-danger">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
