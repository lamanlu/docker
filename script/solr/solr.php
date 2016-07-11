<?php
$options = array(
    'hostname' => 'solr',
    'port'     => 8983,
    'path' => '/solr/mysql_source',
    'wt' => 'json',
    'timeout' => 10,
);

$client = new SolrClient($options);
$pingresponse = $client->ping();

$query = new SolrQuery();
$query->setQuery('*:*');
$query->setStart(0);
$query->setRows(50);

$query->addFilterQuery("name:赫尔 OR name_en:kuop*");
$query->addFilterQuery("desc:皮");

$query->addField('name')
        ->addField('name_en')
        ->addField('desc')
        ->addField('tag_name');

$query_response = $client->query($query);
$response = $query_response->getResponse();

echo $query_response->getRequestUrl()."<br>";
//var_dump($response);

$docs = $response->response->docs;
foreach($docs as $doc){
    print_r($doc);
}

echo $client->getDebug();


