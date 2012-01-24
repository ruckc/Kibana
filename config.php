<?php

$KIBANA_CONFIG = array(
    // Your elastic search server
    'elasticsearch_server' => "elasticsearch1:9200",

    // The record type as defined in your logstash configuration.
    // Seperate multiple types with a comma, no spaces.
    'type' => '',

    // When searching, Kibana will attempt to only search indices
    // that match your timeframe, to make searches faster. You can
    // turn this behavior off if you use something other than daily
    // indexing
    'smart_index' => true,

    // ElasticSearch has a default limit on URL size for REST calls,
    // so Kibana will fall back to _all if a search spans too many
    // indices. Use this to set that 'too many' number
    'smart_index_limit' => 60,

    // When using analyze, use this many of the most recent
    // results for user's query
    'analyze_limit' => 20000,

    // Show this many results in analyze/ mode
    'analyze_show' => 25,

    // By default, Kibana will look for grok/filter defined fields
    // in your results. Logstash has some default fields that it also
    // supplies. You might want to enable or disable some of those.
    'default_fields' => array(
        '@type',
        '@tags',
        '@source_host',
        '@source_path',
        '@timestamp',
        '@source',
    ),

    // You probably don't want to touch anything below this line 
    // unless you really know what you're doing

    // default search settings
    'default_search' => array(
        'search' => '*',
        'fields' => '',
        'time' => '',
        'offset' => 0,
        'analyze_field' => '',
      ),


    'local_timezone' => date_default_timezone_get(),
  );