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
8. Lakukan php artisan storage:link
9.  Lakukan php artisan migrate
10.  Lakukan php artisan db:seed
11.  Lakukan chmod 777 -R storage/*
12.  Hapus fitur-fitur yang tidak diperlukan
13.  Membuat 2 model baru, yaitu tabel menu dan kategori dengan php artisan make:model Menu Category -m
14.  Membuat Controller untuk kedua model dengan php artisan make:controller MenuController CategoryController
15.  Buat file request baru dengan
    - php artisan make:request MassDestroyMenuRequest.php
    - php artisan make:request StoreMenuRequest.php
    - php artisan make:request UpdateMenuRequest.php
    - php artisan make:request MassDestroyCategoryRequest.php
    - php artisan make:request StoreCategoryRequest.php
    - php artisan make:request UpdateCategoryRequest.php
16. Buat folder baru pada resources/views/admin untuk Menu dan Category
17. Buat file blade berupa create, edit, index, dan show di dalam masing-masing folder tersebut
18. Isi Migration Menu dan Category
19. Isi Model Menu dan Category, tambahkan relasi untuk keduanya
20. Isi View Menu dan Category
21. Atur MenuController dan CategoryController
22. Tambahkan seeders dan atur roles juga permission-nya
23. Atur tampilan frontend untuk admin pada cruds.php (di resources/lang/en) dan menu.blade.php (di resources/views/partials)
24. Atur route-nya
25. Lakukan kembali php artisan migrate:fresh
26. Lakukan kembali php artisan db:seed
27. Tabel Menu dan Category pada tampilan admin sudah dapat diakses
