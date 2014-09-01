<?php
// auto-generated by sfViewConfigHandler
// date: 2014/08/20 21:02:29
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'esftt', false, false);
  $response->addMeta('description', 'esftt', false, false);
  $response->addMeta('keywords', 'esftt', false, false);
  $response->addMeta('language', 'fr', false, false);

  $response->addStylesheet('bootstrap/bootstrap.min.css', '', array ());
  $response->addStylesheet('bootstrap/bootstrap-responsive.min.css', '', array ());
  $response->addStylesheet('font-awesome/css/font-awesome.min.css', '', array ());
  $response->addStylesheet('main.css', '', array ());
  $response->addJavascript('jquery-1.11.1.min.js', '', array ());
  $response->addJavascript('bootstrap/bootstrap.min.js', '', array ());
  $response->addJavascript('http://connect.facebook.net/fr_FR/all.js#xfbml=1', '', array ());
  $response->addJavascript('vendor/jquery.textareaAutoResize.js', '', array ());
  $response->addJavascript('vendor/galleryfic/jquery.galleriffic.js', '', array ());
  $response->addJavascript('vendor/galleryfic/jquery.history.js', '', array ());
  $response->addJavascript('vendor/galleryfic/jquery.opacityrollover.js', '', array ());
  $response->addJavascript('script.js', '', array ());


