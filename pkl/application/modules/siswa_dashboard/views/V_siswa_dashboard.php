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
                        <span>Humasoft</span>
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
                      <span>Bpk.ivan zuwanta.Spd</span>
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
                      <p class="text-sm mar-no text-light">04-01-2021</p>
                    </li>
                    <div class="col-xs-6">

                      <span class="text-lg text-semibold text-light">Keluar Prakerin</span>
                      <p class="text-sm mar-no text-light">04-06-2021</p>


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
                <?php foreach ($tampil as $res) {?>

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
