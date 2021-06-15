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
    <li><a href="data_dashboard"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg></i></a></li>
    <li >Data Siswa</li>
    <li class="active">Cetak Jurnal</li>
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
        <p style="margin-top: -30px" class="text-main text-bold">Filter tanggal</p>

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