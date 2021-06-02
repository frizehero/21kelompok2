<div id="page-head">


  <!--Page Title-->
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <div id="page-title">
    <h1 class="page-header text-overflow">Jurnal Siswa</h1>
  </div>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <!--End page title-->


  <!--Breadcrumb-->
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <ol class="breadcrumb">
    <li><a href="#"><i class="demo-pli-home"></i></a></li>
    <li><a href="#">Jurnal</a></li>
    <li class="active"<?php echo $tampil['nama_siswa']?>></li><br>
  </ol>
</div>
<div id="container" class="effect aside-float aside-bright mainnav-sm page-fixedbar page-fixedbar-right">
  <div class="page-fixedbar-container">
    <div class="page-fixedbar-content">
      <div class="nano">
        <div class="nano-content">
          <p class="pad-all text-main text-sm text-uppercase text-bold">
            <?php
            $a=$tampil['id_dudi'];
            $ass= $this->m_siswa_profil->tampild($a);
            ?>
            Siswa Yang  PKL di <?php echo $ass['nama_dudi'] ?>
          </p>

          <!--Family-->
          <div class="list-group bg-trans bord-btm">
           <hr class="new-section-xs">
           <?php
           $a=$tampil['id_dudi'];
           $as= $this->m_siswa_profil->tampil_dudi($a);
           ?>


           <?php foreach ($as as $ss) {?>
            <div class="list-group-item">
              <div class="media-left pos-rel">
                <a href="#"><img class="img-circle img-xs" src="<?php echo base_url ()?>assets/img/<?php echo $ss->logo?>" alt="Profile Picture"></a>
              </div>
              <div class="media-body">
                <a href="#" class="text-main">
                  <p><?php echo $ss->nama_siswa?> </p>
                </a>
              </div>
            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
</div>



<div id="page-content">
  <div class="panel">
    <div class="panel-body" style="height: 500px">
      <div class="fixed-fluid">
        <div class="fixed-md-200 pull-sm-left fixed-right-border">

          <!-- Simple profile -->
          <div class="text-center">
            <div class="pad-ver">
             <img src="<?php echo base_url ()?>assets/img/<?php echo $tampil ['logo']?>" class="img-lg img-circle" alt="Profile Picture">
           </div>
           <h2 class="text-bold text-overflow mar-no"><?php echo $tampil['nama_siswa'] ?></h2>
           <h4 class="text-sm text-muted"><?php echo $tampil['nama_kelas']?></h4>
           <h4 class="text-sm text-muted"> <?php echo $tampil['nama_dudi'] ?></h4>

         </div>
         <hr>
       </div>

       <div style="margin-top: 20px" class="page-content">
         <p class="pad-top text-main text-center text-uppercase text-bold">profil siswa </p>
         <h5 style="margin-bottom: 15px"><a style="margin-left: 10px" class><strong>Nis/Nis      :  </strong><?php echo $tampil['nisn'] ?></a></h5>
         <h5 style="margin-bottom: 15px"><a style="margin-left: 10px" class><strong>jenis kelamin:  </strong><?php echo $tampil['jenis_kelamin'] ?></a></h5>
         <h5 style="margin-bottom: 15px"><a style="margin-left: 10px" class><strong>Alamat       :  </strong><?php echo $tampil['alamat'] ?></a></h5>
         <h5 style="margin-bottom: 15px"><a style="margin-left: 10px" class><strong>No.HP        :  </strong><?php echo $tampil['no_telepon'] ?></a></h5>
         <h5 style="margin-bottom: 15px"><a style="margin-left: 10px" class><strong>Kelas        :  </strong><?php echo $tampil['nama_kelas'] ?></a></h5>
         <h5 style="margin-bottom: 15px"><a style="margin-left: 10px" class><strong>email        :  </strong><?php echo $tampil['email'] ?></a></h5>
         <div style="margin-left: 220px">
          <h5 style="margin-bottom: 15px"><a style="margin-left: 10px" class><strong>Tanggal Masuk  :  </strong><?php echo $tampil['masuk_p'] ?></a></h5>
          <h5><a style="margin-left: 10px" class><strong>Tanggal Keluar:  </strong><?php echo $tampil['keluar_p'] ?></a></h5>
          <h5 style="margin-bottom: 15px"><a style="margin-left: 10px" class><strong>Gelombang Ke   :  </strong><?php echo $tampil['gelombang'] ?></a></h5>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
