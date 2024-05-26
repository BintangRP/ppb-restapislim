# Slim Framework 3 Skeleton Application

Use this skeleton application to quickly setup and start working on a new Slim Framework 3 application. This application uses the latest Slim 3 with the PHP-View template renderer. It also uses the Monolog logger.

This skeleton application was built for Composer. This makes setting up a new Slim Framework application quick and easy.

## Install the Application

1. Download zip or git clone this repository

```
git clone https://github.com/BintangRP/ppb-restapislim
```

2. using xampp
   locate folder in ur xampp

```
Path: xampp/htdocs/ppb-restapislim
```

3. start xampp

-    start apacha
-    start mysql

4. import sql database

```
using kelas_api_ppb.sql (import in Phpmyadmin)
```

5. getting api from
   http://localhost/ppb-restapislim/public/{endpoint}

-    GET: mahasiswa/pembayaran (Get all data pembayaran mahasiswa)
-    POST: mahasiswa/edit (Create new mahasiswa)
-    PUT: mahasiswa/edit (Update mahasiswa)
-    DEL: mahasiswa/edit (Delete mahasiswa)

## table mahasiswa and spp_mahasiswa

```
table mahasiswa{
	nim int(11),
  	nama text,
  	jk varchar(10),
  	umur int(11)
}
```

```
table spp_mahasiswa{
	id int(11),
	nim int(11),
	jumlah int(11),
	status int(11),
	semester int(11)
}
```
