<div class="main-container" id="main-container">
    <script type="text/javascript">
        try {ace.settings.check('main-container', 'fixed')} catch (e) {}
    </script>
    @include('templates.layouts.sidebar')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs" id="breadcrumbs">
                <script type="text/javascript">
                    try {ace.settings.check('breadcrumbs', 'fixed')} catch (e) {}
                </script>

                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="{{ url('/') }}">Accueil</a>
                    </li>
                    @yield('breadcrumb')
                </ul>
                <div class="nav-search" id="nav-search">
                    <form class="form-search">
                        <span class="input-icon">
                            <input type="text" placeholder="Rechercher ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                            <i class="ace-icon fa fa-search nav-search-icon"></i>
                        </span>
                    </form>
                </div>
            </div>
            <div class="page-content">
                <div class="row">
                    <div class="col-xs-12">
                        @yield('page_content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('templates.layouts.footer')
    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div>