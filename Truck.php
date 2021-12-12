<?php

class Truck extends Vehicle
{
    private int $storageCapacity;
    protected int $loading = 0;


    public function __construct (string $color, int $nbSeats, string $energy,int $storageCapacity)
    {
        parent::__construct($color, $nbSeats,$energy);
        $this->setStorageCapacity($storageCapacity);
    }

    /**
     * @return int
     */
    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    /**
     * @param int $storageCapacity
     */
    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    /**
     * @return int
     */
    public function getLoading()
    {
        return $this->loading;
    }

    /**
     * @param int $loading
     */
    public function setLoading(int $loading)
    {
        if($loading == $this->getStorageCapacity()){
            return 'full';
        }
         return 'in filling';
    }
}