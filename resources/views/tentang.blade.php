@extends('frontend.app')

@section('content')
<section id="about">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Tentang Kami</h2>
        </div>

        <div class="row">
            <div class="col-sm-6 wow fadeInLeft">
                <img class="img-responsive" src="/storage/{{$data->file}}"
                    alt="">
            </div>

            <div class="col-sm-6 wow fadeInRight">
                <h3 class="column-title">Latar Belakang</h3>
                {!! $data->deskripsi !!}

            </div>
        </div>
    </div>
</section>
@endsection