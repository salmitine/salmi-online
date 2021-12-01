<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(images/logo_2.jpg);"></div>
	  				<h3> Salmitine</h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="index.php?p=home"><span class="fa fa-home mr-3"></span> Beranda</a>
          </li>
          <li class="active">
          <a href="index.php?p=tb-mahasiswa"><span class="fa fa-book mr-3"></span> Data Mahasiswa</a>
          </li>
           <li class="active">
          <a href="index.php?p=tb-mk"><span class="fa fa-bookmark mr-3"></span> Data Mata Kuliah</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">CRUD Mahasiswa</h2>
        <p>ini adalah web aplikasi CRUD untuk penjadwalan mahasiswa,terdapat beberapa menu yang ada disini seperti pada tabel di bawah ini.</p>

<?php
                $page_dir = 'pages';
                if(!empty ($_GET ['p'])) {
                    $page = scandir ($page_dir, 0);
                    unset($page[0], $page[1]);
                    $p = $_GET['p'];
                    if (in_array($p. '.php', $page)) {
                    include($page_dir . '/' . $p . '.php');
                    } else {
                    include($page_dir . '/error.php');
                    }
                }else{
                    include($page_dir . '/home.php');
                }
            ?>
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>