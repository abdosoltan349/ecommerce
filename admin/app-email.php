<!DOCTYPE html>

<?php
 include "init.php";
	?>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="Error 404">
    <title>Email Application - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="<?php echo $images ?>ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $images ?>ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/editors/quill/katex.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/editors/quill/monokai-sublime.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/editors/quill/quill.snow.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>components.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>pages/app-email.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern content-left-sidebar email-application navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar">

     <?php
	include $tpl."header.php";
	 ?>
  
	<?php
		include $tpl."menu.php";
	 ?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-area-wrapper">
            <div class="sidebar-left">
                <div class="sidebar">
                    <div class="sidebar-content email-app-sidebar d-flex">
                        <span class="sidebar-close-icon">
                            <i class="feather icon-x"></i>
                        </span>
                        <div class="email-app-menu">
                            <div class="form-group form-group-compose text-center compose-btn">
                                <button type="button" class="btn btn-primary btn-block my-2" data-toggle="modal" data-target="#composeForm"><i class="feather icon-edit"></i> Compose</button>
                            </div>
                            <div class="sidebar-menu-list">
                                <div class="list-group list-group-messages font-medium-1">
                                    <a href="?type=inbox" class="list-group-item list-group-item-action border-0 pt-0 <?php if((!isset($_GET["type"])) || $_GET["type"] == "inbox"){echo "active";}?>">
                                        <i class="font-medium-5 feather icon-mail mr-50"></i> Inbox <span class="badge badge-primary badge-pill float-right">3</span>
                                    </a>
                                    <a href="?type=sent" class="list-group-item list-group-item-action border-0 <?php if($_GET["type"] == "sent"){echo "active";}?>"><i class="font-medium-5 fa fa-paper-plane-o mr-50"></i> Sent</a>
                                   
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade text-left" id="composeForm" tabindex="-1" role="dialog" aria-labelledby="emailCompose" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title text-text-bold-600" id="emailCompose">New Message</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body pt-1">
                                    <div class="form-label-group mt-1">
                                        <input type="email" id="emailTo" class="form-control" placeholder="To" name="fname-floating">
                                        <label for="emailTo">To</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input type="text" id="emailSubject" class="form-control" placeholder="Subject" name="fname-floating">
                                        <label for="emailSubject">Subject</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input type="text" id="emailCC" class="form-control" placeholder="CC" name="fname-floating">
                                        <label for="emailCC">CC</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input type="text" id="emailBCC" class="form-control" placeholder="BCC" name="fname-floating">
                                        <label for="emailBCC">BCC</label>
                                    </div>
                                    <div id="email-container">
                                        <div class="editor" data-placeholder="Message">
                                        </div>
                                    </div>
                                    <div class="form-group mt-2">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="emailAttach">
                                            <label class="custom-file-label" for="emailAttach">Attach file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" value="Send" class="btn btn-primary">
                                    <input type="Reset" value="Cancel" class="btn btn-white" data-dismiss="modal">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="content-right">
                <div class="content-wrapper">
                    <div class="content-header row">
                    </div>
                    <div class="content-body">
                        <div class="app-content-overlay"></div>
                        <div class="email-app-area">
                            <!-- Email list Area -->
                            <div class="email-app-list-wrapper">
                                <div class="email-app-list">
                                    <div class="app-fixed-search">
                                        <div class="sidebar-toggle d-block d-lg-none"><i class="feather icon-menu"></i></div>
                                        <fieldset class="form-group position-relative has-icon-left m-0">
                                            <input type="text" class="form-control" id="email-search" placeholder="Search email">
                                            <div class="form-control-position">
                                                <i class="feather icon-search"></i>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="app-action">
                                        <div class="action-left">
                                            <div class="vs-checkbox-con selectAll">
                                                <input type="checkbox">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-minus"></i>
                                                    </span>
                                                </span>
                                                <span>Select All</span>
                                            </div>
                                        </div>
                                        <div class="action-right">
                                            <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle" id="folder" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="feather icon-folder"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="folder">
                                                            
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle" id="tag" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="feather icon-tag"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="tag">
                                                            <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-success bullet-sm"></span> Personal</a>
                                                            <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-primary bullet-sm"></span> Company</a>
                                                            <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-warning bullet-sm"></span> Important</a>
                                                            <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-danger bullet-sm"></span> Private</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item mail-unread"><span class="action-icon"><i class="feather icon-mail"></i></span></li>
                                                <li class="list-inline-item mail-delete"><span class="action-icon"><i class="feather icon-trash"></i></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="email-user-list list-group">
                                        <ul class="users-list-wrapper media-list">
                                            <li class="media mail-read">
                                                <div class="media-left pr-50">
                                                    <div class="avatar">
                                                        <img src="<?php echo $images ?>portrait/small/avatar-s-20.jpg" alt="avtar img holder">
                                                    </div>
                                                    <div class="user-action">
                                                        <div class="vs-checkbox-con">
                                                            <input type="checkbox">
                                                            <span class="vs-checkbox vs-checkbox-sm">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <span class="favorite"><i class="feather icon-star"></i></span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="user-details">
                                                        <div class="mail-items">
                                                            <h5 class="list-group-item-heading text-bold-600 mb-25">Tonny Deep</h5>
                                                            <span class="list-group-item-text text-truncate">Focused impactful open system</span>
                                                        </div>
                                                        <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mr-1 bullet bullet-success bullet-sm"></span><span class="mail-date">4:14 AM</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="mail-message">
                                                        <p class="list-group-item-text truncate mb-0">Hey John, bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine preimaginary saunders demidolmen Chaldaic allusiveness lorriker unworshipping ribaldish tableman hendiadys outwrest unendeavored fulfillment scientifical Pianokoto CheloniaFreudian sperate unchary hyperneurotic phlogiston duodecahedron unflown Paguridea catena disrelishable Stygian paleopsychology cantoris phosphoritic disconcord fruited inblow somewhatly ilioperoneal forrard palfrey Satyrinae outfreeman melebiose</p>
                                                    </div>
                                                </div>
                                            </li>
                                           
                                        </ul>
                                        <div class="no-results">
                                            <h5>No Items Found</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Email list Area -->
                            <!-- Detailed Email View -->
                            <div class="email-app-details">
                                <div class="email-detail-header">
                                    <div class="email-header-left d-flex align-items-center mb-1">
                                        <span class="go-back mr-1"><i class="feather icon-arrow-left font-medium-4"></i></span>
                                        <h3>Focused impactful open system 📷 😃</h3>
                                    </div>
                                    <div class="email-header-right mb-1 ml-2 pl-1">
                                        <ul class="list-inline m-0">
                                            <li class="list-inline-item"><span class="action-icon favorite"><i class="feather icon-star font-medium-5"></i></span></li>
                                            <li class="list-inline-item">
                                                <div class="dropdown no-arrow">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="feather icon-folder font-medium-5"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="folder">
                                                        <a class="dropdown-item d-flex font-medium-1" href="#"><i class="font-medium-3 feather icon-edit-2 mr-50"></i> Draft</a>
                                                        <a class="dropdown-item d-flex font-medium-1" href="#"><i class="font-medium-3 feather icon-info mr-50"></i> Spam</a>
                                                        <a class="dropdown-item d-flex font-medium-1" href="#"><i class="font-medium-3 feather icon-trash mr-50"></i> Trash</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="dropdown no-arrow">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="feather icon-tag font-medium-5"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="tag">
                                                        <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-success bullet-sm"></span> Personal</a>
                                                        <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-primary bullet-sm"></span> Company</a>
                                                        <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-warning bullet-sm"></span> Important</a>
                                                        <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-danger bullet-sm"></span> Private</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-inline-item"><span class="action-icon"><i class="feather icon-mail font-medium-5"></i></span></li>
                                            <li class="list-inline-item"><span class="action-icon"><i class="feather icon-trash font-medium-5"></i></span></li>
                                            <li class="list-inline-item email-prev"><span class="action-icon"><i class="feather icon-chevrons-left font-medium-5"></i></span></li>
                                            <li class="list-inline-item email-next"><span class="action-icon"><i class="feather icon-chevrons-right font-medium-5"></i></span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="email-scroll-area">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="email-label ml-2 my-2 pl-1">
                                                <span class="mr-1 bullet bullet-primary bullet-sm"></span><small class="mail-label">Company</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card px-1">
                                                <div class="card-header email-detail-head ml-75">
                                                    <div class="user-details d-flex justify-content-between align-items-center flex-wrap">
                                                        <div class="avatar mr-75">
                                                            <img src="<?php echo $images ?>portrait/small/avatar-s-18.jpg" alt="avtar img holder" width="61" height="61">
                                                        </div>
                                                        <div class="mail-items">
                                                            <h4 class="list-group-item-heading mb-0">Ardis Balderson</h4>
                                                            <div class="email-info-dropup dropdown">
                                                                <span class="dropdown-toggle font-small-3" id="dropdownMenuButton200" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    abaldersong@utexas.edu
                                                                </span>
                                                                <div class="dropdown-menu dropdown-menu-right p-50" aria-labelledby="dropdownMenuButton200">
                                                                    <div class="px-25 dropdown-item">From: <strong> abaldersong@utexas.edu </strong></div>
                                                                    <div class="px-25 dropdown-item">To: <strong> johndoe@ow.ly </strong></div>
                                                                    <div class="px-25 dropdown-item">Date: <strong> 4:25 AM 13 Jan 2018 </strong></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mail-meta-item">
                                                        <div class="mail-time mb-1">4:14 AM</div>
                                                        <div class="mail-date">17 May 2018</div>
                                                    </div>
                                                </div>
                                                <div class="card-body mail-message-wrapper pt-2 mb-0">
                                                    <div class="mail-message">
                                                        <p>Hey John,</p>
                                                        <p>bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine preimaginary saunders demidolmen Chaldaic allusiveness lorriker unworshipping ribaldish tableman hendiadys outwrest unendeavored fulfillment scientifical Pianokoto Chelonia</p>
                                                        <p>Freudian sperate unchary hyperneurotic phlogiston duodecahedron unflown Paguridea catena disrelishable Stygian paleopsychology cantoris phosphoritic disconcord fruited inblow somewhatly ilioperoneal forrard palfrey Satyrinae outfreeman melebiose</p>
                                                    </div>
                                                    <div class="mail-attachements d-flex">
                                                        <i class="feather icon-paperclip font-medium-5 mr-50"></i>
                                                        <span>Attachments</span>
                                                    </div>
                                                </div>
                                                <div class="mail-files py-2">
                                                    <div class="chip chip-primary">
                                                        <div class="chip-body py-50">
                                                            <span class="chip-text">interdum.docx</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <span class="font-medium-1">Click here to <span class="primary cursor-pointer"><strong>Reply</strong></span> or <span class="primary  cursor-pointer"><strong>Forward</strong></span></span>
                                                        <i class="feather icon-paperclip font-medium-5 mr-50"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Detailed Email View -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

	<?php
		include $tpl."footer.php";
	 ?>


    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo $vendors ?>js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo $vendors ?>js/editors/quill/katex.min.js"></script>
    <script src="<?php echo $vendors ?>js/editors/quill/highlight.min.js"></script>
    <script src="<?php echo $vendors ?>js/editors/quill/quill.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="layout/js/core/app-menu.js"></script>
    <script src="layout/js/core/app.js"></script>
    <script src="layout/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="layout/js/scripts/pages/app-email.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>