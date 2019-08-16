<?php

namespace KuznetsovZfort\NovaLinkableMetrics;

trait LinkableValue
{
    use Linkable;

    /**
     * @param mixed $value
     * @return LinkableValueResult
     */
    public function result($value)
    {
        $linkableValueResult = new LinkableValueResult($value);
        if (!empty($this->url)) {
            $linkableValueResult->url($this->url);
        }

        return $linkableValueResult;
    }
}
