<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('Backend.layouts.sidebar')
      
      @include('Backend.layouts.header')
        
          @yield('content')
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
      @include('Backend.layouts.footer')
          
         
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
  
    <!-- End custom js for this page -->
  </body>
</html>