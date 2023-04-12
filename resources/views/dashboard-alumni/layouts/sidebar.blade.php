<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        @if(auth()->user()->is_admin==1)
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.identitas') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Pengisian Data</span>
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
            <a class="nav-link" href="{{ route('dashboard.kusioner') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Pengisian Kusioner</span>
            </a>
        </li>
        @endif
    </ul>
</nav>
