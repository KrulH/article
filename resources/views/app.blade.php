<!doctype html>
<html lang="en">
<head>
    <style>
        body{

            padding-top: 60px
        }
    </style>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css"  />

</head>
<body>
@include('partials.nav')

<div class="container">
    @include('partials.flash')
    @yield('content')
</div>

<script src= "//code.jquery.com/jquery.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
@yield('footer')
</body>
</html>