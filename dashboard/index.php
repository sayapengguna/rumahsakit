<?php require_once('../_header.php'); ?>

    <div class="row">
        <div class="col-lg-12">
            <h1>Dashboard</h1>
            <p>Selamat Datang <mark><?=$_SESSION['user']?></mark> di website</p>
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
        </div>
    </div>

<?php require_once('../_footer.php'); ?>