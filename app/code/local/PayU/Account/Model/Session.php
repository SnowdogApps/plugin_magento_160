<?php

/**
 *	ver. 0.1.6.1
 *	PayU Session Model
 *
 *	@copyright  Copyright (c) 2011-2012 PayU
 *	@license    http://opensource.org/licenses/LGPL-3.0  Open Software License (LGPL 3.0)
 *	http://www.payu.com
 *	http://www.openpayu.com
 *	http://twitter.com/openpayu
 */

class PayU_Account_Model_Session extends Mage_Core_Model_Session_Abstract
{
    public function __construct()
    {
        $this->init('payu_account');
    }
}
