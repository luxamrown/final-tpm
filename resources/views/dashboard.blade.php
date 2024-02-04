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
        background: linear-gradient(to right, #0D0043, #2F0CBD) !important;
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

    li a:hover,
    footer p:hover {
        font-weight: 800;
        text-decoration: underline;
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

    .contactForm {
        width: 383px;
        height: 46px;
        background-color: white;
        border-color: white;
        border-radius: 10px;
        border: none;
    }

    ::placeholder {
        color: black;
        font-family: 'Poppins';
    }

    .timelineBox {
        width: 428px;
        background: linear-gradient(to right, #2F0CBD, #BC87FF);
        position: absolute;
        font-size: 40px;
        color:white;
        padding: 10px 25px 10px 25px;
        border-radius: 40px;
        font-weight:bold;
    }

    .timelineDate {
        color: #4D26CB;
        position:absolute;
        font-size: 40px;
        font-weight: bold;
    }

    .pillBox {
        width: 637px;
        height: 75px;
        background-color: white;
        border-radius: 38px;
        box-shadow: inset 7px 3px 7px rgba(0, 0, 0, 0.5);
    }

    .innerPillButton {
        width: 277px;
        height: 52px;
        border-radius: 38px;
        padding: 7.7px;
        gap: 7.7px;
        color: white;
        border: none;
        cursor: pointer;
        outline: none;
        background-color: #AEAEAE;
        box-shadow: 5px 0px 10px rgba(0, 0, 0, 0.5);
    }

    .innerPillButton.active {
        background-color: #2F0CBD;
    }

    .eventButton {
        width: 171px;
        height: 34px;
        background:transparent;
        border: 1px solid #FFF;
        border-radius:13px;
        position:absolute;
        bottom: -750%;
        color:white;
        text-align:center;
        font-size: 14px;
        letter-spacing: 2px;
        padding-left: 18px;
    }

    .getInTouch {
        color: white;
        border: none;
        position: absolute;
        z-index: 1;
        background-color: transparent;
        outline: none;
    }

    .getInTouch::placeholder {
        color: #666;
        font-family: 'Poppins-Light';
        font-size: 20px;
    }
    .registButton {
        position: absolute;
        bottom: 30%;
    }
    img[src="{{asset('frames/Ellipse 2.png')}}"] {
            left: 63%;
        }

    textarea {
        padding-top: 10px;
    }

    textarea.contactForm {
        resize: none;
    }

    textarea.getInTouch {
        width: 304px;
        height: 200px;
        resize: none;
    }

    .juries-container {
        position: absolute;
        width: 900px;
        height: 500px;
        overflow: hidden;
    }

    .juries-container img {
        position: absolute;
        top: 0;
        left: 0;
        transition: opacity 0.5s ease-in-out;
        opacity: 0;
    }
    .second-image {
        opacity: 1 !important;
    }
    .image-container1 {
        position: absolute;
        width: 100%;
        height: 460px;
        bottom: 70%;
        overflow: hidden;
    }
    .image-container1 img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transition: opacity 0.5s ease;
    }
    .image-container2 {
        position: absolute;
        width: 100%;
        height: 460px;
        bottom: 57%;
        overflow: hidden;
    }
    .image-container2 img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transition: opacity 0.5s ease;
    }
    .image-container3 {
        position: absolute;
        width: 100%;
        height: 460px;
        bottom: 42%;
        overflow: hidden;
    }
    .image-container3 img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transition: opacity 0.5s ease;
    }
    .visible-image {
        opacity: 1;
        z-index: 1;
    }
    .hidden-image {
        opacity: 0;
        z-index: 1;
    }
    .image-container1:hover .hidden-image {
        opacity: 1;
        z-index: 1;
    }
    .image-container1:hover .visible-image {
        opacity: 0;
        z-index: 1;
    }
    .image-container2:hover .hidden-image {
        opacity: 1;
        z-index: 1;
    }
    .image-container2:hover .visible-image {
        opacity: 0;
        z-index: 1;
    }
    .image-container3:hover .hidden-image {
        opacity: 1;
        z-index: 1;
    }
    .image-container3:hover .visible-image {
        opacity: 0;
        z-index: 1;
    }

    .sponsorBackground {
        background-color: black;
        width: 100%;
        height: 2080px;
    }
    .hidden {
        display: none;
    }
    .visible {
        display: inline;
    }

    @media (min-width: 1920px) {

        .image-container1{
            left: 7% !important;
        }
        .image-container2{
            left: 7% !important;
        }
        .image-container3{
            left: 7% !important;
        }
        .background1 {
            width: 100%;
            height: auto;
            font-size: auto;
        }

        .responsiveBox {
            margin-left: 300px !important;
        }

        .background3 {
            position: absolute;
            bottom: -180%;
        }

        img[src="{{asset('frames/background3.png')}}"] {
            height: 2100px;
            width: 1920px;
            bottom: -400% !important;
        }
        img[src="{{asset('frames/_ 2.png')}}"] {
            bottom: -335% !important;
        }

        img[src="{{asset('frames/Ellipse 1.png')}}"] {
            height: 600px !important;
            width: 1000px !important;
        }
        img[src="{{asset('frames/Frame1.png')}}"] {
            left: 10% !important;
        }

        .navbar-brand {
            margin-right: 920px !important;
        }

        img[src="{{asset('frames/image 2.png')}}"] {
            right: 10% !important;
            width: 1000px !important;
            height: 580px !important;
        }

        #text1 {
            position: absolute;
            width: 490px !important;
            right: 35% !important;
            bottom: 40%;
        }
        #text2 {
            position: absolute;
            width: 490px !important;
            right: 35% !important;
        }

        img[src="{{asset('frames/Rectangle 10.png')}}"] {
            position: absolute;
            bottom: -145% !important;
        }

        .aboutUs {
            left: 35% !important;
        }

        img[src="{{asset('frames/codingPic.png')}}"] {
            position: absolute;
            left: 25% !important;
        }

        #desc1 {
            left: 25% !important;
        }

        img[src="{{asset('frames/Rectangle 11.png')}}"] {
            position: absolute;
            bottom: 21% !important;
            z-index: 0 !important;
        }

        #prize {
            position: absolute;
            left: 55% !important;
        }
        .totalPrize {
            left: 22% !important;
        }

        .verticalLineL {
            left: 18% !important;
        }

        img[src="{{asset('frames/prize.png')}}"] {
            width: 300px !important;
            height: 260px !important;
            z-index: 1;
        }
        #blackBox1 {
            position: absolute;
            left: 18.95% !important;
            bottom: 75.9% !important;
        }
        #blackBox2 {
            position: absolute;
            left: 18.95% !important;
            bottom: 27.5% !important;
        }

        #blackFrame {
            position: absolute;
            left: 61.5% !important;
        }

        #verticalLineR {
            position: absolute;
            right: 25.2% !important;
        }

        img[src="{{asset('frames/horizontalLine.png')}}"] {
            width: 93% !important;
        }
        .horizontalLine {
            left: 22% !important;
        }

        .whiteBoxPrize {
            position: absolute;
            right: 26.2% !important;
        }

        #wy {
            bottom: -217% !important;
            left: 28% !important;
        }

        #sj {
            bottom: -229% !important;
            left: 20% !important;
        }

        img[src="{{asset('frames/photos.png')}}"] {
            bottom: -273% !important;
            left: 12% !important;
            width: 1400px !important;
        }
        img[src="{{asset('frames/_ (1).png')}}"] {
            bottom: -279% !important;
        }
        img[src="{{asset('frames/_.png')}}"] {
            bottom: -227% !important;
        }
        img[src="{{asset('frames/Rectangle 2458.png')}}"] {
            bottom: -856% !important;
            left: 15% !important;
        }
        img[src="{{asset('frames/image 90.png')}}"] {
            bottom: -854% !important;
            left: 44% !important;
        }
        img[src="{{asset('frames/Rectangle 2460.png')}}"] {
            bottom: -858% !important;
            left: 22% !important;
        }
        img[src="{{asset('frames/Rectangle 2459.png')}}"] {
            bottom: -858% !important;
            left: 21% !important;
        }

        #contactUs {
            bottom: -820% !important;
            left: 24% !important;
        }

        #inputName {
            bottom: -823% !important;
            left: 24% !important;
        }
        #inputSubject {
            bottom: -829% !important;
            left: 24% !important;
        }
        #inputEmail {
            bottom: -835% !important;
            left: 24% !important;
        }
        #inputMessage {
            bottom: -850% !important;
            left: 24% !important;
        }

        #faq1 {
            bottom: -304% !important;
        }

        #codeTag {
            bottom: -276.5% !important;
        }

        img[src="{{asset('frames/Vector.png')}}"] {
            width: 100% !important;
            height: 2080px !important;
        }
        img[src="{{asset('frames/Rectangle 2450.png')}}"] {
            width: 100% !important;
            height: 2080px !important;
        }
        img[src="{{asset('frames/Rectangle 2440.png')}}"] {
            bottom: -590% !important;
            left: 14% !important;
        }
        img[src="{{asset('frames/Juries (FIX).png')}}"] {
            bottom: -585% !important;
            left: 24% !important;
        }

        .juriesText1 {
            bottom: -555% !important;
            left: 35% !important;
        }
        .juriesText2 {
            bottom: -557% !important;
            left: 42% !important;
        }

        img[src="{{asset('frames/Rectangle 2457.png')}}"] {
            bottom: -880% !important;
        }
        img[src="{{asset('frames/Rectangle 2463.png')}}"] {
            bottom: -880% !important;
        }
        img[src="{{asset('frames/Line 14.png')}}"] {
            bottom: -873% !important;
            width: 87% !important;
        }
        img[src="{{asset('frames/Frame 40199.png')}}"] {
            bottom: -851% !important;
            left: 18.5% !important;
        }
        .footer1row{
            bottom: -868.3% !important;
            font-size: 26px !important;
        }
        .footer2row {
            bottom: -871.3% !important;
            font-size: 26px !important;
        }

        .footerHacktech {
            bottom: -870.4% !important;
            font-size: 56px !important;
        }

        .copyrights {
            bottom: -877.5% !important;
            font-size: 26px !important;
        }

        #nameLine {
            bottom: -824% !important;
            left: 24% !important;
        }
        #subjectLine {
            bottom: -830% !important;
            left: 24% !important;
        }
        #emailLine {
            bottom: -836% !important;
            left: 24% !important;
        }
        #messageLine {
            bottom: -851% !important;
            left: 24% !important;
        }
        #sendButton {
            bottom: -856% !important;
            left: 25% !important;
        }

        img[src="{{asset('frames/locator 1.png')}}"]{
            bottom: -840% !important;
            left: 56% !important;
        }
        img[src="{{asset('frames/Rectangle 2462.png')}}"]{
            bottom: -840% !important;
            left: 60% !important;
        }
        #locatorDesc {
            bottom: -839.5% !important;
            left: 62.5% !important;
        }

        img[src="{{asset('frames/GET IN TOUCH.png')}}"]{
            bottom: -805% !important;
            left: 20% !important;
        }
        img[src="{{asset('frames/Rectangle 2454.png')}}"]{
            width: 1450px !important;
            bottom: -768% !important;
            left: 13% !important;
            height: ;
        }
        img[src="{{asset('frames/image 89.png')}}"]{
            bottom: -762% !important;
            left: 20% !important;
        }
        img[src="{{asset('frames/web1.png')}}"]{
            bottom: -759.5% !important;
            left: 58.5% !important;
        }
        img[src="{{asset('frames/web2.png')}}"]{
            bottom: -759.5% !important;
            left: 72.5% !important;
        }
        img[src="{{asset('frames/Rectangle 2456.png')}}"]{
            width: 1355px !important;
            bottom: -729% !important;
            left: 15% !important;
        }

        #textEvent {
            bottom: -761% !important;
        }

        #headerEvent {
            bottom: -728% !important;
            left: 39% !important;
        }

        #dateEvent {
            bottom: -742% !important;
            left: 63% !important;
        }

        #pillButtons {
            bottom: -736% !important;
            left: 34% !important;
        }

        #eventButton1 {
            bottom: -760% !important;
            left: 58% !important;
        }
        #eventButton2 {
            bottom: -760% !important;
            left: 72% !important;
        }
        img[src="{{asset('frames/MEDIA PARTNER.png')}}"]{
            left: 19% !important;
        }
        img[src="{{asset('frames/Line 9.png')}}"]{
            width: 100% !important;
        }
        img[src="{{asset('frames/Sponsor (1).png')}}"]{
            left: 16% !important;
        }
        img[src="{{asset('frames/SPONSOR.png')}}"]{
            left: 30% !important;
            bottom: -606% !important;
        }

        img[src="{{asset('frames/Juries.png')}}"]{
            bottom: -540% !important;
        }
        img[src="{{asset('frames/Rectangle 2438.png')}}"]{
            bottom: -535% !important;
            left: 14% !important;
        }
        img[src="{{asset('frames/Rectangle 2455.png')}}"]{
            bottom: -532.8% !important;
            left: 16.1% !important;
            height: 570px !important;
        }
        img[src="{{asset('frames/Mentorss.png')}}"]{
            left: 20% !important;
            bottom: -531% !important;
        }
        img[src="{{asset('frames/BUSINESS.png')}}"]{
            left: 18.7% !important;
        }

        #mentorText1 {
            left: 18% !important;
            bottom: -499% !important;
        }
        #mentorText2 {
            left: 18% !important;
            bottom: -502.5% !important;
        }
        #mentorText {
            left: 18.1% !important;
            bottom: -494.5% !important;
        }
        img[src="{{asset('frames/codeTag3.png')}}"]{
            bottom: -440% !important;
        }
        img[src="{{asset('frames/Ellipse 11.png')}}"]{
            bottom: -470% !important;
        }
        img[src="{{asset('frames/line2.png')}}"]{
            bottom: -474% !important;
            height: 1000px !important;
        }
        img[src="{{asset('frames/Ellipse 2.png')}}"] {
            left: 72%;
        }


        #htDay3 {
            bottom: -474.4% !important;
            left: 49.4% !important;
        }
        #htDay3Text {
            bottom: -476.5% !important;
            left: 23% !important;
        }
        #htDay3Date {
            bottom: -475.9% !important;
        }

        #htDay2 {
            bottom: -462.4% !important;
            left: 49.4% !important;
        }
        #htDay2Text {
            bottom: -464.5% !important;
        }
        #htDay2Date {
            bottom: -463.9% !important;
            left: 32% !important;
        }

        #htDay1 {
            bottom: -452.4% !important;
            left: 49.4% !important;
        }
        #htDay1Text {
            bottom: -454.5% !important;
            left: 23% !important;
        }
        #htDay1Date {
            bottom: -453.9% !important;
        }

        #tm {
            bottom: -441.4% !important;
            left: 49.4% !important;
        }
        #tmText {
            bottom: -443% !important;
        }
        #tmDate {
            bottom: -442.9% !important;
            left: 32% !important;
        }

        #cr {
            bottom: -432.4% !important;
            left: 49.4% !important;
        }
        #crText {
            bottom: -434.5% !important;
            left: 23% !important;
        }
        #crDate {
            bottom: -433.9% !important;
        }

        #or {
            bottom: -421.4% !important;
            left: 49.4% !important;
        }
        #orText {
            bottom: -423% !important;
        }
        #orDate {
            bottom: -422.9% !important;
            left: 32% !important;
        }

        img[src="{{asset('frames/TIMELINE.png')}}"]{
            bottom: -412% !important;
            left: 33% !important;
        }
        img[src="{{asset('frames/backgroundFAQ.png')}}"]{
            bottom: -402% !important;
            width: 85% !important;
            height: 830px !important;
        }
        img[src="{{asset('frames/purpleBlur.png')}}"]{
            bottom: -401% !important;
            width: 85% !important;
            height: 810px !important;
        }
        img[src="{{asset('frames/contactUs.png')}}"]{
            bottom: -402% !important;
            height: 830px !important;
        }

        #question {
            bottom: -390% !important;
        }
        .submitButton {
            bottom: -397% !important;
        }

        .questionForm {
            bottom: -392% !important;
            left: 35.5% !important;
        }

        .subjectForm {
            bottom: -382% !important;
            left: 35.5% !important;
        }
        .emailForm {
            bottom: -377% !important;
            left: 57.7% !important;
        }
        .nameForm {
            bottom: -377% !important;
            left: 35.5% !important;
        }
        .callText {
            bottom: -373% !important;
            left: 46.5% !important;
        }
        .emailText {
            bottom: -370% !important;
            left: 51% !important;
        }
        .headerText {
            bottom: -367% !important;
            left: 35.5% !important;
        }

        .faq7 {
            bottom: -352.5% !important
        }
        .faq6 {
            bottom: -343% !important
        }
        .faq5 {
            bottom: -333.5% !important
        }
        .faq4 {
            bottom: -326% !important
        }
        .faq3 {
            bottom: -319% !important
        }
        .faq2 {
            bottom: -311.5% !important
        }
        .faq1 {
            bottom: -304% !important
        }
        .askQ {
            bottom: -291% !important;
        }

        .freqAQ {
            bottom: -281% !important;
        }
        .subText1 {
            bottom: -285% !important;
        }
        .subText2 {
            bottom: -287% !important;
        }

        .prizeDiv {
            left: 17% !important;
        }
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

    <div class="background1" style="height: 855px;" id="homeTarget">
        <div style="background-color: white;" id="navbar">
            <nav class="navbar navbar-expand-lg navbar-light" style="margin-top: 10px; margin-bottom: 20px;">

                <a class="navbar-brand" href="#" style="margin-left: 100px; font-weight: bold; margin-right: 400px;">HACKTECH</a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link gap" href="#" style="color:black; font-weight:200;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link gap" style="color: black; font-weight:200; cursor: pointer;" id="aboutButton">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link gap" style="color: black; font-weight:200; cursor: pointer;" id="championButton">Champion & Prizes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link gap" style="color: black; font-weight:200; cursor: pointer;" id="faqButton">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link gap" style="color: black; font-weight:200; cursor: pointer;" id="timelineButton">Timeline</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link gap" style="color: black; font-weight:200; cursor: pointer;" id="mentorButton">Mentor & Jury</a>
                        </li>
                        <li class="nav-item">
                            <a href="/login" id="loginButton" style="text-align:center; margin-top: 5px; text-decoration: none; position:absolute; top: 10%">Login</a>
                        </li>
                    </ul>
              </div>
            </nav>
            <hr style="opacity: 100%; background-color:black; margin-left: 100px; margin-right: 110px; margin-bottom: 0px; height: 3px; border-radius: 2px;">
        </div>

        <div class="whiteBox responsiveBox border border-light shadow-lg" style="margin-top: 150px;">
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
                        <a href="/register" class="poppins registButton" id="register" style="border: #0D0043; margin-left: 60px; text-decoration: none; font-size: 32px; text-align:center; padding-top: 10px;">Register Here !</a>
                        <span>
                            <img src="{{asset('frames/Ellipse 2.png')}}" style="position: relative; right: -6%; width: 55px; height: 50px;">
                        </span>
                    </div>
                    <div class="col" style="padding-right: 0px; position: relative">
                        <div style="position: absolute; z-index: 1; margin-left: 45px; margin-top: 110px;">
                            <h3 class="poppins"  style="letter-spacing: 3px;"> Sponsored by </h3>
                            <span>
                                <img src="{{asset('frames/brandname.png')}}" style="width: 150px; height: 150px; position:absolute; right: 0%; bottom: 10%; left: 115%; cursor: pointer;">
                            </span>
                            <p class="smallFont sty1" style="margin-top: 30px; width: 30px;">View</p>
                            <div style="position: relative;">
                                <img src="{{asset('frames/arrow 1.png')}}" style="width: 70px; height: 70px; position: absolute; right: 40%; bottom:40%; cursor:pointer; z-index:1;" id="sponsorButton">
                                <p class="smallFont sty1" style="position: relative; z-index: 2; width: 30px;">
                                    All
                                </p>
                                <p class="smallFont sty1" style="width: 30px;">Sponsors</p>
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

        <img src="{{asset('frames/Play button.png')}}" id="playButton" class="visible" style="position: absolute; left: 23%; width: 165px; height: 167px; bottom: 70%;" onclick="togglePlayPause()">
        <img src="{{asset('frames/pause.png')}}" id="pauseButton" class="hidden" style="position: absolute; left: 23%; width: 165px; height: 160px; bottom: 70%;" onclick="togglePlayPause()">

        <div class="poppins" style="position:absolute; left: 6%; bottom: 60%;">
            <h1 style="letter-spacing: 13px;  font-size: 70px; color:black;">Play <p style="margin-top: 17px;">Video</p></h1>
            <p class="smallFont poppins-light" style="margin-top: 30px; letter-spacing: 3px">VIDEO RECAP TECHNO</p>
        </div>
        <img src="{{asset('frames/teamwork.png')}}" style="width: 600px; height: 900px; position: absolute; bottom: 7%; left: 7%;">
        <img src="{{asset('frames/image 11.png')}}" style="width: 50px; height: 50px; position: absolute; bottom: 52%; left: 53%;">
        <div style="position: absolute; bottom: 30%; right: 9%; width: 490px;">
            <h1 class="poppins" id="text1" style="color:black; text-align:center; line-height: 1.5; font-weight: bold; margin-bottom: 30px;">
                Don't wait ! Do something when you are young, when you have nothing to lose, and
                keep that in mind
            </h1>
            <h3 class="poppins-light" id="text2" style="color: black; text-align:center; font-style: italic;">- Steve Jobs</h3>
        </div>
        <img src="{{asset('frames/image 12.png')}}" style="width: 50px; height: 50px; position: absolute; bottom: 27%; left: 90%;">
        <img src="{{asset('frames/Ellipse 4.png')}}" style="position:absolute; bottom: -5%; right: 0%; height: 500px;">
        <img src="{{asset('frames/Frame 28.png')}}" style="position:absolute; bottom: -5%; right: 0%; height: 490px;">
        <img src="{{asset('frames/codeTag.png')}}" style="position:absolute; bottom: 5%; right: 0%; height: 90px; width: 115px;">
        <h1 class="poppins-bold aboutUs" id="aboutTarget" style="color: black; position: absolute; bottom: -5%; left: 25%; font-size: 130px;">ABOUT US</h1>
        <img src="{{asset('frames/codingPic.png')}}" style="position: absolute; height: 600px; width: 1000px; bottom: -40%; left: 14%;">
        <h1 class="poppins" id="desc1" style="position: absolute; bottom: -70%; left: 14%; height: 500px; width: 1000px; color: black; text-align: center; font-size: 23px; line-height: 1.7;">
            Hackathon adalah sebuah acara kolaboratif dan intensif di mana individu atau tim bekerja bersama dalam waktu terbatas, seringkali 48 jam,
            untuk menyelesaikan tantangan atau menciptakan solusi inovatif,
            khususnya di bidang teknologi dan pengembangan perangkat lunak.
            Peserta biasanya bersaing untuk membuat aplikasi atau proyek yang dapat mengatasi masalah tertentu,
            dan acara ini juga dapat mencakup sesi mentoring dari para ahli di berbagai bidang.
            Hackathon terdiri dari tiga bidang, yaitu bisnis, teknologi, dan design.
        </h1>
        <a href="/register" class="poppins gradient center-element gradient-button1" style="left: 40%; text-decoration:none; text-align:center;">Register</a>
        <a href="/guidebook" class="poppins gradient center-element gradient-button1" style="left: 60%; text-decoration:none; text-align:center;">Guidebook</a>

        <div class="tampung">
            <img class="moving-image1 movingBox" src="{{asset('frames/Frame 13.png')}}" style="bottom: -83%; width: 3000px; z-index: 1;">
            <img class="moving-image2 movingBox" src="{{asset('frames/Frame 13.png')}}" style="bottom: -83%; width: 3000px; z-index: 1;">
        </div>


        <div style="position: relative; bottom: -180%; width: 100vw; min-height: 855px;">
            <img src="{{asset('frames/Rectangle 10.png')}}" style="position: absolute; width: 100vw; bottom: -80%;">
            <div class="prizeDiv" style="position: absolute; left: 10%; width: 86%; bottom: 20%;">
                <img src="{{asset('frames/Rectangle 9.png')}}" id="championTarget" style="width: 1150px; height: 550px; z-index: 0;">
            </div>
            <div style="position: absolute; left: 71.3%; bottom: 21.7%" id="blackFrame">
                <img src="{{asset('frames/Rectangle 11.png')}}" style="width: 275px; height: 535px; z-index: 1;">
            </div>
            <div class="totalPrize" style="position: absolute; bottom: 48%; left: 17%;">
                <img src="{{asset('frames/TOTAL.png')}}" style="width: 550px; height: 130px;">
            </div>
            <h1 class="poppins-bold totalPrize" style="position: absolute; bottom: 49%; left: 17%; font-size: 65px; letter-spacing:2.5px;">Prizes.</h1>
            <h1 class="poppins-bold totalPrize" style="position: absolute; bottom: 34%; left: 17%; font-size: 90px; color:red;">
                RP 9.000.000
            </h1>
            <div style="position: absolute; bottom: 37%; left: 61%;" id="prize">
                <img  src="{{asset('frames/prize.png')}}" style="width: 330px; height: 270px;">
            </div>

            <div style="position: absolute; bottom: 75.9%; left: 12.6%;" id="blackBox1">
                <img src="{{asset('frames/blackBox.png')}}" style="width: 35px; height: 35px;">
            </div>
            <div style="position: absolute; bottom: 27.5%; left: 12.6%" id="blackBox2">
                <img src="{{asset('frames/blackBox.png')}}" style="width: 35px; height: 35px;">
            </div>

            <div class="verticalLineL" style="position: absolute; bottom: 31%; left: 11.1%">
                <img src="{{asset('frames/verticalLine.png')}}" style="height: 385px;">
            </div>
            <div style="position: absolute; bottom: 31%; right: 11.1%;" id="verticalLineR">
                <img src="{{asset('frames/verticalLine.png')}}">
            </div>


            <div class="horizontalLine" style="position: absolute; bottom: 81.5%; left: 15%;">
                <img src="{{asset('frames/horizontalLine.png')}}">
            </div>
            <div class="horizontalLine" style="position: absolute; bottom: 24.5%; left: 15%;">
                <img src="{{asset('frames/horizontalLine.png')}}">
            </div>

            <div class="whiteBoxPrize" style="position: absolute; bottom: 75.85%; right: 12.3%;">
                <img src="{{asset('frames/whiteBox.png')}}" class="whiteBox1" style="width: 35px; height: 35px;">
            </div>
            <div class="whiteBoxPrize" style="position: absolute; bottom: 26%; right: 12.35%;">
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
        <h1 id="wy" class="poppins-bold" style="font-size: 150px; z-index: 1; position:absolute; left: 23%; bottom: -185%;">
            <span style="color:#2F0CBD">WHY</span>
            <span style="color:#BC87FF">YOU</span>
        </h1>
        <p id="sj" class="poppins-bold" style="font-size: 150px; z-index: 1; position:absolute; left: 13%; bottom: -197%;">
            <span style="color:#BC87FF">SHOULD</span>
            <span style="color:#2F0CBD">JOIN<span style="color:#BC87FF">?</span></span>
        </p>
        <img src="{{asset('frames/_ (1).png')}}" style="position: absolute; left: 0%; bottom: -250%; width: 603px; height: 1378px; z-index: 0;">
        <img src="{{asset('frames/photos.png')}}" style="position: absolute; bottom: -240%; left: 5%; width: 1300px; height: 800px; z-index: 1;">
        <img src="{{asset('frames/_ 2.png')}}" style="position: absolute; bottom: -305%; right: 0%; z-index: 0;">
        <h1 class="poppins-bold" style="letter-spacing: -4px; color: black; position:absolute; bottom: -258%; left: 5%; font-size: 50px;" id="codeTag">< / ></h1>
        <h1 class="poppins-bold freqAQ" id="faqTarget" style="color: black; position:absolute; bottom: -263%; left: 5%; font-size: 58px;">
            Frequently Asked Questions
        </h1>

        <p class="poppins-light subText1" style="font-size: 28px; color:black; position:absolute; bottom: -270%; left: 5.5%;">Need answers? We got you ;)</p>
        <p class="poppins-light subText2" style="font-size: 28px; color:black; position:absolute; bottom: -273%; left: 5.5%;">Can't find your questions? Don't hesitate to contact us</p>
        <button class="gradient2 gradient-button2 poppins-light askQ" style="position:absolute; bottom: -277%; width: 205px; font-size: 20px; left: 5%; cursor: pointer; z-index:1;" id="askButton">Ask a Question</button>

        <img src="{{asset('frames/background3.png')}}" style="position: absolute; bottom: -385%; z-index: 0;">
        <p class="faq faq1"  style="bottom: -291%; z-index: 1;">Apa saja persyaratan untuk berpartisipasi di Hacktech?<button type="reset" class="icon"><span class="bi bi-chevron-down"></span></button></p>
        <p class="faq faq2" style="bottom: -298.5%; z-index: 1;">Apakah Hacktech gratis?<button type="reset" class="icon"><span class="bi bi-chevron-down"></span></button></p>
        <p class="faq faq3" style="bottom: -306%; z-index: 1;">Kapan deadline pendaftaran?<button type="reset" class="icon"><span class="bi bi-chevron-down"></span></button></p>
        <p class="faq faq4" style="bottom: -313.5%; z-index: 1;">Bisakah saya bergabung dengan lebih dari satu tim?<button type="reset" class="icon"><span class="bi bi-chevron-down"></span></button></p>
        <p class="faq faq5" style="bottom: -321%; z-index: 1;">Jika saya tidak memiliki basic, bisakah ikut berpartisipasi?<button type="reset" class="icon"><span class="bi bi-chevron-down"></span></button></p>
        <p class="faq faq6" style="bottom: -330%; z-index: 1; height: 120px;">Bagaimana jika para peserta sudah menyiapkan dan menggunakan source<br>code sebelum acara dimulai?<button type="reset" class="icon" style="top: 39.5% !important;"><span class="bi bi-chevron-down"></span></button></p>
        <p class="faq faq7" style="bottom: -339%; z-index: 1; height: 120px;">Jika saya tidak lolos seleksi untuk Hacktech, bagaimana dengan biaya<br>pendaftaran saya? Dan bagaimana jika lolos tetapi tidak ingin melanjutkan?<button type="reset" class="icon" style="margin-left: 40px; top: 39.5% !important;"><span class="bi bi-chevron-down"></span></button></p>

        <img src="{{asset('frames/contactUs.png')}}" style="position: absolute; bottom: -385%; width: 102px; height: 786px;">
        <img src="{{asset('frames/backgroundFAQ.png')}}" id="askTarget" style="position:absolute; bottom: -385.7%; right: 0%; width: 1246px; height: 790px; z-index: 0;">
        <img src="{{asset('frames/purpleBlur.png')}}" style="position:absolute; bottom: -384.4%; right: 0%; width: 1246px; height: 766px;">

        <h1 class="poppins-light headerText" style="color: white; font-size: 64px; position:absolute; bottom: -353.5%; left: 28%; z-index: 1;">Have a Different Question?</h1>
        <p class="poppins-light emailText" style="color: white; font-size: 24px; position:absolute; bottom: -357%; left: 49.7%; z-index: 2;">Email us anytime</p>
        <p class="poppins-bold callText" style="color: white; letter-spacing: 3px; font-size: 30px; position:absolute; bottom: -359.3%; left: 44.3%; z-index: 2;">Or call - 081 234 5678</p>

        <form id="form-question">
            <input type="text" id="userName" name="name" class="contactForm nameForm" style="position: absolute; bottom: -362.5%; left: 30%; padding-left: 20px;" placeholder="Name">
            <input type="text" id="userEmail" name="email" class="contactForm emailForm" style="position: absolute; bottom: -362.5%; left: 59.5%; padding-left: 20px;" placeholder="Email address">
            <input type="text" id="userSubject" name="subject" class="contactForm subjectForm" style="width: 810px; position:absolute; bottom: -366.5%; left: 30%; padding-left: 20px;" placeholder="Subject">
            <textarea name="question" id="userQuestion" class="contactForm questionForm" style="width: 810px; height:150px; position:absolute; bottom: -376%; left: 30%; padding-left: 20px; padding-bottom: 100px; box-sizing:border-box" placeholder="Ask a question"></textarea>
            <button class="poppins submitButton" type="submit" style="position:absolute; bottom: -379.5%; right: 13.7%; width: 140px; height: 45px; border-radius: 30px; background-color: #87FFF8; border: none; font-size: 20px; padding: 0px 5px 0px 5px;">Submit</button>
        </form>

        <img src="{{asset('frames/TIMELINE.png')}}" id="timelineTarget" style="width: 653px; height: 90px; position:absolute; bottom: -396%; left: 29%; z-index: 1;">
        <img src="{{asset('frames/codeTag3.png')}}" style="width: 601px; height: 440px; position:absolute; left: 0%; bottom: -423%;">
        <img src="{{asset('frames/line2.png')}}" style="width: 6px; height: 1150px; position:absolute; bottom: -466%; left: 50%;">
        <img src="{{asset('frames/Ellipse 5.png')}}" id="or" style="width: 28px; position:absolute; bottom: -406%; left: 49.25%;">
        <img src="{{asset('frames/Ellipse 11.png')}}" style="width: 1370px; height: 950px; position:absolute; bottom: -460%; right: 0%;">
        <img src="{{asset('frames/Ellipse 6.png')}}" id="cr" style="width: 28px; position:absolute; bottom: -418.5%; left: 49.25%;">
        <img src="{{asset('frames/Ellipse 6.png')}}" id="tm" style="width: 28px; position:absolute; bottom: -430%; left: 49.25%;">
        <img src="{{asset('frames/Ellipse 6.png')}}" id="htDay1" style="width: 28px; position:absolute; bottom: -443%; left: 49.25%;">
        <img src="{{asset('frames/Ellipse 6.png')}}" id="htDay2" style="width: 28px; position:absolute; bottom: -457%; left: 49.25%;">
        <img src="{{asset('frames/Ellipse 6.png')}}" id="htDay3" style="width: 28px; position:absolute; bottom: -467%; left: 49.25%;">

        <p class="poppins" id="orDate" style="color:#0D0043; position:absolute; bottom: -407.5%; left: 30%; font-size: 40px; font-weight:bold;">8 July 2023</p>
        <p class="poppins gradient2 gradient-button2 timelineBox" id="orText" style="bottom: -407.7%; left: 55%;">Open Registration</p>

        <p class="poppins timelineDate" id="crDate" style="bottom: -420.3%; left: 55%;">23 July 2023</p>
        <p class="poppins timelineBox" id="crText" style="bottom: -420.5%; left: 16%">Close Registration</p>

        <p class="poppins timelineDate" id="tmDate" style="bottom: -432.1%; left: 28.1%;">26 July 2023</p>
        <p class="poppins timelineBox" id="tmText" style="bottom: -432.5%; left: 55%">Technical Meeting</p>

        <p class="poppins timelineDate" id="htDay1Date" style="bottom: -445.1%; left: 55%;">28 July 2023</p>
        <p class="poppins timelineBox" id="htDay1Text" style="bottom: -445.5%; left: 16%; padding-right: 55px; padding-left: 55px; width: 428px;">Hacktech Day-1</p>

        <p class="poppins timelineDate" id="htDay2Date" style="bottom: -459.1%; left: 28.1%;">29 July 2023</p>
        <p class="poppins timelineBox" id="htDay2Text" style="bottom: -459.5%; left: 55%; padding-right: 55px; padding-left: 55px; width: 434px;">Hacktech Day-2</p>

        <p class="poppins timelineDate" id="htDay3Date" style="bottom: -469.1%; left: 55%;">30 July 2023</p>
        <p class="poppins timelineBox" id="htDay3Text" style="bottom: -469.5%; left: 16%; padding-right: 55px; padding-left: 55px; width: 434px;">Hacktech Day-3</p>

        {{-- Mentors --}}
        <img src="{{asset('frames/Vector.png')}}" style="width: 1440px; height: 2080px; z-index: 0; position:absolute; bottom: -585%;">
        <img src="{{asset('frames/Rectangle 2438.png')}}" id="mentorTarget" style="width: 1348px; height: 910px; position:absolute; bottom: -532%; left: 4%;">
        <img src="{{asset('frames/2023.png')}}" style="width: 680px; height: 260px; z-index: 1; position:absolute; bottom: -505%; left: 45%;">
        <img src="{{asset('frames/Rectangle 2455.png')}}" style="width: 1253px; height: 540px; z-index: 1; position:absolute; bottom: -531%; left: 6.78%;">

        <p class="poppins" id="mentorText" style="font-size: 20px; color: black; position:absolute; bottom: -492%; left: 10%; letter-spacing: 1px;">Mentors Technospace</p>
        <p class="poppins" id="mentorText1" style="font-size: 64px; color: black; position:absolute; bottom: -497%; left: 10%; font-weight:bold; letter-spacing: 4px;">Meet our</p>
        <p class="poppins" id="mentorText2" style="font-size: 64px; color: #39219D; position:absolute; bottom: -501%; left: 10%; font-weight:bold; letter-spacing: 4px;">Mentors</p>

        <img src="{{asset('frames/BUSINESS.png')}}" style="width: 1140px; height: 150px; position:absolute; bottom: -514%; left: 11%; z-index: 1">
        <img src="{{asset('frames/Mentorss.png')}}" style="width: 1100px; height: 470px; position:absolute; bottom: -529%; left: 13%; z-index: 1;">

        {{-- Juries --}}
        <img src="{{asset('frames/Juries.png')}}" style="width: 137px; height: 30px; position:absolute; right: 6.3%; bottom: -535%;">
        <img src="{{asset('frames/Rectangle 2440.png')}}" style="position: absolute; bottom: -582%; left: 4%; width: 1348px; height: 900px;">
        <p class="juriesText1" style="color: black; position:absolute; bottom: -548%; left: 33%; font-size:64px; font-weight:bold; letter-spacing: 4px;">Meet our <span style="color: #39219D">Juries</span></p>
        <p class="poppins juriesText2" style="position:absolute; bottom: -550%; left: 42%; font-size: 20px; font-weight: 100; letter-spacing: 1px;">Juries Technospace</p>
        <img src="{{asset('frames/Juries (FIX).png')}}" style="position: absolute; bottom: -577%; z-index:1; left: 19%; width: 900px; height: 500px; opacity: 1;">
        <div class="juries-container">
            <img src="{{asset('frames/JuriesR.png')}}" class="first-image" style="position: absolute; bottom: -577%; z-index:1; left: 19%; width: 900px; height: 500px;">
            <img src="{{asset('frames/JuriesL.png')}}" class="third-image" style="position: absolute; bottom: -577%; z-index:1; left: 19%; width: 900px; height: 500px;">
        </div>

        {{-- Sponsors --}}
        <div id="sponsorTarget" class="sponsorBackground" style="position: absolute; bottom: -705%">
            <div class="image-container1">
                <img src="{{asset('frames/platinumSponsor.png')}}" class="visible-image" style="position: absolute; left: 6.5%; width: 1258px;">
                <img src="{{asset('frames/platinumBrand.png')}}" class="hidden-image" style="position: absolute; left: 6.5%; width: 1258px;">
            </div>
            <div class="image-container2">
                <img src="{{asset('frames/goldSponsor.png')}}" class="visible-image" style="position: absolute; left: 6.5%; width: 1258px;">
                <img src="{{asset('frames/goldBrand.png')}}" class="hidden-image" style="position: absolute; left: 6.5%; width: 1258px;">
            </div>
            <div class="image-container3">
                <img src="{{asset('frames/silverSponsor.png')}}" class="visible-image" style="position: absolute; left: 6.5%; width: 1258px;">
                <img src="{{asset('frames/silverBrand.png')}}" class="hidden-image" style="position: absolute; left: 6.5%; width: 1258px;">
            </div>
        </div>
        <img src="{{asset('frames/SPONSOR.png')}}" style="position: absolute; bottom: -603%; left: 29%; width: 620px; height: 80px;">
        <img src="{{asset('frames/Line 9.png')}}" style="position: absolute; bottom: -622%; width: 1440px;">
        <img src="{{asset('frames/Line 9.png')}}" style="position: absolute; bottom: -639%; width: 1440px;">
        <img src="{{asset('frames/Line 9.png')}}" style="position: absolute; bottom: -656%; width: 1440px;">

        {{-- Media Partner --}}
        <img src="{{asset('frames/MEDIA PARTNER.png')}}" style="position:absolute; bottom: -675%; left: 10%; width: 1146px; height: 100px;">
        <img src="{{asset('frames/medpar1.png')}}" class="moving-image3" style="width: 2900px; height: 270px; position:absolute; bottom: -691%;">
        <img src="{{asset('frames/medpar1.png')}}" class="moving-image4" style="width: 2900px; height: 270px; position:absolute; bottom: -691%;">

        <img src="{{asset('frames/medpar2.png')}}" class="moving-image5" style="width: 2900px; height: 270px; position:absolute; bottom: -705%;">
        <img src="{{asset('frames/medpar2.png')}}" class="moving-image6" style="width: 2900px; height: 270px; position:absolute; bottom: -705%;">

        <img src="{{asset('frames/Rectangle 2457.png')}}" style="position: absolute; bottom: -833%; width: 100%;">
        <img src="{{asset('frames/Rectangle 2454.png')}}" style="position: absolute; bottom: -755%; left: 3.3%;">
        <img src="{{asset('frames/Rectangle 2456.png')}}" style="position: absolute; bottom: -718.7%; left: 6.05%; width: 1258.7px;">

        <p class="poppins" id="headerEvent" style="position:absolute; bottom: -718.5%; left: 36%; font-size: 64px; letter-spacing: 3px; font-weight:bold;">Other <span style="color: #39219D">Event</span></p>
        <div class="pillBox" id="pillButtons" style="position:absolute; bottom: -726%; left: 28%;">
            <button class="innerPillButton active poppins" style="position: absolute; bottom: 15%; left: 2.5%; z-index: 1; font-weight:600; font-size: 18px; letter-spacing: 1px;">VIRTUAL CONFERENCE</button>
            <button class="innerPillButton poppins" style="position: absolute; bottom: 15%; left: 52.5%; z-index: 1; font-size: 18px; letter-spacing: 1px; font-weight:600;">DEVELOPER WORKSHOP</button>
        </div>
        <img src="{{asset('frames/image 89.png')}}" style="width: 629px; height: 410px; position:absolute; bottom: -751%; left: 9%;">
        <p class="poppins-bold" id="dateEvent" style="position:absolute; bottom: -733%; left: 64%; font-size: 35px; color: white; letter-spacing: 1px;">29 April 2023</p>
        <p class="poppins-light" id="textEvent" style="position:absolute; bottom: -752%; left: 57%; font-size: 15px; line-height: 30px; text-align:center; color: white; letter-spacing: 1px; width: 469px; height: 340px;">
            Lorem ipsum dolor sit amet consectetur.
            Quisque dui ut at fermentum. Donec elit sed elit semper tincidunt dictum velit.
            Eu in vulputate faucibus sapien a. Risus ac sagittis etiam aliquet nunc.
            Non tellus pellentesque purus gravida. Hac et scelerisque a sem tempor ac consectetur facilisis duis.
            Ut vel diam in eget elementum amet massa bibendum.
            Laoreet phasellus semper molestie placerat proin est sed dictumst amet.
            Pharetra et et tortor felis vestibulum donec sagittis ac.
        </p>
        <button class="poppins eventButton" id="eventButton1" style="left: 60%">Visit Website</button>
        <a href="/register" class="poppins eventButton" id="eventButton2" style="left: 75%; text-decoration: none; text-align:center; padding-top: 5px;">Register Here</a>
        <img src="{{asset('frames/web1.png')}}" style="position:absolute; bottom: -749.5%; left: 60.7%; width: 17px; z-index: 1;">
        <img src="{{asset('frames/web2.png')}}" style="position:absolute; bottom: -749.5%; left: 75.7%; width: 17px; z-index: 1;">

        <img src="{{asset('frames/GET IN TOUCH.png')}}" style="position: absolute; bottom: -770%; width: 1100px; height: 100px; left: 11.5%;">
        <img src="{{asset('frames/Rectangle 2458.png')}}" style="position: absolute; bottom: -816%; left: 3%;">
        <img src="{{asset('frames/Frame 40199.png')}}" style="position: absolute; bottom: -811%; width: 46px; height: 550px; left: 8%;">
        <img src="{{asset('frames/Rectangle 2460.png')}}" style="position: absolute; bottom: -818%; left: 14%; z-index: 1">
        <img src="{{asset('frames/Rectangle 2459.png')}}" style="position: absolute; bottom: -818%; left: 12.5%;">
        <p class="poppins" id="contactUs" style="position:absolute; bottom: -780%; left: 17%; color:white; font-weight:bold; font-size: 36px; letter-spacing: 2px; z-index:1;">Contact Us</p>

        <form id="form-contact">
            <input type="text" id="inputName" class="getInTouch" name="nama" placeholder="Name" style="bottom: -783%; left: 17%;">
            <input type="text" id="inputSubject" class="getInTouch" name="subject" placeholder="Subject" style="bottom: -789%; left: 17%;">
            <input type="text" id="inputEmail" class="getInTouch" name="email" placeholder="E-mail Address" style="bottom: -795%; left: 17%;">
            <textarea type="text" id="inputMessage" class="getInTouch" name="message" placeholder="Message" style="bottom: -808.7%; left: 17%;"></textarea>
            <img src="{{asset('frames/Line 12.png')}}" id="nameLine" style="width: 304px; position:absolute; bottom: -783.8%; left: 17%; z-index: 1;">
            <img src="{{asset('frames/Line 12.png')}}" id="subjectLine" style="width: 304px; position:absolute; bottom: -789.8%; left: 17%; z-index: 1;">
            <img src="{{asset('frames/Line 12.png')}}" id="emailLine" style="width: 304px; position:absolute; bottom: -795.8%; left: 17%; z-index: 1;">
            <img src="{{asset('frames/Line 12.png')}}" id="messageLine" style="width: 304px; position:absolute; bottom: -809.8%; left: 17%; z-index: 1;">
            <img src="{{asset('frames/image 90.png')}}" style="position: absolute; bottom: -814%; left: 41.4%; z-index: 1; width:740px; height: 665px;">
            <img src="{{asset('frames/locator 1.png')}}" style="position: absolute; bottom: -800%; left: 57.5%; z-index: 1; width: 61px;">
            <img src="{{asset('frames/Rectangle 2462.png')}}" style="position: absolute; bottom: -800%; left: 62.5%; z-index: 1; width: 247px; height: 105px;">
            <p class="poppins" id="locatorDesc" style="position: absolute; bottom: -799.5%; z-index:1; left: 65.5%; width: 163px; font-size:16px; line-height:24px; color:black;">Lorem ipsum dolor<br>sit amet<br>consectetur</p>

            <button type="submit" id="sendButton" class="poppins" style="position: absolute; bottom: -815%; left: 18%; width: 269px; height: 55px; padding: 14px 68px 14px 68px; background-color: white; border:none; outline:none; letter-spacing: 1px; font-size: 18px; z-index: 1;">
                <p style="width: 200px; height: 27px; position:absolute; left: 13%; bottom: 0%;">Send Message</p>
            </button>
        </form>


    <footer>
        <img src="{{asset('frames/Rectangle 2463.png')}}" style="position: absolute; bottom: -837%; width: 100%;">

        <p class="poppins-bold footer1row"  style="position: absolute; bottom: -828.3%; left: 6.5%; font-size: 16px; cursor: pointer; cursor: pointer;" id="homeButton">Home</p>
        <p class="poppins-bold footer2row" style="position: absolute; bottom: -830%; left: 6.5%; font-size: 16px; cursor: pointer;" id="aboutButton2">About</p>

        <p class="poppins-bold footer1row" style="position: absolute; bottom: -828.3%; left: 19.5%; font-size: 16px; cursor: pointer;" id="championButton2">Champion & Prizes</p>
        <p class="poppins-bold footer2row" style="position: absolute; bottom: -830%; left: 19.5%; font-size: 16px; cursor: pointer;" id="faqButton2">FAQ</p>

        <p class="poppins-bold footer1row" style="position: absolute; bottom: -828.3%; left: 39.5%; font-size: 16px; cursor: pointer;" id="timelineButton2">Timeline</p>
        <p class="poppins-bold footer2row" style="position: absolute; bottom: -830%; left: 39.5%; font-size: 16px; cursor: pointer;" id="mentorButton2">Mentor & Jury</p>

        <p class="poppins-bold footerHacktech" style="position:absolute; bottom: -830.5%; left: 70.5%; font-size: 44px; color:black;">HACKTECH</p>
        <p class="poppins-bold footerHacktech" style="position:absolute; bottom: -830.5%; left: 89%; font-size: 44px; color:black; letter-spacing: -4.5px;"> < / > </p>

        <img src="{{asset('frames/Line 14.png')}}" style="width: 1258px; position:absolute; bottom: -831.5%; left: 6.5%;">

        <p class="poppins-light copyrights" style="position: absolute; bottom: -835.5%; left: 6.5%; font-size: 16px; font-weight:bold;">Copyright © 2023, Kelompok 4</p>
        <p class="poppins-light copyrights" style="position: absolute; bottom: -835.5%; right: 20.3%; font-size: 16px; font-weight:bold;">Privacy Policy 61.8</p>
        <p class="poppins-light copyrights" style="position: absolute; bottom: -835.5%; right: 6.3%; font-size: 16px; font-weight:bold;">Terms of Service</p>

    </footer>
    </div>
    <script src="{{asset('js/scroll.js')}}"></script>
    <script src="{{asset('js/fetch.js')}}"></script>
</body>
</html>
