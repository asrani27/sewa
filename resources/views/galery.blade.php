@extends('frontend.app')
@push('css')
    
<link href="/theme/css/gallery-1.css" rel="stylesheet">
@endpush
@section('content')
<section id="portfolio">
    <!-- Start Gallery 1-2 -->
    <section id="gallery-1" data-section="gallery-1" class="data-section"
        class="content-block section-wrapper gallery-1">

        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown animated"
                    style="visibility: visible; animation-name: fadeInDown;">Galery Gedung</h2>
            </div>

            <div class="row">
                <div id="isotope-gallery-container">
                    @foreach ($data as $item)
                        
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper artwork creative">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="/storage/{{$item->file}}"
                                    class="img-responsive" alt="1st gallery Thumb" width="1000" height="100">
                                <div class="image-overlay"></div>
                                <a href="/storage/{{$item->file}}"
                                    class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                                <div class="editContent">
                                    <h5>Gallery Item {{$item->id}}</h5>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <!-- /.isotope-gallery-container -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!--// End Gallery 1-2 -->
</section>
@endsection
