<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */
 
class Radio extends Product
{
    public function info()
    {
        echo "Radio:" . $this->getId() . ":" . $this->getName();
    }
}