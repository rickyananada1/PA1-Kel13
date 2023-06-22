<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Meta;
use Carbon\Carbon;

class MetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Meta::create([
        'meta_name'=>'kontak',
        'judul'=>'KONTAK',
        'deskripsi'=>'<div class="bg-light py-5">
        <div class="container"><div class="row"><div class="col-lg-4 col-md-6 col-12 mt-4 pt-2"><div class="team text-center rounded p-3 py-4"><img src="https://cdn-icons-png.flaticon.com/512/6395/6395240.png" width="200px" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="">
                        <div class="content mt-3">
                            <h4 class="title mb-0">ALAMAT</h4>
                            <small class="text-muted">(Senin - Jumat, Pukul 10.00 - 16.00 Waktu Setempat)</small>
                            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Balige II,Kec Balige,Toba,Sumut</p>
    
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="team text-center rounded p-3 py-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/724/724664.png" width="200px" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="">
                        <div class="content mt-3">
                            <h4 class="title mb-0">TELEPHONE</h4>
                            <small class="text-muted">(Senin - Jumat, Pukul 10.00 - 16.00 Waktu Setempat)</small>
                            <!-- <small>untuk melalui WA,</small> <br>
                            <a class="btn btn-square btn-black rounded-circle me-2" href=""><i class="fab fa-whatsapp"></i>+62 852-7015-3429</a> <br>
                            <small>untuk melalui Telepon Seluler,</small>
                            <a class="btn btn-square btn-black rounded-circle me-2" href=""><i class="fab fa-whatsapp"></i>+62 852-2322-55429</a> <br> -->
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="team text-center rounded p-3 py-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/2250/2250206.png" width="200px" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="">
                        <div class="content mt-3">
                            <h4 class="title mb-0">EMAIL</h4>
                            <small class="text-muted">(Senin - Jumat, Pukul 10.00 - 16.00 Waktu Setempat)</small>
                            <!-- <small>Staff Kantor Kepala Desa</small> <br>
                            <a class="btn btn-square btn-black rounded-circle me-2" href=""><i class="fa-regular fa-envelope"></i>    kantorkepaladesabalige2@gmail.com</a> <br>
                            <small>Kepala Desa Balige II</small>
                            <a class="btn btn-square btn-black rounded-circle me-2" href=""><i class="fa-regular fa-envelope"></i>    kimbebpaff@gmail.com</a> <br> -->
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
    
            
            </div>
    </div>',
    'created_at' => Carbon::now(),
       ]);
       Meta::create([
        'meta_name'=>'profile-desa',
        'judul'=>'Profile Desa',
        'deskripsi'=>'<div class="bg-light py-5">
        <div class="col-lg-8 col-xl-6 text-start">
            <h2 class="ms-sm-5"></h2>
        </div>
        <div class="container">
        <p>Desa Balige II adalah salah satu desa dari 29 desa yang ada di Kecamatan Balige Kabupaten Toba dengan luas wilayah 
            0,61 Ha atau sekitar 0,58 dari rasio luas Kecamatan Balige dengan struktur tanah dataran rendah sehingga memudahkan pembuatan jarigar 
            irigasi untuk menunjang pola pertanian teknis.</p>
    
        <p>Penduduk Desa Balige II Mayoritas adalah suku Batak, dengan terikat pada norma norma kehidupan adat dan budaya. 
            Hal ini membawa dampak kehidupan masyarakat Desa Desa Balige II hidup dalam ritual/upacara adat seperti kelahiran, 
            kematian, pernikahan yang senantiasa berbarengan dengan seni budaya batak disetiap upacara. Masyarakat batak juga 
            hidup dalam suasana kekeluargaan dan gotong royong yang tertuang dalam slogan Dalihan Natolu Sedangkan ditinjau dari kepercayaan, 
            masyarakat Balige II mayoritas memeluk agama kristen.</p>
    
        <p>Masyarakat Desa Balige II mayoritas bermata pencaharian sebagai petani, mengingat pemanfaatan lahan terbesar adalah untuk pertanian 
            disamping perladangan dan peternakan/perikanan.</p><p><br></p><p>Sebagai dokumen perencanaan yang menjabarkan dan Dokumen RPJM Desa, maka seluruh rencana program dan kegiatan pembangunan yang akan dilakukan oleh Desa secara bertahap dan berkesinambungan harus dapat menghantarkan tercapainya Visi-Misi Kepala Desa</p><p>Visi Msi Kepala Desa Balige II disamping merupakan Visi-Misi Kepala Desa Terpilih, juga dintegrasikan dengan keinginan bersama masyarakat desa untuk mengatasi permasalahan yang ada dan pengembangan Desa ke depan, dimana proses penyusunannya dilakukan secara partisipatif mulai dari tingkat Dusun/RW sampai tingkat Desa.<br>Adapun Visi Kepala Desa Balige II sebagai berikut:</p><p><br></p><h3 class="text-center">"VISI DAN MISI"</h3><p><br></p><h3 class="text-center">"GOTONG RONYONG MEMBANGUN DESA BALIGE II YANG JUJUR DAN ADIL,SEJAHTERA BERBUDANYA DAN BERALLAK MULIA"</h3><p>Misi merupakan tujuan jangka lebih pendek dari visi yang menunjang keberhasilan tercapainya sebuah visi. Penjabaaran dari visi ini diharapkan dapat mengikuti dan mengatisipasi setiap terjadinya perubahan lingkungan di masa yang akan datang dari usaha-usaha mencapai Visi Desa Balige II. Dalam meraih Visi Desa Balige II, seperti yang sudah dijabarkan di atas dengan mempertimbangkan potensi dan hambatan baik internal maupun eksternal, maka disusunlah Misi Desa Balige II, diantaranya:</p><ol><li>Mewujudkan dan mengembangkan kegiatan keagamaan untuk menambah keimanan dan ketaqwaan kepada Tuhan Yang Maha Esa;</li><li>Membangun dan Meningkatkan hasil pertanian dengan jalan penataan pengairan, perbaikan/pembukaan jalan sawah / jalan usaha tani, pola pemupukan dan tanam serentak yang baik;</li><li>Membangun dan meningkatkan Laju Transportasi Desa melalui Pembangunan Rehab/ Pembukaan Jalan desa atau dusun;</li><li>Mewujudkan Tata Kelola Pemerintahan Desa yang baik;</li><li>Meningkatkan Pelayanan Pemenuhan Hak-hak Dasar Rakyat;</li><li>Meningkatkan kuantitas dan kualitas Sarana dan Prasarana Infrastruktur Desa;</li><li>Menumbuhkan peran serta masyarakat dalam Perencanaan Pelaksanaan Pembangunan serta Palestarian Pembangunan itu sendir</li><li>Menumbuhkan peran serta Masyarakat dalam Perencanaan, Pelaksanaan Pembangunan serta Polestarian Pembangunan itu sendiri:</li><li>Peningkatan Kualitas Sumber Daya Manusia,</li><li>Membangun dan mendorong usaha-usaha untuk pengambangan dan optimalisasi sektor pertanian, peternakan dan kewirausahaan;</li><li>Peningkatan Sumber Daya Alam</li></ol>
        </div>
    </div>',
    'created_at' => Carbon::now(),
       ]);
       Meta::create([
        'meta_name'=>'geografis-desa',
        'judul'=>'Geografis Desa',
        'deskripsi'=>'<div class="bg-light py-5">
        <div class="col-lg-8 col-xl-6 text-start">
            <h2 class="ms-sm-5"></h2>
        </div>
        <div class="container">
        <div class="row w-100">
            <div class="col-lg-6 my-4">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7973.013954056606!2d99.06647807327083!3d2.334496443194417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e0468554182f1%3A0xebee2755c36e59a!2sBalige%20II%2C%20Kec.%20Balige%2C%20Toba%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1680413545431!5m2!1sid!2sid" class="w-100" height="400" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-lg-6 my-4 d-flex align-items-center">
              <div>
                <p>Desa Balige I adalah salah satu desa dari 29 desa yang ada di Kecamatan Balige Kabupaten Toba dengan luas wilayah 
                    0,61 Ha atau sekitar 0,58 dan rasio luas Kecamatan. Balige dengan struktur tanah dataran rendah sehingga memudahkan 
                    pembuatan jarigan Irigasi untuk menunjang pola pertanian teknis. Desa Balige II terdiri dari dua dusun yakni: Dusun 1 dan Dusun 2 dan. 
                    Jarak tempuh ke Ibukota Kecamatan sejauh 1 km dengan lama tempuh sekitar 10 menit. Desa Balige II terletak pada ketinggian antara ± 
                    1.200 meter diatas permukaan laut dan terletak di jalur lalu lintas antara Kecamatan Laguboti dan Kecamatan Tampahan.</p>
                    <h6>Desa Balige II memiliki batas batas sebagai berikut:</h6>
                    <ul>
                        <li> Sebelah Timur
                            : Berbatasan dengan Desa Sibalahotang Sas, Desa Paindoan</li>
                        <li>Sebelah Barat
                            : Berbatasan dengan Desa Paindoan, Kelurahan Balige III dan
                            Kelurahan Balige!</li>
                        <li> Sebelah Utara
                            Kelurahan Balige I</li>
                        <li>Sebelah Selatan
                            Desa Lumban Gorat, Desa Paindoan dan Kelurahan Balige III</li>
                    </ul>
                    
                 <p>Keseharian masyarakat Desa Balige II mayoritas adalah bercocok tanam, berkebun dan berternak (Babi, Ayam, Bebek, ), buruh bangunan, berdagang dan lainnya. Masyarakat umumnya sudah aktif mengolah lahan pertanian dan Perkebunan dengan menanam Padi dan jagung dengan menggunakan cara yang cukup baik.</p>
                <p></p>
              </div>
            </div>
          </div>
        </div>
    </div>',
    'created_at' => Carbon::now(),
       ]);
       Meta::create([
        'meta_name'=>'sejarah-desa',
        'judul'=>'SEJARAH DESA',
        'deskripsi'=>'<div class="bg-light py-5">
        <div class="col-lg-8 col-xl-6 text-start">
        </div>
        <div class="container">
            <p>
                Desa Balige II memiliki sejarah yang kaya dan berakar dalam kehidupan adat dan budaya suku Batak. Sejak dahulu, penduduk desa ini 
                telah hidup dalam norma-norma kehidupan adat dan budaya yang mengikat mereka. Ritual dan upacara adat, seperti kelahiran, kematian, 
                dan pernikahan, selalu dilakukan dengan diiringi seni budaya Batak yang khas. Masyarakat desa ini juga menjunjung tinggi nilai 
                kekeluargaan dan gotong royong, yang tercermin dalam slogan mereka, Dalihan Natolu. 
            </p>
            <p>
                Selain itu, dalam hal kepercayaan, mayoritas penduduk Desa Balige II memeluk agama Kristen. Pengaruh agama ini telah mempengaruhi 
                kehidupan dan kepercayaan masyarakat desa selama berabad-abad.
            </p>
            <p>
                Dalam bidang ekonomi, mayoritas masyarakat Desa Balige II menggantungkan mata pencahariannya sebagai petani. 
                Pertanian menjadi sektor utama di desa ini, dengan pemanfaatan lahan yang luas untuk kegiatan pertanian, perladangan, 
                serta peternakan dan perikanan. Kehidupan ekonomi desa ini telah bergantung pada hasil bumi dan sumber daya alam yang ada 
                di sekitarnya sejak lama.
            </p>
            <p>
                Secara keseluruhan, Desa Balige II memiliki sejarah yang kaya dalam hal kehidupan adat dan budaya suku Batak, 
                di mana ritual dan upacara adat, kehidupan kekeluargaan, serta mata pencaharian sebagai petani telah menjadi bagian 
                integral dari kehidupan masyarakat desa selama bertahun-tahun.
            </p>
    </div>
    </div>',
    'created_at' => Carbon::now(),
       ]);
       Meta::create([
        'meta_name'=>'struktur-desa',
        'judul'=>'Struktur Desa',
        'deskripsi'=>'<div class="bg-light py-5">
        <div class="col-lg-8 col-xl-6 text-start">
        </div>
        <div class="container">
            <p>
                Desa Balige II memiliki sejarah yang kaya dan berakar dalam kehidupan adat dan budaya suku Batak. Sejak dahulu, penduduk desa ini 
                telah hidup dalam norma-norma kehidupan adat dan budaya yang mengikat mereka. Ritual dan upacara adat, seperti kelahiran, kematian, 
                dan pernikahan, selalu dilakukan dengan diiringi seni budaya Batak yang khas. Masyarakat desa ini juga menjunjung tinggi nilai 
                kekeluargaan dan gotong royong, yang tercermin dalam slogan mereka, Dalihan Natolu. 
            </p>
            <p>
                Selain itu, dalam hal kepercayaan, mayoritas penduduk Desa Balige II memeluk agama Kristen. Pengaruh agama ini telah mempengaruhi 
                kehidupan dan kepercayaan masyarakat desa selama berabad-abad.
            </p>
            <p>
                Dalam bidang ekonomi, mayoritas masyarakat Desa Balige II menggantungkan mata pencahariannya sebagai petani. 
                Pertanian menjadi sektor utama di desa ini, dengan pemanfaatan lahan yang luas untuk kegiatan pertanian, perladangan, 
                serta peternakan dan perikanan. Kehidupan ekonomi desa ini telah bergantung pada hasil bumi dan sumber daya alam yang ada 
                di sekitarnya sejak lama.
            </p>
            <p>
                Secara keseluruhan, Desa Balige II memiliki sejarah yang kaya dalam hal kehidupan adat dan budaya suku Batak, 
                di mana ritual dan upacara adat, kehidupan kekeluargaan, serta mata pencaharian sebagai petani telah menjadi bagian 
                integral dari kehidupan masyarakat desa selama bertahun-tahun.
            </p>
    </div>
    </div>',
    'created_at' => Carbon::now(),
       ]);
    }
}
