<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="#">
            <span class="sidebar-brand-text align-middle">
                PANACO
                <sup><small class="badge bg-primary text-uppercase">Admin</small></sup>
            </span>
            <svg class="sidebar-brand-icon align-middle" width="32px" height="32px" viewbox="0 0 24 24" fill="none"
                stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="miter" color="#FFFFFF"
                style="margin-left: -3px">
                <path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
                <path d="M20 12L12 16L4 12"></path>
                <path d="M20 16L12 20L4 16"></path>
            </svg>
        </a>


        <ul class="sidebar-nav">

            <a href="#auth" data-bs-toggle="collapse" class="sidebar-link collapsed">
                <i class="align-middle" data-feather="users"></i> <span class="align-middle">Parametres</span>
            </a>
            <ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                <li class="sidebar-item"><a class="sidebar-link" href="{{ route('produits.index') }}">Categorie
                        Produit</a>
                </li>
               
            </ul>


            <li class="sidebar-header">

                </a>
                <ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-alerts.html">Alerts</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-buttons.html">Buttons</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-cards.html">Cards</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-general.html">General</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-grid.html">Grid</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-modals.html">Modals</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-offcanvas.html">Offcanvas <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-tabs.html">Tabs <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="ui-typography.html">Typography</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#icons" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Contacts</span>
                    <span class="sidebar-badge badge bg-light">n'hesitez point</span>
                </a>
                <ul id="icons" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="icons-feather.html">Feather</a>
                    </li>
                    <li class="sidebar-item"><a class="sidebar-link" href="icons-font-awesome.html">Font
                            Awesome <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
                </ul>
            </li>



            <ul id="form-plugins" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                <li class="sidebar-item"><a class="sidebar-link" href="forms-advanced-inputs.html">Advanced
                        Inputs <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="forms-editors.html">Editors <span
                            class="sidebar-badge badge bg-primary">Pro</span></a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="forms-validation.html">Validation
                        <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
            </ul>
            </li>


            </a>
            <ul id="charts" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                <li class="sidebar-item"><a class="sidebar-link" href="charts-chartjs.html">Chart.js</a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="charts-apexcharts.html">ApexCharts
                        <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
            </ul>
            </li>

            </li>
        </ul>

        <div class="sidebar-cta">
            <div class="sidebar-cta-content">
                <strong class="d-inline-block mb-2">Weekly Sales Report</strong>
                <div class="mb-3 text-sm">
                    Your weekly sales report is ready for download!
                </div>

                <div class="d-grid">
                    <a href="index-1.htm" class="btn btn-outline-primary" target="_blank">Download</a>
                </div>
            </div>
        </div>
    </div>
</nav>
