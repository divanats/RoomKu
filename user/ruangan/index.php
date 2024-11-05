<?php
require_once '../layout/_top.php';
require_once '../../helper/connection.php';

$result = mysqli_query($connection, "SELECT * FROM ruangan");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1><i>Data Ruangan</i></h1>
  </div>
  <div class="row">
    <?php
    while ($data = mysqli_fetch_array($result)) :
    ?>
      <div class="col-md-4">
        <div class="card card-custom mb-4">
          <img src="../../assets/berkas1/<?php echo $data['gambar_ruangan']; ?>" class="card-img-top" alt="Gambar Ruangan">
          <div class="card-body">
            <h5 class="card-title"><?= $data['nama_ruangan'] ?></h5>
            <p class="card-text">
              <strong>Kapasitas:</strong> <?= $data['kapasitas'] ?><br>
              <strong>Lokasi:</strong> <?= $data['lokasi'] ?>
            </p>
            <a href="detail.php?id_ruangan=<?= $data['id_ruangan'] ?>" class="btn btn-primary">Detail</a>
            <a href="../peminjaman/create.php?id_ruangan=<?= $data['id_ruangan'] ?>" class="btn btn-success">Pinjam</a>
          </div>
        </div>
      </div>
    <?php
    endwhile;
    ?>
  </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>
<!-- Page Specific JS File -->
<?php
if (isset($_SESSION['info'])) :
  if ($_SESSION['info']['status'] == 'success') {
?>
    <script>
      iziToast.success({
        title: 'Sukses',
        message: `<?= $_SESSION['info']['message'] ?>`,
        position: 'topCenter',
        timeout: 5000
      });
    </script>
  <?php
  } else {
  ?>
    <script>
      iziToast.error({
        title: 'Gagal',
        message: `<?= $_SESSION['info']['message'] ?>`,
        timeout: 5000,
        position: 'topCenter'
      });
    </script>
<?php
  }

  unset($_SESSION['info']);
  $_SESSION['info'] = null;
endif;
?>
<script src="../assets/js/page/modules-datatables.js"></script>
