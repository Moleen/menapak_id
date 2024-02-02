<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/program.css')}}" />
    <title>Document</title>
  </head>
  @include('component.navbar')
  <body>
    <div class="program">
      <h1>Program Menapak</h1>
      <!-- loop untuk paragraf yang ingin ditambahkan -->
      <div class="listparagraf">
      <p>
        ▪ Pemetaan Spasial: Menapak Indonesia melakukan pemetaan spasial untuk
        berbagai keperluan, seperti pemetaan wilayah, pemetaan infrastruktur,
        pemetaan risiko bencana, dan pemetaan potensi sumber daya alam.
      </p>
      <p>
        ▪ Analisis Data Geospasial: Lembaga ini melakukan analisis data
        geospasial untuk menghasilkan informasi yang berharga dalam pengambilan
        keputusan, seperti analisis pola spasial, pemodelan kerentanan, dan
        analisis ketersediaan sumber daya.
      </p>
      <p>
        ▪ Pengembangan Aplikasi Geografis: GeoSpatialTech mengembangkan aplikasi
        dan sistem informasi geografis (SIG) yang memudahkan akses dan
        penggunaan data geospasial (webgis, Sistem informasi desa dan aplikasi
        pemetaan biodiversity).
      </p>
      <p>
        ▪ Pelatihan Pemetaan Spasial: Lembaga ini menyelenggarakan pelatihan dan
        workshop tentang pemetaan spasial, termasuk penggunaan perangkat lunak
        pemetaan dan teknik pemetaan terkini.
      </p>
      <p>
        ▪ Konservasi Hutan: Lembaga ini berfokus pada pemeliharaan dan restorasi
        hutan, termasuk penanaman pohon, pemantauan keanekaragaman hayati, dan
        perlindungan spesies langka.
      </p>
      <p>
        ▪ Pengembangan potensi Wisata: Menapak Indonesia mengembangkan objek
        wisata alam yang berkelanjutan, seperti jalur hiking, area perkemahan,
        dan fasilitas pendukung lainnya, untuk meningkatkan daya tarik dan
        kualitas pengalaman pengunjung.
      </p>
      <p>
        ▪ Program Pendidikan Lingkungan: Lembaga ini menyelenggarakan program
        pendidikan lingkungan di sekolah-sekolah dan komunitas sekitar, untuk
        meningkatkan kesadaran dan pemahaman tentang pentingnya menjaga hutan
        dan lingkungan.
      </p>
      <p>
        ▪ Pemberdayaan Masyarakat: Menapak Indonesia melibatkan masyarakat dalam
        pengelolaan hutan dan wisata, memberikan pelatihan dan peluang kerja,
        serta mendukung usaha mikro dan kecil di sekitar area wisata.
      </p>
      </div>
      <!-- end loop -->
    </div>
    @include('component.footer')
  </body>
</html>
