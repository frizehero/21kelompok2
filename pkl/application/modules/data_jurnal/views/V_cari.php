<div id="page-head">


    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
        <h1 class="page-header text-overflow">Jurnal Siswa</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->


    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
        <li><a href="#"><i class="demo-pli-home"></i></a></li>
        <li><a href="#">Jurnal</a></li>
        <li class="active"><?php echo $tampil_detail['nama_siswa']?></li><br>
    </ol>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End breadcrumb-->
 <input style="margin-left: 30px" class="btn btn-purple" class="form-control" type="button" value="Kembali" onclick="history.back(-1)" />

</div>
<div id="container" class="effect aside-float aside-bright mainnav-sm page-fixedbar page-fixedbar-right">

    <div class="page-fixedbar-container">
        <div class="page-fixedbar-content">
            <div class="nano">
                <div class="nano-content">
                    <?php
                                    $a=$tampil_detail['id_dudi'];
                                    $ass= $this->m_data_jurnal->tampild($a);
                                    ?>
                    <p class="pad-all text-main text-sm text-uppercase text-bold">
                        Siswa Yang  PKL di <?php echo $ass['nama_dudi']?>
                    </p>

                    <!--Family-->
                    <div class="list-group bg-trans bord-btm">
                        <?php
                        $a=$tampil_detail['id_dudi'];
                        $as= $this->m_data_jurnal->tampil_d($a);

                        ?>


                        <?php 
                        foreach ($as as $ss) 
                            {?>
                                <hr class="new-section-xs">
                                <div class="list-group-item">
                                    <div class="media-left pos-rel">
                                        <a href="#"><img class="img-circle img-xs" src="<?php echo base_url ()?>assets/img/<?php echo $ss->logo?>" alt="Profile Picture"></a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="text-main">
                                            <p>  <?php echo $ss->nama_siswa?></p>
                                        </a>
                                    </div>
                                </div>
                            <?php }?>
                        </div>



                        <!--Monthly billing-->



                    </div>
                </div>
            </div>
        </div>

        <div id="page-content">
            <div class="panel">
                <div class="panel-body">
                    <div class="fixed-fluid">
                        <div class="fixed-md-200 pull-sm-left fixed-right-border">

                            <!-- Simple profile -->
                            <div class="text-center">
                                <div class="pad-ver">
                                    <img src="<?php echo base_url ()?>assets/img/<?php echo $tampil_detail ['logo']?>" class="img-lg img-circle" alt="Profile Picture">
                                </div>
                                <h4 class="text-lg text-overflow mar-no"><?php echo $tampil_detail['nama_siswa'] ?></h4>
                                <p class="text-sm text-muted">Rekayasa Perangkat Lunak</p>


                            </div>
                            <hr>

                            <!-- Profile Details -->
                            <p class="pad-top text-main text-center text-uppercase text-bold">profil siswa </p></p>
                            <p><a class><strong>Nis: </strong><?php echo $tampil_detail['nisn'] ?></a></p>
                            <p><a class><strong>jenis kelamin: </strong></a><?php echo $tampil_detail['jenis_kelamin'] ?></p>
                            <p><a class><strong>Alamat: </strong></a><?php echo $tampil_detail['alamat'] ?></p>
                            <P><a class><strong>No.HP: </strong></a><?php echo $tampil_detail['no_telepon'] ?></p>
                              <p><a class><strong>Kelas: </strong></a><?php echo $tampil_detail['nama_kelas'] ?></p>
                              <p><a class><strong>Email: </strong></a><?php echo $tampil_detail['email'] ?></p>




                          </div>
                          <div class="fluid">
                           <div>
                            <div class="col-md-6">
                                <div class="panel panel-info panel-colorful media middle pad-all">
                                    <div class="media-left">
                                        <div class="pad-hor">
                                            <img height="50px" src="http://localhost/21kelompok2/pkl/img/qq.png">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="text-2x mar-no text-semibold"><?php echo $isi?></p>
                                        <p class="mar-no">Telah Mengisi Jurnal</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-info panel-colorful media middle pad-all">
                                    <div class="media-left">
                                      <div class="pad-hor">
                                        <img height="52px" src="/21kelompok2/pkl/img/qwqw.png">
                                    </div>
                                </div>
                                <div class="media-body">
                                    <?php
                                    $aa=$tampil_detail['id_dudi'];
                                    $p= $this->m_data_jurnal->tampil_dd($aa);?>
                                    <?php
                                    $a=$tampil_detail['id_dudi'];
                                    $ass= $this->m_data_jurnal->tampild($a);
                                    ?>
                                    <p class="text-2x mar-no text-semibold"><?php echo $p?></p>
                                    <p class="mar-no">Siswa Yang PKL di <?php echo $ass['nama_dudi'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pad-btm">
                        <?= form_open_multipart('data_jurnal/tgl'); ?>
                        <div style="margin-right: -40px">
                            <div class="col-md-10">
                                <div class="input-daterange input-group" id="datepicker">
                                    <input type="date" name="awl" class="form-control">
                                    <div class="input-group-addon">to</div>
                                    <input type="date" name="akr" class="form-control" >
                                    <input type="hidden" value="<?php echo $tampil_detail['id_siswa']?>" name="idid">


                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Cari</button>
                        </div>


                    </div>
                    <?= form_close(); ?>





                    <hr>
                    <?php foreach($tt as $res) {
                      $id = $res->id_siswa;
                      $gambar = $res->logo;
                      ?>
                      <div class="comments media-block">
                        <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="<?php echo base_url ()?>assets/img/<?php echo $res->logo?>"></a>
                        <div class="media-body">
                            <div class="comment-header">
                                <div class="col-md-9">
                                  <a href="#" class="media-heading box-inline text-main text-semibold"></i><?php echo $res->nama_siswa?></a>
                              </div>
                              <div class="col-md-3">
                                  <span class="text-semibold text-main"><?php echo $res->tanggal?></span>
                              </div>

                          </div>
                          <p><?php echo $res->kegiatan?> </p>

                          <div class="comment-content comment-photos row">
                            <div class="col-sm-12">
                                <img style="height: 150px" class="img-responsive" src="<?php echo base_url ()?>assets/img/<?php echo $res->foto_kegiatan?>" alt="Image">
                            </div>
                        </div>


                    </div>
                </div>
            <?php }?>





            <!-- Comments -->





            <!-- Newsfeed Content -->
            <!--===================================================-->

            <!--===================================================-->
            <!-- End Newsfeed Content -->



            <!-- Newsfeed Content -->
            <!--===================================================-->

            <!--===================================================-->
            <!-- End Newsfeed Content -->


            <!-- Newsfeed Content -->
            <!--===================================================-->

            <!--===================================================-->
            <!-- End Newsfeed Content -->



            <!-- Newsfeed Content -->
            <!--===================================================-->

            <!--===================================================-->
            <!-- End Newsfeed Content -->



            <!-- Newsfeed Content -->
            <!--===================================================-->

            <!--===================================================-->
            <!-- End Newsfeed Content -->


            <!-- Newsfeed Content -->
            <!--===================================================-->

            <!--===================================================-->
            <!-- End Newsfeed Content -->
        </div>


    </div>
</div>
</div>
</div>

</div>