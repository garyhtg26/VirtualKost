<x-kost-layout>

    <section id="detailKost">
        <div class="container">
            <nav style="font-size: 0.8rem;--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item"><a href="/search">Search</a></li>
                  <li class="breadcrumb-item"><a href="#">{{$kost->kost_city}}</a></li>
                  <li class="breadcrumb-item"><a href="#">{{$kost->kost_subdistrict}}</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{$kost->kost_title}}</li>
                </ol>
              </nav>
              <div class="row mt-4">
                    <div class="col-md-6 col-sm-12">
                        <div class="details">
                            <div class="kost-overview">
                                <span class="badge text-bg-success">Verified</span>
                                <h1>{{$kost->kost_title}}</h1>
                                <p><span class="me-2" style="color:grey">Type :</span><b> {{$kost->kost_type}}</b></p>
                                <p>{{$kost->kost_address}}</p>
                                <div class="d-flex mt-4" style="gap:10px">
                                    <div class="btn btn-secondary label-all">All</div>
                                    <div class="btn btn-warning label-star"><img src="../img/star.svg" class="me-2">4.5</div>
                                    <div  style="cursor:pointer" class="card card-location px-2">
                                        <a href="{{ url($kost->gmaps_location) }}" target="_blank" class="px-2"><img class="me-2" src="../img/location-dot.svg">See on Maps</a>
                                    </div>
                                </div>
                                <div class="mt-5 d-flex">
                                    <img class="me-2" src="../img/pricetag.svg" height="35rem">
                                    <h3>Rp {{number_format($kost->kost_price,0,',','.')}} <span class="text-grey-bold">/ Month</span></h3>
                                </div>
                            </div>
                            <div class="kost-Facilities mt-5">
                                <h3 class="subtitle-kost">Facilities</h3>
                                <ul class="row mt-3">
                                    @foreach ( explode(",",$kost->kost_facilities) as $facilities)
                                    <li class="col-6">
                                      {{$facilities}}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="kost-Facilities mt-5">
                                <h3 class="subtitle-kost">Others</h3>
                                <ul class="row mt-3">
                                    @foreach ( explode(",",$kost->others) as $others)
                                    <li class="col-6">
                                      {{$others}}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="kost-detail-button d-flex mt-5">
                                @if ( Auth::check() )
                                    <button onclick="location.href='https://wa.me/{{$kost->user->number}}?text=Saya%20tertarik%20untuk%20menyewa%20kost%20ini';" class="btn btn-blue me-2">book</button>
                                @else
                                    <button onclick="location.href='/login';" class="btn btn-blue me-2">book</button>
                                @endif
                              {{-- <button onclick="location.href='/search';" class="btn btn-white mt-2">See More</button> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        {{-- <div id="sSeajnM1P"><script type="text/javascript" async data-short="sSeajnM1P" data-path="tours" data-is-self-hosted="false" width="100%" height="500px" src="https://app.cloudpano.com/public/shareScript.js"></script></div> --}}
                        {{-- <div id="MMqLrAhy2oN"><script type="text/javascript" async data-short="MMqLrAhy2oN" data-path="tours" data-is-self-hosted="false" width="100%" height="500px" src="https://app.cloudpano.com/public/shareScript.js"></script></div> --}}
                        @if ($kost->virtual_embed)
                            {!!$kost->virtual_embed!!}
                        @else
                            <div class="card-img" style="max-height: max-content;">
                                <img src="{{ isset($kost) ? Storage::url($kost->thumbnail_image) : '' }}" class="img-fluid">
                                <div class="img-text-center">Virtual 360 Not Available</div>
                            </div>
                        @endif
                    </div>
              </div>
        </div>

    </section>

</x-kost-layout>
