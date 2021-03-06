<?php

namespace SocialiteProviders\ProSanteConnect;

use SocialiteProviders\Manager\SocialiteWasCalled;

class ProSanteConnectExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('prosanteconnect', Provider::class);
    }
}
