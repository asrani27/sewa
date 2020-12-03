<ul class="nav navbar-nav">
    <li class="scroll {{ Request::is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
    <li class="scroll {{ Request::is('tentang-kami') ? 'active' : '' }}"><a href="/tentang-kami">Tentang Kami</a></li>
    <li class="scroll {{ Request::is('galery') ? 'active' : '' }}"><a href="/galery">Gallery</a></li>
    <li class="scroll {{ Request::is('harga') ? 'active' : '' }}"><a href="/harga">Harga</a></li>
    <li class="scroll {{ Request::is('kontak') ? 'active' : '' }}"><a href="/kontak">Kontak</a></li>
    <li class="scroll"><a href="/login">Login</a></li>
</ul>