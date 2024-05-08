<<<<<<< HEAD
# UTS Back-End Web Development

### Nama  : VINCENT ALFIAN ARTHA
### NIM   : 230010009
### Kelas : DI231
### Mata Kuliah : Back-end Webdev

## Penjelasan mengenai konfigurasi sistem ##

### Struktur Direktori ###

#### **`Direktori public`**:
 - 'index.php'
Adalah pintu gerbang utama (entry point) dari website ini. Ketika pengguna mengunjungi website, file 'index.php' akan menjadi yang pertama kali dieksekusi. Fungsinya adalah menerima permintaan HTTP dari pengguna, memeriksa jenis permintaan (GET, POST, PUT, DELETE), dan mengarahkannya ke Controller yang sesuai untuk diproses lebih lanjut. Saat ini, index.php hanya berisi header yang menampilkan pesan "XYZ Sales API End Point".

#### **`Direktori src`**: ###

##### **`Subdirektori Controller`**:
   - `CustomerController.php`
     CustomerController.php adalah file yang bertanggung jawab atas semua permintaan terkait data pelanggan (customers). Tugasnya mencakup menampilkan daftar pelanggan, menambahkan pelanggan baru, memperbarui data pelanggan, dan menghapus data pelanggan. Controller ini berinteraksi dengan Model Customers.php untuk mengambil atau memanipulasi data pelanggan di database.

   - `SalesController.php`
     File ini memiliki tanggung jawab dalam menangani semua permintaan terkait dengan data penjualan (sales). Tugasnya mencakup menampilkan daftar penjualan, menambahkan data penjualan baru, memperbarui informasi penjualan, serta menghapus data penjualan. Controller ini berinteraksi dengan Model Sales.php untuk mengambil atau memanipulasi data penjualan di dalam basis data.

   - `PurchaseController.php`
     File ini bertugas menangani segala permintaan terkait data pembelian (purchases). Fungsi utamanya mencakup menampilkan daftar pembelian, menambahkan data pembelian baru, memperbarui informasi pembelian, dan menghapus data pembelian yang tidak diperlukan. Controller ini berinteraksi dengan Model Purchases.php untuk mengambil atau memanipulasi data pembelian di dalam basis data.

##### **`Subdirektori Model`**:
   - `Customers.php`
     Bertanggung jawab untuk berinteraksi dengan tabel `customers` di database. Model ini berisi fungsi-fungsi untuk melakukan operasi CRUD (Create, Read, Update, Delete) pada data pelanggan, seperti:
     - Mengambil daftar semua pelanggan
     - Mengambil data pelanggan berdasarkan ID
     - Menambahkan data pelanggan baru
     - Memperbarui data pelanggan
     - Menghapus data pelanggan

   - `Sales.php`
     Bertanggung jawab untuk berinteraksi dengan tabel `sales` di database. Model ini berisi fungsi-fungsi untuk melakukan operasi CRUD pada data penjualan, seperti:
     - Mengambil daftar semua penjualan
     - Mengambil data penjualan berdasarkan ID
     - Menambahkan data penjualan baru
     - Memperbarui data penjualan
     - Menghapus data penjualan

   - `Purchases.php`
     Bertanggung jawab untuk berinteraksi dengan tabel `purchases` di database. Model ini berisi fungsi-fungsi untuk melakukan operasi CRUD pada data pembelian, seperti:
     - Mengambil daftar semua pembelian
     - Mengambil data pembelian berdasarkan ID
     - Menambahkan data pembelian baru
     - Memperbarui data pembelian
     - Menghapus data pembelian

#### **`Direktori config`**:
   Di dalamnya ada file database.php yang berisi konfigurasi untuk koneksi database. Di sini, informasi seperti host, nama pengguna, kata sandi, dan nama basis data (database) disertakan untuk mengizinkan koneksi ke server database. File ini digunakan oleh Model untuk membentuk koneksi ke database dan menjalankan operasi CRUD. Berikut contohnya:
   ```php
   define('DB_HOST', 'localhost');
   define('DB_NAME', 'db_xyz');
   define('DB_USER', 'root');
   define('DB_PASS', '');
   ```

   Keterangan:
   - `DB_HOST`: Alamat host database (misalnya, `localhost`).
   - `DB_NAME`: Nama database yang akan digunakan (misalnya, `db_xyz`).
   - `DB_USER`: Nama pengguna untuk mengakses database.
   - `DB_PASS`: Kata sandi pengguna untuk mengakses database.
----------------------------------------------------------------------------------------------------------------------------------------

## Penjelasan mengenai refleksi diri terhadap projek yang dikerjakan ##
=======
# UTS Back-End Web Development

### Nama  : VINCENT ALFIAN ARTHA
### NIM   : 230010009
### Kelas : DI231
### Mata Kuliah : Back-end Webdev

## Penjelasan mengenai konfigurasi sistem ##

### Struktur Direktori ###

#### **`Direktori public`**:
 - 'index.php'
Adalah pintu gerbang utama (entry point) dari website ini. Ketika pengguna mengunjungi website, file 'index.php' akan menjadi yang pertama kali dieksekusi. Fungsinya adalah menerima permintaan HTTP dari pengguna, memeriksa jenis permintaan (GET, POST, PUT, DELETE), dan mengarahkannya ke Controller yang sesuai untuk diproses lebih lanjut. Saat ini, index.php hanya berisi header yang menampilkan pesan "XYZ Sales API End Point".

#### **`Direktori src`**: ###

##### **`Subdirektori Controller`**:
   - `CustomerController.php`
     CustomerController.php adalah file yang bertanggung jawab atas semua permintaan terkait data pelanggan (customers). Tugasnya mencakup menampilkan daftar pelanggan, menambahkan pelanggan baru, memperbarui data pelanggan, dan menghapus data pelanggan. Controller ini berinteraksi dengan Model Customers.php untuk mengambil atau memanipulasi data pelanggan di database.

   - `SalesController.php`
     File ini memiliki tanggung jawab dalam menangani semua permintaan terkait dengan data penjualan (sales). Tugasnya mencakup menampilkan daftar penjualan, menambahkan data penjualan baru, memperbarui informasi penjualan, serta menghapus data penjualan. Controller ini berinteraksi dengan Model Sales.php untuk mengambil atau memanipulasi data penjualan di dalam basis data.

   - `PurchaseController.php`
     File ini bertugas menangani segala permintaan terkait data pembelian (purchases). Fungsi utamanya mencakup menampilkan daftar pembelian, menambahkan data pembelian baru, memperbarui informasi pembelian, dan menghapus data pembelian yang tidak diperlukan. Controller ini berinteraksi dengan Model Purchases.php untuk mengambil atau memanipulasi data pembelian di dalam basis data.

##### **`Subdirektori Model`**:
   - `Customers.php`
     Bertanggung jawab untuk berinteraksi dengan tabel `customers` di database. Model ini berisi fungsi-fungsi untuk melakukan operasi CRUD (Create, Read, Update, Delete) pada data pelanggan, seperti:
     - Mengambil daftar semua pelanggan
     - Mengambil data pelanggan berdasarkan ID
     - Menambahkan data pelanggan baru
     - Memperbarui data pelanggan
     - Menghapus data pelanggan

   - `Sales.php`
     Bertanggung jawab untuk berinteraksi dengan tabel `sales` di database. Model ini berisi fungsi-fungsi untuk melakukan operasi CRUD pada data penjualan, seperti:
     - Mengambil daftar semua penjualan
     - Mengambil data penjualan berdasarkan ID
     - Menambahkan data penjualan baru
     - Memperbarui data penjualan
     - Menghapus data penjualan

   - `Purchases.php`
     Bertanggung jawab untuk berinteraksi dengan tabel `purchases` di database. Model ini berisi fungsi-fungsi untuk melakukan operasi CRUD pada data pembelian, seperti:
     - Mengambil daftar semua pembelian
     - Mengambil data pembelian berdasarkan ID
     - Menambahkan data pembelian baru
     - Memperbarui data pembelian
     - Menghapus data pembelian

#### **`Direktori config`**:
   Di dalamnya ada file database.php yang berisi konfigurasi untuk koneksi database. Di sini, informasi seperti host, nama pengguna, kata sandi, dan nama basis data (database) disertakan untuk mengizinkan koneksi ke server database. File ini digunakan oleh Model untuk membentuk koneksi ke database dan menjalankan operasi CRUD. Berikut contohnya:
   ```php
   define('DB_HOST', 'localhost');
   define('DB_NAME', 'db_xyz');
   define('DB_USER', 'root');
   define('DB_PASS', '');
   ```

   Keterangan:
   - `DB_HOST`: Alamat host database (misalnya, `localhost`).
   - `DB_NAME`: Nama database yang akan digunakan (misalnya, `db_xyz`).
   - `DB_USER`: Nama pengguna untuk mengakses database.
   - `DB_PASS`: Kata sandi pengguna untuk mengakses database.
----------------------------------------------------------------------------------------------------------------------------------------

## Penjelasan mengenai refleksi diri terhadap projek yang dikerjakan ##
>>>>>>> 2deb179cdfd53552e42f5e71edbc49ee5dfb1d0e
   Menghadapi tantangan dalam pemahaman konsep-konsep kompleks seperti pemrosesan data dari database, manajemen koneksi, dan penggunaan PDO merupakan bagian yang menantang dari proyek UTS Back-End ini. Sebagai proyek back-end pertama, kesulitan dalam memahami konsep dasar dan mengimplementasikannya dengan benar adalah hal yang wajar. Untuk mengatasi ini, perlu memperdalam pemahaman dengan membaca dokumentasi, menonton tutorial online, dan mencari sumber belajar lainnya seperti platform YouTube. Selain itu, mengatur waktu dengan efisien antara pekerjaan lain, tugas kuliah, dan proyek juga menjadi tantangan tersendiri. Membuat jadwal yang jelas, alokasikan waktu secara proporsional, dan prioritaskan tugas penting. Selesaikan proyek secara bertahap agar tidak menumpuk di akhir. Dengan kesabaran, ketekunan, dan kemauan untuk terus belajar, dapat mengatasi tantangan dan kesulitan yang dihadapi dalam proyek ini.