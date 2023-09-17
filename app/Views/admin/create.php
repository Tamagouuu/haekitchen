<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1>Form Tambah Data</h1>
            <form action="/admin/save" method="POST" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError("nama") ? "is-invalid" : "") ?>" id="nama" name="nama" value="<?= old("nama") ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError("nama") ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError("deskripsi") ? "is-invalid" : "") ?>" id="deskripsi" name="deskripsi" value="<?= old("deskripsi") ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError("deskripsi") ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError("harga") ? "is-invalid" : "") ?>" id="harga" name="harga" value="<?= old("harga") ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError("harga") ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="gambar" class="col-sm-2 col-form-label ">Gambar</label>
                    <div class="col-sm-2">
                        <img src="/img/default.png" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input  <?= ($validation->hasError("gambar") ? "is-invalid" : "") ?>" id="gambar" name="gambar" onchange="previewImg()">
                            <div class="invalid-feedback">
                                <?= $validation->getError("gambar") ?>
                            </div>
                            <label class="custom-file-label" for="gambar">Pilih Gambar..</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>