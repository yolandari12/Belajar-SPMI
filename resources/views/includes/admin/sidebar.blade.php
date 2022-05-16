 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">SPMI</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard_admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Users</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('data-user') }}">List Data</a>
            </div>
        </div>
    </li>





    <li class="nav-item active">
        <a class="nav-link" href="{{ route('list-data.lembaga-mitra') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Lembaga-Mitra</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('data-kerjasama-pendidikan') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Kerjasama Pendidikan</span></a>
    </li>
</ul>
<!-- End of Sidebar -->
