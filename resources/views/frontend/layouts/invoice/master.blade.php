<!DOCTYPE html>

<html lang="en">

<head>
    
    @include('frontend.layouts.invoice.head')
    
    
    
    @stack('styles')

</head>

<body style="background-image: linear-gradient(90deg, rgb(33,33,33) 0%,transparent 59%),repeating-linear-gradient(45deg, rgba(168, 168, 168,0.1) 0px, rgba(168, 168, 168,0.1) 1px,transparent 1px, transparent 13px),repeating-linear-gradient(135deg, rgba(168, 168, 168,0.1) 0px, rgba(168, 168, 168,0.1) 1px,transparent 1px, transparent 13px),linear-gradient(90deg, rgb(33,33,33),rgb(33,33,33));">

      
    
    
        @yield('main-content')
    
    
    
    @include('frontend.layouts.invoice.scripts')
    
    @stack('scripts')

</body>

</html>