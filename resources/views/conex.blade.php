@extends('templateConex')
@section('contenu')


    @if ($errors->count() > 0)
        <div class="alert alert-danger">
            <strong>whoops  vos avez les erreurs suivants !!.</strong>
            <ul>
                @foreach($errors ->all() as $error)
                    <li> {{$error}} </li>
                @endforeach
            </ul>
        </div>
@endif
        <div class="col-sm-offset-4 col-sm-3">
        <div  class="panel panel-default " >
        <div  class="panel-heading  text-center"><strong>se connecter</strong></div>
        <div class="panel-body">
            <div class= "imgcontainer ">
                <img src=" img_avatar2.png"  class="img-circle"  width="260" height="236">
            </div>
        <form method="post" action="/connexion">
            <input type="hidden" name="_token" value="{{  csrf_token() }}">
            <div class="form-group ">
                <label for="email">Adresse électronique:</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="email">

          </div>
          <div class="form-group">
              <label for="password">Mot de passe:</label>
              <input type="password" name="password" placeholder="mot de passe"  class="form-control" >

           </div>
<div class="checkbox">
  <label><input type="checkbox" name="rememberme">garder ma session active</label>
</div>

<button type="submit" class="form-control  btn btn-success" >Connexion</button>
<div class="btn-link  text-center  well well-sm "><a href="#"> Mot de passe oublié ?</a></div>

</form>
</div>
</div>
</div>
@endsection
