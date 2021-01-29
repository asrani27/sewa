<ul class='nav nav-stacked'>
    <li class='{{ Request::is('home') ? 'active' : '' }}'>
        <a href='/home'>
            <i class='fa fa-tachometer'></i>
            <span>Dashboard</span>
        </a>
    </li>
    @if(Auth::user()->hasRole('admin'))
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
    
    <li class='{{ Request::is('transaksi') ? 'active' : '' }}'>
        <a href='/transaksi'>
            <i class='fa fa-table'></i>
            <span>Transaksi</span>
        </a>
    </li>
    
    <li class='{{ Request::is('laporan/transaksi') ? 'active' : '' }}'>
        <a href='/laporan/transaksi'>
            <i class='fa fa-table'></i>
            <span>Lap. keuangan</span>
        </a>
    </li>
    @else
    
    <li class='{{ Request::is('pesanan-saya') ? 'active' : '' }}'>
        <a href='/pesanan-saya'>
            <i class='fa fa-shopping-cart'></i>
            <span>Pesanan Saya</span>
        </a>
    </li>
    @endif
    @if (Auth::user()->google_id == null)
    <li class=''>
        <a href='/ganti-password'>
            <i class='fa fa-key'></i>
            <span>Ganti Password</span>
        </a>
    </li>
    @else
        
    @endif
    <li class=''>
        <a href='/logout'>
            <i class='fa fa-mail-reply'></i>
            <span>Log Out</span>
        </a>
    </li>
</ul>