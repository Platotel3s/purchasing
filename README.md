<h1 align="center">📦 Aplikasi Purchasing Barang</h1><p align="center"> <strong>Aplikasi Purchasing Barang</strong> adalah sebuah sistem manajemen pergudangan berbasis web yang dirancang untuk memudahkan pengelolaan inventaris barang, pemantauan pemasukkan, dan pengeluaran barang. Aplikasi ini memiliki tiga role utama: <strong>Admin</strong>, <strong>Buyer</strong>, dan <strong>Purchaser</strong>, masing-masing dengan akses dan fitur yang berbeda. 🚀 </p>
🎯 Tujuan Aplikasi

Aplikasi ini bertujuan untuk:

    🏭 Memudahkan pengelolaan inventaris barang di pergudangan.

    📊 Memantau pemasukkan dan pengeluaran barang secara real-time.

    🔒 Membatasi akses pengguna berdasarkan role untuk menjaga keamanan data.

    ⏱ Meningkatkan efisiensi proses pembelian dan pengambilan barang.

🌟 Fitur Utama

Aplikasi ini memiliki tiga role dengan akses dan fitur yang berbeda:
1. 👨‍💼 Admin

    🛠️ Manipulasi Data Barang: Menambah, mengedit, dan menghapus data barang.

    📋 Manajemen Pengguna: Menambah, mengedit, dan menghapus akun pengguna (buyer dan purchaser).

    📊 Laporan Stok: Melihat laporan stok barang, pemasukkan, dan pengeluaran.

    🔐 Hak Akses Penuh: Dapat mengakses semua fitur dan data.

2. 🛒 Buyer

    ➕ Memasukkan Data Barang: Menambahkan data barang yang masuk ke gudang.

    📝 Mengupdate Stok: Memperbarui stok barang yang tersedia.

    🔍 Melihat Data Barang: Melihat daftar barang yang tersedia di gudang.

3. 🚚 Purchaser

    📦 Mengambil Barang: Mengambil barang dari gudang berdasarkan permintaan.

    📄 Mencatat Pengeluaran: Mencatat barang yang keluar dari gudang.

    🔍 Melihat Stok Barang: Melihat stok barang yang tersedia.

🛠️ Teknologi yang Digunakan
Backend

    🐘 Laravel: Framework PHP untuk pengembangan backend.

    🗃️ MySQL: Database untuk menyimpan data barang, pengguna, dan transaksi.

    🔗 API: Untuk integrasi antara frontend dan backend.

Frontend

    🎨 TailwindCSS: Framework CSS untuk tampilan yang responsif.

    🎨 Box Icons: Icon web gratis untuk tampilan yang menarik.

    🖥️ JavaScript: Untuk interaktivitas di frontend.

    📊 Chart.js: Library untuk visualisasi data (grafik stok, pemasukkan, dan pengeluaran).

Lainnya

    🐙 Git: Untuk version control.

    🐳 Docker: Untuk containerization dan deployment.

    📤 Postman: Untuk testing API.

🚀 Cara Penggunaan
1. Instalasi

    Clone repository ini:

        git clone https://github.com/Platotel3s/purchasing-lvl-2.git

    Install dependencies:

        composer install
        npm install

    Buat file .env dan sesuaikan konfigurasi database:

        DB_DATABASE=nama_database
        DB_USERNAME=username
        DB_PASSWORD=password

    Jalankan migrasi dan seeder:

        php artisan migrate --seed

    Jalankan aplikasi:
   
        php artisan serve

3. Login

    🌐 Buka aplikasi di browser.

    🔑 Login menggunakan akun yang telah terdaftar (admin, buyer, atau purchaser).

4. Penggunaan Berdasarkan Role

    👨‍💼 Admin: Kelola data barang, pengguna, dan lihat laporan.

    🛒 Buyer: Tambahkan dan perbarui data barang.

    🚚 Purchaser: Ambil barang dan catat pengeluaran.

🌟 Manfaat dan Kelebihan
Manfaat

    Bagi Admin:

        🛠️ Memudahkan pengelolaan data barang dan pengguna.

        📊 Memantau stok barang secara real-time.

    Bagi Buyer:

        ➕ Memudahkan proses pencatatan barang masuk.

        🔍 Melihat stok barang dengan cepat.

    Bagi Purchaser:

        📦 Memudahkan proses pengambilan barang.

        📄 Mencatat pengeluaran barang dengan akurat.

Kelebihan

    🔒 Akses Terkontrol: Setiap role memiliki akses yang terbatas sesuai kebutuhan.

    📊 Laporan Real-Time: Laporan stok, pemasukkan, dan pengeluaran dapat diakses kapan saja.

    🖼️ User-Friendly: Antarmuka yang mudah digunakan.

    🌐 Multi-Platform: Bisa diakses melalui web.

🤝 Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan ikuti langkah-langkah berikut:

Fork repository ini.

Buat branch baru:

        git checkout -b fitur-baru

Commit perubahan Anda:

    git commit -m "Menambahkan fitur baru"

Push ke branch:

    git push origin fitur-baru
    

📜 Lisensi

Proyek ini dilisensikan di bawah MIT License.
👨‍💻 Tim Pengembang : <br>

    Syaiful Yudha Platoteles :
        - 🚀 Project Lead 
        - 🖥️ Fullstack Developer

    

Dengan Aplikasi Purchasing Barang, kami berharap dapat memberikan solusi digital yang memudahkan pengelolaan pergudangan dan meningkatkan efisiensi operasional. Terima kasih telah menggunakan aplikasi ini! 😊
