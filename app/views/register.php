<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            box-sizing: border-box;
            font-weight: bold;
        }
        body {
            background-color:antiquewhite;
        }
        .card-header {
            background-color: #ccbca4;
            color: black;
        }
        .card-icon {
            margin-left: 0.5vw;
            margin-right: 0.5vw;
        }
    </style>
</head>
<body>

<div class="position-absolute top-50 start-50 translate-middle">
    <div class="container-fluid">
        <div class="card">
            <h5 class="card-header text-center">
            <i class="card-icon fa-solid fa-right-to-bracket"></i>
            Create your account here
            <i class="card-icon fa-solid fa-user"></i>
            </h5>
            <div class="card-body">
                <form action="<?= site_url('createaccount'); ?>" method="post" onsubmit="return validatePassword();">
                    <div class="form-control">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" aria-describedby="emailBlock" required>
                        <div class="form-text" id="emailBlock">
                            Enter a valid email. A confirmation link will be sent and confirmed for the creation of the account.
                        </div>
                    </div><br>
                    <div class="form-control">
                        <label for="inputPassword5" class="form-label">Password</label>
                        <div class="input-group mb-3">
                            <input type="password" id="inputPassword5" name="password" class="form-control" aria-describedby="passwordBlock" minlength="8" required>
                            <button type="button" id="togglePassword" class="input-group-text">
                                <i class="fas fa-eye" id="passwordToggleIcon"></i>
                            </button>
                        </div>
                        <p id="passwordErrorMessage" style="color: red;"></p>
                        <div id="passwordBlock" class="form-text">
                            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                        </div>
                    </div><br>
                    <div class="d-grid gap-2">
                        <input type="submit" value="Create Account" class="btn btn-outline-primary" onclick="validatePassword()">
                    </div><br>
                    <div class="d-grid gap-2">
                        <a href="/login" class="btn btn-success">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>

    document.getElementById("togglePassword").addEventListener("click", togglePasswordVisibility);

    function validatePassword() {
        const passwordInput = document.getElementById("inputPassword5");
        const password = passwordInput.value;

        // Regular expressions for password requirements
        const specialCharacterRegex = /[!@#\$%\^&\*()_\-+\{\}\|\[\]:;"'<>,\./]/;
        const numberRegex = /[0-9]/;
        const uppercaseLetterRegex = /[A-Z]/;
        const lowercaseLetterRegex = /[a-z]/;

        if (
            specialCharacterRegex.test(password) &&
            numberRegex.test(password) &&
            uppercaseLetterRegex.test(password) &&
            lowercaseLetterRegex.test(password) &&
            password.length >= 8
        ) {
            document.getElementById("passwordErrorMessage").textContent = "";
            return true; // Allow form submission
        } else {
            document.getElementById("passwordErrorMessage").textContent =
                "Password must contain at least 1 special character, 1 number, 1 uppercase and lowercase letter, and be at least 8 characters long.";
            return false; // Prevent form submission
        }
    }
    
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById("inputPassword5");
        const passwordToggleIcon = document.getElementById("passwordToggleIcon");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            passwordToggleIcon.classList.remove("fa-eye");
            passwordToggleIcon.classList.add("fa-eye-slash");
        } else {
            passwordInput.type = "password";
            passwordToggleIcon.classList.remove("fa-eye-slash");
            passwordToggleIcon.classList.add("fa-eye");
        }
    }

    </script>
</body>
</html>