<div class="sidebar sidebar-style-2" data-background-color="dark">
    <div class="sidebar-logo">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="dark">
        <a href="{{ url('/') }}" class="logo">
            <img
            src="{{ asset('assets/img/kaiadmin/logo1.png') }}"
            alt="navbar brand"
            class="navbar-brand"
            style="max-height: 50px; width: auto;"
        />
        </a>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar">
            <i class="gg-menu-right"></i>
          </button>
          <button class="btn btn-toggle sidenav-toggler">
            <i class="gg-menu-left"></i>
          </button>
        </div>
      </div>
      <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
      <div class="sidebar-content">
        <ul class="nav nav-secondary">
          <li class="nav-item">
            <a href="{{ url('/') }}">
            <i class="fas fa-home"></i>
            Accueil</span>
            </a>
          </li>
          <li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Menu Principal</h4>
          </li>
            @if (auth()->user()->hasROle('admin'))
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#map">
                    <i class="fab fa-avianex"></i>
                    <p>Agence de voyages</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse" id="map">
                    <ul class="nav nav-collapse">
                    <li>
                        <a href="{{ url('compagnie') }}">
                            <i class="fas fa-luggage-cart"></i>
                        Liste des AVT</span>
                        </a>
                    </li>

                    </ul>
                </div>
              </li>
            @elseif (auth()->user()->hasRole('obstour'))
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#map">
                    <i class="fab fa-avianex"></i>
                    <p>Agence de voyages</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse" id="map">
                    <ul class="nav nav-collapse">
                      <li>
                          <a href="{{ url('compagnie') }}">
                              <i class="fas fa-luggage-cart"></i>
                          Liste des AVT</span>
                          </a>
                      </li>
                      <li>
                          <a href="{{ url('formulaire/trimesters') }}">
                              <i class="fas fa-toolbox"></i>
                          Création mensuel</span>
                          </a>
                      </li>
                    </ul>
                </div>
              </li>
            @endif
            @if (auth()->user()->hasRole('compagnie'))
                <li class="nav-item">
                  <a data-bs-toggle="collapse" href="#demande">
                      <i class="fas fa-plus"></i>
                  <p>Demandes touristique</p>
                  <span class="caret"></span>
                  </a>
                  <div class="collapse" id="demande">
                  <ul class="nav nav-collapse">
                      <li>
                          <a href="{{ url('mensuel/create') }}">
                              <i class="fas fa-plane-departure"></i>
                          Canevas AVT</span>
                          </a>
                      </li>
                      <li>
                          <a href="{{ url('formulairebarometre/trimesters') }}">
                              <i class="fas fa-toolbox"></i>
                          Baromètre AVT</span>
                          </a>
                      </li>
                      
                  </ul>
                  </div>
                </li>
              @elseif (auth()->user()->hasRole('admin'))
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#demande">
                        <i class="fas fa-plus"></i>
                    <p>Demandes touristique</p>
                    <span class="caret"></span>
                    </a>
                    <div class="collapse" id="demande">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="{{ url('mensuel/create') }}">
                                <i class="fas fa-plane-departure"></i>
                            Canevas AVT</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('formulairebarometre/trimesters') }}">
                                <i class="fas fa-toolbox"></i>
                            Baromètre AVT</span>
                            </a>
                        </li>
                        <li>
                          <a href="{{ url('formulaire/trimesters') }}">
                              <i class="fas fa-toolbox"></i>
                          Création mensuel</span>
                          </a>
                      </li>
                    </ul>
                    </div>
                </li>
            @endif
          
            @if (auth()->user()->hasRole('admin'))
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#statistique">
                  <i class="fas fa-chart-pie"></i>
                    <p>Statistique</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse" id="statistique">
                    <ul class="nav nav-collapse">
                      <li>
                          <li>
                            <a href="{{ url('output/sinare') }}">
                                <i class="fas fa-chart-pie"></i>
                            Statistique</span>
                            </a>
                          </li>
                      </li>
                      <li>
                          <li>
                            <a href="{{ url('mensuelform/create') }}">
                                <i class="fas fa-chart-pie"></i>
                            Statistique Graphe</span>
                            </a>
                          </li>
                      </li>
                    </ul>
                </div>
              </li>
            @elseif (auth()->user()->hasRole('obstour'))
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#statistique">
                  <i class="fas fa-chart-pie"></i>
                    <p>Statistique</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse" id="statistique">
                    <ul class="nav nav-collapse">
                      <li>
                          <li>
                            <a href="{{ url('output/sinare') }}">
                                <i class="fas fa-chart-pie"></i>
                            Statistique</span>
                            </a>
                          </li>
                      </li>
                      <li>
                          <li>
                            <a href="{{ url('mensuelform/create') }}">
                                <i class="fas fa-chart-pie"></i>
                            Statistique Graphe</span>
                            </a>
                          </li>
                      </li>
                    </ul>
                </div>
              </li>
            @endif
            @if (auth()->user()->hasRole('obstour'))
                <li class="nav-item">
                  <a data-bs-toggle="collapse" href="#output">
                      <i class="fas fa-paste"></i>
                    <p>Out put</p>
                    <span class="caret"></span>
                  </a>
                  <div class="collapse" id="output">
                      <ul class="nav nav-collapse">
                          
                          <li>
                              <a href="{{ url('output/barometre') }}">
                                  <i class="fas fa-vials"></i>
                              Barometre</span>
                              </a>
                          </li>
                          <li>
                              <a href="{{ url('output/vactivite') }}">
                                  <i class="fas fa-signal"></i>
                              Volume activite</span>
                              </a>
                          </li>
                          <li>
                              <a href="{{ url('output/cacircuits') }}">
                                  <i class="fas fa-money-bill-wave"></i>
                              Chiffre circuit</span>
                              </a>
                          </li>
                          <li>
                              <a href="{{ url('output/zone') }}">
                                  <i class="fab fa-google-wallet"></i>
                              Zone de provenance</span>
                              </a>
                          </li>
                          <li>
                              <a href="{{ url('output/nbbilletdests') }}">
                                  <i class="fas fa-money-check"></i>
                              Billet emis continent</span>
                              </a>
                          </li>
                          <li>
                              <a href="{{ url('output/cabilletteries') }}">
                                  <i class="fas fa-plane"></i>
                              Ca billeteries</span>
                              </a>
                          </li>
                          <li>
                              <a href="{{ url('output/billetsaerienne') }}">
                                  <i class="fab fa-cc-visa"></i>
                              Billet compagnies aerienne</span>
                              </a>
                          </li>
                          <li>
                              <a href="{{ url('output/activite') }}">
                                  <i class="fab fa-readme"></i>
                                Activités connexe</span>
                              </a>
                          </li>
                          <li>
                              <a href="{{ url('output/emploi') }}">
                                  <i class="fas fa-user-lock"></i>
                              Emploies</span>
                              </a>
                          </li>
                        </ul>
                  </div>
                </li>
              @elseif (auth()->user()->hasRole('admin'))
                <li class="nav-item">
                  <a data-bs-toggle="collapse" href="#output">
                      <i class="fas fa-paste"></i>
                    <p>Out put</p>
                    <span class="caret"></span>
                  </a>
                  <div class="collapse" id="output">
                      <ul class="nav nav-collapse">
                          
                          <li>
                              <a href="{{ url('output/barometre') }}">
                                  <i class="fas fa-vials"></i>
                              Barometre</span>
                              </a>
                          </li>
                          <li>
                              <a href="{{ url('output/vactivite') }}">
                                  <i class="fas fa-signal"></i>
                              Volume activite</span>
                              </a>
                          </li>
                          <li>
                              <a href="{{ url('output/cacircuits') }}">
                                  <i class="fas fa-money-bill-wave"></i>
                              Chiffre circuit</span>
                              </a>
                          </li>
                          <li>
                              <a href="{{ url('output/zone') }}">
                                  <i class="fab fa-google-wallet"></i>
                              Zone de provenance</span>
                              </a>
                          </li>
                          <li>
                              <a href="{{ url('output/nbbilletdests') }}">
                                  <i class="fas fa-money-check"></i>
                              Billet emis continent</span>
                              </a>
                          </li>
                          <li>
                              <a href="{{ url('output/cabilletteries') }}">
                                  <i class="fas fa-plane"></i>
                              Ca billeteries</span>
                              </a>
                          </li>
                          <li>
                              <a href="{{ url('output/billetsaerienne') }}">
                                  <i class="fab fa-cc-visa"></i>
                              Billet compagnies aerienne</span>
                              </a>
                          </li>
                          <li>
                              <a href="{{ url('output/activite') }}">
                                  <i class="fab fa-readme"></i>
                                Activités connexe</span>
                              </a>
                          </li>
                          <li>
                              <a href="{{ url('output/emploi') }}">
                                  <i class="fas fa-user-lock"></i>
                              Emploies</span>
                              </a>
                          </li>
                        </ul>
                  </div>
                </li>
            @endif
            @if (auth()->user()->hasRole('admin'))
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#sondage">
                    <i class="fas fa-file-signature"></i>
                  <p>Sondage</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="sondage">
                  <ul class="nav nav-collapse">
                    <li>

                      <a href="{{ url('barometres') }}">
                        <i class="fas fa-outdent"></i>
                        Baromètre AVT</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            @endif
            
            @if (auth()->user()->hasRole('obstour'))
                <li class="nav-item">
                  <a data-bs-toggle="collapse" href="#formulaire">
                      <i class="fab fa-readme"></i>
                    <p>Formulaire</p>
                    <span class="caret"></span>
                  </a>
                  <div class="collapse" id="formulaire">
                    <ul class="nav nav-collapse">
                      {{-- <li>
                          <a href="{{ url('output/user-record') }}">
                              <i class="fas fa-paste"></i>
                            resul canev AVT</span>
                          </a>
                        </li> --}}
                        <li>
                          <a href="{{ url('output/formulaire') }}">
                              <i class="fas fa-sort-amount-up"></i>
                            canevas AVT</span>
                          </a>
                        </li>
                    </ul>
                  </div>
                </li>
              @elseif (auth()->user()->hasRole('admin'))
                <li class="nav-item">
                  <a data-bs-toggle="collapse" href="#formulaire">
                      <i class="fab fa-readme"></i>
                    <p>Formulaire</p>
                    <span class="caret"></span>
                  </a>
                  <div class="collapse" id="formulaire">
                    <ul class="nav nav-collapse">
                      {{-- <li>
                          <a href="{{ url('output/user-record') }}">
                              <i class="fas fa-paste"></i>
                            resul canev AVT</span>
                          </a>
                        </li> --}}
                        <li>
                          <a href="{{ url('output/formulaire') }}">
                              <i class="fas fa-sort-amount-up"></i>
                            canevas AVT</span>
                          </a>
                        </li>
                    </ul>
                  </div>
                </li>
            @endif
            @if (auth()->user()->hasRole('admin'))
              <li class="nav-item">
                  <a data-bs-toggle="collapse" href="#charts">
                      <i class="fas fa-user-tie"></i>
                  <p>Administration</p>
                  <span class="caret"></span>
                  </a>
                  <div class="collapse" id="charts">
                  <ul class="nav nav-collapse">
                      <li class="nav-item">
                          <a data-bs-toggle="collapse" href="#users">
                              <i class="fas fa-users"></i>
                              <p>Utilisateurs</p>
                              <span class="caret"></span>
                          </a>
                          <div class="collapse" id="users">
                              <ul class="nav nav-collapse">
                              <li>
                                  <a href="{{ url('/users') }}">
                                  Liste des Utilisateur</span>
                                  </a>
                              </li>
                              <li>
                                  <a href="{{ url('/users/create') }}">
                                  Cree un Utilisateur</span>
                                  </a>
                              </li>
                              </ul>
                          </div>
                      </li>
                      <li class="nav-item">
                          <a data-bs-toggle="collapse" href="#role">
                              <i class="fas fa-user-shield"></i>
                              <p>Roles</p>
                              <span class="caret"></span>
                          </a>
                          <div class="collapse" id="role">
                              <ul class="nav nav-collapse">
                              <li>
                                  <a href="{{ url('/roles') }}">
                                  <span>List des Roles</span>
                                  </a>
                              </li>
                              <li>
                                  <a href="{{ url('/roles/create') }}">
                                  Cree un Roles</span>
                                  </a>
                              </li>
                              </ul>
                          </div>
                      </li>
                      <li class="nav-item">
                          <a data-bs-toggle="collapse" href="#permission">
                              <i class="fab fa-audible"></i>
                              <p>Permission</p>
                              <span class="caret"></span>
                          </a>
                          <div class="collapse" id="permission">
                              <ul class="nav nav-collapse">
                              <li>
                                  <a href="{{ url('/permissions') }}">
                                  <span>List des Permissions</span>
                                  </a>
                              </li>
                              <li>

                                  <a href="{{ url('/permissions/create') }}">
                                      <span>Cree une Permitions</span>
                                  </a>
                              </li>
                              </ul>
                          </div>
                      </li>
                  </ul>
                  </div>
              </li>
            @endif
        </ul>
      </div>
    </div>
  </div>
