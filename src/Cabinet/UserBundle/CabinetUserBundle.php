<?php

namespace Cabinet\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CabinetUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
