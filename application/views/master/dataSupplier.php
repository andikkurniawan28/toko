<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?= $page_title; ?></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-xs" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Kode Supplier</th>
                        <th>Nama Supplier</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($table->result() as $table): ?>
                    <tr>
                        <td><?=$table->kode_supplier;?></td>
                        <td><?=$table->nama_supplier;?></td>
                        <td><?=$table->alamat;?></td>
                        <td><?=$table->telepon;?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>