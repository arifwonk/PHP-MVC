<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Insert data sparepart
            </button>
            <br><br>
            <h3>List Sparepart</h3>
            <ul class="list-group">
                <?php foreach ($data['brg'] as $brg) : ?>
                    <li class="list-group-item">
                        <?= $brg['kode']; ?>
                        <a href="<?= BASEURL; ?>/sparepart/hapus/<?= $brg['id'] ?>" class="badge bg-danger rounded-pill float-end ms-1" onclick="return confirm('Are you sure...!')">delete</a>
                        <a href="<?= BASEURL; ?>/sparepart/ubah/<?= $brg['id'] ?>" class="badge bg-warning rounded-pill float-end ms-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $brg['id']; ?>">edit</a>
                        <a href="<?= BASEURL; ?>/sparepart/detail/<?= $brg['id'] ?>" class="badge bg-success rounded-pill float-end ms-1">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Insert data sparepart</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/sparepart/tambah" method="post">
                <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="kode" class="form-label">Item Kode</label>
                        <input type="number" class="form-control" id="kode" name="kode">
                    </div>
                    <div class="form-group">
                        <label for="deskrip" class="form-label">Description</label>
                        <input type="text" class="form-control" id="deskrip" name="deskrip">
                    </div>
                    <div class="form-group">
                        <label for="detail" class="form-label">Long description</label>
                        <input type="text" class="form-control" id="detail" name="detail">
                    </div>
                    <div class="form-group">
                        <label for="qty" class="form-label">Qty</label>
                        <input type="number" class="form-control" id="qty" name="qty">
                    </div>
                    <div>
                    <div class="form-group">
                            <label for="mrp">MRP</label>
                            <select class="form-control" id="mrp" name="mrp">
                                <option placeholder="" ></option>
                                <option value="VB">VB</option>
                                <option value="ND">ND</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Insert</button>
                </form>
            </div>
        </div>
    </div>
</div>