<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Volem - Emergency Volunteer</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url('../volem/assets/backend/css/bootstrap.min.css');?>" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url('../volem/assets/backend/css/animate.min.css');?>" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url('../volem/assets/backend/css/paper-dashboard.css');?>" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url('../volem/assets/backend/css/demo.css');?>" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('../volem/assets/backend/css/themify-icons.css');?>" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="200x200" href="<?php echo base_url('../volem/assets/logo/VOLEM2.png');?>">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
    Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
    Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
  -->

      <div class="sidebar-wrapper">
            <div class="logo">
                <a href=" " class="simple-text">
                <img style="width: 42px;max-height: 42px;" src="<?php echo base_url('../volem/assets/logo/VOLEM3.png');?>">
                    Member Volem
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="<?php echo base_url('relawan/dashboard'); ?>">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('relawan/profil'); ?>">
                        <i class="ti-user"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('relawan/vojob'); ?>">
                        <i class="ti-view-list-alt"></i>
                        <p>Vojob</p>
                    </a>
                </li>
                <li class="active">
                    <a href="<?php echo base_url('relawan/posbencana'); ?>">
                        <i class="ti-map"></i>
                        <p>Pos Bencana</p>
                    </a>
                </li>
            </ul>
      </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Rekomendasi Pos</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-user"></i>
                                <p><?php echo $this->session->userdata("usernameR"); ?></p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('relawanlogin/logout'); ?>">
                <i class="ti-settings"></i>
                <p>Logout</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-md-12">
                        <div class="card">
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                <?php
                  
                   $bobot = array(0.40,0.30,0.20);

                   //Buat fungsi tampilkan nama
                   function getNama($id){
                    $q =mysql_query("SELECT * FROm pos where id_pos = '$id'");
                    $d = mysql_fetch_array($q);
                    return $d['nama_pos'];
                   }
                   
                   //Setelah bobot terbuat select semua di tabel Matrik
                   $sql = mysql_query("SELECT * FROM sawmatriks");
                   //Buat tabel untuk menampilkan hasil
                   
                   echo "<div class='header'>
                                <h3 class='title'>Matrik Awal</h3>
                            </div>
                    <thead>
                     <th>No</th>
                     <th>Pos</th>
                     <th>Jenis Bencana</th>
                     <th>Jumlah Relawan</th>
                     <th>Jarak Pos</th>
                     <th>Poin</th>
                    </thead>
                    ";
                   $no = 1;
                   while ($dt = mysql_fetch_array($sql)) {
                    $jumlah= ($dt['jbencana'])+($dt['jrelawan'])+($dt['jpos']);
                    echo "<tr>
                     <td>$no</td>
                     <td>".getNama($dt['id_pos'])."</td>
                     <td>$dt[jbencana]</td>
                     <td>$dt[jrelawan]</td>
                     <td>$dt[jpos]</td>
                     <td>$jumlah</td>
                    </tr>";
                   $no++;
                   }
                   echo "</table>";

                   //Lakukan Normalisasi dengan rumus pada langkah 2
                   //Cari Max atau min dari tiap kolom Matrik
                   $crMax = mysql_query("SELECT 
                        max(jbencana) as maxK1, 
                        max(jrelawan) as maxK2,
                        max(jpos) as maxK3
                        
                     FROM sawmatriks");
                   $max = mysql_fetch_array($crMax);

                   //Hitung Normalisasi tiap Elemen
                   $sql2 = mysql_query("SELECT * FROM sawmatriks");
                   //Buat tabel untuk menampilkan hasil
                   echo "<div class='content table-responsive table-full-width'>
                                <table class='table table-striped'>
                   <div class='header'>
                                <h3 class='title'>Matrik Normalisasi</h3>
                            </div>
                    <thead>
                     <th>No</th>
                     <th>Nama Pos</th>
                     <th>Jenis Bencana</th>
                     <th>Jumlah Relawan</th>
                     <th>Jarak Pos</th>
                    </thead>
                    </div>
                    ";
                   $no = 1;
                   while ($dt2 = mysql_fetch_array($sql2)) {
                    echo "<tr>
                     <td>$no</td>
                     <td>".getNama($dt2['id_pos'])."</td>
                     <td>".round($dt2['jbencana']/$max['maxK1'],1)."</td>
                     <td>".round($dt2['jrelawan']/$max['maxK2'],1)."</td>
                     <td>".round($dt2['jpos']/$max['maxK3'],1)."</td>
                    </tr>";
                   $no++;
                   }
                   echo "</table>";

                   //Proses perangkingan 
                   $sql3 = mysql_query("SELECT * FROM sawmatriks");
                   // hasil
                   echo "<div class='content table-responsive table-full-width'>
                                <table class='table table-striped'>
                   <div class='header'>
                                <h3 class='title'>Perangkingan Pos</h3>
                            </div>
                    <thead>
                     <th>No</th>
                     <th>Nama Pos</th>
                     <th>Jumlah Poin</th>
                     <th>Hasil Akhir</th>
                    </thead>
                    </div>
                    ";
                    
                  //(Normalisasi x bobot)
                   while ($dt3 = mysql_fetch_array($sql3)) {
                    $jumlah= ($dt3['jbencana'])+($dt3['jrelawan'])+($dt3['jpos']);
                    $poin= round(
                     (($dt3['jbencana']/$max['maxK1'])*$bobot[0])+
                     (($dt3['jrelawan']/$max['maxK2'])*$bobot[1])+
                     (($dt3['jpos']/$max['maxK3'])*$bobot[2]),1);

                    $data[]=array('nama'=>getNama($dt3['id_pos']),
                        'jumlah'=>$jumlah,
                        'poin'=>$poin);
                    
                   }


                     foreach ($data as $key => $isi) {
                      $nama[$key]=$isi['nama'];
                      $jlh[$key]=$isi['jumlah'];
                      $poin1[$key]=$isi['poin'];
                     }
                     array_multisort($poin1,SORT_DESC,$jlh,SORT_DESC,$data);
                     $no = 1;


                     foreach ($data as $item) { ?>
                     <tr>
                     <td><?php echo $no ?></td>
                     <td><?php echo$item['nama'] ?></td>
                     <td><?php echo$item['jumlah'] ?></td>
                     <td><?php echo$item['poin'] ?></td>
                     </tr>

                     <?php
                      $no++;
                     }

                     echo "</table>";

                  ?>
                                </table>
                                </div>
                           </div>
                           <div class='header'>
                                <h4 class='title'>*Disarankan untuk memilih pos dengan ranking teratas</h4><br>
                            </div>
                           <div class="text-center">
                                        <input type="button" value="Back" class="btn btn-info btn-fill btn-wd" onclick="window.location.href='<?php echo base_url("relawan/posbencana"); ?>'">
                          </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> by <a href="">Volem</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url('../volem/assets/backend/js/jquery-1.10.2.js');?>" type="text/javascript"></script>
  <script src="<?php echo base_url('../volem/assets/backend/js/bootstrap.min.js');?>" type="text/javascript"></script>

  <!--  Checkbox, Radio & Switch Plugins -->
  <script src="<?php echo base_url('../volem/assets/backend/js/bootstrap-checkbox-radio.js');?>"></script>

  <!--  Charts Plugin -->
  <script src="<?php echo base_url('../volem/assets/backend/js/chartist.min.js');?>"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url('../volem/assets/backend/js/bootstrap-notify.js');?>"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
  <script src="<?php echo base_url('../volem/assets/backend/js/paper-dashboard.js');?>"></script>

  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url('../volem/assets/backend/js/demo.js');?>"></script>

</html>

