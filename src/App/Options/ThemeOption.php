<?php

namespace WpTheme\Scaffold\App\Options;

use WpTheme\Scaffold\Framework\Services\Storage;

use WpTheme\Scaffold\Framework\Interfaces\OptionInterface;

final class ThemeOption implements OptionInterface {

  private $name;

  private $default;

  public function __construct ( string $name, Storage $default ) {

    $this->name = $name;

    $this->default = $default;
  }

  public function getName (): string {

    return $this->name;
  }

  public function getDefault () {

    return $this->default->all();
  }

  public function getOption () {

    return \get_option( $this->getName(), $this->getDefault() );
  }

  public function get ( string $key ) {

    if ( in_array( $option = $this->getOption, $key ) ) {

      return $option[$key];
    }

    return $this->default->get( $key );
  }

  public function set ( string $option, $value ) {

  }

  public function remove ( string $option ) {

  }
}