 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
        
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Transaksi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data
                </button>
                <br></br>
                <table id="transaksi_data" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Tanggal</th>
                    <th>Edit</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $no = 0;
                  $query = mysqli_query($koneksi,"SELECT * FROM tb_transaksi");
                  while($brg =mysqli_fetch_array($query)){
                    $no++
                  ?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $brg['nama'];?></td>
                    <td><?php echo $brg['harga'];?></td>
                    <td><?php echo $brg['jumlah'];?></td>
                    <td><?php echo $brg['tanggal'];?></td>
                    <td>
                    <a onclick="hapus_transaksi(<?php echo $brg['id'];?>)" class="btn btn-sm btn-danger">Hapus</a>
                    <a href="index.php?page=edit_transaksi&id=<?php echo $brg['id'];?>" class="btn btn-sm btn-success">Edit</a>
  
        
                  </td>
                  </tr>
                 <?php } ?>
                  </tbody>
              <!--     <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot> -->
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
      <!-- /.container-fluid -->
    </section>
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="view/transaksi/tambah_transaksi.php">
            <div class="modal-body">
              <div class="form-row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Harga" name="harga"required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Jumlah" name="jumlah" required>
                </div>
                <div class="col">
                  <input type="date" class="form-control" placeholder="Tanggal" name="tanggal" required>
                </div>
              </div>
            
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- Modal View data -->
      
        
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    <script>
      function hapus_transaksi(data_id){
       /*  alert('ok'); */
       /* window.location=("deleted/hapus_data.php?id="+data_id); */
       Swal.fire({
  title: 'Apakah Datanya Akan Dihapus?',
  //showDenyButton: false,
  showCancelButton: true,
  confirmButtonText: 'Hapus Data',
  confirmButtonColor: 'red',
  //denyButtonText: `Kembali`,
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    window.location=("view/transaksi/hapus_transaksi.php?id="+data_id);
  }
})
      }
    </script>