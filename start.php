<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to bottom right, #dbeafe, #93c5fd);
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 100%;
      max-width: 500px;
    }

    h1 {
      color: #1e3a8a;
      margin-bottom: 8px;
    }

    h2 {
      color: #374151;
      font-size: 18px;
      margin-bottom: 20px;
    }

    .menu {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 15px;
      margin-bottom: 20px;
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
      text-decoration: none;
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
    }

    a {
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Home Project</h1>
    <h2>Pilih Project yang Ingin Dibuka</h2>

    <div class="menu">
      <a href="tugas1/HomeT1.php" class="card">Project 1<br></a>
      <a href="tugas2/HomeT2.php" class="card">Project 2<br></a>
    </div>

    <div class="footer">
      2405551089 - I Nyoman Restu Dharmayasa
    </div>
  </div>
</body>
</html>