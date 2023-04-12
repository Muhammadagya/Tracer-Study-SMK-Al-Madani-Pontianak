<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        @if(auth()->user()->is_admin==1)
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.identitas') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Pengisian Datassss</span>
            </a>
        </li>
        @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.identitas') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Pengisian Data</span>
            </a>
        </li>


        <li class="nav-item">
            @if(auth()->user()->data_alumni->setelah_lulus == '1')
            <a class="nav-link" href="{{ route('dashboard.identitas.bekerja') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Pengisian Bekerja</span>
            </a>
            @endif
            @if(auth()->user()->data_alumni->setelah_lulus == '2')
            <a class="nav-link" href="{{ route('dashboard.identitas.kuliah') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Pengisian Kuliah</span>
            </a>
            @endif
            @if(auth()->user()->data_alumni->setelah_lulus == '3')
            <a class="nav-link" href="{{ route('dashboard.identitas.wirausaha') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Pengisian Wirausaha</span>
            </a>
            @endif
            @if(auth()->user()->data_alumni->setelah_lulus == '4')
            <a class="nav-link" href="{{ route('dashboard.identitas.belum') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Belum Kerja / Kuliah</span>
            </a>
            @endif
        </li>
        
        
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.kusioner') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Pengisian Kusioner</span>
            </a>
        </li>
        @endif
    </ul>
</nav>
