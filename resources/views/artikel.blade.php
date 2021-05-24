@extends('layout/main')

@section('title','Artikel')

@section('container')

<div class='container'>
    <div>
    <h5>DAFTAR ISI</h5>
      <ol>
        <li>
          <a href="#apa">Apa itu Framework</a>
        </li>
        <li>
          <a href="#pengertian">Pengertian Laravel</a>
        </li>
        <li>
          <a href="#fitur">Fitur-fitur pada Laravel</a>
        </li>  
        <li>
          <a href="#kelebihan">Kelebihan Laravel di banding Framework lain</a>
        </li>
      </ol>
    </div>
    <br>
    <br>
  <div>
    <p>
    Salah Satu framework yang paling terkenal adalah Laravel,  Apa itu Laravel? Sebelum membahas lebih dalam tentang framework yang satu ini, Apakah kamu sudah tentang pengertian framework dan fungsinya? Jika belum kamu bisa membaca penjelasan berikut.
    </p>
  </div>
  <div>
    <h2 id="apa">Apa itu Framework</h2>
    <p>Framework adalah seperangkat struktur dan pedoman konseptual, yang digunakan untuk membangun sesuatu yang bermanfaat. Jadi bisa dikatakan framework merupakan software untuk memudahkan para programer untuk membuat sebuah aplikasi web.
    <br>
    Dalam framework terdapat software, Software Framework adalah struktur yang dapat kamu gunakan dalam membangun sesuatu. Software Framework memungkinkan kamu untuk menggunakan jenis komponen yang berbeda, berkomunikasi dengan API eksternal dan menentukan 
    </p>
  </div>
  <div>
    <h2 id="pengertian">Pengertian Laravel</h2>
    <p>Laravel adalah salah satu Framework PHP yang paling populer dan paling banyak digunakan di seluruh dunia dalam membangun aplikasi web mulai dari proyek kecil hingga besar. Framework ini banyak digunakan oleh Web Developer karena kinerja, fitur, dan skalabilitas nya.
    </p>
    <p>Framework ini mengikuti struktur MVC (Model View Controller), MVC adalah sebuah metode aplikasi dengan memisahkan data dari tampilan berdasarkan komponen- komponen aplikasi, seperti : manipulasi data, controller, dan user interface.
    </p>
    <p>
    Dengan menggunakan struktur MVC maka membuat laravel mudah untuk dipelajari dan mempercepat proses pembuatan prototipe aplikasi web. Framework ini juga menyediakan fitur bawaan seperti otentikasi, mail, perutean, sesi, dan daftar berjalan.
    </p>
    <p>
    Framework ini banyak disukai oleh para web developer, Sesuai sedikit penjelasan diatas. Kelebihan lainnya yaitu Laravel sangat mudah untuk disesuaikan, Karena kemudahan itulah kamu dapat membuat suatu struktur proyek kamu sendiri yang memenuhi permintaan aplikasi web kamu.
    </p>
    <br>
  </div>
  <div>
    <h2 id="fitur">Fitur-fitur pada Laravel</h2>
    <p>
    Banyak sekali fitur yang tersedia pada PHP Framework modern ini, Berikut ini fitur framework Laravel yang membedakan antara framework php ini dari framework lainnya. Apa saja fitur utama laravel?
    </p>
    <ol>
      <li>
      <strong>Dependency Management,</strong>
      Adalah sebuah fitur yang berguna untuk memahami fungsi wadah layanan (IoC) memungkin objek baru dihasilkan dengan pembalikan controller dan merupakan bagian inti untuk mempelajari aplikasi web modern.
      </li>
      <li>
      <strong>Modularity,</strong>
      adalah sejauh mana sebuah komponen aplikasi web dapat dipisahkan dan digabungkan kembali. Modularitas dapat membantu kamu untuk mempermudah proses update, Bukan hanya itu, Dalam membangun dan mengembangkan website, fitur ini memungkinkan kamu untuk menyempurnakan dan meningkatkan fungsionalitas dari web tersebut.
      </li>
      <li>
      <strong>Authentication,</strong>
      adalah bagian integral dari aplikasi web modern, Laravel menyediakan otentikasi di luar kotak, dengan menjalankan perintah sederhana. Kamu juga dapat membuat sebuah sistem yang otentikasinya berfungsi secara penuh dan proses konfigurasi otentikasi sudah berjalan secara otomatis.
      </li>
      <li>
      <strong>Caching,</strong>
      adalah sebuah teknik untuk menyimpan data di lokasi penyimpanan sementara dan dapat diambil dengan cepat saat dibutuhkan. Dalam laravel, hampir semua data caching berasal dari tampilan ke rute, Sehingga dapat mengurangi waktu pemrosesan dan meningkatkan kinerja.
      </li>
      <li>
      <strong>Routing,</strong>
      Routing Laravel dapat digunakan untuk membuat aplikasi yang tenang dengan mudah. Dalam framework ini semua request dipetakan dengan bantuan rute. Kamu juga dapat mengelompokkan rute, menamainya, menerapkan filter pada mereka dan mengikat data model Anda kepadanya.
      </li>
      <li>
      <strong>Restful Controller,</strong>
      Adalah sebuah fitur yang berfungsi memisahkan logika dalam melayani HTTP GET and POST. Kamu juga dapat membuat pengontrol sumber daya yang dapat digunakan untuk membuat CRUD dengan mudah.
      </li>
      <li>
      <strong>Testing and Debugging,</strong>
      Laravel hadir dengan menggunakan PHPUnit di luar kotak yang berfungsi untuk menguji aplikasi kamu. Framework ini dibangun dengan pengujian dalam pikiran sehingga mendukung pengujian dan debugging terlalu banyak.
      </li>
      <li>
      <strong>Template Engine,</strong>
      Blade adalah template engine Laravel, Blade berfungsi untuk menyediakan sejumlah fungsi pembantu untuk memformat data kamu dalam bentuk tampilan.
      </li>
      <li>
      <strong>Configuration Management Features,</strong>
      Dalam laravel semua file konfigurasi kamu disimpan di dalam direktori config, Kamu dapat mengubah setiap konfigurasi yang tersedia.
      </li>
      <li>
      <strong>Eloquent ORM,</strong>
      Laravel berbasis pada Eloquent ORM yang menyediakan dukungan untuk hampir semua mesin basis data. Fitur ini juga berfungsi untuk menjalankan berbagai operasi database di dalam website dan mendukung berbagai sistem database seperti MySQL dan SQLite.
      </li>
    </ol>
  </div>
  <br>
  <div>
    <h2 id="kelebihan">Kelebihan Laravel Dibanding Framework Lainnya</h2>
    <p>Mengapa harus menggunakan Framework laravel? Apakah Framework PHP ini lebih baik dibanding framework lainnya? Jika kamu masih belum yakin untuk menggunakan frameowrk ini dalam membangun website. Nah berikut alasan kenapa kamu harus menggunakan Laravel.
    </p>
    <h4>1. Templat Layout yang Lebih Ringan</h4>
    <p>Laravel menyediakan sebuah templat layaout yang sangat ringan, Terdapat juga sebuah fitur yang memungkinkan untuk menambahkan template tambahan yang ringan. Bagi para developer dapat melakukan pengembangan secara powerfull.
    </p>
    <p>Jika tadi sudah disinggung tentang template engine, Dalam pembuat template, Template engine tersebut sangat berfungsi.
    </p>
    <h4>2. Dukungan Framework MVC</h4>
    <p>
    Tadi diatas sudah dijelaskan tentang MVC dan apa saja kelebihan dari MVC. Dengan menggunakan struktur MVC maka Laravel dapat dengan mudah mengelola basis data seperti input data ke basis data, melakukan pembaruan data dan pengelolahan data lainnya.
    </p>
    <h4>3. Laravel Banyak Mempunyai Library Oriented</h4>
    <p>Keunggulan laravel dibanding framework lainnya yaitu terdapat pada banyaknya library object oriented yang tersedia. Dan library-library tersebut tidak terdapat pada library framework lainnya, Sehingga framework ini mempunyai nilai plus pada poin ini dibanding framework php lainnya.
    </p>
    <p>
    Salahsatu library yang sangat berguna dan paling penting pada laravel yaitu librari authentication. Librari ini menyediakan fitur Bcrypt hashing, Fitur tersebut merupakan salah satu fitur tercanggih di bidang otentifikasi saat ini.
    </p>
    <h4>4. Modul dalam Laravel Bersifat Individu dan Independen</h4>
    <p>
    Dalam satu aplikasi laravel, Terdapat lebih dari 20 modul library yang digunakan dan masing-masing modul bersifat individu. Selain bersifat infividu modul tersebut juga bersifat independen dalam mengadopsi prinsip PHP modern. Dengan begitu maka modul-modul tersebut akan membuat aplikasi web menjadi lebih informatif, modular, dan responsif.
    </p>
    <h4>5. Tersedianya Tool Artisan</h4>
    <p>Tools artisan adalah sebuah fitur command line interface yang dimiliki oleh Laravel, Dengan tools ini maka kamu dapat mengetikkan sekumpulan perintah yang dapat membantu kamu dalam membangun sebuah website atau aplikasi web.

    Terdapat juga fitur Add-on yang memunginkan kamu untuk menambahkan berbagai macam fitur baru ke Laravel dengan mudah. Fitur Add-on tersebut merupakan hasil dari Kumpulan perintah Artisan dan penggabungan dengan framework Symphony.
    </p> 
  </div>
</div>
<br>
<br>
<br>

@endsection