<?php

namespace boopathi\Tests\cart\Fixtures;

use boopathi\cart\Contracts\Buyable;

class BuyableProductTrait implements Buyable
{
    use \boopathi\cart\CanBeBought;

    /**
     * @var int|string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $price;

    /**
     * @var float
     */
    private $weight;

    /**
     * BuyableProduct constructor.
     *
     * @param int|string $id
     * @param string     $name
     * @param float      $price
     */
    public function __construct($id = 1, $name = 'Item name', $price = 10.00, $weight = 0)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
    }
}
