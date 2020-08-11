<?php

namespace App\View\Components;

use Illuminate\View\Component;

/**
 * Компонент новости.
 */
class News extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $data['news'] = \App\News::query()
            ->get();

        return view('components.news', $data);
    }
}
