<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/uploadevent.css"/>
    <title>SIPUT</title>
</head>
<body>
    <div class="rectangle">
        <div class="upload">
            <img src="assets/img/rectangleupload.svg" class="rectangleform" alt="">
            <form action="/nextupload" method="POST" enctype="multipart/form-data">
                @csrf
                <p>Judul Event</p>
                    @if ($errors->has("judul"))
                    <div class="error_msg" style="color: red">
                        @foreach ($errors->get("judul") as $msg)
                            <div class="msg">{{$msg}}</div>
                        @endforeach
                    </div>
                    @endif
                <input type="text" name="judul" class="form-input">
                <p>Tanggal Pelaksanaan</p>
                @if ($errors->has("tanggal"))
                    <div class="error_msg" style="color: red">
                        @foreach ($errors->get("tanggal") as $msg)
                            <div class="msg">{{$msg}}</div>
                        @endforeach
                    </div>
                    @endif
                <input type="text" name="tanggal" class="form-input">
                <p>Tempat Pelaksanaan</p>
                    @if ($errors->has("tempat"))
                    <div class="error_msg" style="color: red">
                        @foreach ($errors->get("tempat") as $msg)
                            <div class="msg">{{$msg}}</div>
                        @endforeach
                    </div>
                    @endif
                <input type="text" name="tempat" class="form-input">
                <p>Guest Star</p>
                    @if ($errors->has("gueststar"))
                    <div class="error_msg" style="color: red">
                        @foreach ($errors->get("gueststar") as $msg)
                            <div class="msg">{{$msg}}</div>
                        @endforeach
                    </div>
                    @endif
                <input type="text" name="gueststar" class="form-input">
                <p>Fee Event (*Bila ada)</p>
                    @if ($errors->has("fee"))
                    <div class="error_msg" style="color: red">
                        @foreach ($errors->get("fee") as $msg)
                            <div class="msg">{{$msg}}</div>
                        @endforeach
                    </div>
                    @endif
                <input type="text" name="fee" class="form-input">
                <p>Kategori Event</p>
                    @if ($errors->has("kategori"))
                    <div class="error_msg" style="color: red">
                        @foreach ($errors->get("kategori") as $msg)
                            <div class="msg">{{$msg}}</div>
                        @endforeach
                    </div>
                    @endif
                <input list="browsers" name="kategori" id="browser" class="kategori">
                    <datalist id="browsers">
                        <option value="E-Sport">
                        <option value="Culture">
                        <option value="Music">
                    </datalist>
                <input type="file" name="pamflet" class="foto_up">
                    @if ($errors->has("pamflet"))
                    <div class="error_msg pamflet_error" style="color: red">
                        @foreach ($errors->get("pamflet") as $msg)
                            <div class="msg">{{$msg}}</div>
                        @endforeach
                    </div>
                    @endif
                <input type="submit" name="submit" class="btnNext" value="Next" style="transform: translateX(-130px)">    
            </form>
        </div>

        <div>
            <a href="#"><img src="assets/img/rectanglephoto.svg" class="rectanglephoto" alt=""></a>
        </div>
    </div>
    
    <script src="../assets/js/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    
    <script>
        $("input[type='file']").change(function(e) {
            console.log("change")

        for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {

            var file = e.originalEvent.srcElement.files[i];
            var reader = new FileReader();
            reader.onloadend = function() {
                
                $("a>.rectanglephoto").attr("src",`${reader.result}`);
            }
            reader.readAsDataURL(file);
        }  
        });
        $(document).ready(function(){
            if($(".error_msg").length){
                $(".foto_up").addClass("error");
            }
        });
    </script>
</body>
</html>