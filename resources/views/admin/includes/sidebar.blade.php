<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <img src="https://www.mankindpharma.com/assets/img/logo.png" class="w-50" alt="">
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.contacts') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Contacts</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.blogs') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Blog</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.gallery') }}">
            <i class="fas fa-fw fa-image"></i>
            <span>Gallery</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.press') }}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Press Release</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.careers') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Careers</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.partnership') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Partnership</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>