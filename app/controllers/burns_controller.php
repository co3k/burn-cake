<?php

class BurnsController extends AppController
{
  var $uses = null;
  var $components = array('Security');

  function beforeFilter()
  {
    $this->Security->requireAuth('index');
  }

  function index()
  {
  }
}
