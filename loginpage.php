<!DOCTYPE html>

<head>
    <meta charset='utf-8'>
    <title>LoginForm</title>
    <link rel='stylesheet' href='css/style.css'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>


    <!-- Custom fonts for this template-->
    <link href="css/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap/bootstrap.bundle.js" rel="stylesheet">
    <link href="css/bootstrap/bootstrap.bundle.min.js" rel="stylesheet">


</head>

<body>
    <h1>Paperless Invertory Card Sheet System</h1>
    <div class='wrapper'>
        <div class='titlelogin'>LOGIN HERE</div>
        <p style="color:red;"><?php Errormessage() ?></p>
        <div class='title-text'></div>
        <div class='form-container'>
            <div class='form-inner'>
                <form action='includes/user.php' method='post'>
                    <div class='field'>
                        <input type='text' placeholder='Email' name='email' required>
                    </div>
                    <div class='field'>
                        <input type='password' placeholder='Password' name='password' required>
                    </div>
                    <br>
                    <div class='field btn'>
                        <div class='btn-layer'></div>
                        <input type='submit' value='Login' name='fn'>
                    </div>
                    <div class='signup-link'>Not a member? <a text-color='black' href='?page=register'>Register Here</a></div>
                </form>
            </div>
        </div>
</body>

</html>