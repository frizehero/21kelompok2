<div id="page-head">

  <!--Page Title-->
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <div id="page-title">
    <h1 style="margin-top: -20px; margin-left: -20px" class="page-header text-overflow">Data Kelas</h1>
  </div>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <!--End page title-->


  <!--Breadcrumb-->
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <ol style="margin-bottom: 20px; margin-left: -20px" class="breadcrumb">
    <li><a href="index.html"><i class="demo-pli-home"></i></a></li>
    <li><a href="#">Data</a></li>
    <li class="active">Data Kelas</li>
  </ol>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <!--End breadcrumb-->

</div>


<div class="row pad-btm">
  <div class="col-sm-6 toolbar-left">
    <button  data-toggle="modal" data-target="#exampleModal" class="btn btn-purple">tambah</button>
  </div>
  <?= form_open_multipart('data_kelas/tambah'); ?>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nama Kelas</label>
              <input name="nama_kelas"  class="form-control" id="inputEmail4" placeholder="Nama Kelas">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6">
              <label for="" class="control-label">Jurusan:</label>
              <select class="form-control" name="jurusan">
                <option>
                  Pilih Jurusan
                </option>
                <option  value="1">Rekasaya Perangkat Lunak
                </option>
                <option  value="2">Teknik Komputer Jaringan
                </option>
              </select>
            </div>
            <div class="col-md-6" >
              <label for="" class="control-label">Foto :</label>
              <input type="file" name="gambar" placeholder="Foto " class="form-control" id="userfile" onchange="tampilkanPreview(this,'preview')">
            </div>
            <div class="col-md-6 " style="margin-top: 2%">
              <label for="" class="control-label">Preview Foto Profile</label>
              <img id="preview" width="150px" />
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
 </div>
 <button class="btn btn-default">Cari</button>

</div>
</div>
</form>
<!---------------------------------->


<div class="row">
    <?php foreach($tampil as $res) {
      $id = $res->id_kelas;
      $gambar = $res->logo;
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
                   <li><a data-toggle="modal" data-target="#demo-default-modal1<?php echo $res->id_kelas?>"><i class="icon-lg icon-fw demo-psi-pen-5"></i> Edit</a></li>
                   <li><a data-toggle="modal" data-target="#demo-default-modal2<?php echo $res->id_kelas?>"><i class="icon-lg icon-fw demo-pli-recycling"></i> Hapus </a></li>
                   <li class="divider"></li>

                 </ul>
               </div>
             </div>
             <a href="<?php echo base_url('data_kelas/detail_kelas/'. $res->id_kelas) ?>"><img alt="Profile Picture" class="widget-img img-circle img-border-light" src="<?php echo base_url ()?>assets/img/<?php echo $res->logo?>"></a>
             <h4 class="mar-no text-main"><?php echo $res->nama_kelas?></h4>
             <p class="text-muted mar-no"><?php echo $res->nama?></p>
           </div>
         </div>
       </div>
     <div class="modal fade" id="demo-default-modal2<?php echo $res->id_kelas?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
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
            <p>Anda Yakin Ingin Menghapus <b><?php echo $res->nama_kelas ?></b> ? </p>
            <br>



          </div>

          <!--Modal footer-->
          <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-default" type="button">Batal</button>
            <a class="btn btn-danger" href="<?php echo base_url('data_kelas/hapus/'. $res->id_kelas) ?>">Hapus kelas</a>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="demo-default-modal1<?php echo $res->id_kelas?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <!--Modal Update-->
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
            <h4 class="modal-title">Edit</h4>
          </div>
          <?= form_open_multipart('data_kelas/edit'); ?>
          <input type="hidden" name="id_kelas" value="<?php echo $res->id_kelas?>">

          <!--Modal body--> <div class="modal-body">
           <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Nama Kelas</label>
                <input name="nama_kelas"  class="form-control" id="inputEmail4" placeholder="Nama Kelas">
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <label for="" class="control-label">Jurusan:</label>
                <select class="form-control" name="jurusan">
                  <option>
                    Pilih Jurusan
                  </option>
                  <option  value="1">Rekasaya Perangkat Lunak
                  </option>
                  <option  value="2">Teknik Komputer Jaringan
                  </option>
                </select>
              </div>
              <div class="col-md-6" >
                <label for="" class="control-label">Foto :</label>
                <input type="file" name="gambar" placeholder="Foto " class="form-control" id="userfile" onchange="tampilkanPreview(this,'preview')">
              </div>
              <div class="col-md-6 " style="margin-top: 2%">
                <label for="" class="control-label">Preview Foto Profile</label>
                <img id="preview" width="150px" />
              </div>
            </div>
            <div class="modal-footer">
              <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
              <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
          </div>
        </form>
      </div>
      <!--Modal footer-->

      <?= form_close(); ?>
    </div>
  </div>

<?php }?>


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