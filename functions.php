<?php

$theme = require __DIR__ . '/src/Bootstrap.php';

function Theme () {

  global $app;

  return $app->make( \Scaffold\Theme\Theme::class );
}

register_post_meta(
  'post',
  '_featured_gallery',
  [
    'type' => 'array',
    'single' => true,
    'auth_callback' => '__return_true',
    'show_in_rest' => [
      'schema' => [
        'type' => 'array',
        'items' => [
          'type' => 'object',
          'properties' => [
            'id' => [
              'type' => 'number'
            ],
            'url' => [
              'type' => 'string',
              'format' => 'uri'
            ]
          ]
        ]
      ]
    ]
  ]
);
