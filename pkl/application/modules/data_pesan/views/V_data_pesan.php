<div id="page-content">
  <div class="panel">
                 <div class="panel-body">
                     <div class="fixed-fluid">
                         <div class="fixed-sm-200 pull-sm-left fixed-right-border">
                             
                            
                             
                             
                             
                             
                             
                             <!-- Friends -->
                             
                             
                             
                             
                         </div>
                         <div class="fluid">
                             <div id="demo-email-list">
                                 <div class="row">
                                     <div class="col-sm-7 toolbar-left">
                                         
                                         <!-- Mail toolbar -->
                                         <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                         
                                         <!--Split button dropdowns-->
                                         <div class="btn-group">
                                             <label id="demo-checked-all-mail" for="select-all-mail" class="btn btn-default">
                                                 <input id="select-all-mail" class="magic-checkbox" type="checkbox">
                                                 <label for="select-all-mail"></label>
                                             </label>
                                             <button data-toggle="dropdown" class="btn btn-default dropdown-toggle"><i class="dropdown-caret"></i></button>
                                             <ul class="dropdown-menu">
                                                 <li><a href="#" id="demo-select-all-list">All</a></li>
                                                 <li><a href="#" id="demo-select-none-list">None</a></li>
                                                 <li><a href="#" id="demo-select-toggle-list">Toggle</a></li>
                                                 <li class="divider"></li>
                                                 <li><a href="#" id="demo-select-read-list">Read</a></li>
                                                 <li><a href="#" id="demo-select-unread-list">Unread</a></li>
                                                 <li><a href="#" id="demo-select-starred-list">Starred</a></li>
                                             </ul>
                                         </div>
                                         
                                         <!--Refresh button-->
                                         <button id="demo-mail-ref-btn" data-toggle="panel-overlay" data-target="#demo-email-list" class="btn btn-default" type="button">
                                             <i class="demo-psi-repeat-2"></i>
                                         </button>
                                         
                                         <!--Dropdown button (More Action)-->
                                         <div class="btn-group dropdown">
                                             <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                                                 More <i class="dropdown-caret"></i>
                                             </button>
                                             <ul class="dropdown-menu">
                                                 <li><a href="#">Tandai sudah dibaca</a></li>
                                                 <li><a href="#">Mark as unread</a></li>
                                                 <li class="divider"></li>
                                                 <li><a href="#">Star</a></li>
                                                 <li><a href="#">Clear Star</a></li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="col-sm-5 toolbar-right">
                                         <!--Pager buttons-->
                                         <span class="text-main">
                                             <strong>1-50</strong>
                                             of
                                             <strong>160</strong>
                                         </span>
                                         <div class="btn-group btn-group">
                                             <button class="btn btn-default" type="button">
                                                 <i class="demo-psi-arrow-left"></i>
                                             </button>
                                             <button class="btn btn-default" type="button">
                                                 <i class="demo-psi-arrow-right"></i>
                                             </button>
                                         </div>
                                     </div>
                                 </div>
                                 
                                 <!--Mail list group-->
                                 
                                 <ul id="demo-mail-list" class="mail-list pad-top bord-top">
                                  <?php foreach($tampil as $res) {
                                          $id = $res->id_pesan;
                                             ?>
                                  <li class="mail-list-unread mail-attach">

                                         <div class="mail-control">
                                             <input id="email-list-1" class="magic-checkbox" type="checkbox">
                                             <label for="email-list-1"></label>
                                         </div>
                                          
                                         <div class="mail-star"><a href="#"><i class="demo-psi-star"></i></a></div>
                                         <div class="mail-from"><a href="#"><?php echo $res->nama_pengirim?></a></div>
                                         <div class="mail-time"><?php echo $res->tanggal_pesan?></div>
                                         <div class="mail-attach-icon"></div>
                                         <div class="mail-subject">
                                             <a href="mailbox-message.html"><?php echo $res->judul_pesan?></a>
                                         </div>
                                       
                                     </li>
                                      <?php }?>
                                   </ul>
                                    
                             </div>
                             
                             
                             <!--Mail footer-->
                             <div class="panel-footer clearfix">
                                 <div class="pull-right">
                                     <span class="text-main"><strong>1-50</strong> of <strong>160</strong></span>
                                     <div class="btn-group btn-group">
                                         <button type="button" class="btn btn-default">
                                             <i class="demo-psi-arrow-left"></i>
                                         </button>
                                         <button type="button" class="btn btn-default">
                                             <i class="demo-psi-arrow-right"></i>
                                         </button>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
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