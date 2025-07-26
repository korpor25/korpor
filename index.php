<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>งาน lab</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .lab-img {
      height: 200px;
      object-fit: cover;
      border-radius: 8px;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">My Labs</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container py-5">
    <h2 class="mb-4 text-center">เลือกแบบฝึกหัด (Lab)</h2>

    <div class="row">
      <?php
        // กำหนด array ของรูปภาพ
        $images = [
          "img/lab01.png",
          "img/lab02.png",
          "img/lab03.png",
          "img/lab04.png",
          "img/lab05.png",
          "img/lab06.png",
          "img/lab07.png",
          "img/lab08.png"
        ];

        // คำอธิบายเฉพาะของแต่ละ lab
        $descriptions = [
          "Lab 01: ผลลัพธ์ : B ",
          "Lab 02: ผลลัพธ์ : Condition 1 is true ",
          "Lab 03: ผลลัพธ์ : x is even and greater than 5 ",
          "Lab 04: ผลลัพธ์ : Positive ",
          "Lab 05: ผลลัพธ์ : X is greater than Y ",
          "Lab 06: ผลลัพธ์ : Hello C Programming ",
          "Lab 07: ผลลัพธ์ : Ten ",
          "Lab 08: ผลลัพธ์ : Increasing Order "
        ];

        for ($i = 1; $i <= 8; $i++) {
          $imgSrc = isset($images[$i - 1]) && file_exists($images[$i - 1]) ? $images[$i - 1] : 'https://via.placeholder.com/600x200?text=Lab+0' . $i;
          $desc = isset($descriptions[$i - 1]) ? $descriptions[$i - 1] : "ไม่มีคำอธิบายสำหรับ Lab นี้";

          echo '
          <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm">
              <img src="' . $imgSrc . '" class="card-img-top lab-img" alt="Lab 0' . $i . '">
              <div class="card-body">
                <h5 class="card-title">Lab 0' . $i . '</h5>
                <p class="card-text">' . $desc . '</p>
                <a href="lab0' . $i . '.php" class="btn btn-primary">เปิด Lab 0' . $i . '</a>
              </div>
            </div>
          </div>';
        }
      ?>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
