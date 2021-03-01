<div id="page-head">

                        <!--Page Title-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <div id="page-title">
                            <h1 style="margin-top: -20px; margin-left: -20px" class="page-header text-overflow">Data DU/DI</h1>
                        </div>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End page title-->


                        <!--Breadcrumb-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <ol style="margin-bottom: 20px; margin-left: -20px" class="breadcrumb">
                            <li><a href="index.html"><i class="demo-pli-home"></i></a></li>
                            <li><a href="#">Data</a></li>
                            <li class="active">Data DU/DI</li>
                        </ol>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End breadcrumb-->

                    </div>


  <div class="row pad-btm">
    <div class="col-sm-6 toolbar-left">
      <button  data-toggle="modal" data-target="#exampleModal" class="btn btn-purple">tambah</button>
    </div>
      <?= form_open_multipart('data_dudi/tambah'); ?>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah dudi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Nama DU/DI</label>
                <input name="nama_dudi"  class="form-control" id="inputEmail4" placeholder="Nama DU/DI">
              </div>
              <div class="form-group col-md-6">
                <label for="inputState">Jurusan:</label>
                <select name="jurusan_dudi" id="inputState" class="form-control">
                  <option value="1" selected>RPL</option>
                  <option value="2" >TKJ</option>
                </select>
              </div>
            

              
              <div class="form-group col-md-6">
                <label for="inputState">logo:</label>
                <input name="gambar" type="file"  class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-6">
                <label for="inputState">logo:</label>
                <input name="gambar" type="file"  class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-6">
                <label for="inputCity">Email</label>
                <input name="email_dudi" type="text" placeholder="Email Dudi" class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-6">
                <label for="inputCity">telepon</label>
                <input name="telepon" type="text" placeholder="Email Dudi" class="form-control" id="inputCity">
              </div>

              

            </div>



          </form>
        </div>
        <div class="modal-footer">

          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
  <?= form_close(); ?>
  <form method="post" action="<?php echo site_url('data_dudi/cari') ?>" >
  <div class="col-sm-6 toolbar-right text-right">
    <div class="form-group">
      <?php if($this->uri->segment(2) != 'cari'){?>
      <input type="text" placeholder="Normal" name="cari" class="form-control" id="demo-is-inputnormal">
      <?php } ?>
      <?php if($this->uri->segment(2) == 'cari'){
            $cari = $this->input->post('cari'); ?>
            <input type="text" autocomplete="off" value="<?= $cari ?>" name="cari" class="form-control input-sm " placeholder="Outlet">
      <?php } ?>
    </div>

    <div class="select">
     <select>
       <option>RPL</option>
       <option>AKL</option>
       <option>TKJ</option>
     </select>
   </div>
   <button class="btn btn-default">Cari</button>

 </div>
</div>
<!---------------------------------->


<div class="row">
  <a href="detaildudi.html">
    <?php foreach($tampil as $res) {
      $id = $res->id_dudi;
      $gambar = $res->foto;
      ?>
      <div class="col-md-4">

        <div class="panel widget">
          <div class="widget-header bg-purple">
            <img class="widget-bg img-responsive" src="img/foto_dudi/hummasoft1.jpeg" alt="Image">
          </div>
          <div class="widget-body text-center">
            <div class="widget-control">
             <div class="btn-group dropdown">
               <a href="#" class="dropdown-toggle btn btn-trans" data-toggle="dropdown" aria-expanded="false"><i class="demo-psi-dot-vertical icon-lg"></i></a>
               <ul class="dropdown-menu dropdown-menu-right" style="">
                 <li><a href="#"><i class="icon-lg icon-fw demo-psi-pen-5"></i> Edit</a></li>
                 <li><a data-toggle="modal" data-target="#demo-default-modal2<?php echo $res->id_dudi?>"><i class="icon-lg icon-fw demo-pli-recycling"></i> Hapus </a></li>
                 <li class="divider"></li>

               </ul>
             </div>
           </div>
           <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="<?php echo base_url ()?>assets/img/<?php echo $res->logo?>">
           <h4 class="mar-no text-main"><?php echo $res->nama_dudi?></h4>
           <p class="text-muted mar-no"><?php echo $res->nama?></p>
         </div>
       </div>

     </div>
     <div class="modal fade" id="demo-default-modal2<?php echo $res->id_dudi?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
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
          <p>Anda Yakin Ingin Menghapus <b><?php echo $res->nama_dudi ?></b> ? </p>
          <br>
          
          
          
        </div>

        <!--Modal footer-->
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default" type="button">Batal</button>
          <a class="btn btn-danger" href="<?php echo base_url('data_dudi/hapus/'. $res->id_dudi) ?>">Hapus Dudi</a>
        </div>
      </div>
    </div>
  </div>
   <?php }?>
   </a>


 </div>





</div>
<!--jQuery [ REQUIRED ]-->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

<script>
  $(document).ready(function () {


    $('#demo-dp-txtinputmasukkerja input').datepicker({
      format: "yyyy-m-d",
      todayBtn: "linked",
      todayHighlight: true
    });

    $('#demo-dp-txtinputakhirkerja input').datepicker({
      format: "yyyy-m-d",
      todayBtn: "linked",
      todayHighlight: true
    });



  });
</script>


<script type="text/javascript">


  function tampilkanPreview(userfile,idpreview)
  {
    var gb = userfile.files;
    for (var i = 0; i < gb.length; i++)
    {
      var gbPreview = gb[i];
      var imageType = /image.*/;
      var preview=document.getElementById(idpreview);
      var reader = new FileReader();
      if (gbPreview.type.match(imageType))
      {
      //jika tipe data sesuai
      preview.file = gbPreview;
      reader.onload = (function(element)
      {
        return function(e)
        {
          element.src = e.target.result;
        };
      })(preview);
      //membaca data URL gambar
      reader.readAsDataURL(gbPreview);
    }
    else
    {
        //jika tipe data tidak sesuai
        alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
      }
    }
  }
  function tampilkanPreview1(userfile,idpreview1)
  {
    var gb = userfile.files;
    for (var i = 0; i < gb.length; i++)
    {
      var gbPreview1 = gb[i];
      var imageType = /image.*/;
      var preview1=document.getElementById(idpreview1);
      var reader = new FileReader();
      if (gbPreview1.type.match(imageType))
      {
      //jika tipe data sesuai
      preview1.file = gbPreview1;
      reader.onload = (function(element)
      {
        return function(e)
        {
          element.src = e.target.result;
        };
      })(preview1);
      //membaca data URL gambar
      reader.readAsDataURL(gbPreview1);
    }
    else
    {
        //jika tipe data tidak sesuai
        alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
      }
    }
  }
</script>