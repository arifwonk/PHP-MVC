<div class="container mt-5">

    <div class="row">
        <div class="col-6">
            <h3>List Sparepart</h3>
            <ul class="list-group">
                <?php foreach ($data['brg'] as $brg) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $brg['kode']; ?>
                        <a href="<?= BASEURL; ?>/sparepart/detail/<?= $brg['id'] ?>" class ="badge bg-primary" >detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>

</div>