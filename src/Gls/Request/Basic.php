<?php
/**
 * This file is part of the gls-unixbox-delivery.
 * (c) Pierre Tomasina
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plab\GlsUniboxDelivery\Gls\Request;


use Plab\GlsUniboxDelivery\Gls\Parameter\ProductCode;

class Basic extends Request
{
    const mandatoryParameters = [
        'T530',
        'T860',
        'T863',
        'T330',
        'T864',
        'T100',
        'T8973',
        'T8904',
        'T8702',
        'T8905',
        'PRODUCT_CODE',
        'PACKAGE_NUMBER',
    ];
    
    public function __construct() 
    {
        parent::__construct();

        $this->createParameterInStack('T8973', '1');
        $this->createParameterInStack('T8904', '1');
        $this->createParameterInStack('T8702', '1');
        $this->createParameterInStack('T8905', '1');
        
        $this->createParameterInStack('PRODUCT_CODE', new ProductCode('BP'));
    }
    
    public function getResponseClass() :string
    {
        return \Plab\GlsUniboxDelivery\Gls\Response\Basic::class;
    }

    /**
     * @param $value
     * @return Basic
     */
    public function setRecipientReference(string $value) :Basic
    {
        return $this->createParameterInStack('T859', $value);
    }

    /**
     * @param string $value
     * @return Basic
     */
    public function setRecipientName(string $value) :Basic
    {
        return $this->createParameterInStack('T860', $value);
    }

    /**
     * @param string $value
     * @return Basic
     */
    public function setRecipientAddress1(string $value) :Basic
    {
        return $this->createParameterInStack('T863', $value);
    }

    /**
     * @param string $value
     * @return Basic
     */
    public function setRecipientAddress2(string $value) :Basic
    {
        return $this->createParameterInStack('T861', $value);
    }

    /**
     * @param string $value
     * @return Basic
     */
    public function setRecipientAddress3(string $value) :Basic
    {
        return $this->createParameterInStack('T863', $value);
    }

    /**
     * @param string $value
     * @return Basic
     */
    public function setRecipientZipCode(string $value) :Basic
    {
        return $this->createParameterInStack('T330', $value);
    }

    /**
     * @param string $value
     * @return Basic
     */
    public function setRecipientCity(string $value) :Basic
    {
        return $this->createParameterInStack('T864', $value);
    }

    /**
     * @param string $value
     * @return Basic
     */
    public function setRecipientCountry(string $value) :Basic
    {
        return $this->createParameterInStack('T100', $value);
    }

    /**
     * @param string $value
     * @return Basic
     */
    public function setRecipientComment(string $value) :Basic
    {
        return $this->createParameterInStack('T8906', $value);
    }

    /**
     * @param string $value
     * @return Basic
     */
    public function setRecipientPhone(string $value) :Basic
    {
        return $this->createParameterInStack('T871', $value);
    }

    /**
     * @param string $value
     * @return Basic
     */
    public function setRecipientMobile(string $value) :Basic
    {
        return $this->createParameterInStack('T1230', $value);
    }

    /**
     * @param string $value
     * @return Basic
     */
    public function setRecipientEmail(string $value) :Basic
    {
        return $this->createParameterInStack('T1229', $value);
    }
}