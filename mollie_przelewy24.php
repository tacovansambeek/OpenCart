<?php
require_once(dirname(__FILE__) . "/mollie/base.php");

class ControllerPaymentMolliePrzelewy24 extends ControllerPaymentMollieBase
{
	const MODULE_NAME = MollieHelper::MODULE_NAME_PRZELEWY24;
}
