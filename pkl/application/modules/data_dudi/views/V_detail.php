
<div id="page-head">

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
        <h1 style="margin-top: -20px; margin-left: -20px" class="page-header text-overflow">Data DU/DI</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->


    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol style="margin-bottom: 20px; margin-left: -20px" class="breadcrumb">
        <li><a href="index.html"><i class="demo-pli-home"></i></a></li>
        <li><a href="#">Data DU/DI</a></li>
        <li class="active">Hummasoft</li>
    </ol>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End breadcrumb-->

</div>






<!-- Contact Panel -->
<!---------------------------------->
<div class="panel">

    <div class="panel-body">

        <h3><?php echo $tampil_detail['nama_dudi']?></h3>
        <h4 style="margin-left: 550px ">Tentang Kami :</h4>
        <div class="widget-control">
         <div class="btn-group dropdown">
             <a href="#" class="dropdown-toggle btn btn-trans" data-toggle="dropdown" aria-expanded="false"><i  style="margin-right: 20px;margin-top: 30px;" class="demo-psi-dot-vertical icon-lg"></i></a>
             <ul class="dropdown-menu dropdown-menu-right" style="">
                 <li><a href="#"><i class="icon-lg icon-fw demo-psi-pen-5"></i> Edit</a></li>

                 <li><a href="siswamagang.html"><i class="icon-lg icon-fw demo-pli-calendar-4"></i> Siswa Magang</a></li>

             </ul>
         </div>
     </div>
     <p></p>
     <div class="row">
        <div class="col-sm-6">
            <div class="pad-all">
                <div id="demo-gallery">

                    <a href="#"> 
                        <img width="500" height="350" alt="The winding road"
                        src="<?php echo base_url ()?>assets/img/<?php echo $tampil_detail['foto_dudi'] ?>"
                        data-image="img/gallery/big/tile1.jpg"
                        data-description="The winding road description">
                    </a>
                    
                    <a href="#">
                        <img alt="Pancake"
                        src="img/gallery/thumbs/tile2.jpg"
                        data-image="img/gallery/big/tile2.jpg"
                        data-description="A pancake is a flat cake, often thin and round, prepared from a starch-based batter"
                        style="display:none">
                    </a>
                    
                    <a href="#">
                        <img alt="Foreshore"
                        src="img/gallery/thumbs/tile3.jpg"
                        data-image="img/gallery/big/tile3.jpg"
                        data-description="The part of a shore between high- and low-water marks, or between the water and cultivated or developed land."
                        style="display:none">
                    </a>
                    
                    <a href="#">
                        <img alt="Yellow Flowers"
                        src="img/gallery/thumbs/tile4.jpg"
                        data-image="img/gallery/big/tile4.jpg"
                        data-description="Those are yellow flowers"
                        style="display:none">
                    </a>
                    
                    <a href="#">
                        <img alt="Waterfall"
                        src="img/gallery/thumbs/tile5.jpg"
                        data-image="img/gallery/big/tile5.jpg"
                        data-description="A waterfall is a place where water flows over a vertical drop or a series of steep drops in the course of a stream or river."
                        style="display:none">
                    </a>
                    
                    <a href="#">
                        <img alt="Pumpkin"
                        src="img/gallery/thumbs/tile6.jpg"
                        data-image="img/gallery/big/tile6.jpg"
                        data-description="A pumpkin is a cultivar of a squash plant, most commonly of Cucurbita pepo, that is round, with smooth, slightly ribbed skin, and deep yellow to orange coloration."
                        style="display:none">
                    </a>
                    

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="mar-all">
                <div class="media">
                    <div class="panel">
                        <div class="panel-body">
                            <span class="text-semibold"><?php echo $tampil_detail['nama_dudi']?> </span><span><?php echo $tampil_detail['tentang']?></span>

                        </div>

                    </div>
                    <div class="media-left">
                        <i class="icon-lg icon-fw demo-pli-map-marker-2"></i>
                    </div>
                    <div class="media-body">
                        <address>
                            <strong class="text-main"><?php echo $tampil_detail['nama_dudi']?></strong><br>
                            <?php echo $tampil_detail['alamat']?>
                        </address>
                    </div>
                </div>

                <p><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
              </svg></i>    <span> <?php echo $tampil_detail['no_telepon']?></span></p>
              <div class="pad-btm">
                <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
              </svg></i>
              <span><?php echo $tampil_detail['email']?></span>
          </div>
          <div class="pad-ver">
            <a href="#" class="mar-rgt box-inline demo-pli-facebook icon-lg add-tooltip" data-original-title="Facebook" data-container="body">Hummasoft technology</a>
            <a href="#" class="mar-rgt box-inline demo-pli-google-plus icon-lg add-tooltip" data-original-title="Google+" data-container="body">Hummasoft.com</a>
            <a href="#" class="mar-rgt box-inline demo-pli-instagram icon-lg add-tooltip" data-original-title="Instagram" data-container="body">Hummasoft</a>
        </div>
        <div>
            <iframe src="https://www.google.com/maps/embed/v1/place?q=New+York+University&amp;key=AIzaSyBSFRN6WWGYwmFi498qXXsD2UwkbmD74v4" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="width: 100%; height: 200px;"></iframe> 
        </div>
    </div>
</div>
</div>
</div>
</div>
<!---------------------------------->

<!--jQuery [ REQUIRED ]-->




