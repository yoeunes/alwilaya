<div id="user-profile" class="user-profile row">
    <div class="col-xs-12 col-sm-3 center">
        <span class="profile-picture">
            <div class="avatar-view" title="Change the avatar">
                {{ Html::image($user->photo(), 'avatar', array('class' => 'avatar img-circle img-thumbnail editable img-responsive', 'id' => 'avatar')) }}
            </div>
        </span>

        <div class="container">
            <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form class="avatar-form" action="crop.php" enctype="multipart/form-data" method="post">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title" id="avatar-modal-label">Image de profile</h4></div>
                            <div class="modal-body">
                                <div class="avatar-body">
                                    <div class="avatar-upload">
                                        <input type="hidden" class="avatar-src" name="avatar_src">
                                        <input type="hidden" class="avatar-data" name="avatar_data">
                                        <label for="avatarInput">Uploader l'image</label>
                                        <input type="file" class="avatar-input" id="avatarInput" name="avatar_file">
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="avatar-wrapper"></div>
                                        </div>
                                    </div>
                                    <div class="row avatar-btns">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block avatar-save form-control"> Enregistrer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-6"></div>
        <div class="hr hr16 dotted"></div>
        <div class="space-4"></div>
        <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
            <div class="inline position-relative">
                <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                    <i class="ace-icon fa fa-circle light-green"></i> &nbsp;
                    <span class="white">{{ $user->prenom . ' ' . $user->prenom  }}</span> </a></div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-9">
        <div class="space-12"></div>
        <div class="profile-user-info profile-user-info-striped">
            <div class="profile-info-row">
                <div class="profile-info-name"> Prenom</div>
                <div class="profile-info-value">
                    <span class="editable" id="prenom">{{$user->prenom}}</span></div>
            </div>
            <div class="profile-info-row">
                <div class="profile-info-name"> Nom</div>
                <div class="profile-info-value">
                    <span class="editable" id="nom">{{$user->nom}}</span></div>
            </div>
        </div>
        <div class="space-20"></div>
    </div>
</div>