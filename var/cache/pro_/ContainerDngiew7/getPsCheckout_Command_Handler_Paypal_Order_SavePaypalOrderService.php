<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.command.handler.paypal.order.save_paypal_order' shared service.

return $this->services['ps_checkout.command.handler.paypal.order.save_paypal_order'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\SavePayPalOrderCommandHandler(${($_ = isset($this->services['ps_checkout.repository.pscheckoutcart']) ? $this->services['ps_checkout.repository.pscheckoutcart'] : $this->load('getPsCheckout_Repository_PscheckoutcartService.php')) && false ?: '_'});
