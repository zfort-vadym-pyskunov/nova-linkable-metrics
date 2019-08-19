<?php

namespace KuznetsovZfort\NovaLinkableMetrics;

trait LinkablePartition
{
    use Linkable;

    /**
     * @param array $value
     *
     * @return LinkablePartitionResult
     */
    public function result(array $value)
    {
        $result = new LinkablePartitionResult($value);
        if (!empty($this->url)) {
            $result->url($this->url);
        }

        return $result;
    }
}
