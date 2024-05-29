<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="css/style2.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body id="loginbg">
    <div class="container">
        <div class="row">
            <div class="sidebar">
                <img src="gambar/logosd.png" alt="" height="250" width="250" />
            </div>
            <div class="login">
                <div class="wadahlogin">
                    <h1 class="text-dark">LOGIN</h1>
                    <div class="form">
                        <form action="#">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" required />
                            <br />
                            <br />
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" required />
                            <br />
                            <br />
                            <a id="buttonlogin" href="dashboard.php">Login</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>