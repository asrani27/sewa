@extends('frontend.app')

@section('content')
<section id="contact">

    <div class="container-wrapper">
        <div class="container contact-info">
            
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Kontak Kami</h2>
        </div>
            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <div class="contact-form">
                        <address>
                            <strong>Gedung Raya Banjarmasin</strong><br>
                            {{$kontak->alamat}}
                            <abbr title="Phone">Telp:</abbr> {{$kontak->telp}}
                        </address>

                        <ul class="social-icons">
                            <li><i class="fa fa-facebook"></i> Akun Facebook : {{$kontak->facebook}}</li>
                            <li><i class="fa fa-twitter"></i> Akun Twitter : {{$kontak->twitter}}</li>
                            <li><i class="fa fa-youtube"></i> Akun Youtube : {{$kontak->youtube}}</li>
                            <li><i class="fa fa-instagram"></i> Akun Instagram : {{$kontak->instagram}}</li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div id="google-map" style="height:400px" data-latitude="40.7141667" data-longitude="-74.00638891"></div>
</section>


@endsection

@push('js')
    
@endpush