<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SoccerVerse Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/libraries/messages/messages.css">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900');

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        #form {
            min-height: 100vh;
            background-color: #1e233f;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 30px;
            flex-direction: column;
        }

        h3 {
            font-size: 28px;
            color: #fff;
        }

        .inputBox {
            position: relative;
            width: 400px;
        }

        .inputBox input {
            width: 100%;
            background: transparent!important;
            border: 1px solid rgba(255, 255, 255, 0.25);
            outline: none;
            border-radius: 6px;
            padding: 12px;
            color: #fff;
            font-size: 18px;
            padding-left: 10px;
            transition: 0.5s;
        }

        .inputBox span {
            position: absolute;
            left: 0;
            top: 1px;
            padding: 10px;
            pointer-events: none;
            color: rgba(255, 255, 255, 0.25);
            font-size: 18px;
            text-transform: uppercase;
            transition: 0.5s;
        }

        .inputBox input:focus~span,
        .inputBox input:valid~span {
            color: #00dfc4;
            padding: 2px 8px;
            background: #1e233f;
            transform: translateX(11px) translateY(-13px);
            font-size: 13px;
            border-right: 1px solid #00dfc4;
            border-left: 1px solid #00dfc4;
        }

        .inputBox:nth-child(3) input:focus~span,
        .inputBox:nth-child(3) input:valid~span {
            color: #333;
            background-color: #00dfc4;
            transform: translateX(11px) translateY(-13px);
            border-radius: 4px;
        }

        .inputBox input:focus,
        .inputBox input:valid {
            border: 1px solid #00dfc4;
        }

        .button {
            display: block;
            color: #00dfc4;
            text-transform: uppercase;
            padding: 4px 8px;
            border: 1px solid #00dfc4;
            border-radius: 4px;
            cursor: pointer;
            background-color: transparent;
        }
    </style>
</head>

<body>
    <form action="/admin/loginCheck" method="POST" id="form">
        @csrf
        <h3>Sign In</h3>
        <div class="inputBox">
            <input name="email" type="text" required autocomplete="off">
            <span>Email</span>
        </div>

        <div class="inputBox">
            <input name="password" type="password" required>
            <span>Password</span>
        </div>

        <button class="button">
            Submit
        </button>
    </form>
    <div id="toast"></div>

    <script src="/libraries/messages/messages.js"></script>
    @if (Session::has('loginFail'))
        <script>
            toast({
                title: 'Login Fail',
                message: 'Email or password incorrect',
                type: 'error'
            });
        </script>
    @endif
</body>

</html>
