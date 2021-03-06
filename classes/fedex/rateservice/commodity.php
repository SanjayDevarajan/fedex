<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
            For international multiple piece shipments, commodity information must be passed in the Master and on each child transaction.
            If this shipment cotains more than four commodities line items, the four highest valued should be included in the first 4 occurances for this request.
          
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_Commodity
    extends FedEx_AbstractComplexType
{

    /**
     * total number of pieces of this commodity
     *
     * @param string $Name
     * return FedEx_RateService_Commodity
     */
    public function setName($name)
    {
        $this->Name = $name;
        return $this;
    }
    
    /**
     * total number of pieces of this commodity
     *
     * @param nonNegativeInteger $NumberOfPieces
     * return FedEx_RateService_Commodity
     */
    public function setNumberOfPieces($numberOfPieces)
    {
        $this->NumberOfPieces = $numberOfPieces;
        return $this;
    }
    
    /**
     * Complete and accurate description of this commodity.
     *
     * @param string $Description
     * return FedEx_RateService_Commodity
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Country code where commodity contents were produced or manufactured in their final form.
     *
     * @param string $CountryOfManufacture
     * return FedEx_RateService_Commodity
     */
    public function setCountryOfManufacture($countryOfManufacture)
    {
        $this->CountryOfManufacture = $countryOfManufacture;
        return $this;
    }
    
    /**
     * 
                Unique alpha/numeric representing commodity item.
                At least one occurrence is required for US Export shipments if the Customs Value is greater than $2500 or if a valid US Export license is required.
              
     *
     * @param string $HarmonizedCode
     * return FedEx_RateService_Commodity
     */
    public function setHarmonizedCode($harmonizedCode)
    {
        $this->HarmonizedCode = $harmonizedCode;
        return $this;
    }
    
    /**
     * Total weight of this commodity. 1 explicit decimal position. Max length 11 including decimal.
     *
     * @param Weight $Weight
     * return FedEx_RateService_Commodity
     */
    public function setWeight(FedEx_RateService_Weight $weight)
    {
        $this->Weight = $weight;
        return $this;
    }
    
    /**
     * Number of units of a commodity in total number of pieces for this line item. Max length is 9
     *
     * @param nonNegativeInteger $Quantity
     * return FedEx_RateService_Commodity
     */
    public function setQuantity($quantity)
    {
        $this->Quantity = $quantity;
        return $this;
    }
    
    /**
     * Unit of measure used to express the quantity of this commodity line item.
     *
     * @param string $QuantityUnits
     * return FedEx_RateService_Commodity
     */
    public function setQuantityUnits($quantityUnits)
    {
        $this->QuantityUnits = $quantityUnits;
        return $this;
    }
    
    /**
     * Contains only additional quantitative information other than weight and quantity to calculate duties and taxes.
     *
     * @param array[Measure] $AdditionalMeasures
     * return FedEx_RateService_Commodity
     */
    public function setAdditionalMeasures(array $additionalMeasures)
    {
        $this->AdditionalMeasures = $additionalMeasures;
        return $this;
    }
    
    /**
     * Value of each unit in Quantity. Six explicit decimal positions, Max length 18 including decimal.
     *
     * @param Money $UnitPrice
     * return FedEx_RateService_Commodity
     */
    public function setUnitPrice(FedEx_RateService_Money $unitPrice)
    {
        $this->UnitPrice = $unitPrice;
        return $this;
    }
    
    /**
     * 
                Total customs value for this line item.
                It should equal the commodity unit quantity times commodity unit value.
                Six explicit decimal positions, max length 18 including decimal.
              
     *
     * @param Money $CustomsValue
     * return FedEx_RateService_Commodity
     */
    public function setCustomsValue(FedEx_RateService_Money $customsValue)
    {
        $this->CustomsValue = $customsValue;
        return $this;
    }
    
    /**
     * Defines additional characteristic of commodity used to calculate duties and taxes
     *
     * @param array[EdtExciseCondition] $ExciseConditions
     * return FedEx_RateService_Commodity
     */
    public function setExciseConditions(array $exciseConditions)
    {
        $this->ExciseConditions = $exciseConditions;
        return $this;
    }
    
    /**
     * Applicable to US export shipping only.
     *
     * @param string $ExportLicenseNumber
     * return FedEx_RateService_Commodity
     */
    public function setExportLicenseNumber($exportLicenseNumber)
    {
        $this->ExportLicenseNumber = $exportLicenseNumber;
        return $this;
    }
    
    /**
     * 
     *
     * @param date $ExportLicenseExpirationDate
     * return FedEx_RateService_Commodity
     */
    public function setExportLicenseExpirationDate($exportLicenseExpirationDate)
    {
        $this->ExportLicenseExpirationDate = $exportLicenseExpirationDate;
        return $this;
    }
    
    /**
     * 
                An identifying mark or number used on the packaging of a shipment to help customers identify a particular shipment.
              
     *
     * @param string $CIMarksAndNumbers
     * return FedEx_RateService_Commodity
     */
    public function setCIMarksAndNumbers($cIMarksAndNumbers)
    {
        $this->CIMarksAndNumbers = $cIMarksAndNumbers;
        return $this;
    }
    
    /**
     * All data required for this commodity in NAFTA Certificate of Origin.
     *
     * @param NaftaCommodityDetail $NaftaDetail
     * return FedEx_RateService_Commodity
     */
    public function setNaftaDetail(FedEx_RateService_NaftaCommodityDetail $naftaDetail)
    {
        $this->NaftaDetail = $naftaDetail;
        return $this;
    }
    

    
}