<?php
// auto-generated by sfViewConfigHandler
// date: 2014/08/20 13:59:29
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
  $this->setComponentSlot('sf_admin_dashboard_slot', '', '');
  if (sfConfig::get('sf_logging_enabled')) $this->context->getEventDispatcher()->notify(new sfEvent($this, 'application.log', array(sprintf('Set component "%s" (%s/%s)', 'sf_admin_dashboard_slot', '', ''))));
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('admin.css', '', array ());
  $response->addJavascript('jquery-1.11.1.min.js', '', array ());


