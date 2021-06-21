# PRAKTIKUM PEMROGRAMAN WEB

## Praktikum Pertemuan 12 & 13

Praktikum dilakukan dengan modul praktikum yang sudah disediakan.

- File praktikum terdapat pada folder **lab11_ci**.
- Terdapat 2 praktikum dalam repositori ini (**Praktikum 11 & Praktikum 12**).
- Praktikum 11 dimulai dari [sini](#praktikum_11).
- Praktikum 12 dimulai dari [sini](#praktikum_12).

<h1 id="praktikum_11">PRAKTIKUM 11</h1>

## 1. INSTALASI

**Software yang digunakan :**
- XAMPP 3.2.4
- Codeigniter 4
- Visual Studio Code (text editor)
<hr>

### Pengaturan XAMPP

Pertama masuk ke pengaturan file config apache pada xampp yang terletak pada control panel xampp.

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr11/1.jpg)

Kemudian hilangkan titik koma "`;`" pada baris yang di blok seperti di atas. Lalu simpan file dan aktifkan module apache pada control panel dengan menekan tombol "start".

<hr>

### Instalasi Codeigniter 4

Kunjungi halaman [codeigniter.com](codeigniter.com) lalu unduh codeigniter 4.

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr11/2.jpg)

Setelah selesai di unduh, ekstrak semua file di dalam file codeigniter ke dalam folder root (htdocs) xampp.

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr11/3.jpg)

Masuk ke alamat  localhost pada browser lalu arahkan ke direktori public yang terdapat pada direktori codeigniter yang tadi sudah di ekstrak. Anda akan melihat tampilan seperti ini :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr11/4.jpg)

Selanjutnya silahkan ubah nama file "**env**" menjadi "**.env**" pada direktori codeigniter. Anda bisa backup file "env" terlebih dahulu sebelum di ubah nama.
Setelah itu masuk ubah file env dengan text editor lalu ubah baris `# CI_ENVIRONMENT = production` menjadi `CI_ENVIRONMENT = development` (Harap diperhatikan tanda "#").

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr11/5.jpg)

## 2. PRAKTIKUM

### Menambah Route Baru

Ubah file "Routes.php" pada direktori "app/Config" dan tambahkan baris baru seperti di bawah ini :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr11/6.jpg)

Untuk mengetahui route yang di tambahkan apakah sudah benar, silahkan buka command prompt atau terminal dan arahkan ke direktori codeigniter dan masukan perintah `php spark routes`.

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr11/7.jpg)

<hr>

### Menambahkan Controller Baru

Pertama buat file dengan nama "**page.php**" pada direktori "**app/Controllers**". Setelah itu buka file tadi ("**page.php**") dan isi seperti di bawah ini :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr11/8.jpg)

Coba akses "localhost:8080/**DirektoriCodeIgniterAnda**/public/about" dan akan tampil seperti dibawah ini :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr11/9.jpg)

*Alamat harus di sesuaikan dengan tempat anda menyimpan folder codeigniter.

<hr>

### Auto Routing

Ubah baris `$routes->setAutoRoute(false);` menjadi `$routes->setAutoRoute(true);` pada file Routes.php dan tambahkan method berikut pada "controller/page" :

    public function tos() { 
	    echo "ini halaman Term of Services"; 
	}

Lalu akses "localhost:8080/**DirektoriCodeIgniterAnda**/public/page/tos"

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr11/10.jpg)

<hr>

### Membuat View

Buat file baru dengan nama about.php pada direktori "**app/View**". Kemudian isi seperti berikut :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr11/11_view.jpg)

Selanjutnya mengubah method `about` pada "**controller/page.php**" seperti berikut :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr11/11_controller.jpg)

Masuk ke halaman "localhost:8080/**DirektoriCodeIgniterAnda**/public/about" lalu hasilnya akan seperti ini :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr11/11_output.jpg)

## 3. MEMBUAT LAYOUT WEB DENGAN CSS

Membuat layout halaman blog dengan menggunakan css pada codeigniter 4. File css akan di simpan pada folder publik di direktori code igniter dengan nama **style.css**.

** *File css yang digunakan diambil dari praktikum 4.**

Baut folder baru dengan nama "**template**" pada direktori **view**.
Lalu buat file "**header.php**" dan "**footer.php**".

Isi file **header.php** seperti berikut :
 
![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr11/12_vHeader.jpg)

Isi file **footer.php** seperti berikut :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr11/12_vFooter.jpg)

Ubah file view **about.php** menjadi seperti ini :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr11/12_about.jpg)

Hasilnya akan terlihat seprti ini :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr11/13_Output.jpg)


# 4. TUGAS

***"Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama"***

*File view diambil dari repositori tugas praktikum 4 pada [halaman ini](https://github.com/antonmartinus72/Lab4Web).

### Menambahkan Route Baru

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr11/15.jpg)

<hr>

### Menambahkan Controller Baru

Mengubah method `Home` pada controller **home.php** untuk membuat halaman indeks mengarah pada view **home.php**.

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr11/16_a.jpg)

Menambahkan 2 method baru pada controller **page.php**.

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr11/16_b.jpg)

<hr>

### Struktur View

Struktur View. 

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr11/17.jpg)

<hr>

### Output

Halaman **Home** (Indeks).

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr11/14_a.jpg)

Halaman **Artikel**.

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr11/14_b.jpg)

Halaman **About**.

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr11/14_c.jpg)

Halaman **Kontak**.

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr11/14_d.jpg)

<hr>

<h1 id="praktikum_12">PRAKTIKUM 12</h1>

## 1. Database

### Membuat Database

Membuat database dengan kode berikut untuk menyimpan artikel yang nanti dapat ditambah, diubah dan dihapus.

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr12/1.jpg)

### Mengatur login database pada Codeigniter

Untuk membuat codeigniter dapat mengakses database, kita harus login terlebih dahulu ke dalam database. Pengaturan login database dapat dilihat pada file **.env**  pada direktori codeigniter.

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr12/2.jpg)	

Pengaturan di atas harus disesuaikan dengan server yang dipakai, dalam kasus ini saya memakasi XAMPP. Untuk `database.default.database` harus disesuaikan dengan nama database yang digunakan.

## 2. Kerangka Dasar MVC

### Model

Membuat file **model** baru dengan nama **ArtikelModel.php** diisi dengan kode dibawah ini :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr12/3b.png)

### Controller

Membuat file **controller** baru dengan nama **Artikel.php** diisi dengan kode dibawah ini :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr12/3c.png)

### View

Membuat folder baru dalam direktori view dengan nama "**artikel**" dan membuat file baru dengan nama "**index.php**" yang diisi dengan kode dibawah ini :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr12/3d.png)

### Output

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr12/3.jpg)

### Membuat Detail Pada Halaman Artikel

Masukan method berikut kedalam **controller artikel.php** :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr12/4b.png)

Buat file view baru dengan nama "detail.php" pada "Views/artikel" :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr12/4c.png)

Kemudian masukan kode berikut ke dalam routes :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr12/4d.png)

### Menampilkan Artikel Dari Database

Sebelumnya kita perlu memasukan data ke dalam database dengan command sebagai berikut :

    INSERT INTO artikel (judul, isi, slug) VALUE ('Artikel pertama', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf.', 'artikel-pertama'), ('Artikel kedua', 'Tidak seperti anggapan banyak orang, Lorem Ipsum bukanlah teks-teks yang diacak. Ia berakar dari sebuah naskah sastra latin klasik dari era 45 sebelum masehi, hingga bisa dipastikan usianya telah mencapai lebih dari 2000 tahun.', 'artikel-kedua');

Masukan command di atas seperti berikut :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr12/4a.jpg)

Lalu buka halaman http://localhost:8080/..../public/artikel, maka hasilnya akan terlihat seperti ini :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr12/4.jpg)

<hr>

## 3. Membuat Menu Admin

### Admin Index

Masukan method berikut pada **controller "artikel.php"** :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr12/5.png)

Selanjutnya buat file view baru dengan nama "**admin_index.php**" pada direktori "Views/artikel" :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr12/5a.png)

Kemudian masukan kode berikut ke dalam route :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr12/5b.png)

## 4. Membuat Fitur "Tambah Artikel" pada Menu Admin

Masukan method berikut ke dalam controller "**artikel.php**" :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr12/6.png)

Kemudian buat file view baru dengan nama "**form_add**" pada direktori "Views/artikel" :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr12/6a.png)

### Output 

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr12/6b.jpg)

## 5. Membuat Fitur "Edit Artikel" pada Menu Admin

Masukan method berikut ke dalam controller "**artikel.php**" :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr12/7.png)

Kemudian buat file view baru dengan nama "**form_edit**" pada direktori "Views/artikel" :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr12/7a.png)

### Output

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr12/7b.jpg)

## 6. Membuat Fitur "Hapus Artikel" pada Menu Admin

Masukan method berikut ke dalam controller "**artikel.php**" :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr12/8.png)

### Output

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshot_Pr12/8a.jpg)

## 7. Tugas

Praktikum sudah ditambahkan framework css bootstrap untuk mempermudah kostumisasi tampilan.

## Sekian & Terimakasih