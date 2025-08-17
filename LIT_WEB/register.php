<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-in/Sign-up Page</title>
    <base href="images/">
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: Verdana, sans-serif;
        }

        body {
            height: 100vh;
            width: 100vw;
            min-width: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url('weldinglogo2.png');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            overflow: hidden;
        }

        .container {
            position: relative;
            width: 900px;
            height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
        }

        .login-con,
        .register-con {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 420px;
            min-width: 400px;
            padding: 40px;
            min-height: 63%;
            background: linear-gradient(to right, #073fdaff 20%, #163791 100%);
            border: 1px solid rgba(1, 1, 1, .5);
            border-radius: 5px;
            box-shadow: -10px 10px 10px rgba(1, 1, 1, .6);
            display: flex;
            flex-direction: column;
            align-items: stretch;
            box-sizing: border-box;
            transition: transform 0.5s cubic-bezier(.8, -0.04, .21, 1), opacity 0.5s;
            z-index: 2;
        }

        .register-con {
            transform: translate(-50%, -50%);
            opacity: 1;
            z-index: 3;
            transition: all .5s ease-out;
        }

        .login-con {
            transform: translate(-180%, -50%);
            opacity: 0;
            z-index: 2;
            transition: all .5s ease-out;
        }

        .container.register-active .register-con {
            transform: translate(220%, -50%);
            opacity: 0;
            z-index: 2;
            pointer-events: none;
        }

        .container.register-active .login-con {
            transform: translate(-50%, -50%);
            opacity: 1;
            z-index: 3;
            pointer-events: auto;
        }

        .header {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
        }

        .header img {
            filter: drop-shadow(0 0 5px rgba(255, 255, 255, 0.4)) drop-shadow(0 0 10px rgba(230, 230, 230, 0.72));
            padding: 0 0 10px 0;
        }

        .login-con h1,
        .register-con h1 {
            text-align: center;
            font-size: 25px;
            font-weight: normal;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
            letter-spacing: .5px;
            text-shadow: 0px 0px 15px rgba(0, 0, 0, .5);
            padding: 10px;
        }

        hr {
            margin: 0 0 20px 0;
        }

        .gmail {
            margin-top: 20px;
        }

        .login-con label,
        .register-con label {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: normal;
            font-size: 17px;
            color: #fff;
            text-shadow: 0px 0px 15px rgba(0, 0, 0, .5);
            letter-spacing: 1px;
            margin-left: 10px;
            margin-bottom: 7px;
        }

        .login-con input,
        .register-con input {
            border: none;
            border-radius: 10px;
            box-shadow: 0px 0px 2px rgba(214, 214, 214, 0.8);
            background: rgba(31, 31, 31, 0.5);
            color: rgb(164, 164, 163);
            font-size: 16px;
            height: 40px;
            width: 330px;
            min-width: 200px;
            margin-bottom: 20px;
            padding: 0 10px 0 10px;
            line-height: 40px;
            align-self: center;
            letter-spacing: 1px;
            transition: box-shadow .4s ease-in;
        }

        .login-con input:focus,
        .register-con input:focus {
            outline: 0;
            border: 3px solid dodgerblue;
            box-shadow: -5px 5px 10px rgb(0, 0, 0, .5);
        }

        .login-con button,
        .register-con button {
            margin: 10px;
            width: 350px;
            height: 45px;
            line-height: 45px;
            cursor: pointer;
            align-self: center;
            background: #f4ca16;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, .5);
            color: rgba(0, 0, 0, 1);
            text-shadow: 0 0 10px rgba(0, 0, 0, .5);
            font-size: 18px;
            font-weight: 600;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            letter-spacing: 2px;
            transition: all 0.3s, box-shadow .3s ease-in;
        }

        .login-con button:focus,
        .login-con button:hover,
        .register-con button:focus,
        .register-con button:hover {
            position: relative;
            bottom: 2px;
            outline: 0;
            line-height: 40px;
            background: #0548ffff;
            border: 2px solid dodgerblue;
            color: #fff;
            box-shadow: 0 0 15px #0548ffd5, -7px 12px 10px rgba(0, 0, 0, 0.8);
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
        }
    </style>
</head>

<body>
    <div class="container" id="container">
        <!-- Registration Container -->
        <div class="register-con">
            <div class="header">
                <img src="Tesda Logo.png" alt="" width="50">
                <h1>Create your account</h1>
            </div>
            <hr>
            <label for="" class="gmail">Username :</label>
            <input type="text" autocomplete="username">
            <label for="">Email :</label>
            <input type="email" autocomplete="email">
            <label for="">Password :</label>
            <input type="password" autocomplete="new-password">
            <label for="">Confirm Password :</label>
            <input type="password" autocomplete="new-password">
            <button>Register</button>
            <button class="slide-toggle" id="back-login">Already have an account? Login <br> &larr;</button>
        </div>
        <!-- Login Container -->
        <div class="login-con">
            <div class="header">
                <img src="Tesda Logo.png" alt="" width="50">
                <h1>Login to your account</h1>
            </div>
            <hr>
            <label for="" class="gmail">Username :</label>
            <input type="text" autocomplete="username">
            <label for="">Password :</label>
            <input type="password" autocomplete="current-password">
            <button>Login</button>
            <button class="slide-toggle" id="show-register">Don't have an account? Register &rarr;</button>
        </div>
    </div>
    <script>
        const container = document.getElementById('container');
        const showRegister = document.getElementById('show-register');
        const backLogin = document.getElementById('back-login');

        showRegister.addEventListener('click', () => {
            container.classList.remove('register-active');
        });

        backLogin.addEventListener('click', () => {
            container.classList.add('register-active');
        });
    </script>
</body>

</html>