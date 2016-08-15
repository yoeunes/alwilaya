@extends('website.templates.default')

@section('title')
    Alwilaya | Accueil
@endsection

@section('content')
    @include('website.templates.layouts.header')
    <div id="page-content">
        <section class="box-content box-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="box-item">
                            <a href="#">{!! Html::image('assets/website/images/puce-soumettre.png') !!}</a>
                            <h3>SOUMETTRE <span class="br"></span> UNE RÉCLAMATION</h3>
                            <a class="btn btn-sm" href="#">Commencer la démarche »</a>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="box-item">
                            <a href="#">{!! Html::image('assets/website/images/puce-suivre.png') !!}</a>
                            <h3>SUIVRE <span class="br"></span> MA RÉCLAMATION</h3>
                            <a class="btn btn-sm" href="#">Accéder »</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
