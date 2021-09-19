<?php
namespace App\Models;

use Spatie\YamlFrontMatter\YamlFrontMatter;

class ContentInfo {
  public $heading;
  public $body;

  public function __construct($heading, $body)
  {
    $this->heading = $heading;
    $this->body = $body;
  }

  public static function getContent($slug) {

    if(!file_exists($path = resource_path("content-info/{$slug}.html"))) {
      return redirect('/');
    }


    $document = YamlFrontMatter::parseFile($path);
    $content= new ContentInfo($document->heading, $document->body());
    return $content;
  }
}
