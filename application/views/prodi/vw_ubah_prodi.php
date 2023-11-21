<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Ubah Data Prodi
                </div>

                <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $prodi['id']; ?>">
                    <div class="form-group">
                        <label for="nama">Nama Prodi</label>
                        <input type="text" name="nama" value="<?= $prodi['nama']; ?>" class="form-control" id="nama" placeholder="Nama Prodi">
                        <?= form_error('nama','<small class="text-danger p1-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="ruangan">Ruangan</label>
                        <input type="text" name="ruangan" value="<?= $prodi['ruangan']; ?>" class="form-control" id="ruangan" placeholder="Ruangan">
                        <?= form_error('ruangan','<small class="text-danger p1-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" name="jurusan" value="<?= $prodi['jurusan']; ?>" class="form-control" id="jurusan" placeholder="Jurusan">
                        <?= form_error('jurusan','<small class="text-danger p1-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="akreditas">Akreditas</label>
                        <input type="text" name="akreditas" value="<?= $prodi['akreditas']; ?>" class="form-control" id="akreditas" placeholder="Akreditas">
                        <?= form_error('akreditas','<small class="text-danger p1-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="nama_kaprodi">Nama Kaprodi</label>
                        <input type="text" name="nama_kaprodi" value="<?= $prodi['nama_kaprodi']; ?>" class="form-control" id="nama_kaprodi" placeholder="Nama Kaprodi">
                        <?= form_error('nama_kaprodi','<small class="text-danger p1-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="tahun_berdiri">Tahun Berdiri</label>
                        <input type="text" name="tahun_berdiri" value="<?= $prodi['tahun_berdiri']; ?>" class="form-control" id="tahun_berdiri" placeholder="Tahun Berdiri">
                    </div>
                    <div class="form-group">
                        <label for="output_lulusan">Output Lulusan</label>
                        <input type="text" name="output_lulusan" value="<?= $prodi['output_lulusan']; ?>" class="form-control" id="output_lulusan" placeholder="Lulusan">
                    </div>
                    <div class="form-group">
                        <label for="gambar" class="custom-file-label">Gambar</label> 
                        <div class="custom-file">
                            <img src="<?= base_url('assets/img/prodi/') . $prodi['gambar']; ?>" style="width: 100px;" class="img-thumbnail mb-1">
                            <input type="file" name="gambar" class="form-control custom-file-input" id="gambar">
                            <?= form_error('gambar', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <a href="<?= base_url('Prodi') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float right">Tambah Prodi</button>
                    </div>
                </form>     
            </div>
        </div>
    </div>
</div>
</div>

