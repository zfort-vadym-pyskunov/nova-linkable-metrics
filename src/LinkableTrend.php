<?php

namespace KuznetsovZfort\NovaLinkableMetrics;

trait LinkableTrend
{
    use Linkable;

    /**
     * @param $value
     *
     * @return LinkableTrendResult
     */
    public function result($value)
    {
        $result = new LinkableTrendResult($value);
        if (!empty($this->url)) {
            $result->url($this->url);
        }

        return $result;
    }
}
