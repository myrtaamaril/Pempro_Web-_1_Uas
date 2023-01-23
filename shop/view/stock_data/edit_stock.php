<?php
    $id    = $_GET['id'];
    $query = mysqli_query($koneksi,"SELECT * FROM tb_stock WHERE id='$id'");
    $view  = mysqli_fetch_array($query);
    ?>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Stock</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='post' action='view/stock_data/update_datastock.php' enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="Nama" name='nama' value="<?php echo $view['nama'];?>">
                        <input type="text" class="form-control" placeholder="Nama" name='id' value="<?php echo $view['id'];?>" hidden>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Kode</label>
                        <input type="text" class="form-control" placeholder="Kode" name='kode' value="<?php echo $view['kode'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                        <div class="form-group">
                        <label>Stock</label>
                        <input type="text" class="form-control" rows="3" placeholder="stock"  name='stock' value="<?php echo $view['stock'];?>"></textarea>
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