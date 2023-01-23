<?php
    $id    = $_GET['id'];
    $query = mysqli_query($koneksi,"SELECT * FROM `tb_transaksi` WHERE id='$id'");
    $view  = mysqli_fetch_array($query);
    ?>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Barang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='post' action='view/transaksi/update_transaksi.php' enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="Nama" name='nama' value="<?php echo $view['nama'];?>">
                        <input type="text" class="form-control" name='id' value="<?php echo $view['id'];?>" hidden>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" placeholder="harga" name='harga' value="<?php echo $view['harga'];?>">
                      </div>
                      </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Jumlah</label>
                        <input type="text" class="form-control" placeholder="jumlah" name='jumlah' value="<?php echo $view['jumlah'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                        <div class="form-group">
                        <label>Tanggal</label>
                        <input type="text" class="form-control" rows="3" placeholder="tanggal"  name='tanggal' value="<?php echo $view['tanggal'];?>"></textarea>
                      </div>
                    </div>
              </div>
              <div class="row">
                    <button type="submit" class="btn btn-sm btn-info">Simpan</button>
                    </div>
                  </form>
              </div>
               <!-- /.card-body -->
            </div>
    </div>
</section>