<?php

namespace challenge\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class challengeUserBundle extends Bundle
{
    public function getParent(){
        return 'FOSUserBundle';
    }

}
