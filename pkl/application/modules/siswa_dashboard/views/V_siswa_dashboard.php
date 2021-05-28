<div id="page-head">

  <div class="pad-all text-center">
    <h3>Selamat datang di Dashboard Siswa</h3>
  </div>
</div>


  <div class="row">
    <div class="col-lg-6">


      <!--Network Line Chart-->
      <!--===================================================-->
      <div id="demo-panel-network" class="panel">
        <div class="panel-heading">
          
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
      <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = ["Januari", "Februari", "Maret", "April", "Mei"];
var yValues = [55, 49, 44, 24, 15];
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
      text: "Chart Pengisian Jurnal Perbulan"
    }
  }
});
</script>
    
          <h3 class="panel-title">Chart Pengisian Jurnal Perhari</h3>
        </div>


        <!--chart placeholder-->
        <div class="pad-all">
          <div id="demo-chart-network" style="height: 255px"></div>
        </div>


        <!--Chart information-->
        <div class="panel-body">

          <div class="row">
            <div class="col-lg-8">
              <p class="text-semibold text-uppercase text-main">Tanggal</p>
              <div class="row">
                <div class="col-xs-5">
                  <div class="media">
                    <div class="media-left">
                      <?php $tgl = date('d-m-y')?>
                      <span class="text-thin text-main"><?php echo $tgl?></span>
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
    <div class="col-lg-6">
      <div class="row">
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Data Informasi Magang</h3>
          </div>
          <div class="panel-body">

            <a href="datadudisiswa.html">
              <div class="col-sm-5 col-lg-6">

                <!--Sparkline Area Chart-->
                <div class="panel panel-success panel-colorful">
                  <div class="panel panel-success badge-mint">
                    <div class="pad-all media">
                      <div class="media-left">
                        <img height="40px" src="img/1.png">
                      </div>
                      <div class="media-body">
                        <p class="text-2x mar-no text-bold media-heading">Tempat PKL</p>
                        <span><?php echo $tampil['nama_dudi'] ?></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>

            <div class="col-sm-6 col-lg-6">

              <!--Sparkline bar chart -->
              <div class="panel panel-success panel-colorful">
                <div class="panel panel-success badge-mint">
                  <div class="pad-all media">
                    <div class="media-left">
                      <img height="40px" src="img/2.png">
                    </div>
                    <div class="media-body">
                      <p class="text-2x mar-no text-bold media-heading">Pembimbing</p>
                     <span><?php echo $tampil['nama_pembimbing'] ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!--Extra Small Weather Widget-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div class="panel">
              <div class="panel-body text-center">

                <div style="margin-left: 70px" class="col-sm-8">

                  <div class="list-unstyled text-center pad-btm pad-top  mar-no row badge-mint">
                    <li class="col-xs-6">
                      <span class="text-lg text-semibold text-light">Masuk Prakerin</span>
                      <p class="text-sm mar-no text-light"><?php echo $tampil['masuk_p'] ?></p>
                    </li>
                    <div class="col-xs-6">

                      <span class="text-lg text-semibold text-light">Keluar Prakerin</span>
                      <p class="text-sm mar-no text-light"><?php echo $tampil['keluar_p'] ?></p>


                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End Extra Small Weather Widget-->





          </div>

        </div>
      </div>

    </div>
    <div class="col-lg-6">
      <div class="row">
        <div class="panel">
          <div class="panel-body">
            <div class="panel panel-bordered panel-mint">
              <div class="panel-heading">
                <h3 class="panel-title">Pengumuman</h3>
              </div>
              <div class="panel-body">
                <?php $nomor=1?>
                <?php foreach ($tampilp as $res) {?>

                <b><?php echo $nomor?>. <?php echo $res->judul_pengumuman?></b><br>
                <?php $nomor++?>
              <?php }?>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>



  </div>
  <!--===================================================-->
  <!--End page content-->
