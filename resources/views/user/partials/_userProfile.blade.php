<div class="row">
    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="text-center">
            <h6>Upload a different photo...</h6>
            <div id="crop-avatar">
                <div class="avatar-view" title="Change the avatar" style="box-shadow: none;">
                    <span class="profile-picture" style="border: none; box-shadow: none">
                        {{ Html::image($user->photo(), 'avatar', array('class' => 'avatar img-circle img-thumbnail editable img-responsive', 'id' => 'avatar')) }}
                    </span>
                    <input type="file" name="photo" id="profile_picture" class="text-center center-block well well-sm">
                </div>
                @include('user.partials._avatar-modal')
            </div>
        </div>
    </div>
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
        <h3>Informations personnelles</h3>
        {!! Form::model($user, array ( 'route' => array ( 'user.update', $user->id ) ,'method' => 'put', 'class' => 'form-horizontal', 'role' => 'form') ) !!}

        <div class="form-group{{ $errors->has('prenom') ? ' has-error has-feedback' : '' }}">
            <label class="col-lg-3 control-label">prenom:</label>
            <div class="col-lg-8">
                <input class="form-control" name="prenom" value="{{ Request::old('prenom') ? Request::old('prenom') : $user->prenom }}" type="text">
                @if($errors->has('prenom'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                @endif
                @if($errors->has('prenom'))
                    <span class="help-block">{{ $errors->first('prenom') }}</span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('nom') ? ' has-error has-feedback' : '' }}">
            <label class="col-lg-3 control-label">nom:</label>
            <div class="col-lg-8">
                <input class="form-control" name="nom" value="{{ Request::old('nom') ? Request::old('nom') :$user->nom }}" type="text">
                @if($errors->has('nom'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                @endif
                @if($errors->has('nom'))
                    <span class="help-block">{{ $errors->first('nom') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('adresse') ? ' has-error has-feedback' : '' }}">
            <label class="col-lg-3 control-label">adresse:</label>
            <div class="col-lg-8">
                <input class="form-control" name="adresse" value="{{ Request::old('adresse') ? Request::old('adresse') :$user->adresse }}" type="text">
                @if($errors->has('adresse'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                @endif
                @if($errors->has('adresse'))
                    <span class="help-block">{{ $errors->first('adresse') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('cin') ? ' has-error has-feedback' : '' }}">
            <label class="col-lg-3 control-label">CIN:</label>
            <div class="col-lg-8">
                <input class="form-control" name="cin" value="{{ Request::old('cin') ? Request::old('cin') :$user->cin }}" type="text">
                @if($errors->has('cin'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                @endif
                @if($errors->has('cin'))
                    <span class="help-block">{{ $errors->first('cin') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('sexe') ? ' has-error has-feedback' : '' }}">
            <label class="col-lg-3 control-label">Sexe:</label>
            <div class="col-lg-8">
                <select name="sexe" class="form-control">
                    <option value="male" {{(Request::old('sexe') ? Request::old('sexe') :$user->sexe) == 'male' ? 'selected':''}}>male</option>
                    <option value="female" {{(Request::old('sexe') ? Request::old('sexe') :$user->sexe) == 'female' ? 'selected':''}}>female</option>
                </select>
                @if($errors->has('sexe'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                @endif
                @if($errors->has('sexe'))
                    <span class="help-block">{{ $errors->first('sexe') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('tel_mobile') ? ' has-error has-feedback' : '' }}">
            <label class="col-lg-3 control-label">Tel mobile:</label>
            <div class="col-lg-8">
                <input class="form-control" name="tel_mobile" value="{{ Request::old('tel_mobile') ? Request::old('tel_mobile') :$user->tel_mobile }}" type="text">
                @if($errors->has('tel_mobile'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                @endif
                @if($errors->has('tel_mobile'))
                    <span class="help-block">{{ $errors->first('tel_mobile') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('tel_fixe') ? ' has-error has-feedback' : '' }}">
            <label class="col-lg-3 control-label">Tel fixe:</label>
            <div class="col-lg-8">
                <input class="form-control" name="tel_fixe" value="{{ Request::old('tel_fixe') ? Request::old('tel_fixe') :$user->tel_fixe }}" type="text">
                @if($errors->has('tel_fixe'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                @endif
                @if($errors->has('tel_fixe'))
                    <span class="help-block">{{ $errors->first('tel_fixe') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error has-feedback' : '' }}">
            <label class="col-md-3 control-label">Email:</label>
            <div class="col-md-8">
                <input class="form-control" name="email" value="{{ Request::old('email') ? Request::old('email') :$user->email }}" type="text">
                @if($errors->has('email'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                @endif
                @if($errors->has('email'))
                    <span class="help-block">{{ $errors->first('email') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('current_password') ? ' has-error has-feedback' : '' }}">
            <label class="col-md-3 control-label">Mot de passe actuel:</label>
            <div class="col-md-8">
                <input class="form-control" name="current_password" placeholder="Mot de passe actuel" type="password">
                @if($errors->has('current_password'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                @endif
                @if($errors->has('current_password'))
                    <span class="help-block">{{ $errors->first('current_password') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error has-feedback' : '' }}">
            <label class="col-md-3 control-label">Nouveau Mot de passe:</label>
            <div class="col-md-8">
                <input class="form-control" name="password" placeholder="Mot de passe" type="password">
                @if($errors->has('password'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                @endif
                @if($errors->has('password'))
                    <span class="help-block">{{ $errors->first('password') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Confirmer Mot de passe:</label>
            <div class="col-md-8">
                <input class="form-control" name="password_confirmation" placeholder="Confirmer Mot de passe" type="password">
                @if($errors->has('password_confirmation'))
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                @endif
                @if($errors->has('password_confirmation'))
                    <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
                <div class="col-sm-6">
                    <input class="btn btn-primary form-control" value="Sauvegarder les modifications" type="submit">
                </div>
                <div class="col-sm-6"><input class="btn btn-default form-control" value="Annuler" type="reset"></div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
