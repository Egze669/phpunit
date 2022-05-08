<?php declare(strict_types=1);

final class Miniature
{
    private $name;
    private $price;
    private $material;
    private $materialref = ['plastic','resign','metal'];

    public function __construct(string $name, float $price, string $material)
    {
        $this->name = $name;
        $this->price = $price;
        $this->material = $material;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function setPrice(float $price)
    {
        $this->price = $price;
    }
    public function setMaterial(string $material)
    {
        $this->material = $material;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getPrice(): float
    {
        return $this->price;
    }
    public function getMaterial(): string
    {
        return $this->material;
    }

    public function checkIsShippingFree(): bool
    {
        $totalprice = $this->price+(0.45*$this->price);
        if($totalprice<125){
            return false;
        }
        return true;
    }
    public function calculateTotalPrice(): float
    {
        $totalprice = $this->price+(0.45*$this->price);
        if($this->checkIsShippingFree()){
            return $totalprice+20;
        }
            return $totalprice;
    }
    public function checkIsMaterialCorrect(): bool
    {
        $material = $this->material;
        if(in_array($material,$this->materialref))
        {
            return true;
        }else
        return false;
    }

}