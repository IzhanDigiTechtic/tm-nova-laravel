<!DOCTYPE html>

<html lang="en">

<head>
    
    @include('frontend.layouts.thankyou.head')
    
    
    @stack('styles')

</head>

<body>

      
    @include('frontend.layouts.thankyou.header')
    
        @yield('main-content')
    
    
    @include('frontend.layouts.thankyou.scripts')
    
    @stack('scripts')

</body>

</html>