<template>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <ul class="sidebar navbar-nav">
                            <li class="nav-item">
                                <router-link to="/" class="nav-link" exact>
                                    <i class="fas fa-fw fa-tachometer-alt"></i>
                                    <span>Dashboard</span>
                                </router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/items" class="nav-link" exact>
                                    <i class="fas fa-fw fa-chart-area"></i>
                                    <span>Korespondencja</span>
                                </router-link>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

</template>
