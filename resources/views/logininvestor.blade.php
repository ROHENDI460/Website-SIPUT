<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <title>Login | SIPUT</title>
</head>
<body>
    <nav>
        <div id="loginform" class="login">
            @if (session("status"))
                <div class="success_msg">
                    {{session("status")}}
                </div>
            @endif
            @if (session("loginerror"))
                <div class="msg error_msg">
                    {{session("loginerror")}}
                </div>
            @endif
            <img src="assets/img/Login_investor.svg" alt="FormLogin" class="form">
            <form action="/logininvestor" method="POST">
                @csrf
                <p>Username </p>
                <input type="text" name="user" class="form-input">
                <p>Password</p>
                <input type="password" name="pass" class="form-input">
                <input type="submit" name="submit" class="btnLogin" value="Login">
            </form>
        </div> 
    </nav> 

    <script>
        setTimeout(() => {
            for (let index = 0; index <= 10; index++){
                let eror = document.querySelector(".msg");
                document.getElementById('loginform').removeChild(eror);
            }
        }, 3000);
    </script>
</body>
</html>