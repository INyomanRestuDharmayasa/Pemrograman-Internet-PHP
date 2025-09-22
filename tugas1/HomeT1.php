<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <style>

    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(to bottom right, #dbeafe, #93c5fd);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background: white;
      padding: 25px 30px;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
      max-width: 650px;
      width: 100%;
    }

    h1 {
      color: #1e3a8a;
      margin-bottom: 5px;
    }

    h2 {
      color: #374151;
      font-size: 18px;
      margin-bottom: 15px;
    }

    .menu {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 12px;
      margin-bottom: 15px;
    }

    .card {
      background: white;
      border: 1px solid #e5e7eb;
      border-radius: 10px;
      padding: 15px;
      font-weight: 600;
      color: #1e3a8a;
      transition: all 0.3s ease;
      cursor: pointer;
    }

    .card:hover {
      background: #3b82f6;
      color: white;
    }

    .footer {
      border-top: 1px solid #e5e7eb;
      padding-top: 10px;
      font-size: 14px;
      color: #374151;
      margin-top: 10px;
    }

    a {
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Home - Project 1 PHP</h1>
    <h2>Pilih Menu Tugas</h2>

    <div class="menu">
      <a href="no1.php"><div class="card">Form Ucapan</div></a>
      <a href="no2.php"><div class="card">Kalkulator</div></a>
      <a href="no3.php"><div class="card">Ganjil / Genap</div></a>
      <a href="no4.php"><div class="card">Cek Nilai</div></a>
      <a href="no5.php"><div class="card">Menu Makanan</div></a>
      <a href="no6.php"><div class="card">Biodata Singkat</div></a>
    </div>

    <div class="footer">
      2405551089 - I Nyoman Restu Dharmayasa
    </div>
  </div>
</body>
</html>