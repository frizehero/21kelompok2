


<div class="row pad-btm">
  <div class="col-sm-6 toolbar-left" style=" bottom: 15px;">
    <button  data-toggle="modal" data-target="#exampleModal" class="btn btn-purple">Tambah</button>
  </div>
<?= form_open_multipart('data_pengumuman/tambah'); ?>
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
            <input name="judul_pengumuman" type="text" class="form-control" id="inputEmail4" placeholder="Judul pengumuman">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Tanggal</label>
            <input name="tanggal_pengumuman" type="date" class="form-control" id="inputPassword4">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Isi pengumuman</label>
          <textarea name="isi_pengumuman" type="text"  class="form-control" id="inputAddress"></textarea>
        </div>
        <div class="form-row">


          <label for="inputState">Tertuju:</label>
          <select name="tertuju" id="inputState" class="form-control">
            <option value="siswa" selected>siswa</option>
            <option value="guru" >Guru</option>
          </select>

        </div>


      
    </div>
    <div class="modal-footer">

      <button type="submit" class="btn btn-primary">Save</button>
      </form>
    </div>
  </div>
</div>
</div>
<?= form_close(); ?>


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
        <?php foreach($tampil as $res) {
          $id = $res->id_pengumuman;
          ?>
          <tr>
            <td><?php echo $res->tanggal?></td>
            <td><?php echo $res->judul_pengumuman?></td>
            <td>
             <?php echo $res->isi_pengumuman?></td>
            <td>
              <?php echo $res->tertuju?></td>
            <td>
              <button data-toggle="modal" data-target="#exampleModal3" class="btn btn-warning">EDIT</button>
              <button class="btn btn-danger" data-toggle="modal" data-target="#demo-default-modal2<?php echo $res->id_pengumuman?>">HAPUS</button>
            </td>

          </tr>
        </tbody>
        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
   
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">edit Pengumuman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Judul</label>
            <input name="judul_pengumuman" type="text" class="form-control" id="inputEmail4" placeholder="Judul pengumuman">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Tanggal</label>
            <input name="tanggal_pengumuman" type="date" class="form-control" id="inputPassword4">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Isi pengumuman</label>
          <textarea name="isi_pengumuman" type="text"  class="form-control" id="inputAddress"></textarea>
        </div>
        <div class="form-row">


          <label for="inputState">Tertuju:</label>
          <select name="tertuju" id="inputState" class="form-control">
            <option value="siswa" selected>siswa</option>
            <option value="guru" >Guru</option>
          </select>

        </div>


      
    </div>
    <div class="modal-footer">

      <button type="submit" class="btn btn-primary">Save</button>
      </form>
    </div>
  </div>
</div>
</div>
<?= form_close(); ?>
        



        
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
          <p>Anda Yakin Ingin Menghapus <b><?php echo $res->judul_pengumuman ?></b> ? </p>
          <br>
          
          
          
        </div>

        <!--Modal footer-->
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default" type="button">Batal</button>
          <a class="btn btn-danger" href="<?php echo base_url('data_pengumuman/hapus/'. $res->id_pengumuman) ?>">Hapus Pengumuman</a>
        </div>
      </div>
    </div>
  </div>


  
      <?php }?>
      </table>
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