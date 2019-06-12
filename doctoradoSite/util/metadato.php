<?php
class makeMetadato{

function construye($codigo, $area, $asignatura,$fecha,$subido,$ruta,$metadato,$op){

  	$doc = new DOMDocument();
  	$doc->formatOutput = true;

	$pd = $doc->createElement( "programaDetallado" );
	$doc->appendChild($pd);
	
	$cod= $doc->createElement("codigo");
	$cod->appendChild($doc->createTextNode($codigo));
	
	$ar= $doc->createElement("area");
	$ar->appendChild($doc->createTextNode($area));
	
	$asig= $doc->createElement("asignatura");
	$asig->appendChild($doc->createTextNode($asignatura));
	
	$fch= $doc->createElement("fecha");
	$fch->appendChild($doc->createTextNode($fecha));
	
	$sub= $doc->createElement("subido");
	$sub->appendChild($doc->createTextNode($subido));
	
	$rut= $doc->createElement("ruta");
	$rut->appendChild($doc->createTextNode("./programas/".$ruta));
	
	$met= $doc->createElement("metadato");
	$met->appendChild($doc->createTextNode("./metadatos/".$metadato));
	
	$pd->appendChild($cod);
	$pd->appendChild($ar);
	$pd->appendChild($asig);
	$pd->appendChild($fch);
	$pd->appendChild($sub);
	$pd->appendChild($rut);
	$pd->appendChild($met);
	
	$doc->saveXML();	
	$fd = fopen("./metadatos/".$metadato, "a");
	fwrite($fd, $doc->saveXML());
    fclose($fd);
 	
}//funcion


}//class
?>