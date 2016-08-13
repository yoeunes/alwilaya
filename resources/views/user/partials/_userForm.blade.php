<div class="col-sm-6 field">
    <div class="mic_wrapper input-group{{ $errors->has('nom') ? ' has-error has-feedback' : '' }}">
        {!! Form::label('nom', 'Nom', ['class' => 'input-group-addon']) !!}
        {!! Form::text('nom', null , ['id' => 'nom', 'placeholder' => 'Nom', 'class' => 'form-control']) !!}
        <i class="fa fa-microphone-slash"></i>
        @if($errors->has('nom'))
            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
        @endif
    </div>
    @if($errors->has('nom'))
        <span class="help-block">{{ $errors->first('nom') }}</span>
    @endif
</div>
<div class="col-sm-6 field">
    <div class="mic_wrapper input-group{{ $errors->has('prenom') ? ' has-error has-feedback' : '' }}">
        {!! Form::label('prenom', 'Prenom', ['class' => 'input-group-addon']) !!}
        {!! Form::text('prenom', null , ['id' => 'prenom', 'placeholder' => 'Prenom', 'class' => 'form-control']) !!}
        <i class="fa fa-microphone-slash"></i>
        @if($errors->has('prenom'))
            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
        @endif
    </div>
    @if($errors->has('prenom'))
        <span class="help-block">{{ $errors->first('prenom') }}</span>
    @endif
</div>
<div class="col-sm-6 field">
    <div class="input-group{{ $errors->has('sexe')? ' has-error has-feedback' : '' }}">
        {!! Form::label('sexe', 'Sexe', ['class' => 'input-group-addon', 'style'=>'border-right:1px solid #cccccc']) !!}
        <div class="col-xs-6 text-center">
            {!! Form::radio('sexe', 'male', true, array('id'=>'male')) !!}
            <label for="male"{!! $errors->has('sexe')? 'style="color: #a94442;"' : '' !!}> Masculin </label>
        </div>
        <div class="col-xs-6 text-center">
            {!! Form::radio('sexe', 'female', null,array('id'=>'female')) !!}
            <label for="female"{!! $errors->has('sexe')? 'style="color: #a94442;"' : '' !!}> Féminin </label>
        </div>
        @if($errors->has('sexe'))
            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
        @endif
    </div>
    @if($errors->has('sexe'))
        <span class="help-block">{{ $errors->first('sexe') }}</span>
    @endif
</div>
<div class="col-sm-6 field">
    <div class="mic_wrapper input-group{{ $errors->has('cin') ? ' has-error has-feedback' : '' }}">
        {!! Form::label('cin', 'Cin', ['class' => 'input-group-addon']) !!}
        {!! Form::text('cin', null , ['id' => 'cin', 'placeholder' => 'Cin', 'class' => 'form-control']) !!}
        <i class="fa fa-microphone-slash"></i>
        @if($errors->has('cin'))
            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
        @endif
    </div>
    @if($errors->has('cin'))
        <span class="help-block">{{ $errors->first('cin') }}</span>
    @endif
</div>
<div class="col-sm-6 field">
    <div class="mic_wrapper input-group{{ $errors->has('tel_mobile') ? ' has-error has-feedback' : '' }}">
        {!! Form::label('tel_mobile', 'Tel mobile', ['class' => 'input-group-addon']) !!}
        {!! Form::text('tel_mobile', null , ['id' => 'tel_mobile', 'placeholder' => 'Téléphone mobile', 'class' => 'form-control']) !!}
        <i class="fa fa-microphone-slash"></i>
        @if($errors->has('tel_mobile'))
            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
        @endif
    </div>
    @if($errors->has('tel_mobile'))
        <span class="help-block">{{ $errors->first('tel_mobile') }}</span>
    @endif
</div>
<div class="col-sm-6 field">
    <div class="mic_wrapper input-group{{ $errors->has('tel_fixe') ? ' has-error has-feedback' : '' }}">
        {!! Form::label('tel_fixe', 'Tel fixe', ['class' => 'input-group-addon']) !!}
        {!! Form::text('tel_fixe', null , ['id' => 'tel_fixe', 'placeholder' => 'Téléphone fixe', 'class' => 'form-control']) !!}
        <i class="fa fa-microphone-slash"></i>
        @if($errors->has('tel_fixe'))
            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
        @endif
    </div>
    @if($errors->has('tel_fixe'))
        <span class="help-block">{{ $errors->first('tel_fixe') }}</span>
    @endif
</div>
<div class="col-sm-6 field">
    <div class="mic_wrapper input-group{{ $errors->has('adresse') ? ' has-error has-feedback' : '' }}">
        {!! Form::label('adresse', 'Adresse', ['class' => 'input-group-addon']) !!}
        {!! Form::text('adresse', null , ['id' => 'adresse', 'placeholder' => 'Adresse', 'class' => 'form-control']) !!}
        <i class="fa fa-microphone-slash"></i>
        @if($errors->has('adresse'))
            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
        @endif
    </div>
    @if($errors->has('adresse'))
        <span class="help-block">{{ $errors->first('adresse') }}</span>
    @endif
</div>
<div class="col-sm-6 field">
    <div class="mic_wrapper input-group{{ $errors->has('role') ? ' has-error has-feedback' : '' }}">
        {!! Form::label('role', 'Role', ['class' => 'input-group-addon']) !!}
        {!! Form::select('role', App\Role::formSelectArray() , null, ['class'=>'form-control']) !!}
        <i class="fa fa-microphone-slash"></i>
        @if($errors->has('role'))
            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
        @endif
    </div>
    @if($errors->has('role'))
        <span class="help-block">{{ $errors->first('role') }}</span>
    @endif
</div>
<div class="clear"></div>
<div class="alert alert-danger">
    <h7 style="font-weight: bold;">Information de connexion :</h7>
    <div style="margin-top: 10px;" class="col-sm-12 col-xs-12">
        <div class="input-group{{ $errors->has('email') ? ' has-error has-feedback' : '' }}">
            {!! Form::label('email', 'Email', ['class' => 'input-group-addon']) !!}
            {!! Form::text('email', null , ['id' => 'email', 'placeholder' => 'Email', 'class' => 'form-control']) !!}
            @if($errors->has('email'))
                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
            @endif
        </div>
        @if($errors->has('email'))
            <span class="help-block">{{ $errors->first('email') }}</span>
        @endif
    </div>
    <div style="margin-top: 10px;" class="col-sm-12 col-xs-12">
        <div class="input-group{{ $errors->has('password') ? ' has-error has-feedback' : '' }}">
            {!! Form::label('password', 'Mdp', ['class' => 'input-group-addon']) !!}
            {!! Form::password('password' , ['id' => 'password', 'placeholder' => 'Mot de passe', 'class' => 'form-control']) !!}
            @if($errors->has('password'))
                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
            @endif
        </div>
        @if($errors->has('password'))
            <span class="help-block">{{ $errors->first('password') }}</span>
        @endif
    </div>
    <div style="margin-top: 10px;" class="col-sm-12 col-xs-12">
        <div class="input-group{{ $errors->has('password_confirmation') ? ' has-error has-feedback' : '' }}">
            {!! Form::label('password_confirmation', 'Confirmer Mdp', ['class' => 'input-group-addon']) !!}
            {!! Form::password('password_confirmation' , ['id' => 'Confirmer le mot de passe', 'placeholder' => 'Password_confirmation', 'class' => 'form-control']) !!}
            @if($errors->has('password_confirmation'))
                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
            @endif
        </div>
        @if($errors->has('password_confirmation'))
            <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
        @endif
    </div>
    <div class="clear"></div>
</div>