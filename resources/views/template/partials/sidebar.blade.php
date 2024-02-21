<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">AdminKit</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('spp.sppc.index') }}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Spp</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('kelass.index') }}">
                    <i class="align-middle" data-feather="clipboard"></i> <span class="align-middle">Kelas</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('user.index') }}">
                    <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">User</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('auth.logout') }}">
                    <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Log Out</span>
                </a>
            </li>
        </div>
</nav>
