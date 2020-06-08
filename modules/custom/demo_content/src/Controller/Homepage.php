<?php

namespace Drupal\demo_content\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class Homepage.
 *
 * @package Drupal\demo_content\Controller
 */
class Homepage extends ControllerBase {

  /**
   * Index
   */
  public function index() {

    return [
      '#type' => 'inline_template',
      '#template' => "
                      <h2>Default</h2>
                      <button class=\"usa-button \">Default</button>
                      <button class=\"usa-button  usa-button--hover\">Hover</button>
                      <button class=\"usa-button  usa-button--active\">Active</button>
                      <button class=\"usa-button  usa-focus\">Focus</button>
                      <button class=\"usa-button \" disabled>Disabled</button><button class=\"usa-button  usa-button--unstyled\">Unstyled button</button>
                      
                      <h2>Secondary color</h2>
                      <button class=\"usa-button usa-button--secondary\">Default</button>
                      <button class=\"usa-button usa-button--secondary usa-button--hover\">Hover</button>
                      <button class=\"usa-button usa-button--secondary usa-button--active\">Active</button>
                      <button class=\"usa-button usa-button--secondary usa-focus\">Focus</button>
                      <button class=\"usa-button usa-button--secondary\" disabled>Disabled</button><button class=\"usa-button usa-button--secondary usa-button--unstyled\">Unstyled button</button>
                      
                      <h2>Accent cool color</h2>
                      <button class=\"usa-button usa-button--accent-cool\">Default</button>
                      <button class=\"usa-button usa-button--accent-cool usa-button--hover\">Hover</button>
                      <button class=\"usa-button usa-button--accent-cool usa-button--active\">Active</button>
                      <button class=\"usa-button usa-button--accent-cool usa-focus\">Focus</button>
                      <button class=\"usa-button usa-button--accent-cool\" disabled>Disabled</button><button class=\"usa-button usa-button--accent-cool usa-button--unstyled\">Unstyled button</button>
                      
                      <h2>Base color</h2>
                      <button class=\"usa-button usa-button--base\">Default</button>
                      <button class=\"usa-button usa-button--base usa-button--hover\">Hover</button>
                      <button class=\"usa-button usa-button--base usa-button--active\">Active</button>
                      <button class=\"usa-button usa-button--base usa-focus\">Focus</button>
                      <button class=\"usa-button usa-button--base\" disabled>Disabled</button><button class=\"usa-button usa-button--base usa-button--unstyled\">Unstyled button</button>
                      
                      <h2>Outline</h2>
                      <button class=\"usa-button usa-button--outline\">Default</button>
                      <button class=\"usa-button usa-button--outline usa-button--hover\">Hover</button>
                      <button class=\"usa-button usa-button--outline usa-button--active\">Active</button>
                      <button class=\"usa-button usa-button--outline usa-focus\">Focus</button>
                      <button class=\"usa-button usa-button--outline\" disabled>Disabled</button><button class=\"usa-button usa-button--outline usa-button--unstyled\">Unstyled button</button>
                      
                      <h2>Outline inverse</h2>
                      <div class=\"bg-base-darkest padding-1\" style=\"max-width: fit-content\">
                      <button class=\"usa-button usa-button--outline usa-button--inverse\">Default</button>
                      <button class=\"usa-button usa-button--outline usa-button--inverse usa-button--hover\">Hover</button>
                      <button class=\"usa-button usa-button--outline usa-button--inverse usa-button--active\">Active</button>
                      <button class=\"usa-button usa-button--outline usa-button--inverse usa-focus\">Focus</button>
                      <button class=\"usa-button usa-button--outline usa-button--inverse\" disabled>Disabled</button><button class=\"usa-button usa-button--outline usa-button--inverse usa-button--unstyled\">Unstyled button</button>
                      </div>
                      
                      <h2>Big button</h2>
                      <button class=\"usa-button usa-button--big\">Default</button>
                      <button class=\"usa-button usa-button--big usa-button--unstyled\">Unstyled button</button>

      ",
    ];
  }
}
