<?php

		session_start();

		if(isset($_POST['logout'])) {

        $_SESSION['name'] = '';

        $_SESSION['vid'] = '';

        $_SESSION['mobile'] = '';

        echo "<script> location.href='index1.php' </script>";

    }

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>solidwaste</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!--jQuery 1.12.4-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

    <style type="text/css">

        .navbar-brand:hover {

            font-size: 150%;

        }

        .nav-text:hover {

          font-size: 110%;

        }

        .nav-text {

            color: #E0A108;

        }
        #x1 {

            float:left;
            background-color: #BDE0FF; /* Green */
            font-size:15px;
             border: 1px solid transparent;
            border-radius:0px;
            color: black;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;


        }
        #x1 {
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

#x1:hover {
    background-color: #FF3D0A; /* Green */
    color: black;
}

        #x2 {

                        background-color: #BDE0FF; /* Green */
            font-size:15px;
             border: 1px solid transparent;
            border-radius:0px;
            color: black;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }
        #x2 {
             -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
           }

        #x2:hover {
        background-color: #FF3D0A; /* Green */
         color: black;
           }
             #donate {
                                        
                background: none repeat scroll 0 0 #FFD600;
                border: 1px solid transparent;
                border-radius: 4px;
                color: #000;
                font-size: 14px;
                font-weight: bold;
                line-height: 1.71429;
                margin-bottom: 0;
                margin-top: 15px;
                padding: 6px 12px;
                text-align: center;
                text-transform: uppercase;
                vertical-align: middle;
                            
                            }
                            #donate span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
                }

                #donate span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 0.5s;
                }

                #donate:hover span {
                padding-right: 25px;
                }

                #donate:hover span:after {
                opacity: 1;
                right: 0;
                }
            #mar {
                    text-align: justify;
                     background-color: rgba(210,210,210,0.5);
                }

                .logout {

            border: none;
            background-color: Transparent;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.7); 
            margin-top: 7px;

        }

        .logout:hover {

            color: white;
            font-size: 90%;

        }

        @media screen and (max-width: 480px)
        {

            .logout {

                color: #222222;
                margin-left: -4px;

            }

        }


    </style>

    <!--bttn.css-->
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/bttn.css/0.2.4/bttn.css">

  </head>

  <body id="page-top" style="background-color:#FFFFB2">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="background-color: #FFFFD9;">
      <div class="container heading_container">
        <a class="navbar-brand js-scroll-trigger" href="index1.php"><span style="color: #FF9900;">Power in your hands</span></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <form method="post">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="health.php"><span class="nav-text">Health</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="education.php"><span class="nav-text">Education</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="agri.php"><span class="nav-text">Agriculture</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="power.php"><span class="nav-text">Power</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="waste.php"><span class="nav-text">Waste</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="job.php"><span class="nav-text">Jobs</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="sell.php"><span class="nav-text">Sell Crop</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="buy.php"><span class="nav-text">Buy Crop</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="donate.php"><span class="nav-text">Donate</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contact.php"><span class="nav-text">Contact</span></a>
            </li>
            <li class="nav-item">
              <?php

                  if(!empty($_SESSION['name']) OR !empty($_SESSION['vid'])) {

                      echo "<form method='post'><button class='logout' name='logout'><span class='nav-text'>LOG OUT</span></button></form>";

                  }

              ?>
          </li>
          </ul>
          </form>
        </div>
      </div>
    </nav>

    <div id="mar" style="margin:100px 200px 25px 200px";>
        <!--Image-->
        <h1 style="text-align:center;text-shadow: 2px 2px green;margin-bottom:20px;">SOLID WASTE</h1><br>
<span class="fluid_image" style="display:block;background:url(https://d1x0je2yh2wyb8.cloudfront.net/5/9/4d7f98db-eabc-44f9-9ee5-37bc1661b3dc.WyI4OTJ4NDUwIiwiY3JvcCJd.jpg) no-repeat 25% 25%; width:100%; max-width:600px; height:250px"></span> <br>    
      <h1 style="margin-top:10px">Waste collecting</h1><br>
      <p style="text-size:15px";>Waste is a universal and highly visible phenomenon. The perspectives towards solid waste are often contradictory: While by affluent societies it is often considered plainly as garbage or an environmental problem, in many cities in Africa and other developing countries it is an important and flexible source of income for the large part of urban population and provides raw material to many sectors of economy. Waste collectors form a vital part of the economy in nearly every city of the developing world.</p>
      <p style="text-size:15px";>Operating on the streets, curb-sides and dumps, this group of people collect, sort, clean, recycle and sell material thrown away by others, therefore contributing to public health, sanitation and environmental sustainability. According to estimates, “about 1 per cent of the urban population – at least 15 million people – survive by salvaging recyclables from waste”, in the developing world.</p>
      <p style="text-size:15px";>Practical Action are working with some of the poorest communities to safely and securely improve their waste management and collection methods. This brings improvements to the health of the slum dwelling families and the creation of safer healthier places to live and work.</p>
      <h2><button id="x1" class="color1 tabs">How it works</button></h2>
      <h2><button id="x2" class="color1 tabs">Impact</button></h2>
      <!--How it works button-->
      <div class="t1">
      <p>Our approach on waste-related work is similar to that in other infrastructure and services. It falls into four areas:</p>
      <ul>
          <li>Working towards improving service provision in slum, peri urban and low income areas. This involves making arrangements for waste collection through organising communities or influencing municipalities and private sector. We expect that the social outcome of this provision, if done at scale, is improved health and a cleaner living environment.</li>
          <li>We encourage income and employment creation from waste related activities and promote decent, safer work for the poor. This can often be combined with the provision of services in their own areas, or other areas where the income potential may be better. This is also supported by introducing innovative approaches and better technologies for waste reduction, recycling and reuse.</li>
          <li>We directly support the development of better technologies, knowledge, innovation and communication for all the actors in waste management. This can be done in a number of ways, for example by encouraging research organisations to focus on topics which benefit the poor, promoting mutual learning and enhancing abilities of self analysis and learning.</li>
          <li>We influence national and global policies in waste management in favour of poor men and women. We promote successful models and lobby for better practices globally.</li>
      </ul>
      </div>
      <!--Impact -->
      <div class="t2">
      <h2>Tulasa Gyawali from Syauli Baazar, Nepal</h2><br>
      <p>Tulasa Gyawali from Syauli Baazar, 10 Bharatpur, won first prize in a national innovation fair and was asked to share her story in an international symposium for her continuous effort on utilising waste in urban agriculture.</p>
      <p>“I was honoured when I received the first prize. In my house, I have a compost bin and pits and I practice vermin composting too. I do not throw decomposable waste; instead I convert them to resources and use them to grow organic vegetables, she smiles.” ISWM project in collaboration with Bharatpur Municipality had earlier distributed compost bins in Syauli Baazar. Residents of the community do not throw wastes in the street corner as before. People are making compost from organic waste. They separate plastic in their homes and they sell them to the plastic collectors.</p>
      <p>According to Tulasa, “this is one of the positive changes from the project. Waste management training to the community has changed people’s attitude toward disposing waste. Now we think waste as a resource.”</p>
      <p>Tulasa and other community members were taken to India for waste management exposure visit. “The visit was educating and motivating for me and to my neighbours. We observed the good practice in Forum of Recycle and Environment (FORCE), Mumbai and now we have replicated that practice in our community.”</p>
      <p>In Tulasa’s community, 10 HHs have built a masonry compost pit in order to accommodate more organic waste and to sell the compost to the local nursery and farmers. This is an example of how awareness can make a difference.</p>
      <button href="donate" id="donate" style="vertical-align:middle"><span>DONATE </span></button>
      </div>


    </div>

    <script>
        src="https://code.jquery.com/jquery-2.2.4.min.js"
         integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
         crossorigin="anonymous"></script>
        <script type="text/javascript">
        $(".t1").hide();
        $(".t2").hide();
        $("#x1").click(function() {
            $(".t2").hide();
            $(".t1").show();
        });
        $("#x2").click(function() {
            $(".t1").hide();
            $(".t2").show();
        });
       
        $(".color1").click(function() {
            $(this).css("background-color","#FF3D0A");
        });
        $("#x1").click(function(){
            $("#x2").css("background-color","#BDE0FF");
        });
        
         $("#x2").click(function(){
            $("#x1").css("background-color","#BDE0FF");
        });
         $("#donate").click(function(){
             location.href="donate.php";
         });
        
         

        


           
        </script>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
