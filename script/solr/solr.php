<?php

$kw = $_POST['keyword'];

search($kw);

function search($keyword = '', $start = 0, $limit = 10){
    
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
    $query->setStart($start);
    $query->setRows($limit);

    $keyword = trim($keyword);
    if($keyword != ''){
        $queryStr = "name:$keyword OR name_en:*$keyword* OR country_name:$keyword OR country_name_en:*$keyword* OR country_kw:$keyword";
        $query->addFilterQuery($queryStr);
    }
    
    $query->addSortField('update_time',1);
//    $query->addField('name')
//            ->addField('name_en')
//            ->addField('desc')
//            ->addField('tag_name');
    $query->addField('*');

    $query_response = $client->query($query);
    $response = $query_response->getResponse();

    echo $query_response->getRequestUrl()."<br>";
//    var_dump($response);

    $docs = $response->response->docs;
    foreach($docs as $doc){
        print_r($doc);
    }

    echo $client->getDebug();
}

