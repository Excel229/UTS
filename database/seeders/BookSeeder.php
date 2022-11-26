<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('books')->insert([
            [
                'publisher_id' => '1',
                'title' => 'Kita Pergi Hari Ini',
                'author' => 'Ziggy Zezsyazeoviennazabrizkie',
                'year' => '2021',
                'synopsis' => 'Mi dan Ma dan Mo tidak pernah melihat
                kucing seperti Nona Gigi. Tentu saja, mereka sudah pernah melihat kucing biasa.
                Tapi Nona Gigi adalah Kucing Luar Biasa. Kucing Luar Biasa berarti kucing
                yang di luar kebiasaan. Nona Gigi adalah Cara Lain yang dinantikan oleh Bapak dan Ibu
                Mo untuk menjaga Mi, Ma, dan Mo ketika keduanya keluar rumah mencari uang.<br><br>

                Sebab di Kota Suara, semua uang yang tersedia di dasar laut sudah diambil oleh para perompak,
                uang di bawah tanah diambil oleh para perampok, dan uang di ranting pohon diambil oleh pengusaha
                kayu yang jahat.<br><br>

                Nona Gigi mengajak Mi dan Ma dan Mo dan Fifi dan Fufu—anak kembar Tetangga Baru bertualang mengunjungi
                tempat-tempat indah. Mereka naik Kereta Air, bertemu Kolonel Jagung, bermain di Sirkus Sendu,
                dan menyaksikan kemegahan Kota Terapung Kucing Luar Biasa.
                Kita pergi hari ini ke tempat-tempat indah dalam mimpi-mimpi anak-anak baik-baik',
                'image' => 'kitapergihariini.jpeg'
            ],
            [
                'publisher_id' => '1',
                'title' => 'Cerita-cerita Bahagia Hampir Seluruhnya',
                'author' => 'Norman Erikson Pasaribu',
                'year' => '2020',
                'synopsis' => 'Setelah anak tunggalnya meninggal, seorang ibu pergi ke Vietnam
                karena cerita-cerita yang ia temukan di Wikipedia. Seorang penyair muda mengikuti
                petunjuk di milis untuk menyintas patah hati. Seorang mahasiswa rantau dihantui sebuah
                cerita pendek yang ia temukan di buletin komunitas gay di kotanya.<br><br>

                Pada cerita-cerita dalam buku ini, kita akan menemukan bagaimana kisah-kisah lama ikut
                mengatur arah dan mekanisme kehidupan kita.<br><br>

                Ceria, berubah-berubah bentuk, dan penuh emosi, Cerita-cerita Bahagia Hampir
                Seluruhnya adalah kumpulan dua belas cerita yang tidak mengikuti norma yang ada.
                Terinspirasi oleh konsep Simone Weil, juga penggunaan elemen budaya Batak dan Kristen,
                kisah-kisah ini menempatkan karakter aneh dalam situasi dan plot yang biasanya diisi
                oleh karakter hetero.<br><br>

                Cerita-cerita itu berbicara satu sama lain, berbicara frasa dan tema.
                Bahkan kepingan cerita dalam cerita lain, melintas di antara bandara,
                tumpukan majalah gaya hidup pria dan kenangan Toy Story 3, sehingga masing-masing
                hampir terasa seperti potongan puzzle yang lebih besar. Dengan alur yang cepat
                namun pedih, buku ini menyatukan keajaiban realism dan keseharian yang normal.',
                'image' => 'ceritaceritabahagia.jpeg'
            ],
            [
                'publisher_id' => '1',
                'title' => 'The Star and I',
                'author' => 'Ilana Tan',
                'year' => '2021',
                'synopsis' => 'Kulihat dunia dalam matamu dan masa depan dalam senyummu..."
                Sejak kecil, Olivia Mitchell ingin tahu siapa orangtua kandungnya. Jadi,
                ketika ia mendapat kesempatan bekerja di New York, ia pun menyambarnya tanpa ragu.
                Namun, mencari seseorang tanpa nama di kota sebesar New York adalah sesuatu yang
                mustahil. Kini kontrak kerja Olivia akan segera berakhir, dan Olivia menolak pulang
                ke Inggris sebelum berhasil melacak keberadaan orang tua kandungnya. Itu berarti
                ia harus segera mencari pekerjaan baru supaya ia bisa tetap tinggal di New York.
                Seolah-olah semua itu belum cukup memusingkan, Olivia mendadak bertemu kembali dengan
                Rex Rankin---sahabat masa kecilnya, sekaligus cinta pertamanya yang gagal---yang muncul
                untuk menawarkan bantuan.',
                'image' => 'thestarandi.jpeg'
            ],
            [
                'publisher_id' => '2',
                'title' => 'Bibi Gill',
                'author' => 'Tere Liye',
                'year' => '2022',
                'synopsis' => 'Buku ke-12 dari serial BUMI karya Tere Liye ini menceritakan asal
                usul Bibi Gill dan perjalanannya setelah ia bertemu N-ou. Masa lalu Gill yang kelam dan
                terbentuk oleh berbagai emosi serta rasa penasaran ke mana perginya kebahagiaan yang
                telah direnggut darinya, membawa Gill bertemu dengan karakter-karakter lainnya.
                Pertanyaan serta emosi Gill terjawab seiring berjalannya petualangan Gill dengan Pak
                Tua dan Si Putih yang terpisah dari N-ou.<br><br>

                Bagaimana menjadi petarung terkuat di dunia paralel? Dengan latihan panjang dan
                pengorbanan. Termasuk kehilangan dan kesedihan. Inilah kisah tentang Bibi Gill,
                yang sejak kecil berusaha mengalahkan "monster" dalam hidupnya.
                Apakah dia bisa menemukan jawaban yang selama ini dia cari?<br><br>

                Hei, jika kalian melihat seseorang yang amat sederhana, seperti ibu-ibu penjaga kantin,
                tukang sapu, sopir ojek online. Jangan buru-buru menilainya memang sesederhana itu.
                Boleh jadi dia adalah pemilik teknik bertarung paling mematikan di dunia paralel.
                Baca kisah menakjubkan ini di serial Bumi karya Tere Liye.',
                'image' => 'bibigill.jpeg'
            ],
            [
                'publisher_id' => '2',
                'title' => 'Bedebah Di Ujung Tanduk',
                'author' => 'Tere Liye',
                'year' => '2021',
                'synopsis' => 'Di Negeri Para Bedebah, pencuri, perampok, bagai musang berbulu domba.
                Di depan, wajah mereka tersenyum penuh pencitraan. Di belakang penuh tipu-tipu.<br><br>

                Di Negeri di Ujung Tanduk, pencuri, perampok, berkeliaran menjadi penegak hukum. Di depan,
                di belakang, mereka tidak malu-malu lagi.<br><br>

                Tapi setidaknya, Kawan, dalam situasi apapun, petarung sejati akan terus memilih kehormatan
                hidupnya. Bahkan ketika nasib di ujung tanduk. Dia akan terus bertarung habis-habisan,
                bersama sahabat sejati. Karena esok, matahari akan terbit sekali lagi. Bersama harapan.',
                'image' => 'berdebahdiujungtanduk.jpeg'
            ]
        ]);
    }
}
