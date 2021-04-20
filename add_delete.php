<?php
$xml=simplexml_load_file("products.xml") or die("Error: Cannot create object");


$xml=new DomDocument("1.0","UTF-8");
$xml->formatOutput=true;
$xml->preserveWhiteSpace=false;
$xml->load("products.xml");
if(!$xml)
{
    $products=$xml->createElement("products");
    $xml->appendChild($products);
}
else
{
    $products= $xml->firstChild;
}
if(isset($_POST['submit'])){
    $fname=$_POST['name'];
    $fprice=$_POST['price'];
    $fstock=$_POST['stock'];
$user=$xml->createElement("user");
$products-> appendChild($user);
$name=$xml->createElement("name",$fname);
$user-> appendChild($name);
$price=$xml->createElement("price",$fprice);
$user-> appendChild($price);
$stock=$xml->createElement("stock",$fstock);
$user-> appendChild($stock);
echo"<xmp>".$xml->saveXml()."</xmp>";
$xml->save("products.xml");
}

if(isset($_POST['delete'])){
    $dname= $_POST['name'];
    $xpath=new DOMXPATH($xml);
foreach($xpath->query("/products/p[name='$dname']") as $node)
    {
        $node-> parentNode->removeChild($node);
    }
    $xml->save("products.xml");
    
}


/*if(isset($_POST['delete'])){
    $dname= $_POST['name'];
    $xpath=new DOMXPATH($xml);
foreach($xpath->query("/products/p[name='$dname']") as $node)
    {
        $node-> parentNode->removeChild($node);
    }
    echo readfile("inventoryPHP.php");
    $xml->save("products.xml");
}
*/

?>
