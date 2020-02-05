<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <?php echo base_url() ?>

    <style type="text/css">
      .header{background-color: SkyBlue ; padding: 20px 0; margin-top: 70px;}
      .imgHeader1{width: 250px; height: 235px; margin-left: auto;margin-right: auto; position: relative; top:0; left: -500px;cursor: pointer;}
      .imgHeader2{width: 410px; height: 335px; margin-left: auto;margin-right: auto;}
      .navbarNav{background-color: black; border:0; margin-bottom: 0px; border-radius: 0; padding: 10px 5px; }
      .navbar-default .navbar-nav>li>a.liNav{;font-size: 20px;color: #FFFFFF; text-shadow: 0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #49ff18, 0 0 30px #49FF18, 0 0 40px #49FF18, 0 0 55px #49FF18, 0 0 75px #49ff18;font-weight: bold}
      .navbar-default .navbar-nav>li>a.liNav:hover{color: darkred;text-shadow: 0 0 5px #FFF, 0 0 10px Cyan, 0 0 15px Cyan, 0 0 20px azure, 0 0 30px azure, 0 0 40px azure, 0 0 55px azure, 0 0 75px azure; transition: 1s; border-bottom: 3px solid lightblue}
      .navbar-default .navbar-nav>li>a.liNav:before {
    content: "";
    position: absolute;
    width: 100%;
    height: 3px;
    bottom: 0;
    left: 0;
    background-color: magenta;
    visibility: hidden;
    -webkit-transform: scaleX(0);
    transform: scaleX(0);
    -webkit-transition: all 1000ms ease-in-out 0s;
    transition: all 1000ms ease-in-out 0s;
  }

  .navbar-default .navbar-nav>li>a.liNav:hover:before {
     visibility: visible;
    -webkit-transform: scaleX(1);
    transform: scaleX(1);
  }

      .dropdown-menu>li>a.liDrop{color:MediumSpringGreen ; font-weight: bold;font-size: 16px;}
      .dropdown-menu>li>a.liDrop:hover{color: darkblue;text-shadow: 0 0 15px #FFF, 0 0 15px Cyan, 0 0 15px Cyan, 0 0 15px azure, 0 0 5px azure, 0 0 15px azure, 0 0 15px azure, 0 0 15px azure; transition: 1s; background-color: black; }


      .ulNavDropdown{background-color: DarkSlateGray }
      .content1{background-color: NavajoWhite;}
      .content1 h3{color:Teal; font-weight: bold;font-family: "Times New Roman", Times, serif;font-style: italic; }

      #descCharacter, #descCharacterUpdate{width: 100%; height: 170px;}
      #fileToUpload{color: Navy; font-weight: bold;}
      .ulListCat{list-style: none; float: right; }
      .ulListCat h1{color:BlueViolet ; font-weight: bold;}
      .ulListCat h4{color:Sienna ; font-weight: bold ; }

      .contentAbout1{background-color: DarkOliveGreen; padding: 5px 0;}
      .contentAboutTitle{margin-top:40px;background-color: darkblue; padding: 5px 0; position: relative; overflow: hidden; height:210px; line-height: 210px;}
      .contentAboutTitle h1{color:Fuchsia; font-weight: bold;font-family: "Times New Roman", Times, serif; font-size: 70px; text-shadow:0 0 15px yellow, 0 0 15px yellow, 0 0 15px LawnGreen ,0 0 20px Chartreuse ; position: absolute;   left: 50%;top: -100px;transform: translate(-50%, -50%); width: 50%;}
      .contentAbout1 h3{color:AliceBlue ; font-weight: bold;font-family: "Times New Roman", Times, serif;font-style: italic; }

      .articleCharacter{padding: 10px 0; margin-top:70px;background-color:Gainsboro;}
     

      .contentCharacter1{padding:10px 0; background-color: pink;}
      .imgContentCharacter{width: 210px; height: 180px; padding: 10px 10px;margin-left: auto;margin-right: auto; display: block;}

      .dropdown-menu .divider.navDivider1{background-color:yellow; height: 2px;}
      .dropdown-menu .divider.navDivider2{background-color:yellow; height: 1px;}
      /*.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover.liNav{background-color: brown; border-bottom: 3px solid red}*/
      .nav .open>a, .nav .open>a:focus, .nav .open>a.liNav:hover{border-bottom: 0;}
        
      .content2{background-color:Coral ; padding: 20px 0; overflow: hidden; }
      .content2 .area1{border: 5px solid yellow; height: 150px; background-color: blue; }
      .footer{background-color: Teal; padding: 10px 0px; }
      .footer h4{color:pink; font-weight: bold; text-shadow: 0 0px 10px lightgreen, 0 0 35px lightgreen;}

      /*Loading*/
      .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color:#660000;
      }
    }

    /*Circle colliding*/
    .icon {
    background: url('images/hive.png') 0 0 no-repeat;
    width: 76px;
    height: 76px;
    top: -200px;
    margin: 0 auto;
    position: relative;
    }
    .icon:hover {
    -moz-animation: rotatecircle 4s infinite linear;
    -webkit-animation: rotatecircle 4s linear;
    }
    .outerCircle {
    background-color: transparent;
    border: 8px solid rgba(97, 82, 72, 0.9);
    opacity: .9;
    border-right: 5px solid transparent;
    border-left: 5px solid transparent;
    border-radius: 100px;
    width: 103px;
    height: 103px;
    margin: 0 auto;
    -moz-animation: spinPulse 3s infinite ease-in-out;
    -webkit-animation: spinPulse 3s infinite ease-in-out;
    }
    .innerCircle {
    background-color: transparent;
    border: 5px solid GreenYellow;
    opacity: .9;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-radius: 100px;
    top: -110px;
    width: 92px;
    height: 92px;
    margin: 0 auto;
    position: relative;
    -moz-animation: spinoffPulse 1s infinite linear;
    -webkit-animation: spinoffPulse 1s infinite linear;

    }


    @-moz-keyframes spinPulse {
        0% { -moz-transform:rotate(160deg); opacity:0; box-shadow:0 0 1px #bdd73c;}
      50% { -moz-transform:rotate(145deg); opacity:1; }
      100% { -moz-transform:rotate(-320deg); opacity:0; }
    }
    @-moz-keyframes spinoffPulse {
        0% { -moz-transform:rotate(0deg); }
      100% { -moz-transform:rotate(360deg);  }
    }
    @-webkit-keyframes spinPulse {
        0% { -webkit-transform:rotate(160deg); opacity:0; box-shadow:0 0 1px #bdd73c; }
      50% { -webkit-transform:rotate(145deg); opacity:1;}
      100% { -webkit-transform:rotate(-320deg); opacity:0; }
    }
    @-webkit-keyframes spinoffPulse {
        0% { -webkit-transform:rotate(0deg); }
      100% { -webkit-transform:rotate(360deg); }
    }
    @-moz-keyframes rotatecircle {
        0% { -moz-transform:rotate(0deg); }
      100% { -moz-transform:rotate(-360deg); }
    }

    @-webkit-keyframes rotatecircle {
        0% { -webkit-transform:rotate(0deg); }
    100% { -webkit-transform:rotate(-360deg); }
    }

    #countAnime{font-size: 18px;}
    .badgeNotif{border-radius: 50%; background-color: gold; color:darkblue; position: absolute; top:20px; left:-30px;}
    .bellSymbol{font-size: 24px; color: aqua; position: absolute;top:10px; left: -50px; }
    .imgHeader2:hover{width: 290px; transition: 1s;}
    .btnShowMore{margin-top: 20px; color:darkblue; font-weight: bold; width: 100%; background-color: azure;}
    .btnNoMore{margin-top: 20px; color:azure; font-weight: bold;width: 100%; background-color: red;}
    .activeNav{border-bottom: 5px solid GreenYellow;}

    .h1HomeIntro{cursor: pointer; color:Fuchsia; font-weight: bold;font-family: "Times New Roman", Times, serif;font-style: italic; font-size: 50px;}
    .h1HomeIntroBG{padding: 10px 5px; background-color: black; transition: 1s;color:azure; text-shadow: 0 0 20px  #ffff80, 0 0 20px #66ff99,  0 0 20px #33ff77, 0 0 10px #33ff77, 0 0 20px #33ff77;}

    
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

