<!DOCTYPE html>
<html lang="en">
    <?php 
        if(isset($_GET['reg'])){
            if($_GET['reg'] == '0'){
                echo '<script language="javascript">';
                echo 'alert("Username Found! Choose another username.")';
                echo '</script>';
            }
        }
    ?>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
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
                        alt="logo"
                        title="logo"
                        class="login__logo"
                    />
                    <form action="create_account.php" class="login__form" method="post" enctype="multipart/form-data">
                        <div class="edit-profile__form-row">
                            <label for="username" class="edit-profile__label">
                                Username
                            </label>
                            <input 
                                type="text"
                                id="username"
                                name = "username"
                                class="edit-profile__input"
                                required
                            />
                        </div>
                        <div class="edit-profile__form-row">
                            <label for="profilename" class="edit-profile__label">
                                Profile Name
                            </label>
                            <input 
                                type="text"
                                name="profilename"
                                class="edit-profile__input"
                                id="phone-number"
                                required
                            />
                        </div>
                        <div class="edit-profile__form-row">
                            <label for="password" class="edit-profile__label">
                                Password
                            </label>
                            <input
                                type="password"
                                id="password"
                                name = "password"
                                class="edit-profile__input"
                                required 
                                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" 
                            />
                        </div>
                        <div class="edit-profile__form-row">
                            <label for="bio" class="edit-profile__label">
                                Bio
                            </label>
                            <textarea id="bio" name ="bio" class="edit-profile__textarea"></textarea>
                        </div>
                        <div class="edit-profile__form-row">
                            <label for="email" class="edit-profile__label">
                                Email
                            </label>
                            <input 
                                type="email"
                                class="edit-profile__input"
                                id="email"
                                name ="email"
                                required
                            />
                        </div>
                        <div class="edit-profile__form-row">
                            <label for="image" class="edit-profile__label">
                                Profile Image
                            </label>
                            <input type="file" name="image" id="image" />  
                        </div>

                            <label class="edit-profile__label"></label>
                            <input type="submit" id="register" name="register" value="Register" class="login__input login__input--btn">
                    </form>
                </div>
            </section>
        </main>

        <nav class="login">
            <a href="index.php">
                <img 
                    src="images/favicon.ico"
                    alt="logo"
                    title="logo"
                    class="navigation__logo"
                />
            </a>
        </nav>
        <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
        <script src="js/app.js"></script>
        <script src="js/loadpic.js"></script>
    </body>
</html>