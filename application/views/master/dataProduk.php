<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?= $page_title; ?></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-xs" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Kode Produk</th>
                        <th>Brand</th>
                        <th>Nama Barang</th>
                        <th>Satuan</th>
                        <th>Kategori</th>
                        <th>Stock</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Barcode</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($table->result() as $table): ?>
                    <tr>
                        <td><?=$table->kode_produk;?></td>
                        <td><?=$table->brand;?></td>
                        <td><?=$table->nama_barang;?></td>
                        <td><?=$table->satuan;?></td>
                        <td><?=$table->kategori;?></td>
                        <td><?=$table->stock;?></td>
                        <td><?=$table->harga_jual;?></td>
                        <td><?=$table->harga_beli;?></td>
                        <td><?=$table->kode_barcode;?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>