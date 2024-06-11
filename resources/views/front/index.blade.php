<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Business Casual - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="{{asset('front/assets/favicon.ico')}}" />
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('front/css/styles.css')}}" rel="stylesheet" />
</head>
<style>
@font-face {
    font-family: 'yekan';
    src: url('/fonts/yekan.ttf') format('truetype'),
        url('/fonts/yekan.eot?#iefix') format('embedded-opentype');
}

body {
    direction: rtl;
    text-align: right;
    font-family: yekan;

}

body li {
    list-style: none;
}

body a {
    cursor: pointer;
    text-decoration: none;
}

.list-item{
    margin:20px 0;
}

.list-title {
    text-align: center;
}
</style>

<body>
    @include('front.header')
    @yield('content')
    @include('front.footer')
</body>

</html>