<?php
    include_once 'includes/mentorlist.php';
    ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Diverse Influencers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="sources/css/mentor.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="sources/css/template.css"/>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Barlow:100,300,400,500" rel="stylesheet">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">



    <link rel="icon" href="sources/images/iconDI.png">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143964879-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-143964879-1');
    </script>


</head>

<body>
   
    <style>
        html{
            overflow-x: hidden;
        }
        body{
            background-color: white;
        }
        h2 {
            color:white;
            font-size: 300%;
            
        }
    </style>
 
    <header id="headerBox">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
            <a class="navbar-brand" href="index.html"><img src="sources/images/diverselogo.png" alt="logo" class="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                
            </span>
            </button>

            <div class="collapse navbar-collapse mr-none" id="navbarSupportedContent">
                <ul class="navbar-nav mr-5 ml-sm-auto">
                    <li class="nav-item mr-lg-4">
                        <a class="nav-link" href="story.html">About</a>
                    </li>
                    <li class="nav-item mr-lg-4">
                        <a class="nav-link" href="program.html">Program</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="involve.html">Get Involved</a>
                    </li>
                    <li class="nav-item mr-none mb-2">
                        <a class="nav-link" href="https://secure.givelively.org/donate/diverse-influencers-inc">Donate</a>
                    </li>
                </ul>
            </div>
            </div>

        </nav>

    </header>

    <div class="wrapper" style="height: 100vh; background-color: #FFFAF1;">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="container">
                    <h1>Mentors</h1>

                    <?php
                        $sql = "SELECT * FROM "
                    ?>
                    
                </div>
            </div>
        </div>
        


    </div>

    <footer>
    
        <div class="footer-middle">
            <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="footercopy" style="text-align:center;">Copyright © 2019 Diverse Influencers, Inc.</h3>
                </div>

                <div class="col-lg-6">
                    <div class="footer-social-icons" style="text-align:center;">
                        <ul class="menu">
                            <li style="margin-right: 1%;margin-left: 1%;"><a href="https://www.instagram.com/DiverseInfluencers/"><i class="fab fa-instagram" aria-hidden="true" style="font-size:50px;color:white"></i></a></li>
                            <li style="margin-right: 1%;margin-left: 1%;"><a href="https://www.facebook.com/Diverse-Influencers-2002125203238975/"><i class="fab fa-facebook" aria-hidden="true" style="font-size:50px;color:white"></i></a></li>
                            <li style="margin-right: 1%;margin-left: 1%;"><a href="https://www.linkedin.com/company/diverseinfluencers/"><i class="fab fa-linkedin" aria-hidden="true" style="font-size:50px;color:white"></i></a></li>
                            <li style="margin-right: 1%;margin-left: 1%;"><a href="https://www.youtube.com/channel/UCBcfMarW-bB5nRuiMaENRWg"><i class="fab fa-youtube" aria-hidden="true" style="font-size:50px;color:white"></i></a></li>
                            <li style="margin-right: 1%;margin-left: 1%;"><a href="http://smile.amazon.com/ch/83-0755730"><img src="sources/images/amazon-1.png" style="width: 25%; padding-bottom: 5%;"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
            
        </div>
      
   
    </footer>
            
            

        
        
   

    
    

</body>
</html>

<!--By Dean P. 7/16/19-->