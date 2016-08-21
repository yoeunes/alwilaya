@extends('website.templates.default')

@section('title')
    Alwilaya | Contactez-nous
@endsection

@section('style')
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
    </style>
@endsection

@section('content')
    <div id="page-content">
        <div class="container">
            <div class="row">
                <div id="main-content" class="col-md-8 col-md-offset-2">
                    <article class="contact">
                        <div class="art-header">
                            <h2 class="center">Contact</h2>
                        </div>
                        <div class="art-content">
                            <div id="contact_form">
                                <form name="form1" id="ff" method="post" action="contact.php">
                                    <label>
                                        <span>Enter your name:</span>
                                        <input type="text" name="name" id="name" required>
                                    </label>
                                    <label>
                                        <span>Enter your email:</span>
                                        <input type="email" name="email" id="email" required>
                                    </label>
                                    <label>
                                        <span>Your message here:</span>
                                        <textarea name="message" id="message"></textarea>
                                    </label>
                                    <center>
                                        <input class="sendButton" type="submit" name="Submit" value="Submit">
                                    </center>
                                </form>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
