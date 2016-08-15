<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title')</title>
    {!! Html::style('assets/plugins/bootstrap/dist/css/bootstrap.min.css') !!}
    {!! Html::style('assets/website/css/website.min.css') !!}
    {!! Html::style('assets/website/css/stylesheet.css') !!}
    {!! Html::style('assets/website/css/mb-comingsoon-iceberg.css') !!}
    {!! Html::style('assets/plugins/font-awesome/css/font-awesome.min.css') !!}
    {!! Html::script('assets/plugins/jquery/dist/jquery.min.js') !!}
    {!! Html::script('assets/website/js/modernizr.custom.97074.js') !!}
    <!--[if lt IE 9]>
    {!! Html::script('assets/js/html5shiv.js') !!}{!! Html::script('assets/js/respond.min.js') !!}
    <![endif]-->
    <style>
        .text-head {
            color : #FFF;
        }
    </style>
</head>
<body class="index-page">
@include('website.templates.layouts.navbar')
@yield('content')
@include('website.templates.layouts.footer')
{!! Html::script('assets/plugins/bootstrap/dist/js/bootstrap.min.js') !!}
{!! Html::script('assets/website/js/classie.js') !!}
{!! Html::script('assets/website/js/cbpAnimatedHeader.js') !!}
{!! Html::script('assets/website/js/jquery.mb-comingsoon.min.js') !!}
<script type="text/javascript">
    $(function () {
        $('#myCounter').mbComingsoon({expiryDate: new Date(2016, 0, 1, 9, 30), speed: 100});
        setTimeout(function () {
            $(window).resize();
        }, 200);
    });
</script>
{!! Html::script('assets/website/js/jquery.hoverdir.js') !!}
<script type="text/javascript">
    $(function () {
        $(' #da-thumbs > li ').each(function () { $(this).hoverdir(); });
    });
</script>
</body>
</html>