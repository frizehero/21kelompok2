<div id="page-head">

                        <!--Page Title-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <div id="page-title">
                            <h1 style="margin-top: -20px; margin-left: -20px" class="page-header text-overflow">Pesan</h1>
                        </div>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End page title-->


                        <!--Breadcrumb-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <ol style="margin-bottom: 20px; margin-left: -20px" class="breadcrumb">
                            <li><a href="index.html"><i class="demo-pli-home"></i></a></li>
                            <li class="active">Data Pesan</li>
                        </ol>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End breadcrumb-->

                    </div>
                
             <!-- MAIL INBOX -->
             <!--===================================================-->
             <div class="panel">
                 <div class="panel-body">
                     <div class="fixed-fluid">
                         <div class="fixed-sm-200 pull-sm-left fixed-right-border">
                             
                             <div class="pad-btm bord-btm">
                                 <a href="mailbox-compose.html" class="btn btn-block btn-success">Menulis surat</a>
                             </div>
                             
                             <p class="pad-hor mar-top text-main text-bold text-sm text-uppercase">Folders</p>
                             <div class="list-group bg-trans pad-btm bord-btm">
                                 <a href="#" class="list-group-item mail-nav-unread">
                                     <i class="demo-pli-mail-unread icon-lg icon-fw"></i> Pesan
                                 </a>
                                 <a href="#" class="list-group-item">
                                     <i class="demo-pli-pen-5 icon-lg icon-fw"></i> Draft
                                 </a>
                                 <a href="#" class="list-group-item">
                                     <i class="demo-pli-mail-send icon-lg icon-fw"></i> Terkirim
                                 </a>
                                 <a href="#" class="list-group-item mail-nav-unread">
                                     <i class="demo-pli-fire-flame-2 icon-lg icon-fw"></i> Spam
                                 </a>
                                 <a href="#" class="list-group-item">
                                     <i class="demo-pli-trash icon-lg icon-fw"></i> Sampah
                                 </a>
                             </div>
                             
                             
                             
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
                                 <?php foreach ($tampil as $key => $res) {?>
                                   
                                 <ul id="demo-mail-list" class="mail-list pad-top bord-top">
                                   <li class="mail-list-unread mail-attach">
                                         <div class="mail-control">
                                             <input id="email-list-1" class="magic-checkbox" type="checkbox">
                                             <label for="email-list-1"></label>
                                         </div>
                                         <div class="mail-star"><a href="#"><i class="demo-psi-star"></i></a></div>
                                         <div class="mail-from"><a href="#"><?php echo $res->nama_pengirim?></a></div>
                                         <div class="mail-time">05:55 PM</div>
                                         <div class="mail-attach-icon"></div>
                                         <div class="mail-subject">
                                             <a href="<?php echo base_url('data_pesan/detail_pesan/'. $res->id_pesan) ?>">mengirimkan sebuah pesan</a>
                                         </div>
                                     </li>
                                 </ul>
                               <?php }?>
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
             
             <!--===================================================-->
             <!-- END OF MAIL INBOX -->
             
             
         