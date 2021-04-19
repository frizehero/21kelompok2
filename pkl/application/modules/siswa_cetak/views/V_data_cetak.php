<div id="page-head">

  <!--Page Title-->
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <div id="page-title">
    <h1 style="margin-top: -20px; margin-left: -20px" class="page-header text-overflow">Data Siswa</h1>
  </div>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <!--End page title-->


  <!--Breadcrumb-->
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <ol style="margin-bottom: 20px; margin-left: -20px" class="breadcrumb">
    <li><a href="data_dashboard"><i class="demo-pli-home"></i></a></li>
    <li class="active">Data Siswa</li>
  </ol>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <!--End breadcrumb-->

</div>                

<div class="row">
  <div class="col-lg-12">


    <div class="panel">

      <div class="panel-body">


        <!--Bootstrap Datepicker : Text Input-->
        <!--===================================================-->


        <!--Bootstrap Datepicker : Component-->
        <!--===================================================-->

        <!--===================================================-->

        <hr class="new-section-sm bord-no">
        <p style="margin-top: -30px" class="text-main text-bold">Range</p>

        <!--Bootstrap Datepicker : Range-->
        <!--===================================================-->
        <div id="demo-dp-range">
          <div class="col-md-11">
            <?= form_open_multipart('siswa_cetak/cetak'); ?>
            <div class="input-daterange input-group" id="datepicker">
            <input type="date" name="awl" class="form-control">
            <div class="input-group-addon">to</div>
            <input type="date" name="akr" class="form-control" >
             
            
          </div>
            
          </div>
          <button type="submit" class="btn btn-primary">Cari</button>
        </div>
         <?= form_close(); ?>
        <!--===================================================-->

        <!--===================================================-->

      </div>
    </div>

  </div>
  <div class="col-lg-6">



    <div class="hidden"></div>
  </div>

</div>