<aside class="main-sidebar sidebar-light-primary" id="sidebar">
    <div class="brand-link brand-text custom-brand-link">
        <a href="" class="font-weight-light" style="color: inherit">{{ env('APP_NAME') }}</a>

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
                <li class="nav-header">SAMPLE SIDEBAR</li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Single menu</p>
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
            </ul>
        </nav>
    </div>
</aside>
