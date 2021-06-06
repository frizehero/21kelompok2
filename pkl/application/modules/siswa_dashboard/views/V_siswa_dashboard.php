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
      <canvas style="margin-left: 14px" id="myChart" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = ["Januari", "Februari", "Maret", "April", "Mei", "juni"];
var yValues = [<?php echo $jan?>, <?php echo $feb?>, <?php echo $mar?>, <?php echo $apr?>, <?php echo $mei?>, <?php echo $juni?>];
var barColors = ["red", "green","blue","orange","brown","yellow"];

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
                <h3 class="panel-title">Pengumuman </h3> 
               
              </div>
              <div class="panel-body">
                <?php $nomor=1?>
                <?php foreach ($tampilp as $res) {?>
                <a data-toggle="modal" data-target="#demo-default-modal1<?php echo $res->id_pengumuman?>">
                  <p class="text-semibold text-lg"><?php echo $nomor?> . <?php echo $res->judul_pengumuman?><sub class="text-light" style="color: blue"> (detail)</sub></p>
                </a>
                <?php $nomor++?>

                <div class="modal fade" id="demo-default-modal1<?php echo $res->id_pengumuman?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <!--Modal Update-->
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
          <h4 class="modal-title"><?php echo $res->judul_pengumuman?></h4>
        </div>
         <div class="modal-body">
          <div class="panel-body">
            <p class="text-lg text-main"><?php echo $res->isi_pengumuman?></p>
            

          </div>
        

          </div>
        </div>



        </div>

        <!--Modal footer-->
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
          <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
        <?= form_close(); ?>
      </div>
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
