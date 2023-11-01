<style>
  #hover
  {
    background-color:black;
    transition:0.5s;
  }
  #hover:hover
  {
    background-color: rgb(1, 18, 74);
  }
</style>
<nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color:black;">
  <ul class="nav">
    <li class="nav-item nav-profile" id="hover">
      <a href="#" class="nav-link">
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2 text-white"><?php echo $_SESSION['User_Name']?></span>
          <span class="text-secondary text-small text-white">Project Manager</span>
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li>
    <li class="nav-item" id="hover">
      <a class="nav-link" href="index.php">
        <span class="menu-title text-white">Dashboard</span>
        <i class="mdi mdi-home menu-icon text-white"></i>
      </a>
    </li>

  <li class="nav-item" style="background-color:black;">
      <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
        <span class="menu-title">Products</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-medical-bag menu-icon"></i>
      </a>
      <div class="collapse" id="general-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="product.php"> Products Display</a></li>
          <li class="nav-item"> <a class="nav-link" href="product_approve.php"> Approve Products </a></li>
          <li class="nav-item"> <a class="nav-link" href="product_disapprove.php"> Disapprove Products </a></li>
        </ul>
      </div>
    
</nav>