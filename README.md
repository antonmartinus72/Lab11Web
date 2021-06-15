# PRAKTIKUM PEMROGRAMAN WEB

## Praktikum Pertemuan 12

Praktikum dilakukan dengan modul praktikum yang sudah disediakan.

- File praktikum terdapat pada folder **lab11_ci**.

## 1. INSTALASI

**Software yang digunakan :**

- XAMPP 3.2.4
- Codeigniter 4
- Visual Studio Code (text editor)
<hr>

### Pengaturan XAMPP

Pertama masuk ke pengaturan file config apache pada xampp yang terletak pada control panel xampp.

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshoot/1.jpg)

Kemudian hilangkan titik koma "`;`" pada baris yang di blok seperti di atas. Lalu simpan file dan aktifkan module apache pada control panel dengan menekan tombol "start".

<hr>

### Instalasi Codeigniter 4

Kunjungi halaman [codeigniter.com](codeigniter.com) lalu unduh codeigniter 4.

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshoot/2.jpg)

Setelah selesai di unduh, ekstrak semua file di dalam file codeigniter ke dalam folder root (htdocs) xampp.

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshoot/3.jpg)

Masuk ke alamat localhost pada browser lalu arahkan ke direktori public yang terdapat pada direktori codeigniter yang tadi sudah di ekstrak. Anda akan melihat tampilan seperti ini :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshoot/4.jpg)

Selanjutnya silahkan ubah nama file "**env**" menjadi "**.env**" pada direktori codeigniter. Anda bisa backup file "env" terlebih dahulu sebelum di ubah nama.
Setelah itu masuk ubah file env dengan text editor lalu ubah baris `# CI_ENVIRONMENT = production` menjadi `CI_ENVIRONMENT = development` (Harap diperhatikan tanda "#").

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshoot/5.jpg)

## 2. PRAKTIKUM

### Menambah Route Baru

Ubah file "Routes.php" pada direktori "app/Config" dan tambahkan baris baru seperti di bawah ini :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshoot/6.jpg)

Untuk mengetahui route yang di tambahkan apakah sudah benar, silahkan buka command prompt atau terminal dan arahkan ke direktori codeigniter dan masukan perintah `php spark routes`.

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshoot/7.jpg)

<hr>

### Menambahkan Controller Baru

Pertama buat file dengan nama "**page.php**" pada direktori "**app/Controllers**". Setelah itu buka file tadi ("**page.php**") dan isi seperti di bawah ini :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshoot/8.jpg)

Coba akses "localhost:8080/**DirektoriCodeIgniterAnda**/public/about" dan akan tampil seperti dibawah ini :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshoot/9.jpg)

\*Alamat harus di sesuaikan dengan tempat anda menyimpan folder codeigniter.

<hr>

### Auto Routing

Ubah baris `$routes->setAutoRoute(false);` menjadi `$routes->setAutoRoute(true);` pada file Routes.php dan tambahkan method berikut pada "controller/page" :

    public function tos() {
        echo "ini halaman Term of Services";
    }

Lalu akses "localhost:8080/**DirektoriCodeIgniterAnda**/public/page/tos"

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshoot/10.jpg)

<hr>

### Membuat View

Buat file baru dengan nama about.php pada direktori "**app/View**". Kemudian isi seperti berikut :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshoot/11_view.jpg)

Selanjutnya mengubah method `about` pada "**controller/page.php**" seperti berikut :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshoot/11_controller.jpg)

Masuk ke halaman "localhost:8080/**DirektoriCodeIgniterAnda**/public/about" lalu hasilnya akan seperti ini :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshoot/11_output.jpg)

## 3. MEMBUAT LAYOUT WEB DENGAN CSS

Membuat layout halaman blog dengan menggunakan css pada codeigniter 4. File css akan di simpan pada folder publik di direktori code igniter dengan nama **style.css**.

** \*File css yang digunakan diambil dari praktikum 4.**

Baut folder baru dengan nama "**template**" pada direktori **view**.
Lalu buat file "**header.php**" dan "**footer.php**".

Isi file **header.php** seperti berikut :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshoot/12_vHeader.jpg)

Isi file **footer.php** seperti berikut :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshoot/12_vFooter.jpg)

Ubah file view **about.php** menjadi seperti ini :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshoot/12_about.jpg)

Hasilnya akan terlihat seprti ini :

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshoot/13_Output.jpg)

# 4. TUGAS

**_"Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama"_**

\*File view diambil dari repositori tugas praktikum 4 pada [halaman ini](https://github.com/antonmartinus72/Lab4Web).

### Menambahkan Route Baru

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshoot/15.jpg)

<hr>

### Menambahkan Controller Baru

Mengubah method `Home` pada controller **home.php** untuk membuat halaman indeks mengarah pada view **home.php**.

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshoot/16_a.jpg)

Menambahkan 2 method baru pada controller **page.php**.

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshoot/16_b.jpg)

<hr>

### Struktur View

Struktur View.

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshoot/17.jpg)

<hr>

### Output

Halaman **Home** (Indeks).

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshoot/14_a.jpg)

Halaman **Artikel**.

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshoot/14_b.jpg)

Halaman **About**.

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshoot/14_c.jpg)

Halaman **Kontak**.

![enter image description here](https://github.com/antonmartinus72/Lab11Web/raw/main/Screenshoot/14_d.jpg)

## Sekian & Terimakasih
