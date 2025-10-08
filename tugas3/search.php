<?php
include "koneksi.php";

$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
$keyword = $conn->real_escape_string($keyword);

if ($keyword == "") {
  $sql = "SELECT * FROM mahasiswa ORDER BY id DESC";
} else {
  $sql = "SELECT * FROM mahasiswa 
          WHERE nama LIKE '%$keyword%' 
          OR nim LIKE '%$keyword%' 
          ORDER BY id DESC";
}

$result = $conn->query($sql);
$data = [];

if ($result && $result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $data[] = $row;
  }
}

header("Content-Type: application/json");
echo json_encode($data);
?>
