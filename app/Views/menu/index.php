<?= $this->extend('layout/template1') ?>

<?= $this->section('content') ?>
<section id="hero-menu">
    <div class="parallax-window" data-parallax="scroll" data-position="top" data-image-src="/img/assets-web/section-about.jpg" style="background: linear-gradient(rgba(0, 0, 0, 0.22) 0%, rgba(0, 0, 0, 0.91) 100%)">
        <div class="container about-content">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8 col-sm-8 col-12 text-center">
                    <h1 class="hero-menu-title mt-4">OUR MENU</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-8 col-8 text-center">
                        <h2 class="fs-3 text-white">THIS IS ALL OF OUR MENU, NEW FOOD WILL BE UPDATED SOON</h2>
                    </div>
                </div>
            </div>
        </div>
        <img src="/img/assets-web/section-divider.png" alt="" width="100%" class="section-divider" />
    </div>
</section>

<section id="menu">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-8 col-8 text-center mt-4 mb-5" data-aos="fade-right">
                <h1 class="search-title">SEARCH MENU</h1>
                <form action="/menu/index" method="GET">
                    <?php if (!isset($_GET['keyword'])) : ?>
                        <div class="input-group">
                            <button class="btn btn-outline-secondary btn-search" type="submit" id="search"><i class="bi bi-search"></i></button>
                            <input type="text" class="form-control search-input" placeholder="Good foods are loading..." name="keyword" />
                        </div>
                    <?php else : ?>
                        <div class="input-group">
                            <a class="btn btn-outline-secondary btn-search" href="/menu"><i class="bi bi-x-lg"></i></a>
                            <input type="text" class="form-control search-input" placeholder="Clear Filter" disabled />
                        </div>
                    <?php endif ?>
                </form>
            </div>
        </div>
        <div class="row justify-content-center" data-aos="fade-left">
            <?php if (!empty($makanan)) : ?>
                <?php foreach ($makanan as $m) : ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-10">
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
            <?php else : ?>
                <div class="col-12">
                    <h1 class="text-black fs-1">NO RESULT FOUND <i class="bi bi-emoji-frown"></i></h1>
                </div>
            <?php endif ?>
        </div>
        <?= $pager->links('makanan', 'menu_page') ?>
    </div>
    <img src="/img/assets-web/section-divider-2.png" alt="" width="100%" class="section-divider" />
</section>
<?= $this->endSection() ?>