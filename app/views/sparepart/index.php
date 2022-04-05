<div class="container mt-5">

    <div class="row">
        <div class="col-6">
            <h3>List Sparepart</h3>

            <?php foreach ($data['brg'] as $brg) :?>
                <ul>
                    <li><?= $brg['kode']; ?></li> 
                    <li><?= $brg['description']; ?></li> 
                    <li><?= $brg['detail']; ?></li> 
                    <li><?= $brg['qty']; ?></li> 
                </ul>
                <?php endforeach; ?>

        </div>
    </div>

</div>