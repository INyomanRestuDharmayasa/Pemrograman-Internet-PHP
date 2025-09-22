<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Tugas 2</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(180deg, #dbeafe, #93c5fd);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      width: 100%;
      max-width: 800px;
      background: #fff;
      border-radius: 12px;
      padding: 25px;
      text-align: center;
      box-shadow: 0 8px 15px rgba(0,0,0,0.15);
    }

    h1 {
      font-size: 26px;
      font-weight: 700;
      color: #1e3a8a;
      margin-bottom: 8px;
    }

    h2 {
      font-size: 18px;
      color: #374151;
      font-weight: 500;
      margin-bottom: 20px;
    }

    .menu {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 15px;
      margin-bottom: 20px;
    }

    .menu a {
      text-decoration: none;
    }

    .menu .card {
      background: #ffffff;
      padding: 14px 10px;
      border: 1px solid #d1d5db;
      border-radius: 8px;
      font-size: 15px;
      font-weight: 600;
      color: #1f2937;
      transition: 0.3s;
    }

    .menu .card:hover {
      background: linear-gradient(135deg, #3b82f6, #2563eb);
      color: #fff;
      transform: translateY(-3px);
      cursor: pointer;
    }

    .footer {
      margin-top: 10px;
      font-size: 14px;
      color: #1f2937;
      font-weight: 500;
      padding-top: 10px;
      border-top: 1px solid #e5e7eb;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Home - Project 2 PHP</h1>
    <h2>Pilih Menu Tugas</h2>

    <div class="menu">
      <a href="T2No1.php"><div class="card">Daftar Barang</div></a>
      <a href="T2No2.php"><div class="card">Daftar Mahasiswa</div></a>
      <a href="T2No3.php"><div class="card">Daftar Harga Barang</div></a>
      <a href="T2No4.php"><div class="card">Bilangan Genap</div></a>
      <a href="T2No5.php"><div class="card">Array Mahasiswa</div></a>
      <a href="T2No6.php"><div class="card">Status Kelulusan</div></a>
    </div>

    <div class="footer">
      2405551089 - I Nyoman Restu Dharmayasa
    </div>
  </div>
</body>
</html>
