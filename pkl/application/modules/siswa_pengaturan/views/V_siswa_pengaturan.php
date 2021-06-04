<div id="page-head">

  <!--Page Title-->
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <div id="page-title">
    <h1 style="margin-top: -20px; margin-left: -20px" class="page-header text-overflow">siswa_pengaturan</h1>

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


         <li  class="active">
           <a data-toggle="tab" href="#demo-rgt-tab-3">Edit Password</a>
         </li>
       </ul>

       <!--Tabs Content-->
       <div class="tab-content">
         <div id="demo-rgt-tab-1" class="tab-pane fade active in">
            <?= form_open_multipart('siswa_pengaturan/edit'); ?>
           <form>
            <div class="form-group">
              <label for="exampleInputEmail">Username Baru</label>
              <input name="username" value="<?php echo $tampil['username']?>" type="text" class="form-control" id="exampleInputEmail">
              <input type="hidden" value="<?php echo $tampil['id_admin']?>" name="id">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password Baru</label>
              <input name="password" value="<?php echo $tampil['password']?>" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary" style="margin-left: 950px">Simpan</button>
          </form>
          <?= form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
</div>