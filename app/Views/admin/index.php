<?= $this->extend("layout/template") ?>

<?= $this->section("content") ?>
<div class="container">
    <div class="row">
        <div class="col-5">
            <h1>Daftar Menu</h1>
            <form action="/admin/index" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Here..." name="keyword">
                    <div class="input-group-append">
                        <?php if (!isset($_GET['keyword'])) : ?>
                            <button class="btn btn-outline-secondary" type="submit">Search</button>
                        <?php else : ?>
                            <a class="btn btn-outline-secondary" href="/admin">Clear Filter</a>
                        <?php endif ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="/admin/create" class="btn btn-primary mb-3">Tambah Data</a>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('pesan') ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = ($dataTampil * $currPage) - $dataTampil + 1 ?>
                    <?php foreach ($makanan as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><img src="/img/<?= $m["gambar"] ?>" alt=""></td>
                            <td><?= $m["nama"] ?></td>
                            <td><?= $m["deskripsi"] ?></td>
                            <td><?= $m["harga"] ?></td>
                            <td>
                                <a href="/admin/<?= $m["slug"] ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('makanan', 'makanan_page') ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>