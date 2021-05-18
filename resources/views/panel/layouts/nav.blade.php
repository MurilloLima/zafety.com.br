<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i></a>
        </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notificatições</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 Novas mensagens
                    <span class="float-right text-muted text-sm">3 min</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">Visualizar todas</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
                    class="fas fa-th-large"></i></a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 {{$class}}">
    <!-- Brand Logo -->
    <a href="{{ route('admin.index') }}" class="brand-link">
        <img src="{{ asset('icon.png') }}" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Zafety</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-child-indent" data-widget="treeview"
                role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('panel.index') }}"
                        class="nav-link {{ $activePage == 'panel.index' ? ' active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Comunidade
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.reuniao.index') }}"
                        class="nav-link {{ $activePage == 'user.reuniao.index' ? ' active' : '' }}">
                        <i class="nav-icon far fa-address-book"></i>
                        <p>
                            ATA Reunião
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.minuto-hse.index') }}"
                        class="nav-link {{ $activePage == 'user.minuto-hse.index' ? ' active' : '' }}">
                        <i class="nav-icon far fa-clock"></i>
                        <p>
                            Minuto HSE
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.epi.index') }}"
                        class="nav-link {{ $activePage == 'user.epi.index' ? ' active' : '' }}">
                        <i class="nav-icon fas fa-hard-hat"></i>
                        <p>
                            Equipamento de Proteção
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.ar-pt.index') }}"
                        class="nav-link {{ $activePage == 'user.ar-pt.index' ? ' active' : '' }}">
                        <i class="nav-icon fas fa-user-clock"></i>
                        <p>
                            Permissão de trabalho
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.inspecao.index') }}"
                        class="nav-link {{ $activePage == 'user.inspecao.index' ? ' active' : '' }}">
                        <i class="nav-icon far fa-address-card"></i>
                        <p>
                            Inspeção
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.nc.index') }}"
                        class="nav-link {{ $activePage == 'user.nc.index' ? ' active' : '' }}">
                        <i class="nav-icon fas fa-not-equal"></i>
                        <p>
                            Não conformidade
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.ocorrencias.index') }}"
                        class="nav-link {{ $activePage == 'user.ocorrencia.index' ? ' active' : '' }}">
                        <i class="nav-icon fas fa-headset"></i>
                        <p>
                            Ocorrências
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.emergencias.index') }}"
                        class="nav-link {{ $activePage == 'user.emergencia.index' ? ' active' : '' }}">
                        <i class="nav-icon fas fa-ambulance"></i>
                        <p>
                            Emergências
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="nav-icon fa fa-power-off"></i>
                        <p>
                            Sair
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>