<?php
include ('../conf/config.php');




$query = mysqli_query($koneksi,"SELECT count(*) as JMLBARANG FROM TB_BARANG");
while($cek =mysqli_fetch_array($query)){
  $JMLBARANG=$cek['JMLBARANG'];
}


$queryT = mysqli_query($koneksi,"SELECT count(*) as tr FROM tb_transaksi");
while($cekT =mysqli_fetch_array($queryT)){
  $tot_transaksi=$cekT['tr'];
}



$qus = mysqli_query($koneksi,"SELECT count(*) as us FROM tbusers");
while($usaaa =mysqli_fetch_array($qus)){
  $tot_user=$usaaa['us'];
}



?>


<section class="content" >
      <div class="container-fluid" >
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $JMLBARANG; ?></h3>

                <p>JUMLAH BARANG</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $tot_transaksi ?></h3>

                <p>TOTAL TRANSAKSI</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
       
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $tot_user?></h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
 
            </div>
          </div>
          <!-- ./col -->
      <!--     <div class="col-lg-3 col-6">
       
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>

            </div>
          </div> -->
          <!-- ./col -->
        </div>
        <!-- /.row -->
       </section>