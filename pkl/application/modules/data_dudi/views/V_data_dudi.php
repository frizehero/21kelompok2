<div id="page-content">

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
                <label for="inputPassword4">Telepon</label>
                <input name="telepon_dudi" type="number" placeholder="Telepon Dudi" class="form-control" id="inputPassword4">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="inputAddress">Alamat</label>
                <textarea name="alamat"  class="form-control" id="inputAddress"></textarea>
              </div>

            </div>
            <div class="form-row">
              <div class="form-group col-md-5">
                <label for="inputCity">Email</label>
                <input name="email_dudi" type="text" placeholder="Email Dudi" class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">Jurusan:</label>
                <select name="jurusan_dudi" id="inputState" class="form-control">
                  <option value="1" selected>RPL</option>
                  <option value="2" >TKJ</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="inputState">Foto:</label>
                <input name="gambar" type="file"  class="form-control" id="inputCity">
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
  <div class="col-sm-6 toolbar-right text-right">

    <div class="select">
     <select>
       <option>hummasoft</option>
       <option>kodesoft</option>
       <option>perusahaan asuransi</option>
     </select>
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
                 <li><a href="#"><i class="icon-lg icon-fw demo-pli-recycling"></i> Hapus </a></li>
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