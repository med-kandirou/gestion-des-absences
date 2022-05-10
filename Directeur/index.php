<?php 
require_once "../includes/config.inc.php";
if(!isset($_SESSION['mat'])){
    header('location:../index.php');
    exit();
}
else
{
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Gestion d'absence</title>
    <link rel = "icon" href="../assets/img/ofppt_logo.png" type = "image/x-icon">
    
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/style.css">
</head>

<style>
    #centenu{
        height: 100%;
    }
</style>
<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div><img src="../assets/img/ofppt_logo.png" height="50px" width="50px"></div>
                    <div class="sidebar-brand-text mx-3"><span>OFPPT</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="#" id="acceuil-menu" ><i class="fas fa-tachometer-alt"></i><span>Accueil</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#" id="sg-menu" ><i class="fas fa-table"></i><span>surveillance générale </span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"  id="stgr-menu" ><i class="fas fa-user-circle"></i><span>Stagiaire</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"></div>
                        </form>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                           
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small"><?php echo $_SESSION['nom'].' '.$_SESSION['prenom']; ?> <i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i></span></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                                       <a class="dropdown-item" href="../log_out.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Déconnecter</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <section id="centenu">
            <div id="acceuil" >
                    <?php require_once "acceuil.php";?>
            </div> 
            <div id="container-stgr" class="d-none">
                    <?php require_once "consultation-stgr.php";?>
                </div>
            <div id="container-sg" class="d-none">
                    <?php require_once "surveillance.php";?>
            </div> 

                
            </section>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Group TDI201 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
  
</body>
<script src="../assets/js/jquery-3.4.1.min.js"></script>

    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/theme.js"></script>
    <script src="../assets/bootstrap/js/main.js"></script>
</html>
<?php } ?>