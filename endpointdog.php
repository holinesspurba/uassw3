<?php
require 'easyrdf/vendor/autoload.php';

EasyRdf\RdfNamespace::set('foaf','http://xmlns.com/foaf/0.1/');
EasyRdf\RdfNamespace::set('dc','http://purl.org/dc/elements/1.1/');
EasyRdf\RdfNamespace::set('efo','http://www.ebi.ac.uk/efo/efo.owl');

$newrdf = new \EasyRdf\Graph("https://github.com/holinesspurba/uassw3.git");
$newrdf->load();

$allSubject = $newrdf->resourcesMatching('efo:id');
$i = 0;

foreach($allSubject as $subjek) {
    $name[$i]   = $newrdf->get($subjek,'foaf:name');
    $breed[$i]  = $newrdf->get($subjek,'efo:breed');
    $gender[$i]  = $newrdf->get($subjek,'foaf:gender');
    $id[$i] = $newrdf->get($subjek,'efo:id');
    $description[$i]  = $newrdf->get($subjek,'dc:description');
    $age[$i]    = $newrdf->get($subjek,'foaf:age');
    $country[$i]    = $newrdf->get($subjek,'efo:country');
    $status[$i]    = $newrdf->get($subjek,'foaf:status');
    $image[$i]    = $newrdf->get($subjek,'foaf:image');
    $i++;
}
?>