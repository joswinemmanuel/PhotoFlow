<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link href="css/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    </head>
    <body class="no-padding">
        <main class="login">
            <section class="login__column">
                <div class="login__section login__sign-in">
                    <img 
                        src="images/photoflow_2.png"
                        alt="Logo"
                        title="Logo"
                        class="login__logo"
                    />
                    <form action="login.php" method ="POST" class="login__form"> 
                        <div class="login__input-container">
                            <input 
                                type="text"
                                name="username"
                                placeholder="Username"
                                required
                                class="login__input"
                            />
                        </div>
                        <div class="login__input-container">
                            <input 
                                type="password"
                                name="password"
                                placeholder="Password"
                                required
                                class="login__input" 
                            />
                        </div>
                        <div class="login__input-container">
                            <input
                                type="submit"
                                value="Log in"
                                class="login__input login__input--btn"
                            />
                        </div>
                    </form>
                </div>
                <div class="login__section login__sign-up">
                    Don't have an account? &nbsp &nbsp
                    <a href="registration.php" class="login__input--btn">
                        Sign up
                    </a>
                </div>
            </section>
        </main>
        <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
        <script src="js/app.js"></script>
    </body>
</html>