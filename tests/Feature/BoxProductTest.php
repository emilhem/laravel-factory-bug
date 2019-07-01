<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Product;
use App\Box;

class BoxProductTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    public function testGeneration()
    {
        $this->withoutExceptionHandling();

        $amountTested = 20;

        $data = 
            [
                'name' => 'producty',
                'box' => [
            		'name' => 'boxy',
                ],
            ];

        $fac = factory(Product::class, $amountTested);

        $devices = $fac->create(
            $data
        );

        $this->assertEquals(false, true);
    }
}
