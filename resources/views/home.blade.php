<x-kost-layout>
        <section id="jumbotron">
            <div class="container-fluid row" style="padding-right: 0;--bs-gutter-x: 0;">
                <div class="container-title col-md-7 col-sm-12">
                    <h1>Searching for a brand new cozy place ? </h1>
                    <p>Don’t worry, you will find your beloved space
                        here, we search it for you</p>
                    <form class="search-form mt-5 mb-3">
                        <input type="search" value="" placeholder="Location" id="searchValue" class="search-input">
                        <img class="location-icon" src="img/loc-icon.svg">
                    </form>
                    <button id="search" type="submit" class="btn btn-blue">Search</button>
                </div>
                <div class="container-image col-md-5 col-sm-12">
                    <img src="img/banner1.png" width="90%" style="float: right">
                </div>
            </div>
        </section>

        <section id="about">
            <div class="container m-auto row">
                <div class="container-video col-md-7 col-sm-12">
                    <iframe class="youtube" src="https://www.youtube.com/embed/O2bGe7xE0kc" title="UNREAL ENGINE 5 Interior Animation | SPRING VIBES by PAUL LAPIN" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="container-title col-md-5 col-sm-12">
                    <h1>Introducing
                        Virtual Kost </h1>
                    <p>Our App will show you how easy it is</p>
                    <button class="btn btn-blue mt-4">Get Started</button>
                </div>
            </div>
        </section>
        <section id="product">
            <div class="container">
                <div class="d-flex" style="justify-content: space-between;">
                    <div class="ms-2">Recommendation: <b>Monas</b></div>
                    <div class="d-flex" style="gap: 10px; margin-right:5%">
                        <a class="carousel-control-prev bg-transparent w-aut slider-nav" href="#recipeCarousel" role="button" data-bs-slide="prev">
                            <img src="img/arrow-left.svg">
                        </a>
                        <a class="carousel-control-next bg-transparent w-aut slider-nav" href="#recipeCarousel" role="button" data-bs-slide="next">
                            <img src="img/arrow-right.svg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="container my-3">
                <div class="row mx-auto my-auto justify-content-center">
                    <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            @if (count($kosts) > 0)
                            @foreach ($kosts as $kost)
                            <div class="carousel-item active">
                                <div class="col-md-3">
                                    <div class="card-kost mb-4" onclick="window.location='{{ url("/kost-detail/$kost->id") }}'">
                                        <div class="card-img">
                                            <img src="{{ isset($kost) ? Storage::url($kost->thumbnail_image) : '' }}" class="img-fluid">
                                        </div>
                                        <div class="card-content">
                                            <div class="kost-info">
                                                <div class="d-flex flex-column">
                                                    <span>{{$kost->kost_title}}</span>
                                                    <span><b>{{$kost->kost_city}}</b></span>
                                                </div>
                                            </div>
                                            <div class="kost-facilities">
                                                <div class="d-flex">
                                                    @foreach ( array_slice(explode(",",$kost->kost_facilities), 0, 3) as $facilities)
                                                    <span>{{$facilities}}</span><span style="padding: 0 2px;">·</span>
                                                    {{-- <span>WiFi</span><span>·</span>
                                                    <span>AC</span> --}}
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="kost-price">
                                                <div><b>Rp. {{ number_format($kost->kost_price,0, '.') }}</b> / bulan</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <div class="carousel-item active">
                                <div class="col-md-3">
                                    <div class="card-kost" onclick="window.location='{{ url("kost-detail") }}'">
                                        <div class="card-img">
                                            <img src="img/kost1.png" class="img-fluid">
                                        </div>
                                        <div class="card-content">
                                            <div class="kost-info">
                                                <div class="d-flex flex-column">
                                                    <span>Kost Oemah Singahsini 23</span>
                                                    <span><b>Menteng</b></span>
                                                </div>
                                            </div>
                                            <div class="kost-facilities">
                                                <div class="d-flex">
                                                    <span>K. Mandi Dalam</span><span style="padding: 0 2px;">·</span>
                                                    <span>WiFi</span><span>·</span>
                                                    <span>AC</span>
                                                </div>
                                            </div>
                                            <div class="kost-price">
                                                <div><b>2.000.000</b> / bulan</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card-kost" onclick="window.location='{{ url("kost-detail") }}'">
                                        <div class="card-img">
                                            <img src="img/kost2.png" class="img-fluid">
                                        </div>
                                        <div class="card-content">
                                            <div class="kost-info">
                                                <div class="d-flex flex-column">
                                                    <span>Kost Oemah Singahsini 23</span>
                                                    <span><b>Menteng</b></span>
                                                </div>
                                            </div>
                                            <div class="kost-facilities">
                                                <div class="d-flex">
                                                    <span>K. Mandi Dalam</span><span style="padding: 0 2px;">·</span>
                                                    <span>WiFi</span><span>·</span>
                                                    <span>AC</span>
                                                </div>
                                            </div>
                                            <div class="kost-price">
                                                <div><b>2.000.000</b> / bulan</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card-kost" onclick="window.location='{{ url("kost-detail") }}'">
                                        <div class="card-img">
                                            <img src="img/kost3.png" class="img-fluid">
                                        </div>
                                        <div class="card-content">
                                            <div class="kost-info">
                                                <div class="d-flex flex-column">
                                                    <span>Kost Oemah Singahsini 23</span>
                                                    <span><b>Menteng</b></span>
                                                </div>
                                            </div>
                                            <div class="kost-facilities">
                                                <div class="d-flex">
                                                    <span>K. Mandi Dalam</span><span style="padding: 0 2px;">·</span>
                                                    <span>WiFi</span><span>·</span>
                                                    <span>AC</span>
                                                </div>
                                            </div>
                                            <div class="kost-price">
                                                <div><b>2.000.000</b> / bulan</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card-kost" onclick="window.location='{{ url("kost-detail") }}'">
                                        <div class="card-img">
                                            <img src="img/kost1.png" class="img-fluid">
                                        </div>
                                        <div class="card-content">
                                            <div class="kost-info">
                                                <div class="d-flex flex-column">
                                                    <span>Kost Oemah Singahsini 23</span>
                                                    <span><b>Menteng</b></span>
                                                </div>
                                            </div>
                                            <div class="kost-facilities">
                                                <div class="d-flex">
                                                    <span>K. Mandi Dalam</span><span style="padding: 0 2px;">·</span>
                                                    <span>WiFi</span><span>·</span>
                                                    <span>AC</span>
                                                </div>
                                            </div>
                                            <div class="kost-price">
                                                <div><b>2.000.000</b> / bulan</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card-kost" onclick="window.location='{{ url("kost-detail") }}'">
                                        <div class="card-img">
                                            <img src="img/kost2.png" class="img-fluid">
                                        </div>
                                        <div class="card-content">
                                            <div class="kost-info">
                                                <div class="d-flex flex-column">
                                                    <span>Kost Oemah Singahsini 23</span>
                                                    <span><b>Menteng</b></span>
                                                </div>
                                            </div>
                                            <div class="kost-facilities">
                                                <div class="d-flex">
                                                    <span>K. Mandi Dalam</span><span style="padding: 0 2px;">·</span>
                                                    <span>WiFi</span><span>·</span>
                                                    <span>AC</span>
                                                </div>
                                            </div>
                                            <div class="kost-price">
                                                <div><b>2.000.000</b> / bulan</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="card-kost" onclick="window.location='{{ url("kost-detail") }}'">
                                        <div class="card-img">
                                            <img src="img/kost3.png" class="img-fluid">
                                        </div>
                                        <div class="card-content">
                                            <div class="kost-info">
                                                <div class="d-flex flex-column">
                                                    <span>Kost Oemah Singahsini 23</span>
                                                    <span><b>Menteng</b></span>
                                                </div>
                                            </div>
                                            <div class="kost-facilities">
                                                <div class="d-flex">
                                                    <span>K. Mandi Dalam</span><span style="padding: 0 2px;">·</span>
                                                    <span>WiFi</span><span>·</span>
                                                    <span>AC</span>
                                                </div>
                                            </div>
                                            <div class="kost-price">
                                                <div><b>2.000.000</b> / bulan</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="review">
            <div class="container m-auto">
                <h1 class="mb-5">Our Reviews</h1>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-review">
                            <div class="testimonial-identity d-flex">
                                <div data-v-0a667052="" class="identity-image" data-src="https://static.mamikos.com/uploads/cache/data/style/2020-02-19/qXe2nVg5-240x320.jpg" lazy="loaded" style="background-image: url(&quot;https://static.mamikos.com/uploads/cache/data/style/2020-02-19/qXe2nVg5-240x320.jpg&quot;);"></div>
                                <div>
                                    <h3>Fathu bagus septian</h3>
                                    <p>Kos Putri Eksklusif MamiRooms Ayana, Depok, Sleman, Yogyakarta</p>
                                </div>
                            </div>
                            <div class="testimonial-content mt-3">
                                “Saya mempercayakan urusan promosi kos Ayana kepada VirtualKost sebagai aplikasi penyedia layanan kos terbesar di Indonesia. Jujur saja, saya sangat terbantu sekali dari segi marketing, operasional, perawatan bangunan kos, dan lainnya. Apalagi terdapat fitur Premium di aplikasi VirtualKost yang membuat pencari kos bisa menemukan kos Ayana dengan mudah.”
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-review">
                            <div class="testimonial-identity d-flex">
                                <div data-v-0a667052="" class="identity-image" data-src="https://static.mamikos.com/uploads/cache/data/style/2020-02-19/qXe2nVg5-240x320.jpg" lazy="loaded" style="background-image: url(&quot;https://static.mamikos.com/uploads/cache/data/style/2020-02-19/4NCARQKa-240x320.jpg&quot;);"></div>
                                <div>
                                    <h3>Zulifah</h3>
                                    <p>Kos Putri Eksklusif MamiRooms Ayana, Depok, Sleman, Yogyakarta</p>
                                </div>
                            </div>
                            <div class="testimonial-content mt-3">
                                “Saya mempercayakan urusan promosi kos Ayana kepada VirtualKost sebagai aplikasi penyedia layanan kos terbesar di Indonesia. Jujur saja, saya sangat terbantu sekali dari segi marketing, operasional, perawatan bangunan kos, dan lainnya. Apalagi terdapat fitur Premium di aplikasi VirtualKost yang membuat pencari kos bisa menemukan kos Ayana dengan mudah.”
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-review">
                            <div class="testimonial-identity d-flex">
                                <div data-v-0a667052="" class="identity-image" data-src="https://static.mamikos.com/uploads/cache/data/style/2020-02-19/qXe2nVg5-240x320.jpg" lazy="loaded" style="background-image: url(&quot;https://static.mamikos.com/uploads/cache/data/style/2020-02-19/MbeTVNUl-240x320.jpg&quot;);"></div>
                                <div>
                                    <h3>Fajar Surya</h3>
                                    <p>Kos Putri Eksklusif MamiRooms Ayana, Depok, Sleman, Yogyakarta</p>
                                </div>
                            </div>
                            <div class="testimonial-content mt-3">
                                “Saya mempercayakan urusan promosi kos Ayana kepada VirtualKost sebagai aplikasi penyedia layanan kos terbesar di Indonesia. Jujur saja, saya sangat terbantu sekali dari segi marketing, operasional, perawatan bangunan kos, dan lainnya. Apalagi terdapat fitur Premium di aplikasi VirtualKost yang membuat pencari kos bisa menemukan kos Ayana dengan mudah.”
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</x-kost-layout>
