const data = [
  {
    content : `
      <h2>Sistem Pendukung Keputusan</h2>
      <p>Sistem pendukung keputusan adalah suatu sistem informasi spesifik yang ditujukan untuk membantu manajemen dalam mengambil keputusan yang berkaitan dengan persoalan yang bersifat semi terstruktur. Sistem ini memiliki fasilitas untuk menghasilkan berbagai alternatif yang secara interaktif digunakan oleh pemakai.</p>
    `,
    image : 'images/homepage/content/spk-content.svg',
    alt : 'Logo Content SPK'
  },
  {
    content : `
      <h2>Metode WP dan SAW</h2>
      <p>Metode <i>Weighted Product</i> (WP) adalah salah satu metode pengambilan keputusan untuk menyelesaikan suatu masalah dengan menggunakan perkalian untuk menghubungkan rating atribut, dimana rating setiap atribut harus dipangkatkan dulu dengan bobot atribut yang bersangkutan.</p>'
      <p>Metode <i>Simple Additive Weigthing</i> (SAW) kerap disebut dengan istilah metode penjumlahan terbobot. Metode ini mempunyai konsep dasar mencari penjumlahan terbobot dari ranting kinerja disetiap alternative disemua atributnya.</p>`,
    image : 'images/homepage/content/method-content.svg',
    alt : 'Logo Content Metode'
  },
  {
    content : `
      <h2>Beasiswa</h2>
      <p>beasiswa adalah tunjangan yang diberikan kepada pelajar atau mahasiswa sebagai bantuan biaya belajar, dapat berupa beasiswa penuh (full scholarship), beasiswa sebagian (partial scholarship) atau bantuan fasilitas tertentu saja yang menunjang pembelajaran.</p>
    `,
    image : 'images/homepage/content/saham-content.svg',
    alt : 'Logo Content Saham'
  },
  {
    content : `
      <h2>Beasiswa Prestasi</h2>
      <p>Mendapatkan Beasiswa harus melewati berbagai syarat agar tepat sasaran, Beasiswa prestasi berfokus pada prestasi siswa baik akademik maupun non akademik.</p>
    `,
    image : 'images/homepage/content/jii-content.svg',
    alt : 'Logo Content JII 70'
  },
];

function selectedMenu(key) {
  const BASE_URL = window.location.origin;
  const contentText = document.querySelector('.dynamic-content-text');
  const contentImage = document.querySelector('.dynamic-content-image');

  const selectedData = data[key];
  
  contentText.innerHTML = selectedData.content;
  contentImage.innerHTML = `<img src="${BASE_URL}/${selectedData.image}" alt="${selectedData.alt}" class="img-fluid">`;
}