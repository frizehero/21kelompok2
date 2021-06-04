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
    <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg></a></li>
    <li><a href="#">Profil siswa</a></li>
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
