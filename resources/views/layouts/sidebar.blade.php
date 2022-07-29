<style>
    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active,
    .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
        background-color: #019d13;
        color: #fff;
    }
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ url('/home') }}" class="brand-link">

        <span class="brand-text font-weight-light">Program Studi</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>
</aside>
