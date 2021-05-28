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
                     <form method="post" action="<?php echo site_url('data_jurnal/filter/') ?>">
                     <div class="select">
                         <select name="dudi" id="demo-ease">
                          <?php foreach ($filter_dudi as $zi) {$dufil=$dudi_fil ?>  
                             <option  <?php echo ($dufil == $zi->id_dudi) ? "selected": "" ?> value="<?php echo $zi->nama_dudi?>" ><?php echo $zi->nama_dudi?></option>
                           <?php }?>
                         </select>
                     </div>
                     <button type="submit" class="btn btn-default">Filter</button>
                   </form>
                     
                 </div>
             </div>
             <?php foreach($tampil as $res) {
                ?>
             <div  class="col-sm-4 col-md-3">


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

                       <a href="<?php echo base_url('data_jurnal/detail_jurnal/')?>?id=<?php echo $res->id_siswa?> ">
                        
                        

                           <img alt="Profile Picture" class="img-lg img-circle mar-ver" src="<?php echo base_url ()?>assets/img/<?php echo $res->logo?>">
                          



                            

                           <p class="text-lg text-semibold mar-no text-main"><?php echo $res->nama_siswa?> </p>
                           <p class="text-sm"><?php echo $res->nama_dudi?></p>

                     </a>

                   </div>
               </div>
               <!---------------------------------->


           </div>
         <?php }?>
          
       


   
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