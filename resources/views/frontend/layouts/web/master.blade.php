<!DOCTYPE html>

<html lang="en">

<head>
    
    @include('frontend.layouts.web.head')
    
    
    @stack('styles')

</head>

<body>

      
    @include('frontend.layouts.web.header')
    
        @yield('main-content')
    
    @include('frontend.layouts.web.footer')
    
    @include('frontend.layouts.web.scripts')
    
    @stack('scripts')

</body>

</html>