<?php

declare(strict_types=1);

namespace PreemStudio\BladeHeroicons;

use PreemStudio\BladeIcons\Facades\IconFamilyRegistry;
use PreemStudio\BladeIcons\IconFamily;
use PreemStudio\BladeIcons\IconFamilyStyle;
use PreemStudio\Jetpack\Package\AbstractServiceProvider;

final class ServiceProvider extends AbstractServiceProvider
{
    public function packageRegistered(): void
    {
        IconFamilyRegistry::push(
            new IconFamily('heroicons', [
                new IconFamilyStyle('default', __DIR__.'/../resources/svg/outline'),
                new IconFamilyStyle('mini', __DIR__.'/../resources/svg/mini'),
                new IconFamilyStyle('outline', __DIR__.'/../resources/svg/outline'),
                new IconFamilyStyle('solid', __DIR__.'/../resources/svg/solid'),
            ]),
        );
    }
}
