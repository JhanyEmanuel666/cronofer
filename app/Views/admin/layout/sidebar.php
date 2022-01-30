<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Dashboard'); ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-heading">Manage Product</li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="ri-t-shirt-2-line"></i><span>Kelola Produk</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= base_url('a_kategori'); ?>">
                        <i class="bi bi-circle"></i> <span>Kategori Produk</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('a_produk'); ?>">
                        <i class="bi bi-circle"></i> <span>Produk</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('a_produk_stok'); ?>">
                        <i class="bi bi-circle"></i> <span>Stok Produk</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-heading">Manage Store</li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables2-nav" data-bs-toggle="collapse" href="#">
                <i class="ri-store-2-line"></i><span>Kelola Toko</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables2-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= base_url('a_slide'); ?>">
                        <i class="bi bi-circle"></i> <span>Slide Toko</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('a_produk'); ?>">
                        <i class="bi bi-circle"></i> <span>Produk</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('a_stok'); ?>">
                        <i class="bi bi-circle"></i> <span>Stok Produk</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('a_contact'); ?>">
                        <i class="bi bi-circle"></i> <span>Contact</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-blank.html">
                <i class="bi bi-file-earmark"></i> <span>Blank</span>
            </a>
        </li>

    </ul>

  </aside><!-- End Sidebar-->