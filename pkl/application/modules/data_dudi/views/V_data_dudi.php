<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
<style type="text/css">
html, body { width:100%;padding:0;margin:0; }
.container { width:95%;max-width:980px;padding:1% 2%;margin:0 auto }
#lat, #lon { text-align:right }
#map { width:10%;height:50%;padding:0;margin:0; }
.address { cursor:pointer }
.address:hover { color:#AA0000;text-decoration:underline }
</style>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>

  <!-- Load Esri Leaflet from CDN -->
  <script src="https://unpkg.com/esri-leaflet@3.0.1/dist/esri-leaflet.js"
    integrity="sha512-JmpptMCcCg+Rd6x0Dbg6w+mmyzs1M7chHCd9W8HPovnImG2nLAQWn3yltwxXRM7WjKKFFHOAKjjF2SC4CgiFBg=="
    crossorigin=""></script>

  <!-- Load Esri Leaflet Geocoder from CDN -->
  <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@3.0.0/dist/esri-leaflet-geocoder.css"
    integrity="sha512-IM3Hs+feyi40yZhDH6kV8vQMg4Fh20s9OzInIIAc4nx7aMYMfo+IenRUekoYsHZqGkREUgx0VvlEsgm7nCDW9g=="
    crossorigin="">
  <script src="https://unpkg.com/esri-leaflet-geocoder@3.0.0/dist/esri-leaflet-geocoder.js"
    integrity="sha512-vZbMwAf1/rpBExyV27ey3zAEwxelsO4Nf+mfT7s6VTJPUbYmD2KSuTRXTxOFhIYqhajaBU+X5PuFK1QJ1U9Myg=="
    crossorigin=""></script>
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
    <!-- <button  data-toggle="modal" data-target="#exampleModal" class="btn btn-purple">tambah</button> -->
    <a href="data_dudi/tambah1" class="btn btn-purple">Tambah</a>
  </div>
  
  <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <label for="inputCity">Email</label>
              <input name="email_dudi" type="text" placeholder="Email Dudi" class="form-control" id="inputCity">
            </div>

            <div class="form-group col-md-6">
              <label for="inputCity">telepon</label>
              <input name="telepon_dudi" type="text" placeholder="Telepon Dudi" class="form-control" id="inputCity">
            </div>

            <div class="form-group col-md-6">
              <label for="inputCity">Guru Pembimbing</label>
              <input name="nama_pembimbing" type="text" placeholder="Guru Pembimbing" class="form-control" id="inputCity">
            </div>

            <div class="form-group col-md-12">
              <label for="inputCity">tentang</label>
              <input style="height: 100px;" name="tentang" type="text" placeholder="tentang Dudi" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-12">
              <input type="text" name="addr" value="" id="addr" size="58" />
              <button type="button" onclick="addr_search();">Search</button>
              <div id="results"></div>
              <div id="map"></div>  
              
            </div>



            
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>  
    </div>
  </div>
</div> -->

<div class="col-sm-6 toolbar-right text-right">
  <div class="select">
    <form method="post" action="<?php echo site_url('data_dudi/filter') ?>">
     <select name="jurusan">
      <?php foreach ($tampil_jurusan as $fil) {?>
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
  <a href="detaildudi.html">
    <?php foreach($tampil as $res) {
      $id = $res->id_dudi;
      $gambar = $res->foto_dudi;
      ?>
      <a href="<?php echo base_url('data_dudi/detail_dudi/'. $res->id_dudi) ?>">
        <div class="col-md-4">

          <div class="panel widget">
            <div class="widget-header">
              <img class="widget-bg img-responsive" src="<?php echo base_url ()?>assets/img/<?php echo $res->foto_dudi?>" >
            </div>
            <div class="widget-body text-center">
              <div class="widget-control">
               <div class="btn-group dropdown">
                 <a href="#" class="dropdown-toggle btn btn-trans" data-toggle="dropdown" aria-expanded="false"><i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                  <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                  <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                </svg></i></a>
                <ul class="dropdown-menu dropdown-menu-right" style="">
                 <li><a href="data_dudi/edit1/<?php echo $res->id_dudi?>"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                </svg></i> Edit</a></li>
                <li><a data-toggle="modal" data-target="#demo-default-modal4<?php echo $res->id_dudi?>"><i class="icon-lg ion-image demo-psi-pen-5"></i> Tambah Foto Sampul</a></li>
                <li><a data-toggle="modal" data-target="#demo-default-modal3<?php echo $res->id_dudi?>"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                </svg></i> Hapus </a></li>
                <li class="divider"></li>

              </ul>
            </div>
          </div>
          <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="<?php echo base_url ()?>assets/img/<?php echo $res->logo_dudi?>">
          <h4 class="mar-no text-main"><?php echo $res->nama_dudi?></h4>
          <p class="text-muted mar-no"><?php echo $res->nama?></p>
          <p class="text-muted mar-no"><?php echo $res->nama_pembimbing?></p>
        </div>
      </div>

    </div>
  </a>

  <div class="modal fade" id="demo-default-modal2<?php echo $res->id_dudi?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <!--Modal header-->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
          <h4 class="modal-title">Edit <?php echo $res->nama_dudi ?></h4>
        </div>
        <?= form_open_multipart('data_dudi/edit'); ?>
        <input type="hidden" name="id_dudi" value="<?php echo $res->id_dudi?>">
        <div class="modal-body">
         <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nama DU/DI</label>
              <input name="nama_dudi"  class="form-control" value="<?php echo $res->nama_dudi ?>" id="inputEmail4" placeholder="Nama DU/DI">
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
              <label for="inputCity">Email</label>
              <input name="email_dudi" type="text" placeholder="Email Dudi" class="form-control" id="inputCity">
            </div>

            <div class="form-group col-md-6">
              <label for="inputCity">telepon</label>
              <input name="telepon_dudi" type="text" placeholder="Telepon Dudi" class="form-control" id="inputCity">
            </div>

            <div class="form-group col-md-6">
              <label for="inputCity">Guru Pembimbing</label>
              <input name="nama_pembimbing" type="text" placeholder="Guru Pembimbing" class="form-control" id="inputCity">
            </div>

            <div class="form-group col-md-12">
              <label for="inputCity">tentang</label>
              <input style="height: 100px;" name="tentang" type="text" placeholder="tentang Dudi" class="form-control" id="inputCity">
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

<div class="modal fade" id="demo-default-modal3<?php echo $res->id_dudi?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
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

<div class="modal fade" id="demo-default-modal4<?php echo $res->id_dudi?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
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
          <?= form_open_multipart('data_dudi/edit_sampul'); ?>

          <input type="hidden" name="id_dudi" value="<?php echo $res->id_dudi?>">


          <input name="foto_dudi" type="file"  multiple>

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
</a>


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