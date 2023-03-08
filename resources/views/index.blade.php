@extends('layouts.master')

@section('page-title', 'Homepage')

@section('content')
  <section id="homepage-content">
    <div class="jumbotron-container">
      <div class="jumbotron-image" style="background-image: url('{{ asset('images/sma.jpg') }}');"></div>
      <div class="jumbotron-cover"></div>
      <div class="jumbotron-content">
        <h1 class="text-center mb-3"><b>Sistem Pendukung Keputusan Beasiswa SMAN 1 Banguntapan</b></h1>
        <h4 class="text-center mb-5">
          
        <div class="jumbotron-menu">
          <a href="#menu-content"><button class="btn btn-primary">Pengantar</button></a>
          <a href="{{ route('dashboard.index') }}"><button class="btn btn-success ms-3">Perhitungan</button></a>
        </div>
      </div>
    </div>
  </section>
  <section id="menu-content">
    <div class="container">
      {{-- Menu --}}
      <h1 class="text-center my-4">Menu</h1>
      <div class="menu-button-container">
        <button class="card border d-flex justify-content-center align-items-center" onclick="selectedMenu(0)">
          <div class="card-body custom-card-homepage">
            <img src="{{ asset('images/homepage/icons/AI.png') }}" alt="Logo SPK">
            <p class="text-center mt-3">Sistem Pendukung Keputusan</p>
          </div>
        </button>
        <button class="card border d-flex justify-content-center align-items-center" onclick="selectedMenu(1)">
          <div class="card-body custom-card-homepage">
            <img src="{{ asset('images/homepage/icons/metode.png') }}" alt="Logo Metode">
            <p class="text-center mt-3">Metode WP & SAW</p>
          </div>
        </button>
        <button class="card border d-flex justify-content-center align-items-center" onclick="selectedMenu(2)">
          <div class="card-body custom-card-homepage">
            <img src="{{ asset('images/homepage/icons/Beasiswa.jpg') }}" alt="Logo Saham dan Saham Syari'ah">
            <p class="text-center mt-3">Beasiswa</p>
          </div>
        </button>
        <button class="card border d-flex justify-content-center align-items-center" onclick="selectedMenu(3)">
          <div class="card-body custom-card-homepage">
            <img src="{{ asset('images/homepage/icons/Beasiswa Prestasi.png') }}" alt="Logo JII 70">
            <p class="text-center mt-3">Beasiswa prestasi</p>
          </div>
        </button>
      </div>
      {{-- Content --}}
      <div class="card m-0 border shadow-none p-3 bg-white dynamic-content">
        <div class="row gy-4">
          <div class="col-lg-8 order-2 order-lg-1 dynamic-content-text">
            <h2 class="mb-3">Sistem Pendukung Keputusan</h2>
            <p>Sistem pendukung keputusan adalah suatu sistem informasi spesifik yang ditujukan untuk membantu manajemen
              dalam mengambil keputusan yang berkaitan dengan persoalan yang bersifat semi terstruktur. Sistem ini
              memiliki fasilitas untuk menghasilkan berbagai alternatif yang secara interaktif digunakan oleh pemakai.</p>
          </div>
          <div class="col-lg-4 order-1 order-lg-2 dynamic-content-image">
            <img src="{{ asset('images/homepage/content/spk-content.svg') }}" alt="Logo Content SPK" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('custom-javascript')
  <script src="{{ asset('js/homepage/index.js') }}"></script>
@endsection
