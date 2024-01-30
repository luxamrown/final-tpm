<style>
    .background1 {
        background: linear-gradient(to bottom, #FFF, #BC87FF, #2F0CBD, #0D0043);
    }

    .background2 {
        background-color: white;
    }

    .gradient {
        background: linear-gradient(to right, #2F0CBD, #0D0043);
    }
    .gradient2 {
        background: linear-gradient(to right, #0D0043, #2F0CBD);
    }

    .gap {
        margin-right: 20px;
    }

    .gradient-button1 {
        width: 240px;
        color: white;
        border:#0D0043;
        border-radius: 35px;
        position: absolute;
        bottom: -65%;
        padding: 10px 40px 10px 40px;
        font-size: 30px;
    }
    .gradient-button2 {
        color: white;
        border:#0D0043;
        border-radius: 35px;
        padding: 10px 20px 10px 20px;
    }

    .smallFont {
        font-size: 25px;
        font-weight: 200;
    }

    .sty1 {
        margin-bottom: 0px;
        letter-spacing: 3px;
    }

    .center-element {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
    }


    .background1, .background2 {
            position: relative;
            padding-bottom: 100px;
        }

        @media screen and (max-width: 768px) {
            .whiteBox {
                margin-top: 50px;
            }
        }

        @media screen and (min-width: 769px) {
            .whiteBox {
                margin-top: 150px;
            }
        }

        .faq {
            width: 1200px;
            height: 90px;
            padding: 25px 40px 5px 30px;
            background-color: #FFF;
            border: #FFF;
            border-radius: 30px;
            text-align: left;
            font-family: 'poppins';
            font-size: 25px;
            position: absolute;
            left: 5%;
        }

        .icon {
            position: absolute;
            right: 4.2%;
            top: 35%;
            color: black;
            border: none;
            background-color: transparent;
        }

        .contact1 {

        }

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HACKTECH</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="background1" style="height: 855px;">
        <div style="background-color: white;" id="navbar">
          <nav class="navbar navbar-expand-lg navbar-light" style="margin-top: 10px; margin-bottom: 20px;">
              <a class="navbar-brand" href="#" style="margin-left: 100px; font-weight: bold; margin-right: 400px;">HACKTECH</a>

              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link gap" href="#" style="color:black; font-weight:200;">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link gap" href="#" style="color: black; font-weight:200;">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link gap" href="#" style="color: black; font-weight:200;">Champion & Prizes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link gap" href="#" style="color: black; font-weight:200;">FAQ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link gap" href="#" style="color: black; font-weight:200;">Timeline</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link gap" href="#" style="color: black; font-weight:200;">Mentor & Jury</a>
                  </li>
                  <li class="nav-item">
                      <button type="reset" id="loginButton" style="margin-top: 5px;">Login</button>
                  </li>
                </ul>
              </div>
            </nav>
            <hr style="opacity: 100%; background-color:black; margin-left: 100px; margin-right: 110px; margin-bottom: 0px; height: 3px; border-radius: 2px;">
        </div>

        <div class="whiteBox border border-light shadow-lg" style="margin-top: 150px;">
            <div class="container">
                <div class="row">
                    <div class="col" style="padding-right: 0px;">
                        <span class="colLeft poppins-bold" style="font-weight: bold; letter-spacing: -3px; margin-top: 60px;"> < / > </span>
                        <span class="colLeft poppins" style="margin-top: 0px; font-size: 30px; font-weight: 450; letter-spacing: 17px; font-size: 25px;">WELCOME</span>
                        <h1 class="colLeft poppins-bold" style="margin-top: 25px; letter-spacing: 13px; font-size: 100px;"><span style="color: #0D0043">HACK</span><span style="color: #2F0CBD">TECH</span></h1>
                        <p class="colLeft poppins" style="width:650px; font-size: 30px;">
                            Collaborative event where individuals work
                            together as teams  to create innovative
                            solutions and make into code.
                        </p>
                        <button type="reset" class="poppins" id="register" style="border: #0D0043; margin-left: 60px; ">Register Here !</button>
                        <span>
                            <img src="{{asset('frames/Ellipse 2.png')}}" style="position: relative; right: -6%; width: 55px; height: 50px; bottom: 6%;">
                        </span>
                    </div>
                    <div class="col" style="padding-right: 0px; position: relative">
                        <div style="position: absolute; z-index: 1; margin-left: 45px; margin-top: 110px;">
                            <h3 class="poppins"  style="letter-spacing: 3px;"> Sponsored by </h3>
                            <span>
                                <img src="{{asset('frames/brandname.png')}}" style="width: 150px; height: 150px; position:absolute; right: 0%; bottom: 10%; left: 115%;">
                            </span>
                            <p class="smallFont sty1" style="margin-top: 30px;">View</p>
                            <div style="position: relative;">
                                <img src="{{asset('frames/arrow 1.png')}}" style="width: 70px; height: 70px; position: absolute; right: 40%; bottom:40%;">
                                <p class="smallFont sty1" style="position: relative; z-index: 2;">
                                    All
                                </p>
                                <p class="smallFont sty1">Sponsors</p>
                            </div>
                        </div>
                        <img src="{{asset('frames/image 1.png')}}" style="width: 520px; height: 350px; position: absolute; bottom: -14%; right: 7%;">
                        <img src="{{asset('frames/Rectangle 2.png')}}" alt="" style="width: 486px; height: 620px; margin-left: 8px; z-index: 0;">
                    </div>
                </div>
                <img src="{{asset('frames/Frame1.png')}}" alt="" style="width: 230px; height: 200px; margin-top: 40px; margin-bottom: 130px; position: absolute; left: 30px;">
            </div>
        </div>
        <img src="{{asset('frames/Ellipse 1.png')}}" style="z-index: 1; position: absolute; right: 0%; width: 800px; height: 600px; bottom: -8%;">
    </div>
    <div class="background2" style="height: 1900px;">
        <h1 class="poppins-bold" style="font-size: 130px; color:black; margin-top: 100px; margin-left: 100px; letter-spacing: 10px;"> JULY <span style="margin-left: 40px; letter-spacing: 0px; !important">28 - 30</span></h1>
        <h1 class="poppins-bold" style="font-size: 130px; color: black; margin-left: 100px; letter-spacing: 10px;">2023</h1>
        <img src="{{asset('frames/image 2.png')}}" style="width: 830px; height: 550px; position: absolute; right: 5%; bottom: 61%; z-index: 1;">
        <img src="{{asset('frames/Ellipse 3.png')}}" style="position: absolute; left: 0%; width: 900px; height: 600px;">
        <img src="{{asset('frames/Play button.png')}}" style="position: absolute; left: 23%; width: 165px; height: 167px; bottom: 70%;">
        <div class="poppins" style="position:absolute; left: 6%; bottom: 60%;">
            <h1 style="letter-spacing: 13px;  font-size: 70px; color:black;">Play <p style="margin-top: 17px;">Video</p></h1>
            <p class="smallFont poppins-light" style="margin-top: 30px; letter-spacing: 3px">VIDEO RECAP TECHNO</p>
        </div>
        <img src="{{asset('frames/teamwork.png')}}" style="width: 600px; height: 900px; position: absolute; bottom: 7%; left: 7%;">
        <img src="{{asset('frames/image 11.png')}}" style="width: 50px; height: 50px; position: absolute; bottom: 52%; left: 53%;">
        <div style="position: absolute; bottom: 30%; right: 9%; width: 490px;">
            <h1 class="poppins" style="color:black; text-align:center; line-height: 1.5; font-weight: bold; margin-bottom: 30px;">
                Don't wait ! Do something when you are young, when you have nothing to lose, and
                keep that in mind
            </h1>
            <h3 class="poppins-light" style="color: black; text-align:center; font-style: italic;">- Steve Jobs</h3>
        </div>
        <img src="{{asset('frames/image 12.png')}}" style="width: 50px; height: 50px; position: absolute; bottom: 27%; left: 90%;">
        <img src="{{asset('frames/Ellipse 4.png')}}" style="position:absolute; bottom: -5%; right: 0%; height: 500px;">
        <img src="{{asset('frames/Frame 28.png')}}" style="position:absolute; bottom: -5%; right: 0%; height: 490px;">
        <img src="{{asset('frames/codeTag.png')}}" style="position:absolute; bottom: 5%; right: 0%; height: 90px; width: 115px;">
        <h1 class="poppins-bold" style="color: black; position: absolute; bottom: -5%; left: 25%; font-size: 130px;">ABOUT US</h1>
        <img src="{{asset('frames/codingPic.png')}}" style="position: absolute; height: 600px; width: 1000px; bottom: -40%; left: 14%;">
        <h1 class="poppins" style="position: absolute; bottom: -70%; left: 14%; height: 500px; width: 1000px; color: black; text-align: center; font-size: 23px; line-height: 1.7;">
            Hackathon adalah sebuah acara kolaboratif dan intensif di mana individu atau tim bekerja bersama dalam waktu terbatas, seringkali 48 jam,
            untuk menyelesaikan tantangan atau menciptakan solusi inovatif,
            khususnya di bidang teknologi dan pengembangan perangkat lunak.
            Peserta biasanya bersaing untuk membuat aplikasi atau proyek yang dapat mengatasi masalah tertentu,
            dan acara ini juga dapat mencakup sesi mentoring dari para ahli di berbagai bidang.
            Hackathon terdiri dari tiga bidang, yaitu bisnis, teknologi, dan design.
        </h1>
        <button class="poppins gradient center-element gradient-button1" style="left: 40%;">Register</button>
        <button class="poppins gradient center-element gradient-button1" style="left: 60%">Guidebook</button>

        <div>
            <img class="moving-image1" src="{{asset('frames/Frame 13.png')}}" style="bottom: -83%; width: 3000px; z-index: 1;">
            <img class="moving-image2" src="{{asset('frames/Frame 13.png')}}" style="bottom: -83%; width: 3000px; z-index: 1;">
        </div>


        <div style="position: relative; bottom: -180%; width: 100vw; min-height: 855px;">
            <img src="{{asset('frames/Rectangle 10.png')}}" style="position: absolute; width: 100vw; bottom: -80%;">
            <div style="position: absolute; left: 10%; width: 86%; bottom: 20%;">
                <img src="{{asset('frames/Rectangle 9.png')}}" style="width: 1150px; height: 550px; z-index: 0;">
            </div>
            <div style="position: absolute; left: 71.3%; bottom: 21.7%">
                <img src="{{asset('frames/Rectangle 11.png')}}" style="width: 275px; height: 535px; z-index: 1;">
            </div>
            <div style="position: absolute; bottom: 48%; left: 17%;">
                <img src="{{asset('frames/TOTAL.png')}}" style="width: 550px; height: 130px;">
            </div>
            <h1 class="poppins-bold" style="position: absolute; bottom: 49%; left: 17%; font-size: 65px; letter-spacing:2.5px;">Prizes.</h1>
            <h1 class="poppins-bold" style="position: absolute; bottom: 34%; left: 17%; font-size: 90px; color:red;">
                RP 9.000.000
            </h1>
            <div style="position: absolute; bottom: 37%; left: 61%;">
                <img src="{{asset('frames/prize.png')}}" style="width: 330px; height: 270px;">
            </div>

            <div style="position: absolute; bottom: 75.9%; left: 12.6%;">
                <img src="{{asset('frames/blackBox.png')}}" style="width: 35px; height: 35px;">
            </div>
            <div style="position: absolute; bottom: 27.5%; left: 12.6%">
                <img src="{{asset('frames/blackBox.png')}}" style="width: 35px; height: 35px;">
            </div>

            <div style="position: absolute; bottom: 31%; left: 11.1%">
                <img src="{{asset('frames/verticalLine.png')}}" style="height: 385px;">
            </div>
            <div style="position: absolute; bottom: 31%; right: 11.1%;">
                <img src="{{asset('frames/verticalLine.png')}}">
            </div>


            <div style="position: absolute; bottom: 81.5%; left: 15%;">
                <img src="{{asset('frames/horizontalLine.png')}}">
            </div>
            <div style="position: absolute; bottom: 24.5%; left: 15%;">
                <img src="{{asset('frames/horizontalLine.png')}}">
            </div>

            <div style="position: absolute; bottom: 75.85%; right: 12.3%;">
                <img src="{{asset('frames/whiteBox.png')}}" style="width: 35px; height: 35px;">
            </div>
            <div style="position: absolute; bottom: 26%; right: 12.35%;">
                <img src="{{asset('frames/whiteBox.png')}}" style="width: 35px; height: 35px;">
            </div>

            {{-- prize --}}
            <div style="position: absolute; bottom: -22%; left: 15%;">
                <img src="{{asset('frames/2ND.png')}}" style="heigth: 120px; width: 280px; z-index: 0;">
            </div>
            <div style="position: absolute; bottom: -17%; left: 40%;">
                <img src="{{asset('frames/1ST.png')}}" style="height: 180px; width: 330px;">
            </div>
            <div style="position: absolute; bottom: -22%; left: 67%;">
                <img src="{{asset('frames/3RD.png')}}" style="height: 120px; width: 280px;">
            </div>
            {{-- prize END --}}

            {{-- trophy --}}
            <div style="position: absolute; bottom: -45%; left: 16%;">
                <img src="{{asset('frames/silver.png')}}" style="height: 230px;">
            </div>
            <div style="position: absolute; bottom: -50%; left: 39%;">
                <img src="{{asset('frames/gold.png')}}" style="height: 330px; width: 320px;">
            </div>

            <div style="position: absolute; bottom: -49%; left: 39%;">
                <img src="{{asset('frames/star 1.png')}}" style="height: 60px;">
            </div>
            <div style="position: absolute; bottom: -49%; left: 57%;">
                <img src="{{asset('frames/star 2.png')}}" style="height: 60px;">
            </div>
            <div style="position: absolute; bottom: -43%; left: 69%;">
                <img src="{{asset('frames/bronze.png')}}" style="height: 230px;">
            </div>
            {{-- trophy END --}}

            {{-- desc prize --}}
            <div style="position: absolute; left: 14%; bottom: -75%;">
                <img src="{{asset('frames/2ndPrize.png')}}" style="width: 280; height: 170px;">
            </div>
            <div style="position: absolute; left: 40.5%; bottom: -75%;">
                <img src="{{asset('frames/1stPrize.png')}}" style="width: 280; height: 170px;">
            </div>
            <div style="position: absolute; left: 68.5%; bottom: -75%;">
                <img src="{{asset('frames/3rdPrize.png')}}" style="width: 280; height: 170px;">
            </div>
        </div>

        <img src="{{asset('frames/_.png')}}" style="position:absolute; right: 7%; width: 323px; height: 478px; z-index: 0; bottom: -197%;">
        <h1 class="poppins-bold" style="font-size: 150px; z-index: 1; position:absolute; left: 23%; bottom: -185%;">
            <span style="color:#2F0CBD">WHY</span>
            <span style="color:#BC87FF">YOU</span>
        </h1>
        <p class="poppins-bold" style="font-size: 150px; z-index: 1; position:absolute; left: 13%; bottom: -197%;">
            <span style="color:#BC87FF">SHOULD</span>
            <span style="color:#2F0CBD">JOIN<span style="color:#BC87FF">?</span></span>
        </p>
        <img src="{{asset('frames/_ (1).png')}}" style="position: absolute; left: 0%; bottom: -250%; width: 603px; height: 1378px; z-index: 0;">
        <img src="{{asset('frames/photos.png')}}" style="position: absolute; bottom: -240%; left: 5%; width: 1300px; height: 800px; z-index: 1;">
        <img src="{{asset('frames/_ 2.png')}}" style="position: absolute; bottom: -305%; right: 0%; z-index: 0;">
        <h1 class="poppins-bold" style="letter-spacing: -4px; color: black; position:absolute; bottom: -258%; left: 5%; font-size: 50px;">< / ></h1>
        <h1 class="poppins-bold" style="color: black; position:absolute; bottom: -263%; left: 5%; font-size: 58px;">
            Frequently Asked Questions
        </h1>

        <p class="poppins-light" style="font-size: 28px; color:black; position:absolute; bottom: -270%; left: 5.5%;">Need answers? We got you ;)</p>
        <p class="poppins-light" style="font-size: 28px; color:black; position:absolute; bottom: -273%; left: 5.5%;">Can't find your questions? Don't hesitate to contact us</p>
        <button type="reset" class="gradient2 gradient-button2 poppins-light" style="position:absolute; bottom: -277%; width: 205px; font-size: 20px; left: 5%;">Ask a Question</button>

        <img src="{{asset('frames/background3.png')}}" style="position: absolute; bottom: -385%; z-index: 0;">
        <p class="faq" style="bottom: -291%; z-index: 1;">Apa saja persyaratan untuk berpartisipasi di Hacktech?<button type="reset" class="icon"><span class="bi bi-chevron-down"></span></button></p>
        <p class="faq" style="bottom: -298.5%; z-index: 1;">Apakah Hacktech gratis?<button type="reset" class="icon"><span class="bi bi-chevron-down"></span></button></p>
        <p class="faq" style="bottom: -306%; z-index: 1;">Kapan deadline pendaftaran?<button type="reset" class="icon"><span class="bi bi-chevron-down"></span></button></p>
        <p class="faq" style="bottom: -313.5%; z-index: 1;">Bisakah saya bergabung dengan lebih dari satu tim?<button type="reset" class="icon"><span class="bi bi-chevron-down"></span></button></p>
        <p class="faq" style="bottom: -321%; z-index: 1;">Jika saya tidak memiliki basic, bisakah ikut berpartisipasi?<button type="reset" class="icon"><span class="bi bi-chevron-down"></span></button></p>
        <p class="faq" style="bottom: -330%; z-index: 1; height: 120px;">Bagaimana jika para peserta sudah menyiapkan dan menggunakan source<br>code sebelum acara dimulai?<button type="reset" class="icon" style="top: 39.5% !important;"><span class="bi bi-chevron-down"></span></button></p>
        <p class="faq" style="bottom: -339%; z-index: 1; height: 120px;">Jika saya tidak lolos seleksi untuk Hacktech, bagaimana dengan biaya<br>pendaftaran saya? Dan bagaimana jika lolos tetapi tidak ingin melanjutkan?<button type="reset" class="icon" style="margin-left: 40px; top: 39.5% !important;"><span class="bi bi-chevron-down"></span></button></p>

        <img src="{{asset('frames/contactUs.png')}}" style="position: absolute; bottom: -384%; width: 102px; height: 786px;">
        <img src="{{asset('frames/backgroundFAQ.png')}}" style="position:absolute; bottom: -384.5%; right: 0%; width: 1246px; height: 790px; z-index: 0;">
        <img src="{{asset('frames/purpleBlur.png')}}" style="position:absolute; bottom: -383.3%; right: 0%; width: 1246px; height: 768px;">

        <h1 class="poppins-light" style="color: white; font-size: 64px; position:absolute; bottom: -352%; left: 28%; z-index: 1;">Have a Different Question?</h1>
        <p class="poppins-light" style="color: white; font-size: 24px; position:absolute; bottom: -357%; left: 49.7%; z-index: 2;">Email us anytime</p>
        <p class="poppins-bold" style="color: white; letter-spacing: 3px; font-size: 30px; position:absolute; bottom: -359.3%; left: 44.3%; z-index: 2;">Or call - 081 234 5678</p>
    </div>
</body>
</html>



