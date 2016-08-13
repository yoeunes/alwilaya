<!DOCTYPE html>
<html>
<head>
    <title>Medicomar</title>
    <meta charset="utf-8">
    {!! Html::style('assets/plugins/font-awesome/css/font-awesome.min.css') !!}
    {!! Html::style('assets/css/itlabspro/login.min.css') !!}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
    {!! Html::script('assets/plugins/bootstrap/js/jquery.min.js') !!}
    <style>
        .alert {
            padding               : 8px 35px 8px 14px;
            margin-bottom         : 18px;
            color                 : #c09853;
            text-shadow           : 0 1px 0 rgba(255, 255, 255, 0.5);
            background-color      : #fcf8e3;
            border                : 1px solid #fbeed5;
            -webkit-border-radius : 4px;
            -moz-border-radius    : 4px;
            border-radius         : 4px;
        }

        .alert-heading {
            color : inherit;
        }

        .alert .close {
            position    : relative;
            top         : -2px;
            right       : -21px;
            line-height : 18px;
        }

        .alert-success {
            color            : #468847;
            background-color : #dff0d8;
            border-color     : #d6e9c6;
        }

        .alert-danger,
        .alert-error {
            color            : #b94a48;
            background-color : #f2dede;
            border-color     : #eed3d7;
        }

        .alert-info {
            color            : #3a87ad;
            background-color : #d9edf7;
            border-color     : #bce8f1;
        }

        .alert-block {
            padding-top    : 14px;
            padding-bottom : 14px;
        }

        .alert-block > p,
        .alert-block > ul {
            margin-bottom : 0;
        }

        .alert-block p + p {
            margin-top : 5px;
        }
    </style>
</head>
<body>
<div class="outer">
    <div class="middle">
        <div class="inner">
            <div class="main">
                <div class="login-form">
                    <h1>Se connecter</h1>
                    <div class="head">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (session('warning'))
                            <div class="alert alert-warning">
                                {{ session('warning') }}
                            </div>
                        @endif
                    </div>
                    {!! Form::open(array('url' => '/login')) !!}

                    <div class="input-parent">
                        <div class="input-group{{ $errors->has('email') ? ' has-error has-feedback' : '' }}">
                            {!! Form::text('email', null , ['id' => 'email', 'placeholder' => 'E-mail', 'class' => 'form-control']) !!}
                            @if($errors->has('email'))
                                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            @endif
                        </div>
                        @if($errors->has('email'))
                            <span class="help-block" style="color: red;">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="input-parent">
                        <div class="input-group{{ $errors->has('password') ? ' has-error has-feedback' : '' }}">
                            {!! Form::password('password', ['id' => 'password', 'placeholder' => 'Mot de passe', 'class' => 'form-control']) !!}
                            @if($errors->has('password'))
                                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            @endif
                        </div>
                        @if($errors->has('password'))
                            <span class="help-block" style="color: red;">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="submit">
                        <input type="submit" value="Se connecter">
                    </div>
                    <p><a href="{{ url('/password/reset') }}">Mot de passe oublié</a></p>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>