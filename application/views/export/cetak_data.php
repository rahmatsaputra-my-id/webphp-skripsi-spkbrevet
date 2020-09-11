<!DOCTYPE html>
<html>
<head>
  <title> &copy; 2019 Rahmat Saputra. All Rights Reserved</title>
</head>
<body>
              
              <h4 style="text-align: center;">Tabel Pemeringkatan Skor Akhir</h4>
                             <table border="1" align="center">
                                <thead>
                                  <!-- <tr>
                                    <th style="text-align: center;" colspan ="3">Tabel Perhitungan Skor Akhir</th>
                                  <th></th>
                                     <th style="text-align: center;" colspan ="3">Tabel Pemeringkatan Skor Akhir</th>
                                  </tr> -->
                                  <tr>
                                    <!-- <th style="text-align: center;" >ID Alternatif</th>
                                    <th style="text-align: center;" >Nama Alternatif</th>
                                    <th style="text-align: center;" >Hasil Perhitungan</th>
                                    <th></th> -->
                                     <th style="text-align: center;" >Pemeringkatan</th>
                                    <th style="text-align: center;" width="300">Nama Alternatif</th>
                                    <th style="text-align: center;"  >Hasil Perhitungan</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  
                                 <!--  <?php
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
                                      <?php $hasil = $product->rating; echo $angka_format = number_format($hasil,3) ?>
                                    </td>

                                  <?php
                                  $a++;
                                   endforeach;?>
                                    <td></td> -->

                              <?php
                                  $b = 1;
                                  foreach ($nilaib as $product1):
                              ?>
                              <tr>
                                <td style="text-align: center;" >
                                      Peringkat <?php echo $b;?>
                                    </td>
                                    <td style="text-align: center;" width="300">
                                      <?php echo $product1->nama_alternatif;?>
                                    </td>
                                    <td  style="text-align: center;">
                                      <?php $hasil = $product1->rating; echo $angka_format = number_format($hasil,3)  ?>
                                    </td>
                                </tr>
                                <?php
                                  $b++;
                              endforeach;?>
                                


                                 <!--  </tr> -->
                                
                                </tbody>
                             </table>
          <script>
            window.print();
          </script>
                             
    </body>
</html>