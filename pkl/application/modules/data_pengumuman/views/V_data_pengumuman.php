<div id="page-head">

  <!--Page Title-->
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <div id="page-title">
    <h1 style="margin-top: -20px; margin-left: -20px" class="page-header text-overflow">Data Pengumuman</h1>
  </div>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <!--End page title-->


  <!--Breadcrumb-->
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <ol style="margin-bottom: 20px; margin-left: -20px" class="breadcrumb">
    <li><a href="index.html"><i class="demo-pli-home"></i></a></li>
    <li><a href="#">Data Pengumuman</a></li>
  </ol>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <!--End breadcrumb-->

</div>
<div style="left: 30px">
  <form method="post" action="<?php echo site_url('data_pengumuman/cari') ?>" >
    <div class="col-md-2" style="padding: 0px">
      <div id="demo-dp-txtinput">
        <?php if($this->uri->segment(2) != 'cari'){?>
          <input type="text" autocomplete="off" name="cari" class="form-control input-sm " placeholder="Cari judul">
        <?php } ?>
        <?php if($this->uri->segment(2) == 'cari'){
          $cari = $this->input->post('cari'); ?>
          <input type="text" autocomplete="off" value="<?= $cari ?>" name="cari" class="form-control input-sm " placeholder="Cari judul">
        <?php } ?> 
      </div>
    </div>


    <div class="col-md-2" style="">

      <button class="btn btn-success btn-sm">
        <span class="fa fa-filter"></span>
        Cari
      </button>
      <a class="btn btn-default btn-sm" href="<?php echo base_url('data_pengumuman'); ?>">
        <i class="fa fa-refresh" ></i>
      </a>
    </div>
  </form>
</div>

<div class="row pad-btm">
  <div class="col-sm-4 toolbar-left" style=" bottom: 15px; left: 600px;">
    <button  data-toggle="modal" data-target="#exampleModal" class="btn btn-purple">Tambah</button>
  </div>
 
</div>

 <?= form_open_multipart('data_pengumuman/tambah'); ?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pengumuman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Judul</label>
            <input required="" name="judul_pengumuman" type="text" class="form-control" id="inputEmail4" placeholder="Judul pengumuman">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Tanggal</label>
            <input required="" name="tanggal_pengumuman" type="date" class="form-control" id="inputPassword4">
          </div>
          <div class="form-group col-md-12">
          <label for="inputAddress">Isi pengumuman</label>
          <textarea required="" name="isi_pengumuman" type="text"  class="form-control" id="inputAddress"></textarea>
        </div>

        </div>
      </form>
        
        <div class="form-row">


          
          <input type="hidden" name="tertuju" value="siswa">

        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
  </div>
</div>
</div>
<?= form_close(); ?>



<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Papan Pengumuman Siswa</h3>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center">nomer</th>
                        <th class="text-center">tanggal</th>
                        <th class="text-center">Judul</th>
                        <th class="text-center">Tertuju</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1?>
                    <?php foreach ($tampil as $res) {?>
                       <?php 
                $date = date('d-m-Y', strtotime($res->tanggal));
                ?>
                    <tr>
                         <td class="text-center"><?php echo $no?></td>
                        <td class="text-center"><?php echo $date?></td>
                        <td class="text-center"><?php echo $res->judul_pengumuman?></td>
                        <td class="text-center"><?php echo $res->tertuju?></td>
                        <td class="text-center"> 
                       <button data-toggle="modal" data-target="#exampleModal3<?php echo $res->id_pengumuman?>" class="btn btn-warning">EDIT</button>
                       <button class="btn btn-danger" data-toggle="modal" data-target="#demo-default-modal2<?php echo $res->id_pengumuman?>">HAPUS</button>     
                         <button class="btn btn-primary" data-toggle="modal" data-target="#demo-default-modal4<?php echo $res->id_pengumuman?>">Detail</button>
                      </td>
                  </tr>
                  <?php $no++?>
              <?php }?>
              </tbody>
          </table>
      </div>
  </div>
</div>
<?php foreach ($tampil  as $rd) {?>

<div class="modal fade" id="exampleModal3<?php echo $rd->id_pengumuman?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
     <?= form_open_multipart('data_pengumuman/edit'); ?>
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">edit Pengumuman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Judul</label>
            <input type="hidden" value='<?php echo $rd->id_pengumuman?>' name="id_pengumuman">
            <input name="judul_pengumuman"  value='<?php echo $rd->judul_pengumuman?>' type="text" class="form-control" id="inputEmail4" placeholder="Judul pengumuman">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Tanggal</label>
            <input  value='<?php echo $rd->tanggal?>' name="tanggal_pengumuman" type="date" class="form-control" id="inputPassword4">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Isi pengumuman</label>
          <textarea name="isi_pengumuman" type="text"  class="form-control" id="inputAddress"><?php echo $rd->isi_pengumuman?></textarea>
        </div>
        <div class="form-row">


          
          <input type="hidden" name="tertuju" value="siswa">

        </div>



      </div>
      <div class="modal-footer">

        <button type="submit" class="btn btn-primary">Save</button>

      </div>
    </div>
        <?= form_close(); ?>
  </div>
</div>
<div class="modal fade" id="demo-default-modal2<?php echo $rd->id_pengumuman?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
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
        <p>Anda Yakin Ingin Menghapus <b><?php echo $rd->judul_pengumuman ?></b> ? </p>
        <br>



      </div>

      <!--Modal footer-->
      <div class="modal-footer">
        <button data-dismiss="modal" class="btn btn-default" type="button">Batal</button>
        <a class="btn btn-danger" href="<?php echo base_url('data_pengumuman/hapus/'. $rd->id_pengumuman) ?>">Hapus Pengumuman</a>
      </div>
    </div>
  </div>


</div>
<div class="modal fade" id="demo-default-modal4<?php echo $rd->id_pengumuman?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content"> 

      <!--Modal header-->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
        <h4 class="modal-title">Detail</h4>
      </div>

      <!--Modal body-->
      <div class="modal-body">
        <p class="text-semibold text-main"></p>
        <p><?php echo $rd->isi_pengumuman?></p>
        <br>



      </div>

      <!--Modal footer-->
      <div class="modal-footer">
        <button data-dismiss="modal" class="btn btn-default" type="button">Tutup</button>
      </div>
    </div>
  </div>


</div>
<?php }?>

