<?php namespace ProcessWire;
/**
 * RockProcessHello Config
 *
 * @author #author#, #date#
 * @license Licensed under MIT
 */
class RockProcessHelloConfig extends ModuleConfig {

  public function __construct() {

    $this->add([

      // Text field: greeting
      [
        'name' => 'greeting', // name of field
        'type' => 'text', // type of field (any Inputfield module name)
        'label' => $this->_('Hello Greeting'), // field label
        'description' => $this->_('What would you like to say to people using this module?'), 
        'required' => true, 
        'value' => $this->_('A very happy hello world to you.'), // default value
      ],

      // Radio buttons: greetingType
      [
        'name' => 'greetingType', 
        'type' => 'radios', 
        'label' => $this->_('Greeting Type'), 
        'options' => [
          // options array of value => label
          'message' => $this->_('Message'), 
          'warning' => $this->_('Warning'),
          'error' => $this->_('Error'), 
          ],
        'value' => 'warning', // default value
        'optionColumns' => 1, // make options display on one line
        'notes' => $this->_('Choose wisely'), // like description but appears under field
        ],
    ]);
  }
}

