<section id="sidebar-section">
    <div class="offcanvas-lg offcanvas-start custom-sidebar bg-light text-dark" data-bs-scroll="true" tabindex="-1" id="sidebarPanelOffCanvas" aria-labelledby="sidebarPanelOffCanvasLabel" style=" min-width: 250px;width: 250px;max-width: 250px;">
        <div class="custom-sidebar bg-light text-dark vh-100 scrollable-y hide-scrollbar px-2">
            <a href="#home" class="py-3 mb-3 container-fluid d-flex gap-2 align-items-center sticky-top bg-light text-dark border-bottom border-light border-opacity-25 text-decoration-none" id="sidebar-header">
                <img src="<?= IMAGES_URL ?>/logo-banner.png" alt="" class="w-100">
            </a>

            <ul class="list-unstyled m-0 p-0">
                <li>
                    <a href="<?= HOST_URL ?>/admin/" class="mb-2 px-3 py-2 rounded container-fluid d-flex gap-2 align-items-center sticky-top text-dark  sidebar-item text-decoration-none" id="sidebar-item-dashboard">
                        <div class=" m-0"> <i class="fa-solid fa-gauge fa-fw"></i> &nbsp; Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="#management-collapse" class="mb-2 px-3 py-2 rounded container-fluid d-flex gap-2 align-items-center sticky-top text-dark sidebar-item btn-toggle collapsed justify-content-between text-decoration-none" data-bs-toggle="collapse" aria-expanded="false" id="management-collapse-toggle">
                        <div class=" m-0"> <i class="fa-solid fa-clipboard fa-fw"></i> &nbsp; Manajemen Data</div>
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                    <div class="collapse" id="management-collapse">
                        <ul class="btn-toggle-nav list-unstyled">
                            <li>
                                <a href="<?= HOST_URL ?>/admin/pos" class="mb-2 ps-5 py-2 rounded container-fluid d-flex gap-2 align-items-center sticky-top text-dark sidebar-item  text-decoration-none" id="sidebar-item-pos">
                                    <div class=" m-0"> <i class="fa-solid fa-truck-fast fa-fw"></i> &nbsp; Pos</div>
                                </a>
                            </li>
                            <li>
                                <a href="<?= HOST_URL ?>/admin/telekomunikasi" class="mb-2 ps-5 py-2 rounded container-fluid d-flex gap-2 align-items-center sticky-top text-dark sidebar-item  text-decoration-none" id="sidebar-item-telekomunikasi">
                                    <div class=" m-0"> <i class="fa-solid fa-tower-cell fa-fw"></i> &nbsp; Telekomunikasi</div>
                                </a>
                            </li>
                            <li>
                                <a href="<?= HOST_URL ?>/admin/penyiaran" class="mb-2 ps-5 py-2 rounded container-fluid d-flex gap-2 align-items-center sticky-top text-dark sidebar-item  text-decoration-none" id="sidebar-item-penyiaran">
                                    <div class=" m-0"> <i class="fa-solid fa-satellite-dish fa-fw"></i> &nbsp; Penyiaran</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="<?= HOST_URL ?>/admin/informasi" class="mb-2 px-3 py-2 rounded container-fluid d-flex gap-2 align-items-center sticky-top text-dark sidebar-item  text-decoration-none" id="sidebar-item-informasi">
                        <div class=" m-0"> <i class="fa-solid fa-circle-info fa-fw"></i> &nbsp; Manajemen Informasi</div>
                    </a>
                </li>
                <li>
                    <a href="<?= HOST_URL ?>/admin/faq" class="mb-2 px-3 py-2 rounded container-fluid d-flex gap-2 align-items-center sticky-top text-dark sidebar-item  text-decoration-none" id="sidebar-item-faq">
                        <div class=" m-0"> <i class="fa-solid fa-clipboard-question fa-fw"></i> &nbsp; Manajemen FAQ</div>
                    </a>
                </li>
                <li>
                    <a href="<?= HOST_URL ?>/admin/pengguna" class="mb-2 px-3 py-2 rounded container-fluid d-flex gap-2 align-items-center sticky-top text-dark sidebar-item  text-decoration-none" id="sidebar-item-pengguna">
                        <div class=" m-0"> <i class="fa-solid fa-users-cog fa-fw"></i> &nbsp; Manajemen Pengguna</div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>

<style>
    .btn-toggle[aria-expanded="true"]>i {
        transform: rotate(90deg);
    }

    .sidebar-item:hover {
        background-color: rgba(0, 69, 142, 0.1);
    }

    .sidebar-active {
        background-color: rgba(0, 69, 142, 0.8);
        color: #f8f9fa !important;
    }
</style>