<?php

//$frete = $data['frete'];
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
                    <button type="button" class="btn btn-success btn-lg w-5"><i class="fa fa-cart-plus"
                                                                                aria-hidden="true"></i> comprar
                    </button>
                </a>
                <div class="form-group frete">
                    <form action="" method="POST" class="form-frete">
                        <label class="label" for="frete">Calcular frete e prazo
                            <input type="text" class="form-control cep input-frete" name="frete" id="frete"
                                   placeholder="calcular">
                        </label>
                        <input type="hidden" class="form-control" name="peso" value="<?php echo $product['peso'] ?>">
                        <input type="hidden" class="form-control" name="formato"
                               value="<?php echo $product['formato'] ?>">
                        <input type="hidden" class="form-control" name="altura"
                               value="<?php echo $product['altura'] ?>">
                        <input type="hidden" class="form-control" name="largura"
                               value="<?php echo $product['largura'] ?>">
                        <input type="hidden" class="form-control" name="diametro"
                               value="<?php echo $product['diametro'] ?>">
                        <input type="hidden" class="form-control" name="comprimento"
                               value="<?php echo $product['comprimento'] ?>">

                        <button type="submit" class="btn btn-primary">ok</button>
                    </form>
                    <!--                    --><?php //foreach ($frete as $freteXml) :
                    //                        if ($freteXml->Erro != 0) {?>
                    <!--                            <div class="text-danger">Ocorreu um erro</div>--><?php
                    //                        }
                    //                        ?>
                    <!--                        <span class="result_frete">Valor da Entrega R$-->
                    <?php //echo $freteXml->Valor ?><!--</span>-->
                    <!--                        <br>-->
                    <!--                        <span class="result_frete">Entrega em até -->
                    <?php //echo $freteXml->PrazoEntrega ?><!-- dias</span><br>-->
                    <!--                    --><?php //endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function ($) {
        $('.input-frete').mask('00.000-000');
    });
</script>