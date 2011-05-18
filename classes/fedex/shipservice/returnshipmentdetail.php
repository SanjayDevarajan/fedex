<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Information relating to a return shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_ReturnShipmentDetail
    extends FedEx_AbstractComplexType
{

    /**
     * The type of return shipment that is being requested.
     *
     * @param ReturnType $ReturnType
     * return FedEx_ShipService_ReturnShipmentDetail
     */
    public function setReturnType(FedEx_ShipService_ReturnType $returnType)
    {
        $this->ReturnType = $returnType;
        return $this;
    }
    
    /**
     * Return Merchant Authorization
     *
     * @param Rma $Rma
     * return FedEx_ShipService_ReturnShipmentDetail
     */
    public function setRma(FedEx_ShipService_Rma $rma)
    {
        $this->Rma = $rma;
        return $this;
    }
    
    /**
     * Describes specific information about the email label for return shipment.
     *
     * @param ReturnEMailDetail $ReturnEMailDetail
     * return FedEx_ShipService_ReturnShipmentDetail
     */
    public function setReturnEMailDetail(FedEx_ShipService_ReturnEMailDetail $returnEMailDetail)
    {
        $this->ReturnEMailDetail = $returnEMailDetail;
        return $this;
    }
    

    
}