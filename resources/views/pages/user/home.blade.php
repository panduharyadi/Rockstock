@extends('layouts.main')

@section('title', 'Rostock | Home')

@section('content')
       {{-- jumbotron --}}
<div class="container mt-4 pb-5">
    <div class="hero">
    <div class="efect">
      <div class="col-7 col-sm-12 content-hero">
        <h1 class="pt-lg-3 hero-title">ADVANCED <br>PROTECTION COATING</h1>
        <p class="sub-title">Your Special Protection Coating</p>
        <a href="/tentang" class="btn custom-bg paragraf text-white shadow-none">Tentang Kami</a>
      </div>
    </div>
    </div>
</div>
{{-- end jumbotron --}}

{{-- about --}}
<div class="section pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-lg-4 mt-sm-4 mt-md-4 mt-4 ">
                <p class="paragraf"><strong>ROSTOCK</strong> hadir untuk membantu Anda dalam menemukan pendekatan yang lebih esien dan hemat
                biaya untuk proses perlindungan Anda melalui inovasi<br> Teknologi Pelapis. Baik itu wet-on-wet, Fast
                Curing, atau bahkan ketika sand dan water blasting dilarang. Pelapis kami akan sering memungkinkan
                Anda untuk <br> mempercepat proses Anda, mengurangi biaya Anda, dan meningkatkan kinerja sistem
                pelapisan Anda.</p>
            </div>
        </div>
    </div>
</div>
{{-- end about --}}

{{-- services --}}
<section class="bg-gray pt-5 pb-5 mt-3 mt-md-5 pt-md-5">
  <div class="container">
    <div class="col text-center mt-sm-4 mt-4">
        <h4 class="title theme-color">SISTEM PERLINDUNGAN ROSTOCK</h4>
    </div>
    <div class="row mt-4 mt-md-4">
      <div class="col-12 col-md-6 col-lg-4 mt-md-3">
        <img src="{{ asset('assets/rectangle4.png') }}" alt="" width="400" class="img-fluid">
        <div class="">

        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mt-4 mt-md-3">
        <img src="{{ asset('assets/rectangle5.png') }}" alt="" width="400" class="img-fluid">
      </div>
      <div class="col-12 col-md-6 col-lg-4 mt-4 mt-md-3">
        <img src="{{ asset('assets/rectangle6.png') }}" alt="" width="400" class="img-fluid">
      </div>
      <div class="col-12 col-md-6 col-lg-4 mt-4 mt-md-3 mt-lg-5">
        <img src="{{ asset('assets/rectangle7.png') }}" alt="" width="400" class="img-fluid">
      </div>
      <div class="col-12 col-md-6 col-lg-4 mt-4 mt-md-3 mt-lg-5">
        <img src="{{ asset('assets/rectangle8.png') }}" alt="" width="400" class="img-fluid">
      </div>
      <div class="col-12 col-md-6 col-lg-4 mt-4 mt-md-3 mt-lg-5">
        <img src="{{ asset('assets/rectangle9.png') }}" alt="" width="400" class="img-fluid">
      </div>
    </div>
  </div>
</section>
{{-- end services --}}

{{-- Manfaat --}}
<section class="pt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h4 class="theme-color title">KATEGORI PRODUK</h4>
      </div>
      <div class="row justify-content-evenly px-lg-0 px-md-0 mt-4 mt-md-4">
        @foreach ($kategoris as $kategori)
          <div class="col-lg-4 col-md-6 my-3 ">
            <div class="card border-0 shadow px-0 mt-4 mt-md-0 mt-lg-0 bg-gray" style="max-width: 400px; margin: auto; border-radius:25px;">
              <img src="{{ asset($kategori->image) }}" class="" alt="{{ $kategori->kategori_name }}">
              <div class="card-body ">
                <p class="paragraf fw-bold">{{ $kategori->kategori_name }}</p>
                <a href="{{ route('kategori-detail', $kategori->id) }}" class="btn custom-bg text-white paragraf shadow-none">Selengkapnya ></a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
  </div>
</section>
{{-- end Manfaat --}}

{{-- Manfaat1 --}}
<section class="bg-gray pt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h4 class="theme-color title">TEKNOLOGI ROSTOCK</h4>
      </div>
    </div>
    <div class="row d-flex justify-content-center px-lg-0 px-md-0 px-5 mt-4 ">

          <div class="col-lg-3 ms-2 text-center bg-dark rounded shadow py-4 my-3">
              <img src="{{ asset('assets/Group8.png') }}" width="80px">
              <h5 class="mt-3 paragraf text-white fw-bold">Corrosion Resistance</h5>
          </div>
          <div class="col-lg-3 ms-2 text-center bg-dark rounded shadow py-4 my-3">
              <img src="{{ asset('assets/Group0.png') }}" width="80px">
              <h5 class="mt-3 paragraf text-white fw-bold">Penetrating Primer</h5>
          </div>
          <div class="col-lg-3 ms-2 text-center bg-dark rounded shadow py-4 my-3">
              <img src="{{ asset('assets/Group00.png') }}" width="80px">
              <h5 class="mt-3 paragraf text-white fw-bold">Surface Tolerant Mastic</h5>
          </div>
          <div class="col-lg-3 ms-2 text-center bg-dark rounded shadow py-4 my-3">
              <img src="{{ asset('assets/Group9.png') }}g" width="80px">
              <h5 class="mt-3 paragraf text-white fw-bold">Chemical Resistant</h5>
          </div>
          <div class="col-lg-3 ms-2 text-center bg-dark rounded shadow py-4 my-3">
              <img src="{{ asset('assets/Group10.png') }}g" width="80px">
              <h5 class="mt-3 paragraf text-white fw-bold">Insulative Performance</h5>
          </div>
          <div class="col-lg-3 ms-2 text-center bg-dark rounded shadow py-4 my-3">
              <img src="{{ asset('assets/Group11.png') }}g" width="80px">
              <h5 class="mt-3 paragraf text-white fw-bold">Water Resistant</h5>
          </div>
      </div>
  </div>
</section>
{{-- end Manfaat1 --}}

{{-- penting --}}
{{-- <section class="pt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h4 class="theme-color title">BERITA/ARTIKEL</h4>
      </div>
    </div>

    <div class="row">
      @if ($new !== null)
      <div class="col-lg-8 col-md-12 mt-4 ">
        <div class="berita konten" style="background-image: url({{URL::to('/berita/image')}}/{{ $new->gambar }})">
         <a href="{{ route('berita.detail', ['id' => $new->id])}}" class="col-7 text-white a-reset">
          @if ($new->category === 'event') 
            <button href="#" class="btn btn-success paragraf text-white shadow-none">EVENT</button>
          @endif
          @if ($new->category === 'berita') 
            <button href="#" class="btn custom-bg paragraf text-white shadow-none">BERITA</button>
          @endif
          @if ($new->category === 'informasi') 
            <button href="#" class="btn btn-primary paragraf text-white shadow-none">INFORMASI</button>
          @endif
          <h4 class="pt-3 fs-5">{{ $new->judul }}</h4>
          <p class="fw-bold paragraf">{{ $new->created_at }}</p>
         </a>
        </div>
        @endif
        <div class="row pt-2">
          @if($data)
          @foreach ($data as $berita)
          <a href="{{ route('berita.detail', ['id' => $berita->id])}}" class="col-6 a-reset">
            <div class="hero1" style="background-image: url({{URL::to('/berita/image')}}/{{ $berita->gambar }})">
            </div>
            <p class="fw-bold paragraf pt-3">{{ $berita->created_at }}</p>
            <p class="paragraf fs-5 fw-bold">{{ $berita->judul }}</p>
            @if ($berita->category === 'event') 
              <button href="#" class="btn btn-success paragraf text-white shadow-none">EVENT</button>
            @endif
            @if ($berita->category === 'berita')
              <button href="#" class="btn custom-bg paragraf text-white shadow-none">BERITA</button>
            @endif
            @if ($berita->category === 'informasi')
              <button href="#" class="btn btn-primary paragraf text-white shadow-none">INFORMASI</button>
            @endif
          </a>
          @endforeach
          @endif
        </div>
      </div>

      <div class="col-lg-4 col-md-12 mt-4">
        @if ($text)
        @foreach ($text as $beritas)
        <a href="{{ route('berita.detail', ['id' => $new->id])}}" class="a-reset">
          <p class="fw-bold paragraf">{{ $berita->created_at }}</p>
          <p class="paragraf fs-5 fw-bold">{{ $berita->judul }}</p>
          @if ($beritas->category === 'event')
            <button href="#" class="btn btn-success paragraf text-white shadow-none">EVENT</button>
          @endif
          @if ($beritas->category === 'berita')
            <button href="#" class="btn custom-bg paragraf text-white shadow-none">BERITA</button>
          @endif
          @if ($beritas->category === 'informasi')
            <button href="#" class="btn btn-primary paragraf text-white shadow-none">INFORMASI</button>
          @endif
          <hr>
        </a>
        @endforeach
        @endif
      </div>
    </div>
  </div>
</section> --}}
{{-- end penting --}}

{{-- about --}}
<section class="bg-gray pt-5 pb-5">
  <div class="container">
    <div class="row">
        <div class="col-12 text-center">
          <h4 class="theme-color title">APA KATA MEREKA</h4>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <!-- Swiper -->
            <div class="swiper mySwiperTesti">
                <div class="swiper-wrapper">
                    <div class="swiper-slide card p-1" style="background-color: white; border: none; border-radius:30px;">
                        <div class="card-body text-center">
                            <div class="rate" >
                                <img src="img/image/usertesti.png" class="rounded-circle img-fluid" width="60px">
                                <p class="body-testi mt-3">
                                <i class="bi bi-quote"></i>
                                    <small class="paragraf">Pengujian Raman di sini membantu saya mendapat data ikatan kimia secara langsung dan cepat. Recommended banget!</small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card p-1" style="background-color: white; border: none; border-radius:30px;">
                        <div class="card-body text-center">
                            <div class="rate" >
                                <img src="img/image/usertesti.png" class="rounded-circle img-fluid" width="60px">
                                <p class="body-testi mt-3">
                                <i class="bi bi-quote"></i>
                                    <small class="paragraf">Pengujian Raman di sini membantu saya mendapat data ikatan kimia secara langsung dan cepat. Recommended banget!</small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card p-1" style="background-color: white; border: none; border-radius:30px;">
                        <div class="card-body text-center">
                            <div class="rate" >
                                <img src="img/image/usertesti.png" class="rounded-circle img-fluid" width="60px">
                                <p class="body-testi mt-3">
                                <i class="bi bi-quote"></i>
                                    <small class="paragraf">Pengujian Raman di sini membantu saya mendapat data ikatan kimia secara langsung dan cepat. Recommended banget!</small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card p-1" style="background-color: white; border: none; border-radius:30px;">
                        <div class="card-body text-center">
                            <div class="rate" >
                                <img src="img/image/usertesti.png" class="rounded-circle img-fluid" width="60px">
                                <p class="body-testi mt-3">
                                <i class="bi bi-quote"></i>
                                    <small class="paragraf">Pengujian Raman di sini membantu saya mendapat data ikatan kimia secara langsung dan cepat. Recommended banget!</small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card p-1" style="background-color: white; border: none; border-radius:30px;">
                        <div class="card-body text-center">
                            <div class="rate" >
                                <img src="img/image/usertesti.png" class="rounded-circle img-fluid" width="60px">
                                <p class="body-testi mt-3">
                                <i class="bi bi-quote"></i>
                                    <small class="paragraf">Pengujian Raman di sini membantu saya mendapat data ikatan kimia secara langsung dan cepat. Recommended banget!</small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card p-1" style="background-color: white; border: none; border-radius:30px;">
                        <div class="card-body text-center">
                            <div class="rate" >
                                <img src="img/image/usertesti.png" class="rounded-circle img-fluid" width="60px">
                                <p class="body-testi mt-3">
                                <i class="bi bi-quote"></i>
                                    <small class="paragraf">Pengujian Raman di sini membantu saya mendapat data ikatan kimia secara langsung dan cepat. Recommended banget!</small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card p-1" style="background-color: white; border: none; border-radius:30px;">
                        <div class="card-body text-center">
                            <div class="rate" >
                                <img src="img/image/usertesti.png" class="rounded-circle img-fluid" width="60px">
                                <p class="body-testi mt-3">
                                <i class="bi bi-quote"></i>
                                    <small class="paragraf">Pengujian Raman di sini membantu saya mendapat data ikatan kimia secara langsung dan cepat. Recommended banget!</small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="swiper-slide card p-1" style="background-color: #ac1221; border: none;">
                        <div class="card-body">
                            <div class="rate" >
                                <i class="bi bi-star-fill" style="color: rgb(240, 236, 7);"></i>
                                <i class="bi bi-star-fill" style="color: rgb(240, 236, 7);"></i>
                                <i class="bi bi-star-fill" style="color: rgb(240, 236, 7);"></i>
                                <i class="bi bi-star-fill" style="color: rgb(240, 236, 7);"></i>
                                <i class="bi bi-star-fill" style="color: rgb(240, 236, 7);"></i>
                                <p class="body-testi mt-3" style="color: white;">
                                    <small>Uji FTIR nya lengkap dan mampu mengidentifikasi senyawa organik dan anorganik di sampel saya, Terimakasih.</small>
                                </p>
                                <div class="detail d-flex judtify-content-between align-items-center">
                                    <div class="user d-flex align-items-center mt-4">
                                        <img src="img/foto/afif.png" class="rounded-circle img-fluid" width="50px">
                                        <div class="profile ms-3">
                                            <p class="name m-0" style="color: white;"><small>Afif</small></p>
                                            <p class="status m-0" style="color: white;"><small>Universitas Gadjah Mada</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card p-1" style="background-color: #ac1221; border: none;">
                        <div class="card-body">
                            <div class="rate" >
                                <i class="bi bi-star-fill" style="color: rgb(240, 236, 7);"></i>
                                <i class="bi bi-star-fill" style="color: rgb(240, 236, 7);"></i>
                                <i class="bi bi-star-fill" style="color: rgb(240, 236, 7);"></i>
                                <i class="bi bi-star-fill" style="color: rgb(240, 236, 7);"></i>
                                <i class="bi bi-star-fill" style="color: rgb(240, 236, 7);"></i>
                                <p class="body-testi mt-3" style="color: white;">
                                        <small>Alat electrospinningnya lengkap dan kompatibel banget. Recommended buat bikin diameter nanofiber yang lebih kecil.</small>
                                </p>
                                <div class="detail d-flex judtify-content-between align-items-center">
                                    <div class="user d-flex align-items-center mt-4">
                                        <img src="img/foto/liaa.png" class="rounded-circle img-fluid" width="50px">
                                        <div class="profile ms-3">
                                            <p class="name m-0" style="color: white;"><small>Lia</small></p>
                                            <p class="status m-0" style="color: white;"><small>Universitas Sebelas Maret</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card p-1" style="background-color: #ac1221; border: none;">
                        <div class="card-body">
                            <div class="rate" >
                                <i class="bi bi-star-fill" style="color: rgb(240, 236, 7);"></i>
                                <i class="bi bi-star-fill" style="color: rgb(240, 236, 7);"></i>
                                <i class="bi bi-star-fill" style="color: rgb(240, 236, 7);"></i>
                                <i class="bi bi-star-fill" style="color: rgb(240, 236, 7);"></i>
                                <i class="bi bi-star-fill" style="color: rgb(240, 236, 7);"></i>
                                <p class="body-testi mt-3" style="color: white;">
                                    <small>Kondisi alat LAB di Nano Center terawat banget, terbukti hasil ujinya yang berkualitas. Terima kasih NCI sukses selalu!</small>
                                </p>
                                <div class="detail d-flex judtify-content-between align-items-center">
                                    <div class="user d-flex align-items-center mt-4">
                                        <img src="img/foto/oji.jpg" class="rounded-circle img-fluid" width="50px">
                                        <div class="profile ms-3">
                                            <p class="name m-0" style="color: white;"><small>Fahroji</small></p>
                                            <p class="status m-0" style="color: white;"><small>Universitas Airlangga</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
  </div>
</section>
{{-- end about --}}

{{-- about --}}
<section class="pt-5 pb-5">
  <div class="container">
    <div class="row">
        <div class="col-12 text-center">
          <h4 class="theme-color title">KLIENN KAMI</h4>
        </div>
    </div>
    <div class="row">
      <div class="col-lg-2 col-sm-6 col-md-4 text-center">
        <div class="profile mb-3 mt-4">
        <img src="img/image/Ellipse5.png" width="40">
          <div class="">
              <p class="m-0 ms-2 paragraf fw-bold mt-2">Logo Company1</p>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6 col-md-4 text-center">
        <div class="profile mb-3 mt-4">
        <img src="img/image/Ellipse5.png" width="40">
          <div class="">
              <p class="m-0 ms-2 paragraf fw-bold mt-2">Logo Company2</p>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6 col-md-4 text-center">
        <div class="profile mb-3 mt-4">
        <img src="img/image/Ellipse5.png" width="40">
          <div class="">
              <p class="m-0 ms-2 paragraf fw-bold mt-2">Logo Company3</p>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6 col-md-4 text-center">
        <div class="profile mb-3 mt-4">
        <img src="img/image/Ellipse5.png" width="40">
          <div class="">
              <p class="m-0 ms-2 paragraf fw-bold mt-2">Logo Company4</p>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6 col-md-4 text-center">
        <div class="profile mb-3 mt-4">
        <img src="img/image/Ellipse5.png" width="40">
          <div class="">
              <p class="m-0 ms-2 paragraf fw-bold mt-2">Logo Company5</p>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6 col-md-4 text-center">
        <div class="profile mb-3 mt-4">
        <img src="img/image/Ellipse5.png" width="40">
          <div class="">
              <p class="m-0 ms-2 paragraf fw-bold mt-2">Logo Company6</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- end about --}}
@endsection