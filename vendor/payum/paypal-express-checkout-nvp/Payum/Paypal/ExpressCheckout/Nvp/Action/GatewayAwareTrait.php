<?php
namespace Payum\Paypal\ExpressCheckout\Nvp\Action;
trait GatewayAwareTrait
{
    /**
     * @var GatewayInterface
     */
    protected $gateway;
    /**
     * {@inheritDoc}
     */
    public function setGateway(GatewayInterface $gateway)
    {
        $this->gateway = $gateway;
    }
}