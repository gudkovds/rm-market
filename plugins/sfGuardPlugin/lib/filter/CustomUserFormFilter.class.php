<?php

/**
 * sfGuardUser filter form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfGuardUserFormFilter.class.php 12896 2008-11-10 19:02:34Z fabien $
 */
class CustomUserFormFilter extends BasesfGuardUserFormFilter
{
  public function configure()
  {
    unset($this['algorithm'], $this['salt'], $this['password'], $this['sf_guard_user_permission_list']);

    $this->widgetSchema['sf_guard_user_group_list']->setLabel('Groups');
  }
}
