<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/home.css"/>
    <title>Beranda | SIPUT</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="left">
                <a href="/dashboard"><img src="/assets/img/logo.svg" alt="" class="logo"></a>
                <ul>
                    <li><a href="/dashboard">Home</a></li>
                    <li><a href="/event">Event</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>  
            </div>
            <div class="right"> 
                <h2>
                  <a href="/logout"><img src="/assets/img/logout.png" class="logout"></a>
                </h2>
            </div>
        </div>
    </header>

        <div class="showevent">
          <img class="background_menu" src="assets/img/showeventbg.svg" alt="">
          <div class="container_menu">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                @php
                   $a = 0; 
                @endphp
                @foreach ($posts as $post)
                    <div class="carousel-item {{$a == 0?"active":" "}}">
                      <div class="pamflet_card">
                        <div >
                            <img src="{{asset("storage/")."/".$post->pamflet_event}}" class="pamflet_event" alt="">
                        </div>
                        <div class="info_event">
                          <div class="namaEvent">
                            <p>Event Name:</p>
                            <b>{{$post->judul_event}}</b>
                          </div>
                          <div class="lokasi">
                            <p>Location:</p>
                            <b>{{$post->tempat_pelaksanaan}}</b>
                          </div>
                          <div class="tanggal">
                            <p>Date:</p>
                            <b>{{$post->tanggal_pelaksanaan}}</b>
                          </div>
                          <div class="fee">
                            <p>Registration Fee:</p>
                            @if (((int)$post->fee_event) == 0)
                              <b>Free</b>
                            @else
                              <b>{{$post->fee_event}}</b>
                            @endif
                            
                          </div>
                          <div class="guest">
                            <p>Guest:</p>
                            <b>{{$post->guest_star}}</b>
                          </div>
                        </div>
                      </div>
                    </div>
                    @php
                        $a++;
                    @endphp
                @endforeach
                
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>



            
            
          </div>
        </div>

        <div  id="event" class="daftarevent">
          <img class="background_menu" src="assets/img/daftarevent.svg" alt="">
          <div class="container_menu">
            <a href="musiclist"><img src="assets/img/musiclogo.svg" alt=""></a>
            <a href="culturelist"><img src="assets/img/culturelogo.svg" alt=""></a>
            <a href="gamelist"><img src="assets/img/gamelogo.svg" alt=""></a>
         </div>
        </div>

        <div id="about" class="about">
          <img class="background_menu" src="assets/img/about.svg" alt="">
        </div>

        <div id="contact" class="contact">
          <img class="background_menu" src="assets/img/contact.svg" alt="">
            <div class="container_contact">
            <img src="assets/img/contactimage.svg" alt=""></a>
              <div class="content_contact">
                <a href="#"><img src="assets/img/instagram.svg" alt=""></a>
                <a href="#"><img src="assets/img/gmail.svg" alt=""></a>
              </div>
            </div>
           </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

    