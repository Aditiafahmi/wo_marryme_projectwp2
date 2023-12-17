<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nikah Yukk! - MarryMe</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/img/favicon/apple-touch-icon.png');?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/img/favicon/favicon-32x32.png');?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/img/favicon/favicon-16x16.png');?>">
    <link rel="manifest" href="<?= base_url('assets/img/favicon/site.webmanifest'); ?>">

    <style>
        <?php
        include "assets/css/style.css";
        ?>
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="<?= base_url('vendor/owlcarousel/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href=" <?= base_url('vendor/owlcarousel/css/owl.theme.default.min.css'); ?>">

    <!-- Font-Awesome & Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
        integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">MarryMe</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-link mx-2" href="#home">Home</a>
                    <a class="nav-link mx-2" href="#about">About</a>
                    <a class="nav-link mx-2" href="#gallery">Gallery</a>
                    <a class="nav-link mx-2" href="blog/">Blog</a>
                    <a class="nav-link mx-2" href="#client">Client</a>
                    <a class="nav-link mx-2" href="#contact">Contact</a>
                </div>


                <a href="<?= base_url('login'); ?>" id="btn-hero" class="btn-hero">Login</a>

                <!-- Contoh tautan ke halaman registrasi -->


            </div>

        </div>
    </nav>

    <div id="home" class="background-banner">
        <div class="hero-text">
            <div class="text-center">
                <p class="text-p" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">&#x1F496;Temui kami
                    Untuk Menjadi Bagian Dari Rencana Besarmu</p>
                <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">Langkah cerdas untuk <br>
                    Merencanakan Hari Besarmu
                </h1>
                <p class="sub-text" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">Pengalaman
                    Pernikahan
                    Dengan Rencana Yang <br> - Menarik, Berkesan, dan Penuh Makna </p><br>
                <a href="#features" class="main-btn" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="900">Jelajahi Tentang Kami</a>
            </div>
        </div>
    </div>

    <section id="features" class="features py-5">
        <div class="container">
            <div class="heading-text text-center mb-5">
                <p class="text-p" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">&#129321; Mengapa
                    Pilih Kami
                </p>
                <h4 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">Layanan Yang Kami Sediakan</h4>
                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">Menyediakan Layanan
                    Website Wedding Organizer Yang Menarik, Responsif, dan Sangat Membantu</p>
            </div>
            <div class="row justify-content-center">
                <?php
                // Mendefinisikan variabel $no sebelum loop dimulai
                $no = 1;

                // Iterasi data features
                foreach ($features as $feature) {
                    ?>
                    <div class="features-item col-md-3 text-center" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="<?php echo $no * 50; ?>">
                        <i class="<?php echo $feature->features_icon; ?>"></i>
                        <h5>
                            <?php echo $feature->features_name; ?>
                        </h5>
                    </div>
                    <?php
                    // Menambahkan 1 pada nilai $no setiap iterasi
                    $no++;
                }
                ?>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <?php foreach ($about as $about_item): ?>
                <div class="about-content">
                    <div class="text-center mb-4">
                        <p class="text-p">&#128075; Siapakah Kami?</p>
                        <h4>
                            <?php echo $about_item->about_heading; ?>
                        </h4>
                    </div>
                    <div class="row justify-content-center text-center">
                        <div class="col">
                            <p>
                                <?php echo $about_item->about_text; ?>
                            </p>
                            <div class="main-btn mt-4">Ketahui Lebih Lanjut <i class="fa-solid fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </section>

    <section id="package" class="package py-5">
        <div class="container">
            <div class="heading-text text-center mb-4">
                <p class="text-p">&#128184; Paket Hebat Uang Hemat</p>
                <h4>Paket Terbaik dengan Harga Terbaik Untukmu, Tapi Bukan Untuk Kantongmu</h4>
            </div>
            <div class="row justify-content-center">
                <?php foreach ($packages as $package): ?>
                    <div class="package-item col-md-3">
                        <div class="head-package text-center">
                            <h4 class="text-uppercase mb-1">
                                <?php echo $package->packages_heading; ?>
                            </h4>
                            <p class="price fs-2 fw-semibold">
                                <?php echo $package->packages_price; ?>
                            </p>
                            <br>
                        </div>
                        <div class="body-package">
                            <?php echo $package->packages_list; ?>
                            <div class="text-center">
                                <a href="" class="second-btn">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <div class="paralax">
        <div class="container">
            <div class="quote-content text-center text-white">
                <p class="quote fst-italic">“Happiness is only real when shared”</p>
                <p>- Jon Krakauer</p>
            </div>
        </div>
    </div>

    <section id="gallery" class="gallery py-5">
        <div class="container">
            <div class="heading-text text-center mb-5">
                <p class="text-p">&#128247; Galeri Kami</p>
                <h4>Galeri</h4>
            </div>
            <div class="row" data-masonry='{"percentPosition": true }'>
                <?php foreach ($gallery as $item): ?>
                    <div class="gallery-item col-6 col-sm-6 col-lg-4">
                        <div class="gallery-text">
                            <h5>
                                <?php echo $item->gallery_heading; ?>
                            </h5>
                            <p>
                                <?php echo $item->gallery_desc; ?>
                            </p>
                        </div>
                        <img src="assets/img/gallery/<?php echo $item->gallery_image; ?>" alt="" class="img-fluid">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="blog" class="blog py-5">
        <div class="container">
            <div class="heading-text text-center mb-5">
                <p class="text-p">&#128221; Blog Post</p>
                <h4>Blog</h4>
            </div>
            <div class="row justify-content-center">
                <?php foreach ($blog as $post): ?>
                    <div class="blog-item col-md-3 card">
                        <img src="assets/img/blog/<?php echo $post->blog_image; ?>" class="card-img-top" alt="Blog Image">
                        <div class="card-body">
                            <div class="author">
                                <p><span>
                                        <?php echo date('M d Y', strtotime($post->blog_date)); ?>
                                    </span> MarryMe Team</p>
                            </div>
                            <h5 class="card-title">
                                <?php echo $post->blog_heading; ?>
                            </h5>
                            <p class="card-text">
                                <?php echo substr($post->blog_text, 0, 150); ?>...
                            </p>
                            <a href="blog/page.php?id=<?php echo $post->id; ?>" class="second-btn">Read More</a>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>

    <section id="client" class="client">
        <div class="container">
            <div class="heading-text text-center">
                <p class="text-p">&#128221; Klien</p>
                <h4>Apa Kata Klien Kami?</h4>
            </div>
            <div class="custom-nav owl-nav"></div>
            <div id="owl-carousel" class="owl-carousel owl-theme client-carousel col-md-5 text-center">
                <?php foreach ($testimonials as $testimonial): ?>
                    <div class="item client-item">
                        <img src="assets/img/testimonial/<?php echo $testimonial->testi_image; ?>" alt=""
                            class="rounded-circle mb-3">
                        <blockquote class="blockquote mb-0">
                            <p>
                                <?php echo $testimonial->testi_text; ?>
                            </p>
                            <footer class="blockquote-footer"><cite title="<?php echo $testimonial->testi_client; ?>">
                                    <?php echo $testimonial->testi_client; ?>
                                </cite></footer>
                        </blockquote>
                    </div>
                <?php endforeach; ?>

            </div>
            <div class="custom-dots owl-dots text-center"></div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="row text-content">
                <div class="col text-center mb-3">
                    <h4>Kontak</h4>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5 mt-2">
                    <?php if ($this->session->flashdata('success')) { ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } elseif ($this->session->flashdata('failed')) { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo $this->session->flashdata('failed'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } ?>
                </div>
                <form method="POST" action="<?php echo base_url('contact/addContact'); ?>"
                    enctype="multipart/form-data">
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name"
                                    name="contact_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="name@example.com" name="contact_email" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    name="contact_subject" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    name="contact_message" required></textarea>
                            </div>
                            <button type="submit" id="btn-hero" class="btn-hero">
                                Kirim Pesan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
    </section>
    <!-- end Contact -->



    <footer id="footer" class="footer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="footer-item col-lg-3 col-md-6 mb-4">
                    <h3>MarryMe</h3>
                    <p>
                        Universitas Bina Sarana Informatika <br />
                        KARAWANG<br />
                        Indonesia <br /><br />
                        <strong>Phone:</strong> +62 821 1297 4619<br />
                        <strong>Email:</strong> weddingcuy@gmail.com<br />
                    </p>
                </div>
                <div class="footer-item col-lg-3 col-md-6 mb-4">
                    <h4>Mungkin Membantu</h4>
                    <ul>
                        <li><i class="fa fa-angle-right"></i> <a href="#home">Home</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="#about">About</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="#gallery">Gallery</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="blog/index.php">Blog</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="#client">Client</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-item col-lg-3 col-md-6">
                    <h4>Sosial Media Kami</h4>
                    <p>Untuk mengetahui info lebih lanjut kunjungi sosial Media kami di bawah ini:</p>
                    <div class="social-links mt-3">
                        <a href="https://github.com/Aditiafahmi" class="github" target="_blank"><i
                                class="bi bi-github"></i></a>
                        <a href="https://wa.me/6282112974619" class="whatsapp" target="_blank"><i
                                class="bi bi-whatsapp"></i></a>
                        <a href="https://instagram.com/marryyymee?igshid=OGQ5ZDc2ODk2ZA==" class="instagram"
                            target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="mailto:marrymeeorganizer@gmail.com" class="gmail" target="_blank"><i
                                class="bi bi-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright -->
    <section id="copyright" class="copyright">
        <div class="container text-center content-card">
            <p>
                ©Copyright 2022 <span>MarryMe</span>. All Rights Reserved
            </p>


        </div>
    </section>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"
        async></script>
    <script src="assets/js/script.js"></script>


    <!-- AOS js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
        integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        AOS.init({
            once: true,
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="vendor/owlcarousel/js/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        // Owl Carousel
        $('#owl-carousel').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayHoverPause: true,
            margin: 10,
            nav: true,
            navText: [
                '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                '<i class="fa fa-angle-right" aria-hidden="true"></i>'
            ],
            navContainer: '.client .custom-nav',
            dotsContainer: '.client .custom-dots',
            items: 2,
            responsive: {
                0: {
                    items: 1
                },
                1000: {
                    items: 2
                }
            }
        })
    </script>
</body>

</html>