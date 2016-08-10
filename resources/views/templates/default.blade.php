<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <link rel="icon shortcut" href="{!! url('assets/images/favicon.png') !!}">
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="<?php echo csrf_token() ?>" />
    {!! Html::style('assets/css/itlabspro/default.min.css') !!}
    @yield('page_specific_plugin_styles')
    <!--[if lte IE 9]>
    {!! Html::style('assets/css/ace-part2.css') !!}
    <![endif]-->
    <!--[if lte IE 9]>
    {!! Html::style('assets/css/ace-ie.css') !!}
    <![endif]-->
    @yield('inline_styles')
    {!! Html::script('assets/js/ace-extra.js') !!}
    <!--[if lte IE 8]>
    {!! Html::script('assets/js/html5shiv.js') !!}{!! Html::script('assets/js/respond.js') !!}
    <![endif]-->
    {!! Html::style('assets/plugins/flipcountdown/jquery.flipcountdown.css') !!}
    {!! Html::style('assets/css/itlabspro/itlabspro.min.css') !!}
    {!! Html::style('assets/plugins/sweetalert2/dist/sweetalert2.min.css') !!}
    {!! Html::style('assets/plugins/toastr/toastr.min.css') !!}
</head>
<body class="no-skin">
@include('templates.layouts.navbar')@include('templates.layouts.main-container')@yield('basic_scripts')<!--[if !IE]> -->
{!! Html::script('assets/js/jquery.js') !!}
{!! Html::script('assets/js/bootstrap.js') !!}
{!! Html::script('assets/js/itlabspro/default.min.js') !!}
{!! Html::script('assets/plugins/flipcountdown/jquery.flipcountdown.js') !!}
{!! Html::script('assets/plugins/sweetalert2/dist/sweetalert2.min.js') !!}
{!! Html::script('assets/plugins/toastr/toastr.min.js') !!}
{!! Html::script('assets/js/itlabspro/itlabspro.min.js') !!}
{!! Toastr::render() !!}
@yield('page_specific_plugin_scripts')
@yield('inline_scripts')
</body>
</html>
