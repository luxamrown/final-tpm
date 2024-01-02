<style>
    .background1 {
        background: linear-gradient(to bottom, #FFF, #BC87FF, #2F0CBD, #0D0043);
    }

    .background2 {
        background-color: white;
    }

    .gap {
        margin-right: 20px;
    }

    .smallFont {
        font-size: 25px;
        font-weight: 200;
    }

    .sty1 {
        margin-bottom: 0px;
        letter-spacing: 3px;
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
                            <img src="{{asset('frames/Ellipse 2.png')}}" style="position: absolute; right: 53%; width: 60px; height: 50px;">
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
                        <img src="{{asset('frames/image 1.png')}}" style="width: 450px; height: 300px; position: absolute; bottom: -3%;">
                        <img src="{{asset('frames/Rectangle 2.png')}}" alt="" style="width: 486px; height: 620px; margin-left: 8px; z-index: 0;">
                    </div>
                </div>
                <img src="{{asset('frames/Frame1.png')}}" alt="" style="width: 230px; height: 200px; margin-top: 40px; margin-bottom: 130px; position: absolute; left: 30px;">
            </div>
        </div>
        <img src="{{asset('frames/Ellipse 1.png')}}" style="z-index: 1; position: absolute; right: 0%; width: 750px; height: 600px; bottom: -45%;">
    </div>
    <div class="background2" style="height: 1000px;">
        <h1 class="poppins-bold" style="font-size: 130px; color:black; margin-top: 100px; margin-left: 100px; letter-spacing: 10px;"> JULY <span style="margin-left: 40px; letter-spacing: 0px; !important">28 - 30</span></h1>
        <h1 class="poppins-bold" style="font-size: 130px; color: black; margin-left: 100px; letter-spacing: 10px;">2023</h1>
        <img src="{{asset('frames/image 2.png')}}" style="width: 850px; height: 550px; position: absolute; right: 5%; bottom: -153%;">
    </div>
</body>
</html>
