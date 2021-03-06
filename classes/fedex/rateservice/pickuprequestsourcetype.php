<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_PickupRequestSourceType
    extends FedEx_AbstractSimpleType
{
    const _AUTOMATION = 'AUTOMATION';
    const _CUSTOMER_SERVICE = 'CUSTOMER_SERVICE';
}