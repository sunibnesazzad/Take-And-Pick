<!-- Sidebar Holder -->
<nav id="sidebar">
    <div class="sidebar-header">
        <h1>
            <a href="index.html">E Store</a>
        </h1>
        <span>E</span>
    </div>
    <div class="profile-bg"></div>
    <ul class="list-unstyled components">
        <li>
            <a href="index.html">
                <i class="fas fa-th-large"></i>
                Dashboard
            </a>
        </li>
        <li class="">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                <i class="fas fa-laptop"></i>
                Category
                <i class="fas fa-angle-down fa-pull-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="{!! route('category.index') !!}">All Categories</a>
                </li>
                <li>
                    <a href="{!! route('category.create') !!}">Add New Category</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false">
                <i class="far fa-file"></i>
                Items
                <i class="fas fa-angle-down fa-pull-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="pageSubmenu1">
                <li>
                    <a href="404.html">All items</a>
                </li>
                <li>
                    <a href="{!! route('item.create') !!}">Add new item</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="mailbox.html">
                <i class="far fa-envelope"></i>
                Mailbox
                <span class="badge badge-secondary float-md-right bg-danger">5 New</span>
            </a>
        </li>
        <li>
            <a href="widgets.html">
                <i class="far fa-window-restore"></i>
                Widgets
            </a>
        </li>
        <li>
            <a href="pricing.html">
                <i class="fas fa-table"></i>
                Pricing Tables
            </a>
        </li>
        <li>
            <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false">
                <i class="fas fa-users"></i>
                User
                <i class="fas fa-angle-down fa-pull-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="pageSubmenu3">
                <li>
                    <a href="login.html">Login</a>
                </li>
                <li>
                    <a href="register.html">Register</a>
                </li>
                <li>
                    <a href="forgot.html">Forgot password</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="maps.html">
                <i class="far fa-map"></i>
                Maps
            </a>
        </li>
    </ul>
</nav>