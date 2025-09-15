<?php
$angka = $_POST['angka'] ?? '';
$hasil = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($angka === '') {
        $hasil = "Silakan masukkan angka terlebih dahulu.";
    } elseif (!is_numeric($angka)) {
        $hasil = "Input harus berupa angka!";
    } else {
        $num = (int)$angka;
        if ($num % 2 == 0) {
            $hasil = "Angka <b>$num</b> adalah <span style='color:blue'>Genap</span>.";
        } else {
            $hasil = "Angka <b>$num</b> adalah <span style='color:red'>Ganjil</span>.";
        }
    }
}
?>
<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Cek Ganjil / Genap</title>
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
    width:320px;
    text-align:center;
  }
  h1{
    margin-bottom:12px;
    font-size:20px;
  }
  form{
    display:flex;
    gap:8px;
    justify-content:center;
    margin-bottom:14px;
  }
  input[type="number"]{
    flex:1;
    padding:10px;
    border:1px solid #ccc;
    border-radius:8px;
    font-size:15px;
    -moz-appearance:textfield;
  }
  input[type="number"]::-webkit-outer-spin-button,
  input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }
  button{
    padding:10px 14px;
    border-radius:8px;
    border:0;
    background:#2563eb;
    color:#fff;
    font-weight:600;
    cursor:pointer;
  }
  .result{
    padding:10px;
    border-radius:8px;
    background:#f1f5f9;
    font-size:16px;
  }
</style>
</head>
<body>
  <div class="card">
    <h1>Cek Ganjil / Genap</h1>
    <form method="post">
      <input type="number" name="angka" placeholder="Masukkan angka" value="<?php echo $angka; ?>">
      <button type="submit">Cek</button>
    </form>

    <?php if ($hasil !== ''): ?>
      <div class="result"><?php echo $hasil; ?></div>
    <?php endif; ?>
  </div>
</body>
</html>
