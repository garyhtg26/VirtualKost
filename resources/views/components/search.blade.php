<x-kost-layout>

    <section>
        <div class="container">
            <div class="search-header">
                <div class="search-container mb-4">
                    <form class="search-form  mb-3" style="width: 100%;">
                        <input type="search" id="searchValue2" class="search-input">
                        <img class="location-icon" src="img/loc-icon.svg">
                    </form>
                    <button id="search2" class="btn btn-blue">Search</button>
                </div>
                @if (count($kosts) > 0)
                <div class="list-title mb-2" style="color: grey">
                    Ditemukan {{count($kosts)}} kos-kosan di sekitar <span id="searchName">Menteng</span>
                </div>
                @else
                <div class="list-title mb-2" style="color: grey">
                    Ditemukan 3187 kos-kosan di sekitar Menteng
                </div>
                @endif
            </div>
            <div class="search-content">
                <div class="row">
                    @if (count($kosts) > 0)
                    @foreach ($kosts as $kost)
                    <div class="col-md-3">
                        <div class="card-kost mb-4"  onclick="window.location='{{ url("/kost-detail") }}'">
                            <div class="card-img">
                                <img src="{{ isset($kost) ? Storage::url($kost->thumbnail_image) : '' }}" class="img-fluid">
                            </div>
                            <div class="card-content">
                                <div class="kost-info">
                                    <div class="d-flex flex-column">
                                        <span>{{$kost->kost_title}}</span>
                                        <span><b>{{$kost->kost_address}}</b></span>
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
                                    <div><b>Rp. {{ number_format($kost->kost_price,0, '.') }}</b> / bulan</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="col-md-3">
                        <div class="card-kost mb-4">
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
                    <div class="col-md-3">
                        <div class="card-kost mb-4">
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
                    <div class="col-md-3">
                        <div class="card-kost mb-4">
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
                    <div class="col-md-3">
                        <div class="card-kost mb-4">
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
                    <div class="col-md-3">
                        <div class="card-kost mb-4">
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
                    <div class="col-md-3">
                        <div class="card-kost mb-4">
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
                    <div class="col-md-3">
                        <div class="card-kost mb-4">
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
                    <div class="col-md-3">
                        <div class="card-kost mb-4">
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
                    <div class="col-md-3">
                        <div class="card-kost mb-4">
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
                    <div class="col-md-3">
                        <div class="card-kost mb-4">
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
                    @endif
                </div>
            </div>
        </div>
    </section>

</x-kost-layout>
