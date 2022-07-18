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

    <script src="<?php echo base_url('../volem/assets/js/Chart.bundle.js');?>"></script>
    <script src="<?php echo base_url('../volem/assets/js/Chart.bundle.min.js');?>"></script>
    <script src="<?php echo base_url('../volem/assets/js/Chart.js');?>"></script>
    <script src="<?php echo base_url('../volem/assets/js/Chart.min.js');?>"></script>


    <link rel="icon" type="image/png" sizes="200x200" href="<?php echo base_url('../volem/assets/logo/VOLEM2.png');?>">

    <?php
        foreach($chartpos as $r){
            $nama_pos[] = $r->nama_pos;
            $jumlah[] = (integer) $r->jumlah;
        }
    ?>

           

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
                    Staf Volem
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="<?php echo base_url('staf/dashboard'); ?>">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('staf/profil'); ?>">
                        <i class="ti-user"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('staf/listrelawan'); ?>">
                        <i class="ti-view-list-alt"></i>
                        <p>List Relawan</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('staf/posbencana'); ?>">
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
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-user"></i>
                                <p><?php echo $this->session->userdata("usernameS"); ?></p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('staflogin/logout'); ?>">
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
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Relawan tiap Pos</h4>
                            </div>
                            <div class="content">
                            <canvas id="chartbatang" width="30" height="30"></canvas>
                                <script>

                                var ctx = document.getElementById("chartbatang");
                                var myChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: <?php echo json_encode($nama_pos);?>,
                                        datasets: [{
                                                label: 'Jumlah Relawan',
                                                data: <?php echo json_encode($jumlah);?>,
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(255, 206, 86, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(153, 102, 255, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgba(255,99,132,1)',
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(75, 192, 192, 1)',
                                                    'rgba(153, 102, 255, 1)',
                                                    'rgba(255, 159, 64, 1)'
                                                ],
                                                borderWidth: 1
                                            }]
                                    },
                                    options: {
                                        scales: {
                                            yAxes: [{
                                                    ticks: {
                                                        beginAtZero: true

                                                    }
                                                }]
                                        }
                                    }
                                })
                            </script>
                            </div>
                        </div>
                    </div>
     
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Relawan tiap Job</h4>
                            </div>
                            <div class="content">
                            <canvas id="chartpie" width="50" height="30"></canvas>
                                <script>
                                    var ctx = document.getElementById("chartpie");
                                    var myPieChart = new Chart(ctx,{
                                    type: 'pie',
                                    data: {
                                            datasets: [{
                                                data: [
                                                    2,1,2,2
                                                ],
                                                backgroundColor: [
                                                        'rgba(255,99,132,1)',
                                                        'rgba(54, 162, 235, 1)',
                                                        'rgba(255, 206, 86, 1)',
                                                        'rgba(75, 192, 192, 1)'
                                                ],
                                                
                                                label: 'Dataset 1'
                                            }],
                                            labels: [
                                                'Kesehatan',
                                                'Psikologis',
                                                'Lapangan',
                                                'Konsumsi'
                                            ]
                                        },
                                    options: {
                                        responsive: true
                                    }
                                });

                                </script>
                            </div>
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
	<script src="<?php echo base_url('../volem/assets/backend/js/chartist.min.js');?>" type="text/javascript"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url('../volem/assets/backend/js/bootstrap-notify.js');?>"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="<?php echo base_url('../volem/assets/backend/js/paper-dashboard.js');?>"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url('../volem/assets/backend/js/demo.js');?>"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

            $.notify({
                message: "Selamat Datang di <b>Volem Dashboard</b> - Silahkan memanagemen data anda disini."

            },{
                type: 'success',
                timer: 4000
            });

        });
    </script>


</html>
