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
       <!-- Font Awesome icon css-->
      <link href="{{ asset('assets/font-awesome/css/all.min.css') }}" rel="stylesheet" media="screen">
    
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ asset($template->assets_path . '/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ asset($template->assets_path . '/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset($template->assets_path . '/images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700,800&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/owl.carousel.min.css')}}">
      <link rel="stylesoeet" href="{{ asset($template->assets_path . '/css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!-- inject:vite (css/js) -->
      @vite('resources/css/app.css')
      @vite('resources/js/app.js')
      <!-- /inject:vite (css/js) -->

   </head>
   <body>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #3e3e3e">
         <div class="container-fluid">
             <a class="navbar-brand" href="{{ route('templates.mine') }}" title="Back to Admin Panel">
                 <i class="fas fa-arrow-left me-2"></i>
                 ADMIN
             </a>
             <a href="{{ url('/cycle') }}" class="btn btn-light px-4" target="_blank"
                 title="Live Preview">
                 VIEW
             </a>
         </div>
     </nav>
      
      <main id="app" class="mt-5">
         <cycle :user_template="{{ json_encode($userTemplate) }}" :template="{{ json_encode($template) }}" />
     </main>

      <!-- Javascript files-->
      <script src="{{ asset($template->assets_path . '/js/jquery.min.js')}}"></script>
      <script src="{{ asset($template->assets_path . '/js/popper.min.js')}}"></script>
      <script src="{{ asset($template->assets_path . '/js/bootstrap.bundle.min.js')}}"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="{{ asset($template->assets_path . '/js/jquery-3.0.0.min.js')}}"></script> 
      <script src="{{ asset($template->assets_path . '/js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{ asset($template->assets_path . '/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{ asset($template->assets_path . '/js/custom.js')}}"></script>
      <!-- javascript --> 
      <script src="{{ asset($template->assets_path . '/js/owl.carousel.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
           document.getElementById("main").style.marginLeft = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
           document.getElementById("main").style.marginLeft= "0";
          
         }

         $("#main").click(function(){
             $("#navbarSupportedContent").toggleClass("nav-normal")
         })
      </script>
   </body>
</html>