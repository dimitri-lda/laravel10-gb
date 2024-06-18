<?php

namespace App\Admin\Widgets;

use Illuminate\Contracts\View\View;
use TCG\Voyager\Widgets\BaseDimmer;
use App\Models\Category;

class CategoriesWidget extends BaseDimmer
{
    protected $config = [];

    public function run(): View
    {
        $count = Category::count();
        $string = 'Categories';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-categories',
            'title'  => "{$count} {$string}",
            'text'   => "You have {$count} categories in your database. Click on button below to view all categories.",
            'button' => [
                'text' => 'View all categories',
                'link' => route('voyager.categories.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
        ]));
    }
}
