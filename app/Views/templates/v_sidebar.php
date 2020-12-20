<!-- Sidebar -->
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
    <li class="nav-item">
        <a class="nav-link" href="/pages/home">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="/pages/profile">
            <i class="fas fa-fw fa-id-card"></i>
            <span>Profile</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <?php if (session()->get('level') == 1) : ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="/admin">
                <i class="fas fa-fw fa-user-cog"></i>
                <span>Admin</span>
            </a>
        </li>

    <?php elseif (session()->get('level') == 2) :  ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="/user">
                <i class="fas fa-fw fa-user-check"></i>
                <span>User</span>
            </a>
        </li>
    <?php elseif (session()->get('level') == 3) :  ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="/member">
                <i class="fas fa-fw fa-users"></i>
                <span>Member</span>
            </a>
        </li>
    <?php endif ?>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->