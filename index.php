<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Form Pendaftaran Kegiatan Kampus</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="css/style.css">
</head>

<body>
     <header class="text-center py-4 bg-primary text-white shadow-sm">
          <h2>Form Pendaftaran Kegiatan Kampus</h2>
          <p class="lead mb-0">Isi data berikut untuk mengikuti kegiatan</p>
     </header>

     <div class="wrapper my-4">
          <div class="container bg-white p-4 rounded-4 shadow-lg" style="max-width: 700px;">
               <h3 class="text-center mb-4 text-primary fw-semibold">Data Peserta</h3>
               <form action="hasil.php" method="post" id="form">

                    <div class="mb-3">
                         <label for="nama" class="form-label fw-semibold">Nama Lengkap</label>
                         <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama Anda" required>
                    </div>

                    <div class="mb-3">
                         <label for="email" class="form-label fw-semibold">Email</label>
                         <input type="email" id="email" name="email" class="form-control" placeholder="contoh: nama@email.com" required>
                    </div>

                    <div class="mb-3">
                         <label for="hp" class="form-label fw-semibold">Nomor HP</label>
                         <input type="text" id="hp" name="hp" class="form-control" placeholder="08xxxxxxxxxx" required>
                    </div>

                    <div class="mb-3">
                         <label for="prodi" class="form-label fw-semibold">Program Studi</label>
                         <select id="prodi" name="prodi" class="form-select" required>
                              <option selected disabled>Pilih Program Studi</option>
                              <option value="Informatika">Informatika</option>
                              <option value="Sistem Informasi">Sistem Informasi</option>
                              <option value="Teknik Elektro">Teknik Elektro</option>
                              <option value="Manajemen">Manajemen</option>
                         </select>
                    </div>

                    <div class="mb-3">
                         <label class="form-label fw-semibold">Jenis Kelamin</label>
                         <div class="form-check">
                              <input class="form-check-input" type="radio" name="jk" value="Laki-laki" id="jk1" required>
                              <label class="form-check-label" for="jk1">Laki-laki</label>
                         </div>
                         <div class="form-check">
                              <input class="form-check-input" type="radio" name="jk" value="Perempuan" id="jk2" required>
                              <label class="form-check-label" for="jk2">Perempuan</label>
                         </div>
                    </div>

                    <div class="mb-3">
                         <label class="form-label fw-semibold">Bidang yang Diminati</label>
                         <div class="row">
                              <div class="col-md-6">
                                   <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="minat[]" value="Kepemimpinan" id="check1">
                                        <label class="form-check-label" for="check1">Kepemimpinan</label>
                                   </div>
                                   <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="minat[]" value="Teknologi" id="check2">
                                        <label class="form-check-label" for="check2">Teknologi</label>
                                   </div>
                              </div>
                              <div class="col-md-6">
                                   <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="minat[]" value="Kreativitas" id="check3">
                                        <label class="form-check-label" for="check3">Kreativitas</label>
                                   </div>
                                   <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="minat[]" value="Kewirausahaan" id="check4">
                                        <label class="form-check-label" for="check4">Kewirausahaan</label>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="text-end">
                         <button type="submit" name="Submit" class="btn btn-primary px-4 py-2 rounded-pill shadow-sm">
                              Kirim Data
                         </button>
                    </div>
               </form>
          </div>
     </div>

     <footer class="text-center py-3 bg-light border-top mt-5">
          <p class="mb-0 text-secondary small">© 2025 Kampus Kita | Dibuat untuk Praktikum Progdas</p>
     </footer>
</body>
</html>
