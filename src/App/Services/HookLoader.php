<?php

namespace WpTheme\Scaffold\App\Services;

use WpTheme\Scaffold\Core\Resources\Hook;

use WpTheme\Scaffold\Core\Abstracts\Loader;

class HookLoader extends Loader {

  public function addAction ( ...$args ): void {
    
    $this->add( 'actions', $this->theme->make( hook::class, [
      'args' => $args 
    ]));
  }

  public function addFilter ( ...$args ): void {

    $this->add( 'filters', $this->theme->make( hook::class, [
      'args' => $args 
    ]));
  }

  public function load (): void {

    if ( $actions = $this->queue->get( 'actions' ) ) {

      array_map( function ( $hook ) {
        
        \add_action( $hook->getAction(), $hook->getCallback(), $hook->getPriority(), $hook->getNumArgs() );
  
        unset( $hook );
      }, $actions );
    }

    if ( $filters = $this->queue->get( 'filters' ) ) {

      array_map( function ( $hook ) {
  
        \add_filter( $hook->getAction(), $hook->getCallback(), $hook->getPriority(), $hook->getNumArgs() );
  
        unset( $hook );
      }, $filters );
    }

    $this->reset();
  }
}