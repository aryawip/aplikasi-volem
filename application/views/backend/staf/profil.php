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
                    Staf Volem
                </a>
            </div>


            <ul class="nav">
                <li>
                    <a href="<?php echo base_url('staf/dashboard'); ?>">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li  class="active">
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
                    <a class="navbar-brand" href="#">Profil Staf</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-user"></i>
                                <p><?php echo $this->session->userdata('usernameS'); ?></p>
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
                                <h4 class="title">Profil</h4>
                            </div>
                            <div class="content">
                                <form action="" method="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>UserName</label>
                                                <input type="text" class="form-control border-input" placeholder="Username" name="usernameS" value="<?php echo $this->session->userdata("usernameS"); ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="text" class="form-control border-input" placeholder="Password" name="passwordS" value="<?php echo $this->session->userdata('passwordS'); ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tabel Staf</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>Username</th>
                                        <th>Nama Staf</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                              if( ! empty($tabelstaf))
                                              { 
                                                foreach($tabelstaf as $data)
                                                {
                                                  echo "<tr>
                                                  <td>".$data->usernameS."</td>
                                                  <td>".$data->nama_staf."</td>
                                                
                                                  </tr>";
                                                }
                                              } 
                                              else
                                                { 
                                                echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
                                                }
                                            ?>
                                    </tbody>
                                </table>
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
