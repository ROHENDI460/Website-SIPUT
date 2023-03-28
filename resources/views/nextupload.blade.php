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
        <div class="nextupload">
            <img src="assets/img/nextrectangle.png" class="nextrectangleform" alt="">
            <form action="/uploadevent" method="POST" class="formpaket" enctype="multipart/form-data">
                @csrf
                <p>Pilih Paket</p>
                    @if ($errors->has("pilih_paket"))
                    <div class="error_msg" style="color: red">
                        @foreach ($errors->get("pilih_paket") as $msg)
                            <div class="msg">{{$msg}}</div>
                        @endforeach
                    </div>
                    @endif
                <div class="container_paket">
                    <div>
                        <input type="checkbox" name="pilih_paket" class="checkbox_paket" value="Paket Seminggu">
                        <img src="assets/img/paket1.svg">
                    </div>
                    <div>
                        <input type="checkbox" name="pilih_paket" class="checkbox_paket" value="Paket 2 Minggu">
                        <img src="assets/img/paket2.svg">
                    </div>
                    <div>
                        <input type="checkbox" name="pilih_paket" class="checkbox_paket" value="Paket 1 bulan">
                        <img src="assets/img/paket3.svg">
                    </div>
                    <div>
                        <input type="checkbox" name="pilih_paket" class="checkbox_paket" value="Paket 3 bulan">
                        <img src="assets/img/paket4.svg">
                    </div>
                </div>
                <p>Upload Proposal</p>
                    @if ($errors->has("proposal"))
                    <div class="error_msg" style="color: red">
                        @foreach ($errors->get("proposal") as $msg)
                            <div class="msg">{{$msg}}</div>
                        @endforeach
                    </div>
                    @endif
                <input type="file" name="proposal" class="proposal">
                <p>Pembayaran</p>
                    <div class="bayar">
                        <a>Kirim Pembayaran ke DANA : 083-823-396-860 (a.n. SIPUT)</a>
                    </div>
                <p>Upload Bukti Pembayaran</p>
                    @if ($errors->has("bukti_bayar"))
                    <div class="error_msg" style="color: red">
                        @foreach ($errors->get("bukti_bayar") as $msg)
                            <div class="msg">{{$msg}}</div>
                        @endforeach
                    </div>
                    @endif
                <input type="file" name="bukti_bayar" class="bukti_bayar">
                @if (session("error"))
                <div class="error_msg pamflet_error" style="color: red">
                    {{session("error")}}
                </div>
                @endif
                    <div>
                        <input type="checkbox" name="setuju" class="persetujuan" value="setuju"> Saya menyetujui persyaratan yang tertera<br>
                    </div>
                <input type="submit" name="submit" class="btnNext" value="Upload" style="margin-left: 40%; margin-top: 5%">    
        </div>
    </div>
    
</body>
</html>