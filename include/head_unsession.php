<?php  ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $tituloPag; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/icomoon/style.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker-1.6.4-dist/css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <style media="screen">

    		.countdownContainer{
    		position: absolute;
    		top: 50%;
    		left: 50%;
    		transform : translateX(-50%) translateY(-50%);
    		text-align: center;
    		padding: 10px;
    		font-size: 24px;
    	}
    	.countdownContainer td{
    		padding: 14px;
    	}

    	.px7{
    		font-size: 9px;
    	}

    		</style>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-social-gh-pages/bootstrap-social.css">
        <link rel="stylesheet" href="css/icomoon/style.css">

          <!-- are we using this localy?
          <link rel="stylesheet" href="css/bootstrap-select-1.12.2/">

        -->
        <link rel="stylesheet" href="css/main.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

          <!-- Latest compiled and minified JavaScript -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

          <!-- (Optional) Latest compiled and minified JavaScript translation files -->
          <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
           <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
           <script>
           $( function() {
             $( "#datepicker" ).datepicker();
           } );
           </script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" align="center">
      <div class="container">
        <div class="navbar-header" >

          <button type="button"  class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="icon-menu" style="color:white"></span>
          </button>


        </div>

        <div id="navbar" class="navbar-collapse collapse">




            <ul class="nav navbar-nav">
              <li>
                  <img src="img/logo.png" height="55" alt="">
                </li>
              <li>


            </ul>

          <div class=" navbar-right" role="search">

            <ul class="nav navbar-nav">
              <li>

              </li>
              <li>
                  <a href=""><label for="">CEDEC</label></a>
              </li>

            </ul>


            </div>





        </div><!--/.navbar-collapse -->
      </div>
    </nav>



 </div>
</nav>


        <!--loading config-->
        <style>
        /* Center the loader */
        #loader {
          position: relative;
          left: 50%;
          top: 50%;
          z-index: 1;
          width: 50px;
          height: 50px;
          margin: -75px 0 0 -75px;
          border: 16px solid #f3f3f3;
          border-radius: 50%;
          border-top: 16px solid #3498db;
          width: 120px;
          height: 120px;
          -webkit-animation: spin 2s linear infinite;
          animation: spin 2s linear infinite;
        }


        @-webkit-keyframes spin {
          0% { -webkit-transform: rotate(0deg); }
          100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
          0% { transform: rotate(0deg); }
          100% { transform: rotate(360deg); }
        }

        /* Add animation to "page content" */
        .animate-bottom {
          position: relative;
          -webkit-animation-name: animatebottom;
          -webkit-animation-duration: 1s;
          animation-name: animatebottom;
          animation-duration: 1s
        }

        @-webkit-keyframes animatebottom {
          from { bottom:-100px; opacity:0 }
          to { bottom:0px; opacity:1 }
        }

        @keyframes animatebottom {
          from{ bottom:-100px; opacity:0 }
          to{ bottom:0; opacity:1 }
        }

        #myDiv {
          display: none;
          text-align: center;
        }
        </style>




        <script>
           $(document).ready(function(){
                       $("#jcc_img").hide(0).delay(500).fadeIn(1000)
                      });

                    $(document).ready(function(){
                      $("#banner_1").hide(0).delay(500).fadeIn(1000)
                        });
                   $(document).ready(function(){
                     $("#banner_2").hide(0).delay(500).fadeIn(1000)
                    });

                    $(document).ready(function(){
                      $("#shirt_1").hide(0).delay(500).fadeIn(3000)
                        });
                   $(document).ready(function(){
                     $("#shirt_2").hide(0).delay(500).fadeIn(3500)
                    });
                  $(document).ready(function(){
                    $("#shirt_3").hide(0).delay(500).fadeIn(3250)
                      });
                 $(document).ready(function(){
                   $("#obj_1").hide(0).delay(500).fadeIn(3250)
                  });


        </script>

        <!--end loading config-->

<body onload="myFunction()" style="margin:0;">
