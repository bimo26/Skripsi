@extends('layouts.dashboard.master')

@section('page-title', 'Petunjuk Penggunaan')

@section('title')
  <h4 class="text-center mb-3">Petunjuk Penggunaan</h4>
@endsection

@section('content')
  <div>
    <ol>
      <div class="d-flex justify-content-center align-items-center pt-3 pb-2" style="padding-right: 2rem;">
        <img src="{{ asset('images/petunjuk/dashboard.jpg') }}" alt="Dashboard Admin" style="max-height: 300px; border: 2px solid rgb(69, 69, 69);" class="img-fluid">
      </div>
      <li class="pb-2">
        <p>Halaman Utama menyajikan menu ke petunjuk penggunaan dan memulai perhitungan. Petunjuk penggunaan menampilkan bagaimana cara menggunakan aplikasi dan memulai perhitungan melanjutkan step-step ke perhitungan.</p>
      </li>
      <div class="d-flex justify-content-center align-items-center pt-3 pb-2" style="padding-right: 2rem;">
        <img src="{{ asset('images/petunjuk/kriteria.jpg') }}" alt="Kriteria" style="max-height: 300px; border: 2px solid rgb(69, 69, 69);" class="img-fluid">
      </div>
      <li class="pb-2">
        <p>Pada Halaman Kriteria terdapat data-data kriteria. Kriteria merupakan parameter-parameter yang berpengaruh terhadap layak atau tidaknya siswa mendapatkan beasiswa. Dalam menentukan kriteria, sebelumnya sudah dilakukan wawancara dengan pihak sekolah terhadap kriteria-kriteria tersebut.</p>
      </li>
      <div class="d-flex justify-content-center align-items-center pt-3 pb-2" style="padding-right: 2rem;">
        <img src="{{ asset('images/petunjuk/subkriteria.jpg') }}" alt="Subkriteria" style="max-height: 300px; border: 2px solid rgb(69, 69, 69);" class="img-fluid">
      </div>
      <li class="pb-2">
        <p>Pada Halaman Subkriteria terdapat data yang dibutuhkan untuk perhitungan berdasarkan range kriteria yang sudah ditetapkan sebelumnya.</p>
      </li>
      <div class="d-flex justify-content-center align-items-center pt-3 pb-2" style="padding-right: 2rem;">
        <img src="{{ asset('images/petunjuk/alternatif.jpg') }}" alt="Alternatif" style="max-height: 300px; border: 2px solid rgb(69, 69, 69);" class="img-fluid">
      </div>
      <li class="pb-2">
        <p>Pada Halaman Alternatif terdapat semua data siswa yang dijadikan calon untuk menjadi penerima beasiswa. Beasiswa ini merupakan beasiswa prestasi yang lebih memprioritaskan prestasi akademik maupun non-akademik.</p>
      </li>
      <div class="d-flex justify-content-center align-items-center pt-3 pb-2" style="padding-right: 2rem;">
        <img src="{{ asset('images/petunjuk/nilai_bobot.jpg') }}" alt="Nilai Bobot" style="max-height: 300px; border: 2px solid rgb(69, 69, 69);" class="img-fluid">
      </div>
      <li class="pb-2">
        <p>Pada Halaman Nilai Bobot terdapat data asli yang didapat dari laporan akademik semua alternatif siswa yang sudah diubah sesuai dengan data kriteria dan subkriteria yang sudah ditentukan.</p>
      </li>
      <div class="d-flex justify-content-center align-items-center pt-3 pb-2" style="padding-right: 2rem;">
        <img src="{{ asset('images/petunjuk/saw.jpg') }}" alt="SAW" style="max-height: 300px; border: 2px solid rgb(69, 69, 69);" class="img-fluid">
      </div>
      <li class="pb-2">
        <p>Pada Halaman Hasil SAW terdapat hasil perankingan dengan menggunakan metode Simple Additive Weighting sesuai dengan data yang diolah sebelumnya. Hasil perankingan diurutkan dari yang terbaik ke terburuk. Hasil inilah yang digunakan user sebagai bahan pertimbangan bahan pertimbangan pemilihan siswa yang mendapatkan beasiswa.</p>
      </li>
      <div class="d-flex justify-content-center align-items-center pt-3 pb-2" style="padding-right: 2rem;">
        <img src="{{ asset('images/petunjuk/wp.jpg') }}" alt="WP" style="max-height: 300px; border: 2px solid rgb(69, 69, 69);" class="img-fluid">
      </div>
      <li class="pb-2">
        <p>Pada Halaman Hasil WP terdapat hasil perankingan dengan menggunakan metode Weighting Product sesuai dengan data yang diolah sebelumnya. Hasil perankingan diurutkan dari yang terbaik ke terburuk. Hasil inilah yang digunakan user sebagai bahan pertimbangan pemilihan siswa yang mendapatkan beasiswa.</p>
      </li>
    </ol>
  </div>
@endsection
