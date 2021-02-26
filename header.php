
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>INdex</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- addding the cdn's -->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/media.css">
</head> 

<?php wp_head(); ?>
<body <?php body_class(); ?>>

    
    <header>
        <div class="container">
            <div class="headerCOntainer">
                <div class="logoContainerAndMenu">
                    <div class="logoCOntainer">
                        <img src="./images/1.svg">
                    </div>
                    <div class="menuContainer">
                        <ul>
                            <li>
                                <a href="#">Home</a>
                                <ul class="submenu">
                                    <li><a href="#">Why Us</a></li>
                                    <li><a href="#">Solutions   </a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">FAQ's</a></li>
                                    <li><a href="#">Blog</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Why Us</a></li>
                            <li><a href="#">Solutions   </a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">FAQ's</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="rightMenu">
                    <div class="socialLInks">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <a href="#" class="getInTOuch">Get in TOuch <img src="./images/2.svg"></a>
                </div>
            </div>
        </div>
    </header>
