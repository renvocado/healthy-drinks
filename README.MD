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

### 1. Halaman Awal
![Halaman Awal](screenshot/Halaman_Awal.jpg)
Tampilan landing page aplikasi yang berisi pengenalan singkat HealthyBite Drinks dan akses menuju login / daftar.

### 2. Halaman Login
![Halaman Login](screenshot/Halaman_Login.jpg)
Form autentikasi untuk user dan admin sebelum masuk ke sistem.

### 3. Halaman Daftar
![Halaman Daftar](screenshot/Halaman_Daftar.jpg)
Form autentikasi untuk user dan admin sebelum masuk ke sistem.

### 4. Halaman Beranda User
![Halaman Beranda User](screenshot/Halaman_BerandaUser.jpg)
Dashboard utama user berisi menu, kategori minuman, dan navigasi fitur.

### 5. Halaman Daftar Minuman User
![Halaman Daftar Minuman User](screenshot/Halaman_DaftarMinumanUser.jpg)
Menampilkan daftar kategori minuman seperti Detox, Energy, Diet, dan Relax.

### 6. Halaman Resep User
![Halaman Resep User](screenshot/Halaman_ResepUser.jpg)
Menampilkan daftar kategori minuman seperti Detox, Energy, Diet, dan Relax.

### 7. Halaman Cetak Resep User
![Cetak Resep User](screenshot/Halaman_CetakResepUser.jpg)
Tampilan versi cetak resep agar lebih rapi saat disimpan atau dicetak.

### 8. Halaman Cetak Resep User (Versi 2)
![Cetak Resep User 2](screenshot/Halaman_CetakResepUser2.jpg)
Alternatif layout cetak resep dengan komposisi elemen yang berbeda.

---

## 👨‍💻 Admin Panel

### 9. Halaman Beranda Admin
![Halaman Beranda Admin](screenshot/Halaman_BerandaAdmin.jpg)
Dashboard admin berisi ringkasan jumlah resep, user, dan menu manajemen.

### l0. Kelola Resep Admin
![Kelola Resep Admin](screenshot/Halaman_KelolaResepAdmin.jpg)
Dashboard admin berisi ringkasan jumlah resep, user, dan menu manajemen.

### 11. Tambah Resep Admin
![Tambah Resep Admin](screenshot/Halaman_TambahResepAdmin.jpg)
Form input resep baru beserta unggah gambar minuman.

### 12. Edit Resep Admin
![Edit Resep Admin](screenshot/Halaman_EditResepAdmin.jpg)
Halaman untuk memperbarui data resep yang sudah tersimpan.

### 13. Kelola User Admin
![Kelola User Admin](screenshot/Halaman_KelolaUserAdmin.jpg)
Halaman untuk memperbarui data resep yang sudah tersimpan.

### 14. Edit Password Admin
![Edit Password Admin](screenshot/Halaman_EditPasswordAdmin.jpg)
Fitur keamanan untuk mengganti password akun admin.