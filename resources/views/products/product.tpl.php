<!-- i messaggi andranno inseriti su un componente -->
<div class="alert alert-success" role="alert">
  Bentornato <?= $username ?> - <?= $loginMessage ?>
</div>

<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php foreach($products as $product): ?>
        <div class="col">
          <div class="card shadow-sm">
            <img width="90%" src="<?= $product['immage'] ?>">

            <div class="card-body">
              <p class="card-text"><?= $product['name'] ?></p>
              <p class="card-text"><?= $product['description'] ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Aggiungi al carrello</button>
                </div>
                <small class="text-muted">Prezzo <?= $product['price'] ?>€</small>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>