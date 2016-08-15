@extends('templates.default')

@section('title', 'Utilisateur')

@section('page_specific_plugin_styles')
    {!! Html::style('assets/plugins/icheck/skins/square/blue.css') !!}
    {!! Html::style('assets/plugins/icheck/skins/square/red.css') !!}
    {!! Html::style('assets/plugins/icheck/skins/square/green.css') !!}
    {!! Html::style('assets/plugins/datepicker/daterangepicker.css') !!}
    {!! Html::style('assets/css/itlabspro/timeline.css') !!}
@endsection

@section('page_specific_plugin_scripts')
    {!! Html::script('assets/plugins/icheck/icheck.min.js') !!}
    {!! Html::script('assets/plugins/datepicker/moment.min.js') !!}
    {!! Html::script('assets/plugins/moment/locale/fr.js') !!}
    {!! Html::script('assets/plugins/datepicker/daterangepicker.js') !!}
    {!! Html::script('assets/js/itlabspro/mic_wrapper.js') !!}
@endsection

@section('inline_styles')
    <style>
        .permission {
            outline    : 1px solid lightgrey;
            height     : 60px;
            padding    : 5px;
            text-align : center;
        }
        
        .permission label {
            margin-right : 20px;
            margin-left  : 5px;
        }
    </style>
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
                    case 'true':
                        $(this).parent().removeClass('iradio_square-blue iradio_square-yellow iradio_square-green iradio_square-red iradio_square-orange').addClass('iradio_square-green hover');
                        break;
                    case 'false':
                        $(this).parent().removeClass('iradio_square-blue iradio_square-yellow iradio_square-green iradio_square-red iradio_square-orange').addClass('iradio_square-red hover');
                        break;
                    default:
                        $(this).parent().removeClass('iradio_square-blue iradio_square-yellow iradio_square-green iradio_square-red iradio_square-orange').addClass('iradio_square-blue hover');
                        break;
                }
            });
            $('.permission input:radio').on('ifChecked', function (event) {
                var self  = $(this),
                    perm  = self.attr('name'),
                    value = self.val(),
                    url   = '/api/changePermission';
                $.ajax({
                    url     : url,
                    type    : 'post',
                    dataType: 'json',
                    data    : {
                        perm : perm,
                        value: value
                    },
                    success : function (responseText, statusText, xhr, $form) {
                        console.log(xhr)
                        if (xhr.responseJSON.result == 'success') {
                            toastr.options = {
                                "closeButton"      : false,
                                "debug"            : false,
                                "newestOnTop"      : true,
                                "progressBar"      : true,
                                "positionClass"    : "toast-bottom-right",
                                "preventDuplicates": false,
                                "onclick"          : null,
                                "showDuration"     : "300",
                                "hideDuration"     : "1000",
                                "timeOut"          : "5000",
                                "extendedTimeOut"  : "1000",
                                "showEasing"       : "swing",
                                "hideEasing"       : "linear",
                                "showMethod"       : "fadeIn",
                                "hideMethod"       : "fadeOut"
                            };
                            toastr.success('' + xhr.responseJSON.message);
                        }
                    },
                    error   : function (xhr, status, error) {
                        console.log('xhr : ');
                        console.log(xhr);
                        console.log('status : ');
                        console.log(status);
                        console.log('error :');
                        console.log(error);
                    }
                });
            });
            $('#date_naissance').daterangepicker({
                singleDatePicker   : true,
                showDropdowns      : true,
                autoApply          : true,
                alwaysShowCalendars: true,
                linkedCalendars    : true,
                autoUpdateInput    : true,
                opens              : "center"
            }, function (start, end, label) {
            });
        });
    </script>
@endsection

@section('breadcrumb')
    <li class="#">Utilisateur</li>
    <li class="active">Modification</li>
@endsection

@section('page_content')
    <div class="space"></div>
    <div class="global">
        <div class="global-title">
            <i class="fa fa-edit-circle"></i> Utilisateur ( {{ $user->prenom . ' ' . $user->nom }})
        </div>
        <div class="global-body">
            {!! Form::model($user, array ( 'route' => array ( 'user.update', $user->id ) ,'method' => 'put') ) !!}
            @include('user.partials._userForm')
            <div class="row" style="margin: 10px 0px;">
                <div class="col-sm-2 col-sm-offset-8">
                    <button type="submit" class="form-control btn btn-submit">
                        <i class="fa fa-arrow-circle-o-right"></i> Modifier
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
    <div class="global" style="margin-top: 20px;">
        <div class="global-title">
            <i class="fa fa-edit-circle"></i> Les permissions
            <span>
                <span><input type="radio" value="true" checked> Oui</span>
                <span><input type="radio" value="false" checked> Non</span>
            </span>
        </div>
        <div class="global-body">
            <div class="row permissions">
                @include('user.partials._permissions')
            </div>
            <div class="clear"></div>
        </div>
    </div>
@endsection