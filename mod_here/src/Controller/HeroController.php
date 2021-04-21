<?php

namespace Drupal\mod_here\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Defines HelloController class.
 */
class HeroController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   *   Return markup array.
   */
  public function content() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello, World!'),
    ];
  }

  public function customcontent(){

  	return [
      '#type' => 'markup',
      '#markup' => $this->t('Hi! i am using the Modue here code level here..'),
    ];
  }

}

