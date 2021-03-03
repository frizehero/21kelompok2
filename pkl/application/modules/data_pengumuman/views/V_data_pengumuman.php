<div id="page-content"> 
  <div class="row pad-btm">
    <div class="col-sm-6 toolbar-left" style=" bottom: 15px;">
      <button  data-toggle="modal" data-target="#exampleModal" class="btn btn-purple">Tambah</button>
    </div>

  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Pengumuman</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Judul</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="Judul pengumuman">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Tanggal</label>
              <input type="date" class="form-control" id="inputPassword4">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Isi pengumuman</label>
            <textarea  class="form-control" id="inputAddress"></textarea>
          </div>
          <div class="form-row">


            <label for="inputState">Tertuju:</label>
            <select id="inputState" class="form-control">
              <option selected>siswa</option>
              <option>Guru</option>
            </select>

          </div>


        </form>
      </div>
      <div class="modal-footer">

        <button type="button" data-dismiss="modal" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">Papan Pengumuman Siswa</h3>
  </div>
  <div class="panel-body">
    <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th class="min-desktop text-center">Tanggal</th>
          <th class="min-desktop text-center">Judul</th>
          <th class="min-desktop text-center">Isi Pengumuman</th>
          <th class="min-desktop text-center">kepada</th>
          <th class="min-desktop text-center">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>15-02-2020</td>
          <td>PENGUMAN AWAL MASUK PRAKERIN</td>
          <td>
            lorem ipsum 
          </td>
          <td>
            SISWA
          </td>
          <td>
            <button class="btn btn-warning">EDIT</button>
            <button class="btn btn-danger">HAPUS</button>
          </td>

        </tr>
        <tr>
          <td>15-02-2020</td>
          <td>PENGUMAN AWAL MASUK PRAKERIN</td>
          <td>
            lorem ipsum 
          </td>
          <td>
            SISWA
          </td>
          <td>
            <button class="btn btn-warning">EDIT</button>
            <button class="btn btn-danger">HAPUS</button>
          </td>

        </tr>
        <tr>
          <td>15-02-2020</td>
          <td>PENGUMAN AWAL MASUK PRAKERIN</td>
          <td>
            lorem ipsum 
          </td>
          <td>
            SISWA
          </td>
          <td>
            <button class="btn btn-warning">EDIT</button>
            <button class="btn btn-danger">HAPUS</button>
          </td>

        </tr>
        <tr>
          <td>15-02-2020</td>
          <td>PENGUMAN AWAL MASUK PRAKERIN</td>
          <td>
            lorem ipsum 
          </td>
          <td>
            SISWA
          </td>
          <td>
            <button class="btn btn-warning">EDIT</button>
            <button class="btn btn-danger">HAPUS</button>
          </td>

        </tr>
        <tr>
          <td>15-02-2020</td>
          <td>PENGUMAN AWAL MASUK PRAKERIN</td>
          <td>
            lorem ipsum 
          </td>
          <td>
            SISWA
          </td>
          <td>
            <button class="btn btn-warning">EDIT</button>
            <button class="btn btn-danger">HAPUS</button>
          </td>

        </tr>
        <tr>
          <td>15-02-2020</td>
          <td>PENGUMAN AWAL MASUK PRAKERIN</td>
          <td>
            lorem ipsum 
          </td>
          <td>
            SISWA
          </td>
          <td>
            <button class="btn btn-warning">EDIT</button>
            <button class="btn btn-danger">HAPUS</button>
          </td>

        </tr>
        <tr>
          <td>15-02-2020</td>
          <td>PENGUMAN AWAL MASUK PRAKERIN</td>
          <td>
            lorem ipsum 
          </td>
          <td>
            SISWA
          </td>
          <td>
            <button class="btn btn-warning">EDIT</button>
            <button class="btn btn-danger">HAPUS</button>
          </td>

        </tr>

      </tbody>
    </table>
  </div>
</div>

<?php foreach($tampil as $res) {
  $id = $res->id_pengumuman;
  $gambar = $res->logo;
  ?>
  <div class="col-lg-3" style="margin-top: 2%">

    <div class="panel widget" style="height:250px">
      <div class="widget-header bg-default">
        <img class="widget-bg img-responsive" src="<?php echo base_url ()?>assets/img/<?php echo $res->logo?>" alt="Image">
      </div>
      <div class ="text-center" style="margin-top:15px;">
        <p class="text-muted mar-no" style="height:20px;">
          <b><?= $res->judu_pengumuman ?></b>

        </p>
        <p class="text-muted mar-no" style="height:20px;">
          <b><?= $res->tanggal ?></b>

        </p>
        <p class="text-muted mar-no" style="height:20px;">
          <b><?= $res->tertuju ?></b>

        </p>
        <p class="text-muted mar-no" style="height:20px;">
          <?= substr($res->isi_pengumuman,0,35) ?>
        </p>
      </div>
      <div class="pad-all text-center">
       <span>
        <a data-toggle="modal" data-target="#demo-default-modal1<?php echo $res->id_pengumuman?>" class=" btn btn-success btn-sm">
          <span class="fa fa-edit"></span>
          &nbsp;Edit
        </a>
      </span>
      <span>
        <a data-toggle="modal" data-target="#demo-default-modal2<?php echo $res->id_pengumuman?>" class=" btn btn-danger btn-sm">
          <span class="fa fa-trash"></span>
          &nbsp;Hapus
        </a>
        <a data-toggle="modal" data-target="#demo-default-detail<?php echo $res->id_pengumuman?>" class=" btn btn-default btn-sm">
          <span class="fa fa-sticky-note"></span>
          &nbsp;Detail
        </a>
      </span>           
    </div>
  </div>

  <!-- update -->
  <div class="modal fade" id="demo-default-modal1<?php echo $res->id_pengumuman?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <!--Modal Update-->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
          <h4 class="modal-title">Update</h4>
        </div>
        <?= form_open_multipart('data_pengumuman/edit'); ?>
        <input type="hidden" name="id_pengumuman" value="<?php echo $res->id_pengumuman?>">

        <!--Modal body--> 
        <div class="modal-body">

          <div class="panel-body">

            <div class="col-md-6">
              <label for="" class="control-label">Nama Sekolah</label>
              <input type="text" name="nama_sekolah" placeholder="Nama Sekolah" class="form-control" value="<?= $res->nama_sekolah ?>">
            </div>
            <div class="col-md-6" >
              <label for="" class="control-label">Logo</label>
              <input type="file" name="gambar" placeholder="Logo Sekolah" class="form-control" id="userfile" onchange="tampilkanPreview(this,'preview')">
            </div>
            <div class="col-md-6" style="margin-top: 2%">
              <label for="" class="control-label">Keterangan</label>
              <textarea type="text" name="keterangan" rows="5" placeholder="Keterangan" class="form-control"><?= $res->keterangan ?></textarea>
            </div>
            <div class="col-md-6 " style="margin-top: 2%">
              <label for="" class="control-label">Preview Foto Profile</label>
              <img  src="<?= base_url(); ?>assets/img/<?= $res->logo ?>" width="150px" />
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
  <!-- end update -->

  <!-- detail -->
  <div class="modal fade" id="demo-default-detail<?php echo $res->id_pengumuman?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <!--Modal detail-->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
          <h4 class="modal-title">Detail</h4>
        </div>


        <!--Modal body--> 
        <div class="modal-body">
         <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Judul</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="Judul pengumuman">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Tanggal</label>
              <input type="date" class="form-control" id="inputPassword4">
            </div>


          </div>

          <!--Modal footer-->
          <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>

          </div>

        </div>
      </div>
    </div>
    <!-- end detail -->

    <!-- hapus -->
    <div class="modal fade" id="demo-default-modal2<?php echo $res->id_pengumuman?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
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
            <p>Anda Yakin Ingin Menghapus <b><?php echo $res->nama_sekolah ?></b> ? </p>
            <br>



          </div>

          <!--Modal footer-->
          <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-default" type="button">Batal</button>
            <a class="btn btn-danger" href="<?php echo base_url('data_pengumuman/hapus/'. $res->id_pengumuman) ?>">Hapus Sekolah</a>
          </div>
        </div>
      </div>
    </div>
    <!-- end hapus -->

  </div>
<?php } ?>

<!-- tambah -->
<div class="modal fade" id="demo-default-tambah" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <!--Modal Update-->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
        <h4 class="modal-title">Tambah</h4>
      </div>

      <?= form_open_multipart('data_pengumuman/tambah'); ?>
      <!--Modal body--> 
      <div class="modal-body">

        <div class="panel-body">

          <div class="col-md-6">
            <label for="" class="control-label">Nama Sekolah</label>
            <input type="text" name="nama_sekolah" placeholder="Nama Sekolah" class="form-control">
          </div>
          <div class="col-md-6" >
            <label for="" class="control-label">Logo</label>
            <input type="file" name="gambar" placeholder="Logo Sekolah" class="form-control" id="userfile" onchange="tampilkanPreview(this,'preview')">
          </div>
          <div class="col-md-6" style="margin-top: 2%">
            <label for="" class="control-label">Keterangan</label>
            <textarea type="text" name="keterangan" rows="5" placeholder="Keterangan" class="form-control"></textarea>
          </div>
          <div class="col-md-6 " style="margin-top: 2%">
            <label for="" class="control-label">Preview Foto Profile</label>
            <img id="preview" width="150px" />
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
<!-- end tambah -->

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