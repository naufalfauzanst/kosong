<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Main Menu
    </div>

    <!-- Nav Item - Postingan -->
    <li class="nav-item {{ request()->is('admin/postingan') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/postingan">
    <i class="fas fa-fw fa-folder"></i>
            <span>Semua Postingan</span></a>
    </li>
    
    <!-- Nav Item - Arsip -->
    <li class="nav-item {{ request()->is('admin/arsip') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/arsip">
            <i class="fas fa-fw fa-table"></i>
            <span>Arsip</span></a>
    </li>

     <!-- Nav Item - Facebook -->
    <li class="nav-item {{ request()->is('admin/sepeda') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/sepeda">
            <span>Sepeda</span>
        </a>
    </li>

     <!-- Nav Item - Instagram -->
     <li class="nav-item {{ request()->is('admin/motor') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/motor">
            <span>Motor</span>
        </a>
    </li>        
    
     <!-- Nav Item - Twitter -->
     <li class="nav-item {{ request()->is('admin/Mobil') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/mobil">
            <span>Mobil</span>
        </a>
    </li>      
    
     <!-- Nav Item - LinkedIn -->
     <li class="nav-item {{ request()->is('admin/kapal') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/kapal">
            <span>Kapal</span>
        </a>
    </li>
    
     <!-- Nav Item - github -->
     <li class="nav-item {{ request()->is('admin/pesawat') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/pesawat">
            <span>Pesawat</span>
        </a>
    </li>            

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>