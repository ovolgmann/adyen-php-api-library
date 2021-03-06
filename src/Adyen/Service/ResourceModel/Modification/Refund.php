<?php

namespace Adyen\Service\ResourceModel\Modification;

class Refund extends \Adyen\Service\AbstractResource
{
	/**
	 * @var string
	 */
	protected $_endpoint;

	/**
	 * Include applicationInfo key in the request parameters
	 *
	 * @var bool
	 */
	protected $allowApplicationInfo = true;

	/**
	 * Refund constructor.
	 *
	 * @param \Adyen\Service $service
	 */
    public function __construct($service)
    {
        $this->_endpoint = $service->getClient()->getConfig()->get('endpoint') . '/pal/servlet/Payment/' . $service->getClient()->getApiPaymentVersion() . '/refund';
        parent::__construct($service, $this->_endpoint, $this->allowApplicationInfo);
    }
}
