<?php
require 'function.php';
$buku = query("SELECT * FROM db_buku");

if (isset($_POST['cari'])) {
    $buku = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Creative - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">Library</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.php">Book</a></li>
                    <li class="nav-item"><a class="nav-link" href="portfolio.php">Library Member</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container justify-content-center">
            <div class="text-center mt-5">
                <h2 class="section-heading text-uppercase mb-5">iKON Library</h2>
            </div>

            <div class="row">
                <div class="col px-3">
                    <form method="POST" action="">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <h2 class="form-title"><strong>Book Category</strong></h2>
                                    <p>Pilih buku Anda disini dan Selamat Membaca ~</p>
                                </div>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <input type="text" id="keyword" name="keyword" class="form-control input-text"
                                            placeholder="Cari Judul Buku ..." autocomplete="off"><span
                                            class="input-group-addon">
                                            <input type="submit" class="btn btn-dark" name="cari"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <table class="table table-striped text-center mt-5">
                <thead>
                    <hr>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Buku</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Pengarang</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">Gambar Buku</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>

                <?php if (empty($buku)) : ?>
                <tr>
                    <td colspan="4" class="alert alert-danger text-center" role="alert">
                        <p>Data Buku Tidak Ditemukan</p>
                    </td>
                </tr>
                <?php endif; ?>

                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($buku as $bukuu) : ?>
                    <tr>
                        <th scope="row"><?php echo $no; ?></th>
                        <td><?php echo $bukuu['id_buku']; ?></td>
                        <td><?php echo $bukuu['judul_buku']; ?></td>
                        <td><?php echo $bukuu['pengarang']; ?></td>
                        <td><?php echo $bukuu['penerbit']; ?></td>
                        <td><?php echo $bukuu['tahun_terbit']; ?></td>
                        <td><img src="buku/<?php echo $bukuu['gambar_buku']; ?>" width="70px"></td>
                        <td><a href="detail_perpus.php?id=<?= $bukuu['id']; ?>" class="btn btn-secondary"
                                role="button">Detail</a></td>
                    </tr>
                    <?php $no++ ?>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy; 2022 - Anisa Nurul Istiqomah</div>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>