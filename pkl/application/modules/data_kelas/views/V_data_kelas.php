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
                <?php foreach ($filter_jurusan as $ee) {?>
                <option  value="<?php echo $ee->id_jurusan?>"><?php echo $ee->nama?>
                </option>
                <?php }?>
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

            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?= form_close(); ?>
<div class="col-sm-6 toolbar-right text-right">

  <div class="select">
    <form method="post" action="<?php echo site_url('data_kelas/filter') ?>">

     <select name="jurusan">
      <?php foreach ($filter_jurusan as $fil) {?>
       <option value="<?= $fil->nama?>" ><?= $fil->nama?></option>
     <?php }?>
   </select>
   

 </div>
 <button type="submit" class="btn btn-default">Cari</button>
</form>

</div>
</div>

<!---------------------------------->


<div class="row">
  <?php foreach($tampil as $res) {
    $id = $res->id_kelas;
    $gambar = $res->logo_kelas;
    ?>
    <div class="col-md-4">


      <div class="panel widget">
        <div class="widget-header">
          <img class="widget-bg img-responsive" src="<?php echo base_url ()?>assets/img/<?php echo $res->foto?>">
        </div>
        <div class="widget-body text-center">
          <div class="widget-control">
           <div class="btn-group dropdown">
             <a href="#" class="dropdown-toggle btn btn-trans" data-toggle="dropdown" aria-expanded="false"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
              <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
              <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
            </svg></i></a>
            <ul class="dropdown-menu dropdown-menu-right" style="">
              <li><a data-toggle="modal" data-target="#demo-default-modal3<?php echo $res->id_kelas?>"><i class="icon-lg ion-image demo-psi-pen-5"></i> Tambah Foto Sampul</a></li>
              <li><a data-toggle="modal" data-target="#demo-default-modal1<?php echo $res->id_kelas?>"><i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
              </svg></i> Edit</a></li>
              <li><a data-toggle="modal" data-target="#demo-default-modal2<?php echo $res->id_kelas?>"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
              </svg></i> Hapus </a></li>
              <li class="divider"></li>

            </ul>
          </div>
        </div>
        <a href="<?php echo base_url('data_kelas/detail_kelas/'. $res->id_kelas) ?>"><img alt="Profile Picture" class="widget-img img-circle img-border-light" src="<?php echo base_url ()?>assets/img/<?php echo $res->logo_kelas?>"></a>
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

<div class="modal fade" id="demo-default-modal3<?php echo $res->id_kelas?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header"></div>
      <!--Modal body-->
      <div class="panel">
        <div class="panel-body">
          <p class="text-main text-bold mar-no">Edit foto sampul</p>
          <p>masukan foto yang anda pilih</p>

          <br>

          <!--Dropzonejs-->
          <!--===================================================-->
          <?= form_open_multipart('data_kelas/edit_sampul'); ?>

          <input type="hidden" name="id_kelas" value="<?php echo $res->id_kelas?>">


          <input name="foto" type="file"  multiple>

          <!--===================================================-->
          <!-- End Dropzonejs -->

        </div>
      </div>

      <!--Modal footer-->
      <div class="modal-footer">
        <button data-dismiss="modal" class="btn btn-default" type="button">Batal</button>
        <button class="btn btn-primary" type="submit">Simpan</button>
        <?= form_close(); ?>
      </div>
    </div>
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