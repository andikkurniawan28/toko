<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?= $page_title; ?></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-xs" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Level</th>
                        <th>Alamat</th>
                        <th>Kota</th>
                        <th>Kode Pos</th>
                        <th>No Telepon</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($table->result() as $table): ?>
                    <tr>
                        <td><?=$table->username;?></td>
                        <td><?=$table->level;?></td>
                        <td><?=$table->alamat;?></td>
                        <td><?=$table->kota;?></td>
                        <td><?=$table->kode_pos;?></td>
                        <td><?=$table->no_telepon;?></td>
                        <td><?=$table->tempat_lahir;?></td>
                        <td><?=$table->tanggal_lahir;?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>