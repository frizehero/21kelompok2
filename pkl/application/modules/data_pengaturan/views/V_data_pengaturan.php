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
            <?= form_open_multipart('data_pengaturan/edit'); ?>
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
            <button type="submit" class="btn btn-primary" style="margin-left: 950px">Simpan</button>
          </form>
          <?= form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
</div>