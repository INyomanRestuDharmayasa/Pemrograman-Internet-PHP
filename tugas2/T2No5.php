<?php
$mahasiswa = [
  ["nim" => "2305551008", "nama" => "Bryant Alexandrew Christian Guntoro", "umur" => 20, "prodi" => "Teknologi Informasi"],
  ["nim" => "2305551145", "nama" => "Kadek Elga Giri Mahendra", "umur" => 20, "prodi" => "Teknologi Informasi"],
  ["nim" => "2405551087", "nama" => "Pande Putu Satya Naraya Adyana", "umur" => 19, "prodi" => "Teknologi Informasi"],
  ["nim" => "2405551088", "nama" => "I Gede Puterayasa", "umur" => 19, "prodi" => "Teknologi Informasi"],
  ["nim" => "2405551089", "nama" => "I Nyoman Restu Dharmayasa", "umur" => 19, "prodi" => "Teknologi Informasi"],
  ["nim" => "2405551090", "nama" => "I Wayan Arya Wikananda", "umur" => 19, "prodi" => "Teknologi Informasi"],
  ["nim" => "2405551091", "nama" => "I Wayan Juana Satya Adinata", "umur" => 19, "prodi" => "Teknologi Informasi"],
  ["nim" => "2405551092", "nama" => "Ogek Bintang Sarestumas Kartika", "umur" => 19, "prodi" => "Teknologi Informasi"],
  ["nim" => "2405551093", "nama" => "Elika Putri Wicaksana", "umur" => 19, "prodi" => "Teknologi Informasi"],
  ["nim" => "2405551094", "nama" => "Mahaprama Danesh Hiswara", "umur" => 19, "prodi" => "Teknologi Informasi"]
];
?>
<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Data Mahasiswa</title>

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
    background:rgba(255,255,255,0.97);
    padding:20px;
    border-radius:15px;
    box-shadow:0 8px 20px rgba(0,0,0,0.12);
    width:700px;
    text-align:center;
  }

  h3 {
    margin:0 0 15px;
    font-size:24px;
    font-weight:700;
    color:#1e3a8a;
  }

  table {
    width:100%;
    border-collapse:collapse;
    font-size:14px;
    margin-top:10px;
  }

  th, td {
    padding:10px;
    border:1px solid rgba(0,0,0,0.1);
  }

  th {
    background:#3b82f6;
    color:#fff;
    font-weight:600;
    text-align:center;
  }

  td {
    background:#fff;
    text-align:left;
  }

  td.center {
    text-align:center;
  }

  tr:hover td {
    background:linear-gradient(135deg, #60a5fa, #3b82f6);
    color:#fff;
    transition:0.3s;
  }
</style>
</head>
<body>
  <div class="container">
    <h3>Data Mahasiswa</h3>
    <table>
      <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Umur</th>
        <th>Program Studi</th>
      </tr>
      <?php
      $no = 1;
      foreach ($mahasiswa as $mhs) {
        echo "<tr>";
        echo "<td class='center'>{$no}</td>";
        echo "<td class='center'>{$mhs['nim']}</td>";
        echo "<td>{$mhs['nama']}</td>";
        echo "<td class='center'>{$mhs['umur']}</td>";
        echo "<td>{$mhs['prodi']}</td>";
        echo "</tr>";
        $no++;
      }
      ?>
    </table>
  </div>
</body>
</html>
