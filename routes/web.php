<?php

use Dcat\Admin\Extension\Sku\Http\Controllers\SkuController;

Route::get('sku', SkuController::class.'@index');