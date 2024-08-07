<?php

namespace SweatyApe\BreezeMageplazaBannerSlider\Plugin;

class Slider
{
    private $helper;

    public function __construct(
        \Swissup\Breeze\Helper\Data $helper
    ) {
        $this->helper = $helper;
    }

    public function afterGetTemplate(
        \Mageplaza\BannerSlider\Block\Slider $subject,
        $result
    ) {
        if (!$this->helper->isEnabled()) {
            return $result;
        }

        return 'SweatyApe_BreezeMageplazaBannerSlider::bannerslider.phtml';
    }
}
