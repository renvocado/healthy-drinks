# Rendi Setiawan Jodi - 221011400830 - 07TPLP020

# HealthyBite Drinks (PHP Native)
Aplikasi rekomendasi jus & smoothie: pilih tujuan (Detox, Energy, Diet, Relax), lihat resep, dan hitung kalori per porsi. Admin bisa kelola resep (CRUD + upload gambar).

## Stack
- PHP 8+, MySQL/MariaDB (PDO), CSS native
- **Tanpa framework**

## Setup (lokal)
1. Buat database `healthy_drinks` lalu **import** `healthy_drinks.sql` via phpMyAdmin.
2. Salin file contoh DB:
   - `copy inc/db.example.php inc/db.php` (Windows)  
     atau `cp inc/db.example.php inc/db.php` (Mac/Linux)
3. Edit `inc/db.php` → sesuaikan `$DB_USER` / `$DB_PASS` (XAMPP: user `root`, password kosong).
4. (Jika belum ada admin) jalankan script reset admin atau SQL insert yang disertakan.
5. Buka `http://localhost/healthy-drinks/`.

## Login Admin
- Username: `admin`
- Password: `admin111`

## Fitur
- Filter per goal + pencarian
- Sortir: Terbaru, Nama A–Z, Nama Z–A (berlaku di Semua/Goal/Search)
- Detail resep + kalkulator porsi
- Admin CRUD + upload gambar + ganti password

## 🖼️ Tampilan Aplikasi HealthyBite Drinks

Berikut adalah tampilan dari aplikasi web **HealthyBite Drinks** (dibuat menggunakan PHP Native + CSS tanpa framework).

---

### 🍹 Halaman User

**Halaman Utama**
![Halaman Utama](screenshot/Halaman%20Utama.jpg)

**Halaman Semua Resep**
![Halaman Semua Resep](screenshot/Halaman%20Semua%20Resep%20User.jpg)

**Halaman Detail Resep**
![Halaman Detail Resep](screenshot/Halaman%20Detail%20Resep%20User.jpg)

---

### 🔐 Halaman Admin

**Halaman Login**
![Halaman Login](screenshot/Halaman%20Login.jpg)

**Halaman Utama Admin**
![Halaman Utama Admin](screenshot/Halaman%20Utama%20Admin.jpg)

**Halaman Kelola Resep**
![Halaman Kelola Resep](screenshot/Halaman%20Kelola%20Resep%20Admin.jpg)

**Halaman Tambah Resep Baru**
![Halaman Tambah Resep Baru](screenshot/Halaman%20Tambah%20Resep%20Baru%20Admin.jpg)

**Halaman Edit Resep**
![Halaman Edit Resep](screenshot/Halaman%20Edit%20Resep%20Admin.jpg)

**Halaman Ganti Password Admin**
![Halaman Ganti Password](screenshot/Halaman%20Ganti%20Password%20Untuk%20Admin.jpg)

---

> 📸 Semua screenshot diambil dari localhost (XAMPP) versi final project UTS Pemrograman Web 2  
> 👨‍💻 Fitur utama: login admin, CRUD resep, upload gambar, rekomendasi minuman sehat per kategori (detox, energy, diet, relax), dan sortir alphabet.

