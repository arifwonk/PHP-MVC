<div class="container mt-5">

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Material code: <?= $data['brg']['kode']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted">Description: <?= $data['brg']['deskrip']; ?></h6>
    <p class="card-text">Long Description: <?= $data['brg']['detail']; ?></p>
    <p class="card-text">Qty: <?= $data['brg']['qty']; ?></p>
    <p class="card-text">MRP: <?= $data['brg']['mrp']; ?></p>
    <a href="<?= BASEURL; ?>/sparepart" class="card-link">Back</a>
  </div>
</div>

</div>