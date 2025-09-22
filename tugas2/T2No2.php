<?php
$mahasiswa = [
  "2405551053" => "Dio",
  "2405551089" => "Restu",
  "2405551150" => "Jason",
  "240555106"  => "Gung Wisnu",
  "2405551098" => "Pandu"
];
?>
<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Daftar Mahasiswa</title>

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

  .card {
    background:rgba(255,255,255,0.97);
    padding:20px;
    border-radius:15px;
    box-shadow:0 8px 20px rgba(0,0,0,0.12);
    width:400px;
    text-align:center;
  }

  h3 {
    margin:0 0 15px;
    font-size:26px;
    font-weight:700;
    text-align:center;
    color:#1e3a8a;
    letter-spacing:1px;
  }

  ul {
    padding:0;
    margin:0;
    list-style:none;
    display:flex;
    flex-direction:column;
    gap:10px;
  }

  ul li {
    background:#ffffff;
    padding:12px;
    border-radius:10px;
    font-size:15px;
    font-weight:600;
    color:#1e293b;
    border:1px solid rgba(0,0,0,0.1);
    transition:0.3s;
  }

  ul li:hover {
    background:linear-gradient(135deg, #60a5fa, #3b82f6);
    color:#ffffff;
    transform:translateY(-3px);
    box-shadow:0 4px 10px rgba(0,0,0,0.15);
    cursor:pointer;
  }

  .muted {
    margin-top:12px;
    font-size:13px;
    color:#6b7280;
  }
</style>
</head>
<body>
  <div class="card">
    <?php
      echo "<h3>Daftar Mahasiswa</h3>";
      echo "<ul>";
      foreach ($mahasiswa as $nim => $nama) {
        echo "<li>$nim - $nama</li>";
      }
      echo "</ul>";

      echo "<div class='muted'>Jumlah mahasiswa: " . count($mahasiswa) . "</div>";
    ?>
  </div>
</body>
</html>
