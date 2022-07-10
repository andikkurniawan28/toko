
<p align="right">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahData">
        Tambah Data
    </button>
</p>

<?= $this->session->flashdata('message'); ?>

<div class="card shadow mb-4">

    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?= $page_title; ?></h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-sm" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Kode Supplier</th>
                        <th>Nama Supplier</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($table->result() as $table): ?>
                    <tr>
                        <td><?=$table->kode_supplier;?></td>
                        <td><?=$table->nama_supplier;?></td>
                        <td><?=$table->alamat;?></td>
                        <td><?=$table->telepon;?></td>
                        <td>

                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editData<?=$table->kode_supplier;?>">
                                Edit
                            </button>

                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusData<?=$table->kode_supplier;?>">
                                Hapus
                            </button>

                        </td>
                    </tr>

                    <!-- Edit Data Modal -->
                    <div class="modal fade" id="editData<?=$table->kode_supplier;?>" tabindex="-1" role="dialog" aria-labelledby="editDataLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tambahDataLabel">Edit Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?=base_url('supplier/editSupplier');?>" method="post">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Nama Supplier</label>
                                            <input type="hidden" name="kode_supplier" value="<?=$table->kode_supplier;?>">
                                            <input type="text" name="nama_supplier" class="form-control" id="exampleFormControlInput1" value="<?=$table->nama_supplier;?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Alamat</label>
                                            <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" value="<?=$table->alamat;?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Nomor Telepon</label>
                                            <input type="number" name="telepon" class="form-control" id="exampleFormControlInput1" maxlength="13" value="<?=$table->telepon;?>">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------------------->

                    <!-- Hapus Data Modal -->
                    <div class="modal fade" id="hapusData<?=$table->kode_supplier;?>" tabindex="-1" role="dialog" aria-labelledby="hapusDataLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tambahDataLabel">Hapus Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Apakah Anda yakin akan menghapus data ini ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                    <a href="<?=base_url('supplier/hapusSupplier/'.$table->kode_supplier);?>" class="btn btn-primary">Hapus</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------------------->

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- Tambah Data Modal -->
<div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="tambahDataLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahDataLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?=base_url('supplier/tambahSupplier');?>" method="post">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Supplier</label>
                        <input type="text" name="nama_supplier" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nomor Telepon</label>
                        <input type="number" name="telepon" class="form-control" id="exampleFormControlInput1" maxlength="13">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

