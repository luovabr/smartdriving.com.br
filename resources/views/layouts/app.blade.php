<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WRKSN3J');</script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="{{ config('blog.meta.keywords') }}">
    <meta name="description" content="{{ config('blog.meta.description') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ config('blog.default_icon') }}">

    <title>@yield('title', config('app.name'))</title>

    
    <!-- Fonts -->
    <link type="text/css" rel="stylesheet" href="{{ asset('fonts/formular/stylesheet.css') }}">
    
    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link type="text/css"rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    {{--<link rel="stylesheet" href="{{ asset('font-awesome/css/all.min.css') }}">--}}
    <!-- Scripts -->
    <script>
        window.Language = '{{ config('app.locale') }}';

        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
   
    @yield('styles')
    <link type="text/css" rel="stylesheet" href="{{ mix('css/home.css') }}">
</head>
<body>
    <div class="pb-0" id="app">
        @include('particals.navbar')
        <div class="main mb-0">
            @yield('content')
        </div>
    </div>
    @include('particals.footer')
    <!-- Scripts -->
    <script src="{{ mix('js/home.js') }}"></script>

    @yield('scripts')
    <script src="{{asset('js/owl.carousel.min.js')}}"></script> 
    
    <script>
        $(function () {
            $("[data-toggle='tooltip']").tooltip();
        });
    </script>

    <script>
		$('.owl-carousel').owlCarousel({
			
			margin:10,
            nav:true,
            
			responsive:{
                0:{
                    items:1
                },
                450:{
                    items:2
                },
                768:{
                    items:3
                },
                992:{
                    items:4
                },
				1200:{
                    items:5
                }
			}
	})
	</script>
<script>
        (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn.bitrix24.com.br/b16587501/crm/site_button/loader_1_hshisa.js');
</script>    
</body>
</html>
