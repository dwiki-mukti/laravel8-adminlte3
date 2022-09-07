<aside class="main-sidebar sidebar-light-primary" id="sidebar">
    <div class="brand-link brand-text custom-brand-link">
        <a href="{{ Route('dashboard') }}" class="font-weight-light" style="color: inherit">{{ env('APP_NAME') }}</a>

        <div class="form-group mb-0 d-flex align-items-center" style="gap: .3rem; line-height: 25px;">
            <i class="far fa-moon"></i>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="switch-night-mode">
                <label class="custom-control-label" for="switch-night-mode"></label>
            </div>
        </div>
    </div>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ Route('dashboard') }}" class="nav-link" id="sidebarDashboard">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" id="sidebarHasItem">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dropdown menu
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <p><b>-</b> Submenu</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">STARTER CONTENT</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Sample Page
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ Route('sample.form') }}" class="nav-link" id="sidebarSampleForm">
                                <p><b>-</b> Sample Form</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ Route('sample.table') }}" class="nav-link" id="sidebarSampleTable">
                                <p><b>-</b> Sample Table</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ Route('sample.dataTables') }}" class="nav-link" id="sidebarSampleDataTable">
                                <p><b>-</b> Sample Data Table</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Top Navigation
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ Route('sample.topnav') }}" class="nav-link" id="sidebarSampleTopnav">
                                <p><b>-</b> Top Navigation</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ Route('sample.topnavside') }}" class="nav-link" id="sidebarSampleTopnavside">
                                <p><b>-</b> Top Navigation</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
