<div class="container">
    <div class="card">
        <div class="card-body">
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
            Tambah Data
        </button>
        <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" name="kode" class="form-control" id="kode" required>
                    </div>
                    <div class="form-group">
                        <label for="kode">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="kode">Kaprodi</label>
                        <input type="text" name="kaprodi" class="form-control" id="kaprodi" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Kaprodi</th>
                            <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once("Controllers/Prodi.php");
                $row = $prodi->index();
                foreach($row as $item):
                ?>
                <tr>
                    <td></td>
                    <td><?= $item['kode'] ?></td>
                    <td><?= $item['nama'] ?></td>
                    <td><?= $item['kaprodi'] ?></td>
                    <td>
                        <form method="post">
                            <input type="hidden" name="id" value="<?= $item['id'] ?>">
                            <input type="hidden" name="type" value="delete">
                            <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
                <?php
                endforeach;
                if (isset ($_POST['type'])) {
                    if ($_POST['type'] == 'delete') {
                        $prodi->delete($_POST['id']);
                        echo '<script>alert("hapusberhasil")</script>
                        <meta http-equiv="refresh" content="0"; url="?url=prodi">'
                        ;
                    }
                }
                ?>
            </tbody>
                  <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Kaprodi</th>
                        <th>Aksi</th>
                    </tr>
                  </tfoot>
            </table>
        </div>
    </div>
</div>