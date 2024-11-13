<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
<title>{{$title}} | Soccer Verse Admin</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Mooli Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
<meta name="author" content="GetBootstrap, design by: puffintheme.com">

<link rel="icon" href="/images/fav.png" type="image/png">

<!-- VENDOR CSS -->
<link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="/assets/vendor/animate-css/vivify.min.css">

<link rel="stylesheet" href="/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
<link rel="stylesheet" href="/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
<link rel="stylesheet" href="/assets/vendor/sweetalert/sweetalert.css"/>

{{-- JQuery Cdn --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- MAIN CSS -->
<link rel="stylesheet" href="/assets/css/mooli.min.css">

{{-- Components CSS --}}
<link rel="stylesheet" href="/css/components/button.css">

{{-- Lib Toast Message --}}
<link rel="stylesheet" href="/libraries/messages/messages.css">

{{-- Fontawesome CDN --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    td.details-control {
        background: url('assets/images/details_open.png') no-repeat center center;
        cursor: pointer;
    }
    tr.shown td.details-control {
        background: url('assets/images/details_close.png') no-repeat center center;
    }
    ::-webkit-scrollbar {
        width: 0;
    }
</style>

{{-- Resize SVG Icon --}}
<link rel="stylesheet" href="/css/icons/resize.css">


</head>
<body>

<div id="body" class="theme-cyan">
    {{-- Toast DIV ID --}}
    <div id="toast"></div>
    
    {{-- JS Toast Message --}}
    <script src="/libraries/messages/messages.js"></script>

    {{-- API Service --}}
    <script src="/js/services/apiService.js"></script>

    <!-- Page Loader -->
    {{-- <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="/assets/images/icon.svg" width="40" height="40" alt="Mooli"></div>
            <p>Please wait...</p>
        </div>
    </div> --}}

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <div id="wrapper">

        <!-- Page top navbar -->
        @include('partials.header')
        <!-- Main left sidebar menu -->
        @include('partials.left-sidebar')
        <!-- Right bar chat  -->
        @include('partials.rightbar')
        <!-- Stiky note div  -->
        @include('partials.sticky-note')
        <!-- Main body part  -->
        <div id="main-content">
            <div class="container-fluid">
                <div class="block-header">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <h1>Hi, Welcome to Soccer Verse!</h1>
                            <span>The Soccer Verse Data Management</span>
                        </div>
                    </div>
                </div>

                @yield('content')
            </div>
        </div>

    </div>
</div>


<!-- Javascript -->
<script src="/assets/bundles/libscripts.bundle.js"></script>
<script src="/assets/bundles/vendorscripts.bundle.js"></script>
{{-- UI Modal --}}
<script src="https://embed.tawk.to/_s/v4/app/64d21bf31fc/js/twk-main.js" charset="UTF-8" crossorigin="*"></script>
<script src="https://embed.tawk.to/_s/v4/app/64d21bf31fc/js/twk-vendor.js" charset="UTF-8" crossorigin="*"></script>
<script src="https://embed.tawk.to/_s/v4/app/64d21bf31fc/js/twk-chunk-vendors.js" charset="UTF-8" crossorigin="*"></script>
<script src="https://embed.tawk.to/_s/v4/app/64d21bf31fc/js/twk-chunk-common.js" charset="UTF-8" crossorigin="*"></script>
<script src="https://embed.tawk.to/_s/v4/app/64d21bf31fc/js/twk-runtime.js" charset="UTF-8" crossorigin="*"></script>
<script src="https://embed.tawk.to/_s/v4/app/64d21bf31fc/js/twk-app.js" charset="UTF-8" crossorigin="*"></script>
<script async="" src="https://embed.tawk.to/5e44175da89cda5a188591ec/1e0t1qduj" charset="UTF-8" crossorigin="*"></script>

<!-- Vedor js file and create bundle with grunt  -->

<script src="/assets/bundles/datatablescripts.bundle.js"></script>
<script src="/assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="/assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="/assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="/assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="/assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>
<script src="/assets/vendor/sweetalert/sweetalert.min.js"></script><!-- SweetAlert Plugin Js -->
{{-- UI Modal --}}
<script src="/assets/vendor/dropify/js/dropify.js"></script>
<script src="/assets/vendor/jquery-steps/jquery.steps.js"></script>


<!-- Project core js file minify with grunt -->
<script src="/assets/bundles/mainscripts.bundle.js"></script>

<script src="/js/jquery-data-table.js"></script>

<script>
    $(function() {
        $('.dropify').dropify();

        var drEvent = $('#dropify-event').dropify();
        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });
    });
</script>

<script>
    $(function () {
    //Horizontal form basic
    $('#wizard_horizontal_icon').steps({
        headerTag: 'h2',
        bodyTag: 'section',
        transitionEffect: 'slideLeft',
        onInit: function (event, currentIndex) {
            setButtonWavesEffect(event);
        },
        onStepChanged: function (event, currentIndex, priorIndex) {
            setButtonWavesEffect(event);
        }
    });
    
    //Horizontal form basic
    $('#wizard_horizontal').steps({
        headerTag: 'h2',
        bodyTag: 'section',
        transitionEffect: 'slideLeft',
        onInit: function (event, currentIndex) {
            setButtonWavesEffect(event);
        },
        onStepChanged: function (event, currentIndex, priorIndex) {
            setButtonWavesEffect(event);
        }
    });

    //Vertical form basic
    $('#wizard_vertical').steps({
        headerTag: 'h2',
        bodyTag: 'section',
        transitionEffect: 'slideLeft',
        stepsOrientation: 'vertical',
        onInit: function (event, currentIndex) {
            setButtonWavesEffect(event);
        },
        onStepChanged: function (event, currentIndex, priorIndex) {
            setButtonWavesEffect(event);
        }
    });

    //Advanced form with validation
    var form = $('#wizard_with_validation').show();
        form.steps({
        headerTag: 'h3',
        bodyTag: 'fieldset',
        transitionEffect: 'slideLeft',        
        onStepChanging: function (event, currentIndex, newIndex) {
            if (currentIndex > newIndex) { return true; }

            if (currentIndex < newIndex) {
                form.find('.body:eq(' + newIndex + ') label.error').remove();
                form.find('.body:eq(' + newIndex + ') .error').removeClass('error');
            }

            form.validate().settings.ignore = ':disabled,:hidden';
            return form.valid();
        },
        onStepChanged: function (event, currentIndex, priorIndex) {
            setButtonWavesEffect(event);
        },
        onFinishing: function (event, currentIndex) {
            form.validate().settings.ignore = ':disabled';
            return form.valid();
        },
        onFinished: function (event, currentIndex) {
            swal("Good job!", "Submitted!", "success");
        }
    });

    form.validate({
        highlight: function (input) {
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.form-group').append(error);
        },
        rules: {
            'confirm': {
                equalTo: '#password'
            }
        }
    });
});

function setButtonWavesEffect(event) {
    $(event.currentTarget).find('[role="menu"] li a').removeClass('');
    $(event.currentTarget).find('[role="menu"] li:not(.disabled) a').addClass('');
}
</script>
<script async="" charset="UTF-8" src="https://embed.tawk.to/_s/v4/app/64d21bf31fc/languages/en.js"></script>

</body>
</html>
