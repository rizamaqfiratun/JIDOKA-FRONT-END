<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            <img src="<?= base_url('assets') ?>/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown">Geneva Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user mr-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings mr-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock mr-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out mr-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-muted">Admin Head</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="#sidebarDashboards" data-toggle="collapse">
                        <i data-feather="airplay"></i>
                        <span class="badge badge-success badge-pill float-right">4</span>
                        <span> Dashboards </span>
                    </a>
                    <div class="collapse" id="sidebarDashboards">
                        <ul class="nav-second-level">
                            <li>
                                <a href="index.html">Dashboard 1</a>
                            </li>
                            <li>
                                <a href="dashboard-2.html">Dashboard 2</a>
                            </li>
                            <li>
                                <a href="dashboard-3.html">Dashboard 3</a>
                            </li>
                            <li>
                                <a href="dashboard-4.html">Dashboard 4</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <strong>
                    <li class="menu-title">CRM</li>
                </strong>

                <li>
                    <a href="<?= base_url('CRM/program_marketing') ?>">
                        <i class="fas fa-mail-bulk fa-sm"></i>
                        <span> Program Marketing </span>
                    </a>
                </li>


                <li>
                    <a href="<?= base_url('CRM/pameran') ?>">
                        <i class="fas fa-tv fa-sm"></i>
                        <span> Pameran </span>
                    </a>
                </li>

                <li>
                    <a href="#sidebarCrm" data-toggle="collapse">
                        <i data-feather="users"></i>
                        <span> Customers </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCrm">
                        <ul class="nav-second-level">
                            <li>
                                <a href="<?= base_url('CRM/customer') ?>">Daftar Customers</a>
                            </li>
                            <li>
                                <a href="#sidebarCs" data-toggle="collapse">
                                    <span> Leads Customers </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarCs">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="<?= base_url('crm/leads_customer_cool') ?>">Cool</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('crm/leads_customer_warm') ?>">Warm</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('crm/leads_customer_hot') ?>">Hot</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarPesUni" data-toggle="collapse">
                        <i class="fas fa-book-open fa-sm"></i>
                        <span> Pesan Unit </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarPesUni">
                        <ul class="nav-second-level">
                            <li>
                                <a href="<?= base_url('crm/reservasi') ?>">Reservasi</a>
                            </li>
                            <li>
                                <a href="<?= base_url('crm/booking') ?>">Booking</a>
                            </li>
                            <li>
                                <a href="<?= base_url('crm/kontrak') ?>">Kontrak</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="<?= base_url('crm/pembatalan') ?>">
                        <i class="far fa-window-close fa-sm"></i>
                        <span> Pembatalan </span>
                    </a>
                </li>

                <strong>
                    <li class="menu-title">INVENTORI</li>
                </strong>

                <li>
                    <a href="#settingMas" data-toggle="collapse">
                        <i class="fe-settings"></i>
                        <span> Setting Master </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="settingMas">
                        <ul class="nav-second-level">
                            <li>
                                <a href="<?= base_url('crm/gudang') ?>">Gudang</a>
                            </li>
                            <li>
                                <a href="<?= base_url('crm/satuan') ?>">Satuan</a>
                            </li>
                            <li>
                                <a href="<?= base_url('crm/pembeli') ?>">Pembeli</a>
                            </li>
                            <li>
                                <a href="<?= base_url('crm/vendor') ?>">Vendor</a>
                            </li>
                            <li>
                                <a href="<?= base_url('crm/alat_bantu') ?>">Alat Bantu</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#pesananPemb" data-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span> Pesanan Pembelian </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="pesananPemb">
                        <ul class="nav-second-level">
                            <li>
                                <a href="<?= base_url('') ?>">List Pesanan Pembelian</a>
                            </li>
                            <li>
                                <a href="<?= base_url('') ?>">Faktur Pembelian</a>
                            </li>
                            <li>
                                <a href="<?= base_url('') ?>">Rektur Pembelian</a>
                            </li>
                            <li>
                                <a href="<?= base_url('') ?>">Write Off Pembelian</a>
                            </li>
                            <li>
                                <a href="<?= base_url('') ?>">Utang Usaha</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#penjualanUtang" data-toggle="collapse">
                        <i class="fe-settings"></i>
                        <span> Penjualan Utang Usaha </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="penjualanUtang">
                        <ul class="nav-second-level">
                            <li>
                                <a href="<?= base_url('') ?>">-</a>
                            </li>
                            <li>
                                <a href="<?= base_url('') ?>">-</a>
                            </li>
                            <li>
                                <a href="<?= base_url('') ?>">-</a>
                            </li>
                            <li>
                                <a href="<?= base_url('') ?>">-</a>
                            </li>
                            <li>
                                <a href="<?= base_url('') ?>">-</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#proyek" data-toggle="collapse">
                        <i class="fe-settings"></i>
                        <span> Proyek </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="proyek">
                        <ul class="nav-second-level">
                            <li>
                                <a href="<?= base_url('') ?>">Permintaan Material</a>
                            </li>
                            <li>
                                <a href="<?= base_url('') ?>">Pegembalian Material</a>
                            </li>
                            <li>
                                <a href="<?= base_url('') ?>">Permintaan Alat Bantu</a>
                            </li>
                            <li>
                                <a href="<?= base_url('') ?>">Pengembalian Alat Bantu</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#pindahGud" data-toggle="collapse">
                        <i class="fas fa-shipping-fast"></i>
                        <span> Pindah Gudang </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="pindahGud">
                        <ul class="nav-second-level">
                            <li>
                                <a href="<?= base_url('') ?>">Pembuatan Permintaan</a>
                            </li>
                            <li>
                                <a href="<?= base_url('') ?>">Permintaan Gudang Lain</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#produksi" data-toggle="collapse">
                        <i class="far fa-clipboard-list-check"></i>
                        <span> Produksi </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="produksi">
                        <ul class="nav-second-level">
                            <li>
                                <a href="<?= base_url('') ?>">Pembuatan Produksi</a>
                            </li>
                            <li>
                                <a href="<?= base_url('') ?>">Pengembaian Raw Materials</a>
                            </li>
                            <li>
                                <a href="<?= base_url('') ?>">Penerimaan Produksi</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#pesananPemb" data-toggle="collapse">
                       <i class="fas fa-boxes"></i>
                        <span> Stock Opname </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="pesananPemb">
                        <ul class="nav-second-level">
                            <li>
                                <a href="<?= base_url('') ?>">Permintaan Stock Opname</a>
                            </li>
                    </div>
                </li>
                <li>
                    <a href="<?= base_url('') ?>">
                        <i class=""></i>
                        <span> Kontruksi </span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('') ?>">
                        <i class=""></i>
                        <span> Human Resource </span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('') ?>">
                        <i class=""></i>
                        <span> Keuangan </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i data-feather="rss"></i>
                        <span> Menu </span>
                    </a>
                </li>

                <strong>
                    <li class="menu-title">KONSTRUKKSI</li>
                </strong>

                <li>
                    <a href="#">
                        <i data-feather="rss"></i>
                        <span> Menu </span>
                    </a>
                </li>

                <strong>
                    <li class="menu-title">HUMAN RESOURCE</li>
                </strong>

                <li>
                    <a href="#">
                        <i data-feather="rss"></i>
                        <span> Menu </span>
                    </a>
                </li>

                <b>
                    <li class="menu-title">KEUANGAN</li>
                </b>

                <li>
                    <a href="#">
                        <i data-feather="rss"></i>
                        <span> Menu </span>
                    </a>
                </li>

            </ul>
        </div>
        </li>
        </ul>

    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->