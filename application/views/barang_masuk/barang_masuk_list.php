<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" />
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" type="text/javascript"></script>
<div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('barang_masuk/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('barang_masuk/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('barang_masuk'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>

                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px" id="selector">
            <tr>
                     </table>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Barang</th>
        <th>Tanggal</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Supplier</th>
        <th>Action</th>
            </tr>
        </thead>
        <tbody><?php
            foreach ($barang_masuk_data as $barang_masuk)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $barang_masuk->kode_barang ?></td>
            <td><?php echo $barang_masuk->tanggal ?></td>
            <td><?php echo $barang_masuk->jumlah ?></td>
            <td><?php echo $barang_masuk->harga ?></td>
            <td><?php echo $barang_masuk->supplier ?></td>
            <td style="text-align:center" width="200px">
                <?php  
                echo ' | '; 
                echo anchor(site_url('barang_masuk/update/'.$barang_masuk->id_barang_masuk),'Update'); 
                echo ' | '; 
                echo anchor(site_url('barang_masuk/delete/'.$barang_masuk->id_barang_masuk),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                ?>
            </td>
        </tr>
                <?php
            }
            ?>
        </tbody>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
                <a href="barang_masuk/cetak/<?php echo $barang_masuk->id_barang_masuk ?>" target="_blank" class="btn btn-success">cetak</a>
        </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
        <script type="text/javascript">
       $(document).ready(function() {
          $('#example').dataTable( {
              "searching": false
          } );
        } );
</script>