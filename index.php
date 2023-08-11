<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urban Riders</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,800"> 
</head>
<body>
<header class="header">
        <div class="container">
            <div class="header-logo"> 
                <a href="#" class="logo"><img src="docs/assets/images/logo1.png"></a> Urban Riders
            </div>
            <div class="fa fa-bars fa-2x menu-icon"></div>
            <div class="header-nav">
            <ul class="nav">
        <li class="nav-item"><a class="nav-link" href="index.php?p=dashboard">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?p=jasa">Product & Service</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?p=visi-misi">Visi Misi</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="experienceDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Share Experience
            </a>
            <div class="dropdown-menu" style="background-color: rgba(75, 75, 75, 0.7); padding: 10px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);" aria-labelledby="experienceDropdown">
                <a class="dropdown-item" href="index.php?p=artikel" style="background-color: rgba(75, 75, 75, 0.7);">Artikel</a>
            </div>
        </li>
        <li class="nav-item"><a class="nav-link" href="index.php?p=about">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?p=profile">Profile</a></li>
        <?php
                if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
                    echo '<li class="nav-item"><button class="nav-link btn btn-primary" onclick="window.location.href=\'\login.php\'">Login</button></li>';
                } else {
                    echo '<li class="nav-item"><button class="nav-link btn btn-primary" onclick="window.location.href=\'\logout.php\'">Log Out</button></li>';
                }
        ?>
        </ul>
</div>
</div>
</header>
<div id="content-container">
                    <?php
                    $pages_dir = 'hal';
                    if (!empty($_GET['p'])) {
                        $pages = scandir($pages_dir, 0);
                        unset($pages[0], $pages[1]);
                        $p = $_GET['p'];
                        if (in_array($p . '.php', $pages)) {
                            include($pages_dir . '/' . $p . '.php');
                        } else {
                            echo 'Halaman Tidak Ditemukan';
                        }
                    } else {
                        include($pages_dir . '/dashboard.php');
                    }
                    ?>
        </div>
    </body>
    <footer>
        <div class="content-footer">
            <div style="margin-top: 30px;">
                <h6>Content</h6>
                 <p><a href="index.php?p=jasa" class="a-content">Product and Service</a></p>
                 <p><a href="index.php?p=event" class="a-content">Event</a></p>
                 <p><a href="index.php?p=gallery" class="a-content">Gallery</a></p>
            </div>
            <div style="margin-top: 30px;">
                <h6>Company</h6>
                 <p><a href="index.php?p=about" class="a-content">About Us</a></p>
                 <p><a href="index.php?p=profile" class="a-content">Profile</a></p>
                 <p><a href="index.php?p=bisi-misi" class="a-content">Visi Misi</a></p>
                 <p><a href="index.php?p=client" class="a-content">Daftar Client</a></p>
                 <p><a href="index.php?p=artikel" class="a-content">Artikel</a></p>
            </div>
            <div style="margin-top: 30px;">
                <h6>Sosmed</h6>
                <div class="list-sosmed">
                <span><a href="#" class="btn facebook"><i class="fab fa-facebook fa-icon"></i></a></span>
                <span><a href="#" class="btn instagram"><i class="fab fa-instagram fa-icon"></i></a></span>
                <span><a href="#" class="btn twitter"><i class="fab fa-twitter fa-icon"></i></a></span>
                <span><a href="#" class="btn youtube"><i class="fab fa-youtube fa-icon"></i></a></span>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer-logo"><a href="#" class="logo"><img src="docs/assets/images/logo1.png" alt="WWalk Logo"></a> Urban Riders</div>
        </div>
    </footer>
</body>
</html>