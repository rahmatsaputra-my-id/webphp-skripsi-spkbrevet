<?php include "header_home.php"; ?>
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first ">
          <h2>Sistem <span>Penunjang</span><br>Keputusan</h2>
          <div>
            <a href="<?php echo base_url('login');?>" class="btn-get-started scrollto">Masuk</a>
          
          </div>
        </div>
  
        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="img/intro-img.svg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">

      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="about-img">
              <img src="<?php echo base_url() ;?>assets/img/about-img.png" alt="">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content">
              <h2>TENTANG APLIKASI</h2>
              <h3>Apa Itu SPKBrevet ?</h3>
              <p align='justify'>&emsp;&emsp;Universitas Gunadarma merupakan salah satu universitas yang memiliki banyak kursus yang berbeda disetiap fakultas untuk menambah pemahaman mahasiswa dalam materi pembelajaran. Fakultas Ekonomi Universitas Gunadarma menyediakan kursus pajak untuk mahasiswa universitas gunadarma maupun umum yang bernama kursus Brevet Pajak Terpadu A&B. Namun dalam penilaian dan pemeringkatan peserta kursus ditentukan dengan cara manual, tentunya dengan cara perhitungan manual ini membuat perhitungan menjadi kurang efektif dalam melakukan penilaian karena tidak menggunakan skala pembobotan dan pengujian yang jelas. Hal ini menyebabkan terhambatnya proses evaluasi pembelajaran baik guru maupun peserta.</p>
              <p align='justify'>&emsp;&emsp;<i>SPKBrevet</i> atau disebut <i>Sistem Penunjang Keputusan Brevet</i>, Merupakan sebuah program berbasis website yang digunakan untuk penilaian dan pemeringkatan perserta kursus BREVET Pajak Terpadu A&B yang berada di Universitas Gunadarma. Berikut kelebihan yang terdapat pada aplikasi ini:</p>
              <ul>
                <li><i class="ion-android-checkmark-circle"></i> Menggunakan Metode<var> Simple Additive Weighting</var> yang simple dan akurat dalam perhitungan.</li>
                <li><i class="ion-android-checkmark-circle"></i>Mudah digunakan dan mempunyai alur yang jelas dalam penggunaan aplikasi.</li>
                <li><i class="ion-android-checkmark-circle"></i> Tersedia fitur Alternatif Data, Kriteria Data, Normalisasi Data, Pemeringkatan Data</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </section><!-- #about -->


    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>MENU APLIKASI</h3>
          <p>Berisikan empat tahap untuk menjalankan aplikasi SPKBrevet.</p>
        </header>

        <div class="row">
          
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e1eeff;"><i class="ion-ios-bookmarks-outline" style="color: #2282ff;"></i></div>
              <h4 class="title">Kriteria Data</h4>
              <p class="description">Merupakan penentuan bobot dari setiap kriteria yang telah ditentukan sebelumnya. Dalam penentuan bobot kriteria maka bobot nilai dari setiap kriteria dimasukkan kedalam fitur kriteria data.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
              <h4 class="title" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Alternatif Data</h4>
              <p class="description">Merupakan penentuan rating kecocokan setiap alternatif dengan setiap kriteria. Dalam penentuan rating kecocokan maka nilai dari setiap kriteria dimasukkan kedalam tabel rating kecocokan.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.3s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #ecebff;"><i class="ion-ios-bookmarks-outline" style="color: #8660fe;"></i></div>
              <h4 class="title">Normalisasi Data</h4>
              <p class="description">Menormalisasikan Matriks berdasarkan persamaan yang disesuaikan dengan jenis atribut (atribut keuntungan maupun atribut biaya) sehingga diperoleh matriks ternormalisasi R.</p>
            </div>
          </div>   

           <div class="col-md-12 col-lg-12 wow bounceInUp" data-wow-delay="0.4s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
              <h4 class="title">Ranking Data</h4>
              <p class="description">Merupakan fitur untuk menghasilkan urutan nilai data dari peserta kursus Brevet Pajak Terpadu A&B di Universitas Gunadarma.  Data yang digunakan dalam tahap pemeringkatan diambil dimulai dari nilai yang didapat dari penentuan rating kecocokan dalam fitur alternatif data, kemudian penentuan bobot kriteria yang terdapat dalam fitur kriteria data, lalu pemeringkatan data ternormalisasi yang terdapat pada fitur normalisasi yang dimana datanya sudah dikalikan pada setiap bobot dan juga sudah dijumlahkan dengan setiap data pada kolom yang sama.</p>
            </div>
          </div>
          
        </div>

      </div>
    </section><!-- #services -->


    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">PETUNJUK PENGGUNAAN</h3>
            <p class="cta-text"> <b><i>Bingung Cara Menggunakan Aplikasi Ini?</i></b><br> Pada aplikasi SPKBrevet ini dilengkapi dengan petunjuk penggunaan yang akan menjelaskan bagaimana alur dan bagaimana cara kerja aplikasi ini agar dapat dijalankan dengan benar. Didalam petunjuk penggunaan ini juga terdapat apa saja fungsi dari setiap menu yang terdapat dalam aplikasi ini.</p>
          </div>
          <!-- <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="">Read More</a>
          </div> -->
        </div>

      </div>
    </section><!-- #call-to-action -->

    
    <!--==========================
      Team Section
    ============================-->
    <section id="team" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3>PENGEMBANG APLIKASI</h3>
          <p align='justify'>Seorang <i>Programmer</i> yang menciptakan aplikasi SPKBrevet berbasis web dengan menggunakan bahasa pemrograman PHP <i>framework CI</i>.<!--  Seorang pengembang yang menghubungkansemua sumber daya yang akan digunakan pada sebuah website, mulai dari pemanggilan database, membuat halaman website yang dinamis, hingga mengatur cara pengunjung untuk berinteraksi dengan elemen-elemen dari website tersebut. --></p>
        </div>

        

          <div class="col-lg-3 col-md-6 wow container fadeInUp">
            <div class="member">
              <img src="<?php echo base_url() ?>assets/img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Rahmat Saputra</h4>
                  <span>IT Programmer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

  </main>
<?php include "footer.php"; ?>