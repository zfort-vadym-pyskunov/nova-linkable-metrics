<?php

namespace KuznetsovZfort\NovaLinkableMetrics;

trait LinkableTrend
{
    use Linkable;

    /**
     * @param string|null $value
     *
     * @return LinkableTrendResult
     */
    public function result($value = null)
    {
        $result = new LinkableTrendResult($value);
        if (!empty($this->url)) {
            $result->url($this->url);
        }

        return $result;
    }
}
