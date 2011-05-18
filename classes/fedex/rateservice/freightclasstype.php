<?php defined('SYSPATH') or die('No direct script access.');

/**
 * These values represent the industry-standard freight classes used for FedEx Freight and FedEx National Freight shipment description. (Note: The alphabetic prefixes are required to distinguish these values from decimal numbers on some client platforms.)
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_FreightClassType
    extends FedEx_AbstractSimpleType
{
    const _CLASS_050 = 'CLASS_050';
    const _CLASS_055 = 'CLASS_055';
    const _CLASS_060 = 'CLASS_060';
    const _CLASS_065 = 'CLASS_065';
    const _CLASS_070 = 'CLASS_070';
    const _CLASS_077_5 = 'CLASS_077_5';
    const _CLASS_085 = 'CLASS_085';
    const _CLASS_092_5 = 'CLASS_092_5';
    const _CLASS_100 = 'CLASS_100';
    const _CLASS_110 = 'CLASS_110';
    const _CLASS_125 = 'CLASS_125';
    const _CLASS_150 = 'CLASS_150';
    const _CLASS_175 = 'CLASS_175';
    const _CLASS_200 = 'CLASS_200';
    const _CLASS_250 = 'CLASS_250';
    const _CLASS_300 = 'CLASS_300';
    const _CLASS_400 = 'CLASS_400';
    const _CLASS_500 = 'CLASS_500';
}