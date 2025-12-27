# Rendi Setiawan Jodi — 221011400830 — 07TPLP020

# HealthyBite Drinks (PHP Native)

Aplikasi rekomendasi jus & smoothie berbasis web. Pengguna dapat memilih tujuan minuman
(Detox, Energy, Diet, Relax), melihat resep, serta menghitung kalori per porsi.

Admin dapat mengelola resep melalui panel dashboard (CRUD + upload gambar).

Pada versi terbaru, akses resep **hanya untuk member yang sudah login**.


## 🛠 Tech Stack

- PHP 8+
- MySQL / MariaDB (PDO)
- CSS Native (tanpa framework)
- PHP Native — **No Framework**


## ⚙️ Instalasi & Setup (Localhost)

1. Buat database:

`healthy_drinks`

2. Import file:

`healthy_drinks.sql`

3. Duplikat file konfigurasi database

Windows:
`copy inc/db.example.php inc/db.php`

Mac / Linux:
`cp inc/db.example.php inc/db.php`

4. Edit file:

`inc/db.php`

Sesuaikan:
- $DB_USER
- $DB_PASS

(Default XAMPP: user root, password kosong)

5. Jika admin belum tersedia → jalankan script reset / insert admin

6. Buka aplikasi di browser:

`http://localhost/healthy-drinks/`


## 🔐 Akun Login

### Admin (Default)

- Username: `admin`
- Password: `admin111`

### User / Member

- Registrasi melalui halaman **Daftar**
- Hanya user login yang dapat mengakses resep


## ✨ Fitur Aplikasi

### 👥 User / Member

- Registrasi & Login
- Akses resep berdasarkan kategori:
  - Detox
  - Energy
  - Diet
  - Relax
- Filter & pencarian resep
- Sorting:
  - Terbaru
  - Nama A–Z
  - Nama Z–A
- Detail resep + kalkulator porsi kalori
- Mode **Cetak Resep**
- Pembatasan akses resep untuk non-member


### 🛠 Admin Panel

- CRUD Resep (Tambah / Edit / Hapus)
- Upload & Update gambar resep
- Kelola user & admin
- Ubah password admin
- Dashboard ringkasan data


## 📸 Screenshots (folder `screenshot/`)

## 📸 Screenshots

### Halaman Awal
![Halaman Awal](screenshot/Halaman_Awal.jpg)

### Halaman Beranda User
![Halaman Beranda User](screenshot/Halaman_BerandaUser.jpg)

### Halaman Resep User
![Halaman Resep User](screenshot/Halaman_ResepUser.jpg)

### Cetak Resep
![Cetak Resep](screenshot/Halaman_CetakResepUser.jpg)

### Halaman Daftar
![Halaman Daftar](screenshot/Halaman_Daftar.jpg)

### Halaman Login
![Halaman Login](screenshot/Halaman_Login.jpg)

### Dashboard Admin
![Dashboard Admin](screenshot/Halaman_BerandaAdmin.jpg)

### Kelola Resep (Admin)
![Kelola Resep Admin](screenshot/Halaman_KelolaResepAdmin.jpg)

### Tambah Resep (Admin)
![Tambah Resep Admin](screenshot/Halaman_TambahResepAdmin.jpg)

### Edit Resep (Admin)
![Edit Resep Admin](screenshot/Halaman_EditResepAdmin.jpg)

### Kelola User Admin
![Kelola User Admin](screenshot/Halaman_KelolaUserAdmin.jpg)

Semua screenshot diambil dari localhost (XAMPP).
