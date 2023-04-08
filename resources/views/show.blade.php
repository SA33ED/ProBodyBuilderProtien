<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>pro</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('template_style/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('template_style/css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('template_style/css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('template_style/images/fevicon.png')}}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('template_style/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{asset('template_style/images/loading.gif')}}" alt="#" /></div>
    </div>
    <!-- end loader -->

    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="menu_sitbar">
                <ul class="menu">
                    <li><button type="button">
                            <img style="" onclick="openNav()" src="{{asset('template_style/images/menu_icon.png')}}"
                                alt="#" />
                        </button>
                    </li>
                </ul>
                <ul class="social_icon">
                    <li><a href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="header_full_bg">
                <div class="header_top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="logo">
                                    <a href="{{route("welcome")}}"><img
                                            src="{{asset('template_style/images/logo.png')}}" alt="#" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="banner_text">
                                    <h1>Pro<br> Body Builder Protien</h1>
                                    <a class="get_btn" href="#about" role="button">About Protien</a> <a class="get_btn"
                                        href="#contact" role="button">BUY NOW</a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <img class="bann_img" src="{{asset('template_style/images/banner_ing.png')}}" alt="#" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <!-- end header inner -->
    <!-- end header -->
    <!-- about -->
    <div id="about" class="about">
        <div class="container-fluid">
            <div class="row d_flex">
                <div class="col-md-6">
                    <div class="titlepage">
                        <h2>{{$protien->name}}</h2>
                        <h2>${{$protien->price}}</h2>
                        <p>{{$protien->about}}</p>
                        <a class="read_more" href="{{route("welcome")}}#contact">Buy Now</a>
                    </div>
                </div>
                <div class="col-md-6 pad_right0">
                    <div class="about_img ">
                        <figure><img src="{{asset('img/'.$protien->image)}}" style="width:500px" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->


    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="daih_bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="conta">
                                <li><i class="fa fa-phone" aria-hidden="true"></i> Call Now +01 123467890</li>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> Location</li>
                                <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> demo@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <img class="tex_left" src="{{asset('template_style/images/logo2.png')}}" alt="#" />
                    </div>
                    <div class=" col-md-3 col-sm-6">
                        <p class="variat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum </p>
                    </div>
                    <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                        <h3>Information </h3>
                        <ul class="link_menu">
                            <li> There are many </li>
                            <li> variations of pas</li>
                            <li> sages of Lorem </li>
                            <li> Ipsum available, </li>
                            <li>but the majority </li>
                            <li>have suffered </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                        <h3>Helpful Links</h3>
                        <ul class="link_menu">
                            <li> There are many </li>
                            <li> variations of pas</li>
                            <li> sages of Lorem </li>
                            <li> Ipsum available, </li>
                            <li>but the majority </li>
                            <li>have suffered </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                        <h3>Supported</h3>
                        <ul class="link_menu">
                            <li> There are many </li>
                            <li> variations of pas</li>
                            <li> sages of Lorem </li>
                            <li> Ipsum available, </li>
                            <li>but the majority </li>
                            <li>have suffered </li>
                        </ul>
                    </div>
                    <div class="col-sm-12">
                        <ul class="social2_icon">
                            <li><a href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-linkedin-square"
                                        aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <p>© 2019 All Rights Reserved.<a href="https://html.design/"> Free html Templates</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="{{asset('template_style/js/jquery.min.js')}}"></script>
    <script src="{{asset('template_style/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('template_style/js/jquery-3.0.0.min.js"')}}"></script>
    <!-- sidebar -->
    <script src="{{asset('template_style/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('template_style/js/custom.js')}}"></script>
    <script>
    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }
    </script>
</body>

</html>
