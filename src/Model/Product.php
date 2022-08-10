<?php
namespace APP\Model;
class Product{
    private int $barCode;
    private string $name;
    private float $price;
    private int $quantity;
    private Provider $provider;
    private bool $isActive;

    /**
     * Essa função irá calcular o preço de venda do produto com base nos custos fixos, tributos e custo de aquisição
     *
     * @param float $cost - Custo de aquisição
     * @param float $tributes - Tributos estaduais e municipais
     * @param float $fixedCost - Custos operacionais
     * @param float $lucre - Percentual de margem de lucro
     * @return void
     */
    private function calculateSalePrice(float $cost, float $tributes, float $fixedCost, float $lucre=0.4)
    {
        $this->price = ($cost + $tributes + $fixedCost)/(1 - $lucre);
    }
    public function calculateMarkup($cost):float
    {
        return $this->price / $cost;
    }
}