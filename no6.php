<?php
$nama = $_POST['nama'] ?? '';
$umur = $_POST['umur'] ?? '';
$gender = $_POST['gender'] ?? '';
$alamat = $_POST['alamat'] ?? '';
$hasil = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($nama !== '' && $umur !== '' && $gender !== '' && $alamat !== '') {
        $hasil = "Halo, nama saya <b>$nama</b>. Umur saya <b>$umur</b> tahun. Saya seorang <b>$gender</b>. Saya tinggal di <b>$alamat</b>.";
    } else {
        $hasil = "<span style='color:red;'>Harap isi semua data dengan lengkap!</span>";
    }
}
?>
<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Form Biodata Singkat</title>
<style>
  body{
    margin:0;
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    background:#f6f8fb;
    font-family:system-ui,Segoe UI,Roboto,Arial;
  }
  .card{
    background:#fff;
    padding:20px;
    border-radius:12px;
    box-shadow:0 10px 25px rgba(0,0,0,0.1);
    width:360px;
  }
  h1{
    text-align:center;
    margin-bottom:12px;
    font-size:22px;
  }
  form{
    display:flex;
    flex-direction:column;
    gap:10px;
  }
  input[type="text"], input[type="number"], textarea, select {
    padding:10px;
    border:1px solid #ccc;
    border-radius:8px;
    font-size:15px;
  }
  textarea{
    resize:none;
  }
  button{
    padding:10px;
    border-radius:8px;
    border:0;
    background:#2563eb;
    color:#fff;
    font-weight:600;
    cursor:pointer;
  }
  .result{
    margin-top:15px;
    background:#f1f5f9;
    padding:12px;
    border-radius:10px;
    font-size:15px;
  }
</style>
</head>
<body>
  <div class="card">
    <h1>Form Biodata Singkat</h1>
    <form method="post">
      <input type="text" name="nama" placeholder="Nama" value="<?php echo $nama; ?>" required>

      <input type="number" name="umur" placeholder="Umur" min="0" value="<?php echo $umur; ?>" required>

      <select name="gender" required>
        <option value="">-- Pilih Jenis Kelamin --</option>
        <option value="Laki-laki" <?php if($gender=='Laki-laki') echo 'selected'; ?>>Laki-laki</option>
        <option value="Perempuan" <?php if($gender=='Perempuan') echo 'selected'; ?>>Perempuan</option>
      </select>

      <textarea name="alamat" rows="3" placeholder="Alamat lengkap" required><?php echo $alamat; ?></textarea>

      <button type="submit">Kirim</button>
    </form>
    <?php if ($hasil !== ''): ?>
      <div class="result"><?php echo $hasil; ?></div>
    <?php endif; ?>
  </div>
</body>
</html>
