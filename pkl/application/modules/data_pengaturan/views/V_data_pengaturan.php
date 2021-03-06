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
        <li><a href="#demo-bsc-tab-3" data-toggle="tab">Jurusan</a></li>
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
            <button type="submit" class="btn btn-primary" style="margin-left: 75%">Simpan</button>
          </div>
          <?= form_close(); ?>
          
          <div class="tab-pane fade" id="demo-bsc-tab-2">
           <?= form_open_multipart('data_pengaturan/edit_kop'); ?>
           <p class="text-main text-bold">Edit Kop Surat</p>
           <hr>
           <?php foreach ($kop as $res) {?>
            <div class="form-group">
              <label style="color: red" class="col-lg-3 control-label">Maksimal Ukuran 645px 135px</label>
              <div class="col-lg-7">
                <img src="<?php echo base_url ()?>assets/img/<?php echo $res->foto_surat?>">
                <input type="hidden" value="<?php echo $res->id_surat?>" name="id">
              </div>
            </div>
          <?php }?>
          <div class="form-group">
            <label class="col-lg-3 control-label">Kop surat</label>
            <div class="col-lg-7">
              <input type="file" class="form-control" name="foto" placeholder="City">

            </div>
          </div>
          <button type="submit" class="btn btn-primary" style="margin-left: 80%">Edit</button>
          <?= form_close(); ?>
        </div>
        <div class="tab-pane fade" id="demo-bsc-tab-3">
         
         <p class="text-main text-bold">Jurusan</p>
         <hr>
         <div class="panel">
          <div class="panel-heading">
           <button data-toggle="modal" data-target="#exampleModal" class="btn btn-purple">Tambah</button>
         </div>
         <div class="panel-body">
          <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Name Jurusan</th>
                <th class="min-desktop">Jumlah kelas</th>
                <th class="min-tablet">Kepala Jurusan</th>
                <th>Aksi</th>

              </tr>
            </thead>
            <tbody>
              <?php $no=1?>
              <?php foreach ($jur as $j) {
               $id= $j->id_jurusan;
               $qq= $this->m_data_pengaturan->hit($id);
               ?>

               <tr>
                <td><?php echo $no?></td>
                <td><?php echo $j->nama?></td>
                <td><?php echo $qq?></td>
                <td><?php echo $j->kepala?></td>
                <td><button data-toggle="modal" data-target="#demo-default-modal3" class="btn btn-warning"><i style="width: 100%"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
              </svg></i>Edit</button>
              <button class="btn btn-danger"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
              </svg></i>Hapus</button>
            </td>


              </tr><?= form_open_multipart('data_pengaturan/tj'); ?>
             
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
                    
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Nama Jurusan</label>
                          <input required="" name="jur" type="text" class="form-control" id="inputEmail4" placeholder="Nama Jurusan">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Kepala Jurusan</label>
                          <input required="" placeholder="Kepala Jurusan" name="kepala" type="text" class="form-control" id="inputPassword4">
                        </div>


                      </div>
                      
                  

                    <div class="form-row">


                    </div>
                  </div>

                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                      
                  </div>
                     <?= form_close(); ?>
             
               

              </div>

              
              <?php $no++?>
            <?php }?>
          </tbody>

        </table>

      </div>

    </div>
   
  </div>

</div>
</div>

<!--Default Tabs (Right Aligned)-->
<!--===================================================-->

</div>
</div>
</div>
</div>