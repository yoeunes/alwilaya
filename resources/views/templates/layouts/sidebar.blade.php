<div id="sidebar" class="sidebar responsive">
    <script type="text/javascript">
        try {ace.settings.check('sidebar', 'fixed')} catch (e) {}
    </script>
    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <div id="flipcountdown"></div>
        </div>
        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <div id="flipcountdownmini"></div>
        </div>
    </div>
    <ul class="nav nav-list">
        @ability('medecin','')
        <li class="{{ starts_with(\Request::route()->getName(), 'espaceMedecin') ? 'active':'' }}">
            <a href="{{ route('espaceMedecin.index') }}">
                <i class="menu-icon fa fa-hourglass-end"></i>
                <span class="menu-text"> Espace Medecin </span>
            </a>
            <b class="arrow"></b>
        </li>
        @endability
        @ability('','read_rendezvouses')
        <li class="{{ starts_with(\Request::route()->getName(), 'agenda') ? 'active':'' }}">
            <a href="{{ route('agenda.index') }}">
                <i class="menu-icon fa fa-calendar"></i>
                <span class="menu-text"> Agenda </span>
            </a>
            <b class="arrow"></b>
        </li>
        @endability
        @ability('','create_patients,read_patients')
        <li class="{{ starts_with(\Request::route()->getName(), 'patient') ? 'active open':'' }}">
            <a href="" class="dropdown-toggle">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text"> Patients </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                @permission('create_patients')
                <li class="{{ (\Request::route()->getName() == 'patient.create' ) ? 'active':'' }}">
                    <a href="{{ route('patient.create') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouveau patient
                    </a>
                    <b class="arrow"></b>
                </li>
                @endpermission
                @permission('read_patients')
                <li class="{{ (\Request::route()->getName() == 'patient.index' ) ? 'active':'' }}">
                    <a href="{{ route('patient.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste des patients
                    </a>
                    <b class="arrow"></b>
                </li>
                @endpermission
            </ul>
        </li>
        @endability
        @ability('','create_medicaments,read_medicaments')
        <li class="{{ starts_with(\Request::route()->getName(), 'medicament') ? 'active open':'' }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-medkit"></i>
                <span class="menu-text"> Medicaments </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                @permission('create_medicaments')
                <li class="{{ (\Request::route()->getName() == 'medicament.create' ) ? 'active':'' }}">
                    <a href="{{ route('medicament.create') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouveau medicament
                    </a>
                    <b class="arrow"></b>
                </li>
                @endpermission
                @permission('read_medicaments')
                <li class="{{ (\Request::route()->getName() == 'medicament.index' ) ? 'active':'' }}">
                    <a href="{{ route('medicament.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste des medicaments
                    </a>
                    <b class="arrow"></b>
                </li>
                @endpermission
            </ul>
        </li>
        @endability
        @ability('','create_chambres,read_chambres')
        <li class="{{ starts_with(\Request::route()->getName(), 'chambre') ? 'active open':'' }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-bed"></i>
                <span class="menu-text"> Chambres </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                @permission('create_chambres')
                <li class="{{ (\Request::route()->getName() == 'chambre.create' ) ? 'active':'' }}">
                    <a href="{{ route('chambre.create') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouvelle chambre
                    </a>
                    <b class="arrow"></b>
                </li>
                @endpermission
                @permission('read_chambres')
                <li class="{{ (\Request::route()->getName() == 'chambre.index' ) ? 'active':'' }}">
                    <a href="{{ route('chambre.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste des chambres
                    </a>
                    <b class="arrow"></b>
                </li>
                @endpermission
            </ul>
        </li>
        @endability
        @ability('admin,medecin,receptionniste','create_facturations,read_facturations')
        <li class="{{ starts_with(\Request::route()->getName(), 'facture') ? 'active open':'' }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-file-text-o"></i>
                <span class="menu-text"> Facture </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="{{ (\Request::route()->getName() == 'facture.create_2' ) ? 'active':'' }}">
                    <a href="{{ route('facture.create_2') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouvelle facture
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ (\Request::route()->getName() == 'facture.index_2' ) ? 'active':'' }}">
                    <a href="{{ route('facture.index_2') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste des facture
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
        @endability
        @ability('admin', 'create_users,read_users')
        <li class="{{ starts_with(\Request::route()->getName(), 'user') ? 'active open':'' }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-users"></i>
                <span class="menu-text"> Utilisateurs </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="{{ (\Request::route()->getName() == 'user.create' ) ? 'active':'' }}">
                    <a href="{{ route('user.create') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nouvel utilisateur
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ (\Request::route()->getName() == 'user.index' ) ? 'active':'' }}">
                    <a href="{{ route('user.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste des utilisateurs
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ (\Request::route()->getName() == 'role.index' ) ? 'active':'' }}">
                    <a href="{{ route('role.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Liste des roles
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
        @endability

        @ability('','read_helpers')
        <li class="{{ starts_with(\Request::route()->getName(), 'diver') || (\Request::route()->getName() == 'hopital.index' ) || (\Request::route()->getName() == 'medecin.index' )? 'active open':'' }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-newspaper-o"></i>
                <span class="menu-text"> Divers </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="{{ (\Request::route()->getName() == 'medecin.index' ) ? 'active':'' }}">
                    <a href="{{ route('medecin.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Medecins Maroc
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ (\Request::route()->getName() == 'hopital.index' ) ? 'active':'' }}">
                    <a href="{{ route('hopital.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Cliniques/Hopitaux
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ (\Request::route()->getName() == 'divers.encyclopedie' ) ? 'active':'' }}">
                    <a href="{{ route('divers.encyclopedie') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Encyclopédie médicale
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ (\Request::route()->getName() == 'divers.sante24' ) ? 'active':'' }}">
                    <a href="{{ route('divers.sante24') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Sante 24
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ (\Request::route()->getName() == 'divers.caducee' ) ? 'active':'' }}">
                    <a href="{{ route('divers.caducee') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Caducee
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ (\Request::route()->getName() == 'divers.vulgarisMedical' ) ? 'active':'' }}">
                    <a href="{{ route('divers.vulgarisMedical') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Vulgaris Medical
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ (\Request::route()->getName() == 'divers.lemonde' ) ? 'active':'' }}">
                    <a href="{{ route('divers.lemonde') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Le monde
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ (\Request::route()->getName() == 'divers.journaldemontreal' ) ? 'active':'' }}">
                    <a href="{{ route('divers.journaldemontreal') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Journal de montreal
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ (\Request::route()->getName() == 'divers.hespress' ) ? 'active':'' }}">
                    <a href="{{ route('divers.hespress') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Hespress
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ (\Request::route()->getName() == 'divers.priere' ) ? 'active':'' }}">
                    <a href="{{ route('divers.priere', 84) }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Horaire de prière
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
        @endability

        @ability('','read_utilitaires')
        <li class="{{ str_contains(\Request::route()->getName(), 'helpers') ? 'active open':'' }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-calculator"></i>
                <span class="menu-text"> Utilitaires </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="{{ starts_with(\Request::route()->getName(), 'FormulesGenerales::' ) ? 'active':'' }}">
                    <a href="{{ route('FormulesGenerales::helpers.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Formules générales
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ starts_with(\Request::route()->getName(), 'Convertisseur::' ) ? 'active':'' }}">
                    <a href="{{ route('Convertisseur::helpers.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Convertisseurs
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ starts_with(\Request::route()->getName() , 'CalculatriceBiometrique::' ) ? 'active':'' }}">
                    <a href="{{ route('CalculatriceBiometrique::helpers.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Calculatrice biométrique
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ starts_with(\Request::route()->getName() , 'Tabagisme::' ) ? 'active':'' }}">
                    <a href="{{ route('Tabagisme::helpers.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Tabagisme
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ starts_with(\Request::route()->getName() , 'CalculsStatistiques::' ) ? 'active':'' }}">
                    <a href="{{ route('CalculsStatistiques::helpers.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Calculs statistiques
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ starts_with(\Request::route()->getName() ,'CompteursMondiaux::' ) ? 'active':'' }}">
                    <a href="{{ route('CompteursMondiaux::helpers.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Compteurs mondiaux
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ starts_with(\Request::route()->getName() ,'Cardiologie::' ) ? 'active':'' }}">
                    <a href="{{ route('Cardiologie::helpers.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Cardiologie
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
        @endability

        @ability('admin','')
        <li class="{{ starts_with(\Request::route()->getName(), 'support') ? 'active open':'' }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-comments"></i>
                <span class="menu-text"> Support </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="{{ (\Request::route()->getName() == 'support.technique' ) ? 'active':'' }}">
                    <a href="{{ route('support.technique') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Technique
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="{{ (\Request::route()->getName() == 'support.vente' ) ? 'active':'' }}">
                    <a href="{{ route('support.vente') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Vente
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
        @endability
    </ul>
    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
    <script type="text/javascript">
        try {ace.settings.check('sidebar', 'collapsed')} catch (e) {}
    </script>
</div>