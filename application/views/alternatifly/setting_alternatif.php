<?php $this->load->view("header_dashboard.php") ?>



  <main id="main">

   

    <!--==========================
      Services Section
    ============================-->

    <section id="services" class="section-bg">
      <div class="container">

        <header href="<?php echo base_url('dashboard') ?>" class="section-header">
          <br>
          <br>
          <br>
          <br>  
          <h3><a href="<?php echo base_url('dashboard') ?>">MENU APLIKASI</h3>
          <p>Berisikan beberapa fitur untuk menjalankan aplikasi SPKBrevet.</p>
        </header>

        <div class="row">


          <div class=" wow bounceInUp" data-wow-duration="1.4s">
            <div class="box1">
              <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
              <h4 class="title" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><a href="">Alternatif Data</a></h4>
              <p class="description"><br>Pada Menu alternatif data ini merupakan penetuan pencocokan rating setiap data alternatif dengan setiap data kriteria. Pada menu alternatif ini terdapat empat buah kolom yaitu Id Alternatif, Nama Alternatif, Penilaian Kriteria, dan Action.<br><br>Pada kolom<b> Id Alternatif</b> merupakan identitas dari setiap data peserta yang mengikuti kursus Brevet.<br>Pada kolom<b> Nama Alternatif</b> merupakan nama peserta dari setiap peserta yang mengikuti kursus Brevet.<br>Pada kolom <b>Penilaian Kriteria</b> yang berisi tujuh buah sub kolom diantaranya K<sub>1</sub>, K<sub>2</sub>, K<sub>3</sub>, K<sub>4</sub>, K<sub>5</sub>, K<sub>6</sub>, K<sub>7</sub> arti dari sub kolom tersebut merupakan identitas untuk setiap mata pelajaran pada kursus Brevet.<br>Pada kolom <b>Action</b> berisikan button Ubah, dan Hapus digunakan untuk mengubah maupun menghapus setiap data.<br><br> Semua data yang terdapat pada Menu Alternatif Data didapat dari kursus Brevet Pajak Terpadu A&B Universitas Gunadarma.</p>
              <br>                
              <a class="btn btn-outline-info" style="text-align: center;" href="<?php echo base_url('normalisasi');?>">Lanjut ke Halaman Normalisasi Data >>></a><br><br>

                  <div id="wrapper">
                  
                    <div id="content-wrapper">

                      <div class="container-fluid">

                        
                        <!-- DataTables -->
                          <div class="card mb-3">
                            <div class="card-header text-lg-left">
                              <form action="<?php echo base_url('setting_alternatif_cari');?>" method="post">
                                <!-- <a class="btn btn-secondary" href="<?php echo base_url('setting_alternatif_tambah') ?>"><i class="fa fa-search modal-icon"></i> Cari</a> -->
                              <a class="btn btn-success" href="<?php echo base_url('setting_alternatif_tambah') ?>"><i class="fa fa-plus modal-icon"></i> Tambah</a>
                                <!-- <input class="btn btn-secondary" type="submit" name="btn" value="Cari">
                                <input  type="text" name="nama_alternatif" placeholder="Masukkan Nama Data"> -->
                              </form>
                            </div>
                          <div class="card-body"> 

                            <div class="table-responsive">
                              
                              <table class="table table-hover table-striped table-bordered" id="TableAlternatif" width="100%" cellspacing="0">
                                <thead>
                                  
                                  
                                  <tr>
                                    <th style="text-align: center;" rowspan="2">ID Alternatif</th>
                                    <th style="text-align: center;" rowspan="2">Nama Alternatif</th>
                                    <th style="text-align: center;" colspan="7">Penilaian Kriteria</th>
                                    <th style="text-align: center;" rowspan="2" colspan="2">Aksi</th>
                                  </tr>
                                  <tr>
                                    <th style="text-align: center;">K<sub>1</sub></th>
                                    <th style="text-align: center;">K<sub>2</sub></th>
                                    <th style="text-align: center;">K<sub>3</sub></th>
                                    <th style="text-align: center;">K<sub>4</sub></th>
                                    <th style="text-align: center;">K<sub>5</sub></th>
                                    <th style="text-align: center;">K<sub>6</sub></th>
                                    <th style="text-align: center;">K<sub>7</sub></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $a = 1;
                                   foreach ($nilai as $product): ?>
                                  <tr>
                                    <td style="text-align: center;" width="150">
                                      
                                      A<sub><?php echo $a; ?></sub>
                                    </td>
                                    <td style="text-align: center;">
                                      <?php echo $product->nama_alternatif ?>
                                    </td>
                                    <td style="text-align: center;">
                                      <?php echo $product->k1 ?>
                                    </td>
                                    <td style="text-align: center;">
                                      <?php echo $product->k2 ?>
                                    </td>
                                    <td style="text-align: center;">
                                      <?php echo $product->k3 ?>
                                    </td>
                                    <td style="text-align: center;">
                                      <?php echo $product->k4 ?>
                                    </td>
                                    <td style="text-align: center;">
                                      <?php echo $product->k5 ?>
                                    </td>
                                    <td style="text-align: center;">
                                      <?php echo $product->k6 ?>
                                    </td>
                                    <td style="text-align: center;">
                                      <?php echo $product->k7 ?>
                                    </td>
                                    
                                    </td>

                                    <td style="text-align: center;">
                                      <a href="<?php echo site_url('welcome/setting_alternatif_edit/'.$product->id) ?>" class="btn btn-outline-warning"><i class="fa fa-pencil modal-icon"></i> Ubah</a>
                                    </td>
                                    <td>
                                      <a onclick="return confirm('Anda Yakin?')"
                                       href="<?php echo site_url('welcome/setting_alternatif_hapus/'.$product->id) ?>" class="btn btn-outline-danger"><i class="fa fa-trash modal-icon"></i> Hapus</a>

                                    </td>
                                  </tr>
                                  <?php
                                  $a++;
                                   endforeach;?>
                                
                                </tbody>
                              </table>
                              <!-- <script type="text/javascript">
                                  $(document).ready(function() {
                                    /*var data = [];
                                    for ( var i=0 ; i<50000 ; i++ ) {
                                        data.push( [ i, i, i, i, i ] );
                                    }*/
                                     
                                      $('#TableAlternatif').DataTable( 
                                        {
                                          "paging": true,
                                          "ordering":    true,
                                          "info":        true,
                                          scrollCollapse: true,
                                          scroller:       true
                                         });
                                  });
                              </script> -->
                            </div>
                          </div>
                        </div>
                          <a class="btn btn-outline-info" style="text-align: center;" href="<?php echo base_url('normalisasi');?>">Lanjut ke Halaman Normalisasi Data >>></a>

                      </div>
                      <!-- /.container-fluid -->

                      <!-- Sticky Footer -->
                      
                    </div>
                    <!-- /.content-wrapper -->

                  </div>
                  <!-- /#wrapper -->

                  <?php $this->load->view("_partials/js.php") ?>
              
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

          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle collapsed" data-toggle="collapse" href="#faq7">Read More</a>
          </div>

          <div id="faq7" class="collapse col-lg-9 text-center text-lg-left cta-text" data-parent="#manual-list">
              <p>
               Pada Aplikasi SPKBrevet ini kita akan menggunakan metode SAW (Simple Weighting Additive) untuk perhitungan menggunakan data dari alternatif data, kriteria data, dan hasil normalisasi data. Pada Metode SAW ini terdapat 4 buah langkah.
              </p>
          

            <ul id="manual-list" class="wow fadeInUp container">
            
              <li>
                <a data-toggle="collapse" class="collapsed" href="#faq8">Apa Tahap Awal? </i></a>
                <div id="faq8" class="collapse" data-parent="#manual-list">
                  <p class="cta-text">
                    Pada langkah awal yaitu penentuan rating kecocokan setiap alternatif data dengan setiap kriteria data. Pada Menu Alternatif Data.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq9" class="collapsed">Apa Langkah Kedua?</a>
                <div id="faq9" class="collapse" data-parent="#manual-list">
                  <p>
                    Pada langkah kedua ini yaitu Menentukan bobot tiap kriteria yaitu 'Ketentuan Umum dan Tata Cara Perpajakan', 'Pajak Penghasilan pasal 21', 'Pajak Penghasilan', 'Pemotongan Pemungutan', 'Pajak Penghasilan Orang pribadi', 'Pajak Pertambahan Nilai', 'Akuntansi Perpajakan' dapat ditentukan pada menu pembobotan. Pada Menu Kriteria Data.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq10" class="collapsed">Apa Langkah Ketiga?</a>
                <div id="faq10" class="collapse" data-parent="#manual-list">
                  <p>
                    Lalu di langkah ketiga membuat Normalisasi Matriks berdasarkan persamaan yang disesuaikan dengan jenis atribut (atribut keuntungan maupun atribut biaya) sehingga diperoleh matriks ternormalisasi R. Pada Menu Normalisasi Data.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq11" class="collapsed">Apa Saja Langkah Keempat?</a>
                <div id="faq11" class="collapse" data-parent="#manual-list">
                  <p>
                    Melakukan pengurutan data nilai dari peserta kursus Brevet Pajak Terpadu A&B di Universitas Gunadarma. Data yang digunakan dalam tahap pemeringkatan diambil dari nilai yang didapat dari penentuan rating kecocokan dalam fitur alternatif data, kemudian penentuan bobot kriteria yang terdapat dalam fitur kriteria data, lalu pemeringkatan data ternormalisasi yang terdapat pada fitur normalisasi yang dimana datanya sudah dikalikan pada setiap bobot dan juga sudah dijumlahkan dengan setiap data pada kolom yang sama. Pada Menu Ranking Data.
                  </p>
                </div>
              </li>

            </ul>
          </div>

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
          <p align='justify'>Seorang <i>Programmer</i> yang menciptakan aplikasi SPKBrevet berbasis web dengan menggunakan bahasa pemrograman PHP <i>framework CI</i>.</p>
        </div>

        

          <div class="col-lg-3 col-md-6 container wow fadeInUp">
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

          <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="<?php echo base_url() ?>assets/img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
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

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="<?php echo base_url() ?>assets/img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
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

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="<?php echo base_url() ?>assets/img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Clients Section
    ============================-->
    <!-- <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="<?php echo base_url() ;?>assets/img/clients/client-1.png" alt="">
          <img src="<?php echo base_url() ;?>assets/img/clients/client-2.png" alt="">
          <img src="<?php echo base_url() ;?>assets/img/clients/client-3.png" alt="">
          <img src="<?php echo base_url() ;?>assets/img/clients/client-4.png" alt="">
          <img src="<?php echo base_url() ;?>assets/img/clients/client-5.png" alt="">
          <img src="<?php echo base_url() ;?>assets/img/clients/client-6.png" alt="">
          <img src="<?php echo base_url() ;?>assets/img/clients/client-7.png" alt="">
          <img src="<?php echo base_url() ;?>assets/img/clients/client-8.png" alt="">
        </div>

      </div>
    </section> --><!-- #clients -->


    <!--==========================
      Pricing Section
    ============================-->
    <!-- <section id="pricing" class="wow fadeInUp section-bg">

      <div class="container">

        <header class="section-header">
          <h3>Pricing</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </header>

        <div class="row flex-items-xs-middle flex-items-xs-center">
      
          
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><span class="currency">$</span>19<span class="period">/month</span></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title"> 
                  Basic Plan
                </h4>
                <ul class="list-group">
                  <li class="list-group-item">Odio animi voluptates</li>
                  <li class="list-group-item">Inventore quisquam et</li>
                  <li class="list-group-item">Et perspiciatis suscipit</li>
                  <li class="list-group-item">24/7 Support System</li>
                </ul>
                <a href="#" class="btn">Choose Plan</a>
              </div>
            </div>
          </div>
      
          
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><span class="currency">$</span>29<span class="period">/month</span></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title"> 
                  Regular Plan
                </h4>
                <ul class="list-group">
                  <li class="list-group-item">Odio animi voluptates</li>
                  <li class="list-group-item">Inventore quisquam et</li>
                  <li class="list-group-item">Et perspiciatis suscipit</li>
                  <li class="list-group-item">24/7 Support System</li>
                </ul>
                <a href="#" class="btn">Choose Plan</a>
              </div>
            </div>
          </div>
      
          
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><span class="currency">$</span>39<span class="period">/month</span></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title"> 
                  Premium Plan
                </h4>
                <ul class="list-group">
                  <li class="list-group-item">Odio animi voluptates</li>
                  <li class="list-group-item">Inventore quisquam et</li>
                  <li class="list-group-item">Et perspiciatis suscipit</li>
                  <li class="list-group-item">24/7 Support System</li>
                </ul>
                <a href="#" class="btn">Choose Plan</a>
              </div>
            </div>
          </div>
      
        </div>
      </div>

    </section> --><!-- #pricing -->

    <!--==========================
      Frequently Asked Questions Section
    ============================-->
    <!-- <section id="faq">
      <div class="container">
        <header class="section-header">
          <h3>Frequently Asked Questions</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </header>

        <ul id="faq-list" class="wow fadeInUp">
          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="ion-android-remove"></i></a>
            <div id="faq1" class="collapse" data-parent="#faq-list">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="ion-android-remove"></i></a>
            <div id="faq2" class="collapse" data-parent="#faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="ion-android-remove"></i></a>
            <div id="faq3" class="collapse" data-parent="#faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="ion-android-remove"></i></a>
            <div id="faq4" class="collapse" data-parent="#faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="ion-android-remove"></i></a>
            <div id="faq5" class="collapse" data-parent="#faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="ion-android-remove"></i></a>
            <div id="faq6" class="collapse" data-parent="#faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section> --><!-- #faq -->
    
  </main>

 <?php $this->load->view("footer.php") ?>
