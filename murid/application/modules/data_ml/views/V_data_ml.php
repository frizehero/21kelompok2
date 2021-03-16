<div id="page-content">	

  <div class="form-group" style="padding-bottom: 2%">
                          <form method="post" action="<?php echo site_url('data_hotel/cari') ?>" >
                            <div class="col-md-2" style="padding: 0px">
                                <div id="demo-dp-txtinput">
                                    <?php if($this->uri->segment(2) != 'cari'){?>
                                        <input type="text" autocomplete="off" name="cari" class="form-control input-sm " placeholder="hotel">
                                    <?php } ?>
                                    <?php if($this->uri->segment(2) == 'cari'){
                                        $cari = $this->input->post('cari'); ?>
                                        <input type="text" autocomplete="off" value="<?= $cari ?>" name="cari" class="form-control input-sm " placeholder="Outlet">
                                    <?php } ?> 
                                </div>
                            </div>
                            
                          
                            <div class="col-md-2" style="">
                      
                        <button class="btn btn-success btn-sm">
                          <span class="fa fa-filter"></span>
                         Cari
                        </button>
                        <a class="btn btn-default btn-sm" href="<?php echo base_url('data_hotel'); ?>">
                            <i class="fa fa-refresh" ></i>
                        </a>
                               </div>
                            </form>


                        <div class="col-md-2" style="float: right;">
                        
                            <button style="float: right;" class="btn btn-success btn-sm"   data-toggle="modal" data-target="#demo-default-tambah">
                              <span class="fa fa-plus"></span>
                             Tambah
                            </button>
                        </div>
                           
                           
    </div>

    <?php foreach($tampil as $res) {
        $id = $res->id_ml;
        $gambar = $res->logo;
    ?>
    <div class="col-lg-3" style="margin-top: 2%">
        
            <div class="panel widget" style="height: 400px" >
               <div class="widget-header bg-default">
                    <img class="widget-bg img-responsive" src="<?php echo base_url ()?>assets/img/<?php echo $res->logo?>" alt="Image">
                </div>
                <div class ="text-center" style="margin-top:15px;">
                    <p class="text-muted mar-no" style="height:20px;">
                      Nama Hero:
                    <b><?= $res->nama ?></b>

                    </p>
                </div>
                <div class ="text-center" style="margin-top:15px;">
                    <p class="text-muted mar-no" style="height:20px;">
                      Mantra :
                    <b><?= $res->mantra ?></b>

                    </p>
                </div>

                <div class ="text-center" style="margin-top:15px;">
                    <p class="text-muted mar-no" style="height:20px;">
                      Emblem :
                    <b><?= $res->emblem ?></b>

                    </p>
                </div>
                <div class ="text-center" style="margin-top:15px;">
                    <p class="text-muted mar-no" style="height:20px;">
                      Tipe Hotel :
                    <b><?= $res->tipe_skin ?></b>

                    </p>
                </div>
                <div class ="text-center" style="margin-top:15px;">
                    <p class="text-muted mar-no" style="height:20px;">
                      Jenis :
                    <b><?= $res->jenis ?></b>

                    </p>
                </div>
                <div class ="text-center" style="margin-top:15px;">
                    <p class="text-muted mar-no" style="height:20px;">
                      Tanggal Rilis :
                    <b><?= $res->tanggal ?></b>

                    </p>
                </div>
                <div class="pad-all text-center">
                   <span>
                            <a data-toggle="modal" data-target="#demo-default-modal1<?php echo $res->id_form?>" class=" btn btn-success btn-sm">
                            <span class="fa fa-edit"></span>
                            &nbsp;Edit
                            </a>
                          </span>
                          <span>
                          <a data-toggle="modal" data-target="#demo-default-modal2<?php echo $res->id_form?>" class=" btn btn-danger btn-sm">
                          <span class="fa fa-trash"></span>
                          &nbsp;Hapus
                          </a>
                          <a data-toggle="modal" data-target="#demo-default-detail<?php echo $res->id_form?>" class=" btn btn-primary btn-sm">
                          <span class="fa fa-sticky-note"></span>
                          &nbsp;Detail
                          </a>
                         </span>           
                </div>
            </div>

            <!-- update -->
            <div class="modal fade" id="demo-default-modal1<?php echo $res->id_form?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!--Modal Update-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Update</h4>
                </div>
                  <?= form_open_multipart('data_ml/edit'); ?>
                <input type="hidden" name="id_form" value="<?php echo $res->id_form?>">

                <!--Modal body--> 
                <div class="modal-body">
                          <div class="panel-body">
                                        
                                        <div class="col-md-6">
                                            <label for="" class="control-label">Nama :</label>
                                            <input type="text" name="nama" placeholder="Nama Sekolah" class="form-control" value="<?= $res->nama ?>"></input>
                                        </div><br>
                                        <div class="col-md-6">
                                            <label for="" class="control-label">Mantra :</label>
                                            <input type="text" name="mantra" placeholder="Mantra" class="form-control" value="<?= $mantra ?>" ></input>
                                        </div><br>
                                        <div class="col-md-6">
                                            <label for="" class="control-label">Jenis Hero :</label>
                                            <select name="jenis" >
                                              <option value="<?= $res->jenis ?>">
                                                <?= $res->jenis ?>
                                              </option>
                                              <option  value="Tank">Tank
                                              </option>
                                              <option  value="Fighter">Fighter
                                              </option>
                                              <option  value="Assasin">Assasin
                                              </option>
                                              <option  value="M">Mage
                                              </option>
                                              <option  value="MM">MM
                                              </option>
                                            </select>
                                        </div><br>
                                        <div class="col-md-6"><br>
                                            <label for="" class="control-label">Tipe Skin :</label><br>
                                            <input type="radio" name="tipe_skin" value="<?= $res->tipe_skin ?>" > Elite</input>
                                            <input type="radio" name="tipe_skin" value="<?= $res->tipe_skin ?>" > Special</input>
                                            <input type="radio" name="tipe_skin" value="<?= $res->tipe_skin ?>" > Epic</input>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" class="control-label">Tanggal Rilis :</label>
                                            <input type="date" name="tanggal" placeholder="Tanggal Rilis" class="form-control" value="<?= $res->tanggal ?>"></input>
                                        </div><br>
                                         <div class="col-md-6" ><br>
                                            <label for="" class="control-label">Foto :</label>
                                            <input type="file" name="gambar" placeholder="Logo hotel" class="form-control" id="userfile" onchange="tampilkanPreview(this,'preview')">
                                        </div>
                                         <div class="col-md-6" style="margin-top: 2%">
                                            <label for="" class="control-label">Emblem :</label>
                                            <textarea type="text" name="emblem" rows="5" placeholder="Emblem" class="form-control">
                                                <?= $res->emblem ?></textarea>
                                        </div>
                                        <div class="col-md-6 " style="margin-top: 2%">
                                          <label for="" class="control-label">Preview Foto Profile</label>
                                           <img src="<?= base_url(); ?>assets/img/<?= $res->logo ?>" width="150px" />
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
            <div class="modal fade" id="demo-default-detail<?php echo $res->id_form?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!--Modal detail-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Detail</h4>
                </div>
                 

                <!--Modal body--> 
                <div class="modal-body">
                    
                                    <div class="panel-body">
                                        <div class="col-lg-4">
                                            <label for="" class="control-label">Nama :</label>
                                        </div>
                                        <div class="col-md-8">
                                            
                                            <input type="text" disabled="disabled" name="nama" placeholder="Nama" class="form-control" value="<?= $res->nama ?>">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="" class="control-label">Mantra :</label>
                                        </div>
                                            <div class="col-md-8">
                                            <input type="text" disabled="disabled" name="mantra" placeholder="Mantra" class="form-control" value="<?= $res->mantra ?>">
                                        </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="" class="control-label">Jenis Hero :</label>
                                        </div>
                                         <div class="col-md-8">
                                            <input type="text" disabled="disabled" name="jenis" placeholder="Jenis Hero" class="form-control" value="<?= $res->jenis ?>">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="" class="control-label">Tipe Skin :</label>
                                        </div>
                                        <div class="col-md-8">
                                            
                                            <input type="text" disabled="disabled" name="tipe_skin" placeholder="Tipe Skin" class="form-control" value="<?= $res->tipe_skin ?>">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="" class="control-label">Tanggal Rilis :</label>
                                        </div>
                                        <div class="col-md-8">
                                            
                                            <input type="text" disabled="disabled" name="tanggal" placeholder="Nama hotel" class="form-control" value="<?= $res->tanggal ?>">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="" class="control-label">Emblem :</label>
                                        </div>
                                        <div class="col-md-8">
                                            
                                            <input type="text" disabled="disabled" name="emblem" placeholder="emblem" class="form-control" value="<?= $res->emblem ?>">
                                        </div>
                                        <div class="col-lg-4" style="margin-top: 2%">
                                            <label for="" class="control-label">Preview Foto Profile :</label>
                                        </div>
                                        <div class="col-md-8 " style="margin-top: 2%">
                                           <img   src="<?= base_url(); ?>assets/img/<?= $res->logo ?>" width="150px" />
                                        </div>
                                        
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
    <div class="modal fade" id="demo-default-modal2<?php echo $res->id_form?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
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
                    <p>Anda Yakin Ingin Menghapus <b><?php echo $res->nama_hotel ?></b> ? </p>
                    <br>
                   
                   
                    
                </div>

                <!--Modal footer-->
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Batal</button>
                    <a class="btn btn-danger" href="<?php echo base_url('data_form/hapus/'. $res->id_form) ?>">Hapus hotel</a>
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
                 
                <?= form_open_multipart('data_form/tambah'); ?>
                <!--Modal body--> 
                <div class="modal-body">
                          <div class="panel-body">
                                        
                                        <div class="col-md-6">
                                            <label for="" class="control-label">Nama Hero :</label>
                                            <input type="text" name="nama" placeholder="Nama Hero" class="form-control"></input>
                                        </div><br>
                                        <div class="col-md-6">
                                            <label for="" class="control-label">Mantra :</label>
                                            <input type="text" name="mantra" placeholder="Mantra" class="form-control" ></input>
                                        </div><br>
                                        <div class="col-md-6">
                                            <label for="" class="control-label">Jenis Hero :</label>
                                            <select name="jenis">
                                              <option>
                                                Pilih Jenis
                                              </option>
                                              <option  value="Tank">Tank
                                              </option>
                                              <option  value="Fighter">Fighter
                                              </option>
                                              <option  value="Assasin">Assasin
                                              </option>
                                              <option  value="Mage">Mage
                                              </option>
                                              <option  value="MM">MM
                                              </option>
                                            </select>
                                        </div><br>
                                        <div class="col-md-6"><br>
                                            <label for="" class="control-label">Skin :</label><br>
                                            <input type="radio" name="tipe_skin" value="Elite" > Elite</input>
                                            <input type="radio" name="tipe_skin" value="Special" > Special</input>
                                            <input type="radio" name="tipe_skin" value="Epic" > Epic</input>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" class="control-label">Tanggal Rilis :</label>
                                            <input type="date" name="tanggal" placeholder="Tanggal Rilis" class="form-control"></input>
                                        </div><br>
                                         <div class="col-md-6" ><br>
                                            <label for="" class="control-label">Foto :</label>
                                            <input type="file" name="gambar" placeholder="Logo hotel" class="form-control" id="userfile" onchange="tampilkanPreview(this,'preview')">
                                        </div>
                                         <div class="col-md-6" style="margin-top: 2%">
                                            <label for="" class="control-label">Emblem :</label>
                                            <textarea type="text" name="emblem" rows="5" placeholder="Emblem" class="form-control"></textarea>
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