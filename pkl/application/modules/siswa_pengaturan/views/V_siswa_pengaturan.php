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