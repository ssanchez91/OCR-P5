<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Mirko Venturi - Dashboard</title>

  <!--Tiny Cloud API-->
  <script src="https://cdn.tiny.cloud/1/1nlzxk3pygg7o4durv60r55qvyx1x0q0xkvfsk10rwxnumu1/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>

  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="/OCR-P5/Public/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/OCR-P5/Public/assets/css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-fixed-top" id="mainNav" style="background-color:#000;">
    <div class="container">
      <a class="navbar-brand" href="#page-top" style="font-family: 'Vladimir Script'; font-size: 1.6em;">Blog de Mirko Venturi</a>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      </div>
    </div>
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="mr-2 d-none d-lg-inline text-white middle">Bonjour, <?= $_SESSION['user']['username']; ?></span>
      <img class="img-profile rounded-circle img-thumbnail" src="/OCR-P5/Public/img/user/<?= $_SESSION['user']['imageUrl']; ?>" width="30px" height="auto">
    </a>
  </nav>

  <!-- Page Wrapper -->
  <div id="wrapper">

  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary align-items-bottom sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/OCR-P5/admin/index">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Vue rapide</div>
    </a>
      <li class="nav-item active">
        <a class="nav-link" href="/OCR-P5/admin/index">
          <i class="fas fa-fw fa-tachometer-alt"></i><span>Dashboard</span>
        </a>
      </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">Interface</div>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <a class="btn rounded-circle border-0 py-2 my-2" id="sidebarToggle" href="/OCR-P5/admin/index"></a>
  </div>
    <a class="btn btn-md btn-warning mx-2 my-2 px-2 text-lowercase text-center" href="/OCR-P5/post/add">
      <i class="fas fa-plus px-1"></i><span>Ajouter un post</span></a>
    <a class="btn btn-md btn-danger mx-2 px-2 text-lowercase text-center" href="/OCR-P5/user/logout">
      <i class="fas fa-sign-out-alt px-1"></i><span>Déconnexion</span></a>
  </ul>
  <!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </nav>
  <!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Content Row -->
  <div class="row-fluid">
    <div class="col d-flex justify-content-center" style="margin-top: 50px;">
      <div class="col-lg-8">
        <div class="card shadow mb-4">
          <div class="card-header py-3 bg-dark">
            <h6 class="m-0 font-weight-bold text-white">Modifier les données utilisateur</h6>
          </div>
    <!-- Card Start -->      
    <div class="card-body block-center">
      <form action="/OCR-P5/user/update" method="post">
        <input type="hidden" class="form-control" name="id" id="id" value="<?= isset($user) ? htmlspecialchars($user['id']) : ''; ?>">
          <div class="form-group">
            <label for="pseudo">Pseudo :</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Insérer votre pseudo" value="<?= isset($user) ? htmlspecialchars($user['username']) : ''; ?>">
          </div>
          <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Insérer email" value="<?= isset($user) ? htmlspecialchars($user['email']) : ''; ?>">
          </div>
          <div class="form-group">
            <label for="date">Role :</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="role" id="role1" value="1" <?php if ($user['role'] == 1) { echo 'checked'; }; ?> >
                <label class="form-check-label" for="role">
                  Inscrit
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="role" id="role2" value="2" <?php if ($user['role'] == 2) { echo 'checked'; }; ?> >
                <label class="form-check-label" for="role">
                  Administrateur
                </label>
              </div>
          </div>
          <div class="form-group">
            <label for="text">New password :</label>
              <input type="password" class="form-control" name="password" id="password" value="">
          </div>
            <label for="image">Téléverser une image :</label>
              <input type="file" name="imageUrl" id="fileToUpload" value="<?= isset($user) ? htmlspecialchars($user['imageUrl']) : ''; ?>">
            <div class="text-center">
              <input type="submit" name="submit" class="btn btn-primary" value="mettre à jour">
            </div>
      </form>
          </div>
    <!--End of the card-->
          </div>
        </div>
      </div>               
    </div>
  </div>
      
  <!-- Footer -->
  <footer class="sticky-footer">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy;MIRKO VENTURI 2020</span>
      </div>
    </div>
  </footer>
  <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="OCR-P5/Public/assets/vendor/jquery/jquery.min.js"></script>
  <script src="OCR-P5/Public/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="OCR-P5/Public/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="OCR-P5/Public/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="OCR-P5/Public/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="OCR-P5/Public/js/demo/chart-area-demo.js"></script>
  <script src="OCR-P5/Public/js/demo/chart-pie-demo.js"></script>

</body>

</html>