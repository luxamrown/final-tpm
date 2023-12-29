<style>
    .background {
        background: linear-gradient(to bottom, #FFF, #FFF, #BC87FF, #2F0CBD, #0D0043);
    }

    .gap {
        margin-right: 20px;
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
<body class="background" >
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
                <div class="col">
                    <span class="colLeft poppins-bold" style="font-weight: bold; letter-spacing: -3px; margin-top: 60px;"> < / > </span>
                    <span class="colLeft poppins" style="margin-top: 0px; font-size: 30px; font-weight: 450; letter-spacing: 17px; font-size: 25px;">WELCOME</span>
                    <h1 class="colLeft poppins-bold" style="margin-top: 25px; letter-spacing: 13px; font-size: 100px;"><span style="color: #0D0043">HACK</span><span style="color: #2F0CBD">TECH</span></h1>
                    <p class="colLeft poppins" style="width:650px; font-size: 30px;">
                        Collaborative event where individuals work
                        together as teams  to create innovative
                        solutions and make into code.
                    </p>
                    <button type="reset" class="poppins" id="register" style="border: #0D0043; margin-left: 60px; ">Register Here !</button>
                </div>
            </div>
            <img src="{{asset('frames/Frame1.png')}}" alt="" style="width: 230px; height: 200px; margin-top: 40px; margin-bottom: 130px; position: absolute; left: 30px;">
        </div>
    </div>
</body>
</html>
