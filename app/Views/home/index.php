<?= $this->extend('layout/template1') ?>

<?= $this->section('content') ?>
<section id="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-white text-container">
                <h1 class="hae-text">HAE</h1>
                <h1 class="kitchen-text">KITCHEN</h1>
                <h2 class="desc-header">
                    WE SERVE THE BEST FOOD <br />
                    FOR YOUR HIGH QUALITY LEVEL OF TASTE
                </h2>
            </div>
            <div class="col-lg-6 img-container">
                <img src="/img/assets-web/food.svg" alt="" class="img-fluid img-food" />
            </div>
        </div>
    </div>
    <img src="/img/assets-web/section-divider.png" alt="" width="100%" class="section-divider" />
</section>

<section id="menu">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-4 text-center" data-aos="fade-right">
                <h1 class=" menu-title">MENU</h1>
                <p class="desc-title mb-4">
                    THIS IS OUR LATEST MENU <br />
                    NEW FOOD WILL BE UPDATED SOON
                </p>
            </div>
        </div>
        <div class="row justify-content-center" data-aos="fade-left">
            <?php foreach ($makanan as $m) : ?>
                <div class=" col-lg-3 col-md-6 col-sm-6 col-10">
                    <div class="card text-center border-0 card-product">
                        <img src="/img/<?= $m['gambar'] ?>" alt="" width="155" class="img-card" />
                        <div class="card-body">
                            <h1 class="card-title text-black title-truncate"><?= $m['nama'] ?></h1>
                            <p class="text-muted card-text"><?= $m['deskripsi'] ?></p>
                            <div class="card-price">
                                <hr />
                                <p class="text-muted">PRICE</p>
                                <h2><?= $m['harga'] ?></h2>
                            </div>
                        </div>
                        <a href="" class="btn-buy">ORDER NOW</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <a href="" class="btn rounded-pill btn-more mx-auto">ALL MENU <i class="bi bi-arrow-right"></i></a>
    </div>
    <img src="/img/assets-web/section-divider.png" alt="" width="100%" class="section-divider mirror" />
</section>

<section id="about">
    <div class="parallax-window" data-parallax="scroll" data-position="top" data-image-src="/img/assets-web/section-about.jpg" style="background: linear-gradient(rgba(0, 0, 0, 0.22) 0%, rgba(0, 0, 0, 0.91) 100%)">
        <div class="container about-content">
            <div class="row justify-content-center">
                <div class="col-lg-4 text-center" data-aos="fade-left">
                    <h1 class="about-title mt-4">ABOUT</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center" data-aos="fade-right">
                        <img src="/img/assets-web/logo-haekitchen.svg" class="logo-about img-fluid" />
                        <p class="mt-3 shadow desc-about">
                            Hae Kitchen was founded by 5 people when they were still in 9th grade Junior High School. The founders were Darga, Krishna, Dewaman, Adit, and Rama. They wanted Hae Kitchen to be the biggest food company in Bali, therefore
                            they will work harder to improve the quality and the taste of their food.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <img src="/img/assets-web/section-divider.png" alt="" width="100%" class="section-divider" />
    </div>
</section>

<section id="contact">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 text-center">
                <h1 class="menu-title">CONTACT</h1>
                <p class="desc-title mb-4">HAVE SOME ADVICE OR WANT TO CONTACT US, YOU CAN USING THE FORM BELOW</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control border-0 shadow" id="name" />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control border-0 shadow" id="email" />
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Message</label>
                        <textarea class="form-control border-0 shadow" id="pesan" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn rounded-pill btn-more mx-auto">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
    <img src="/img/assets-web/section-divider-2.png" alt="" width="100%" class="section-divider" />
</section>
<?= $this->endSection() ?>