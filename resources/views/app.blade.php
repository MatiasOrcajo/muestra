<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if($head && !\Illuminate\Support\Facades\Auth::user())
        {!!$head!!}
    @endif
    <title>{{env('APP_NAME')}}</title>

    <!-- CDNs de Font-Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bulma -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    
    <link href="{{ asset('css/input.css') }}" type="text/css" rel="stylesheet"/>
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/>
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
    </div>
    <script>

        var routes = [];
            routes['home']='{{env("APP_URL")}}'
            routes['product-index']='{{route('product.index')}}';
            routes['product-getCategories']='{{route('product.getCategories')}}'; 
            routes['category-showCategory']='{{route('category.showCategory')}}';
            routes['product-showProduct']='{{route('product.showProduct')}}';
            
        var loggued = {{\Illuminate\Support\Facades\Auth::user() ? '1':'0'}};
        
    </script>
    
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    @if($body && !\Illuminate\Support\Facades\Auth::user())
        {!!$body!!}
    @endif
</body>

</html>