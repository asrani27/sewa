@extends('frontend.app')

@section('content')
    
<section id="main-slider">
    <div class="owl-carousel">
        @foreach ($slide as $item)
            <div class="item"
                style="background-image: url(/storage/{{$item->file}});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="carousel-caption">
                                <div class="carousel-content">
                                <h2>{{$item->judul}}</h2>
                                    <p>{{$item->deskripsi}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        
    </div>
    </div>
    <!--/.item-->
    </div>
    <!--/.owl-carousel-->
</section>

<section id="hero-text" class="wow fadeIn">
    <div class="container">`
        <div class="row">
            <div class="col-sm-9">
                <h2>Pemesanan Sewa Gedung Secara Online</h2>
                <p>JIka Belum Memiliki Akun Silahkan Daftar/Register, JIka Sudah Punya Silahkan Login di menu samping
                </p>
            </div>
            <div class="col-sm-3 text-right">
                <a class="btn btn-primary btn-lg" href="/login">Login!</a>
                <a class="btn btn-primary btn-lg" href="/register">Daftar!</a>
            </div>
        </div>
    </div>
</section>

<section id="pricing">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Harga Terbaik</h2>
        </div>
        <div class="row">
            @foreach ($harga as $item)
            <div class="col-sm-6 col-md-6">
                <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="0ms">
                    <ul class="pricing featured">
                        <li class="plan-header">
                            <div class="price-duration">
                                <span class="price">
                                    {{$item->judul}}<br/>
                                </span>
                                <span class="price">
                                    @currency($item->harga)<br/>
                                </span>
                            </div>

                            <div class="plan-name">
                                Fasilitas :
                            </div><br/>
                            <div>
                                {!!$item->fasilitas!!}
                            </div>
                        </li>
                        
                        <br>
                        <li class="plan-purchase"><a class="btn btn-primary" href="/login">Pesan Sekarang!</a></li>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

@push('js')
    
<script src="/theme/js/owl.carousel.min.js"></script>
<script src="/theme/js/mousescroll.js"></script>
<script src="/theme/js/smoothscroll.js"></script>
<script src="/theme/js/jquery.prettyPhoto.js"></script>
<script src="/theme/js/jquery.inview.min.js"></script>
<script src="/theme/js/wow.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="/theme/js/custom-scripts.js"></script>
@endpush