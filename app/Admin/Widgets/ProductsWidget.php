<?php

namespace App\Admin\Widgets;

use Illuminate\Contracts\View\View;
use TCG\Voyager\Widgets\BaseDimmer;
use App\Models\Product;

class ProductsWidget extends BaseDimmer
{
    protected $config = [];

    public function run(): View
    {
        $count = Product::count();
        $string = 'Products';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-bag',
            'title'  => "{$count} {$string}",
            'text'   => "You have {$count} products in your database. Click on button below to view all products.",
            'button' => [
                'text' => 'View all products',
                'link' => route('voyager.products.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/01.jpg'),
        ]));
    }
}
