<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

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
    <meta http-equiv="Content-type" value="text/html; charset=UTF-8" />
    <title>Gestion Absence</title>
    <link rel = "icon" href="../assets/img/ofppt_logo.png" type = "image/x-icon">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/discipline.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/index.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/consulterAbsence.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon"><img src="../assets/img/ofppt_logo.png" alt="" id="logoImg"></div>
                    <div class="sidebar-brand-text mx-3"><span>OFPPT</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item">
                        <a class="nav-link active" id="acceuilSection">
                        <i class="fas fa-home"></i>
                        <span>accueil</span>
                    </a>
                </li>
                    <li class="nav-item dropdown no-arrow">
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                                <i class="fas fa-user-circle"></i> 
                                <span  id="stagaire" name="stagaire"> stagaire </span>
                               
                            </a>
                                 <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                                        <a class="dropdown-item" id="stagiaireSection" >
                                                <i class="fas fa-table" ></i>
                                                <span>Stagiaire</span>
                                            </a>
                                                           
                                           <a class="dropdown-item" id="DiscSection">
                                                <i class="fas fa-user"></i>                           
                                                <span >Discipline</span>
                                            </a>
                                 </div>
                             </div>
                    </li>  
                    <li class="nav-item">
                        <a class="nav-link" id="impExp">
                            <i class="fas fa-arrows-alt-v"></i>
                            <span>import/export</span>
                        </a>
                    </li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <div id="pageTitle" name="pageTitle" >page title</div>
                        <ul class="navbar-nav flex-nowrap ms-auto">       
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow">
                                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"
                                    >
                                    <span class="d-none d-lg-inline me-2 text-gray-600 small" id="username" name="username"><?php echo $_SESSION['nom'].' '.$_SESSION['prenom']; ?> </span>
                                    <i class="fas fa-user"></i></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                                        <a class="dropdown-item" href="../log_out.php"href="#" id="logout" name="logout">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Déconnecter</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>                   
                </nav> 
            </div>
            <section id="sectionSec">
                 <!-- acceuil -->
                <div id="acceuil">
                    <?php require_once "acceuil.php";?>
                </div>
                <!-- consultation d'absence -->
                <div id="aa" style="display: none;">
                    <?php require_once "consulterAbsence.php";?>
                </div>
                <!-- page discipline -->
                <div id="bb" style="display: none;">
                    <?php require_once "discipline.php";?>
                </div>
                <!-- page Impo/Expo -->
                <div id="ie" style="display: none;">
                    <?php require_once "importExport.php";?>
                </div>
            </section>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright TDI201 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="../assets/js/jquery-3.4.1.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/discipline.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/theme.js"></script>
   
</body>
</html>
<?php } ?>