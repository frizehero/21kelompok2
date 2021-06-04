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
    <li><a href="#">Dashboard</a></li>
    <li class="active">Detail Gelombang 2</li>
  </ol>
   <input style="margin-bottom: 10px; margin-left: 10px;" class="btn btn-purple" class="form-control" type="button" value="Kembali" onclick="history.back(-1)" />
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <!--End breadcrumb-->

</div>          

<?php foreach($detail as $res) {
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


