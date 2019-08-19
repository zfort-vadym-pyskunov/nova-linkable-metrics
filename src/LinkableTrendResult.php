<?php

namespace KuznetsovZfort\NovaLinkableMetrics;

use Laravel\Nova\Metrics\TrendResult;

class LinkableTrendResult extends TrendResult
{
    use LinkableResult;
}
