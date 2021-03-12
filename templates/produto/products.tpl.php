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
            <a href="#" role="button">
                <button type="button" class="btn btn-success btn-lg w-5"><i class="fa fa-cart-plus"
                                                                            aria-hidden="true"></i> comprar
                </button>
            </a>
            <div class="row col-sm compra">
                <div class="form-group frete">
                    <label class="label_frete" for="frete">Calcular frete e prazo
                        <input type="text" class="form-control cep input-frete" name="frete" id="frete"
                               placeholder="calcular" style="width: 10rem;">
                    </label>
                    <button type="button" onclick="requestFrete()" class="button_frete btn btn-primary">Ok</button>
                    <div class="result_frete" style="margin-right: 7rem;">
                        <div class="clearfix" id="clearfix" style="display: none;">
                            <div class="spinner-border float-end" role="status">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function requestFrete() {
        cep = $(".input-frete").val().replace('-', '');
        console.log(cep)

        if (cep === "") {
            $(".result_frete").html('<span class="text-danger">Preencha o cep corretamente</span>')
            return
        }
        $('#clearfix').show();


        let url = 'http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?sCepOrigem=77006622&sCepDestino=' + cep + '&nVlPeso=<?php echo $product['peso'] ?>&nCdFormato=<?php echo $product['formato'] ?>&nVlComprimento=<?php echo $product['comprimento'] ?>&nVlAltura=<?php echo $product['altura'] ?>&nVlLargura=<?php echo $product['largura'] ?>&nCdServico=04510&nVlDiametro=<?php echo $product['diametro'] ?>&StrRetorno=xml';
        $.ajax({
            url: url,
            type: 'GET',
            cache: false,
        })
            .done(function (data, textStatus, jqXHR) {
                let response = jqXHR.responseText;
                console.log(data, textStatus, jqXHR)

                let xmlDoc = $.parseXML(response);
                let $xml = $(xmlDoc);

                let valorFrete = $xml.find('Valor').text();
                let PrazoFrete = $xml.find('PrazoEntrega').text();

                if (valorFrete === "0,00" || PrazoFrete === '0') {
                    $(".result_frete").html('<span class="text-danger">Ocorreu um erro</span>')
                    return
                }

                $('.result_frete').html('<span> Valor frete R$' + valorFrete + ' </br> Prazo de entrega ' + PrazoFrete + ' dias </span>');
            })
            .fail(function (error) {
                console.log(error)
            })
    }

    $(document).ready(function ($) {
        $('.input-frete').mask('00000-000');
    });
</script>