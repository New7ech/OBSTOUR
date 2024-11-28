<nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
    <div class="container-fluid">
        <nav class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
            <!-- Navigation search form can be placed here -->
        </nav>
        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">

            <li class="nav-item topbar-icon dropdown hidden-caret">
                <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bell"></i>
                </a>
                <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                    <!-- Ajoutez ici la logique pour les notifications -->
                </ul>
            </li>

            <li class="nav-item topbar-user dropdown hidden-caret">
                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                    <div class="avatar-sm">
                        <img src="{{ Auth::user()->avatar ?? asset('assets/img/profile1.png') }}" alt="Image de Profil" class="avatar-img rounded-circle" />
                    </div>
                    <span class="profile-username">
                        <span class="fw-bold">{{ Auth::user()->name }}</span>
                    </span>
                </a>
                <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                        <li>
                            <div class="user-box d-flex align-items-center">
                                <div class="avatar-lg me-3">
                                    <img src="{{ Auth::user()->avatar ?: asset('assets/img/profile1.png') }}" alt="Image de Profil" class="avatar-img rounded" />
                                </div>
                                <div class="u-text">
                                    <h4>Profile</h4>
                                    <p class="text-muted">{{ Auth::user()->name }}</p>
                                    <a href="{{ route('users.show', Auth::user()->id) }}" class="btn btn-xs btn-secondary">Voir Profil</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('deconnexion') }}">Déconnexion</a>
                        </li>
                    </div>
                </ul>
            </li>
        </ul>
    </div>
</nav>
