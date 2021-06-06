<div id="page-head">

  <!--Page Title-->
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <div id="page-title">
    <h1 style="margin-top: -20px; margin-left: -20px" class="page-header text-overflow">siswa pengaturan</h1>

  </div>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <!--End page title-->

  <!--Breadcrumb-->
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <ol style=" margin-left: -20px" class="breadcrumb">
    <li><a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg></a></li>
    <li class="active">Pengaturan</li>

  </ol>

    
</div>
<div id="page-content">

 <div class="row">

   <div class="col-lg-12">

     <!--Default Tabs (Right Aligned)-->
     <!--===================================================-->
     <div class="tab-base">

       <!--Nav tabs-->
       <ul class="nav nav-tabs tabs-right">
        <li class="active"><a href="#demo-bsc-tab-1" data-toggle="tab">Pengaturan Akun</a></li>
        <li><a href="#demo-bsc-tab-2" data-toggle="tab">Pengaturan profil</a></li>
      </ul>

       <!--Tabs Content-->
       


      <div  id="demo-bv-bsc-tabs">
        <?= form_open_multipart('siswa_pengaturan/edit'); ?>
        <div class="tab-content">
          <div class="tab-pane pad-btm fade in active" id="demo-bsc-tab-1">
            <p class="text-main text-bold">Pengaturan Akun</p>
            <hr>
            <div class="form-group">
              <label class="col-lg-3 control-label">username</label>
              <div class="col-lg-7">
             <input name="username" value="<?php echo $tampil['username']?>" type="text" class="form-control" id="exampleInputEmail">
            </div>
              <input type="hidden" value="34" name="id_admin">
            </div>
            <div class="form-group">
              <label   class="col-lg-3 control-label">Password Baru</label>
              <div class="col-lg-7">
               <input name="password" value="<?php echo $tampil['password']?>" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-left: 1120px">Simpan</button>
          </div>
          <?= form_close(); ?>
          
          <div class="tab-pane fade" id="demo-bsc-tab-2">
             <?= form_open_multipart('siswa_pengaturan/edit_siswa'); ?>
            <p class="text-main text-bold">Edit Profil Siswa</p>
            <hr>
            <div class="col-lg-12">
            <div class="panel">
              



              <!--Input Size-->
              <!--===================================================-->
            <?= form_open_multipart('siswa_pengaturan/edit_siswa/'.$te['id_kelas']); ?>
                <div class="panel-body"><div class="form-group">

                  <div style="margin-bottom: 20px" class="col-md-6">
                    <label>Nama</label>
                    <input disabled="" type="text" value="<?php echo $te['nama_siswa']?>" name="nama_siswa" class="form-control input-lg" id="demo-is-inputnormal">
                    <input type="hidden"  value="<?php echo $te ['id_kelas']?>" name="kelas">
                    <input type="hidden" value="<?php echo $te ['id_siswa']?>" name="id_siswa">
                  </div>
                  
                  
                  <div style="margin-bottom: 20px" class="col-sm-6">
                    <label>Nisn</label>
                    <input disabled="" name="nisn" type="text" value="<?php echo $te ['nisn']?>" class="form-control input-lg" id="demo-is-inputlarge">
                  </div>
                  <div style="margin-bottom: 20px" class="col-sm-6">
                    <label>Email</label>
                    <input disabled="" name="email" type="text" value="<?php echo $te['email']?>" class="form-control input-lg" id="demo-is-inputlarge">
                  </div>
          
                  <div style="margin-bottom: 20px" class="col-sm-6">
                    <label>Telepon</label>
                    <input disabled="" name="telepon" type="text" value="<?php echo $te ['no_telepon']?>" class="form-control input-lg" id="demo-is-inputlarge">
                  </div>

                  <div style="margin-bottom: 20px" class="col-sm-6">
                    <label>Tanggal Masuk PKL</label>
                    <input disabled="" name="masuk_p" type="date" value="<?php echo $te ['masuk_p']?>" placeholder="Telepon" class="form-control input-lg" id="demo-is-inputlarge">
                  </div>
                  <div style="margin-bottom: 20px" class="col-sm-6">
                    <label>Tanggal Keluar PKL</label>
                    <input disabled="" name="keluar_p" type="date" value="<?php echo $te ['keluar_p']?>" class="form-control input-lg" id="demo-is-inputlarge">
                  </div>



                  
                  

                  <div style="margin-bottom: 20px" class="col-sm-6">
                    <input type="file" name="gambar" placeholder=".input-lg" class="form-control input-lg" id="demo-is-inputlarge">

                  </div>

                  <!-- <div  style="margin-bottom: 20px;" class="col-md-2">
                    <div class="select">
                    <select name="dudi" style="height: 48px;width: 160px;">
                      <option value="<?php echo $te ['id_dudi']?>">Pilih Dudi</option>t
                      <?php foreach ($tampil_dudi as $tt) {?>
                      <option value="<?php echo $tt->id_dudi?>"><?php echo $tt->nama_dudi?></option>
                    <?php }?>
          
                    </select>
                  </div></div> -->
                  <input type="hidden" value="<?php echo $te ['id_dudi']?>" name="dudi">

                  
                  <input value="<?php echo $te ['jenis_kelamin']?>" type="hidden" name="jenis_kelamin">
                  <input type="hidden" value="<?php echo $te ['gelombang']?>" name="gelombang">

                  
                  <div style="margin-bottom: 20px" class="col-sm-6">
                    <label>Foto lama</label><br>
                    <img width="50%" src="<?php echo base_url ()?>assets/img/<?php echo $te['logo']?>">
                  </div>
      
                  
                  <input type="hidden" value="<?php echo $te ['alamat']?>" name="alamat">

                </div></div>
                
            
             
              
              <!--===================================================-->
              <!--End Input Size-->


              </div>
              </div>
         
            
            <button type="submit" class="btn btn-primary" style="margin-left: 1120px">Edit</button>
             <?= form_close(); ?>
          </div>
        </div>
    </div>
    </div>
  </div>
</div>
</div>