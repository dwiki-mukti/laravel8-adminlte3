<aside class="main-sidebar sidebar-light-primary">
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
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
                            Starter Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <p><b>-</b> Active Page</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">STARTER TEMPLATE</li>
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
            </ul>
        </nav>
    </div>
</aside>
