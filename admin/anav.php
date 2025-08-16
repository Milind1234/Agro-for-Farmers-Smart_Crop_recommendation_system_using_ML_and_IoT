<nav
  id="navbar-main"
  class="
    navbar navbar-main navbar-expand-lg
    navbar-light
    position-sticky
    top-0
    shadow
    py-0
  "
  style="background-color: #2D6A4F;"  <!-- Inline style to set the background color -->
>
  <div class="container-fluid">
    <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
      <li class="nav-item dropdown">
        <a href="../index.php" class="navbar-brand mr-lg-5 text-white">
          <!-- You can add a logo image or text here if needed -->
        </a>
      </li>
    </ul>

    <button
      class="navbar-toggler bg-white"
      type="button"
      data-toggle="collapse"
      data-target="#navbar_global"
      aria-controls="navbar_global"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon text-white"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbar_global">
      <div class="navbar-collapse-header">
        <div class="row">
          <div class="col-10 collapse-brand">
            <a href="../index.html">
              <img src="../assets/img/nav.png" />
            </a>
          </div>
          <div class="col-2 collapse-close bg-danger">
            <button
              type="button"
              class="navbar-toggler"
              data-toggle="collapse"
              data-target="#navbar_global"
              aria-controls="navbar_global"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>

      <ul class="navbar-nav align-items-lg-center ml-auto topnav">
        <li class="nav-item">
          <a href="afarmers.php" class="nav-link">
            <span class="text-white nav-link-inner--text font-weight-bold"
              ><i class="text-white fas fa-users"></i> Farmers</span
            >
          </a>
        </li>

        <li class="nav-item">
          <a href="aprofile.php" class="nav-link">
            <span class="text-white nav-link-inner--text font-weight-bold"
              ><i class="text-white fas fa-user"></i> <?php echo $para2 ?> </span
            >
          </a>
        </li>

        <li class="nav-item">
          <a href="alogout.php" class="nav-link">
            <span class="text-white nav-link-inner--text font-weight-bold"
              ><i class="text-danger fas fa-power-off"></i> Logout </span
            >
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Custom CSS to ensure other navbar components inherit the right color -->
<style>
.topnav a {
  border-bottom: 3px solid transparent;
}

.topnav a:hover {
  border-bottom: 3px solid red;
}

.topnav a.activaa {
  border-bottom: 3px solid red;
}

.navbar-brand img {
  width: 300px;
  height: 100%;
  max-width: 100%;
  margin: 0 auto;
}
</style>
  
<script>
  $("#nav li a").each(function() {
    if (this.href == window.location.href) {
      $(this).addClass("activaa");
    }
  });
</script>
  
<script src="https://cdn.staticfile.org/jquery/3.6.3/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
  crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/ee1c3da296.js"></script>
