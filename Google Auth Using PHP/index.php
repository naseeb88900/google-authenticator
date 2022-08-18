<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login/ Registration Form</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/layout.css">
    <link rel="stylesheet" href="assets/css/form-design.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
</head>
<body class="a2z-wrapper">

<!--Start a2z-area-->
<section class="a2z-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="form-area login-form">
                    <div class="form-content">
                        <h2>Google Two Factor Authentication</h2>
                    </div>
                    <div class="form-input">
                        <h2>Login Form</h2>
                        <form name="reg" action="login_process.php" method="POST">
                            <div class="form-group">
                                <input type="text" name="username" id="username"  required>
                                <label>Username</label>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password"  required>
                                <label>Password</label>
                            </div>
                            <div class="a2z-button">
                                <button class="a2z-btn">Login</button>
                            </div>

                            <div class="form-text text-center">
                                Not registered? <a href="register.php">Create an account </a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--End a2z-area-->
<!-- jquery  -->
<script src="assets/js/jquery-1.12.4.min.js"></script>
<!-- Bootstrap js  -->
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>