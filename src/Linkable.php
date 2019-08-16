<?php

namespace KuznetsovZfort\NovaLinkableMetrics;

trait Linkable
{
    public function component()
    {
        return 'linkable-' . $this->component;
    }

    /**
     * @param string $routeName
     * @param array $params
     * @param array $query
     *
     * @return mixed
     */
    public function route(string $routeName, array $params = [], array $query = [])
    {
        return $this->url(json_encode([
            'name' => $routeName,
            'params' => $params,
            'query' => $query,
        ]));
    }

    /**
     * @param string $url
     *
     * @return mixed
     */
    public function url(string $url)
    {
        return $this->withMeta(['url' => $url]);
    }
}
