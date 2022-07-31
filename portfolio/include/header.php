<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mansur Kılıç</title>
    <link rel="stylesheet" href="./css/style.css">
    <!-- font avesome -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
    <!-- font google -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- icon link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

</head>

<body class="body" style="font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">

    
    <!-- main navbar  -->

    <div class="nav1">
        <ul style="z-index: 1;">
            <li id="navbutton" onclick="navbaroff();" style="padding-left: 0px;
              padding-right: 0px; " class="slider_button pc_off">
                <span></span><span></span><span></span><span></span> <i id="navibutton" class="fa-xl fa-solid fa-code text"></i><a href="">
            </li></a>
            <li class="mobile_off" style="border-bottom-left-radius: 10px;border-top-left-radius: 10px;">
                Home
                <span></span><span></span><span></span><span></span>
            </li>
            <li class="mobile_off">
                Products
                <span></span><span></span><span></span><span></span>
            </li>
            <li class="mobile_off">
                Services
                <span></span><span></span><span></span><span></span>
            </li>
            <li class="mobile_off">
                Contact
                <span></span><span></span><span></span><span></span>
            </li>
            <li class="mobile_off" style="border-bottom-right-radius: 10px;border-top-right-radius: 10px;">
                Portfolio
                <span></span><span></span><span></span><span></span>
            </li>
            <div class="search__form" id="sform">
                <form class="search">
                    <input type="text" placeholder="Search" class="search__input">
                    <button type="button" class="search__btn">
                        <i class="fa-brands fa-searchengin" style="font-size: 25px;"></i>
                    </button>
                </form>
            </div>
        </ul>

    </div>


    <div class="pc_off  container1 ">
        <div class="navigation1">
            <div class="nav_mobile nav1">
                <ul class="list_items">
                    <li class="list-item a-link mt-0" id="display-none" style="--color:#ffa117">
                        <span></span><span></span><span></span><span></span>
                        <a href="#">
                            <p class="text">Home</p>
                        </a>
                    </li>

                    <li class="list-item a-link" id="display-none" style=" --color:#0fc70f">
                        <span></span><span></span><span></span><span></span>
                        <a href="#">

                            <p class="text">About</p>
                        </a>
                    </li>

                    <li class="list-item a-link" id="display-none" style="--color:#2196f3">
                        <span></span><span></span><span></span><span></span>
                        <a href="#">
                            <p class="text">Portfolio</p>
                        </a>
                    </li>

                    <li class="list-item a-link " id="display-none" style="--color:#b145e9">
                        <span></span><span></span><span></span><span></span><a href="#">
                            <p class="text">Contact</p>
                        </a>
                    </li>


                </ul>
            </div>
        </div>

    </div>
    <!-- main navbar  -->