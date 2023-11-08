<?php

namespace Elasticquent;

use Elastic\Elasticsearch\ClientBuilder;

trait ElasticquentClientTrait
{
    use ElasticquentConfigTrait;

    /**
     * Get ElasticSearch Client
     *
     * @return \Elasticsearch\Client
     */
    public function getElasticSearchClient()
    {
        $config = $this->getElasticConfig();

        return ClientBuilder::fromConfig($config);
    }

}
