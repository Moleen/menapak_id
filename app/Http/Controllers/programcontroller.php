<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class programcontroller extends Controller
{
    
    public function program(){
         $program = [
            'title' => 'Program',
            'Image' => null,
            'content' => '<p>
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
          </p>'
        ] ;
        return view('program', ['program' => $program]);
    }

    public function penelitian(){
      $penelitian = [
        'title' => 'Penelitian',
        'image' => 'img/3.jpg',
        'content' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>'
      ];
      return view('penelitian', ['penelitian' => $penelitian]);
    }
}
