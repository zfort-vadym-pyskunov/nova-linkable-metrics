<?php

namespace KuznetsovZfort\NovaLinkableMetrics;

trait LinkableValue
{
    use Linkable;

    /**
     * @param mixed $value
     *
     * @return LinkableValueResult
     */
    public function result($value)
    {
        $result = new LinkableValueResult($value);
        if (!empty($this->url)) {
            $result->url($this->url);
        }

        return $result;
    }
}
