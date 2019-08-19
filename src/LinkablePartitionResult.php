<?php

namespace KuznetsovZfort\NovaLinkableMetrics;

use Laravel\Nova\Metrics\PartitionResult;

class LinkablePartitionResult extends PartitionResult
{
    use LinkableResult;
}
