@extends('templates.default')

@section('title')
    Liste des utilisateurs
@endsection

@section('page_specific_plugin_styles')
    {!! Html::style('assets/plugins/datatables/media/css/dataTables.bootstrap.min.css') !!}
@endsection

@section('inline_styles')

@endsection

@section('basic_scripts')
@endsection

@section('page_specific_plugin_scripts')
    {!! Html::script('assets/plugins/datatables/media/js/jquery.dataTables.min.js') !!}
    {!! Html::script('assets/plugins/datatables/media/js/dataTables.bootstrap.min.js') !!}
@endsection

@section('inline_scripts')
    <script>
        $(window).ready(function () {
            var table = $('#users-table').DataTable({
                language  : {url: "{{ url('assets/plugins/datatables/media/js/French.json') }}"},
                autoWidth : false,
                processing: true,
                serverSide: true,
                ajax      : '{!! url('/api/users') !!}',
                columns   : [
                    {data: 'nom'},
                    {data: 'prenom'},
                    {data: 'tel_mobile'},
                    {data: 'tel_fixe'},
                    {data: 'email'},
                    {
                        data          : 'action',
                        orderable     : false,
                        searchable    : false,
                        className     : "center",
                        defaultContent: '<a href="#" class="btn btn-sm btn-medicament"><i class="fa fa-edit"></i> Modifier</a> <a href="#" class="btn btn-sm btn-medicament" id="delete_medicament"><i class="fa fa-remove"></i> Supprimer</a> <a href="#" class="btn btn-sm btn-medicament" id="desactiver_medicament"><i class="fa fa-eye-slash"></i> Desactiver</a>'
                    }
                ],
                createdRow: function (row, data, index) {
                    $('td', row).eq(5).find('a').attr('href', '{!! url('user') !!}/' + data.id);
                    $('td', row).eq(5).find('a').attr('user_id', data.id);
                }
            });
            $('body').on('click', '#users-table a#delete_medicament', function (event) {
                event.preventDefault();
                var url = $(this).attr('href');
                swal({
                    title              : 'Êtes-vous sûr ?',
                    text               : 'Êtes-vous sûr de vouloir supprimer cet utilisateur ?',
                    confirmButtonText  : 'Supprimer',
                    confirmButtonColor : "#D4202B",
                    customClass        : 'medicament-alert',
                    showCancelButton   : true,
                    closeOnConfirm     : false,
                    showLoaderOnConfirm: true,
                    allowOutsideClick  : false
                }).then(function (isConfirm) {
                    if (isConfirm) {
                        swal.enableLoading();
                        $.ajax({
                            url     : url,
                            type    : 'post',
                            data    : {_method: 'delete'},
                            dataType: 'json',
                            success : function (responseText, statusText, xhr, $form) {
                                var oTable = $('#users-table').DataTable();
                                oTable.ajax.reload();
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
                                toastr.success('L\'utilisateur "' + xhr.responseJSON.message + '"a été supprimé avec sucès.');
                                swal.closeModal();
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
                    }
                });
            });
            $('body').on('click', '#users-table a#desactiver_medicament', function (event) {
                event.preventDefault();
                var url     = '/api/desactivate',
                    user_id = $(this).attr('user_id');
                swal({
                    title              : 'Êtes-vous sûr ?',
                    text               : 'Êtes-vous sûr de vouloir desactiver le compte de cet utilisateur ?',
                    confirmButtonText  : 'Desactiver',
                    confirmButtonColor : "#D4202B",
                    customClass        : 'medicament-alert',
                    showCancelButton   : true,
                    closeOnConfirm     : false,
                    showLoaderOnConfirm: true,
                    allowOutsideClick  : false
                }).then(function (isConfirm) {
                    if (isConfirm) {
                        swal.enableLoading();
                        $.ajax({
                            url     : url,
                            type    : 'post',
                            data    : {user_id: user_id},
                            dataType: 'json',
                            success : function (responseText, statusText, xhr, $form) {
                                var oTable = $('#users-table').DataTable();
                                oTable.ajax.reload();
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
                                toastr.success('Le compte de l\'utilisateur "' + xhr.responseJSON.message + '"a été desactivé avec sucès.');
                                swal.closeModal();
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
                    }
                });
            });
        });
    </script>
@endsection

@section('breadcrumb')
    <li class="#">Utilisateur</li>
    <li class="active">Liste des utilisateurs</li>
@endsection

@section('page_content')
    <div class="space"></div>
    <div class="space"></div>
    <div class="space"></div>
    <table class="table table-bordered table-condensed" id="users-table">
        <thead>
        <tr>
            <th>nom</th>
            <th>prenom</th>
            <th>Tél mobile</th>
            <th>Tél fixe</th>
            <th>email</th>
            <th>Action</th>
        </tr>
        </thead>
    </table>
@endsection