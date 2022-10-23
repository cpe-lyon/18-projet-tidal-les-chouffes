
<!-- Topbar Navbar -->
<nav class="navbar navbar-expand-lg bg-light topbar mb-4 static-top shadow">


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

                    <li>
                        <?php if (isset($_SESSION['auth']) and ($_SESSION['auth']==true)) { ?>
                            <a class="dropdown-item" href="/myaccount">Action
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Mon Profile
                            </a>
                        <?php } ?>  
                    </li>
                        
                    <li><hr class="dropdown-divider"></li>

                    <li>
                        <?php if (isset($_SESSION['auth'])): ?>
                            <a class="dropdown-item" href="#logoutModal" data-toggle="modal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>  
                                Se deconnecter
                            </a>
                        <?php endif ?>
                    </li>

                </ul>
                </li>

                <li>
                    <a href="/logout" >
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"> Se deconnecter </span>
                    </a>
                </li>


                
                
            </ul>
            
            </div>
        </div>


        <!-- logout Modal HTML -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">  Avertissement </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <p> Voulez-vous vraiment vous deconnecter ? </p>
                    </div>
            
                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Annuler </button>
                        
                        <a href="/logout" >
                            <button type="button" class="btn btn-secondary"> Vraiment </button>
                        </a>
                                  
                    </div>

                </div>
            </div>
        </div>


</nav>

<!-- End of Topbar -->

