<?php
include_once '../Model/Utilisateur.php';
include_once '../Controller/UtilisateurC.php';

$error = "";

// create user
$user = null;

// create an instance of the controller
$userC = new UtilisateurC();
if (
    isset($_POST["nom"]) && 
    isset($_POST["prenom"]) &&
    isset($_POST["email"]) && 
    isset($_POST["age"]) && 
    isset($_POST["password"])
) {
    if (
        !empty($_POST["nom"]) && 
        !empty($_POST["prenom"]) && 
        !empty($_POST["email"]) && 
        !empty($_POST["age"]) && 
        !empty($_POST["password"])
    ) {
        $user = new Utilisateur(
            $_POST['nom'],
            $_POST['prenom'], 
            $_POST['email'],
            $_POST['age'],
            $_POST['password']
        );
        $userC->ajouterUtilisateur($user);
        header('Location:afficherUtilisateurs.php');
    }
    else
        $error = "Missing information";
}


?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="wrapper">
        <div class="title-text">
            <div class="title login">
                Login Form</div>
            <div class="title signup">
                Signup Form</div>
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Signup</label>
                <div class="slider-tab">
                </div>
            </div>
            <div class="form-inner">
                <form action="#" class="login">
                    <div class="field">
                        <input type="text" placeholder="Email Address" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Password" required>
                    </div>
                    <div class="pass-link">
                        <a href="#">Forgot password?</a></div>
                    <div class="field btn">
                        <div class="btn-layer">
                        </div>
                        <input type="submit" value="Login">
                    </div>
                    <div class="signup-link">
                        Not a member? <a href="">Signup now</a></div>
                </form>
                <form action="" class="signup" method="POST">
                    <div class="field">
                        <input input type="email" name="email" id="email" pattern=".+@gmail.com|.+@esprit.tn" placeholder="Email Address" required>
                    </div>
                    <div class="field">
                        <input type="text" name="nom" id="nom" maxlength="20" placeholder="name" required>
                    </div>
                    <div class="field">
                        <input type="text" name="prenom" id="prenom" maxlength="20" placeholder="last name" required>
                    </div>
                    <div class="field">
                        <input type="text" name="age" id="age" placeholder="age" required>
                    </div>
                    <div class="field">
                        <input type="password" name="password" id="password" placeholder="password" required>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer">
                        </div>
                        <input type="submit" value="Signup">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        const loginText = document.querySelector(".title-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.signup");
        const signupLink = document.querySelector("form .signup-link a");
        signupBtn.onclick = (() => {
            loginForm.style.marginLeft = "-50%";
            loginText.style.marginLeft = "-50%";
        });
        loginBtn.onclick = (() => {
            loginForm.style.marginLeft = "0%";
            loginText.style.marginLeft = "0%";
        });
        signupLink.onclick = (() => {
            signupBtn.click();
            return false;
        });
    </script>

</body>

</html>