<?php
trait ProductPrice
{
    public function checkPrice()
    {
        if ($this->price <= 0)
            throw new Exception("Prezzo uguale a zero");
    }
}
