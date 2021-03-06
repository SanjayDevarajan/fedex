<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies each surcharge applied to the shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_Surcharge
    extends FedEx_AbstractComplexType
{

    /**
     * The type of surcharge applied to the shipment.
     *
     * @param SurchargeType $SurchargeType
     * return FedEx_RateService_Surcharge
     */
    public function setSurchargeType(FedEx_RateService_SurchargeType $surchargeType)
    {
        $this->SurchargeType = $surchargeType;
        return $this;
    }
    
    /**
     * 
     *
     * @param SurchargeLevelType $Level
     * return FedEx_RateService_Surcharge
     */
    public function setLevel(FedEx_RateService_SurchargeLevelType $level)
    {
        $this->Level = $level;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Description
     * return FedEx_RateService_Surcharge
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * The amount of the surcharge applied to the shipment.
     *
     * @param Money $Amount
     * return FedEx_RateService_Surcharge
     */
    public function setAmount(FedEx_RateService_Money $amount)
    {
        $this->Amount = $amount;
        return $this;
    }
    

    
}