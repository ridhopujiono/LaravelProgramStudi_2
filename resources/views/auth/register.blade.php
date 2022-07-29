<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #1abc9c;
        }

        ::selection {
            background: rgba(26, 188, 156, 0.3);
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .wrapper {
            width: 40%;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0px 4px 10px 1px rgba(0, 0, 0, 0.1);
        }

        .wrapper .title {
            height: 90px;
            background: #16a085;
            border-radius: 5px 5px 0 0;
            color: #fff;
            font-size: 30px;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wrapper form {
            padding: 30px 25px 25px 25px;
        }

        .wrapper form .row {
            margin-bottom: 15px;
            position: relative;
        }

        .wrapper form .row input {
            height: 100%;
            width: 100%;
            outline: none;
            border-radius: 5px;
            border: 1px solid lightgrey;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        form .row input:focus {
            border-color: #16a085;
            box-shadow: inset 0px 0px 2px 2px rgba(26, 188, 156, 0.25);
        }

        form .row input::placeholder {
            color: #999;
        }

        .wrapper form .row i {
            position: absolute;
            width: 47px;
            height: 100%;
            color: #fff;
            font-size: 18px;
            background: #16a085;
            border: 1px solid #16a085;
            border-radius: 5px 0 0 5px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wrapper form .pass {
            margin: -8px 0 20px 0;
        }

        .wrapper form .pass a {
            color: #16a085;
            font-size: 17px;
            text-decoration: none;
        }

        .wrapper form .pass a:hover {
            text-decoration: underline;
        }

        .wrapper form .button input {
            color: #fff;
            font-size: 20px;
            font-weight: 500;
            padding-left: 0px;
            background: #16a085;
            border: 1px solid #16a085;
            cursor: pointer;
        }

        form .button input:hover {
            background: #12876f;
        }

        .wrapper form .signup-link {
            text-align: center;
            margin-top: 20px;
            font-size: 17px;
        }

        .wrapper form .signup-link a {
            color: #16a085;
            text-decoration: none;
        }

        form .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Login Form</span></div>
            <form method="post" action="{{ route('register') }}">
                @csrf
                @error('email')
                <div style="padding: 10px;border: 1px solid red;border-radius: 5px; margin-bottom: 5px">
                    <center>
                        <a href="#" style="color: red; text-decoration: none">{{$message}}</a>
                    </center>
                </div>
                @enderror
                @error('password')
                <div style="padding: 10px;border: 1px solid red;border-radius: 5px; margin-bottom: 5px">
                    <center>
                        <a href="#" style="color: red; text-decoration: none">{{$message}}</a>
                    </center>
                </div>
                @enderror

                <div class="row">

                    <input type="text" name="name" placeholder="Fullname" required>
                </div>
                <div class="row">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="row">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="row">
                    <input type="password" name="password_confirmation" placeholder="Password Confirmation" required>
                </div>
                <div class="row button">
                    <input type="submit" value="Login">
                </div>
            </form>
        </div>
    </div>

</body>

</html>
