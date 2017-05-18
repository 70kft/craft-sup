<?php
namespace Craft;

class SupPlugin extends BasePlugin
{
  public function getName()
  {
    return Craft::t('Sup');
  }

  public function getVersion()
  {
    return '1.0.0';
  }

  public function getDeveloper()
  {
    return '70kft';
  }

  public function getDeveloperUrl()
  {
    return 'http://70kft.com';
  }

  public function hasCpSection()
  {
    return false;
  }

  public function addTwigExtension()
  {
    Craft::import('plugins.sup.twigextensions.SupTwigExtension');

    return new SupTwigExtension();
  }
}
