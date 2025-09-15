<?php
$name = '';
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name_raw = $_POST['name'] ?? '';
    $name = trim($name_raw);
    $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');

    if ($name !== '') {
        $message = "Halo {$name}, selamat mempelajari PHP!";
    } else {
        $message = "Silakan isi nama terlebih dahulu!";
    }
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Form Ucapan</title>
  <style>
    :root{--bg:#f3f6ff;--card:#fff;--accent:#4f46e5}
    *{box-sizing:border-box}
    body{margin:0;height:100vh;display:flex;align-items:center;justify-content:center;background:var(--bg);font-family:system-ui,Segoe UI,Roboto,Arial}
    .card{width:95%;max-width:480px;background:var(--card);padding:22px;border-radius:12px;box-shadow:0 8px 24px rgba(15,23,42,0.08)}
    h1{margin:0 0 8px;font-size:20px;color:#111}
    p.lead{margin:0 0 16px;color:#475569}
    form{display:flex;gap:10px}
    input[type="text"]{flex:1;padding:10px 12px;border:1px solid #e6edf3;border-radius:8px;font-size:15px}
    button{padding:10px 14px;border-radius:8px;border:0;background:var(--accent);color:#fff;font-weight:600;cursor:pointer}
    .result{margin-top:14px;padding:12px;border-radius:8px;background:#f8fafc;border:1px solid #e6edf3;color:#0f172a}
    .note{margin-top:8px;color:#6b7280;font-size:13px}
    @media (max-width:420px){form{flex-direction:column}button{width:100%}}
  </style>
</head>
<body>
  <main class="card" role="main" aria-labelledby="title">
    <h1 id="title">Form Ucapan</h1>
    <p class="lead">Silakan masukkan nama</p>

    <form method="post" action="">
      <input type="text" name="name" placeholder="Contoh: Restu Dharmayasa" maxlength="60" value="<?php echo $name; ?>">
      <button type="submit">Kirim</button>
    </form>

    <?php if ($message !== ''): ?>
      <div class="result" role="status" aria-live="polite">
        <?php echo $message; ?>
      </div>
    <?php else: ?>
      <div class="note">Klik "Kirim" untuk mendapatkan ucapan.</div>
    <?php endif; ?>
  </main>
</body>
</html>
