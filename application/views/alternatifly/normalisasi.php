    <?php $this->load->view("header_dashboard.php") ?>

  <main id="main">


    <!--==========================
      Services Section
    ============================-->

    <section id="services" class="section-bg ">
      <div class="container">

        <header class="section-header">
          <br>
          <br>
          <br>
          <br>  
          <h3><a href="<?php echo base_url('dashboard');?>">MENU APLIKASI</h3>
          <p>Berisikan beberapa fitur untuk menjalankan aplikasi SPKBrevet.</p>
        </header>

        <div class="row">


          <div class="wow bounceInUp" data-wow-duration="1.4s">
            <div class="box1">
              <div class="icon" style="background: #ecebff;"><i class="ion-ios-clock-outline" style="color: #8660fe;"></i></div>
              <h4 class="title" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><a href="">Normalisasi Data</a></h4>

              <p class="description">Pada menu Normalisasi Data ini berisikan matriks pertama yang didapat dari hasil pencocokan rating pada menu alternatif data lalu, akan dicari nilai maksimal dari setiap kolom yang terdapat pada matriks pertama. Setelah semua didapat lalu cari nilai ternormalisasi dengan rumus R<sub>ii</sub> = ( X<sub>ij</sub> / max{X<sub>ij</sub>}) jika pada kolom benefit dan dengan rumus R<sub>ii</sub> = ( min{X<sub>ij</sub>} / X<sub>ij</sub>) jika pada kolom cost lalu hasilnya dimasukkan di tabel ternormalisasi sehingga diperoleh matriks ternormalisasi R.<br><br>

              Berikut tahap - tahap yang diperlukan untuk melakukan normalisasi data:<br>

     <div id="kpl1" class="text-center text-lg-left cta-text" data-parent="#manual-list">         
      <ol id="manual-list" class="wow fadeInUp container">
            
          <li>
            <a data-toggle="collapse" class="collapsed" href="#thp1">Membentuk matriks pertama.</a>
              <div id="thp1" class="collapse" >
                <!-- data-parent="#manual-list" -->
              Pindahkan  data yang terdapat pada menu alternatif data kedalam nilai matriks pertama.
              <br></p>

              <div id="wrapper">
                  
                    <div id="content-wrapper">

                      <div class="container-fluid">

                        
                        <!-- DataTables -->
                          <div class="card mb-3 text-lg-left">
                            <!-- <div class="card-header text-center">
                              <a href="">Nilai Matrix Pertama</a>
                            </div> -->
                          <div class="card-body"> 

                            <div class="table-responsive">
                              <table class="table table-hover table-striped table-bordered data" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                  <tr>
                                    <th style="text-align: center;" colspan ="7">Nilai Matrix Pertama</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php foreach ($nilai as $product): ?>

                                  <tr>
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
                                  </tr>
                                  <?php endforeach; ?>
                                
                                </tbody>
                              </table>
                            </div>
                          </div>

                      </div>
                      <!-- /.container-fluid -->

                      <!-- Sticky Footer -->
                      
                    </div>
                    <!-- /.content-wrapper -->

                  </div>
                  <!-- /#wrapper -->

                  <?php $this->load->view("_partials/js.php") ?>
              </div>
          </li>

        <li>
            <a data-toggle="collapse"  href="#thp2">Menentukan nilai maksimal matriks pertama.</a>
              <div id="thp2" class="collapse" >
                <!-- data-parent="#manual-list" -->
              <p class="description">Carilah nilai maksimal dari kolom yang merupakan atribut benefit lalu carilah nilai minimal dari kolom yang merupakan atribut cost yang terdapat pada matriks pertama. Dikarenakan pada setiap kolom pada aplikasi SPKBrevet ini menggunakan atribut benefit maka dicarilah nilai maksimal pada setiap kolom yaitu kolom k<sub>1</sub>, kolom k<sub>2</sub>, kolom <sub>k3</sub>, kolom <sub>k4</sub>, kolom k<sub>5</sub>, kolom k<sub>6</sub>, kolom k<sub>7</sub>.</p><br>

              <div id="wrapper">
                  
                    <div id="content-wrapper">

                      <div class="container-fluid">

                        
                        <!-- DataTables -->
                          <div class="card mb-3 text-lg-left">
                            
                          <div class="card-body"> 

                            <div class="table-responsive">
                              <table class="table table-hover table-bordered data" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                  <tr>
                                    <th style="text-align: center;" colspan ="7">Nilai Maksimal Matriks Pertama</th>
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
                                <tr>
                                    <td style="text-align: center;">
                                      <?php echo $k['k1'];?>
                                    </td>
                                    <td style="text-align: center;">
                                      <?php echo $k['k2'] ?>
                                    </td>
                                    <td style="text-align: center;">
                                      <?php echo $k['k3'] ?>
                                    </td>
                                    <td style="text-align: center;">
                                      <?php echo $k['k4'] ?>
                                    </td>
                                    <td style="text-align: center;">
                                      <?php echo $k['k5'] ?>
                                    </td>
                                    <td style="text-align: center;">
                                      <?php echo $k['k6'] ?>
                                    </td>
                                    <td style="text-align: center;">
                                      <?php echo $k['k7'] ?>
                                    </td>

                                  </tr>
                                 
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>

                      </div>
                      <!-- /.container-fluid -->

                      <!-- Sticky Footer -->
                      
                    </div>
                    <!-- /.content-wrapper -->

                  </div>
                  <!-- /#wrapper -->

                  <?php $this->load->view("_partials/js.php") ?>
          </div>
          </li>

    <li>
            <a data-toggle="collapse" class="collapsed" href="#thp3">Mencari nilai dari atribut benefit atau cost pada setiap kolom.</i></a>
              <div id="thp3" class="collapse" >
                  <!-- data-parent="#manual-list" -->
                  <p class="description">
                  Carilah nilai atribut benefit atau cost dari tiap baris pada kolom.<br>Kolom atribut <b>benefit</b> merupakan kolom yang mempunyai nilai terbesar yang paling baik.<br>kolom atribut <b>cost</b> merupakan kolom yang mempunyai nilai terkecil yang paling baik.<br><br>
                  Jika kolom <b>benefit</b> menggunakan rumus : <img src="<?php echo base_url() ?>assets/img/rumus1.jpeg"><br>
                  <br>Jika kolom <b>cost</b> menggunakan rumus : <!-- <var>R<sub>ii</sub> = ( min{X<sub>ij</sub>} / X<sub>ij</sub> )</var> --><img src="<?php echo base_url() ?>assets/img/rumus2.jpeg"><br><br>  

                  Pada kolom C<sub>1</sub> merupakan kolom benefit dan nilai maksimalnya adalah ‘<?php echo $k['k1'];?>’, maka tiap baris dari kolom C<sub>1</sub> dibagi oleh nilai maksimal kolom C<sub>1</sub><br>
                  R<sub>11</sub> = <?php echo $row1['k1'];?> / <?php echo $k['k1'];?> = <?php echo $row1['k1'] / $k['k1'];?><br>
                  <!-- R<sub>21</sub> = <?php echo $row2['k1'];?> / <?php echo $k['k1'];?> = <?php echo $row2['k1'] / $k['k1'];?><br>
                  R<sub>31</sub> = <?php echo $row3['k1'];?> / <?php echo $k['k1'];?> = <?php echo $row3['k1'] / $k['k1'];?><br> -->
                  <br>

                  Pada kolom C<sub>2</sub> merupakan kolom benefit dan nilai maksimalnya adalah ‘<?php echo $k['k2'];?>’, maka tiap baris dari kolom C<sub>2</sub> dibagi oleh nilai maksimal kolom C<sub>2</sub><br>
                  R<sub>12</sub> = <?php echo $row1['k2'];?> / <?php echo $k['k2'];?> = <?php echo $row1['k2'] / $k['k2'];?><br>
                  <!-- R<sub>22</sub> = <?php echo $row2['k2'];?> / <?php echo $k['k2'];?> = <?php echo $row2['k2'] / $k['k2'];?><br>
                  R<sub>32</sub> = <?php echo $row3['k2'];?> / <?php echo $k['k2'];?> = <?php echo $row3['k2'] / $k['k2'];?><br> -->
                  
                  <br>

                  Pada kolom C<sub>3</sub> merupakan kolom benefit dan nilai maksimalnya adalah ‘<?php echo $k['k3'];?>’, maka tiap baris dari kolom C<sub>3</sub> dibagi oleh nilai maksimal kolom C<sub>3</sub><br>
                  R<sub>13</sub> = <?php echo $row1['k3'];?> / <?php echo $k['k3'];?> = <?php echo $row1['k3'] / $k['k3'];?><br>
                  <!-- R<sub>23</sub> = <?php echo $row2['k3'];?> / <?php echo $k['k3'];?> = <?php echo $row2['k3'] / $k['k3'];?><br>
                  R<sub>33</sub> = <?php echo $row3['k3'];?> / <?php echo $k['k3'];?> = <?php echo $row3['k3'] / $k['k3'];?><br> -->
                  
                  <br>

                  Pada kolom C<sub>4</sub> merupakan kolom benefit dan nilai maksimalnya adalah ‘<?php echo $k['k4'];?>’, maka tiap baris dari kolom C<sub>4</sub> dibagi oleh nilai maksimal kolom C<sub>4</sub><br>
                  R<sub>14</sub> = <?php echo $row1['k4'];?> / <?php echo $k['k4'];?> = <?php echo $row1['k4'] / $k['k4'];?><br>
                 <!--  R<sub>24</sub> = <?php echo $row2['k4'];?> / <?php echo $k['k4'];?> = <?php echo $row2['k4'] / $k['k4'];?><br>
                  R<sub>34</sub> = <?php echo $row3['k4'];?> / <?php echo $k['k4'];?> = <?php echo $row3['k4'] / $k['k4'];?><br> -->
                  
                  <br>

                  Pada kolom C<sub>5</sub> merupakan kolom benefit dan nilai maksimalnya adalah ‘<?php echo $k['k5'];?>’, maka tiap baris dari kolom C<sub>5</sub> dibagi oleh nilai maksimal kolom C<sub>5</sub><br>
                  R<sub>15</sub> = <?php echo $row1['k5'];?> / <?php echo $k['k5'];?> = <?php echo $row1['k5'] / $k['k5'];?><br>
                 <!--  R25 = <?php echo $row2['k5'];?> / <?php echo $k['k5'];?> = <?php echo $row2['k5'] / $k['k5'];?><br>
                  R35 = <?php echo $row3['k5'];?> / <?php echo $k['k5'];?> = <?php echo $row3['k5'] / $k['k5'];?><br> -->
                  
                  <br>

                  Pada kolom C<sub>6</sub> merupakan kolom benefit dan nilai maksimalnya adalah ‘<?php echo $k['k6'];?>’, maka tiap baris dari kolom C<sub>6</sub> dibagi oleh nilai maksimal kolom C<sub>6</sub><br>
                  R<sub>16</sub> = <?php echo $row1['k6'];?> / <?php echo $k['k6'];?> = <?php echo $row1['k6'] / $k['k6'];?><br>
                  <!-- R<sub>26</sub> = <?php echo $row2['k6'];?> / <?php echo $k['k6'];?> = <?php echo $row2['k6'] / $k['k6'];?><br>
                  R<sub>36</sub> = <?php echo $row3['k6'];?> / <?php echo $k['k6'];?> = <?php echo $row3['k6'] / $k['k6'];?><br> -->
                  
                  <br>

                  Pada kolom C<sub>7</sub> merupakan kolom benefit dan nilai maksimalnya adalah ‘<?php echo $k['k7'];?>’, maka tiap baris dari kolom C<sub>7</sub> dibagi oleh nilai maksimal kolom C<sub>7</sub><br>
                  R<sub>17</sub> = <?php echo $row1['k7'];?> / <?php echo $k['k7'];?> = <?php echo $row1['k7'] / $k['k7'];?><br>
                  <!-- R<sub>27</sub> = <?php echo $row2['k7'];?> / <?php echo $k['k7'];?> = <?php echo $row2['k7'] / $k['k7'];?><br>
                  R<sub>37</sub> = <?php echo $row3['k7'];?> / <?php echo $k['k7'];?> = <?php echo $row3['k7'] / $k['k7'];?><br> -->
                  
                  <br>

                 Masukan semua hasil penghitungan tersebut kedalam tabel yang kali ini disebut tabel faktor ternormalisasi, Berikut tampilan tabel faktor ternormalisasi.
                  </p><br>

                  <div id="wrapper">
                  
                    <div id="content-wrapper">

                      <div class="container-fluid">

                        
                        <!-- DataTables -->
                          <div class="card mb-3 text-lg-left">
                            
                          <div class="card-body"> 

                            <div class="table-responsive">
                              <table class="table table-hover table-striped table-bordered data" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                  <tr>
                                    <th style="text-align: center;" colspan ="7">Tabel Ternomalisasi</th>
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
                                  
                                   foreach ($nilai as $product): ?>
                                  
                                  <tr>
                                    <td  style="text-align: center;">
                                      <?php
                                      $rumus = (($product->k1 / $k['k1']));
                                      echo $angka_format = number_format($rumus,3);
                                      ?>
                                    </td>
                                
                                    <td  style="text-align: center;">
                                      <?php
                                      $rumus2 = (($product->k2 / $k['k2']));
                                      echo $angka_format = number_format($rumus2,3);
                                      ?>
                                    </td>
                                  
                                    <td  style="text-align: center;">
                                      <?php
                                      $rumus3 = (($product->k3 / $k['k3']));
                                      echo $angka_format = number_format($rumus3,3);
                                      ?>
                                    </td>
                                  
                                    <td  style="text-align: center;">
                                      <?php
                                      $rumus4 = (($product->k4 / $k['k4']));
                                      echo $angka_format = number_format($rumus4,3);
                                      ?>
                                    </td>
                                  
                                    <td  style="text-align: center;">
                                      <?php
                                      $rumus5 = (($product->k5 / $k['k5']));
                                      echo $angka_format = number_format($rumus5,3);
                                      ?>
                                    </td>
                                  
                                    <td  style="text-align: center;">
                                      <?php
                                      $rumus6 = (($product->k6 / $k['k6']));
                                      echo $angka_format = number_format($rumus6,3);
                                      ?>
                                    </td>
                                  
                                    <td  style="text-align: center;">
                                      <?php
                                      $rumus7 = (($product->k7 / $k['k7']));
                                      echo $angka_format = number_format($rumus7,3);
                                      ?>
                                    </td>
                                  </tr>

                                  <?php
                                   endforeach;?>

                                  </tr>
                                </tbody>
                                <tfoot>
                                  <tr>
                                    <th style="text-align: center;">K<sub>1</sub></th>
                                    <th style="text-align: center;">K<sub>2</sub></th>
                                    <th style="text-align: center;">K<sub>3</sub></th>
                                    <th style="text-align: center;">K<sub>4</sub></th>
                                    <th style="text-align: center;">K<sub>5</sub></th>
                                    <th style="text-align: center;">K<sub>6</sub></th>
                                    <th style="text-align: center;">K<sub>7</sub></th>
                                  </tr>
                                </tfoot>
                              </table>
                            </div>
                          </div>
                        </div>

                      </div>
                      <!-- /.container-fluid -->

                      <!-- Sticky Footer -->
                      
                    </div>
                    <!-- /.content-wrapper -->

                  </div>
                  <!-- /#wrapper -->

                  <?php $this->load->view("_partials/js.php") ?>
                </div>
              </li>

        <li>
            <a data-toggle="collapse" class="collapsed" href="#thp4">Perhitungan skor akhir dari data.</i></a>
              <div id="thp4" class="collapse">
                <!-- data-parent="#manual-list" -->
                <br>

                <div id="wrapper">
                  
                    <div id="content-wrapper">

                      <div class="container-fluid">

                        
                        <!-- DataTables -->
                          <div class="card mb-3 text-lg-left">
                            
                          <div class="card-body"> 

                            <div class="table-responsive">
                              <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                  <tr>
                                    <th style="text-align: center;" colspan ="7">Bobot Kriteria</th>
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
                                <tr>
                                    <td style="text-align: center;">
                                      <?php $bbt1 =$bbtAll['bobot1']*100; echo $bbt1_format = number_format($bbt1,2).'%'?>
                                    </td>
                                    <td style="text-align: center;">
                                      <?php $bbt2 =$bbtAll['bobot2']*100; echo $bbt2_format = number_format($bbt2,2).'%' ?>
                                    </td>
                                    <td style="text-align: center;">
                                      <?php $bbt3 =$bbtAll['bobot3']*100; echo $bbt3_format = number_format($bbt3,2).'%' ?>
                                    </td>
                                    <td style="text-align: center;">
                                      <?php $bbt4 =$bbtAll['bobot4']*100; echo $bbt4_format = number_format($bbt4,2).'%' ?>
                                    </td>
                                    <td style="text-align: center;">
                                      <?php $bbt5 =$bbtAll['bobot5']*100; echo $bbt5_format = number_format($bbt5,2).'%' ?>
                                    </td>
                                    <td style="text-align: center;">
                                      <?php $bbt6 =$bbtAll['bobot6']*100; echo $bbt6_format = number_format($bbt6,2).'%' ?>
                                    </td>
                                    <td style="text-align: center;">
                                      <?php $bbt7 =$bbtAll['bobot7']*100; echo $bbt7_format = number_format($bbt7,2).'%' ?>
                                    </td>
                                </tr> 
                                                           
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>

                      </div>
                      <!-- /.container-fluid -->

                      <!-- Sticky Footer -->
                      
                    </div>
                    <!-- /.content-wrapper -->

                  </div>
                  <!-- /#wrapper -->

                  <?php $this->load->view("_partials/js.php") ?>
                  <p class="description">
                    Dan setelah dinormalisasikan, semua nilai di hitung menggunakan rumus :<br><var>S<sub>i</sub> = (r<sub>i1</sub> * w<sub>1</sub>) + (r<sub>i2</sub> * w<sub>2</sub>) + (r<sub>i3</sub> * w<sub>3</sub>) + (r<sub>i4</sub> * w<sub>4</sub>) + (r<sub>i5</sub> * w<sub>5</sub>) + (r<sub>i6</sub> * w<sub>6</sub>) + (r<sub>i7</sub> * w<sub>7</sub>)</var>.<br><br>

                    Dengan keterangan:<br>
                    <i>S<sub>i</sub></i> = Skor akhir untuk alternatif - i<br>
                    <i>r<sub>i1</sub></i> = Nilai normalisasi kriteria k<sub>1</sub> (<?php echo $krit1['nama_kriteria']?>) <!-- untuk alternatif - i1 --><br>
                    <i>w<sub>1</sub></i> = Bobot nilai k<sub>1</sub> ((<?php echo $krit1['nama_kriteria']?>))<br>
                    <i>r<sub>i2</sub></i> = Nilai normalisasi kriteria k<sub>2</sub> (<?php echo $krit2['nama_kriteria']?>) <!-- untuk alternatif - i2 --><br>
                    <i>w<sub>2</sub></i> = Bobot nilai k<sub>2</sub> (<?php echo $krit2['nama_kriteria']?>)<br>
                    <i>r<sub>i3</sub></i> = Nilai normalisasi kriteria k<sub>3</sub> (<?php echo $krit3['nama_kriteria']?>) <!-- untuk alternatif - i3 --><br>
                    <i>w<sub>3</sub></i> = Bobot nilai k<sub>3</sub> (<?php echo $krit3['nama_kriteria']?>)<br>
                    <i>r<sub>i4</sub></i> = Nilai normalisasi kriteria k<sub>4</sub> (<?php echo $krit4['nama_kriteria']?>) <!-- untuk alternatif - i4 --><br>
                    <i>w<sub>4</sub></i> = Bobot nilai k<sub>4</sub> (<?php echo $krit4['nama_kriteria']?>)<br>
                    <i>r<sub>i5</sub></i> = Nilai normalisasi kriteria k<sub>5</sub> (<?php echo $krit5['nama_kriteria']?>)<!--  untuk alternatif - i5 --><br>
                    <i>w<sub>5</sub></i> = Bobot nilai k<sub>5</sub> (<?php echo $krit5['nama_kriteria']?>)<br>
                    <i>r<sub>i6</sub></i> = Nilai normalisasi kriteria k<sub>6</sub> (<?php echo $krit6['nama_kriteria']?>) <!-- untuk alternatif - i6 --><br>
                    <i>w<sub>6</sub></i> = Bobot nilai k<sub>6</sub> (<?php echo $krit6['nama_kriteria']?>)<br>
                    <i>r<sub>i7</sub></i> = Nilai normalisasi kriteria k<sub>7</sub> (<?php echo $krit7['nama_kriteria']?>) <!-- untuk alternatif - i7 --><br>
                    <i>w<sub>7</sub></i> = Bobot nilai k<sub>7</sub> (<?php echo $krit7['nama_kriteria']?>)<br>
                  </p>

                  <p class="description">
                  <br>
                  Berikut contoh perhitungan yang didapat setelah tabel ternormalisasi:<br><br>
     
                  A<sub>1</sub> = (
                      <?php $angka = $row1['k1'] / $k['k1']; $angka_format = number_format($angka,3); echo $angka_format;?> * 
                    <?php echo $bbt1_format ;?> 
                    ) + (
                      <?php $angka = $row1['k2'] / $k['k2']; $angka_format = number_format($angka,3); echo $angka_format ;?> *
                    <?php echo $bbt2_format ;?>
                    ) + (
                      <?php $angka = $row1['k3'] / $k['k3']; $angka_format = number_format($angka,3); echo $angka_format ;?> *
                    <?php echo $bbt3_format ;?>
                    ) + (
                      <?php $angka = $row1['k4'] / $k['k4']; $angka_format = number_format($angka,3); echo $angka_format ;?> *
                    <?php echo $bbt4_format ;?>
                    ) + (
                      <?php $angka = $row1['k5'] / $k['k5']; $angka_format = number_format($angka,3); echo $angka_format ;?> *
                    <?php echo $bbt5_format ;?>
                    ) + (
                      <?php $angka = $row1['k6'] / $k['k6']; $angka_format = number_format($angka,3); echo $angka_format ;?> *
                    <?php echo $bbt6_format ;?>
                    ) + (
                      <?php $angka = $row1['k7'] / $k['k7']; $angka_format = number_format($angka,3); echo $angka_format ;?> *
                    <?php echo $bbt7_format;?>
                    )<br>
                  
                  A<sub>1</sub> <?php $hasil =   $rate['rating']; echo $angka_format = number_format($hasil,3)?>
                  <br><br>

                  <!-- A<sub>2</sub> = (
                      <?php $angka = $row2['k1'] / $k['k1']; $angka_format = number_format($angka,3); echo $angka_format =number_format($angka,4);?> * 
                    <?php echo $bbt1 ;?> 
                    ) + (
                      <?php $angka = $row2['k2'] / $k['k2']; $angka_format = number_format($angka,3); echo $angka_format = number_format($angka,4);?> *
                    <?php echo $bbt2 ;?>
                    ) + (
                      <?php $angka = $row2['k3'] / $k['k3']; $angka_format = number_format($angka,3); echo $angka_format = number_format($angka,4);?> *
                    <?php echo $bbt3 ;?>
                    ) + (
                      <?php $angka = $row2['k4'] / $k['k4']; $angka_format = number_format($angka,3); echo $angka_format = number_format($angka,4);?> *
                    <?php echo $bbt4 ;?>
                    ) + (
                      <?php $angka = $row2['k5'] / $k['k5']; $angka_format = number_format($angka,3); echo $angka_format = number_format($angka,4);?> *
                    <?php echo $bbt5 ;?>
                    ) + (
                      <?php $angka = $row2['k6'] / $k['k6']; $angka_format = number_format($angka,3); echo $angka_format = number_format($angka,4);?> *
                    <?php echo $bbt6 ;?>
                    ) + (
                      <?php $angka = $row2['k7'] / $k['k7']; $angka_format = number_format($angka,3); echo $angka_format = number_format($angka,4);?> *
                    <?php echo $bbt7 ;?>
                    )<br>
                  
                  A<sub>2</sub> =  <?php $angka = ((($row2['k1'] / $k['k1'])*($bbt1 ))+
                                       (($row2['k2'] / $k['k2'])*($bbt2 ))+
                                       (($row2['k3'] / $k['k3'])*($bbt3 ))+
                                       (($row2['k4'] / $k['k4'])*($bbt4 ))+
                                       (($row2['k5'] / $k['k5'])*($bbt5 ))+
                                       (($row2['k6'] / $k['k6'])*($bbt6 ))+
                                       (($row2['k7'] / $k['k7'])*($bbt7 )));
                                      $angka_format2 = number_format($angka,3);
                                      echo $angka_format2 = number_format($angka,3);?>
                  <br><br>

                  A<sub>3</sub> = (
                      <?php $angka = $row3['k1'] / $k['k1']; $angka_format = number_format($angka,3); echo $angka_format =number_format($angka,4);?> * 
                    <?php echo $bbt1 ;?> 
                    ) + (
                      <?php $angka = $row3['k2'] / $k['k2']; $angka_format = number_format($angka,3); echo $angka_format = number_format($angka,4);?> *
                    <?php echo $bbt2 ;?>
                    ) + (
                      <?php $angka = $row3['k3'] / $k['k3']; $angka_format = number_format($angka,3); echo $angka_format = number_format($angka,4);?> *
                    <?php echo $bbt3 ;?>
                    ) + (
                      <?php $angka = $row3['k4'] / $k['k4']; $angka_format = number_format($angka,3); echo $angka_format = number_format($angka,4);?> *
                    <?php echo $bbt4 ;?>
                    ) + (
                      <?php $angka = $row3['k5'] / $k['k5']; $angka_format = number_format($angka,3); echo $angka_format = number_format($angka,4);?> *
                    <?php echo $bbt5 ;?>
                    ) + (
                      <?php $angka = $row3['k6'] / $k['k6']; $angka_format = number_format($angka,3); echo $angka_format = number_format($angka,4);?> *
                    <?php echo $bbt6 ;?>
                    ) + (
                      <?php $angka = $row3['k7'] / $k['k7']; $angka_format = number_format($angka,3); echo $angka_format = number_format($angka,4);?> *
                    <?php echo $bbt7 ;?>
                    )<br>
                  
                  A<sub>3</sub> =  <?php $angka = ((($row3['k1'] / $k['k1'])*$bbtAll['bobot1'])+
                                       (($row3['k2'] / $k['k2'])*$bbtAll['bobot2'])+
                                       (($row3['k3'] / $k['k3'])*$bbtAll['bobot3'])+
                                       (($row3['k4'] / $k['k4'])*$bbtAll['bobot4'])+
                                       (($row3['k5'] / $k['k5'])*$bbtAll['bobot5'])+
                                       (($row3['k6'] / $k['k6'])*$bbtAll['bobot6'])+
                                       (($row3['k7'] / $k['k7'])*$bbtAll['bobot7']));
                                      $angka_format3 = number_format($angka,3);
                                      echo $angka_format3 = number_format($angka,3);?>
                  <br><br> -->
              </p>
              </div>
            </li>

            <li>
            <a data-toggle="collapse" class="collapsed" href="#thp5">Hasil seluruh skor akhir.</i></a>
              <div id="thp5" class="collapse" >
                <!-- data-parent="#manual-list" -->

                 Berikut tabel rangkuman skor akhir penjumlahan yang didapat setelah tabel ternormalisasi dan masukkan semua data yang telah dihitung ke dalam database dengan cara mengisi tabel dibawah ini:
                 </p>
                  
                  <div id="wrapper">
                  
                    <div id="content-wrapper">

                      <div class="container-fluid">

                        <!-- DataTables -->
                          <form action="<?php echo site_url("welcome/ranking/");?>" method="post" >
                            <input class="btn btn-success" type="submit" name="btn" value="Pemeringkatan" /><br><br>
                          </form>
                          <div class="card mb-3 text-lg-left">
                           

                        <!-- <form style="text-align: center;" action="<?php echo site_url('welcome/normalisasi_skor/');?>" method="post" >     -->
                          <div class="card-body"> 

                            <div class="table-responsive">
                              <table class="table table-hover table-striped table-bordered data" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                  <tr>
                                    <th style="text-align: center;" colspan ="3">Tabel Rangkuman Skor</th>
                                  </tr>
                                  <tr>
                                    <th style="text-align: center;" >ID Alternatif</th>
                                    <th style="text-align: center;" >Nama Alternatif</th>
                                    <th style="text-align: center;" >Hasil Perhitungan</th>
                                    <!-- <th style="text-align: center;" >Skor Akhir Database</th>
                                    <th style="text-align: center;" >Action</th> -->
                                  </tr>
                                </thead>
                                 <tfoot>
                                  <tr>
                                    <th style="text-align: center;" >ID Alternatif</th>
                                    <th style="text-align: center;" >Nama Alternatif</th>
                                    <th style="text-align: center;" >Hasil Perhitungan</th>
                                   
                                  </tr>
                                </tfoot>
                                <tbody>
                                  
                                  <?php
                                  $a = 1;
                                   foreach ($nilai as $product):

                                  ?>
                                  
                                  <tr>
                                    <td style="text-align: center;" >
                                      A<sub><?php echo $a;?></sub>
                                    </td>
                                    <td style="text-align: center;" >
                                      <?php echo $product->nama_alternatif;?>
                                    </td>
                                    <td  style="text-align: center;">
                                      <?php $hasil = $product->rating; echo $angka_format = number_format($hasil,3)  ?>
                                    </td>
                          
                                  </tr>

                                  <?php
                                  $a++;
                                   endforeach;?>

                                  </tr>
                                
                                </tbody>
                              </table>
                            </div>
                          </div>
                          
                        </form>
                            
                        </div>
                        </div>
                      <!-- /.container-fluid -->

                      <!-- Sticky Footer -->
                      
                    </div>
                    <!-- /.content-wrapper -->

                  </div>
                  <!-- /#wrapper -->


            </div>
          </li>
                  
      </div>

  </ol>
            <!-- <a style="text-align: center;" href="<?php echo base_url('ranking');?>">Lanjut ke Halaman Rangking Data >>></a><br> -->
                              
    </section><!-- #services -->

    <!--==========================
      Why Us Section
    ============================-->
    <!-- <section id="why-us" class="wow fadeIn">
      <div class="container-fluid">
        
        <header class="section-header">
          <h3>Why choose This App?</h3>
          <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
        </header>

        <div class="row">

          <div class="col-lg-6">
            <div class="why-us-img">
              <img src="<?php echo base_url() ?>assets/img/why-us.jpg" alt="" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-6">
            <div class="why-us-content">
              <p>Molestiae omnis numquam corrupti omnis itaque. Voluptatum quidem impedit. Odio dolorum exercitationem est error omnis repudiandae ad dolorum sit.</p>
              <p>
                Explicabo repellendus quia labore. Non optio quo ea ut ratione et quaerat. Porro facilis deleniti porro consequatur
                et temporibus. Labore est odio.

                Odio omnis saepe qui. Veniam eaque ipsum. Ea quia voluptatum quis explicabo sed nihil repellat..
              </p>

              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-diamond" style="color: #f058dc;"></i>
                <h4>Corporis dolorem</h4>
                <p>Commodi quia voluptatum. Est cupiditate voluptas quaerat officiis ex alias dignissimos et ipsum. Soluta at enim modi ut incidunt dolor et.</p>
              </div>

              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-object-group" style="color: #ffb774;"></i>
                <h4>Eum ut aspernatur</h4>
                <p>Molestias eius rerum iusto voluptas et ab cupiditate aut enim. Assumenda animi occaecati. Quo dolore fuga quasi autem aliquid ipsum odit. Perferendis doloremque iure nulla aut.</p>
              </div>
              
              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-language" style="color: #589af1;"></i>
                <h4>Voluptates dolores</h4>
                <p>Voluptates nihil et quis omnis et eaque omnis sint aut. Ducimus dolorum aspernatur. Totam dolores ut enim ullam voluptas distinctio aut.</p>
              </div>
              
            </div>

          </div>

        </div>

      </div>

      <div class="container">
        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">274</span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">421</span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,364</span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">18</span>
            <p>Hard Workers</p>
          </div>
  
        </div>

      </div>
    </section> -->

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
              <!-- <p>
               Pada Aplikasi SPKBrevet ini kita akan menggunakan metode SAW (Simple Weighting Additive) untuk perhitungan menggunakan data dari alternatif data, kriteria data, dan hasil normalisasi data. Pada Metode SAW ini terdapat 4 buah langkah.
              </p> -->
          

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
      
      </ul>
    </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Features Section
    ============================-->
    <!-- <section id="features">
      <div class="container">

        <div class="row feature-item">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/features-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4>
            <p>
              Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
            </p>
            <p>
              Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
            </p>
          </div>
        </div>

        <div class="row feature-item mt-5 pt-5">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/features-2.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>Neque saepe temporibus repellat ea ipsum et. Id vel et quia tempora facere reprehenderit.</h4>
            <p>
             Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis beatae incidunt sunt. 
            </p>
            <p>
              Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
            </p>
            <p>
              Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga mollitia exercitationem nam accusantium provident quia.
            </p>
          </div>
          
        </div>

      </div>
    </section> --><!-- #about -->

    <!--==========================
      Portfolio Section
    ============================-->
    <!-- <section id="portfolio" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url() ?>assets/img/portfolio/app1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 1</a></h4>
                <p>App</p>
                <div>
                  <a href="<?php echo base_url() ?>assets/img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url() ?>assets/img/portfolio/web3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
                <div>
                  <a href="<?php echo base_url() ?>assets/img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url() ?>assets/img/portfolio/app2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
                <div>
                  <a href="<?php echo base_url() ?>assets/img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url() ?>assets/img/portfolio/card2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
                <div>
                  <a href="<?php echo base_url() ?>assets/img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url() ?>assets/img/portfolio/web2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
                <div>
                  <a href="<?php echo base_url() ?>assets/img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url() ?>assets/mg/portfolio/app3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
                <div>
                  <a href="<?php echo base_url() ?>assets/img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url() ?>assets/img/portfolio/card1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
                <div>
                  <a href="<?php echo base_url() ?>assets/img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url() ?>assets/img/portfolio/card3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
                <div>
                  <a href="<?php echo base_url() ?>assets/img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src=<?php echo base_url() ?>assets/img/portfolio/web1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
                <div>
                  <a href="<?php echo base_url() ?>assets/img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> --><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <!-- <section id="testimonials">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">
    
              <div class="testimonial-item">
                <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
              </div>

            </div>

          </div>
        </div>


      </div>
    </section> --><!-- #testimonials -->

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
