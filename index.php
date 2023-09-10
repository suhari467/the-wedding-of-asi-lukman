<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Wedding of Asi & Lukman</title>

    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rouge+Script&family=Work+Sans:wght@100;300;400;600;700&display=swap" rel="stylesheet">

    <!-- Countdown CSS -->
    <link rel="stylesheet" href="assets/css/simplyCountdown.theme.default.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
    <!-- Section Hero -->
    <section id="hero" class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center text-white">
        <main>
            <h4 class="fadeInUp">Kepada Bapak/Ibu/Saudara/i, <span style="display: block; margin-top: 1rem;"></span></h4>

            <h1 class="fadeInUp">Asi & Lukman</h1>
            <img src="assets/img/hero.jpg" alt="hero_image" class="fadeInUp">
            <p class="fadeInUp">Tanpa mengurangi rasa hormat, kami bermaksud mengundang Anda untuk menghadiri acara pernikahan kami.</p>
            <p class="fadeInUp">Yang akan melakukan resepsi pernikahan dalam :</p>

            <div class="simply-countdown fadeInUp">

            </div>

            <a href="#home" class="btn btn-lg mt-4 fadeInUp" onClick="enableScroll()">Lihat Undangan</a>
        </main>
    </section>
    <!-- End Section Hero -->

    <!-- Section Navbar -->
    <nav class="navbar navbar-expand-md bg-transparent sticky-top mynavbar fadeInUp">
        <div class="container">
            <a class="navbar-brand" href="#">Asi & Lukman</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Asi & Lukman</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="#home">Home</a>
                    <a class="nav-link" href="#info">Info</a>
                    <a class="nav-link" href="#story">Story</a>
                    <a class="nav-link" href="#gallery">Gallery</a>
                    <a class="nav-link" href="#rsvp">RSVP</a>
                    <a class="nav-link" href="#gifts">Gifts</a>
                </div>
            </div>
            </div>
        </div>
    </nav>
    <!-- End Section Navbar -->

    <!-- Section Home -->
    <section id="home" class="home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2>Acara Pernikahan</h2>
                    <h3>Diselenggarakan pada 15 Oktober 2023 di Cirebon, Jawa Barat</h3>
                    <p>Oleh karena itu, dengan segala hormat, kami bermaksud untuk mengundang Bapak/Ibu/Saudara/i, untuk hadir pada acara pernikahan kami.</p>
                </div>
            </div>

            <div class="row couple">
                <div class="col-lg-6">
                    <div class="row align-items-center">
                        <div class="col-8 text-end">
                            <h3>Lukman Hasan, S.T</h3>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci, animi.</p> -->
                            <p class="family">Putra ke-3 dari Bpk. Edi <br> dan <br> Ibu Sriani (Aan)</p>
                        </div>
                        <div class="col-4">
                            <img src="assets/img/lukman.jpg" alt="Lukman" class="img-responsive rounded-circle">
                        </div>
                    </div>
                </div>
                
                <span class="heart"><i class="bi bi-suit-heart-fill"></i></span>

                <div class="col-lg-6">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <img src="assets/img/asi.jpg" alt="Asi Kurniasi" class="img-responsive rounded-circle">
                        </div>
                        <div class="col-8">
                            <h3>Asi Kurniasi</h3>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, veniam.</p> -->
                            <p class="family">Putri Ke-2 dari Bpk. Rustandar (Kandar) <br> dan <br> Ibu Murini (Rini)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Home -->

    <!-- Section Info -->
    <section id="info" class="info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <h2>Informasi Acara</h2>
                    <p class="alamat">
                        Alamat: Bertempat di kediaman mempelai wanita <br> Dusun I Blok Tenggeran, Ds.Suci, No. 8 RT/RW 02/01, Suci, Kec. Mundu, Kabupaten Cirebon
                    </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.1303566252177!2d108.5831018!3d-6.7539533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1d62d53ad7f5%3A0x5160383e5b3c34ed!2sTape%20Ketan%20Ma&#39;%20Nini!5e0!3m2!1sid!2sid!4v1694346994131!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <a href="https://maps.app.goo.gl/TA4vowQGTSoqdVbQ9" target="_blank" class="btn btn-light btn-sm my-3"> Klik untuk membuka peta</a>
                    <p class="description">
                        Merupakan suatu kehormatan dan kebahagian bagi kami apabila Bapak/Ibu/Saudara/i berkenan hadir untuk memberikan doa dan restu kepada kami.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-md-5 col-10">
                    <div class="card text-center text-bg-light mb-5">
                        <div class="card-header">
                            Akad Nikah
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <i class="bi bi-clock d-block"></i>
                                    <span>09:00 - 10:00</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="bi bi-calendar3 d-block"></i>
                                    <span>Minggu, 15 Oktober 2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            Saat acara akad nikah diharapkan untuk kondusif menjaga kekhidmatan dan kekhusyuan seluruh prosesi.
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-10">
                    <div class="card text-center text-bg-light">
                        <div class="card-header">
                            Resepsi
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <i class="bi bi-clock d-block"></i>
                                    <span>10:00 - selesai</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="bi bi-calendar3 d-block"></i>
                                    <span>Minggu, 15 Oktober 2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            Saat acara akad nikah diharapkan untuk kondusif menjaga kekhidmatan dan kekhusyuan seluruh prosesi.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Info -->
    
    <!-- Section Story -->
    <section id="story" class="story">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <span>Bagaimana cinta kami bersemi</span>
                    <h2>Cerita Kami</h2>
                    <p>Dalam rahasia takdir yang telah terukir, kami akhirnya berjumpa dan merajut asa, semoga ini bisa sampai menuju surga-Nya</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image" style="background-image: url(assets/img/1_pertemuan.jpeg);"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Pertama Bertemu</h3>
                                    <span>30 Mei 2022</span>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus aliquid culpa, voluptatibus quos repudiandae similique.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image" style="background-image: url(https://picsum.photos/id/7/160/160);"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Mulai Serius</h3>
                                    <span>1 November 2022</span>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit facilis qui minima quae nulla perspiciatis, magni velit perferendis adipisci.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image" style="background-image: url(assets/img/3_pertunangan.jpg);"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Pertunangan</h3>
                                    <span>11 Desember 2022</span>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit facilis qui minima quae nulla perspiciatis, magni velit perferendis adipisci.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Story -->
    
    <!-- Section Gallery -->
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <span>Memori Kisah Kami</span>
                    <h2>Galeri Foto</h2>
                    <p>Moment kebersamaan kami dalam menyambut masa depan, mohon doa restu dan dukungan kepada kami.</p>
                </div>
            </div>

            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2 justify-content-center">
                <div class="col mt-3">
                    <a href="assets/img/gallery/1.jpg" data-toggle="lightbox" data-caption="Asi Kurniasi" data-gallery="myGallery">
                        <img src="assets/img/gallery/thumbnails/1.jpg" alt="Gallery1" class="img-fluid w-100 rounded">
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="assets/img/gallery/2.jpg" data-toggle="lightbox" data-caption="Lukman Hasan" data-gallery="myGallery">
                        <img src="assets/img/gallery/thumbnails/2.jpg" alt="Gallery2" class="img-fluid w-100 rounded">
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="assets/img/gallery/3.jpg" data-toggle="lightbox" data-caption="Lukman Hasan" data-gallery="myGallery">
                        <img src="assets/img/gallery/thumbnails/3.jpg" alt="Gallery3" class="img-fluid w-100 rounded">
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="assets/img/gallery/4.jpg" data-toggle="lightbox" data-caption="Asi Kurniasi" data-gallery="myGallery">
                        <img src="assets/img/gallery/thumbnails/4.jpg" alt="Gallery4" class="img-fluid w-100 rounded">
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="assets/img/gallery/5.jpg" data-toggle="lightbox" data-caption="Lukman Hasan" data-gallery="myGallery">
                        <img src="assets/img/gallery/thumbnails/5.jpg" alt="Gallery5" class="img-fluid w-100 rounded">
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="assets/img/gallery/6.jpg" data-toggle="lightbox" data-caption="Asi Kurniasi" data-gallery="myGallery">
                        <img src="assets/img/gallery/thumbnails/6.jpg" alt="Gallery6" class="img-fluid w-100 rounded">
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="assets/img/gallery/7.jpg" data-toggle="lightbox" data-caption="Lukman Hasan" data-gallery="myGallery">
                        <img src="assets/img/gallery/thumbnails/7.jpg" alt="Gallery7" class="img-fluid w-100 rounded">
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="assets/img/gallery/8.jpg" data-toggle="lightbox" data-caption="Asi Kurniasi" data-gallery="myGallery">
                        <img src="assets/img/gallery/thumbnails/8.jpg" alt="Gallery8" class="img-fluid w-100 rounded">
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="assets/img/gallery/9.jpg" data-toggle="lightbox" data-caption="Asi Kurniasi" data-gallery="myGallery">
                        <img src="assets/img/gallery/thumbnails/9.jpg" alt="Gallery9" class="img-fluid w-100 rounded">
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="assets/img/gallery/10.jpg" data-toggle="lightbox" data-caption="Lukman Hasan" data-gallery="myGallery">
                        <img src="assets/img/gallery/thumbnails/10.jpg" alt="Gallery10" class="img-fluid w-100 rounded">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Gallery -->

    <!-- Section RSVP -->
    <section id="rsvp" class="rsvp">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <h2>Konfirmasi Kehadiran</h2>
                    <p>Isi form dibawah ini untuk melakukan konfirmasi kehadiran.</p>
                </div>
            </div>
            <form id="form-rsvp" class="row row-cols-md-auto g-3 align-items-center justify-content-center" method="POST" action="https://script.google.com/macros/s/AKfycby5O-__ZQqHIRNMxrBu6qfVeEALV9kxANUHhfiaWkiRFV6DiaVCF8HqNb9v4tdUS9yz/exec">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" max="5" length="1" value="1">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="status" class="form-label">Konfirmasi</label>
                        <select name="status" id="status" class="form-select">
                            <option selected>Pilih salah satu</option>
                            <option value="Hadir">Hadir</option>
                            <option value="Tidak Hadir">Tidak Hadir</option>
                        </select>
                    </div>
                </div>
                <div class="col-12" style="margin-top: 35px;">
                    <button class="btn btn-primary">Kirim</button>
                </div>
            </form>

            <div class="row justify-content-center mt-3">
                <div class="col-md-6">
                    <div id="disqus_thread" class="disqus"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section RSVP -->

    <!-- Section GIFTS -->
    <section id="gifts" class="gifts">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <span>Ungkapan tanda kasih</span>
                    <h2>Kirim Hadiah</h2>
                    <p>Kirim hadiah terbaik anda untuk kedua mempelai.</p>
                </div>
            </div>

            <div class="row justify-content-center text-center px-3">
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="fw-bold">BCA</div>
                            <img src="assets/img/Logo-BCA.png" alt="Logo BCA" class="img-thumbnail" width="200">
                            <p class="fw-bold mt-2">1341871579 - Asi Kurniasi</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section GIFTS -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <small class="d-block"> &copy; 2023 The Wedding of Retech ID. All Rights Reserved.</small>
                    <small class="d-block"> Design by <a href="https://instagram.com/suhari378" target="_blank"> Suhari378 </a></small>

                    <ul class="mt-3">
                        <li><a href="https://instagram.com/retechid" target="_blank"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="https://youtube.com/@retechid" target="_blank"><i class="bi bi-youtube"></i></a></li>
                        <li><a href="https://twitter.com/suhari378" target="_blank"><i class="bi bi-twitter"></i></a></li>
                        <li><a href="https://facebook.com/suhari.nephaztcirebon" target="_blank"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="https://tiktok.com/@suhari19xix" target="_blank"><i class="bi bi-tiktok"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Audio Section -->
    <div id="audio-container" class="audio-container">
        <audio id="bgm" autoplay loop>
            <source src="assets/audio/JVKE_Golden_Hour.mp3" type="audio/mp3">
        </audio>

        <div class="audio-icon-wrapper rotating" style="display: none;">
            <i class="bi bi-disc"></i>
        </div>
    </div>
    <!-- End Audio Section -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
    <!-- Countdown JS -->
    <script src="assets/js/simplyCountdown.min.js"></script>

    <!-- Lightbox Bootstraps -->
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>

    <!-- SimplyCountdown Setting -->
    <script>
        simplyCountdown('.simply-countdown', {
            year: 2023, // required
            month: 10, // required
            day: 15, // required
            hours: 9, // Default is 0 [0-23] integer
            minutes: 0, // Default is 0 [0-59] integer
            words: { //words displayed into the countdown
                days: { singular: 'Hari', plural: 'Hari' },
                hours: { singular: 'Jam', plural: 'Jam' },
                minutes: { singular: 'Menit', plural: 'Menit' },
                seconds: { singular: 'Detik', plural: 'Detik' }
            }
        });
    </script>

    <!-- Fix Overflow Offcanvas -->
    <script>
        const stickyTop = document.querySelector('.sticky-top');
        const offcanvas = document.querySelector('.offcanvas');
        const navbarNav = document.querySelector('.navbar-nav');
        const bsOffcanvas = new bootstrap.Offcanvas('#offcanvasNavbar');

        offcanvas.addEventListener('show.bs.offcanvas', function(){
            stickyTop.style.overflow = 'visible';
        });

        offcanvas.addEventListener('hidden.bs.offcanvas', function(){
            stickyTop.style.overflow = 'hidden';
        });

        navbarNav.addEventListener('click', function(){
            setTimeout(function(){
                stickyTop.style.overflow = 'hidden';
                bsOffcanvas.hide();
            }, 1000)
        })
    </script>

    <!-- Add Effect Scroll -->
    <script>
        function fade() {
            var fade = document.querySelectorAll(".fade");

            for (var i = 0; i < fade.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = fade[i].getBoundingClientRect().top;
                var elementVisible = 150;

                if (elementTop < windowHeight - elementVisible) {
                fade[i].classList.add("fadeInUp");
                } else {
                fade[i].classList.remove("fadeInUp");
                }
            }
        }

        window.addEventListener("scroll", fade);
    </script>

    <!-- Locking Hero -->
    <script>
        const rootElement = document.querySelector(":root");
        const audioIconWrapper = document.querySelector('.audio-icon-wrapper');
        const audioIcon = document.querySelector('.audio-icon-wrapper i');
        const bgm = document.querySelector('#bgm');
        let isPlaying = false;

        function disableScroll(){
            scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

            window.onscroll = function() {
                window.scrollTo(scrollTop, scrollLeft);
            }

            rootElement.style.scrollBehavior = 'auto';
        }

        function enableScroll(){
            window.onscroll = function() {}
            rootElement.style.scrollBehavior = 'smooth';
            // localStorage.setItem('opened', 'true');
            playAudio();
        }

        function playAudio() {
            audioIconWrapper.style.display = 'flex';
            bgm.volume = 0.1; //volume 10%
            bgm.play();
            isPlaying = true;
        }

        audioIconWrapper.onclick = function() {
            if(isPlaying) {
                bgm.pause();
                audioIcon.classList.remove('bi-disc');
                audioIcon.classList.add('bi-pause-circle');
                audioIconWrapper.classList.remove('rotating');
            }else {
                bgm.play();
                audioIcon.classList.remove('bi-pause-circle');
                audioIcon.classList.add('bi-disc');
                audioIconWrapper.classList.add('rotating');
            }

            isPlaying = !isPlaying;
        }

        // if(!localStorage.getItem('opened')){
        //     disableScroll();
        // }
        
        disableScroll();
    </script>

    <script>
        window.addEventListener("load", function() {
            const form = document.getElementById('form-rsvp');
            form.addEventListener("submit", function(e) {
                e.preventDefault();
                    const data = new FormData(form);
                    const action = e.target.action;
                    fetch(action, {
                        method: 'POST',
                        body: data,
                    })
                    .then(() => {
                        alert("Konfirmasi Kehadiran Berhasil Terkirim");
                    })
            });
        });
    </script>

    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const to = urlParams.get('to') || '';
        // console.log(to);
        const namaContainer = document.querySelector('.hero h4 span');
        if(!to){
            namaContainer.style.display = 'none';
        }
        namaContainer.innerText = to;

        document.querySelector('#nama').value = to;
    </script>

    <!-- <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript> -->
    <script>
        (function() {
            var d = document, s = d.createElement('script');
            s.src = 'https://the-wedding-of-asi-lukman.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>          
</body>
</html>