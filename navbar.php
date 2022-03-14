<?php
    $active = (isset($_GET["content"]))? $_GET["content"]: "";
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php?content=home">Hokage 2.0</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php echo (in_array($active, ["home", ""]))? "active": "" ?>" href="./index.php?content=home">home</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link <?php echo ($active == "prev-hokages")? "active": "" ?>" href="./index.php?content=prev-hokages">previous hokages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($active == "become-hokage")? "active": "" ?>" href="./index.php?content=become-hokage">become a hokage</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?php echo (in_array($active, ["history", "complaint", "contact"]))? "active": "" ?>" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            more information
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item <?php echo ($active == "history")? "active": "" ?>" href="./index.php?content=history">history</a></li>
            <li><a class="dropdown-item <?php echo ($active == "complaint")? "active": "" ?> ?>" href="./index.php?content=complaint">complaint</a></li>
            <li><a class="dropdown-item <?php echo ($active == "contact")? "active": "" ?> ?>" href="./index.php?content=contact">contact</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>