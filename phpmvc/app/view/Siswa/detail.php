<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data["siswa"]["nama"]?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data["siswa"]["jenis_kelamin"]?></h6>
            <p class="card-text"><?= $data["siswa"]["alamat"]?></p>
            <a href=" <?= BASE_URL;?>/siswa" class="card-link">Kembali</a>
        </div>

    </div>
</div>

<div class="card">
  <div class="card-header"></div>
  <div class="card-body">
    <h5 class="card-title"><?= $data["siswa"]["nama"]?></h5>
    <h6 class="card-subtittle mb-2 text-muted"><?= $data["siswa"]["jenis_kelamin"]?></h6>
    <p class="card-text"><?= $data["siswa"]["alamat"]?></p>
    <a href=" <?= BASE_URL;?>/siswa" class="btn btn-primary"></a>
  </div>
</div>