@extends('website.templates.default')

@section('title')
    Alwilaya | Contactez-nous
@endsection

@section('style')
    {!! Html::style('assets/plugins/jquery.steps/css/jquery.steps.css') !!}
    {!! Html::style('assets/plugins/formvalidation/css/formValidation.min.css') !!}
    <style>
        #page-content {
            width    : 100%;
            height   : 100%;
            display  : block;
            position : relative;
        }
        
        #page-content::after {
            content    : "";
            background : url('assets/website/images/reclamation.jpg');
            opacity    : 0.1;
            top        : 0;
            left       : 0;
            bottom     : 0;
            right      : 0;
            position   : absolute;
            z-index    : -1;
        }
        
        #reclamationForm {
            margin : 100px 0;
        }
        
        #reclamationForm .content {
            min-height : 100px;
            margin     : 0 auto;
        }
        
        #reclamationForm .content > .body {
            width    : 100%;
            height   : auto;
            padding  : 15px;
            position : relative;
        }
    </style>
@endsection

@section('script')
    {!! Html::script('assets/plugins/jquery.steps/js/jquery.steps.min.js') !!}
    {!! Html::script('assets/plugins/formvalidation/js/formValidation.min.js') !!}
    {!! Html::script('assets/plugins/formvalidation/js/framework/bootstrap.min.js') !!}
    {!! Html::script('assets/plugins/formvalidation/js/language/fr_FR.js') !!}
    <script>
        $(window).ready(function () {
            function adjustIframeHeight() {
                var $body   = $('body'),
                    $iframe = $body.data('iframe.fv');
                if ($iframe) {
                    // Adjust the height of iframe
                    $iframe.height($body.height());
                }
            }
            
            $('#reclamationForm')
            .steps({
                headerTag       : 'h2',
                bodyTag         : 'section',
                transitionEffect: "slideLeft",
                autoFocus       : true,
                onStepChanged   : function (e, currentIndex, priorIndex) {
                    adjustIframeHeight();
                },
                onStepChanging  : function (e, currentIndex, newIndex) {
                    var fv         = $('#reclamationForm').data('formValidation'),
                        $container = $('#reclamationForm').find('section[data-step="' + currentIndex + '"]');
                    fv.validateContainer($container);
                    var isValidStep = fv.isValidContainer($container);
                    if (isValidStep === false || isValidStep === null) {
                        return false;
                    }
                    return true;
                },
                onFinishing     : function (e, currentIndex) {
                    var fv         = $('#profileForm').data('formValidation'),
                        $container = $('#profileForm').find('section[data-step="' + currentIndex + '"]');
                    fv.validateContainer($container);
                    var isValidStep = fv.isValidContainer($container);
                    if (isValidStep === false || isValidStep === null) {
                        return false;
                    }
                    return true;
                },
                onFinished      : function (e, currentIndex) {
                    // Uncomment the following line to submit the form using the defaultSubmit() method
                    // $('#profileForm').formValidation('defaultSubmit');
                    // For testing purpose
                    $('#welcomeModal').modal();
                }
            }).formValidation({
                framework: 'bootstrap',
                locale   : 'fr_FR',
                icon     : {
                    valid     : 'glyphicon glyphicon-ok',
                    invalid   : 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                excluded : ':disabled',
                fields   : {
                    username : {
                        validators: {
                            notEmpty    : {
                            },
                            stringLength: {
                                min    : 6,
                                max    : 30,
                            },
                            regexp      : {
                                regexp : /^[a-zA-Z0-9_\.]+$/,
                            }
                        }
                    },
                    firstName: {
                        row       : '.col-xs-4',
                        validators: {
                            notEmpty: {
                            },
                            regexp  : {
                                regexp : /^[a-zA-Z\s]+$/,
                            }
                        }
                    },
                    lastName : {
                        row       : '.col-xs-4',
                        validators: {
                            notEmpty: {
                            },
                            regexp  : {
                                regexp : /^[a-zA-Z\s]+$/,
                            }
                        }
                    },
                }
            });
        });
    </script>
@endsection

@section('content')
    <div id="page-content">
        <div class="container">
            <div class="row">
                <div id="main-content" class="col-md-8 col-md-offset-2">
                    <form id="reclamationForm" method="post" class="form-horizontal">
                        
                        <h2>Réclamation</h2>
                        <section data-step="0">
                            <div class="form-group">
                                <label class="col-xs-3 control-label">Username</label>
                                <div class="col-xs-5">
                                    <input type="text" class="form-control" name="username" />
                                </div>
                            </div>
                        </section>
                        
                        <h2>Profile</h2>
                        <section data-step="1">
                            <div class="form-group">
                                <label class="col-xs-3 control-label">Full name</label>
                                
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" name="firstName" placeholder="First name" />
                                </div>
                                
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" name="lastName" placeholder="Last name" />
                                </div>
                            </div>
                        </section>
                    
                    </form>
                    
                    <div class="modal fade" id="welcomeModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Welcome</h4>
                                </div>
                                <div class="modal-body">
                                    <p class="text-center">Thanks for signing up</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
