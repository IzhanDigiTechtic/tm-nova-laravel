<!DOCTYPE html>
<html>
  <head>
      <meta charSet="UTF-8" />
      <meta httpEquiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="icon" type="images/jpg" href="{{asset('assets/images/logo-io.webp')}}">
      {{-- <title> Sequence | Trademark Nova</title> --}}
      <meta name="description" content="Trademark Nova specializes in protecting your brand with expert trademark services." />


      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossOrigin="true" />
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@24.3.6/build/css/intlTelInput.css" />

  
      <link rel="stylesheet" href="{{asset('sequence-assets/main.css')}}" />
      <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
      {{-- <link async rel="stylesheet" href="/assets-updated/mediaCss/media.css" /> --}}
    

    @inertiaHead

  </head>
  <body>
    @inertia
    <script src="{{ mix('/js/app.js') }}"></script>
  </body>
</html>