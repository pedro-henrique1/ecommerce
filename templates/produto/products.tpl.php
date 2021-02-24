<?php
$product = $data['product'];

$product['price'] = number_format($product['price'], 2, ",", ".");
$product['description'] = substr($product['description'], 0, 310) . '...';

?>
<div class="produto">
    <div class="card image">
        <img class="card-img-top w-520 h-476" src="/upload/<?php echo $product['image'] ?> " alt="image produto">
    </div>

    <div class="card description">
        <div class="card-body">
            <h2 class="card-title"><?php echo $product['name'] ?></h2>
            <p class="description"><?php echo $product['description'] ?></p>
            <div class="row col-sm mt-5">
                <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="far fa-star" aria-hidden="true"></i>
                    <i class="far fa-star" aria-hidden="true"></i>
                </div>
                <span class="cod ml-3 mt-4">(cod.<?php echo $product['reference'] ?>)</span>
            </div>
            <hr>
            <div class="row col-sm voltagem">
                <span class="voltagem">Voltagem: <strong><?php echo $product['voltagem'] ?>v</strong></span>
            </div>
            <hr>
            <div class="row col-sm compra">
                <a href="#" role="button">
                    <button type="button" class="btn btn-success btn-lg w-5"><i class="fa fa-cart-plus" aria-hidden="true"></i> comprar
                    </button>
                </a>
                <div class="form-group frete">
                    <form action="" method="post" class="form-frete">
                        <label class="label" for="frete">Calcular frete e prazo
                            <input type="text" class="form-control cep input-frete" name="frete" id="frete" placeholder="calcular">
                        </label>
                        <button type="button" class="btn btn-primary">ok</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>