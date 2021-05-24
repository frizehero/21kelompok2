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
            <div class="col-md-6" style="margin-top: 2%">
              <label for="" class="control-label">DU/DI :</label>
              <select class="form-control" name="dudi">
                <option>
                  Jenis Kelamin Anda
                </option>
                <?php foreach ($tampil_dudi as $i) {?>
                  <option  value="<?php echo $i->id_dudi?>"><?php echo $i->nama_dudi;?>
                </option>
              <?php }?>   
            </select>
          </div>
          <div class="col-md-6">
            <label for="" class="control-label">Tgl Masuk:</label>
            <input type="date" name="masuk_p" placeholder="NISN" class="form-control"></input>
          </div>
          <div class="col-md-6">
            <label for="" class="control-label">Tgl Keluar:</label>
            <input type="date" name="keluar_p" placeholder="NISN" class="form-control"></input>
          </div>
          <div class="col-md-6">
              <label for="" class="control-label">username :</label>
              <input type="text" name="username" placeholder="username" class="form-control"></input>
              <input type="hidden" value="2" name="level">
            </div>
            <div class="col-md-6">
              <label for="" class="control-label">password :</label>
              <input type="text" name="password" placeholder="password" class="form-control"></input>
            </div>

          <div class="col-md-6" >
              <label for="" class="control-label">Foto :</label>
              <input type="file" name="gambar" placeholder="Logo " class="form-control" id="userfile" onchange="tampilkanPreview(this,'preview')">
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
<form method="post" action="<?php echo site_url('data_kelas/cari_siswa/'. $tampil_detail['id_kelas']) ?>" >
  <div class="col-sm-6 toolbar-right text-right">
    <div class="form-group">
      <?php if($this->uri->segment(2) != 'cari_siswa'){?>
        <input type="text" placeholder="Cari Nama" name="cari_siswa" class="form-control" id="demo-is-inputnormal">
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
            <img class="widget-img img-circle" src="<?php echo base_url ()?>assets/img/<?php echo $res->logo?>">

          </div>
          <div class="widget-control">
           <div class="btn-group dropdown">
             <a href="#" class="dropdown-toggle btn btn-trans" data-toggle="dropdown" aria-expanded="false"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
              <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
              <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
            </svg></i></a>
            <ul class="dropdown-menu dropdown-menu-right" style="">
              <li><a data-toggle="modal" data-target="#demo-default-modal1<?php echo $res->id_siswa?>"><i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
              </svg></i> Edit</a></li>
              <li><a data-toggle="modal" data-target="#demo-default-modal2<?php echo $res->id_siswa?>"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
              </svg></i> Hapus </a></li>
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
            <b><?= $res->nama_dudi ?></b>

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
        <input type="hidden" name="kelas" value="<?php echo $tampil_detail['id_kelas'] ?>">

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