<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The Oversize classification for a package.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_OversizeClassType
    extends FedEx_AbstractSimpleType
{
    const _OVERSIZE_1 = 'OVERSIZE_1';
    const _OVERSIZE_2 = 'OVERSIZE_2';
    const _OVERSIZE_3 = 'OVERSIZE_3';
}