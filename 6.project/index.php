<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Program Ujian Arkademian</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/fontawesome.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-primary mb-3 shadow-sm">
    <a class="navbar-brand" href="#"><i class="fas fa-graduation-cap"></i> UJIAN ARKADEMIAN</a>
  </nav>

  <!-- Konten -->
  <main class="container">
    <div class="card shadow-sm">

      <div class="card-header bg-info">
        List Programmer
      </div>

      <div class="card-body">
        <div class="row">
          <div class="col-lg-9">
            <h5 class="card-title">Daftar Nama-Nama Programmer</h5>
          </div>
          <div class="col-lg-3">
            <button class="btn btn-info" data-toggle="modal" data-target="#prog"> <i class="fas fa-plus"></i> Tambah Programmer</button>
          </div>
        </div>
      </div>

      <?php include 'koneksi.php';
      $coba = "Select * from users";
      $query = mysqli_query($koneksi, $coba);
      $i = 1;
      while ($data = mysqli_fetch_array($query)) {
        $id = $data["id"];
        ?>
        <div class="card ml-3 mr-3 mb-2 mt-2">
          <div class="card-body">
            <h5 class="card-title"><?= $i++ . ". " . $data["name"]; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">Keahlian</h6>
            <p class="card-text">
              <?php
              $lanjut = "Select skills.name from skills where user_id ='$id'";
              $query2 = mysqli_query($koneksi, $lanjut);
              while ($skill = mysqli_fetch_array($query2)) {
                echo $skill["name"] . ", ";
              }
              ?>
            </p>
            <button class="btn btn-info" data-toggle="modal" data-id="<?= $data["id"]; ?>" data-target="#modalbox"><i class="fas fa-plus"></i> Tambah Keahlian</button>
          </div>
        </div>
      <?php } ?>
    </div>
  </main>
  <!-- Akhir Konten -->

  <!-- Footer -->
  <div class="footer mt-5">
    <div class="card shadow-lg">
      <div class="card-header text-center text-black-50">
        <blockquote class="blockquote mb-0">
          <footer class="blockquote-footer">Created by Marvin Daniel Pekuwali 2019
          </footer>
        </blockquote>
      </div>
    </div>
  </div>
  <!-- Akhir Footer -->

  <div class="modal fade" id="prog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="tambah_programmer.php" method="POST">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Programmer</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="nama">Nama Programmer</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama Programmer">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal Box Skill-->
  <div class="modal fade" id="modalbox" tabindex="-1" role="dialog" aria-labelledby="example" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="tambah_skill.php" method="POST">
          <div class="modal-header">
            <h5 class="modal-title" id="example">Tambah Keahlian/Skill</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="skill">Skill</label>
              <input type="text" class="form-control" id="skill" name="skill" placeholder="Input Skill">
            </div>
            <div class="isi-id">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Akhir Modal Box -->


  <script src="assets/js/jquery-3.4.1.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/sweetalert.min.js"></script>
  <script>
    $(document).ready(function() {

      $('#modalbox').on('show.bs.modal', function(e) {

        var id = $(e.relatedTarget).data('id');

        //menggunakan fungsi ajax untuk pengambilan data
        var data = "<input type='hidden' name='id' value= " + id + ">";
        $(".isi-id").html(data); //menampilkan data ke dalam modal

      })
    });
  </script>
</body>

</html>