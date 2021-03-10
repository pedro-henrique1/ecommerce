<?php

$product = $data['product'];
//$frete = $data['frete'];


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
                    <form action="" method="" class="form-frete">
                        <label class="label" for="frete">Calcular frete e prazo
                            <input type="text" class="form-control cep input-frete" name="frete" id="frete"
                                   placeholder="calcular">
                        </label>
                        <button type="button" onclick="requestFrete()" class="btn btn-primary">Ok</button>
                        <div class="result_frete" style="margin-right: 7rem;">

                        </div>
                        <script>
                            function requestFrete() {
                                let cep = $(".input-frete").val();
                                let cepFormate = cep.replace('-', '');

                                let url = 'http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?sCepOrigem=77006622&sCepDestino=' + cepFormate + '&nVlPeso=<?php echo $product['peso'] ?>&nCdFormato=<?php echo $product['formato'] ?>&nVlComprimento=<?php echo $product['comprimento'] ?>&nVlAltura=<?php echo $product['altura'] ?>&nVlLargura=<?php echo $product['largura'] ?>&nCdServico=04510&nVlDiametro=<?php echo $product['diametro'] ?>&StrRetorno=xml';
                                $.ajax({
                                    url: url,
                                    type: 'GET',
                                    cache: false,
                                })
                                    .done(function (data, textStatus, jqXHR) {
                                        let response = jqXHR.responseText;
                                        if (window.DOMParser) {
                                            parser = new DOMParser();
                                            xmlDoc = parser.parseFromString(response, "text/xml");
                                        }
                                        let valorFrete = xmlDoc.getElementsByTagName("Valor")[0].childNodes[0].nodeValue;
                                        let PrazoFrete = xmlDoc.getElementsByTagName("PrazoEntrega")[0].childNodes[0].nodeValue;
                                        document.querySelector(".result_frete").innerHTML = '<span> Valor frete R$' + valorFrete + ' </br> Prazo de entrega ' + PrazoFrete + ' dias </span>'
                                    })
                            }


                            // done(function (result) {
                            //
                            // })
                            // .
                            //     fail(function (error) {
                            //         console.log(error)
                            //     })
                            //     .always(function () {
                            //         console.log("send complete")
                            //     })
                        </script>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function ($) {
        $('.input-frete').mask('00000-000');
    });

    // $.ajax({
    //
    //     url: 'http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?sCepOrigem=77006622&sCepDestino=$cepFrete&nVlPeso=$peso&nCdFormato=$formato&nVlComprimento=$comprimento&nVlAltura=$altura&nVlLargura=$largura&nCdServico=04510&nVlDiametro=$diametro&StrRetorno=xml';
    //     type: "GET",
    //     data: '',
    //     dataType: "xml"
    // })
</script>