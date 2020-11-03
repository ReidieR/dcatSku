<?php

namespace Dcat\Admin\Extension\Sku;

use Dcat\Admin\Form\Field;

class SkuField extends Field
{
    protected $view = 'sku::sku_field';

    protected static $js = [
        'vendor/dcat-admin-extensions/sku/sku.js'
    ];

    protected static $css = [
        'vendor/dcat-admin-extensions/sku/sku.css'
    ];

    public function render()
    {
        $this->script = <<< EOF
        window.DemoSku = new JadeKunSKU('{$this->getElementClassSelector()}')
        EOF;
        return parent::render();
    }
}
