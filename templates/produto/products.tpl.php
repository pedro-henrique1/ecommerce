<?php
$product = $data['product'];

$product['price'] = number_format($product['price'], 2, ",", ".");
$product['description'] = substr($product['description'], 0, 310) . '...';

?>
<div class="produto">
    <div class="card image">
        <img class="card-img-top w-520 h-476" src="/upload/<?php echo $product['image'] ?> "
             alt="image produto">
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
                <span class="cod ml-3">(cod.<?php echo $product['reference'] ?>)</span>
            </div>
            <hr>
            <div class="row col-sm voltagem">
                <span class="voltagem">Voltagem: <strong>220<?php /*echo $product['voltagem']*/ ?>v</strong></span>
            </div>
            <hr>
            <div class="row col-sm compra">
                <a href="#" role="button">
                    <button type="button" class="btn btn-success btn-lg w-5"><i class="fa fa-cart-plus"
                                                                                aria-hidden="true"></i> comprar
                    </button>
                </a>
                <div class="form-group frete">
                    <form action="" method="post" class="form-frete">
                        <label class="label" for="frete">Calcular frete e prazo
                            <input type="text" class="form-control cep input-frete" name="frete" id="frete"
                                   placeholder="calcular">
                        </label>
                        <button type="button" class="btn btn-primary">ok</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<div class="card price">-->
<!--    <div class="card-body">-->
<!--        <div class="row ml-2">-->
<!--            <p class="card-text-price">R$ --><?php //echo $product['price'] 
?>
<!--</p>-->
<!--            <div class="d-flex">-->
<!--                <span class="badge badge-success"><i class="fa fa-arrow-down" aria-hidden="true"></i> 20%</span>-->
<!--            </div>-->
<!--        </div>-->
<!--        <small>-->
<?php //echo $product['price_share'] 
?>
<!--x de R$100 sem juros no <strong>cartão de crédito</strong><br>-->
<!--            com Ame e receba R$ 10,50 <span style="color: rgb(64, 205, 40) ">(1% de volta)</span>-->
<!--        </small><br>-->
<!--        <hr>-->
<!--        -->
<!--    </div>-->
<!--</div>-->
<!--    <div class="card compra">-->
<!--        <div class="card-body">-->
<!--            <h4 class="card-price ">R$ --><?php //echo $product['price'] 
?>
<!--</h4>-->
<!--            <small class="card-small">--><?php //echo $product['price_share'] 
?>
<!--x de R$100 sem juros no <strong>cartão de-->
<!--                    crédito</strong><br>-->
<!--                com Ame e receba R$ 10,50 <span style="color: rgb(64, 205, 40) ">(1% de volta)</span>-->
<!--            </small><br>-->
<!--            <a href=""><small class="cartao">Mais forma de pagar <i class="fa fa-angle-right"-->
<!--                                                                    aria-hidden="true"></i></small></a>-->
<!--            <hr>-->
<!--            <a href="#" role="button">-->
<!--                <button type="button" class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"></i> comprar-->
<!--                </button>-->
<!--            </a>-->
<!--        </div>-->

<!--    </div>-->