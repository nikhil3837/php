<?php
$dom=new DomDocument();
$dom->load("Slip10.xml");
$t=$dom->getElementsbyTagName("MovieTitle");
foreach($t as $node)
{
    print $node->textContent;
    echo "<br>";
}
$A=$dom->getElementsbyTagName("ActorName");
foreach($A as $node1)
{
    print $node1->textContent;
    echo "<br>";
}
?>