<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Xeloro - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="plantilla/admin/vertical/assets/images/favicon.ico">

    <!-- App css -->
    <link href="plantilla/admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <div class="header-border"></div>
        
        <?php
        include("include/menu.php")
        ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center mt-4">
                                <h4>Preguntas Frecuentes</h4>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->


                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mb-3 font-weight-bold text-uppercase">General</h5>
                                    <div id="accordion">
                                        <div class="card mb-1">
                                            <div class="card-header bg-white border-bottom-0 p-3" id="headingOne">
                                                <h5 class="m-0 font-size-16">
                                                    <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne" class="text-dark">
                                                        1. ¿Donde estamos y quienes somos?
                                                    </a>
                                                </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show"
                                                    aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body text-muted pt-1">
                                                    Estamos ubicados en la ciudad de huanta, en el jiron Gervasio santillana
                                                    y para que nos conoscas te invitamos a acercarte a nuestro local.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-1">
                                            <div class="card-header bg-white border-bottom-0 p-3" id="headingTwo">
                                                <h5 class="m-0 font-size-16">
                                                    <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        2. ¿Que vendemos?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                <div class="card-body text-muted pt-1">
                                                    Somos una empresa que vende celulares de la marca Redmi,
                                                    aqui encontraraas celulares de gama alta y al mejor precio.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-1">
                                            <div class="card-header bg-white border-bottom-0 p-3" id="headingThree">
                                                <h5 class="m-0 font-size-16">
                                                    <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        3. ¿Hacen envios?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                <div class="card-body text-muted pt-1">
                                                ¡Sí, hacemos envíos! Nos encargamos de llevar nuestros productos hasta la 
                                                puerta de tu hogar o cualquier dirección que nos indiques. Solo necesitamos 
                                                que nos proporciones la información necesaria y te enviaremos tu pedido con rapidez y seguridad.".
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mb-3 font-weight-bold text-uppercase">Pagos y Soporte</h5>
                                    <div id="accordion2">
                                        <div class="card mb-1">
                                            <div class="card-header bg-white border-bottom-0 p-3" id="headingFour">
                                                <h5 class="m-0 font-size-16">
                                                    <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        1. Planes disponibles
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion2">
                                                <div class="card-body text-muted pt-1">
                                                Tenemos una variedad de planes disponibles para adaptarnos a tus necesidades.
                                                 Desde opciones básicas hasta planes premium con beneficios exclusivos, estamos 
                                                 seguros de que encontrarás el plan perfecto para ti. ¿Te gustaría conocer más 
                                                 detalles sobre nuestros planes y sus características específicas?".
                                            </div>
                                        </div>
                                        <div class="card mb-1">
                                            <div class="card-header bg-white border-bottom-0 p-3" role="tab" id="headingFive">
                                                <h5 class="m-0 font-size-16">
                                                    <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                        2. Ayuda sobre la configuracion
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion2">
                                                <div class="card-body text-muted pt-1">
                                                    AEstamos aquí para ayudarte con la configuración de nuestros productos o 
                                                    servicios. Ya sea que necesites asistencia para instalar una aplicación, 
                                                    configurar un dispositivo o ajustar cualquier ajuste, nuestro equipo de 
                                                    soporte técnico está listo para ayudarte en cada paso del proceso. No dudes
                                                     en contactarnos si necesitas ayuda o tienes alguna pregunta sobre la configuración.".
                                            </div>
                                        </div>
                                        <div class="card mb-0">
                                            <div class="card-header bg-white border-bottom-0 p-3" role="tab" id="headingSix">
                                                <h5 class="m-0 font-size-16">
                                                    <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                        3. Premium para estudiantes
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion2">
                                                <div class="card-body text-muted pt-1">
                                                Ofrecemos un plan premium especialmente diseñado para estudiantes como tú. 
                                                Con este plan, puedes disfrutar de todos los beneficios de nuestra suscripción 
                                                premium a un precio especial para estudiantes. Esto incluye acceso ilimitado a 
                                                contenido exclusivo, funciones premium y soporte prioritario. Solo necesitas 
                                                verificar tu estado de estudiante para aprovechar esta oferta especial.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                        </div> <!-- end col -->
    
                    </div>

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?php
            include("include/pie_pagina.php")
            ?>

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    <div class="menu-overlay"></div>


    <!-- jQuery  -->
    <script src="plantilla/admin/vertical/assets/js/jquery.min.js"></script>
    <script src="plantilla/admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
    <script src="plantilla/admin/vertical/assets/js/metismenu.min.js"></script>
    <script src="plantilla/admin/vertical/assets/js/waves.js"></script>
    <script src="plantilla/admin/vertical/assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="plantilla/admin/vertical/assets/js/theme.js"></script>

</body>

</html>