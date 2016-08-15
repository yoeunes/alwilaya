@extends('templates.default')

@section('title')
    Ajouter Patient
@endsection

@section('page_specific_plugin_styles')
    {!! Html::style('assets/plugins/icheck/skins/square/blue.css') !!}
    {!! Html::style('assets/plugins/icheck/skins/square/red.css') !!}
    {!! Html::style('assets/plugins/datepicker/daterangepicker.css') !!}
@endsection

@section('page_specific_plugin_scripts')
    {!! Html::script('assets/plugins/icheck/icheck.min.js') !!}
    {!! Html::script('assets/plugins/datepicker/moment.min.js') !!}
    {!! Html::script('assets/plugins/moment/locale/fr.js') !!}
    {!! Html::script('assets/plugins/datepicker/daterangepicker.js') !!}
    {!! Html::script('assets/js/itlabspro/mic_wrapper.js') !!}
@endsection

@section('inline_styles')

@endsection

@section('inline_scripts')
    <script>
        moment.locale("fr");
        $(window).ready(function () {
            $('input').iCheck({
                increaseArea: '-10%'
            });
            $(':radio').each(function (index, el) {
                var valeur = $(this).val();
                switch (valeur) {
                    case 'male':
                        $(this).parent().removeClass('iradio_square-blue iradio_square-yellow iradio_square-green iradio_square-red iradio_square-orange').addClass('iradio_square-red hover');
                        break;
                    case 'female':
                        $(this).parent().removeClass('iradio_square-blue iradio_square-yellow iradio_square-green iradio_square-red iradio_square-orange').addClass('iradio_square-blue hover');
                        break;
                    default:
                        $(this).parent().removeClass('iradio_square-blue iradio_square-yellow iradio_square-green iradio_square-red iradio_square-orange').addClass('iradio_square-blue hover');
                        break;
                }
            });
            $('#date_naissance').daterangepicker({
                singleDatePicker   : true,
                showDropdowns      : true,
                autoApply          : true,
                alwaysShowCalendars: true,
                linkedCalendars    : true,
                autoUpdateInput    : true,
                startDate          : moment(),
                opens              : "center"
            }, function (start, end, label) {
            });
        });
    </script>
@endsection

@section('breadcrumb')
    <li class="#">Patient</li>
    <li class="active">Nouveau patient</li>
@endsection

@section('page_content')
    <div class="space"></div>
    <div class="global">
        <div class="global-title">
            <i class="fa fa-plus-circle"></i> Nouveau Patient
        </div>
        <div class="global-body">
            {!! Form::open( array ( 'route' => array ( 'user.store' ) )) !!}
            @include('user.partials._userForm')
            <div class="row" style="margin: 10px 0px;">
                <div class="col-sm-2 col-sm-offset-8">
                    <button type="submit" class="form-control btn btn-submit">
                        <i class="fa fa-arrow-circle-o-right"></i> Enregistrer
                    </button>
                </div>
                <div class="col-sm-2">
                    <button type="reset" class="form-control btn btn-reset"><i class="fa fa-ban"></i> Réinitialiser
                    </button>
                </div>
            </div>
            {!! Form::close() !!}
            <div class="clear"></div>
        </div>
    </div>
@endsection