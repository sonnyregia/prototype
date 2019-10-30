<div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
            <ul class="list-group panel">
                
                <li class="list-group-item"><a href="<?php echo base_url()?>"><i class="glyphicon glyphicon-home"></i>Dashboard </a></li>
                
                <?php 
                if ($this->session->userdata('level') == 'manajemen') {
                 ?>
               
                <li>
                  <a href="#demo4" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-th-large"></i>Data ATK  <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <li class="collapse" id="demo4">
                      <a href="barang" class="list-group-item"> Data ATK</a>
                      <a href="merk_barang" class="list-group-item"> Merk ATK</a>
                      <a href="satuan_barang" class="list-group-item"> Satuan ATK</a>
                      
                    </li>
                </li>
                <li>
                  <a href="#demo5" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-folder-open"></i>Data Transaksi ATK  <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <li class="collapse" id="demo5">
                      <a href="barang_masuk" class="list-group-item">Transaksi ATK Masuk</a>
                      <a href="barang_keluar" class="list-group-item">Transaksi ATK Keluar</a>
                      
                    </li>
                </li>
                <li>
                  <a href="#demo6" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-th-large"></i>Data BMN  <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <li class="collapse" id="demo6">
                      <a href="barang_aset" class="list-group-item"> Data Aset</a>
                      <a href="barang_aset_sub" class="list-group-item"> Data Aset Sub</a>
                      <a href="barang_aset_download" class="list-group-item"> Data Aset Master</a>
                      <a href="barang_aset_pinjam" class="list-group-item"> Data Aset Pinjam</a>
                      <a href="barang_aset_kembali" class="list-group-item"> Data Aset Kembali</a>
                      <a href="satuan_aset" class="list-group-item"> Satuan Aset</a>
                      <a href="merk_aset" class="list-group-item"> Merk Aset</a>
                      <a href="ruang" class="list-group-item"> UPB</a>
                     <!--  <a href="merk_barang" class="list-group-item"> Merk Barang</a>
                      <a href="satuan_barang" class="list-group-item"> Satuan Barang</a> -->
                      
                    </li>
                </li>
                <li class="list-group-item"><a href="users"><i class="glyphicon glyphicon-user"></i>Manajemen User </a></li>
                <li class="list-group-item"><a href="<?php echo base_url()?>app/logout"><i class="glyphicon glyphicon-share"></i>Logout </a></li>

                <?php 
                } elseif ($this->session->userdata('level') == 'staff') {
                 ?>

                <li>
                  <a href="#demo4" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-th-large"></i>Data ATK  <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <li class="collapse" id="demo4">
                      <a href="barang" class="list-group-item"> Data ATK</a>
                      <a href="merk_barang" class="list-group-item"> Merk ATK</a>
                      <a href="satuan_barang" class="list-group-item"> Satuan ATK</a>
                      
                    </li>
                </li>
                <li>
                  <a href="#demo5" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-folder-open"></i>Data Transaksi ATK  <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <li class="collapse" id="demo5">
                      <a href="barang_masuk" class="list-group-item">Transaksi ATK Masuk</a>
                      <a href="barang_keluar" class="list-group-item">Transaksi ATK Keluar</a>
                      
                    </li>
                </li>
                <li>
                  <a href="#demo6" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-th-large"></i>Data BMN  <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <li class="collapse" id="demo6">
                     <!--  <a href="barang_aset" class="list-group-item"> Data Aset</a>
                      <a href="barang_aset_sub" class="list-group-item"> Data Aset Sub</a> -->
                    <a href="barang_aset_download" class="list-group-item"> Data Aset</a>
                      <a href="barang_aset_pinjam" class="list-group-item"> Data Aset Pinjam</a>
                      <a href="barang_aset_kembali" class="list-group-item"> Data Aset Kembali</a>
                      <a href="satuan_aset" class="list-group-item"> Satuan Aset</a>
                      <a href="merk_aset" class="list-group-item"> Merk Aset</a>
                      <a href="ruang" class="list-group-item"> UPB</a>
                     <!--  <a href="ruang" class="list-group-item"> Lokasi Aset</a> -->
                     <!--  <a href="merk_barang" class="list-group-item"> Merk Barang</a>
                      <a href="satuan_barang" class="list-group-item"> Satuan Barang</a> -->
                      
                    </li>
                </li>
                <!-- <li class="list-group-item"><a href="users"><i class="glyphicon glyphicon-user"></i>Manajemen User </a></li> -->
                <li class="list-group-item"><a href="<?php echo base_url()?>app/logout"><i class="glyphicon glyphicon-share"></i>Logout </a></li>

                <?php 
                } elseif ($this->session->userdata('level') == 'petugas gudang') {
                 ?>

                <!-- <li>
                  <a href="#demo4" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-th-large"></i>Data Master  <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <li class="collapse" id="demo4">
                      <a href="barang" class="list-group-item"> Data Barang</a>
                      <a href="jenis_barang" class="list-group-item"> Jenis Barang</a>
                      <a href="merk_barang" class="list-group-item"> Merk Barang</a>
                      <a href="supplier" class="list-group-item"> Supplier</a>
                      
                    </li>
                </li> -->
                <li>
                  <a href="#demo5" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-folder-open"></i>Data Transaksi  <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <li class="collapse" id="demo5">
                      <a href="barang_masuk" class="list-group-item">Transaksi Barang Masuk</a>
                      <a href="barang_keluar" class="list-group-item">Transaksi Barang Keluar</a>
                      <a href="app/penjualan" class="list-group-item">Pemesanan Ke Supplier</a>
                      
                    </li>
                </li>
                <!-- <li class="list-group-item"><a href="users"><i class="glyphicon glyphicon-user"></i>Manajemen User </a></li> -->
                <li class="list-group-item"><a href="<?php echo base_url()?>app/logout"><i class="glyphicon glyphicon-share"></i>Logout </a></li>

                <?php 
                } elseif ($this->session->userdata('level') == 'supplier') {
                 ?>



                <li class="list-group-item"><a href="app/pemesanan_supplier"><i class="glyphicon glyphicon-tasks"></i>Daftar Pesanan Barang </a></li>
                <li class="list-group-item"><a href="<?php echo base_url()?>app/logout"><i class="glyphicon glyphicon-share"></i>Logout </a></li>

                <?php } ?>

                <!-- <li>
                  <a href="#demo5" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-home"></i>Proses  <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <li class="collapse" id="demo5">
                      <a href="<?php echo base_url('user')?>" class="list-group-item">2.1 Data User</a>
                      <a href="<?php echo base_url('app/history')?>" class="list-group-item">2.2 Hasil Diagnosa</a>
                    </li>
                </li>
                <li class="list-group-item"><a href="<?php echo base_url()?>app/konsultasi"><i class="glyphicon glyphicon-home"></i>Konsultasi </a></li> -->
                
               <!--  <li class="list-group-item"><a href="<?php echo base_url()?>app/konsultasi"><i class="glyphicon glyphicon-home"></i>Konsultasi </a></li>
                <li class="list-group-item"><a href="<?php echo base_url()?>app/history"><i class="glyphicon glyphicon-home"></i>History Diagnosa </a></li>

                <li class="list-group-item"><a href="<?php echo base_url()?>app/logout"><i class="glyphicon glyphicon-home"></i>Logout </a></li> -->

              </ul>
          </div>