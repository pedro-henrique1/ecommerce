<?php
$product = $data['product'];

$product['price'] = number_format($product['price'], 2, ",", ".");
$product['description'] = substr($product['description'], 0, 200) . '...';

?>

<div class="produto ">
    <div class="card">
        <img class="card-img-top mt-2" src="/upload/<?php echo $product['image'] ?> " style="width: auto !important;" alt="">
        <div class="card-body">
            <h4 class="card-title"><?php echo $product['name'] ?></h4>
            <p><?php echo $product['description'] ?></p>
            <span class="cod">(cod.<?php echo $product['reference'] ?>)</span>
            <div class="star">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="far fa-star" aria-hidden="true"></i>
                <i class="far fa-star" aria-hidden="true"></i>
            </div>
            <hr>
            <span class="voltagem">Voltagem: <strong>220v</strong></span>
            <hr>
            <a href="" class="link">
                <span class="info_product">informações dos produtos <i class="fa fa-angle-right" aria-hidden="true"></i></span>
            </a>
        </div>
    </div>
</div>

<div class="card price">
    <div class="card-body">
        <div class="row ml-2">
            <p class="card-text-price">R$ <?php echo $product['price'] ?></p>
            <div class="d-flex">
                <span class="badge badge-success"><i class="fa fa-arrow-down" aria-hidden="true"></i> 20%</span>
            </div>
        </div>
        <small><?php echo $product['price_share'] ?>x de R$100 sem juros no <strong>cartão de crédito</strong><br>
            com Ame e receba R$ 10,50 <span style="color: rgb(64, 205, 40) ">(1% de volta)</span>
        </small><br>
        <hr>
        <a href=""><small class="cartao">Mais forma de pagar <i class="fa fa-angle-right"
                                                                aria-hidden="true"></i></small></a>
    </div>
</div>


<div class="card frete">
    <div class="card-body">
        <form action="" method="post" class="form-frete">
            <label class="label" for="frete">Calcular frete e prazo
                <input type="text" class="cep input-frete" name="frete" id="frete" placeholder="calcular">
                <button type="button" class="btn btn-primary">ok</button>
            </label>
        </form>
    </div>
</div>


<div class="card compra">
    <div class="card-body">
        <h4 class="card-price ">R$ <?php echo $product['price'] ?></h4>
        <small class="card-small"><?php echo $product['price_share'] ?>x de R$100 sem juros no <strong>cartão de
                crédito</strong><br>
            com Ame e receba R$ 10,50 <span style="color: rgb(64, 205, 40) ">(1% de volta)</span>
        </small><br>
        <hr>
        <a href="#" role="button">
            <button type="button" class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"></i> comprar
            </button>
        </a>
    </div>
</div>