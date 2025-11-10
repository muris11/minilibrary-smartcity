# Mini Library Smart City

## Deskripsi

Mini Library Smart City adalah aplikasi web berbasis Laravel yang dirancang untuk mengelola perpustakaan mini di lingkungan smart city. Aplikasi ini menyediakan fitur-fitur untuk manajemen pengguna, konten halaman, anggota tim, dan pengaturan profil, dengan antarmuka yang modern dan responsif menggunakan Tailwind CSS.

## Fitur Utama

### 1. Autentikasi Pengguna

-   **Login**: Sistem login dengan validasi email dan password.
-   **Registrasi**: Pendaftaran akun baru dengan validasi NIM, email, dan password.
-   **Logout**: Keluar dari sistem dengan aman.
-   **Role-Based Access**: Sistem peran pengguna (user dan admin) untuk kontrol akses.
-   **Forgot Password**: Fitur reset password (perlu diperbaiki untuk keamanan).

### 2. Dashboard Admin

-   **Statistik Pengguna**: Menampilkan jumlah total pengguna, admin, dan user biasa.
-   **Navigasi Cepat**: Akses langsung ke fitur manajemen utama.
-   **Interface Responsif**: Dashboard yang dapat diakses dari berbagai perangkat.

### 3. Manajemen Pengguna

-   **Daftar Pengguna**: Melihat semua pengguna dengan informasi lengkap.
-   **Tambah Pengguna**: Form untuk membuat akun baru dengan role admin/user.
-   **Edit Pengguna**: Mengubah informasi pengguna (nama, email, role).
-   **Hapus Pengguna**: Menghapus akun pengguna (dengan konfirmasi).
-   **Validasi Input**: Pastikan data unik dan aman.

### 4. Manajemen Halaman

-   **Daftar Halaman**: Melihat semua halaman yang dibuat.
-   **Buat Halaman**: Editor untuk membuat konten halaman baru.
-   **Edit Halaman**: Mengubah konten dan judul halaman.
-   **Hapus Halaman**: Menghapus halaman yang tidak diperlukan.
-   **Konten Dinamis**: Sistem untuk menampilkan halaman berdasarkan slug.

### 5. Manajemen Partial

-   **Daftar Partial**: Melihat komponen konten yang dapat digunakan ulang.
-   **Buat Partial**: Membuat komponen baru dengan deskripsi.
-   **Edit Partial**: Mengubah konten dan deskripsi partial.
-   **Hapus Partial**: Menghapus partial yang tidak digunakan.
-   **Penggunaan Ulang**: Partial dapat digunakan di berbagai halaman.

### 6. Manajemen Anggota Tim

-   **Daftar Anggota**: Melihat semua anggota tim dengan informasi lengkap.
-   **Tambah Anggota**: Form untuk menambah anggota baru dengan keterampilan.
-   **Edit Anggota**: Mengubah nama, deskripsi, dan keterampilan.
-   **Hapus Anggota**: Menghapus anggota tim.
-   **Keterampilan**: Sistem untuk menambah dan mengelola keterampilan anggota.

### 7. Profil dan Pengaturan

-   **Lihat Profil**: Menampilkan informasi akun pengguna.
-   **Edit Profil**: Mengubah nama, email, dan informasi lainnya.
-   **Pengaturan Akun**: Opsi untuk mengubah password dan preferensi.
-   **Interface User-Friendly**: Form yang mudah digunakan dengan validasi.

### 8. Antarmuka Pengguna Modern

-   **Tailwind CSS**: Framework CSS untuk desain responsif dan modern.
-   **Komponen UI**: Tombol, form, dan elemen UI yang konsisten.
-   **Responsivitas**: Aplikasi dapat diakses dari desktop, tablet, dan mobile.
-   **Navigasi Intuitif**: Menu dan breadcrumb untuk navigasi mudah.

## Persyaratan Sistem

-   **PHP**: ^8.2
-   **Composer**: Untuk manajemen dependensi PHP
-   **Node.js**: ^18.0 (untuk build assets)
-   **npm**: Untuk manajemen dependensi JavaScript
-   **Database**: SQLite (default), atau MySQL/PostgreSQL
-   **Web Server**: Apache/Nginx dengan mod_rewrite

## Instalasi

1. **Clone Repository**:

    ```bash
    git clone https://github.com/muris11/minilibrary-smartcity.git
    cd minilibrary-smartcity
    ```

2. **Install Dependensi PHP**:

    ```bash
    composer install
    ```

3. **Install Dependensi JavaScript**:

    ```bash
    npm install
    ```

4. **Konfigurasi Environment**:

    - Salin file `.env.example` ke `.env`:
        ```bash
        cp .env.example .env
        ```
    - Edit file `.env` dan sesuaikan pengaturan database, APP_KEY, dll.

5. **Generate Application Key**:

    ```bash
    php artisan key:generate
    ```

6. **Jalankan Migrasi Database**:

    ```bash
    php artisan migrate
    ```

7. **Jalankan Seeder (Opsional)**:

    ```bash
    php artisan db:seed
    ```

8. **Build Assets**:
    ```bash
    npm run build
    ```

## Penggunaan

1. **Jalankan Server Development**:

    ```bash
    php artisan serve
    ```

2. **Akses Aplikasi**:

    - Buka browser dan kunjungi `http://localhost:8000`

3. **Login sebagai Admin**:

    - Gunakan akun admin yang dibuat melalui seeder atau buat manual.

4. **Development Mode**:
    - Untuk development frontend: `npm run dev`
    - Untuk production build: `npm run build`

## Struktur Proyek

-   `app/`: Kode aplikasi utama (Controllers, Models, Middleware)
-   `resources/views/`: Template Blade
-   `routes/web.php`: Definisi rute web
-   `database/migrations/`: Migrasi database
-   `public/`: File statis (CSS, JS, gambar)
-   `config/`: Konfigurasi aplikasi

## Kontribusi

1. Fork repository ini
2. Buat branch fitur baru (`git checkout -b fitur-baru`)
3. Commit perubahan (`git commit -am 'Tambah fitur baru'`)
4. Push ke branch (`git push origin fitur-baru`)
5. Buat Pull Request

## Keamanan

Aplikasi ini telah diperiksa untuk kerentanan umum, namun pastikan untuk:

-   Selalu update dependensi secara berkala
-   Gunakan HTTPS di production
-   Jaga kerahasiaan file `.env`
-   Implementasikan rate limiting untuk endpoint sensitif

**Catatan**: Ada kerentanan pada fitur reset password yang perlu diperbaiki dengan menggunakan sistem reset password Laravel standar.

## Lisensi

Proyek ini menggunakan lisensi MIT. Lihat file `LICENSE` untuk detail lebih lanjut.

## Dukungan

Jika Anda mengalami masalah atau memiliki pertanyaan, silakan buat issue di repository GitHub ini.

---

Dikembangkan dengan ❤️ menggunakan Laravel Framework.
