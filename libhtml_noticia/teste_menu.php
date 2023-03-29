<?php
    include_once "autoload.php";

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

    $input = new Input("text", 10, 1);
    $input->addAtributo('disabled = "disabled"');

    $td1 = new Td("1");
    $td2 = new Td("Caderno");
    $td3 = new Td("R$ 15,67");
    
    $tr1 = new Tr([$td1, $td2, $td3]);
    
    $td4 = new Td("2");
    $td5 = new Td("Caneta");
    $td6 = new Td("R$ 3,45");
    
    $tr2 = new Tr([$td4, $td5, $td6]);
    
    $td7 = new Td("3");
    $td8 = new Td("Lápis");
    $td9 = new Td("R$ 2,34");
    
    $tr3 = new Tr([$td7, $td8, $td9]);
    
    $theadTr = new Tr([new Td("Código"), new Td("Nome"), new Td("Valor")]);
    $thead = new TableHead($theadTr);
    
    $tbody = new TableBody([$tr1, $tr2, $tr3]);
    
    $tfootTr = new Tr([new Td("Código"), new Td("Nome"), new Td("Valor")]);
    $tfoot = new TableFoot($tfootTr);
    
    $table = new Table($tbody, $thead, $tfoot);

    $body->addArrayElementos([$input, $table]);

    $html->addElemento($body);

    echo $html;