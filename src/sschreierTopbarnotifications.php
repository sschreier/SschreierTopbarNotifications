<?php 
declare(strict_types=1);

namespace Sschreier\TopbarNotifications;

use Shopware\Core\Framework\Plugin;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class SschreierTopbarNotifications extends Plugin 
{
	/* plugin variables match: config key => scss variable */
    const PLUGIN_VARS = [
        'marginTopTopBar' => 'sschreier-margintop-topbar',
        'marginBottomTopBar' => 'sschreier-marginbottom-topbar',
        'backgroundColorTopBar' => 'sschreier-backgroundcolor-topbar',
        'paddingTopTopBarAreas' => 'sschreier-paddingtop-topbar-areas',
        'paddingBottomTopBarAreas' => 'sschreier-paddingbottom-topbar-areas',
        'iconColorTopBarArea1' => 'sschreier-iconcolor-topbararea1',
        'hoverIconColorTopBarArea1' => 'sschreier-hover-iconcolor-topbararea1',
        'iconColorTopBarArea2' => 'sschreier-iconcolor-topbararea2',
        'hoverIconColorTopBarArea2' => 'sschreier-hover-iconcolor-topbararea2',
        'iconColorTopBarArea3' => 'sschreier-iconcolor-topbararea3',
        'hoverIconColorTopBarArea3' => 'sschreier-hover-iconcolor-topbararea3',
        'iconColorTopBarArea4' => 'sschreier-iconcolor-topbararea4',
        'hoverIconColorTopBarArea4' => 'sschreier-hover-iconcolor-topbararea4',
        'iconWidthTopBarArea1' => 'sschreier-iconwidth-topbararea1',
        'iconWidthTopBarArea2' => 'sschreier-iconwidth-topbararea2',
        'iconWidthTopBarArea3' => 'sschreier-iconwidth-topbararea3',
        'iconWidthTopBarArea4' => 'sschreier-iconwidth-topbararea4',
        'iconHeightTopBarArea1' => 'sschreier-iconheight-topbararea1',
        'iconHeightTopBarArea2' => 'sschreier-iconheight-topbararea2',
        'iconHeightTopBarArea3' => 'sschreier-iconheight-topbararea3',
        'iconHeightTopBarArea4' => 'sschreier-iconheight-topbararea4',
        'iconMarginTopBarArea1' => 'sschreier-iconmargin-topbararea1',
        'iconMarginTopBarArea2' => 'sschreier-iconmargin-topbararea2',
        'iconMarginTopBarArea3' => 'sschreier-iconmargin-topbararea3',
        'iconMarginTopBarArea4' => 'sschreier-iconmargin-topbararea4',
        'fontColorTopBarArea1' => 'sschreier-fontcolor-topbararea1',
        'hoverFontColorTopBarArea1' => 'sschreier-hover-fontcolor-topbararea1',
        'fontColorTopBarArea2' => 'sschreier-fontcolor-topbararea2',
        'hoverFontColorTopBarArea2' => 'sschreier-hover-fontcolor-topbararea2',
        'fontColorTopBarArea3' => 'sschreier-fontcolor-topbararea3',
        'hoverFontColorTopBarArea3' => 'sschreier-hover-fontcolor-topbararea3',
        'fontColorTopBarArea4' => 'sschreier-fontcolor-topbararea4',
        'hoverFontColorTopBarArea4' => 'sschreier-hover-fontcolor-topbararea4',
    ];

    public function build(ContainerBuilder $container): void
    {
        parent::build($container);

        $container->setParameter(
            'sschreier_topbarnotifications_domain',
            $this->getName() . '.config.'
        );
    }
}