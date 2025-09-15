<?php
$menu = $_POST['menu'] ?? '';
$harga = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    switch ($menu) {
        case 'nasi_goreng':   $harga = 20000; break;
        case 'soto':          $harga = 18000; break;
        case 'mie_ayam':      $harga = 15000; break;
        case 'bakso':         $harga = 17000; break;
        case 'ayam_geprek':   $harga = 22000; break;
        case 'pecel_lele':    $harga = 19000; break;
        case 'gado_gado':     $harga = 16000; break;
        case 'rawon':         $harga = 25000; break;
        case 'rendang':       $harga = 30000; break;
        case 'sate_ayam':     $harga = 27000; break;
        case 'sate_kambing':  $harga = 35000; break;
        case 'soto_betawi':   $harga = 28000; break;
        case 'ayam_bakar':    $harga = 24000; break;
        case 'ikan_bakar':    $harga = 26000; break;
        case 'tahu_tempe':    $harga = 10000; break;
        case 'sayur_asem':    $harga = 12000; break;
        default: $harga = 0; // jika belum memilih
    }
}
?>
<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Menu Makanan</title>
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
    flex-direction:column;
    gap:12px;
    margin-bottom:14px;
  }
  select{
    padding:10px;
    border:1px solid #ccc;
    border-radius:8px;
    font-size:15px;
    cursor:pointer;
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
    padding:15px;
    border-radius:10px;
    background:#f1f5f9;
    font-size:18px;
    font-weight:bold;
  }
</style>
</head>
<body>
  <div class="card">
    <h1>Menu Makanan</h1>
    <div class="subtitle">Pilih menu makanan untuk melihat harganya</div>

    <form method="post">
      <select name="menu" required>
        <option value="">-- Pilih Menu --</option>
        <option value="nasi_goreng"  <?php if($menu=='nasi_goreng') echo 'selected'; ?>>Nasi Goreng</option>
        <option value="soto"         <?php if($menu=='soto') echo 'selected'; ?>>Soto</option>
        <option value="mie_ayam"     <?php if($menu=='mie_ayam') echo 'selected'; ?>>Mie Ayam</option>
        <option value="bakso"        <?php if($menu=='bakso') echo 'selected'; ?>>Bakso</option>
        <option value="ayam_geprek"  <?php if($menu=='ayam_geprek') echo 'selected'; ?>>Ayam Geprek</option>
        <option value="pecel_lele"   <?php if($menu=='pecel_lele') echo 'selected'; ?>>Pecel Lele</option>
        <option value="gado_gado"    <?php if($menu=='gado_gado') echo 'selected'; ?>>Gado-Gado</option>
        <option value="rawon"        <?php if($menu=='rawon') echo 'selected'; ?>>Rawon</option>
        <option value="rendang"      <?php if($menu=='rendang') echo 'selected'; ?>>Rendang</option>
        <option value="sate_ayam"    <?php if($menu=='sate_ayam') echo 'selected'; ?>>Sate Ayam</option>
        <option value="sate_kambing" <?php if($menu=='sate_kambing') echo 'selected'; ?>>Sate Kambing</option>
        <option value="soto_betawi"  <?php if($menu=='soto_betawi') echo 'selected'; ?>>Soto Betawi</option>
        <option value="ayam_bakar"   <?php if($menu=='ayam_bakar') echo 'selected'; ?>>Ayam Bakar</option>
        <option value="ikan_bakar"   <?php if($menu=='ikan_bakar') echo 'selected'; ?>>Ikan Bakar</option>
        <option value="tahu_tempe"   <?php if($menu=='tahu_tempe') echo 'selected'; ?>>Tahu & Tempe</option>
        <option value="sayur_asem"   <?php if($menu=='sayur_asem') echo 'selected'; ?>>Sayur Asem</option>
      </select>
      <button type="submit">Lihat Harga</button>
    </form>

    <?php if ($harga > 0): ?>
      <div class="result">
        Harga: Rp <?php echo number_format($harga, 0, ',', '.'); ?>
      </div>
    <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
      <div class="result">Silakan pilih menu terlebih dahulu.</div>
    <?php endif; ?>
  </div>
</body>
</html>
