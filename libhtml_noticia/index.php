<?php
include_once "autoload.php";

session_start();
session_destroy();

$_SESSION['noticiasteste'][] = ["titulo teste", "resumo teste", "imagem teste", "data teste"];
$_SESSION['noticiasteste'][] = ["titulo teste 2", "resumo teste 2", "imagem teste 2", "data teste 2"];

$html = new Html('pt-br');  

$head = new Head();

$meta1 = new Meta('Utf-8', null, null, null);
$meta2 = new Meta(null, 'X-UA-Compatible', 'IE=edge', null);
$meta3 = new Meta(null, null, 'width=device-width, initial-scale=1.0', 'viewport');

$head->addElemento($meta1);
$head->addElemento($meta2);
$head->addElemento($meta3);
$html->addElemento($head);

$body = new Body();

$input1 = new Input('text');
$input1->addAtributo('id="titulo"');
$label1 = new Label("Título da notícia:","titulo");

$input2 = new Input('text');
$input2->addAtributo('id="resumo"');
$label2 = new Label("Resumo da notícia:", "resumo");

$input3 = new Input('text');
$input3->addAtributo('id="imagem"');
$label3 = new Label("Link da imagem:", "imagem");

$input4 = new Input('date');
$input4->addAtributo('id="data"');
$label4 = new Label("Data da notícia:", "data");

$button = new Button("submit", "Cadastrar");

$lista = new Ul();

$item1 = new Li();
$item1->addElementos([$label1, $input1]);

$item2 = new Li();
$item2->addElementos([$label2, $input2]);

$item3 = new Li();
$item3->addElementos([$label3, $input3]);

$item4 = new Li();
$item4->addElementos([$label4, $input4]);

$item5 = new Li();
$item5->addElemento($button);

$lista->addElementos([$item1, $item2, $item3, $item4, $item5]);

$legend = new Legend("Cadastro de Notícias");

$fieldset = new Fieldset();
$fieldset->addElementos([$legend, $lista]);

$form = new Form();
$form->addElemento($fieldset);

$theadTr = new Tr([new Td("Título"), new Td("Resumo"), new Td("Imagem"), new Td("Data")]);
$thead = new TableHead($theadTr);

$arrayTr = [];
foreach($_SESSION['noticiasteste'] as $noticia) {
    $td1 = new Td($noticia[0]);
    $td2 = new Td($noticia[1]);
    $td3 = new Td($noticia[2]);
    $td4 = new Td($noticia[3]);
        
    $tr = new Tr([$td1, $td2, $td3, $td4]);

    $arrayTr[] = $tr;
}

$tbody = new TableBody($arrayTr);
    
$table = new Table($tbody, $thead);

$body->addElementos([$form, $table]);

$html->addElemento($body);

echo $html;