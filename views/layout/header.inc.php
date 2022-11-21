
<!-- Topbar Navbar -->
<nav class="navbar navbar-expand-lg bg-light topbar mb-4 static-top shadow">

        <?php if (isset($_SESSION['name'])):             
            $name = $_SESSION['name'];
        ?>        
        <?php endif ?> 
        <script type="text/javascript">
            var username = '<?php echo $name;?>';
        </script>
        <script type="text/javascript" src="../../public/js/header.js"></script>


        <!-- Logo -->
        <div class="d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100">
            <div class="">
                <a href="#">
                    <img src="<?= SCRIPTS . 'images' . DIRECTORY_SEPARATOR . 'logo.png' ?>" class="rounded-square img-fluid rounded logoSize" alt="Responsive logo app"/> <!-- logoSize -->
                </a>
            </div>
        </div>

        <div class="container-fluid">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <div class="topbar-divider d-none d-sm-block"></div>


                <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php if (isset($_SESSION['name'])):             
                            $name = $_SESSION['name'];
                        ?>        
                        <?php endif ?> 

                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?php echo''.$name; ?> </span>
                        <i class="fa-solid fa-user"></i>
                </a>

                <ul class="dropdown-menu">
                        
                    <li><hr class="dropdown-divider"></li>

                    <li>
                        <?php if (isset($_SESSION['auth']) and ($_SESSION['auth']==true) ): ?>

                            <!-- Button logout modal -->
                            <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Se deconnecter
                            </button>

                        <?php endif ?>
                    </li>

                </ul>
                </li>                
                
            </ul>
            
            </div>
        </div>



        <!-- logout Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> Avertissement </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                    <p> Voulez-vous vraiment vous deconnecter ? </p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Non </button>
                <a href="/logout" >
                    <button type="button" class="btn btn-primary"> Oui </button>
                </a>
            </div>
            </div>
        </div>
        </div>






</nav>

<!-- End of Topbar -->

