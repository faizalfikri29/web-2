<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<form method="GET" action="data-nilai.php" class="border p-4 rounded">
<fieldset class="border border-dark p-3 rounded" style="background-color: Aqua;">
<legend class="float-none w-auto px-3 fw-bold h3">Form Nilai Siswa/i</legend>
  <div class="form-group row">
    <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="nama_lengkap" name="nama" placeholder="Nama Lengkap" type="text" required="required" class="form-control"> 
        <div class="input-group-append">
          <div class="input-group-text"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" required="required" class="custom-select">
        <option value="komunikasi_efektif">Komunikasi Efektif</option>
        <option value="pem_web2">Pemograman Web 2</option>
        <option value="basis_data">Basis Data</option>
        <option value="jarringan_komputer">Jaringan Kompoter</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control" required="required"> 
        <div class="input-group-append">
          <div class="input-group-text"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Praktikum/Tugas</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai tugas" type="text" class="form-control" required="required"> 
        <div class="input-group-append">
          <div class="input-group-text"></div>
        </div>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
    <button type="submit" class="btn btn-primary" value="Simpan" name="proses">Simpan</button>
    </div>
  </div>
</fieldset>
</form>
</body>
</html>