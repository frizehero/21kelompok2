<div id="page-head">

                        <!--Page Title-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <div id="page-title">
                            <h1 style="margin-top: -20px; margin-left: -20px" class="page-header text-overflow">Laporan Jurnal Harian</h1>
                        </div>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End page title-->


                        <!--Breadcrumb-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <ol style="margin-bottom: 20px; margin-left: -20px" class="breadcrumb">
                            <li><a href="index.html"><i class="demo-pli-home"></i></a></li>
                            <li class="active">Laporan Jurnal</li>
                        </ol>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End breadcrumb-->

                    </div>                <div class="row pad-btm">

                 <div class="col-sm-12 toolbar-right text-right">
                     FILTER :
                     <div class="select">
                         <select id="demo-ease">
                             <option value="date-created" selected="">XI RPL 3</option>
                             <option value="date-modified">XI RPL 2</option>
                             <option value="frequency-used">XI RPL 1</option>
                             <option value="alpabetically">XI TKJ</option>
                             <option value="alpabetically-reversed">XI PNP</option>
                         </select>
                     </div>
                     <div class="select">
                         <select id="demo-ease">
                             <option value="date-created" selected="">HUMMASOFT</option>
                             <option value="date-modified">KODESFOT</option>
                             <option value="frequency-used">ANGON DATA</option>
                             <option value="alpabetically">Alpabetically</option>
                             <option value="alpabetically-reversed">Alpabetically Reversed</option>
                         </select>
                     </div>
                     <button class="btn btn-default">Filter</button>
                     
                 </div>
             </div>
             <?php foreach($tampil as $res) {
             $id = $res->id_jurnal;
             $gambar = $res->foto_kegiatan;
                ?>
             <div class="col-sm-4 col-md-3">


               <!-- Contact Widget -->
               <!---------------------------------->
               <div class="panel pos-rel">
                   <div class="pad-all text-center">
                       <div class="widget-control">
                           <div class="btn-group dropdown">
                               <a href="#" class="dropdown-toggle btn btn-trans" data-toggle="dropdown" aria-expanded="false"><i class="demo-psi-dot-vertical icon-lg"></i></a>
                               <ul class="dropdown-menu dropdown-menu-right" style="">
                                   <li><a href="#"><i class="icon-lg icon-fw demo-psi-pen-5"></i> Edit</a></li>
                                   <li><a href="#"><i class="icon-lg icon-fw demo-pli-recycling"></i> Remove</a></li>
                                   <li class="divider"></li>
                                   <li><a href="#"><i class="icon-lg icon-fw demo-pli-mail"></i> Send a Message</a></li>
                                   <li><a href="#"><i class="icon-lg icon-fw demo-pli-calendar-4"></i> View Details</a></li>
                                   <li><a href="#"><i class="icon-lg icon-fw demo-pli-lock-user"></i> Lock</a></li>
                               </ul>
                           </div>
                       </div>
                       <a href="<?php echo base_url('data_jurnal/detail_jurnal/'. $res->id_jurnal) ?>">
                           <img alt="Profile Picture" class="img-lg img-circle mar-ver" src="https://smanegeri1pseksu.files.wordpress.com/2017/10/dsc_0010.jpg?w=246&h=370">
                           <p class="text-lg text-semibold mar-no text-main"><?php echo $res->nama_siswa?> </p>
                           <p class="text-sm">Rekayasa Perangkat Lunak</p>

                       </a>

                   </div>
               </div>
               <!---------------------------------->


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