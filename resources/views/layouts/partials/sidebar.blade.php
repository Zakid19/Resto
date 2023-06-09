<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <!-- Sidenav Menu Heading (Account)-->
                <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                <div class="sidenav-menu-heading d-sm-none">Account</div>
                <!-- Sidenav Link (Alerts)-->
                <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                <a class="nav-link d-sm-none" href="#!">
                    <div class="nav-link-icon"><i data-feather="bell"></i></div>
                    Alerts
                    <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
                </a>
                <!-- Sidenav Link (Messages)-->
                <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                <a class="nav-link d-sm-none" href="">
                    <div class="nav-link-icon"><i data-feather="mail"></i></div>
                    Messages
                    <span class="badge bg-success-soft text-success ms-auto">2 New!</span>
                </a>
                <!-- Sidenav Menu Heading (Core)-->
                <div class="sidenav-menu-heading">Core</div>
                <!-- Sidenav Accordion (Dashboard)-->
                <a class="nav-link collapsed" href="{{ route('admin.dashboard') }}">
                    <div class="nav-link-icon"><i data-feather="activity"></i></div>
                    Dashboards
                </a>
                <!-- Sidenav Heading (Custom)-->
                <div class="sidenav-menu-heading">Custom</div>
                <!-- Sidenav Accordion (Applications)-->
                <a class="nav-link collapsed" href="{{ route('admin.category.index') }}" >
                    <div class="nav-link-icon"><i data-feather="globe"></i></div>
                    Category
                </a>
                <a class="nav-link collapsed" href="{{ route('admin.menu.index') }}" >
                    <div class="nav-link-icon"><i data-feather="globe"></i></div>
                    Menu
                </a>
                <a class="nav-link collapsed" href="{{ route('admin.table.index') }}" >
                    <div class="nav-link-icon"><i data-feather="globe"></i></div>
                    Table
                </a>
                <a class="nav-link collapsed" href="{{ route('admin.reservation.index') }}" >
                    <div class="nav-link-icon"><i data-feather="globe"></i></div>
                    Reservation
                </a>
            </div>
        </div>
        <!-- Sidenav Footer-->
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logged in as:</div>
                <div class="sidenav-footer-title">{{ Auth::user()->name }}</div>
            </div>
        </div>
    </nav>
</div>
