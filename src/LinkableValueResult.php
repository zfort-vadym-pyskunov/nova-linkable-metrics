<?php

namespace KuznetsovZfort\NovaLinkableMetrics;

use Laravel\Nova\Metrics\ValueResult;

class LinkableValueResult extends ValueResult
{
    /**
     * @var string
     */
    public $url;

    /**
     * @param  string  $url
     *
     * @return $this
     */
    public function url(string $url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @param string $routeName
     * @param array $params
     * @param array $query
     *
     * @return $this
     */
    public function route(string $routeName, array $params = [], array $query = [])
    {
        return $this->url(json_encode([
            'name' => $routeName,
            'params' => $params,
            'query' => $query
        ]));
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), [
            'url' => $this->url,
        ]);
    }
}
