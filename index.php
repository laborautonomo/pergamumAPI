<?php


if (isset($_GET['q'])){
	if (isset($_GET['itens'])) {
		$itens = $_GET['itens'];
	}else
		$itens = 20;


	echo "string";
	$search = $_GET["q"];

	$html = file_get_contents("http://biblioteca.utfpr.edu.br/pergamum/biblioteca/?rs=ajax_resultados&rst=&rsrnd=1430251309251&rsargs[]=".$itens."&rsargs[]=0&rsargs[]=L&rsargs[]=".$search."&rsargs[]=&rsargs[]=,&rsargs[]=palavra&rsargs[]=&rsargs[]=&rsargs[]=&rsargs[]=&rsargs[]=&rsargs[]=&rsargs[]=&rsargs[]=obra_formatado&rsargs[]=553fe6e1e67b8&rsargs[]=&rsargs[]=&rsargs[]=&rsargs[]=");

	$temp = str_replace("\\n", "", $html);
	$temp2 = str_replace("\\r", "", $temp);
	$temp = str_replace('\\"', "", $temp2);
	$html = str_replace("\\'", "", $temp);




	echo $html;

}

