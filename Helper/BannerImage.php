<?php

namespace SweatyApe\BreezeMageplazaBannerSlider\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\Image\AdapterFactory;
use Mageplaza\BannerSlider\Model\Banner;
use Mageplaza\BannerSlider\Model\Config\Source\Image;

class BannerImage extends AbstractHelper
{
    private $imageFactory;
    private $image;

    public function __construct(
        AdapterFactory $imageFactory,
        Image $image
    ) {
        $this->imageFactory = $imageFactory;
        $this->image = $image;
    }

    public function getBannerImage(Banner $banner)
    {
        $image = $this->imageFactory->create();
        $image->open($this->image->getBaseDir() . $banner->getImage());

        return $image;
    }
}
