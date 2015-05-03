<?php

namespace Frutos\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FrutosUserBundle extends Bundle
{    
    public function getParent()
    {
        return 'FOSUserBundle';
    }

}
