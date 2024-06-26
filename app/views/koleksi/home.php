<?php include '../app/views/templates/header.php'; $no = 1; ?>
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped bg-white">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($data as $k): ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $k['Judul']; ?></td>
                      <td><?= $k['Penulis']; ?></td>
                      <td><?= $k['Penerbit']; ?></td>
                      <td>
                        <a href="<?= urlTo('/koleksi/'.$k['KoleksiID'].'/delete') ?>" class="btn btn-danger">
                          Hapus
                        </a>
                      </td>
                    </tr>
                  <?php endforeach ?>
                  </tbody>
                
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
<?php include '../app/views/templates/footer.php'; ?>