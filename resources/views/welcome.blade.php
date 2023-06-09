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
      <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset("img/default.png") }}" type="image/x-icon" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('template_style/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{asset('template_style/images/loading.gif')}}" alt="#"/></div>
      </div>
      <!-- end loader -->
      <div id="myNav" class="menu_sid">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
         <div class="menu_sid-content">
            <a href="#protien">Our Protien</a>
            <a href="#about">About Us</a>
            <a href="#testimonial">Testimonial</a>
            <a href="#contact">Contact Us</a>
            <a href="{{route('login')}}">Login As Admin</a>
         </div>
      </div>
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
         <div class="menu_sitbar">
            <ul class="menu">
               <li><button type="button" >
                  <img style="" onclick="openNav()" src="{{asset('template_style/images/menu_icon.png')}}" alt="#"/>
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
                           <a href="{{route("welcome")}}"><img src="{{asset('template_style/images/logo.png')}}" alt="#"/></a>
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
                           <a class="get_btn" href="#about" role="button" >About Protien</a> <a class="get_btn" href="#contact" role="button">BUY NOW</a>
                        </div>
                     </div>
                     <div class="col-md-7">
                        <img class="bann_img" src="{{asset('template_style/images/banner_ing.png')}}" alt="#"/>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->


      <!-- our protien  -->
      <div id="protien" class="protien_main">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Protien</h2>
                  </div>
               </div>
            </div>
            <div class="row">

            @foreach ($protiens as $protien)

               <div class="col-md-3 col-sm-6">
                  <div class="protien">
                     <figure><img src="{{asset("img/" . $protien->image)}}" /></figure>
                     <h4>{{$protien->name}}</h4>
                     <h2>${{$protien->price}}</h2>
                     {{-- <span> {{$protien->about}}  </span> --}}
                     <a class="read_more mar_top" href="{{route("showProtien",$protien->id)}}">Show More</a>
                  </div>
               </div>

            @endforeach

            </div>
         </div>
      </div>
      <!-- end our protien  -->



      <!-- about -->
      <div id="about" class="about">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="titlepage">
                     <h2>About Us</h2>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or</p>
                     <a class="read_more" href="Javascript:void(0)"> Read More</a>
                  </div>
               </div>
               <div class="col-md-6 pad_right0">
                  <div class="about_img ">
                     <figure><img src="{{asset('template_style/images/about.png')}}" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- growyhing -->
      <div class="growyhing">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="body_img">
                     <figure><img src="{{asset('template_style/images/body.png')}}"/></figure>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="titlepage">
                     <h2>Growyhing Your Body From Protien</h2>
                     <a class="read_more" href="Javascript:void(0)"> Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end growyhing -->
      <!-- testimonial -->
      <div id="testimonial" class="testimonial">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Testimonial</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-5">
                  <div class="body_blu_img">
                     <figure><img src="{{asset('template_style/images/tesr.png')}}" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7 pad_right0">
                  <div class="testimo_ban_bg">
                     <div id="testimo" class="carousel slide testimo_ban" data-ride="carousel">
                        <ol class="carousel-indicators">
                           <li data-target="#testimo" data-slide-to="0" class="active"></li>
                           <li data-target="#testimo" data-slide-to="1"></li>
                           <li data-target="#testimo" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                           <div class="carousel-item active">
                              <div class="container">
                                 <div class="carousel-caption relative2">
                                    <div class="row d_flex">
                                       <div class="col-md-11">
                                          <i><img src="{{asset('template_style/images/costu.png')}}" alt="#"/></i>
                                          <span>Consectetur</span>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="container">
                                 <div class="carousel-caption relative2">
                                    <div class="row d_flex">
                                       <div class="col-md-11">
                                          <i><img src="{{asset('template_style/images/costu.png')}}" alt="#"/></i>
                                          <span>Consectetur</span>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="container">
                                 <div class="carousel-caption relative2">
                                    <div class="row d_flex">
                                       <div class="col-md-11">
                                          <i><img src="{{asset('template_style/images/costu.png')}}" alt="#"/></i>
                                          <span>Consectetur</span>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <a class="carousel-control-prev" href="#testimo" role="button" data-slide="prev">
                           <i class="fa fa-angle-left" aria-hidden="true"></i>
                           <span class="sr-only">Previous</span>
                           </a>
                           <a class="carousel-control-next" href="#testimo" role="button" data-slide="next">
                           <i class="fa fa-angle-right" aria-hidden="true"></i>
                           <span class="sr-only">Next</span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end testimonial -->
      <!--  contact -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Request a Protien</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 offset-md-3">
               <!-- order_form -->
                  <form action="{{route("orderStore")}}" method="POST" id="request" class="main_form">
                    @csrf
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Enter Your Full Name" type="type" name="name">
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Enter Your Phone Number" type="type" name="phone">
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Enter Your Adress" type="type" name="address">
                        </div>
                        <div class="col-md-12">
                            <select name="protien_id" id="cars" class="contactus">
                                <option value="volvo" selected disabled>Select Your Protien</option>
                                @foreach ($protiens as $protien)

                                    <option value="{{$protien->id}}">{{$protien->name}}</option>

                                @endforeach

                            </select>
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="quantity" type="number" name="quantity">
                        </div>

                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" Message="Name" name="message">Message</textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn" type="submit">Send</button>
                        </div>
                     </div>

                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="daih_bg">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">
                        <ul class="conta">
                           <li><i class="fa fa-phone" aria-hidden="true"></i> Call Now  +01 123467890</li>
                           <li><i class="fa fa-map-marker" aria-hidden="true"></i> Location</li>
                           <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> demo@gmail.com</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <img class="tex_left" src="{{asset('template_style/images/logo2.png')}}" alt="#"/>
                  </div>
                  <div class=" col-md-3 col-sm-6">
                     <p class="variat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum </p>
                  </div>
                  <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                     <h3>Information  </h3>
                     <ul class="link_menu">
                        <li> There are many </li>
                        <li> variations of pas</li>
                        <li> sages of Lorem </li>
                        <li> Ipsum available, </li>
                        <li>but the majority </li>
                        <li>have suffered  </li>
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
                        <li>have suffered  </li>
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
                        <li>have suffered  </li>
                     </ul>
                  </div>
                  <div class="col-sm-12">
                     <ul class="social2_icon">
                        <li><a href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
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
