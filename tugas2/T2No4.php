<?php
$hasil = [];
$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n1 = isset($_POST['n1']) ? (int)$_POST['n1'] : 0;
    $n2 = isset($_POST['n2']) ? (int)$_POST['n2'] : 0;

    if ($n1 < $n2) {
        for ($i = $n1; $i <= $n2; $i++) {
            if ($i % 2 === 0) {
                $hasil[] = $i;
            }
        }
    } else {
        $error = "Nilai pertama (n1) harus lebih kecil dari nilai kedua (n2).";
    }
}
?>
<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Bilangan Genap</title>

<style>
  body {
    margin:0;
    padding:0;
    font-family:'Poppins',sans-serif;
    background:linear-gradient(135deg, #dbeafe, #bfdbfe, #93c5fd);
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
  }

  .container {
    background:#fff;
    padding:20px 25px;
    border-radius:15px;
    box-shadow:0 8px 20px rgba(0,0,0,0.12);
    text-align:center;
    width:450px;
  }

  h2 {
    font-size:22px;
    font-weight:700;
    margin-bottom:8px;
    color:#1e3a8a;
  }

  .subtitle {
    font-size:14px;
    color:#6b7280;
    margin-bottom:18px;
  }

  .input-row {
    display:flex;
    justify-content:center;
    align-items:center;
    gap:8px;
    margin-bottom:15px;
  }

  input[type="number"] {
    padding:10px;
    width:90px;
    border:1px solid #ccc;
    border-radius:8px;
    font-size:14px;
    text-align:center;
  }

  button {
    background:#3b82f6;
    color:#fff;
    border:none;
    border-radius:8px;
    padding:10px 20px;
    font-size:16px;
    font-weight:600;
    cursor:pointer;
    transition:0.3s;
  }
  button:hover {
    background:#2563eb;
  }

  .result {
    margin-top:20px;
    padding:10px;
    border-radius:8px;
    background:#f9fafb;
    font-size:15px;
    color:#1e293b;
    text-align:center;
    min-height:30px;
  }

  .error {
    margin-top:10px;
    color:#dc2626;
    font-size:14px;
    font-weight:500;
  }

  .angka-list {
    margin-top:10px;
    display:flex;
    flex-wrap:wrap;
    gap:8px;
    justify-content:center;
  }

  .angka-item {
    background:#60a5fa;
    color:#fff;
    padding:6px 10px;
    border-radius:6px;
    font-size:14px;
    font-weight:500;
  }
</style>
</head>
<body>
  <div class="container">
    <h2>Bilangan Genap</h2>
    <div class="subtitle">
      Masukkan angka pertama dan angka kedua, lalu tekan tombol <strong>Hasil</strong> untuk melihat bilangan genap
    </div>

    <form method="post">
      <div class="input-row">
        <input type="number" name="n1" placeholder="Angka 1" required>
        <span>-</span>
        <input type="number" name="n2" placeholder="Angka 2" required>
      </div>
      <button type="submit">Hasil</button>
    </form>

    <?php if ($error): ?>
      <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>

    <?php if (!empty($hasil)): ?>
      <div class="result">
        <strong>Bilangan genap dari <?php echo $n1; ?> sampai <?php echo $n2; ?>:</strong>
        <div class="angka-list">
          <?php foreach ($hasil as $angka): ?>
            <div class="angka-item"><?php echo $angka; ?></div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endif; ?>
  </div>
</body>
</html>