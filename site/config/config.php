<?php

return [
  'debug' => true,
  'content' => [
    'uuid' => false
  ],

  'routes' => [
    [
      'pattern' => 'search',
      'action' => function() {
        $query = get("q");
        $results = site()->search($query, "title");

        $data = [];

        foreach($results as $result) {
          $data[] = [
            'title' => $result->title()->value(),
            'url' => $result->url()
          ];
        }

        return response::json($data);
      }
    ]
  ]
];
