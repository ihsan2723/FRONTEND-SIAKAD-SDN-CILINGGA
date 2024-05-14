<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../css/tampilmapel1-6.css" />
</head>

<body>
  <div class="row">
    <div class="col-md-3">
      <div class="sidebar">
        <header>
          <img src="../gambar/logosd.png" alt="" width="100" height="100" />
        </header>
        <ul>
          <li class="button">
            <i class="bi bi-grid-fill"></i>
            <a href="../dashboard.php">Dashboard</a>
          </li>
          <li class="button">
            <i class="bi bi-house-add-fill"></i>
            <a href="../profil_sekolah/profilsekolah.php">Profil Sekolah</a>
          </li>
          <li class="button">
            <i class="bi bi-person-plus-fill"></i>
            <a href="guru.php">Guru</a>
          </li>
          <li class="button">
            <i class="bi bi-book-half"></i>
            <a href="#" class="feat-btn">Pelajaran <i class="fas fa-caret-down dropdown"></i></a>
            <ul class="feat-show">
              <li>
                <a href="../mapel/mapel.php"><i class="bi bi-book-half"></i>Mata Pelajaran</a>
              </li>
              <li>
                <a href="../jdwl_mapel/jadwalmapel.php"><i class="bi bi-book-half"></i>Jadwal Pelajaran</a>
              </li>
            </ul>
          </li>
          <li class="button">
            <i class="i bi-people-fill"></i>
            <a href="../siswa/siswa.php">Siswa</a>
          </li>
          <li class="button">
            <i class="fa-solid fa-clipboard-user"></i>
            <a href="../absensi/absensi.php" style="margin-left: 8px">Absensi</a>
          </li>
          <li class="button">
            <i class="fa-solid fa-list-check"></i>
            <a href="../nilai/nilai.php">Nilai</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-md-9">
      <div class="container">
        <nav class="navbar">
          <div id="indikator">
            <a href="mapelkls4.php" class="bi bi-arrow-left"></a>
            <h5>Halaman Tampil Mapel Kelas 4</h5>
          </div>
          <ul>
            <li>Admin |</li>
            <li>Widia Nurindri</li>
            <li id="logout">
              <i class="bi bi-box-arrow-right"></i>
              <a id="out" href="../login.php">Logout</a>
            </li>
          </ul>
        </nav>
        <hr />
        <div class="box">
          <div class="container">
            <div class="tambah">
              <a href="../mapel/tambahmapelkls4.php">
                <h5 class="bi bi-plus-square-fill" style="margin: 10px">
                  Tambah
                </h5>
              </a>
            </div>
            <div class="tabel">
              <table>
                <tr>
                  <th>No</th>
                  <th>Kode Mata Pelajaran</th>
                  <th>Nama Mapel</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>001</td>
                  <td>Bahasa Indonesia</td>
                  <td>
                    <a id="hapus" class="bi bi-trash-fill" onclick="confirm('Apakah anda yakin ingin menghapus?')" href=""></a>
                    <a id="edit" class="bi bi-pencil-fill" href="editmapelkls4.php"></a>
                  </td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>002</td>
                  <td>IPA</td>
                  <td>
                    <a id="hapus" class="bi bi-trash-fill" onclick="confirm('Apakah anda yakin ingin menghapus?')" href=""></a>
                    <a id="edit" class="bi bi-pencil-fill" href="editmapelkls4.php"></a>
                  </td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>003</td>
                  <td>IPS</td>
                  <td>
                    <a id="hapus" class="bi bi-trash-fill" onclick="confirm('Apakah anda yakin ingin menghapus?')" href=""></a>
                    <a id="edit" class="bi bi-pencil-fill" href="editmapelkls4.php"></a>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <a id="hapus" class="bi bi-trash-fill" onclick="confirm('Apakah anda yakin ingin menghapus?')" href=""></a>
                    <a id="edit" class="bi bi-pencil-fill" href="editmapelkls4.php"></a>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <a id="hapus" class="bi bi-trash-fill" onclick="confirm('Apakah anda yakin ingin menghapus?')" href=""></a>
                    <a id="edit" class="bi bi-pencil-fill" href="editmapelkls4.php"></a>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <a id="hapus" class="bi bi-trash-fill" onclick="confirm('Apakah anda yakin ingin menghapus?')" href=""></a>
                    <a id="edit" class="bi bi-pencil-fill" href="editmapelkls4.php"></a>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <a id="hapus" class="bi bi-trash-fill" onclick="confirm('Apakah anda yakin ingin menghapus?')" href=""></a>
                    <a id="edit" class="bi bi-pencil-fill" href="editmapelkls4.php"></a>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <a id="hapus" class="bi bi-trash-fill" onclick="confirm('Apakah anda yakin ingin menghapus?')" href=""></a>
                    <a id="edit" class="bi bi-pencil-fill" href="editmapelkls4.php"></a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <footer>
        <h3 class="text-light">CopyRight 2024_Kelompok 2</h3>
      </footer>
    </div>
  </div>
  <script>
    document.querySelectorAll('.feat-btn').forEach((item) => {
      item.addEventListener('click', (event) => {
        const parent = item.parentElement;
        parent.classList.toggle('active');
      });
    });
  </script>
</body>

</html>