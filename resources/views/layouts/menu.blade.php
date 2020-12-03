<ul class='nav nav-stacked'>
    <li class='{{ Request::is('home') ? 'active' : '' }}'>
        <a href='/home'>
            <i class='fa fa-tachometer'></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class='{{ Request::is('data*') ? 'active' : '' }}'>
        <a class="dropdown-collapse" href="#"><i class='fa fa-pencil-square-o'></i>
            <span>Tampilan Depan</span>
            <i class='fa fa-angle-down angle-down'></i>
        </a>
        <ul class='{{ Request::is('data*') ? 'in' : '' }} nav nav-stacked'>
            <li class='{{ Request::is('data/slideshow') ? 'active' : '' }}'>
                <a href='/data/slideshow'>
                    <div class='icon'>
                        <i class='fa fa-caret-right'></i>
                    </div>
                    <span>Slide Show</span>
                </a>
            </li>
            <li class='{{ Request::is('data/tentang-kami') ? 'active' : '' }}'>
                <a href='/data/tentang-kami'>
                    <div class='icon'>
                        <i class='fa fa-caret-right'></i>
                    </div>
                    <span>Tentang Kami</span>
                </a>
            </li>
            <li class='{{ Request::is('data/galery') ? 'active' : '' }}'>
                <a href='/data/galery'>
                    <div class='icon'>
                        <i class='fa fa-caret-right'></i>
                    </div>
                    <span>Galery</span>
                </a>
            </li>
            <li class='{{ Request::is('data/harga') ? 'active' : '' }}'>
                <a href='/data/harga'>
                    <div class='icon'>
                        <i class='fa fa-caret-right'></i>
                    </div>
                    <span>Harga</span>
                </a>
            </li>
            <li class='{{ Request::is('data/kontak') ? 'active' : '' }}'>
                <a href='/data/kontak'>
                    <div class='icon'>
                        <i class='fa fa-caret-right'></i>
                    </div>
                    <span>Kontak</span>
                </a>
            </li>
        </ul>
    </li>
    <li class=''>
        <a href='/data/sewa'>
            <i class='fa fa-table'></i>
            <span>Sewa Gedung</span>
        </a>
    </li>
    <li class=''>
        <a href='/data/transaksi'>
            <i class='fa fa-table'></i>
            <span>Transaksi</span>
        </a>
    </li>
    <li class=''>
        <a href='/ganti-password'>
            <i class='fa fa-key'></i>
            <span>Ganti Password</span>
        </a>
    </li>
    <li class=''>
        <a href='/logout'>
            <i class='fa fa-mail-reply'></i>
            <span>Log Out</span>
        </a>
    </li>
</ul>