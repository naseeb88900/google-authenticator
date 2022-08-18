<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Google Two Factor Authentication Login with PHP</title>
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
                <div class="form-area register-from">
                    <div class="form-content">
                        <h2>Google Two Factor Authentication</h2>
                    </div>
                    <div class="form-input">
                        <h2>register form</h2>
                        <form name="reg" action="register_process.php" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="fname" id="fname" required />
                                        <label>First name</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="lname" id="lname" required  />
                                        <label>last name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="email" required />
                                <label>Email Address</label>
                            </div>
                            <div class="form-group">
                                <input type="text" name="username" id="username" required>
                                <label>Username</label>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" required>
                                <label>Password</label>
                            </div>

                            <div class="a2z-button">
                                <button type="submit" name="submit" class="a2z-btn">Create account</button>
                            </div>
                            <div class="form-text text-center">
                                <span>Already registered?  <a href="index.php">Sign In</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="assets/js/jquery-1.12.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>