<?php

$allProduct = function () use ($conn) {
    $stmt = $conn->query('SELECT * FROM  produtos');
    return $stmt->fetchAll();
};

$ProductSelect = function ($reference) use ($conn) {
    $sql = 'SELECT * FROM produtos WHERE reference = :reference';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':reference', $reference);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
};

//$CreatFrete = function () use ($conn) {
//    $cepFrete = filter_input(INPUT_POST, 'frete');
//    $peso = filter_input(INPUT_POST, 'peso');
//    $formato = filter_input(INPUT_POST, 'formato');
//    $altura = filter_input(INPUT_POST, 'altura');
//    $largura = filter_input(INPUT_POST, 'largura');
//    $diametro = filter_input(INPUT_POST, 'diametro');
//    $comprimento = filter_input(INPUT_POST, 'comprimento');
//
//    if (empty($cepFrete) or empty($peso) or empty($formato) or empty($altura) or empty($largura) or empty($diametro) === "") {
////        header("Location: /");
//        exit();
//    }
//
//    $cepFrete = str_replace('.', '', $cepFrete);
//    $cepFrete = str_replace('-', '', $cepFrete);
//
////    $cepFrete = 0;
//    $url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?sCepOrigem=77006622&sCepDestino=$cepFrete&nVlPeso=$peso&nCdFormato=$formato&nVlComprimento=$comprimento&nVlAltura=$altura&nVlLargura=$largura&nCdServico=04510&nVlDiametro=$diametro&StrRetorno=xml";
//
//    $curl = curl_init($url);
//    curl_setopt($curl, CURLOPT_URL, $url);
//    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//
//    $headers = array(
//        "Accept: application/xml",
//    );
//    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
//    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
//
//    $resp = curl_exec($curl);
//    curl_close($curl);
//
//    $resp = new SimpleXMLIterator($resp);
//
//    foreach ($resp as $produto) {
//        if ($produto->Erro != 0) {
//            echo 'Ocorreu um erro';
//            exit();
//        }
//    }
//    return $resp;
//};
