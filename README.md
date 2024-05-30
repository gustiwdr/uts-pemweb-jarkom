- Nama: Gusti Putu Wulandari
- NIM: 20220801124

Dalam pembuatan tampilan data menu restoran ini, saya menggunakan src-template sehingga project tidak dimulai dari create-project laravel/laravel .
Langkah pembuatan fitur:
1. Build docker dengan docker compose up -d --build
2. Masuk ke dalam container dengan docker exec -it pemweb bash
3. rm -rf composer.lock
4. composer install
5. Atur .env yang berada dalam src
6. Sesuaikan db_host dengan container mysql dan beri nama database untuk project laravel
7. Lakukan php artisan key:generate
8. Hapus fitur-fitur yang tidak diperlukan
9. Membuat 2 Model baru, yaitu tabel menu dan kategori dengan php artisan make:model Menu Category -m
10. Membuat Controller untuk kedua model dengan php artisan make:controller MenuController CategoryController
11. Buat file request baru dengan
- php artisan make:request MassDestroyMenuRequest.php
- php artisan make:request StoreMenuRequest.php
- php artisan make:request UpdateMenuRequest.php
- php artisan make:request MassDestroyCategoryRequest.php
- php artisan make:request StoreCategoryRequest.php
- php artisan make:request UpdateCategoryRequest.php
12. Buat folder baru pada resources/views/admin untuk Menu dan Category
13. Buat file blade berupa create, edit, index, dan show di dalam masing-masing folder views Menu dan Category
14. Isi Migration Menu dan Category
15. Isi Model Menu dan Category, tambahkan relasi untuk keduanya
16. Isi View Menu dan Category
17. Atur MenuController dan CategoryController
18. Tambahkan seeders dan atur roles juga permission-nya
19. Atur tampilan frontend untuk admin pada cruds.php (di resources/lang/en) dan menu.blade.php (di resources/views/partials)
20. Atur route-nya
21. Lakukan php artisan migrate:fresh
22. Lakukan php artisan db:seed
23. Tabel Menu dan Category pada tampilan admin sudah dapat diakses
