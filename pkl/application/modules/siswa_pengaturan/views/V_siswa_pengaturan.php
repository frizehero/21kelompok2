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
              <label for="exampleInputEmail">Email</label>
              <input type="password" class="form-control" id="exampleInputEmail" placeholder="Masukan Email Anda">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password Baru</label>
              <input name="lama" type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukan Password Baru">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Ulang Password Baru</label>
              <input name="baru" type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukan Ulang Password Baru">
              <small id="emailHelp" class="form-text text-muted">Samakan Password Baru</small>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-left: 1000px">Simpan</button>
          </form>
          <?= form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
</div>