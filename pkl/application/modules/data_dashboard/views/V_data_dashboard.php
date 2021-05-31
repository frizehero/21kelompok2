<div style="margin-top:" id="page-head">

    <div class="pad-all text-center">
        <h3>Selamat datang di Dashboard admin</h3>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<div class="row">
    <div class="col-lg-7">

        <!--Network Line Chart-->
        <!--===================================================-->
        <div id="demo-panel-network" class="panel">
            <div class="panel-heading">
                <div class="panel-control">
                    <button id="demo-panel-network-refresh" class="btn btn-default btn-active-primary" data-toggle="panel-overlay" data-target="#demo-panel-network"><i class="demo-psi-repeat-2"></i></button>
                    <div class="dropdown">
                        <button class="dropdown-toggle btn btn-default btn-active-primary" data-toggle="dropdown" aria-expanded="false"><i class="demo-psi-dot-vertical"></i></button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>


            <!--chart placeholder-->
            <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

            <script>
                var xValues = ["senin", "selasa", "rabu", "kamis", "jumat"];
                var yValues = [<?php echo $senin?>, <?php echo $selasa?>,  <?php echo $rabu?>,  <?php echo $kamis?>,  <?php echo $jumat?>];
                var barColors = ["red", "green","blue","orange","brown"];

                new Chart("myChart", {
                  type: "bar",
                  data: {
                    labels: xValues,
                    datasets: [{
                      backgroundColor: barColors,
                      data: yValues
                  }]
              },
              options: {
                legend: {display: false},
                title: {
                  display: true,
                  text: "Cart Pengisian Jurnal perminggu"
              }
          }
      });
  </script>


  <!--Chart information-->
  <div class="panel-body">

    <div class="row">
        <div class="col-lg-8">
            <p class="text-semibold text-uppercase text-main">Tanggal</p>
            <div class="row">
                <div class="col-xs-5">
                    <div class="media">
                        <div class="media-left">
                            <span class="text-thin text-main"></span>
                        </div>
                    </div>
                </div>
                <hr>



            </div>

        </div>

        <div class="col-lg-4">
            <p class="text-uppercase text-semibold text-main">Informasi Jurnal</p>
            <ul class="list-unstyled">
                <li class="pad-btm">
                    <div class="clearfix">
                        <p class="pull-left mar-no">Siswa mengisi</p>
                        <p class="pull-right mar-no">70%</p>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar progress-bar-info" style="width: 70%;">
                            <span class="sr-only">70% Complete</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="clearfix">
                        <p class="pull-left mar-no">Siswa belum mengisi</p>
                        <p class="pull-right mar-no">10%</p>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar progress-bar-primary" style="width: 10%;">
                            <span class="sr-only">10% Complete</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


</div>
<!--===================================================-->
<!--End network line chart-->

</div>
<div >
    <div class="col-lg-5">
        <div class="row">
            <a href="data_dudi">
                <div class="col-sm-6 col-lg-6">

                    <!--Sparkline Area Chart-->
                    <div class="panel panel-success panel-colorful">
                        <div class="panel panel-success badge-mint">
                            <div class="pad-all media">
                                <div class="media-left">
                                    <img height="60px" src="img/1.png">
                                </div>
                                <div class="media-body">
                                    <p class="text-2x mar-no media-heading"><?php echo $hitungdudi?></p>
                                    <span>Jumlah Dudi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <div class="col-sm-6 col-lg-6">

                <!--Sparkline Line Chart-->
                <div class="panel panel-success panel-colorful">
                    <div class="panel panel-success badge-mint">
                        <div class="pad-all media">
                            <div class="media-left">
                                <img height="60px" src="img/2.png">
                            </div>
                            <div class="media-body">
                                <p class="text-2x mar-no media-heading"><?php echo $hitungsiswa?></p>
                                <span>Siswa Magang</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6">

                <!--Sparkline bar chart -->
                <div class="panel panel-success panel-colorful">
                    <div class="panel panel-success badge-mint">
                        <div class="pad-all media">
                            <div class="media-left">
                                <img height="60px" src="img/3.png">
                            </div>
                            <div class="media-body">
                                <p class="text-2x mar-no media-heading"><?php echo $hitungjurusan?></p>
                                <span>Jumlah Jurusan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="data_kelas">
                <div class="col-sm-6 col-lg-6">

                    <!--Sparkline pie chart -->
                    <div class="panel panel-success panel-colorful">
                        <div class="panel panel-success badge-mint">
                            <div class="pad-all media">
                                <div class="media-left">
                                    <img height="60px" src="img/4.png">
                                </div>
                                <div class="media-body">
                                    <p class="text-2x mar-no media-heading"><?php echo $hitungkelas?></p>
                                    <span>Jumlah Kelas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>


        <!--Extra Small Weather Widget-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="panel">
            <div class="panel-body text-center clearfix">
                <div class="col-sm-4 pad-top">
                    <div class="text-lg">
                        <p class="text-5x text-thin text-main"><?php echo $hitungsiswa?></p>
                    </div>
                    <p class="text-sm text-bold text-uppercase">Jumlah Siswa</p>
                </div>
                <div class="col-sm-8">
                    <a href="siswa.html"><button class="btn btn-mint ">Lihat Detail</button></a>
                    <p class="text-sm">Klik untuk melihat detail</p>
                    <ul class="list-unstyled text-center bord-top pad-top mar-no row">
                        <li class="col-xs-6">
                            <span class="text-lg text-semibold text-main"><?php echo $hg1?></span>
                            <p class="text-sm text-muted mar-no">Gelombang 1</p>
                        </li>
                        <li class="col-xs-6">
                            <span class="text-lg text-semibold text-main"><?php echo $hg2?></span>
                            <p class="text-sm text-muted mar-no">Gelombang 2</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End Extra Small Weather Widget-->



    </div>

</div>
</div>

