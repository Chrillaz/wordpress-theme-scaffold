<?php

namespace Chrillaz\WPScaffold\Interfaces;

if ( ! defined( 'ABSPATH' ) ) exit;

use Chrillaz\WPScaffold\Includes\Customizer;

use Chrillaz\WPScaffold\Includes\Hooks;

use Chrillaz\WPScaffold\Includes\Assets;

interface Facade {

  /**
   * customizer
   * 
   * @param array $defaults
   * 
   * @return Customizer
   */
  public function customizer ( ?array $defaults = [] ): Customizer;

  /**
   * hooks
   * 
   * @return Hooks
   */
  public function hooks (): Hooks;

  /**
   * assets
   * 
   * @return Assets
   */
  public function assets (): Assets;
}