<?php

namespace App\View\Components;

use App\QuickLink;
use Illuminate\View\Component;

/**
 * Компонент быстрые ссылки.
 */
class Links extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $data['quick_links'] = QuickLink::query()
            ->get();

        return view('components.links', $data);
    }
}
