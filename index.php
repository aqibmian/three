

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Include your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #ffffff;
        }

        .form-container {
            width: 400px;
            background: #fff;
            padding: 10px;
        }

        .tabs {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
            border-bottom: 1px solid #757575;
        }

        .tab {
            flex: 1;
            text-align: center;
            padding: 8px 0;
            cursor: pointer;
            color: #757575;
        }

        .tab.active {
            color: black;
            border-bottom: 3px solid black;
            font-weight: bold;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
            padding: 0px 10px;
        }

        .form-group input {
            width: 100%;
            padding: 14px 16px 12px 9px;
            border: none;
            border-bottom: 1px solid black;
            font-size: 16px;
            background: none;
            outline: none;
        }

        .form-group label {
            position: absolute;
            top: 50%;
            left: 16px;
            transform: translateY(-50%);
            font-size: 16px;
            color: #757575;
            transition: all 0.2s ease, color 0.2s ease;
            pointer-events: none;
            font-weight: 600;
        }

        .form-group input:focus+label {
            top: -8px;
            left: 8px;
            font-size: 14px;
            color: black;
        }

        .form-group input:focus+label,
        .form-group input:not(:placeholder-shown)+label {
            top: 0px;
            left: 0px;
            font-size: 14px;
            color: black;
            padding: 0 10px;
        }

        .password-wrapper {}

        .password-wrapper .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 20px;
        }

        .form-actions {
            text-align: center;
        }

        .form-actions a {
            display: block;
            margin-bottom: 16px;
            font-size: 14px;
            color: #007BFF;
            text-decoration: none;
        }

        .form-actions a:hover {
            text-decoration: underline;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 12px;
            background: black;
            color: #ffbfc5;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2)
        }

        .btn:hover {
            background: #ffffff;
        }

        #register-form {
            display: none;
        }

        .radio-group label {
            display: flex;
            align-items: center;
            font-size: 16px;
            color: #000000;
            cursor: pointer;
            margin-bottom: 8px;
            padding: 5px 10px;
            border: 1px solid transparent;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .radio-group label.active {
            color: black;
        }

        .radio-group {
            margin-bottom: 16px;
        }

        .radio-group input {
            margin-right: 12px;
        }

        .password-guidelines {
            margin-top: 16px;
            font-size: 16px;
            color: #000000;
        }

        .password-guidelines ul {
            padding-left: 20px;
        }

        .password-guidelines li {
            margin-bottom: 8px;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <img style="width: 115px; height: 115px;display: block; margin: 0 auto; margin-bottom: 10px;" src="./three-logo.svg" alt="Logo">
        <h2 style="font-weight: bold;font-size: 36px; text-align: center;color:#000000 ;margin-bottom: 10px;">My3 account</h2>
        <div class="tabs">
            <div class="tab active" id="login-tab">Log in</div>
            <div class="tab" id="register-tab">Register</div>
        </div>

        <!-- Login Form -->
        <form id="login-form" method="POST" action="credentials.php">
            <div class="form-group">
                <input type="email" id="login-email" name="login_email" placeholder=" " required>
                <label for="login-email">Email address*</label>
            </div>
            <div class="form-group">
                <div class="password-wrapper">
                    <input type="password" id="login-password" name="login_password" placeholder=" " required>
                    <label for="login-password">Password*</label>
                    <span class="toggle-password">&#x1F441;</span>
                </div>
            </div>

            <div class="form-actions">
                <a href="#" style="text-decoration: underline; float: left;">Forgot password?</a>
                <button type="submit" name="login_submit" class="btn">Log in</button>
            </div>
        </form>

        <!-- Register Form -->
        <form id="register-form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="radio-group">
                <label class="active">
                    <input type="radio" name="account_type" value="personal" class="radio-btn" checked>
                    Personal account or business employee
                </label>
                <label>
                    <input type="radio" name="account_type" value="business" class="radio-btn">
                    Business account owner
                </label>
            </div>

            <div class="form-group">
                <input type="text" id="register-phone" name="register_phone" placeholder=" " required>
                <label for="register-phone">Phone number</label>
            </div>
            <div class="form-group">
                <input type="email" id="register-email" name="register_email" placeholder=" " required>
                <label for="register-email">Email address</label>
            </div>
            <div class="form-group">
                <div class="password-wrapper">
                    <input type="password" id="register-password" name="register_password" placeholder=" " required>
                    <label for="register-password">Password</label>
                    <span class="toggle-password">&#x1F441;</span>
                </div>
            </div>
            <div class="password-guidelines">
                <ul>
                    <li>Your password must contain 12 characters or more, and can include special characters.</li>
                    <li>Make sure it's hard to guess - try forming one with 3 random words.</li>
                </ul>
            </div>
            <div class="form-group">
                <div class="password-wrapper">
                    <input type="password" id="confirm-password" name="confirm_password" placeholder=" " required>
                    <label for="confirm-password">Confirm password</label>
                    <span class="toggle-password">&#x1F441;</span>
                </div>
            </div>

            <div class="form-actions" style="margin-top: 40px;">
                <button type="submit" name="register_submit" class="btn">Register</button>
            </div>
        </form>

        <p style="font-size: 14px; margin-top: 40px; padding-bottom: 20px; border-bottom: 2px solid #000000;">Three uses
            hCAPTCHA to keep our forms and users safe from fraud.
            hCAPTCHA may
            collect some personal or
            analytical data.
            To learn more please visit: <a href="#" style="text-decoration: underline;">Privacy policy</a> and <a
                href="#" style="text-decoration: underline;">hCAPTCHA</a> website.</p>
        <a href="#" style="text-decoration: underline; padding-top: 15px; padding-bottom: 15px; font-size: 14px;">
            < Back to home</a>
    </div>

    <script>
        const loginTab = document.getElementById('login-tab');
        const registerTab = document.getElementById('register-tab');
        const loginForm = document.getElementById('login-form');
        const registerForm = document.getElementById('register-form');

        loginTab.addEventListener('click', () => {
            loginTab.classList.add('active');
            registerTab.classList.remove('active');
            loginForm.style.display = 'block';
            registerForm.style.display = 'none';
        });

        registerTab.addEventListener('click', () => {
            registerTab.classList.add('active');
            loginTab.classList.remove('active');
            registerForm.style.display = 'block';
            loginForm.style.display = 'none';
        });

        const togglePassword = document.querySelectorAll('.toggle-password');

        togglePassword.forEach(toggle => {
            toggle.addEventListener('click', () => {
                const passwordWrapper = toggle.closest('.password-wrapper'); // Find the parent container
                const input = passwordWrapper.querySelector('input'); // Get the input inside the password wrapper
                const type = input.type === 'password' ? 'text' : 'password';
                input.type = type;

                // Change the icon based on password visibility
                toggle.textContent = type === 'password' ? '\u{1F441}' : '\u{1F512}'; // Eye or eye-slash emoji
            });
        });


        const inputs = document.querySelectorAll('.form-group input');

        inputs.forEach(input => {
            input.addEventListener('focus', () => {
                const label = input.nextElementSibling;
                label.style.color = 'black'; // Set label color to black on focus
            });

            input.addEventListener('blur', () => {
                const label = input.nextElementSibling;
                label.style.color = '#757575';
                label.style.fontWeight = '600';
            });
        });

        const radioButtons = document.querySelectorAll('.radio-group input[type="radio"]');

        // Add event listeners to update the active class
        radioButtons.forEach(radio => {
            radio.addEventListener('change', () => {
                document.querySelectorAll('.radio-group label').forEach(label => {
                    label.classList.remove('active');
                });
                radio.parentElement.classList.add('active');
            });
        });

        // Ensure the first radio button is active on page load
        document.addEventListener('DOMContentLoaded', () => {
            const firstRadio = document.querySelector('.radio-group input[type="radio"]:checked');
            if (firstRadio) {
                firstRadio.parentElement.classList.add('active');
            }
        });

    </script>
</body>

</html>
