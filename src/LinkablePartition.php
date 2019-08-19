<?php

namespace KuznetsovZfort\NovaLinkableMetrics;

trait LinkablePartition
{
    use Linkable;

    /**
     * @param mixed $value
     *
     * @return LinkablePartitionResult
     */
    public function result($value)
    {
        $result = new LinkablePartitionResult($value);
        if (!empty($this->url)) {
            $result->url($this->url);
        }

        return $result;
    }
}
