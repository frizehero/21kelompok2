<div id="page-head">

  <!--Page Title-->
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <div id="page-title">
    <h1 style="margin-top: -20px; margin-left: -20px" class="page-header text-overflow">Pengaturan</h1>

  </div>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <!--End page title-->


  <!--Breadcrumb-->
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <ol style="margin-bottom: 20px; margin-left: -20px" class="breadcrumb">
    <li><a href="index.html"><i class="demo-pli-home"></i></a></li>
    <li class="active">Pengaturan</li>

  </ol>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <!--End breadcrumb-->

</div>

<div id="page-content">

 <div class="row">

   <div class="col-lg-12">
    <div class="tab-base">

      <!-- Nav tabs -->
      <ul class="nav nav-tabs tabs-right">
        <li class="active"><a href="#demo-bsc-tab-1" data-toggle="tab">Pengaturan Akun</a></li>
        <li><a href="#demo-bsc-tab-2" data-toggle="tab">Edit Kop Surat</a></li>
      </ul>

      <!-- Tabs Content -->
      <div  id="demo-bv-bsc-tabs">
        <?= form_open_multipart('data_pengaturan/edit'); ?>
        <div class="tab-content">
          <div class="tab-pane pad-btm fade in active" id="demo-bsc-tab-1">
            <p class="text-main text-bold">Pengaturan Akun</p>
            <hr>
            <div class="form-group">
              <label class="col-lg-3 control-label">username</label>
              <div class="col-lg-7">
              <input name="username" type="text" class="form-control" id="exampleInputEmail" placeholder="Masukan Username baru">
            </div>
              <input type="hidden" value="34" name="id_admin">
            </div>
            <div class="form-group">
              <label   class="col-lg-3 control-label">Password Baru</label>
              <div class="col-lg-7">
              <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukan Password Baru">
            </div>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-left: 1120px">Simpan</button>
          </div>
          <?= form_close(); ?>
          
          <div class="tab-pane fade" id="demo-bsc-tab-2">
             <?= form_open_multipart('data_pengaturan/edit_kop'); ?>
            <p class="text-main text-bold">Edit Kop Surat</p>
            <hr>
            <?php foreach ($kop as $res) {?>
            <div class="form-group">
              <label class="col-lg-3 control-label">Address</label>
              <div class="col-lg-7">
                <img src="<?php echo base_url ()?>assets/img/<?php echo $res->foto_surat?>">
                <input type="hidden" value="<?php echo $res->id_surat?>" name="id">
              </div>
            </div>
          <?php }?>
            <div class="form-group">
              <label class="col-lg-3 control-label">Kop</label>
              <div class="col-lg-7">
                <input type="file" class="form-control" name="foto" placeholder="City">
                
              </div>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-left: 1120px">Edit</button>
             <?= form_close(); ?>
          </div>
        </div>
    </div>

    <!--Default Tabs (Right Aligned)-->
    <!--===================================================-->

</div>
</div>
</div>
</div>