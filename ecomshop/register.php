<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--box icon link-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/boxicons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Register page</title>
</head>

<body>
    <section class ="form-container">
        <form method="post">
            <h1>Register Now</h1>
            <input type="text" name ="name" placeholder ="enter your name" required>
            <input type="email" name ="email" placeholder ="enter your email" required>
            <input type="password" name ="password" placeholder ="password" required>
            <input type="password" name ="cpassword" placeholder ="confirm password" required>
            <input type="submit" name ="sumbit-btn" required>
            <p>already have an account ? <a href="login.php">Login Now</a></p>
        </form>

    </section>
    
</body>
</html>