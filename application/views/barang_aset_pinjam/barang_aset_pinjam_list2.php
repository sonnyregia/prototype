<div class="row">
    <div class="col-md-4">
        <a href="barang_aset_pinjam/create" class="btn btn-primary">Tambah Transaksi</a>
        <!-- <a href="app/export_penjualan" target="_blank" class="btn btn-primary">Export</a> -->
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
    <div class="col-md-12">
        <table class="table table-bordered" style="margin-bottom: 10px" id="example">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Pegawai</th>
                    <th>Jabatan</th>
                    <th>Kode Aset</th>
                    <th>Nama Aset</th>
                    <th>Satuan Aset</th>
                    <th>Tanggal Pinjam</th>
                
                    <th>Pilihan</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = $this->db->query("SELECT * FROM barang_aset_pinjam as a,barang_aset as b, barang_aset_sub as c,satuan_aset as d where a.kode_aset=b.kode_aset and a.kode_aset and a.seri=c.seri and a.id_satuan_aset=d.id_satuan_aset and a.id_aset_pinjam='$rs->id_aset_pinjam' ");
                    $no = 1;
                foreach ($sql->result() as $row) {
                 ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row->nama_pegawai; ?></td>                    
                    <td><?php echo $row->jabatan; ?></td>
                    <td><?php echo $row->kode_aset; ?></td>                    
                    <td><?php echo $row->nama_aset; ?></td>
                    <td><?php echo $row->nama_satuan; ?></td>                    
                    <td><?php echo $row->nama_aset; ?></td>

                    <td>
                        <a href="barang_aset_pinjam/detail/<?php echo $row->id_aset_pinjam ?>" class="btn btn-info btn-sm">detail</a>
                       <!--  <a href="barang_aset_download/hapus/<?php echo $row->kode_aset ?>" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm('Are You Sure ?')">hapus</a> -->
                        <!-- <a href="barang_aset_pinjam/cetak/<?php echo $row->kode_aset ?>" target="_blank" class="btn btn-success btn-sm">cetak</a> -->
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>