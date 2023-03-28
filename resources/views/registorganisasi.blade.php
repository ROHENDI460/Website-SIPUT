<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <title>Register | SIPUT</title>
</head>
<body>
    <nav>
        <div class="regist">
            <img src="assets/img/Regist_acara.svg" alt="Formregist" class="regAcara">
            <form id="form_regis" action="/registorganisasi" method="POST">
                @if (session("errorStore"))
                <div class="error_msg" style="color: red">
                    {{session("errorStore")}}
                </div>
                @endif
                @csrf
                <p>Nama</p>
                    @if ($errors->has("Nama"))
                    <div class="error_msg" style="color: red">
                        @foreach ($errors->get("Nama") as $msg)
                            <div class="msg">{{$msg}}</div>
                        @endforeach
                    </div>
                    @endif
                <input type="text" name="Nama" class="form-input">
                <p>Nomor Telepon</p>
                    @if ($errors->has("telp"))
                    <div class="error_msg" style="color: red">
                        @foreach ($errors->get("telp") as $msg)
                            <div class="msg">{{$msg}}</div>
                        @endforeach
                    </div>
                    @endif
                <input type="int" name="telp" class="form-input">
                <p>Nama Organisasi</p>
                    @if ($errors->has("nama_organisasi"))
                    <div class="error_msg" style="color: red">
                        @foreach ($errors->get("nama_organisasi") as $msg)
                            <div class="msg">{{$msg}}</div>
                        @endforeach
                    </div>
                    @endif
                <input type="text" name="nama_organisasi" class="form-input">
                <p>Email Organisasi</p>
                    @if ($errors->has("email_organisasi"))
                    <div class="error_msg" style="color: red">
                        @foreach ($errors->get("email_organisasi") as $msg)
                            <div class="msg">{{$msg}}</div>
                        @endforeach
                    </div>
                    @endif
                <input type="text" name="email_organisasi" class="form-input">
                <p>Username </p>
                    @if ($errors->has("username"))
                    <div class="error_msg" style="color: red">
                        @foreach ($errors->get("username") as $msg)
                            <div class="msg">{{$msg}}</div>
                        @endforeach
                    </div>
                    @endif
                <input type="text" name="username" class="form-input">
                <p>Password</p>
                    @if ($errors->has("password"))
                    <div class="error_msg" style="color: red">
                        @foreach ($errors->get("password") as $msg)
                            <div class="msg">{{$msg}}</div>
                        @endforeach
                    </div>
                    @endif
                <input type="text" name="password" class="form-input">
                <input type="checkbox" name="setuju" class="checkbox" value="setuju"> Saya menyetujui persyaratan yang tertera<br>
                @if (session("error"))
                <div class="error_msg" style="color: red">
                    {{session("error")}}
                </div>
                @endif
                <input type="submit" name="submit" class="btnRegist" value="Register">
            </form>
        </div> 
    </nav> 
    <script>
        setTimeout(() => {
            for (let index = 0; index <= 10; index++){
                let eror = document.querySelector(".error_msg");
                document.getElementById('form_regis').removeChild(eror);
            }
        }, 4000);
    </script>
</body>
</html>