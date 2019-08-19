<?php

namespace KuznetsovZfort\NovaLinkableMetrics;

use Laravel\Nova\Metrics\ValueResult;

class LinkableValueResult extends ValueResult
{
    use LinkableResult;
}
