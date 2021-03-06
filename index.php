<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <title>Document</title>
    <link rel="icon" href="https://www.pngfind.com/pngs/m/541-5417194_about-ieee-sb-cet-ieee-logo-hd-png.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
        *{
            margin: 0;
            padding: 0;
        }
        body{
            overflow-x: hidden;
        }
        header{
            width: 100vw;
            background-image: url(https://r1.ieee.org/dci-template/wp-content/themes/ieee-dci/images/style-a/header-bkg-blue.png);
            background-repeat: repeat-x;
            background-position: 100% center;
            background-size: 30%;
        }
        .link{
            width: 100%;
            height: 39px;
            background-color: rgba(0,102,153,.1);
            border-bottom: #069 solid 1px;
            display: flex;
            flex-direction: row;
            /* for vertical alignment */
            align-items: center; 
            padding: 19px 19px 19px 22px;
        }
        .link a{
            text-decoration: none;
            font-weight: bold;
            font-family: 'Open Sans Condensed', sans-serif;
            font-stretch: condensed;
            color: #069;
            font-size: 14px;
            font-weight: 700;
            margin-left: 15px;
            border-right: rgb(168, 198, 212) solid 1px;
            padding-right: 15px;
        }
        .link a:nth-child(1){
            margin-left: 100px;
        }
        .link a:nth-child(5){
            border: none;
        }
        #head b{
            color: #069;
            font-family: 'Open Sans Condensed', sans-serif;
            font-size: 54px;
        }
        #headRow{
            padding: 122px;
        }
        .searchBar{
            margin-top: 15px;
            align-items: center;
        }
        .searchBar i{
            font-size: 23px;
            color: #069;
        }
        .searchBar input{
            margin-left: 500px;;
            font-size: 20px;
            box-sizing: border-box;
            width: 400px;
            height: 40px;
            padding: 10px 55px 10px 25px;
            border: rgb(30, 141, 197) solid 1px;
            border-radius: 6px;
            box-shadow: inset 0em 0.17em rgb(52, 155, 196, 0.3);
            outline: none;
        }
        #logoFlexBox{
            justify-content: flex-end;
        }
        #header2{
            background-color: #069;
            padding: 17px 0 17px 125px;
            font-family: 'Open Sans Condensed', sans-serif;
            font-size: 19px;
        }
        .page-footer{
            box-sizing: border-box;
            padding: 65px 115px 65px 115px;
            background: #006699;
            width:100vw;
            background-image: url(https://r1.ieee.org/dci-template/wp-content/themes/ieee-dci/images/style-a/footer-bkg-white.png);
            background-repeat: no-repeat;
            background-position: 100% center;
            background-size: 99%;
        }
        .footerLink a{
            text-decoration: none;
            color: white;
            border-right: rgb(210, 212, 212) solid 1px;
            padding: 0 16px 0 11px;
            font-family: 'Open Sans Condensed',sans-serif;
            font-size: 15px;
        }
        .footerLink a:nth-child(6){
            border-right: none;
        }
        .footerFlex2{
            display: flex;
            padding: 54px 0 0 10px;
            color: white;
        }
        .footerFlex2_1{
            max-width: 68%;
        }
        .footerFlex2_2{
            padding-left: 93px;
        } 
        .footerFlex2_2 i {
            padding-right: 30px;
        }
        .footerFlex2_2 i:hover {
            color: black;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <nav class="link">
            <a href="https://www.ieee.org/" target="_blank">IEEE.org</a>
            <a href="http://ieeexplore.ieee.org/" target="_blank">IEEE <i>Xplore</i> Digital Library</a>
            <a href="http://standards.ieee.org/" target="_blank">IEEE Standards</a>
            <a href="http://spectrum.ieee.org/" target="_blank">IEEE Spectrum</a>
            <a href="https://www.ieee.org/sitemap.html" target="_blank">More Sites</a>
        </nav>
        <div class="d-flex py-4 justify-content-between" id="headRow">
            <div>
                <h1 id="head"><b>IEEE Section</b></h1>
            </div>
            <div class="searchBar">
                <input type="text" placeholder="Search IEEE Section">
                <i class="fa fa-search"></i>
            </div>
            <div class="d-flex align-items-center" id="logoFlexBox">
                <img src="https://r1.ieee.org/dci-template/wp-content/themes/ieee-dci/images/logo-ieee.svg" height="40px" alt="IEEE Logo">
            </div>
        </div>
        <div class="d-flex py-2" id="header2">
            <a class="text-white" src="#">HOME TEMPLATE1</a>
        </div>
    </header>
    <div class="container display-4 py-4">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pharetra eu massa in pretium. Quisque non urna in tortor tincidunt elementum. Proin sodales quis lacus quis maximus. Maecenas non justo nisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc a ligula eu velit feugiat tristique. Nam a gravida dui.

Fusce id orci gravida, rutrum dui non, sagittis augue. Donec massa nulla, feugiat ac lacus vel, tempor congue enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer eu mauris eget odio pellentesque ornare. Proin commodo massa velit, sit amet rhoncus nibh feugiat eget. Nullam at facilisis sapien, eget consectetur mauris. Donec auctor eros eget risus faucibus, eget fringilla eros egestas. Nam tempor quam quam, sed luctus velit ultrices sed. Proin eu nisl quis eros bibendum semper. Morbi mollis ante leo, ut posuere libero tristique a. Mauris ullamcorper feugiat augue, in dapibus ligula. Nullam vestibulum mattis feugiat. Integer ac risus sollicitudin, pretium urna vitae, euismod magna. Curabitur porta nec ex nec lobortis.

Vestibulum risus dolor, commodo in mattis in, aliquam congue tellus. Nunc pharetra, justo vel imperdiet aliquam, nisl lorem cursus erat, ut malesuada arcu orci eu neque. Quisque pellentesque placerat ipsum. Aliquam efficitur molestie nisi. Fusce mauris leo, dictum eget massa vitae, malesuada tristique neque. Maecenas semper dui vel pharetra euismod. Nulla ornare ac quam vitae porttitor.

Nullam quis justo dui. Vivamus vitae nulla eu purus ullamcorper interdum at ac urna. Fusce egestas pretium lectus quis convallis. Etiam pellentesque sit amet leo nec aliquam. Phasellus vestibulum ipsum non libero accumsan, a egestas augue finibus. Donec sit amet tortor ut lorem eleifend dapibus. Nullam tristique placerat sollicitudin. Praesent leo massa, fermentum eget felis nec, mattis finibus arcu. Pellentesque a placerat nibh.

Proin non pharetra sapien. Phasellus ornare ante sit amet facilisis tristique. Vivamus molestie elementum tristique. Vivamus cursus consequat auctor. Sed molestie lobortis gravida. Sed a felis id metus egestas volutpat. Sed venenatis lacinia nunc sed lobortis. Nullam eu fringilla risus. Fusce pharetra massa elit, euismod pharetra ipsum posuere sit amet. Nunc rutrum velit luctus metus fringilla pellentesque. Interdum et malesuada fames ac ante ipsum primis in faucibus.
    </div>
    <!-- footer area -->
    <div class="d-flex flex-column page-footer">
        <div>
            <nav class="footerLink font-weight-bold">
                <a href="#">HOME</a>
                <a href="#">SITEMAP</a>
                <a href="#">ACCESSIBILITY</a>
                <a href="#">NONDISCRIMINATION POLICY</a>
                <a href="#">TERMS AND CONDITIONS</a>
                <a href="#">IEEE PRIVACY POLICY</a>
            </nav>
        </div>
        <div class="footerFlex2">
            <div class="footerFlex2_1">
                <p style="font-size: 15px;">?? Copyright 2021 IEEE ??? All rights reserved. Use of this website signifies your agreement to the IEEE Terms and Conditions.<br>
                    A not-for-profit organization, IEEE is the world???s largest technical professional organization dedicated to advancing technology for the benefit of humanity.</p>
            </div>
            <div class="footerFlex2_2 fa-lg">
                <i class="fa fa-google" aria-hidden="true"></i>
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-linkedin" aria-hidden="true"></i>
                <i class="fa fa-youtube" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
                <i class="fa fa-share-alt" aria-hidden="true"></i>
            </div>
        </div>
    </div>
</body>
</html>
