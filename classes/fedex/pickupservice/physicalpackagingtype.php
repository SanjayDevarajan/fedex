<?php defined('SYSPATH') or die('No direct script access.');

/**
 * This enumeration rationalizes the former FedEx Express international "admissibility package" types (based on ANSI X.12) and the FedEx Freight packaging types. The values represented are those common to both carriers.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_PickupService_PhysicalPackagingType
    extends FedEx_AbstractSimpleType
{
    const _BAG = 'BAG';
    const _BARREL = 'BARREL';
    const _BASKET = 'BASKET';
    const _BOX = 'BOX';
    const _BUCKET = 'BUCKET';
    const _BUNDLE = 'BUNDLE';
    const _CARTON = 'CARTON';
    const _CASE = 'CASE';
    const _CONTAINER = 'CONTAINER';
    const _CRATE = 'CRATE';
    const _CYLINDER = 'CYLINDER';
    const _DRUM = 'DRUM';
    const _ENVELOPE = 'ENVELOPE';
    const _HAMPER = 'HAMPER';
    const _OTHER = 'OTHER';
    const _PAIL = 'PAIL';
    const _PALLET = 'PALLET';
    const _PIECE = 'PIECE';
    const _REEL = 'REEL';
    const _ROLL = 'ROLL';
    const _SKID = 'SKID';
    const _TANK = 'TANK';
    const _TUBE = 'TUBE';
}