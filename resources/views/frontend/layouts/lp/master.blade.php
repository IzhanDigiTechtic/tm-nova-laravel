<!DOCTYPE html>

<html lang="en">

<head>
    
    @include('frontend.layouts.lp.head')
    
    
    @stack('styles')

</head>

<body>

      
  
    
        @yield('main-content')
    
    @include('frontend.layouts.lp.footer')
    
    @include('frontend.layouts.lp.scripts')
    
    @stack('scripts')

</body>

</html>