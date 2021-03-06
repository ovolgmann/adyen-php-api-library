<?php

namespace Adyen\Service;

class Payment extends \Adyen\Service
{
	/**
	 * @var ResourceModel\Payment\Authorise
	 */
	protected $_authorise;

	/**
	 * @var ResourceModel\Payment\Authorise3D
	 */
	protected $_authorise3D;

	/**
	 * Payment constructor.
	 *
	 * @param \Adyen\Client $client
	 * @throws \Adyen\AdyenException
	 */
	public function __construct(\Adyen\Client $client)
	{
		parent::__construct($client);
		$this->_authorise = new \Adyen\Service\ResourceModel\Payment\Authorise($this);
		$this->_authorise3D = new \Adyen\Service\ResourceModel\Payment\Authorise3D($this);
	}

	/**
	 * @param $params
	 * @return mixed
	 * @throws \Adyen\AdyenException
	 */
	public function authorise($params)
	{
		$result = $this->_authorise->request($params);
		return $result;
	}

	/**
	 * @param $params
	 * @return mixed
	 * @throws \Adyen\AdyenException
	 */
	public function authorise3D($params)
	{
		$result = $this->_authorise3D->request($params);
		return $result;
	}
}
