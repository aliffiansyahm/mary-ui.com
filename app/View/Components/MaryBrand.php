<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MaryBrand extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return <<<'HTML'
            <div class="flex flex-wrap items-baseline">
                <span
                    class="font-black text-3xl mr-3 bg-gradient-to-r from-amber-500 to-pink-500 bg-clip-text text-transparent ">
                    maryUI <span class="text-xs bg-base-content text-base-100 rounded p-1">v1</span>
                </span>
                <!-- <span class=" text-gray-500 text-sm font-medium">Laravel blade components</span>             -->
            </div>
        HTML;
    }
}
