<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Cycle</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ asset($template->assets_path . '/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ asset($template->assets_path . '/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset($template->assets_path . '/images/logo.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700,800&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/owl.carousel.min.css')}}">
      <link rel="stylesoeet" href="{{ asset($template->assets_path . '/css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section header_bg">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a href="index.html" class="logo">
               <img src="{{ asset($template->assets_path . '/images/logo.png')}}"></a>
         </nav>
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-7">
                              <div class="image_1"><img src="{{ asset($template->assets_path . '/images/img-1.png')}}"></div>
                           </div>
                           <div class="col-md-5">
                              <h1 class="banner_taital">New Model Cycle</h1>
                              <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- cycle section start -->
      <div class="cycle_section layout_padding">
         <div class="container">
            <h1 class="cycle_taital">Our Cycle</h1>
            <p class="cycle_text">It is a long established fact that a reader will be distracted by the </p>
            <div class="cycle_section_3 layout_padding">
               <div class="row">
                  <div class="col-md-6">
                     <h1 class="cycles_text">Stylis Cycle</h1>
                     <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                     <div class="btn_main">
                        <div class="buy_bt"><a href="#order">Buy Now</a></div>
                        {{-- <h4 class="price_text">Price <span style=" color: #f7c17b">$</span> <span style=" color: #325662">200</span></h4> --}}
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="box_main_3">
                        {{-- <h6 class="number_text_2">02</h6> --}}
                        <div style="margin-top: 100px!important" class="image_2"><img src="{{ asset($template->assets_path . '/images/img-3.png')}}"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- cycle section end -->
      <!-- about section start -->
      <div class="about_section layout_padding" id="about" data-target="about">
         <div class="container">
            <h1 class="about_taital">About Our cycle Store</h1>
            <p class="about_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters
            </p>
            <div class="about_main">
               <img src="{{ asset($template->assets_path . '/images/img-5.png')}}" class="image_5">
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- client section start -->
      <div class="client_section layout_padding" id="testimonial" data-target="testimonial">
         <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="client_main">
                        <h1 class="client_taital">Says Customers</h1>
                        <div class="client_section_2">
                           <div class="client_left">
                              <div><img src="{{ asset($template->assets_path . '/images/client-img.png')}}" class="client_img"></div>
                           </div>
                           <div class="client_right">
                              <div class="quote_icon"><img src="{{ asset($template->assets_path . '/images/quote-icon.png')}}"></div>
                              <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                              <h3 class="client_name">Channery</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="client_main">
                        <h1 class="client_taital">Says Customers</h1>
                        <div class="client_section_2">
                           <div class="client_left">
                              <div><img src="{{ asset($template->assets_path . '/images/client-img.png')}}" class="client_img"></div>
                           </div>
                           <div class="client_right">
                              <div class="quote_icon"><img src="{{ asset($template->assets_path . '/images/quote-icon.png')}}"></div>
                              <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                              <h3 class="client_name">Channery</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="client_main">
                        <h1 class="client_taital">Says Customers</h1>
                        <div class="client_section_2">
                           <div class="client_left">
                              <div><img src="{{ asset($template->assets_path . '/images/client-img.png')}}" class="client_img"></div>
                           </div>
                           <div class="client_right">
                              <div class="quote_icon"><img src="{{ asset($template->assets_path . '/images/quote-icon.png')}}"></div>
                              <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                              <h3 class="client_name">Channery</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>
      <!-- client section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="contact_main">
               <h1 class="request_text">Order Now</h1>
               <div class="row">
                  <div class="col-md-8 justify-content-start">
                        <p class="about_text">Cycle</p>
                  </div>
                  <div class="col-md-4 text-end">
                        <span style="margin-right: 5px">
                           <p class="about_text">BDT 12000</p>
                        </span>
                  </div>
               </div>
               <form action="/action_page.php">
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Name" name="Name">
                  </div>
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Phone" name="Email">
                  </div>
                  <div class="form-group">
                     <input type="Number" class="email-bt" placeholder="Quantity" name="Name">
                  </div>
                  <div class="form-group" style="color: #ffffff !important">
                        <div class="form-check d-flex justify-content-between">
                           <div>
                              <input class="form-check-input" type="radio" name="shipping_cost"
                                    id="flexRadioDefault1" checked
                                    value="">
                              <label class="form-check-label" for="flexRadioDefault1"> Shiping Cost (Inside Dhaka)</label>
                           </div>
                           BDT 300
                        </div>
                        <div class="form-check d-flex justify-content-between">
                           <div>
                              <input class="form-check-input" type="radio" name="shipping_cost"
                                    id="flexRadioDefault2"
                                    value="">
                              <label class="form-check-label" for="flexRadioDefault2">Shipping Cost (Outside Dhaka)</label>
                           </div>
                           BDT 500
                        </div>
                  </div>
                  <div class="form-group">
                     <textarea class="massage-bt" placeholder="Address" rows="5" id="comment" name="Address"></textarea>
                  </div>
               </form>
               <div class="send_btn"><a href="javascript:void(0)">Order Now</a></div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-8 col-sm-12 padding_0">
                  <div class="map_main">
                     <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="call_text"><a href="javascript:void(0)"><span class="padding_left_0">Page when looking at its layou</span></a></div>
                  <div class="call_text"><a href="javascript:void(0)"><span class="padding_left_0">Call Now  +01 123467890</span></a></div>
                  <div class="call_text"><a href="javascript:void(0)"><span class="padding_left_0">demo@gmail.com</span></a></div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">Copyright 2019 All Right Reserved By.<a href="javascript:void(0)"> 1commerce</p><p class="copyright_text">Disrtributed By. <a href="javascript:void(0)">1commerce </a></p>
         </div>
      </div>
      <!-- copyright section end -->    
      <!-- Javascript files-->
      <script src="{{ asset($template->assets_path . '/js/jquery.min.js')}}"></script>
      <script src="{{ asset($template->assets_path . '/js/popper.min.js')}}"></script>
      <script src="{{ asset($template->assets_path . '/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ asset($template->assets_path . '/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{ asset($template->assets_path . '/js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{ asset($template->assets_path . '/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{ asset($template->assets_path . '/js/custom.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>