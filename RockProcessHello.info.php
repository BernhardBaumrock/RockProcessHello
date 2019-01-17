<?php namespace ProcessWire;
/**
 * ProcessHello Info
 *
 * @author #author#, #date#
 * @license Licensed under MIT
 */
$info = [
  'title' => 'ProcessHello Process Module',
  'summary' => 'ProcessHello Process Module.',
  'version' => 1,
  'author' => '#author#',
  'icon' => '#icon#',
  'permission' => 'helloworld',
  'permissions' => [
    'helloworld' => 'Run the HelloWorld module'
  ], 
  'page' => [
    'name' => 'helloworld',
    'parent' => 'setup', 
    'title' => 'Hello World'
  ],
  'nav' => [
    [
      'url' => '', 
      'label' => 'Hello', 
      'icon' => 'smile-o', 
    ], 
    [
      'url' => 'something/', 
      'label' => 'Something', 
      'icon' => 'beer', 
    ],
  ],
];
