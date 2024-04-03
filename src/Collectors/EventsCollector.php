<?php

declare(strict_types=1);

namespace Napp\Xray\Collectors;

use Illuminate\Foundation\Application;

abstract class EventsCollector extends SegmentCollector
{

    public function __construct()
    {
        $this->app = app();

        $this->registerEventListeners();
    }
}
