Gym Membership Management

1. Apa fungsi class GymMembership?
Sebagai sebuah fungsi untuk membuat objek anggota gym. Class ini dapat digunakan untuk menyimpan berbagai data seperti nama, jenis membership dan durasi membership. 

2. Apa fungsi constructor dalam aplikasi ini?
Gunanya adalah menerima data anggota saat objek dibuat, kemudian memvalidasi data dan menyimpannya ke dalam class. 

3. Mengapa seluruh properti menggunakan private?
Supaya ngga bisa diakses oleh orang lain diluar class, supaya data anggota lebih aman. 

4. Mengapa data anggota diakses melalui getter method?
Supaya bisa akses data secara langsung dari luar class. 

5. Apa yang terjadi jika durasi membership bernilai nol?
Datanya akan ditolak karena sudah dibuat minimal sebulan. 

6. Mengapa jenis membership perlu divalidasi?
Karena hanya ada 3 jenis data yang sebenarnya kita terima. Jadi kalau ngga sesuai, harusnya tidak valid. 

7. Jelaskan alur program mulai dari pembuatan objek hingga informasi anggota ditampilkan.
Program dimulai dengan memanggil file GymMembership.php melalui require_once. Kemudian, objek anggota dibuat menggunakan constructor. Constructor memvalidasi data sebelum menyimpannya ke dalam properti private. Jika data valid, getter method digunakan untuk mengambil data dan index.php menampilkan informasi anggota beserta status validasinya. Jika data tidak valid, program menampilkan pesan error melalui catch.