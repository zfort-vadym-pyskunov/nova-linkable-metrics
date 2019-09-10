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
        return $this->withMeta([
            'linkable' => [
                'route' => [
                    'name' => $routeName,
                    'params' => $params,
                    'query' => $query,
                ],
                'link' => null,
            ],
        ]);
    }

    /**
     * @param string $href
     * @param string $target
     *
     * @return mixed
     */
    public function link(string $href, string $target = '_self')
    {
        return $this->withMeta([
            'linkable' => [
                'route' => null,
                'link' => [
                    'href' => $href,
                    'target' => $target,
                ],
            ],
        ]);
    }
}
