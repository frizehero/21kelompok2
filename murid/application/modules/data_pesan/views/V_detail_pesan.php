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
                            <li>Pesan</li>
                            <li class="active"><?php echo $tampil_detail['nama_pengirim']?> </li>
                        </ol>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End breadcrumb-->

                    </div>
 <div class="panel">
					        <div class="panel-body">
					            <div class="fixed-fluid">
					                <div class="fixed-sm-200 pull-sm-left fixed-right-border">
					
					                    <div class="pad-btm bord-btm">
					                        <a href="mailbox-compose.html" class="btn btn-block btn-success">Compose Mail</a>
					                    </div>
					
					                    <p class="pad-hor mar-top text-main text-bold text-sm text-uppercase">Folders</p>
					                    <div class="list-group bg-trans pad-btm bord-btm">
					                        <a href="#" class="list-group-item mail-nav-unread">
					                            <i class="demo-pli-mail-unread icon-lg icon-fw"></i> Inbox (73)
					                        </a>
					                        <a href="#" class="list-group-item">
					                            <i class="demo-pli-pen-5 icon-lg icon-fw"></i> Draft
					                        </a>
					                        <a href="#" class="list-group-item">
					                            <i class="demo-pli-mail-send icon-lg icon-fw"></i> Sent
					                        </a>
					                        <a href="#" class="list-group-item mail-nav-unread">
					                            <i class="demo-pli-fire-flame-2 icon-lg icon-fw"></i> Spam (5)
					                        </a>
					                        <a href="#" class="list-group-item">
					                            <i class="demo-pli-trash icon-lg icon-fw"></i> Trash
					                        </a>
					                    </div>
					
					                    
					
					                    <!-- Friends -->
					                    
					
					                    
					                    
					
					                </div>
					                <div class="fluid">
					
					                    <!-- VIEW MESSAGE -->
					                    <!--===================================================-->
					
					                    <div class="mar-btm pad-btm bord-btm">
					                        <h1 class="page-header text-overflow">
					                            <span class="label label-normal label-info">Family</span>
					                        </h1>
					                    </div>
					
					                    <div class="row">
					                        <div class="col-sm-7 toolbar-left">
					
					                            <!--Sender Information-->
					                            <div class="media">
					                                <span class="media-left">
					                                <img src="img/profile-photos/8.png" class="img-circle img-sm" alt="Profile Picture">
					                            </span>
					                                <div class="media-body text-left">
					                                    <div class="text-bold"><?php echo $tampil_detail ['nama_pengirim']?></div>
					                                    <small class="text-muted">apriliasusanti667@gmail.com</small>
					                                </div>
					                            </div>
					                        </div>
					                        <div class="col-sm-5 toolbar-right">
					
					                            <!--Details Information-->
					                            <p class="mar-no"><small class="text-muted">rabu,17-02-2021</small></p>
					                            <a href="#">
					                                <strong>Holiday.zip</strong>
					                                <i class="demo-psi-paperclip icon-lg icon-fw"></i>
					                            </a>
					                        </div>
					                    </div>
					                    <div class="row pad-top">
					                        <div class="col-sm-7 toolbar-left">
					
					                            <!--Mail toolbar-->
					                            <div class="btn-group btn-group">
					                                <button class="btn btn-default"><i class="demo-pli-information icon-lg"></i></button>
					                                <button class="btn btn-default"><i class="demo-pli-trash icon-lg"></i> Remove</button>
					                            </div>
					                        </div>
					                        <div class="col-sm-5 toolbar-right">
					                            <!--Reply & forward buttons-->
					                            <div class="btn-group btn-group">
					                                <a class="btn btn-default" href="#">
					                                <i class="demo-psi-left-4"></i>
					                                </a>
					                                <a class="btn btn-default" href="#">
					                                <i class="demo-psi-right-4"></i>
					                                </a>
					                            </div>
					                        </div>
					                    </div>
					
					                    <!--Message-->
					                    <!--===================================================-->
					                    <div class="mail-message">
					                        <h4><?php echo $tampil_detail ['judul_pesan']?></h4>
					                        <br><br> <?php echo $tampil_detail ['isi_pesan']?><br><br>
					                       
					                       
					                       
					                        
					                     
					                    </div>
					                    <!--===================================================-->
					                    <!--End Message-->
					
					                    <!-- Attach Files-->
					                    <!--===================================================-->
					                    
					                                
					                               
					                            </li>
					                        </ul>
					                    </div>
					                    <!--===================================================-->
					                    <!-- End Attach Files-->
					
					
					                    <!--Quick reply : Summernote Placeholder -->
					                    
					
					                    <!--Send button-->
					                    <div class="pad-btm">
					                        <button id="demo-mail-send-btn" type="button" class="btn btn-primary btn-lg btn-block hide">
					                        <span class="demo-psi-mail-send icon-lg icon-fw"></span>
					                        Send Message
					                    </button>
					                    </div>
					                    <!--===================================================-->
					                    <!-- END VIEW MESSAGE -->
					
					                </div>
					            </div>
					        </div>
					    </div>
					    