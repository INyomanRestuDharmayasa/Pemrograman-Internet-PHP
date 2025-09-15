<?php
$nilai = $_POST['nilai'] ?? '';
$grade = '';
$warna = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($nilai === '') {
        $grade = '!';
        $warna = '#6b7280'; 
    } elseif (!is_numeric($nilai)) {
        $grade = '!';
        $warna = '#6b7280';
    } elseif ($nilai < 0 || $nilai > 100) {
        $grade = '!';
        $warna = '#6b7280';
    } else {
        $angka = (int)$nilai;

        if ($angka >= 85) {
            $grade = "A";
            $warna = "#16a34a"; 
        } elseif ($angka >= 70) {
            $grade = "B";
            $warna = "#ec4899";
        } elseif ($angka >= 55) {
            $grade = "C";
            $warna = "#eab308";
        } elseif ($angka >= 40) {
            $grade = "D";
            $warna = "#f97316"; 
        } else {
            $grade = "E";
            $warna = "#dc2626"; 
        }
    }
}
?>
<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Cek Nilai</title>
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
    margin-bottom:6px;
    font-size:22px;
    font-weight:bold;
  }
  .subtitle{
    font-size:14px;
    color:#6b7280;
    margin-bottom:14px;
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
    padding:20px;
    border-radius:10px;
    font-size:28px;
    font-weight:bold;
    color:#fff;
  }
</style>
</head>
<body>
  <div class="card">
    <h1>Cek Nilai</h1>
    <div class="subtitle">
      Masukkan nilai untuk mengetahui standar nilai berdasarkan huruf
    </div>

    <form method="post">
      <input type="number" name="nilai" placeholder="0 - 100" min="0" max="100" value="<?php echo $nilai; ?>">
      <button type="submit">Cek</button>
    </form>

    <?php if ($grade !== ''): ?>
      <div class="result" style="background: <?php echo $warna; ?>">
        <?php echo $grade; ?>
      </div>
    <?php endif; ?>
  </div>
</body>
</html>
