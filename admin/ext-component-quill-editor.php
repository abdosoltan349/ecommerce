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
    <title>Quill Editor - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="<?php echo $images ?>ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $images ?>ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/editors/quill/katex.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/editors/quill/monokai-sublime.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/editors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $vendors ?>css/editors/quill/quill.bubble.css">
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
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo $css ?>style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

   <?php
	include $tpl."header.php";
	 ?>
  
	<?php
		include $tpl."menu.php";
	 ?>

       
                <li class=" nav-item"><a href="#"><i class="feather icon-eye"></i><span class="menu-title" data-i18n="Icons">Icons</span></a>
                    <ul class="menu-content">
                       
                
               
               
                <li class=" nav-item"><a href="maps-google"><i class="feather icon-map"></i><span class="menu-title" data-i18n="Google Maps">Google Maps</span></a>
                </li>
                <li class=" navigation-header"><span>Extensions</span>
                </li>
                <li class=" nav-item"><a href="ext-component-sweet-alerts"><i class="feather icon-alert-circle"></i><span class="menu-title" data-i18n="Sweet Alert">Sweet Alert</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-toastr"><i class="feather icon-zap"></i><span class="menu-title" data-i18n="Toastr">Toastr</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-noui-slider"><i class="feather icon-sliders"></i><span class="menu-title" data-i18n="NoUi Slider">NoUi Slider</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-file-uploader"><i class="feather icon-upload-cloud"></i><span class="menu-title" data-i18n="File Uploader">File Uploader</span></a>
                </li>
                <li class="active nav-item"><a href="ext-component-quill-editor"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Quill Editor">Quill Editor</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-drag-drop"><i class="feather icon-droplet"></i><span class="menu-title" data-i18n="Drag &amp; Drop">Drag &amp; Drop</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-tour"><i class="feather icon-info"></i><span class="menu-title" data-i18n="Tour">Tour</span></a>
                </li>
                <li class=" nav-item"><a href="ext-

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Quill Editor</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Extensions</a>
                                    </li>
                                    <li class="breadcrumb-item active">Quill Editor
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Snow Editor start -->
                <section class="snow-editor">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Snow Editor</h4>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <p>Snow is a clean, flat toolbar theme.</p>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div id="snow-wrapper">
                                                    <div id="snow-container">
                                                        <div class="quill-toolbar">
                                                            <span class="ql-formats">
                                                                <select class="ql-header">
                                                                    <option value="1">Heading</option>
                                                                    <option value="2">Subheading</option>
                                                                    <option selected>Normal</option>
                                                                </select>
                                                                <select class="ql-font">
                                                                    <option selected>Sailec Light</option>
                                                                    <option value="sofia">Sofia Pro</option>
                                                                    <option value="slabo">Slabo 27px</option>
                                                                    <option value="roboto">Roboto Slab</option>
                                                                    <option value="inconsolata">Inconsolata</option>
                                                                    <option value="ubuntu">Ubuntu Mono</option>
                                                                </select>
                                                            </span>
                                                            <span class="ql-formats">
                                                                <button class="ql-bold"></button>
                                                                <button class="ql-italic"></button>
                                                                <button class="ql-underline"></button>
                                                            </span>
                                                            <span class="ql-formats">
                                                                <button class="ql-list" value="ordered"></button>
                                                                <button class="ql-list" value="bullet"></button>
                                                            </span>
                                                            <span class="ql-formats">
                                                                <button class="ql-link"></button>
                                                                <button class="ql-image"></button>
                                                                <button class="ql-video"></button>
                                                            </span>
                                                            <span class="ql-formats">
                                                                <button class="ql-formula"></button>
                                                                <button class="ql-code-block"></button>
                                                            </span>
                                                            <span class="ql-formats">
                                                                <button class="ql-clean"></button>
                                                            </span>
                                                        </div>
                                                        <div class="editor">
                                                            <h1 class="ql-align-center">Quill Rich Text Editor</h1>
                                                            <p><br></p>
                                                            <p>Quill is a free, <a href="https://github.com/quilljs/quill/">open source</a> WYSIWYG editor
                                                                built for the modern web. With its <a href="http://quilljs.com/docs/modules/">modular
                                                                    architecture</a> and expressive <a href="http://quilljs.com/docs/api/">API</a>, it is
                                                                completely customizable to fit any need.</p>
                                                            <p><br></p>
                                                            <iframe class="ql-video ql-align-center" src="https://www.youtube.com/embed/QHH3iSeDBLo?showinfo=0" width="560" height="238"></iframe>
                                                            <p><br></p>
                                                            <p><br></p>
                                                            <h2 class="ql-align-center">Getting Started is Easy</h2>
                                                            <p><br></p>
                                                            <pre>// &lt;link href="https://cdn.quilljs.com/1.0.5/quill.snow.css" rel="stylesheet"&gt;
	// &lt;script src="https://cdn.quilljs.com/1.0.5/quill.min.js" type="text/javascript"&gt;&lt;/script&gt;
	var quill = new Quill('#editor', {
	modules: {
		toolbar: '#toolbar'
	},
	theme: 'snow'
	});
	// Open your browser's developer console to try out the API!
											</pre>
                                                            <p><br></p>
                                                            <p><br></p>
                                                            <p class="ql-align-center"><strong>Built with</strong></p>
                                                            <p class="ql-align-center">&nbsp;<span class="ql-formula" data-value="x^2 + (y - \sqrt[3]{x^2})^2 = 1"></span>&nbsp;</p>
                                                            <p><br></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Snow Editor end -->


                <!-- Bubble Editor start -->
                <section class="quill-editor">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Bubble Editor</h4>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <p><code>Bubble</code> is a simple tooltip based theme. Try double clicking on text, you should see bubble
                                            with toolbars for editing.</p>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div id="bubble-wrapper">
                                                    <div id="bubble-container">
                                                        <div class="editor">
                                                            <h1 class="ql-align-center">Quill Rich Text Editor</h1>
                                                            <p><br></p>
                                                            <p>Quill is a free, <a href="https://github.com/quilljs/quill/">open source</a> WYSIWYG editor
                                                                built for the modern web. With its <a href="http://quilljs.com/docs/modules/">modular
                                                                    architecture</a> and expressive <a href="http://quilljs.com/docs/api/">API</a>, it is
                                                                completely customizable to fit any need.</p>
                                                            <p><br></p>
                                                            <iframe class="ql-video ql-align-center" src="https://www.youtube.com/embed/QHH3iSeDBLo?showinfo=0" width="560" height="238"></iframe>
                                                            <p><br></p>
                                                            <p><br></p>
                                                            <h2 class="ql-align-center">Getting Started is Easy</h2>
                                                            <p><br></p>
                                                            <pre class="language-javascript">
<code class="language-javascript">
    // &lt;link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet"&gt;
    // &lt;script src="https://cdn.quilljs.com/1.3.6/quill.min.js" type="text/javascript"&gt;&lt;/script&gt;
    var quill = new Quill('#editor', {
    modules: {
      toolbar: '#toolbar'
    },
    theme: 'snow'
    });
    // Open your browser's developer console to try out the API!

</code>
                      </pre>
                                                            <p><br></p>
                                                            <p><br></p>
                                                            <p class="ql-align-center"><strong>Built with</strong></p>
                                                            <p class="ql-align-center">&nbsp;<span class="ql-formula" data-value="x^2 + (y - \sqrt[3]{x^2})^2 = 1"></span>&nbsp;</p>
                                                            <p><br></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Bubble Editor end -->

                <!-- full Editor start -->
                <section class="full-editor">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Full Editor</h4>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <p>By default all formats are enabled and allowed to exist within a Quill editor and can be configured with
                                            the <code>formats</code> option. This is separate from adding a control in the <code>Toolbar</code>. For
                                            example, you can configure Quill to allow bolded content to be pasted into an editor that has no bold
                                            button in the toolbar.</p>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div id="full-wrapper">
                                                    <div id="full-container">
                                                        <div class="editor">
                                                            <h1 class="ql-align-center">Quill Rich Text Editor</h1>
                                                            <p><br></p>
                                                            <p>Quill is a free, <a href="https://github.com/quilljs/quill/">open source</a> WYSIWYG editor
                                                                built for the modern web. With its <a href="http://quilljs.com/docs/modules/">modular
                                                                    architecture</a> and expressive <a href="http://quilljs.com/docs/api/">API</a>, it is
                                                                completely customizable to fit any need.</p>
                                                            <p><br></p>
                                                            <iframe class="ql-video ql-align-center" src="https://www.youtube.com/embed/QHH3iSeDBLo?showinfo=0" width="560" height="238"></iframe>
                                                            <p><br></p>
                                                            <p><br></p>
                                                            <h2 class="ql-align-center">Getting Started is Easy</h2>
                                                            <p><br></p>
                                                            <pre>// &lt;link href="https://cdn.quilljs.com/1.0.5/quill.snow.css" rel="stylesheet"&gt;
	// &lt;script src="https://cdn.quilljs.com/1.0.5/quill.min.js" type="text/javascript"&gt;&lt;/script&gt;
	var quill = new Quill('#editor', {
	modules: {
		toolbar: '#toolbar'
	},
	theme: 'snow'
	});
	// Open your browser's developer console to try out the API!
											</pre>
                                                            <p><br></p>
                                                            <p><br></p>
                                                            <p class="ql-align-center"><strong>Built with</strong></p>
                                                            <p class="ql-align-center">&nbsp;<span class="ql-formula" data-value="x^2 + (y - \sqrt[3]{x^2})^2 = 1"></span>&nbsp;</p>
                                                            <p><br></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- full Editor end -->

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
    <script src="<?php echo $vendors ?>js/extensions/jquery.steps.min.js"></script>
    <script src="<?php echo $vendors ?>js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="layout/js/core/app-menu.js"></script>
    <script src="layout/js/core/app.js"></script>
    <script src="layout/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="layout/js/scripts/editors/editor-quill.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>