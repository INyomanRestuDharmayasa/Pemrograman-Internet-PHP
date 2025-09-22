<?php
$barang = [
  "Buku Tulis",
  "Pulpen",
  "Penggaris",
  "Penghapus",
  "Buku Gambar",
  "Pensil",
  "Kamus",
  "Spidol" 
];
?>
<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Daftar Barang</title>

<style>
  body {
    margin:0;
    padding:0;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #dbeafe, #bfdbfe, #93c5fd);
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
    color:#333;
  }

  .container {
    background:rgba(255,255,255,0.97);
    padding:15px;
    border-radius:12px;
    box-shadow:0 6px 18px rgba(0,0,0,0.12);
    width:260px; 
    text-align:center;
  }

  h3 {
    margin:0 0 12px;
    font-size:20px;
    font-weight:700;
    text-align:center;
    color:#1e3a8a;
  }

  ul {
    padding:0;
    margin:0;
    list-style:none;
    display:flex;
    flex-direction:column; 
    gap:8px;
  }

  ul li {
    background:#ffffff;
    padding:8px;
    border-radius:8px;
    font-size:13px; 
    font-weight:600;
    color:#1e293b;
    border:1px solid rgba(0,0,0,0.1);
    transition:0.3s;
  }

  ul li:hover {
    background:linear-gradient(135deg, #60a5fa, #3b82f6); 
    color:#ffffff;
    transform:translateY(-2px);
    box-shadow:0 4px 10px rgba(0,0,0,0.12);
    cursor:pointer;
  }
</style>
</head>
<body>
  <div class="container">
    <?php
    echo "<h3>Daftar Barang</h3>";
    echo "<ul>";
    foreach ($barang as $b) {
      echo "<li>$b</li>";
    }
    echo "</ul>";
    ?>
  </div>
</body>
</html>