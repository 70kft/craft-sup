<?php 
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class SupTwigExtension extends \Twig_Extension
{

  public function getName()
  {
    return 'Sup';
  }

  public function getFilters()
  {
    return array(
      'sup' => new Twig_Filter_Method($this, 'supIt'),
      );
  }

  public function supIt($text)
  {
    $find = array("®","™");
    $replace = array("<sup>&reg;</sup>","<sup>&trade;</sup>");
    $result = str_replace($find,$replace,$text);

    $findbad = array("<sup><sup>&reg;</sup></sup>","<sup><sup>®</sup></sup>","<sup><sup>&trade;</sup></sup>","<sup><sup>™</sup></sup>");
    $replacebad = array("<sup>&reg;</sup>","<sup>&reg;</sup>","<sup>&trade;</sup>","<sup>&trade;</sup>");
    $result = str_replace($findbad,$replacebad,$result);

    return TemplateHelper::getRaw($result);
  }
}
