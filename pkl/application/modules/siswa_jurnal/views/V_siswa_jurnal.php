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
    <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg></i></a></li>
    <li><a href="#">Jurnal</a></li>
    <li class="active"<?php echo $tampil['nama_siswa']?>></li><br>
  </ol>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <!--End breadcrumb-->


</div>
<div id="container" class="effect aside-float aside-bright mainnav-sm page-fixedbar page-fixedbar-right">

  <div style="margin-top: -50px" class="page-fixedbar-container">
    <div class="page-fixedbar-content">
      
        <p class="pad-all text-main text-sm text-uppercase text-bold">
          <?php
          $a=$tampil['id_dudi'];
          $ass= $this->m_siswa_jurnal->tampild($a);
          ?>
          Siswa Yang  PKL di <?php echo $ass['nama_dudi'] ?>
        </p>

        <!--Family-->
        <div class="list-group bg-trans bord-btm">
         <hr class="new-section-xs">
         <?php
         $a=$tampil['id_dudi'];
         $as= $this->m_siswa_jurnal->tampil_dudi($a);
         ?>


         <?php 
         foreach ($as as $ss) 
          {?>
            <div class="list-group-item">
              <div class="media-left pos-rel">
                <a href="#"><img class="img-circle img-xs" src="<?php echo base_url ()?>assets/img/<?php echo $ss->logo?>" alt="Profile Picture"></a>
              </div>
              <div class="media-body">
                <a href="#" class="text-main">
                  <p><?php echo $ss->nama_siswa?> </p>
                </a>
              </div>
            </div>
          <?php }?>
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
              <img src="<?php echo base_url ()?>assets/img/<?php echo $tampil ['logo']?>" class="img-lg img-circle" alt="Profile Picture">
            </div>
            <h4 class="text-lg text-overflow mar-no"><?php echo $tampil['nama_siswa'] ?></h4>
            <p class="text-sm text-muted"><?php echo $tampil['nama_kelas'] ?></p>


          </div>
          <hr>

          <!-- Profile Details -->
          <p class="pad-top text-main text-center text-uppercase text-bold">profil siswa </p></p>
          <p><a class><strong>Nis: </strong><?php echo $tampil['nisn'] ?></a></p>
          <p><a class><strong>jenis kelamin: </strong></a><?php echo $tampil['jenis_kelamin'] ?></p>
          <p><a class><strong>Alamat: </strong></a><?php echo $tampil['alamat'] ?></p>
          <P><a class><strong>No.HP: </strong></a><?php echo $tampil['no_telepon'] ?></p>
          <p><a class><strong>Kelas: </strong></a><?php echo $tampil['nama_kelas'] ?></p>
          <p><a class><strong>Email: </strong></a><?php echo $tampil['email'] ?></p>




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
                <p class="text-2x mar-no text-semibold"><?php echo $hitung?></p>
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
                $s=$ass['id_dudi'];
                $p= $this->m_siswa_jurnal->tampil_dd($s);?>
                <p class="text-2x mar-no text-semibold"><?php echo $p?></p>
                <p class="mar-no">Siswa Yang PKL di <?php echo $ass['nama_dudi'] ?></p>
                
              </div>
            </div>
          </div>
          
        </div>
        <div class="pad-btm">
          <?= form_open_multipart('siswa_jurnal/tambah'); ?>
          <textarea name="jurnal" required="" class="form-control" rows="4" placeholder="Tulis Jurnal"></textarea>
          <input type="hidden" value="<?php echo $tampil['id_siswa']?>" name="id_bang">
          <input type="hidden" value="<?php echo date('y-m-d')?>" name="tanggal">
          <div class="mar-top clearfix">

            <!-- <a class="btn btn-icon demo-pli-camera-2 icon-lg add-tooltip" href="#" data-original-title="Add Photo" data-toggle="tooltip"></a> -->
            <!-- <div style="margin-top: -5px" class="image-uploud">
              <label for="file-input">
                <img height="30px" src="http://localhost/21kelompok2/pkl/img/kamera.png">
              </label>
              <input required="" type="file" id="file-input" name="foto_kegiatan">
              <style type="text/css">
                .image-uploud >input
                {
                  display: none;
                }
              </style>
            </div> -->
             <input required="" type="file" id="file-input" name="foto_kegiatan">

          </div>
          <button style="margin-top: -30px" class="btn btn-sm btn-primary pull-right" type="submit"><i class="demo-psi-right-4 icon-fw"></i> Tambah</button>
          <?= form_close(); ?>
        </div> 





        <hr>
        <?php foreach($tampil_data as $res) {
          $id = $res->id_siswa;
          $gambar = $res->logo;
          ?>
          <div class="comments media-block">
            <a class="media-left" href=""><img class="img-circle img-sm" alt="Profile Picture" src="<?php echo base_url ()?>assets/img/<?php echo $tampil ['logo']?>"></a>
            <div class="media-body">
              <div class="comment-header">
                <div class="col-md-9">
                  <a href="#" class="media-heading box-inline text-main text-semibold"></i><?php echo $res->nama_siswa?></a>
                </div>
                <?php 
                $date = date('d-m-Y', strtotime($res->tanggal));
                ?>

                <div class="col-md-2">
                  <span class="text-semibold text-main"><?php echo $date?></span>
                </div>
                <div class="col-md-1">

                 <div class="btn-group dropdown">
                   <a href="#" class="dropdown-toggle btn btn-trans" data-toggle="dropdown" aria-expanded="false"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                  </svg></i></a>
                  <ul class="dropdown-menu dropdown-menu-right" style="">
                    <li><a data-toggle="modal" data-target="#demo-default-modal1<?php echo $res->id_jurnal?>"><i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                      <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                    </svg></i> Edit</a></li>
                    <li><a data-toggle="modal" data-target="#demo-default-modal2<?php echo $res->id_jurnal?>"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                      <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg></i> Hapus </a></li>
                    <li class="divider"></li>
                  </ul>
                </div>
                <div class="modal fade" id="demo-default-modal1<?php echo $res->id_jurnal?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
                  <div class="modal-dialog">

                    <div class="modal-content">
                      <div class="modal-header"></div>
                      <!--Modal body-->
                      <div class="panel">
                        <div class="panel-body">
                          <p class="text-main text-bold mar-no">Edit Jurnal</p>
                          <?= form_open_multipart('siswa_jurnal/edit'); ?>

                          <input type="hidden" name="id_jurnal" value="<?php echo $res->id_jurnal?>">
                          <div class="modal-body">
                            <form>
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Kegiatan</label><br>
                                <textarea style="width: 100%; height: 150px" name="kegiatan"><?php echo $res->kegiatan ?></textarea>
                                <input type="hidden" value="<?php echo date('y-m-d')?>" name="tanggal">
                              </div>

                              <div class="col-md-6" >
                                <label for="" class="control-label">Foto :</label>
                                <input type="file" name="foto_kegiatan" placeholder="Foto " class="form-control" id="userfile" onchange="tampilkanPreview(this,'preview')">
                              </div>
                              <div class="col-md-6 " style="margin-top: 2%">
                                <label for="" class="control-label">Preview Foto Jurnal</label>
                                <img  src="<?php echo base_url ()?>assets/img/<?php echo $res->foto_kegiatan?>" width="150px" />
                              </div>

                            </div>
                          </div>
                        </div>

                        <!--Modal footer-->
                        <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Batal</button>
                          <button class="btn btn-primary" type="submit">Simpan</button>
                          <?= form_close(); ?>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <div class="modal fade" id="demo-default-modal2<?php echo $res->id_jurnal?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
                  <div class="modal-dialog">

                    <div class="modal-content">

                      <!--Modal header-->
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                        <h4 class="modal-title">Hapus</h4>
                      </div>

                      <!--Modal body-->
                      <div class="modal-body">
                        <p class="text-semibold text-main"></p>
                        <p>Anda Yakin Ingin Menghapus</p>
                        <br>



                      </div>

                      <!--Modal footer-->
                      <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Batal</button>
                        <a class="btn btn-danger" href="<?php echo base_url('siswa_jurnal/hapus/'. $res->id_jurnal) ?>">Hapus Jurnal</a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>


            </div>
            <p style="margin-top: -10px"><?php echo $res->kegiatan?> </p>

            <div class="comment-content comment-photos row">
              <div class="col-sm-12">
                <img style="height: 200px" class="img-responsive" src="<?php echo base_url ()?>assets/img/<?php echo $res->foto_kegiatan?>" alt="Image">
              </div>


            </div>
            <hr>


          </div>

        </div>



      <?php }?>
      <?php echo $pagination ?>








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