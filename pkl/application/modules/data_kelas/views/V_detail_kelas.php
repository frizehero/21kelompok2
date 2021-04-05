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
    <li class="active">XI RPL</li>
  </ol>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <!--End breadcrumb-->

</div>
 
  <div class="row pad-btm">
    <div class="col-sm-6 toolbar-left">
      <button  data-toggle="modal" data-target="#exampleModal" class="btn btn-purple">tambah</button>
    </div>
    <?= form_open_multipart('data_kelas/tambah_siswa/'.$tampil_detail['id_kelas']); ?>

     <input type="hidden" value="<?php echo $tampil_detail['id_kelas']?>" name="kelas">

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
           <div class="panel-body">
             <form>
               <div class="col-md-6">
                <label for="" class="control-label">Nama siswa :</label>
                <input type="text" name="nama_siswa" placeholder="Nama" class="form-control"></input>
               

              </div>
              <div class="col-md-6">
                <label for="" class="control-label">NISN :</label>
                <input type="text" name="nisn" placeholder="NISN" class="form-control"></input>
              </div>
              <div class="col-md-6">
                <label for="" class="control-label">Jenis Kelamin :</label>
                <select class="form-control" name="jenis_kelamin">
                  <option>
                    Jenis Kelamin Anda
                  </option>
                  <option  value="Laki Laki">Laki Laki
                  </option>
                  <option  value="Perempuan">Perempuan
                  </option>
                </select>
              </div>
              <div class="col-md-6" >
                <label for="" class="control-label">Foto :</label>
                <input type="file" name="gambar" placeholder="Logo " class="form-control" id="userfile" onchange="tampilkanPreview(this,'preview')">
              </div>
              <div class="col-md-6" style="margin-top: 2%">
                <label for="" class="control-label">DU/DI :</label>
                <textarea type="text" name="dudi" rows="5" placeholder="dudi" class="form-control"></textarea>
              </div>
              <div class="col-md-6 " style="margin-top: 2%">
                <label for="" class="control-label">Preview Foto Profile</label>
                <img id="preview" width="150px" />
              </div>
              
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
  <?= form_close(); ?>
  <form method="post" action="<?php echo site_url('data_kelas/cari_siswa') ?>" >
  <div class="col-sm-6 toolbar-right text-right">
    <div class="form-group">
      <?php if($this->uri->segment(2) != 'cari_siswa'){?>
      <input type="text" placeholder="Cari Nama" name="cari_siswa" class="form-control" id="demo-is-inputnormal">
      <?php } ?>
      <?php if($this->uri->segment(2) == 'cari_siswa'){
            $cari_siswa = $this->input->post('cari_siswa'); ?>
            <input type="text" autocomplete="off" value="<?= $cari_siswa ?>" name="cari_siswa" class="form-control" id="demo-is-inputnormal" placeholder="Outlet">
      <?php } ?>
    </div>
    
   <button class="btn btn-purple btn-default">Cari</button>

 </div>
</form>



<div class="row">
  <?php foreach($tampil_data as $res) {
    $id = $res->id_siswa;
    $gambar = $res->logo;
    ?>
    <div class="col-md-3">

      <div class="panel widget">

        <div class="widget-body text-center">
          <divc class="widget-header">
            <!-- <img class="widget-img img-circle" src="<?php echo base_url ()?>assets/img/<?php echo $res->logo?>"> -->
            <img class="widget-img img-circle" src="<?php echo base_url ()?>assets/img/<?php echo $res->logo?>">

          </div>
          <div class="widget-control">
           <div class="btn-group dropdown">
             <a href="#" class="dropdown-toggle btn btn-trans" data-toggle="dropdown" aria-expanded="false"><i class="demo-psi-dot-vertical icon-lg"></i></a>
             <ul class="dropdown-menu dropdown-menu-right" style="">
              <li><a data-toggle="modal" data-target="#demo-default-modal1<?php echo $res->id_siswa?>"><i class="icon-lg icon-fw demo-psi-pen-5"></i> Edit</a></li>
              <li><a data-toggle="modal" data-target="#demo-default-modal2<?php echo $res->id_siswa?>"><i class="icon-lg icon-fw demo-pli-recycling"></i> Hapus </a></li>
              <li class="divider"></li> 
            </ul>
          </div>
        </div>
        <div class="panel widget" style="height: 250px," >
         <div class ="text-center" style="margin-top:15px;">
          <p class="text-muted mar-no" style="height:10px;">
            Nama :
            <b><?= $res->nama_siswa ?></b>

          </p>
        </div>
        <div class ="text-center" style="margin-top:15px;">
          <p class="text-muted mar-no" style="height:10px;">
            NISN :
            <b><?= $res->nisn ?></b>

          </p>
        </div>
        <div class ="text-center" style="margin-top:15px;">
          <p class="text-muted mar-no" style="height:10px;">
            Du/Di :
            <b><?= $res->dudi ?></b>

          </p>
        </div>
        <div class ="text-center" style="margin-top:15px;">
          <p class="text-muted mar-no" style="height:30px;">
            Jenis Kelamin :
            <b><?= $res->jenis_kelamin ?></b>

          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="demo-default-modal1<?php echo $res->id_siswa?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <!--Modal Update-->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
          <h4 class="modal-title">Edit</h4>
        </div>
        <?= form_open_multipart('data_kelas/edit_siswa/'.$tampil_detail['id_kelas']); ?>
        <input type="hidden" name="id_siswa" value="<?php echo $res->id_siswa?>">

        <!--Modal body--> 
        <div class="modal-body">
          <div class="panel-body">
            <div class="col-md-6">
              <label for="" class="control-label">Nama Siswa :</label>
              <input type="text" name="nama_siswa" placeholder="Nama Siswa" class="form-control" value="<?= $res->nama_siswa?>"></input>
            </div>
            <div class="col-md-6">
              <label for="" class="control-label">NISN :</label>
              <input type="text" name="nisn" placeholder="NISN" class="form-control"></input>
            </div>
            <div class="col-md-6">
              <label for="" class="control-label">Jenis Kelamin :</label>
              <select class="form-control" name="jenis_kelamin">
                <option>
                  Jenis Kelamin Anda
                </option>
                <option  value="Laki Laki">Laki Laki
                </option>
                <option  value="Perempuan">Perempuan
                </option>
              </select>
            </div>
            <div class="col-md-6" >
              <label for="" class="control-label">Foto :</label>
              <input type="file" name="gambar" placeholder="Logo " class="form-control" id="userfile" onchange="tampilkanPreview(this,'preview')">
            </div>
            <div class="col-md-6" style="margin-top: 2%">
              <label for="" class="control-label">DU/DI :</label>
              <textarea type="text" name="dudi" rows="5" placeholder="dudi" class="form-control"></textarea>
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

  <div class="modal fade" id="demo-default-modal2<?php echo $res->id_siswa?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
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
          <p>Anda Yakin Ingin Menghapus <b><?php echo $res->nama_siswa ?></b> ? </p>
          <br>



        </div>

        <!--Modal footer-->
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default" type="button">Batal</button>
          <a class="btn btn-danger" href="<?php echo base_url('data_kelas/hapus_siswa/'. $res->id_siswa) ?>">Hapus Dudi</a>
        </div>
      </div>
    </div>


  </div>

<?php }?>
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