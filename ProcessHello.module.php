<?php namespace ProcessWire;
/**
 * ProcessHello Module
 *
 * @author #author#, #date#
 * @license Licensed under MIT
 */
class ProcessHello extends Process {

  /**
   * Init. Optional.
   */
  public function init() {
    parent::init(); // always remember to call the parent init
  }

  /**
   * 
   */
  public function ___execute() {
    /** @var InputfieldForm $form */
    $form = $this->modules->get('InputfieldForm');

    $form->add([
      'demo' => [
        'type' => 'markup',
        'label' => 'demo',
        'value' => 'hello world!',
      ],
    ]);

    return $form->render();
  }
}

