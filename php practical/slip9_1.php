<?php
    $xml=simplexml_load_file("slip9_1.xml") or die("cannnot load");
   $xmlstring=$xml->asXML();
   echo $xmlstring;
?>