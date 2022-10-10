<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Topbar Search -->
    <div
        class="d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100">
        <div class="">
            <a href="#">
                <img src="<?= SCRIPTS . 'images' . DIRECTORY_SEPARATOR . 'logo.jpg' ?>" class="rounded-square img-fluid rounded logoSize" alt="Responsive logo app"/> <!-- logoSize -->
            </a>
        </div>
    </div>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small"
                            placeholder="Search for..." aria-label="Search"
                            aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>


        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                
                <?php if (isset($_SESSION['name'])):             
                    $name = $_SESSION['name'];
                ?>        
                <?php endif ?> 

                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?php echo''.$name; ?> </span>
                <img src="<?= SCRIPTS . 'images' . DIRECTORY_SEPARATOR . 'user-solid.svg' ?>" class="img-profile rounded-circle" alt="img-profile"/>
                
                <!-- <img class="img-profile rounded-circle"
                    src="img/user-solid.svg">  undraw_profile -->

            </a>
            <!-- Dropdown - User Information  -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">

                <?php if (isset($_SESSION['auth']) and ($_SESSION['auth']==0 || $_SESSION['auth']==2)) { ?>

                    <a class="dropdown-item" href="/myaccount">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Mon Profile
                    </a>

                <?php } elseif (isset($_SESSION['auth']) and $_SESSION['auth']==1) { ?> 
                
                    <a class="dropdown-item" href="/admin/myaccount">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Mon Profile
                    </a>

                <?php } ?>
                <!-- <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                </a> -->
                <div class="dropdown-divider"></div>

                <?php if (isset($_SESSION['auth'])): ?>

                    <a href="#logoutModal" class="dropdown-item" data-toggle="modal">
                    <!-- <a class="dropdown-item" href="/logout" >  data-toggle="modal" data-target="#logoutModal" -->
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        
                        Se deconnecter
                    
                    </a>
                <?php endif ?>

            </div>
        </li>

    </ul>



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