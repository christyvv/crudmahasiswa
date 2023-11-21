<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
  <div class="row">
    <div class="col-md-6"><a href="<?= base_url() ?>Capres/tambah" class="btn btn-info mb-2">Tambah Calon Presiden</a></div>
    <div class="col-md-12">
      <table class="table">
        <thead>
          <tr>
            <td>No</td>
            <td>NIK</td>
            <td>Nama Lengkap</td>
            <td>Asal</td>
            <td>Partai Pendukung</td>
            <td>Riwayat Pekerjaan</td>
            <td>Umur</td>
            <td>Aksi</td>
          </tr>
        </thead>
        <tbody>
          <?php $i=1; ?>
          <?php foreach ($capres as $us) : ?>
            <tr>
              <td><?= $i; ?></td>
              <td><?= $us['nik']; ?></td>
              <td><?= $us['nama_lengkap']; ?></td>
              <td><?= $us['asal']; ?></td>
              <td><?= $us['partai_pendukung']; ?></td>
              <td><?= $us['riwayat_pekerjaan']; ?></td>
              <td><?= $us['umur']; ?></td>
              <td>
                <a href="<?= base_url('Capres/hapus/'). $us['id'];?>" class="badge bg-danger">Hapus</a>
                <a href="<?= base_url('Capres/edit/'). $us['id'];?>" class="badge bg-warning">Edit</a>
                <a href="<?= base_url('Capres/detail/'). $us['id'];?>" class="badge bg-info">Detail</a>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
