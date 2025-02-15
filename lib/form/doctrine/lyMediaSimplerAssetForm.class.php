<?php
/*
 * This file is part of the lyMediaManagerPlugin package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * lyMediaAsset form class.
 *
 * @package     lyMediaManagerPlugin
 * @subpackage  form
 * @copyright   Copyright (C) 2010 Massimo Giagnoni.
 * @license     http://www.symfony-project.org/license MIT
 * @version     SVN: $Id$
 */
class lyMediaSimplerAssetForm extends lyMediaAssetForm
{
  public function setup()
  {
    parent::setup();

    unset(
      $this['title'],
      $this['description'],
      $this['author'],
      $this['copyright']
    );

    $this->widgetSchema['folder_id'] = new sfWidgetFormInputHidden();
  }
}
