<?php
$retorno = [];

$xml = file_get_contents("php://input");

if (!empty($xml)) {

    $x = new DOMDocument();

    $x->loadXML($xml);

    $arquivo = simplexml_import_dom($x);

    if (!empty($arquivo)) {
        $retorno = read_xml($arquivo);
    } else {
        $retorno['resposta_status']['status'] = 0;
        $retorno['resposta_status']['msg'] = "Xml invalido";
    }
} else {
    $retorno['resposta_status']['status'] = 0;
    $retorno['resposta_status']['msg'] = "Nenhum arquivo processado.";
}

// print_r(__DIR__);
// print_r($xml);

print_r(json_encode($retorno, true));

function read_xml($json = null)
{

    foreach ($json->torcedor as $key => $value) {
        $c1 = json_encode($value);
        $c2 = json_decode($c1, true);
        print_r($c2['@attributes']);
        // die;
        // print_r($value);

    }

    die;
}

function read_dir($json = null)
{
    # code...
}
