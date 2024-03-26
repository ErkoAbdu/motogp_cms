<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none link-body-emphasis text-decoration-none pb-2">
        <span class="fs-4 justify-content-center">MotoGP Grid 2024</span>
      </a>
        <!-- NAV LINKS FOR HOME AND ADDING A NEW RIDER -->
        <ul class="nav nav-pills justify-content-center">
          <li class="nav-item">
            <a class="nav-link" href="home.php" aria-current="page">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="newRider.php">Add New Rider</a>
          </li>
        <!-- DROP DOWN FOR MANUFACTURER -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Manufacturers
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="newManufacturer.php">Add New Manufacturer</a></li>
            <li><a class="dropdown-item" href="manufacturerList.php">Manufacturers List</a></li>
          </ul>
        </li>
        <!-- DROP DOWN FOR RIDER NATIONALITY -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Rider Nationalities
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="it.php">Italian Riders</a></li>
            <li><a class="dropdown-item" href="sp.php">Spanish Riders</a></li>
            <li><a class="dropdown-item" href="fra.php">French Riders</a></li>
            <li><a class="dropdown-item" href="aus.php">Australian Riders</a></li>
            <li><a class="dropdown-item" href="sa.php">South African Riders</a></li>
            <li><a class="dropdown-item" href="por.php">Portuguese Riders</a></li>
            <li><a class="dropdown-item" href="jap.php">Japanese Riders</a></li>
          </ul>
          <!-- CREATE USER -->
          <li class="nav-item">
            <a class="nav-link" href="users.php" aria-current="page">Create User</a>
          </li>
          <!-- LOGOUT: If the session id does not match then it will not display the logout button -->
          <?php
          if(isset($_SESSION['id'])){
          echo <<<EOT
              <li class="nav-item">
                <a class="nav-link" href="includes/logout.php" aria-current="page">Logout</a>
              </li>
            EOT;
          }
          ?>
          
        </li>
        </ul>
      </header>
</div>