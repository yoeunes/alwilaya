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
    {!! Html::style('assets/css/bootstrap.css') !!}
    {!! Html::style('assets/css/font-awesome.css') !!}
    @yield('page_specific_plugin_styles')
    {!! Html::style('assets/css/ace-fonts.css') !!}
    {!! Html::style('assets/css/ace.css') !!}
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
@yield('page_specific_plugin_scripts')
{!! Html::script('assets/js/ace/elements.scroller.js') !!}
{!! Html::script('assets/js/ace/elements.colorpicker.js') !!}
{!! Html::script('assets/js/ace/elements.fileinput.js') !!}
{!! Html::script('assets/js/ace/elements.typeahead.js') !!}
{!! Html::script('assets/js/ace/elements.wysiwyg.js') !!}
{!! Html::script('assets/js/ace/elements.spinner.js') !!}
{!! Html::script('assets/js/ace/elements.treeview.js') !!}
{!! Html::script('assets/js/ace/elements.wizard.js') !!}
{!! Html::script('assets/js/ace/elements.aside.js') !!}
{!! Html::script('assets/js/ace/ace.js') !!}
{!! Html::script('assets/js/ace/ace.ajax-content.js') !!}
{!! Html::script('assets/js/ace/ace.touch-drag.js') !!}
{!! Html::script('assets/js/ace/ace.sidebar.js') !!}
{!! Html::script('assets/js/ace/ace.sidebar-scroll-1.js') !!}
{!! Html::script('assets/js/ace/ace.submenu-hover.js') !!}
{!! Html::script('assets/js/ace/ace.widget-box.js') !!}
{!! Html::script('assets/js/ace/ace.settings.js') !!}
{!! Html::script('assets/js/ace/ace.settings-rtl.js') !!}
{!! Html::script('assets/js/ace/ace.settings-skin.js') !!}
{!! Html::script('assets/js/ace/ace.widget-on-reload.js') !!}
{!! Html::script('assets/js/ace/ace.searchbox-autocomplete.js') !!}
@yield('inline_scripts')
{!! Html::style('assets/css/ace.onpage-help.css') !!}
<script type="text/javascript"> ace.vars['base'] = '..'; </script>
{!! Html::script('assets/js/ace/elements.onpage-help.js') !!}
{!! Html::script('assets/js/ace/ace.onpage-help.js') !!}
{!! Html::script('assets/plugins/flipcountdown/jquery.flipcountdown.js') !!}
{!! Html::script('assets/plugins/sweetalert2/dist/sweetalert2.min.js') !!}
{!! Html::script('assets/plugins/toastr/toastr.min.js') !!}
<script>
    $(document).ready(function () {

        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });

        $('#flipcountdown').flipcountdown({
            size      : 'sm',
            showHour  : true,
            showMinute: true,
            showSecond: true,
            am        : false,
        }).css({
            'height': '33px',
            'margin': '4px'
        });
        $('#flipcountdownmini').flipcountdown({
            size      : 'xs',
            showHour  : false,
            showMinute: true,
            showSecond: false,
            am        : false,
        }).css({
            'height'     : '30px',
            'line-height': '30px',
            'margin-top' : '6px',
            'white-space': 'nowrap'
        });
    });
</script>
{!! Toastr::render() !!}
</body>
</html>
