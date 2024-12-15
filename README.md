# PBKK Kelompok 23

## Anggota Kelompok

| Nama                           | NRP          | Kelas      |
|---------------------------------|--------------|------------|
| MAkhmad Mustofa Solikin        | 5025211230   | PBKK (C)   |

## Cara Penggunaan

### Langkah Awal

1. **Clone Repository**
    ```bash
    git clone https://github.com/mustofa08/e-commerce.git
    ```

2. **Update Repository (Jika Diperlukan)**
   Jika sudah melakukan `clone` tapi belum terupdate, buka terminal lalu jalankan command berikut untuk mengupdate repository:
    ```bash
    git pull --rebase origin main
    ```

   Jika sudah terupdate, langkah ini tidak perlu dilakukan.

3. **Mengatasi Konflik (Jika Ada)**
   Jika terdapat konflik, Anda perlu menyelesaikannya melalui merge editor dengan memilih perubahan yang ingin digunakan.

### Menjalankan Aplikasi

1. **Buka Terminal Baru dan Ikuti Langkah-langkah Berikut**

#### Terminal 1

1. **Nyalakan XAMPP (MySQL & Apache)**  
   Pastikan XAMPP berjalan dan MySQL serta Apache dalam keadaan aktif.

2. **Instal Dependensi Menggunakan Composer**  
   Jalankan perintah berikut untuk menginstal semua dependensi aplikasi:
    ```bash
    composer install
    ```

3. **Salin File `.env`**  
   Salin file `.env.example` menjadi file `.env` yang akan digunakan oleh aplikasi:
    ```bash
    cp .env.example .env
    ```

4. **Generate Key Aplikasi Laravel**  
   Jalankan perintah untuk menghasilkan key aplikasi:
    ```bash
    php artisan key:generate
    ```

5. **Migrasi Database**  
   Lakukan migrasi database:
    ```bash
    php artisan migrate
    ```

6. **Isi Database dengan Data Dummy**  
   Untuk mengisi database dengan data dummy, jalankan perintah berikut:
    ```bash
    php artisan db:seed
    ```

7. **Seed Data Produk**  
   Untuk memasukkan data produk secara khusus, jalankan perintah ini:
    ```bash
    php artisan db:seed --class=ProductSeeder
    ```

8. **Buat Symbolic Link untuk Storage**  
   Agar aplikasi dapat mengakses storage (seperti gambar), jalankan perintah ini:
    ```bash
    php artisan storage:link
    ```

9. **Jalankan Aplikasi**  
   Untuk menjalankan aplikasi, gunakan perintah berikut:
    ```bash
    php artisan serve
    ```

Sekarang aplikasi dapat diakses melalui browser dengan alamat yang diberikan di terminal (biasanya `http://127.0.0.1:8000`).

## Lainnya

Jika ada kendala atau pertanyaan lebih lanjut, silakan buka issue di repository ini.
