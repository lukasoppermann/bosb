<?php
$google_analytics = "<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-16029168-1', 'auto');
  ga('set', 'anonymizeIp', true);
  ga('send', 'pageview');
</script>";

$mail = '<script type="text/javascript">document.write(
"<n uers=\"znvygb:znvy%40obfo\056qr\">znvy\100obfo\056qr<\057n>".replace(/[a-zA-Z]/g, function(c){return String.fromCharCode((c<="Z"?90:122)>=(c=c.charCodeAt(0)+13)?c:c-26);}));
</script>';

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

  public function get_active(){
    return $this->url;
  }

  public function get_template(){
    if( isset($this->menu['by_path'][$this->url]['template']) )
    {
      return $this->menu['by_path'][$this->url]['template'];
    }
    else {
      return 'home.tpl';
    }
  }

}
