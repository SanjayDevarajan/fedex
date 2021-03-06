<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Used in authentication of the sender's identity.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_AddressValidationService_WebAuthenticationDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Credential used to authenticate a specific software application. This value is provided by FedEx after registration.
     *
     * @param WebAuthenticationCredential $UserCredential
     * return FedEx_AddressValidationService_WebAuthenticationDetail
     */
    public function setUserCredential(FedEx_AddressValidationService_WebAuthenticationCredential $userCredential)
    {
        $this->UserCredential = $userCredential;
        return $this;
    }
    

    
}