<?php

namespace App;

interface Observer
{
    public function update(Observable $observable): void;

}