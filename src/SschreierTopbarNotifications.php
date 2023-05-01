<?php
declare(strict_types=1);

namespace Sschreier\TopbarNotifications;

use Shopware\Core\Framework\Plugin;

class SschreierTopbarNotifications extends Plugin
{
    const PLUGIN_CONFIG_VARS = [
        'marginTopTopBar',
        'marginBottomTopBar',
        'shadowTopBar',
        'paddingTopTopBarAreas',
        'paddingBottomTopBarAreas',
        'iconWidthTopBarArea1',
        'iconWidthTopBarArea2',
        'iconWidthTopBarArea3',
        'iconWidthTopBarArea4',
        'iconHeightTopBarArea1',
        'iconHeightTopBarArea2',
        'iconHeightTopBarArea3',
        'iconHeightTopBarArea4',
        'iconMarginTopBarArea1',
        'iconMarginTopBarArea2',
        'iconMarginTopBarArea3',
        'iconMarginTopBarArea4',
        'fontSizeTopBarArea1',
        'fontSizeTopBarArea2',
        'fontSizeTopBarArea3',
        'fontSizeTopBarArea4'
    ];
}
