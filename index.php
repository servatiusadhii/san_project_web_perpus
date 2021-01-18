<?php include "conn.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SiPusWeb SMA PGRI 56</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Perpustakaan Berbasis Web">
    <meta name="keywords" content="Perpustakaan, perpus, online, website">
    <meta name="author" content=""/>
    <!-- bootstrap 3.0.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="css/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- Theme style -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    
<script type="text/javascript">
// 1 detik = 1000
window.setTimeout("waktu()",1000);  
function waktu() {   
	var tanggal = new Date();  
	setTimeout("waktu()",1000);  
	document.getElementById("output").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();
}
</script>

<script> 
function do_open(){
    if(document.getElementById("nama").value.trim() != "" && 
    document.getElementById("saran").value.trim() != "" &&
    document.getElementById("perlu1").value.trim() != "" &&
    document.getElementById("cari").value.trim() != ""){
document.getElementById("example").style.display = "block";
document.getElementById("text-muted-warn").style.display = "none";
document.getElementById("jml-buku-note").style.display = "block";
}
else{
    alert("Mohon Mengisi Seluruh Field pada Data Pengunjung untuk Melihat Daftar Buku");
document.getElementById("example").style.display = "none";
document.getElementById("text-muted-warn").style.display = "block";
document.getElementById("jml-buku-note").style.display = "none";  
}
};
</script>

<script language="JavaScript">
var tanggallengkap = new String();
var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
namahari = namahari.split(" ");
var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
namabulan = namabulan.split(" ");
var tgl = new Date();
var hari = tgl.getDay();
var tanggal = tgl.getDate();
var bulan = tgl.getMonth();
var tahun = tgl.getFullYear();
tanggallengkap = namahari[hari] + ", " +tanggal + " " + namabulan[bulan] + " " + tahun;

	var popupWindow = null;
	function centeredPopup(url,winName,w,h,scroll){
	LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
	TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
	settings ='height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
	popupWindow = window.open(url,winName,settings)
}
</script>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->

          <style type="text/css">

          </style>
      </head>
      <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                SiPus SMA PGRI 56 
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="messages-menu">
                        <table width="1000"> 
            <tr>
            <td width="200"><div class="Tanggal"><h4><script language="JavaScript">document.write(tanggallengkap);</script></div></h4></td> 
            <td align="left" width="30"> - </td>
            <td align="left" width="620"> <h4><div id="output" class="jam" ></div></h4></td>
            </tr>
            </table>
                        </li>
                        <li class="dropdown messages-menu">
                            <a href="#" data-toggle="modal" data-target="#contact">
                                <i class="fa fa-envelope"></i>
                                <!--<span class="label label-success">4</span>-->
                            </a>
                            </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="login.html" data-placement="bottom" data-toggle="tooltip" title="Login Admin">
                                <i class="fa fa-user"></i>
                            </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>
                <div class="wrapper row-offcanvas row-offcanvas-left">
                    <!-- Left side column. contains the logo and sidebar -->

                    <aside>

                <!-- Main content -->
                <section class="content">

                    <!-- Main row -->
                    <div class="row">
                    <div class="col-lg-12">
            <div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             <!--<marquee behavior="alternate" direction="left" onmouseover="this.stop();" onmouseout="this.start();">-->
		<b>Selamat Datang di Sitem Perpustakaan SMA PGRI 56 Ciputat.	Anda Peminjam? Silahkan Login <a href="loginUser.html">Disini</a></b>
          </div>
            </div>

                        <div class="col-lg-8">
                                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="panel">
                                <header class="panel-heading" style="margin-top: -18px;">
                                    <b>Daftar Buku Perpustakaan</b>
                                </header>
                                <!-- <div class="box-header"> -->
                                    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->

                                <!-- </div> -->
                                <div class="panel-body table-responsive">
                                    <div class="box-tools m-b-15">
                                    <form action="index.php" method="POST">
                                        <div class="input-group">
                                        <input type="text" class="form-control input-sm pull-right" style="width: 300px;"  name='qcari' id="qcari" placeholder='Cari berdasarkan Judul Buku' required/> 
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default" type="submit" id="btnSearch"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>    
                                    </div>
                                    <?php
                    $query1="select * from data_buku";
                    
                    if(isset($_POST['qcari'])){
	               $qcari=$_POST['qcari'];
	               $query1="SELECT * FROM  data_buku 
	               where judul like '%$qcari%'
	               or pengarang like '%$qcari%'  ";
                    }
                    $tampil=mysql_query($query1) or die(mysql_error());
                    ?>
                
                <table id="example" class="table table-hover table-bordered" style="display: block;" >
                  <thead>
                      <tr>
                        <th><center>Judul </center></th>
                        <th><center>Pengarang </center></th>
                        <th><center>Tahun </center></th>
                        <th><center>Penerbit </center></th>
                        <th><center>Jumlah </center></th>
                        <th><center>Tersedia </center></th>
                        <th><center>Lokasi </center></th>
                        <!-- <th><center>Tools</center></th> -->
                      </tr>
                  </thead>
                     <?php while($data=mysql_fetch_array($tampil))
                    { ?>
                    <tbody>
                    <tr>
                    <td> <?php echo $data['judul']; ?></td>
                    <td><?php echo $data['pengarang']; ?></td>
                    <td><?php echo $data['th_terbit'];?></td>
                    <td><?php echo $data['penerbit'];?></td>
                    <td><?php echo $data['jumlah_buku'];?></td>
                    <td><?php echo $data['jum_temp'];?></td>
                    <td><?php echo $data['lokasi'];?></td>
                   
                    <?php   
              } 
              ?>
                   </tbody>
                   </table>
                   
                  <?php $tampil=mysql_query("select * from data_buku order by id");
                        $buku=mysql_num_rows($tampil);
                    ?>
                  <center><h4 id="jml-buku-note" style="display: block;">Jumlah Buku : <?php echo "$buku"; ?> Pcs </h4> </center>
                  <!-- <center><text-muted id="text-muted-warn"><br>
                  Lakukan Validasi Buku Pengunjung Terlebih Dahulu, Untuk Melihat Daftar Buku Perpustakaan. Lalu Simpan</text-muted></center>
                   -->
                <div class="text-right" style="margin-top: 10px;">
                 <a href="index.php" id="btnRefresh" class="btn btn-sm btn-info">Refresh Buku <i class="fa fa-refresh"></i></a> 
                 <!-- <a href="input-buku.php" class="btn btn-sm btn-warning">Tambah Buku <i class="fa fa-arrow-circle-right"></i></a> -->
                </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
              <!-- row end -->
                </section><!-- /.content -->
                            

                              <!-- <header class="panel-heading">
                                  <b>Data Pengunjung Hari Ini</b>
                            </header>
                            <div class="panel-body table-responsive">
                            <?php
                    $tanggal = date("Y/m/d");
                    $query1="select * from pengunjung where tgl_kunjung='$tanggal'";
                    $tampil=mysql_query($query1) or die(mysql_error());
                    ?>
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Tanggal</th>
                                        <th>Jam Berkunjung </th>
                                        <th>Keperluan</th>
                                  </tr>
                              </thead>
                              
                                 <?php while($data=mysql_fetch_array($tampil))
                    { ?>
                    <tbody>
                    <tr>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['tgl_kunjung'];?></td>
                    <td><?php echo $data['jam_kunjung'];?></td>
                    <td><?php echo $data['perlu1'];?></td>
                    <?php   
              } 
              ?>
              
                      </table><hr />
                    <?php $tampil=mysql_query("select * from pengunjung where tgl_kunjung='$tanggal'");
                          $user=mysql_num_rows($tampil);
                    ?>
                  <center><h4>Jumlah Pengunjung Hari Ini : <?php echo "$user"; ?> Orang </h4> </center>
                </div>
              </section> -->

                    
          </div><!--end col-6 -->
          <div class="col-md-4">
            <section class="panel">
                <header class="panel-heading">
                    <b>Buku Pengunjung</b>
                </header>
                <div class="panel-body">
                    <div class="twt-area">
                        <form class="form-horizontal style-form" style="margin-top: 20px;" action="insert-pengunjung.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No </label>
                              <div class="col-sm-10">
                                  <input name="id" type="text" id="id" class="form-control" placeholder="Tidak perlu di isi" autofocus="on" readonly="readonly" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-10">
                                  <input name="nama" type="text" id="nama" class="form-control" placeholder="Nama Anda" required />
                                  <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jenkel</label>
                                  <div class="col-sm-6">
                                  <select class="form-control" name="jk" id="jk">
                                  <option> -- Pilih Salah Satu --</option>
                                  <option value="L"> Laki - Laki</option>
                                  <option value="P"> Perempuan</option>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kelas</label>
                              <div class="col-sm-6">
                                  <select class="form-control" name="kelas" id="kelas">
                                  <option> -- Pilih Salah Satu --</option>
                                  <option value="X1"> X1</option>
                                  <option value="X2"> X2</option>
                                  <option value="X3"> X3</option>
                                  <option value="X4"> X4</option>
                                  <option value="X5"> X5</option>
                                  <option value="XI1"> XI1</option>
                                  <option value="XI2"> XI2</option>
                                  <option value="XI3"> XI3</option>
                                  <option value="XI4"> XI4</option>
                                  <option value="XI5"> XI5</option>
                                  <option value="XII1"> XII1</option>
                                  <option value="XII2"> XII2</option>
                                  <option value="XII3"> XII3</option>
                                  <option value="XII4"> XII4</option>
                                  <option value="XII5"> XII5</option>
                                  </select>
                              </div>
                          </div>
                          
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Perlu</label>
                              <div class="col-sm-10">
                                  <input name="perlu1" type="text" id="perlu1" class="form-control" placeholder="Keperluan" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Cari Buku</label>
                              <div class="col-sm-10">
                                  <input name="cari" type="text" id="cari" class="form-control" placeholder="Apa yang anda cari.?" required />
                                  <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Saran</label>
                              <div class="col-sm-10">
                                  <textarea rows="4" name="saran" id="saran" class="form-control" placeholder="Saran Anda untuk PerPusWeb" cols="25"></textarea>
                                  <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal</label>
                              <div class="col-sm-10">
                                  <input name="tgl_kunjung" type="text" class="form-control" id="tgl_kunjung" value="<?php echo "".date("Y/m/d").""; ?>" readonly="readonly"/>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jam Kunjung</label>
                              <div class="col-sm-10" style="margin-top: 13px;">
                                  <input name="jam_kunjung" type="text" class="form-control" id="jam_kunjung" value="<?php echo "".date('H:i:s')."";?>" readonly="readonly" 
								  />
								  
                              </div>
                          </div>
                          <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-8">
                                  <input type="submit" value="Simpan" name="simpan" class="btn btn-sm btn-primary"  />&nbsp;
                                  <a href="input-anggota.php" class="btn btn-sm btn-danger">Batal </a>
                                  <a href="#" style="display: none;" class="btn btn-sm btn-success" id="btn-Js" onclick="do_open(); return false;">Validasi Field</a>
                              </div>
                          </div>

                        </form>
                    </div>
                </div>
            </section>
        </div>

                    </div>
                      </section>
                  
<!-- Data Total Pengunjung -->                        
                        <div class="col-md-12">
                            <section class="panel">
                              <header class="panel-heading">
                                <b>  Data Akumulasi Pengunjung</b>
                            </header>
                            <div class="panel-body table-responsive">
                            <?php
                    $query="select * from pengunjung order by id desc limit 10";
                    $tampil=mysql_query($query) or die(mysql_error());
                    ?>
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Kelas</th>
                                        <th>Tanggal</th>
                                        <th>Jam Berkunjung </th>
                                        <!-- <th>Keperluan</th> -->
                                        <th>Buku Yang di Cari</th>
                                  </tr>
                              </thead>
                              
                                 <?php while($data1=mysql_fetch_array($tampil))
                    { ?>
                    <tbody>
                    <tr>
                    <td><?php echo $data1['nama']; ?></td>
                    <td><?php echo $data1['jk']; ?></td>
                    <td><?php echo $data1['kelas'];?></td>
                    <td><?php echo $data1['tgl_kunjung'];?></td>
                    <td><?php echo $data1['jam_kunjung'];?></td>
                    <!-- <td><?php echo $data1['perlu1'];?></td> -->
                    <td><?php echo $data1['cari'];?></td>
                    <?php   
              } 
              ?>
              
                      </table><hr />
                  <?php $tampil1=mysql_query("select * from pengunjung order by id");
                        $user1=mysql_num_rows($tampil1);
                    ?>
                  <center><h4>Jumlah Total Pengunjung : <?php echo "$user1"; ?> Orang </h4> </center>
                  </div>
              </section>

                    
          </div>
          </div>
              <!-- row end -->
                <!-- /.content -->
                <div class="footer-main">
                    Copyright &copy <a href="" target="_blank">SiPusWeb SMA PGRI 56 Ciputat</a> 2015
                </div>
            </aside><!-- /.right-side -->

        </div><!-- ./wrapper -->
        


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>

        <!-- jQuery UI 1.10.3 -->
        <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

        <script src="js/plugins/chart.js" type="text/javascript"></script>

        <!-- datepicker
        <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>-->
        <!-- Bootstrap WYSIHTML5
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>-->
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <!-- calendar -->
        <script src="js/plugins/fullcalendar/fullcalendar.js" type="text/javascript"></script>

        <!-- Director App -->
        <script src="js/Director/app.js" type="text/javascript"></script>

        <!-- Director dashboard demo (This is only for demo purposes) -->
        <script src="js/Director/dashboard.js" type="text/javascript"></script>

        <!-- Director for demo purposes -->
        <script type="text/javascript">
            $('input').on('ifChecked', function(event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().addClass('highlight');
                $(this).parents('li').addClass("task-done");
                console.log('ok');
            });
            $('input').on('ifUnchecked', function(event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().removeClass('highlight');
                $(this).parents('li').removeClass("task-done");
                console.log('not');
            });

        </script>
        <script>
            $('#noti-box').slimScroll({
                height: '400px',
                size: '5px',
                BorderRadius: '5px'
            });

            $('input[type="checkbox"].flat-grey, input[type="radio"].flat-grey').iCheck({
                checkboxClass: 'icheckbox_flat-grey',
                radioClass: 'iradio_flat-grey'
            });
</script>
<script type="text/javascript">
    $(function() {
                "use strict";
                //BAR CHART
                var data = {
                    labels: ["January", "February", "March", "April", "May", "June", "July", "Agustus", "September", "Oktober"],
                    datasets: [
                        {
                            label: "My First dataset",
                            fillColor: "rgba(220,220,220,0.2)",
                            strokeColor: "rgba(220,220,220,1)",
                            pointColor: "rgba(220,220,220,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            data: [65, 59, 80, 81, 56, 55, 40]
                        },
                        {
                            label: "My Second dataset",
                            fillColor: "rgba(151,187,205,0.2)",
                            strokeColor: "rgba(151,187,205,1)",
                            pointColor: "rgba(151,187,205,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(151,187,205,1)",
                            data: [28, 48, 40, 19, 86, 27, 90]
                        }
                    ]
                };
            new Chart(document.getElementById("linechart").getContext("2d")).Line(data,{
                responsive : true,
                maintainAspectRatio: false,
            });

            });
            // Chart.defaults.global.responsive = true;
</script>
</body>
</html>