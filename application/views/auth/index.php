<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Cubeacon Attendance</title>
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-color: #999;

        }

        div,
        body {
            margin: 0;
            padding: 0;

        }

        .wrapper {
            height: 100%;
            width: 100%;
        }
    </style>

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #17a2b8;
            height: 100vh;
        }

        #login .container #login-row #login-column #login-box {
            margin-top: 180px;
            max-width: 600px;
            height: 400px;
            border: 1px solid #9C9C9C;
            background-color: #EAEAEA;
        }

        #login .container #login-row #login-column #login-box #login-form {
            padding: 20px;
        }

        #login .container #login-row #login-column #login-box #login-form #register-link {
            margin-top: -85px;
        }
    </style>
</head>
<!---->

<body>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login Skuy</h3>
                            <?= $this->session->flashdata('message'); ?>
                            <div class="form-group">
                                <label for="username" class="text-info">Username :</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password :</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"> 
                                    <span><input id="remember-me" name="remember-me" type="checkbox"></span>
                                    <span>Remember me</span>
                                </label>
                                <div class="container">
                                    <div class="row">
                                        <div class="col text-center">
                                            <input class="btn btn-primary" type="submit" value="Login">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>