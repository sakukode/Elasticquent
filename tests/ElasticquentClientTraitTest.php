<?php

use PHPUnit\Framework\TestCase;
use Elastic\Elasticsearch\Client;

class ElasticquentClientTraitTest extends TestCase
{
    protected $model;
    
    protected function setUp(): void
    {
        $this->model = new TestModel;
    }

    public function testClient()
    {
        $this->assertInstanceOf(Client::class, $this->model->getElasticSearchClient());
    }
}
