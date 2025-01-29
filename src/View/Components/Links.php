<?php

namespace Primecorecz\Ui\View\Components;

use Closure;
use Illuminate\View\Component;
use Primecorecz\Links\Models\Tag;
use Primecorecz\Links\Models\Link;
use Illuminate\Contracts\View\View;

class Links extends Component
{
    public $linkGroups;

    /**
     * Create a new component instance.
     */
    public function __construct(Tag|string $tag)
    {
        $this->linkGroups = Link::query()
            ->withAnyTags($tag, 'microsite')
            ->with('linkable')
            ->get()
            ->groupBy('linkable_type')
            ->sortBy(fn ($group, $key) => match($key) {
                'iris_position' => 1,
                'iris_area' => 2,
                'magazine_post' => 3,
                default => 4,
            });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('primecore::components.links.index');
    }
}
