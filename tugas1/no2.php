<?php
$a = $_POST['a'] ?? '';
$b = $_POST['b'] ?? '';
$op = $_POST['op'] ?? '';
$result = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($a === '' || $b === '') {
        $error = 'Masukkan kedua angka.';
    } elseif (!is_numeric($a) || !is_numeric($b)) {
        $error = 'Input harus berupa angka.';
    } else {
        $x = (float)$a;
        $y = (float)$b;

        switch ($op) {
            case '+': $res = $x + $y; break;
            case '-': $res = $x - $y; break;
            case '*': $res = $x * $y; break;
            case '/':
                if ($y == 0.0) { 
                    $error = 'Pembagian dengan nol tidak diperbolehkan.'; 
                    $res = null; 
                } else { 
                    $res = $x / $y; 
                }
                break;
            default:
                $error = 'Pilih operator yang valid.';
                $res = null;
        }

        if ($error === '' && isset($res)) {
            if (floor($res) == $res) {
                $result = (string)$res;
            } else {
                $result = rtrim(rtrim(number_format($res, 8, '.', ''), '0'), '.');
            }
        }
    }
}
?>
<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Kalkulator Inline</title>
<style>
  :root{--bg:#f6f8fb;--card:#fff;--accent:#2563eb;--muted:#6b7280}
  *{box-sizing:border-box}
  body{
    margin:0;
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    background:var(--bg);
    font-family:system-ui,Segoe UI,Roboto,Arial;
    padding:24px;
  }
  .card{
    width:100%;
    max-width:800px;
    background:var(--card);
    padding:20px;
    border-radius:12px;
    box-shadow:0 12px 30px rgba(2,6,23,0.06);
    text-align:center;
  }
  form.inline{
    display:flex;
    align-items:center;
    gap:12px;
    justify-content:center;
    margin-top:14px;
    margin-bottom:8px;
  }
  input[type="number"] {
    width:140px;
    padding:10px 12px;
    border-radius:10px;
    border:1px solid #e6edf3;
    font-size:16px;
    background:linear-gradient(180deg,#fff,#fbfeff);
    -moz-appearance:textfield;
  }
  input[type="number"]::-webkit-outer-spin-button,
  input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }
  select{
    padding:10px 12px;
    border-radius:10px;
    border:1px solid #e6edf3;
    font-size:20px;
    background:#fff;
    min-width:72px;
    text-align:center;
    cursor:pointer;
  }
  button.equals{
    padding:10px 16px;
    border-radius:10px;
    border:0;
    background:var(--accent);
    color:#fff;
    font-size:18px;
    font-weight:800;
    cursor:pointer;
  }
  .result-box{
    min-width:160px;
    min-height:48px;
    padding:10px 14px;
    border-radius:10px;
    border:1px solid rgba(2,6,23,0.06);
    background:linear-gradient(180deg,#fff,#fbfffd);
    display:flex;
    align-items:center;
    justify-content:center;
    font-weight:800;
    font-size:18px;
  }
  .error{
    margin-top:12px;
    padding:10px;
    border-radius:8px;
    background:#fff1f2;
    border:1px solid #fecaca;
    color:#7f1d1d;
    text-align:center;
  }
  .note{
    margin-top:10px;
    color:var(--muted);
    font-size:14px;
  }
  .title{
    font-weight:bold;
    font-size:20px;
    margin-bottom:6px;
  }
  .subtitle{
    font-size:15px;
    color:#374151;
    margin-bottom:12px;
  }
  @media (max-width:680px){
    form.inline{
      flex-direction:column;
    }
    .result-box{
      width:100%;
    }
  }
</style>
</head>
<body>
  <main class="card">
    <div class="title">Kalkulator Sederhana</div>
    <div class="subtitle">
      Silakan masukkan angka untuk menghitung dengan kalkulator di bawah
    </div>

    <form method="post" class="inline" action="">
      <input type="number" step="any" name="a" value="<?php echo $a; ?>" required>
      <select name="op" required>
        <option value="+" <?php if ($op === '+') echo 'selected'; ?>>+</option>
        <option value="-" <?php if ($op === '-') echo 'selected'; ?>>−</option>
        <option value="*" <?php if ($op === '*') echo 'selected'; ?>>×</option>
        <option value="/" <?php if ($op === '/') echo 'selected'; ?>>÷</option>
      </select>
      <input type="number" step="any" name="b" value="<?php echo $b; ?>" required>
      <button type="submit" class="equals">=</button>
      <div class="result-box">
        <?php echo $result !== '' ? $result : '--'; ?>
      </div>
    </form>

    <div class="note">Jika telah selesai memasukkan angka, silakan tekan tombol = </div>

    <?php if ($error !== ''): ?>
      <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>
  </main>
</body>
</html>
