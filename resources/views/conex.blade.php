@extends('templateConex')
@section('contenu')

    <div class="col-sm-offset-4 col-sm-3">


        <div  class="panel panel-default   " >
        <div  class="panel-heading  text-center"><strong>se connecter</strong></div>
        <div class="panel-body">
            <div class= "imgcontainer ">
                <img src=" img_avatar2.png"  class="img-circle"  width="260" height="236">
            </div>
        <form>
            <div class="form-group ">
                <label >Adresse électronique:</label>
              <input type="email" class="form-control" id="email" placeholder="email">
            </div>
            <div class="form-group">
                <label >Mot de passe:</label>
                <input type="password"  placeholder="mot de passe" class="form-control" >
            </div>
            <div class="checkbox">
                <label><input type="checkbox">garder ma session active</label>
            </div>

            <button type="submit" class="form-control  btn btn-success" >Connexion</button>
             <div class="btn-link  text-center  well well-sm "><a href="#"> Mot de passe oublié ?</a></div>

            </form>
    </div>
    </div>
    </div>
    @endsection