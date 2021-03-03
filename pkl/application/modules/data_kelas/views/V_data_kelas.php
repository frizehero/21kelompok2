<div id="page-content">

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
 <?php foreach($tampil as $res) {
    $id = $res->id_kelas;
    $gambar = $res->logo;
    ?>
    <!-- update -->
    <div class="modal fade" id="demo-default-modal1<?php echo $res->id_kelas?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <!--Modal Update-->
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
            <h4 class="modal-title">Update</h4>
          </div>
          <?= form_open_multipart('data_kelas/edit'); ?>
          <input type="hidden" name="id_kelas" value="<?php echo $res->id_kelas?>">

          <!--Modal body--> 
          <div class="modal-body">
           <div class="panel-body">
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
          
           </div>
        </div>



      </div>

      <!--Modal footer-->
      <div class="modal-footer">
        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
        <button class="btn btn-primary" type="submit">Simpan</button>
      </div>
      <?= form_close(); ?>
    </div>
  </div>
</div>
</form>
<!-- end update -->

<div class="row">

  <div class="col-md-4">

    <div class="panel widget">
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
       <div class="panel widget" style="height: 200px," >
         <div class="widget-header bg-default">
           <a href="<?php echo base_url('data_siswa') ?>"> <img class="widget-bg img-responsive" src="<?php echo base_url ()?>assets/img/<?php echo $res->logo?>" alt="Image"></a>
         </div>
         <h4  class="mar-no text-main"><?php echo $res->nama_kelas?></h4>
         <h5 class="mar-no text-main"><?php echo $res->nama?></h5>
       </div>
     </div>
   </div>

   <div class="pad-all text-center">
     <span>
      <a data-toggle="modal" data-target="#demo-default-modal1<?php echo $res->id_kelas?>" class=" btn btn-success btn-sm">
        <span class="fa fa-edit"></span>
        &nbsp;Edit
      </a>
    </span>
    <span>
      <a data-toggle="modal" data-target="#demo-default-modal2<?php echo $res->id_kelas?>" class=" btn btn-danger btn-sm">
        <span class="fa fa-trash"></span>
        &nbsp;Hapus
      </a>
      <a data-toggle="modal" data-target="#demo-default-detail<?php echo $res->id_kelas?>" class=" btn btn-primary btn-sm">
        <span class="fa fa-sticky-note"></span>
        &nbsp;Detail
      </a>
    </span>           
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