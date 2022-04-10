<div class="container mt-3">

    <div class="row">
        <div class="col-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                Insert data sparepart
            </button>
            <br><br>
            <h3>List Sparepart</h3>
            <ul class="list-group">
                <?php foreach ($data['brg'] as $brg) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $brg['kode']; ?>
                        <a href="<?= BASEURL; ?>/sparepart/detail/<?= $brg['id'] ?>" class="badge bg-primary">detail</a>
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
                <h5 class="modal-title" id="judulModal">Insert data sparepart</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/sparepart/tambah" method="post">

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
                    <label for="mrp" class="form-label">Datalist</label>
                    <input class="form-control" list="datalistOptions" id="mrp" name= "mrp" placeholder="Type to search..." autocomplete="off">
                    <datalist id="datalistOptions">
                        <option value="VB">
                        <option value="ND">
                    </datalist>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Insert</button>
                </form>
            </div>
        </div>
    </div>
</div>