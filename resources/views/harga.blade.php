@extends('frontend.app')

@section('content')
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
                        <li class="plan-purchase"><a class="btn btn-primary" href="#">Pesan Sekarang!</a></li>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

@push('js')
    
@endpush