<?= $this->extend("layout/template") ?>

<?= $this->section("content") ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Detail makanan</h1>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $makanan["gambar"] ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $makanan["nama"] ?></h5>
                            <p class="card-text">Deskripsi</p>
                            <p class="card-text"><small class="text-muted"><?= $makanan["deskripsi"] ?></small></p>
                            <a href="/admin/edit/<?= $makanan["slug"] ?>" class="btn btn-warning">Edit</a>
                            <form action="/admin/<?= $makanan["id"] ?>" method="POST" class="d-inline">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="confirm('Yakin Dihapus Ngab?')">Hapus</button>
                            </form>
                            <br><br>
                            <a href="/admin">Kembali ke daftar produk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>