@extends('templates.default')

@section('title')
    Profile
@endsection

@section('page_specific_plugin_styles')
    {!! Html::style('assets/plugins/cropper/dist/cropper.min.css') !!}
    {!! Html::style('assets/plugins/cropper/examples/crop-avatar/css/main.css') !!}
@endsection

@section('page_specific_plugin_scripts')
    {!! Html::script('assets/plugins/jqueryForm/jquery.form.min.js') !!}
    {!! Html::script('assets/plugins/cropper/dist/cropper.min.js') !!}
    {!! Html::script('assets/plugins/cropper/examples/crop-avatar/js/main.js') !!}
@endsection

@section('inline_styles')

@endsection

@section('inline_scripts')
    <script>
        $(window).ready(function () {
            $('#avatar')
            .on('mouseover', function (event) {
                $(this).css({
                    'cursor': 'pointer',
                    'border': '1px dashed #D5D5D5'
                });
            })
            .on('mouseout', function (event) {
                $(this).css({
                    'cursor': 'default',
                    'border': 'none'
                });
            });
            $('#profile_picture').on('change', function (event) {
                event.preventDefault();
            });
        });
    </script>
@endsection

@section('breadcrumb')
    <li class="#">Utilisateur</li>
    <li class="active">Profile</li>
@endsection

@section('page_content')
    <div class="space"></div>
    @include('user.partials._userProfile')
@endsection