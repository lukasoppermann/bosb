<?php

function make_menu($menu) {

  foreach($menu as $id => $item)
  {
    $menu[$id]['template'] = $item['path'].'.tpl';
    $m['by_path'][$item['path']] = $menu[$id];

    if( isset($item['children']) ){
      foreach($item['children'] as $subid => $child){
        $m['sub'][$id][$subid] = $child;
        $m['sub'][$id][$subid]['template'] = $child['path'].'.tpl';
      }
    }
  }

  $m['by_id'] = $menu;
  $m['main'] = $menu;

  return $m;
}

Class Router {
  private $parts = [];
  private $url;
  private $menu;

  public function __construct($url, $menu){
    $this->menu = $menu;
    $this->url = trim($url,'/');
    $this->parts = explode('/',$this->url);

  }

  public function is_active($part){
    if( trim($part,'/') === '')
    {
      return '';
    }

    return strpos($this->url, trim($part,'/')) !== false ? 'is-active' : '';
  }

  public function get_part($index){
    return isset($this->parts[0]) ? $this->parts[0] : FALSE;
  }


  public function get_active(){
    return $this->url;
  }

  public function get_template(){
    if( file_exists('templates/'.end($this->parts).'.tpl') )
    {
      return end($this->parts).'.tpl';
    }
    else {
      return 'index.tpl';
    }
  }

}
