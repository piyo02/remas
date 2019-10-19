<!-- Navbar -->
<div class="collapse navbar-collapse" id="worldNav">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url() ?>">Home</a>
        </li>
        <!-- <li class="nav-item">
                                  <a  class="nav-link" href="catagory.html">Catagory</a>
                                </li> -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('home/structure') ?>">Struktur Organisasi</a>
        </li>
        <!-- <li class="nav-item">
                                  <a class="nav-link" href="single-blog.html">Single Blog</a>
                                </li> -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('home/contact') ?>">Pengaduan</a>
        </li>
    </ul>
    <!-- Search Form  -->
    <div id="search-wrapper">
        <form action="#">
            <input type="text" id="search" placeholder="Search something...">
            <div id="close-icon"></div>
            <input class="d-none" type="submit" value="">
        </form>
    </div>
</div>
</nav>
</div>
</div>
</div>
</header>