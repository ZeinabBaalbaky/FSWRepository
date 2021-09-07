<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>Home</title>
    <!-- Bootstrap core CSS-->

    <link href="AdminStyle/vendor/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <!-- Custom fonts for this template-->
    <link href="AdminStyle/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="AdminStyle/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="AdminStyle/css/sb-admin.css" rel="stylesheet">
</head>
<style>
.bg-dark {
    background-color: white !important;
	border:1px solid #0062cc;
}
.sidebar{
 background-color:#3c8dbc !important;
}
.nav-inner{
    color: #0062cc !important;


</style>
<body id="page-top">
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top" >
        <a class="navbar-brand mr-1" style="color:blue;" href="../Admin/Dashboard">My Shop</a>
        <button class="btn btn-link btn-sm  order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>
        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">

            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle nav-inner" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
				  <?php
				    session_start();
                     if(isset($_SESSION['id'])){
				         $name = $_SESSION['name'];
              echo '
					 <a class="dropdown-item" href="#">'.$name.'</a>' ;}?>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="../Admin/Dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="HomeStore.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Products</span>
                </a>
            </li>


          
           
        </ul>
        <div id="content-wrapper">
           
                <!-- Icon Cards-->

<?php 
	  include("products.php"); 
	  
?>



           
            <!-- /.container-fluid -->
            <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
					<strong>Copyright &copy;  <?php echo date("Y");?> <a href="#">  Z-Ecommerce</a></strong>
                      
                    </div>
                </div>
            </footer>
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="signin.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
   
  
</body>


</html>
 <!-- Bootstrap core JavaScript-->
<script src="AdminStyle/vendor/jquery/jquery.min.js"></script>
<script src="AdminStyle/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="AdminStyle/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Page level plugin JavaScript-->
<script src="AdminStyle/vendor/chart.js/Chart.min.js"></script>
<script src="AdminStyle/vendor/datatables/jquery.dataTables.js"></script>
<script src="AdminStyle/vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for all pages-->
<script src="AdminStyle/js/sb-admin.min.js"></script>
<!-- Demo scripts for this page-->
<script src="AdminStyle/js/demo/datatables-demo.js"></script>
<script src="AdminStyle/js/demo/chart-area-demo.js"></script>
