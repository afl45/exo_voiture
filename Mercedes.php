<?php

    class Mercedes extends Car {
        public function __construct(string $brand, string $model, string $fuel, int $speed, bool $auto) {
            parent::__construct($brand, $model, $fuel, $speed, $auto);
        }
    }

?>