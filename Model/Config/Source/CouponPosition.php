<?php
/**
 * MagoArab_EasYorder Coupon Position Source Model
 *
 * @category    MagoArab
 * @package     MagoArab_EasYorder
 * @author      MagoArab Development Team
 * @copyright   Copyright (c) 2025 MagoArab
 * @license     https://opensource.org/licenses/MIT MIT License
 */

namespace MagoArab\EasYorder\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class CouponPosition implements OptionSourceInterface
{
    /**
     * Return array of options as value-label pairs
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'after_address', 'label' => __('After Address Fields')],
            ['value' => 'after_shipping', 'label' => __('After Shipping Method')],
            ['value' => 'after_payment', 'label' => __('After Payment Method')],
            ['value' => 'before_submit', 'label' => __('Before Submit Button')],
            ['value' => 'with_totals', 'label' => __('With Order Summary')],
            ['value' => 'bottom_form', 'label' => __('Bottom of Form')]
        ];
    }
}


