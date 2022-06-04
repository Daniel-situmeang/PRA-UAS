# Deskripsi

Ini merupakan API yang digunakan untuk mendapatkan doa-doa islam di dalam kehidupan sehari-hari.

# Penggunaan

1. Ekstrak folder terlebih dahulu
2. Buat database dengan nama "kumpulan_doa"
3. Ekspor file "kumpulan_doa.sql" yang berada pada folder database
4. Pengujian dengan menggunakan Postman

Base URL : http://localhost/kumpulan_doa/doa/

# Route

## Mengambil seluruh data doa

[GET] http://localhost/kumpulan_doa/doa

## Mengambil data doa berdasarkan id

[GET] http://localhost/kumpulan_doa/doa/{id}

Contoh :
[GET] http://localhost/kumpulan_doa/doa/2

## Mengambil data doa berdasarkan nama Doa

[GET] http://localhost/kumpulan_doa/doa/{doa}

Contoh :
[GET] http://localhost/kumpulan_doa/doa/?doa=doa sebelum makan

## Menambahkan data doa baru

- [POST] http://localhost/kumpulan_doa/doa/
- Ke "Body"
- Lalu pilih "x-www-form-urlencoded"
- Isi KEY dan VALUE. Dimana KEY terdiri dari empat parameter, yaitu :
  1. doa
  2. ayat
  3. latin
  4. artinya
- Send

Note:
- Apabila penambahan data berhasil, maka akan mucul pesan berupa "Penambahan Data Doa Berhasil".
- Apabila penambahan data gagal, maka akan mucul pesan berupa "Penambahan Data Doa Gagal".
- Apabila terdapat pesan error berupa "Parameter Tidak Cocok", berarti terdapat parameter yang tidak sesuai dengan parameter yang telah ditentunkan dalam API ini. Maka periksa kembali parameter yang dimasukkan.

## Mengubah data pada doa (berdasarkan id)

[POST] http://localhost/kumpulan_doa/doa/{id}

Contoh :
- [POST] http://localhost/kumpulan_doa/doa/2
- Ke "Body"
- Lalu pilih "x-www-form-urlencoded"
- Isi VALUE yang ingin diubah dari KEY yang tersedia. Dimana KEY terdiri dari empat parameter, yaitu :
  1. doa
  2. ayat
  3. latin
  4. artinya
- Send

Note:
- Apabila pengubahan data berhasil, maka akan mucul pesan berupa "Pengubahan Data Doa Berhasil".
- Apabila pengubahan data gagal, maka akan mucul pesan berupa "Pengubahan Data Doa Gagal".
- Apabila terdapat pesan error berupa "Parameter Tidak Cocok", berarti terdapat parameter yang tidak sesuai dengan parameter yang telah ditentunkan dalam API ini. Maka periksa kembali parameter yang dimasukkan.

## Menghapus data doa (berdasarkan id)

- [DELETE] http://localhost/kumpulan_doa/doa/{id}

Contoh :
- [DELETE] http://localhost/kumpulan_doa/doa/2

Note:
- Apabila penghapusan data berhasil, maka akan mucul pesan berupa "Penghapusan Data Doa Berhasil".
- Apabila penghapusan data gagal, maka akan mucul pesan berupa "Penghapusan Data Doa Gagal".
