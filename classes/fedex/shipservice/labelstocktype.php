<?php defined('SYSPATH') or die('No direct script access.');

/**
 * For thermal printer labels this indicates the size of the label and the location of the doc tab if present.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_ShipService_LabelStockType
    extends FedEx_AbstractSimpleType
{
    const _PAPER_4X6 = 'PAPER_4X6';
    const _PAPER_4X8 = 'PAPER_4X8';
    const _PAPER_4X9 = 'PAPER_4X9';
    const _PAPER_7X4point75 = 'PAPER_7X4.75';
    const _PAPER_8point5X11_BOTTOM_HALF_LABEL = 'PAPER_8.5X11_BOTTOM_HALF_LABEL';
    const _PAPER_8point5X11_TOP_HALF_LABEL = 'PAPER_8.5X11_TOP_HALF_LABEL';
    const _PAPER_LETTER = 'PAPER_LETTER';
    const _STOCK_4X6 = 'STOCK_4X6';
    const _STOCK_4X6point75_LEADING_DOC_TAB = 'STOCK_4X6.75_LEADING_DOC_TAB';
    const _STOCK_4X6point75_TRAILING_DOC_TAB = 'STOCK_4X6.75_TRAILING_DOC_TAB';
    const _STOCK_4X8 = 'STOCK_4X8';
    const _STOCK_4X9_LEADING_DOC_TAB = 'STOCK_4X9_LEADING_DOC_TAB';
    const _STOCK_4X9_TRAILING_DOC_TAB = 'STOCK_4X9_TRAILING_DOC_TAB';
}