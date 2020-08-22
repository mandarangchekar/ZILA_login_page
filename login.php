<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>User Login and Sign Up</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="login-box">


            <div class="row">
                <div class="col-md-6 login-left">
                    <h2>Login Here</h2>


                    <form class="" action="validation.php" method="post">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="user" class="form-control" required value="">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" required value="">
                        </div>
                        
                        <button type="submit" class="btn btn-primary" name="button">Login</button>

                    </form>

                </div>
                <div class="col-md-6 login-right">
                    <h2>Sign Up Here</h2>
                    <form class="" action="registration.php" method="post">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="user" class="form-control" required value="">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" required value="">
                        </div>
                        <button type="submit" class="btn btn-primary" name="button">Sign Up</button>

                    </form>

                </div>

            </div>
            </div>

        </div>

    </body>
</html>
