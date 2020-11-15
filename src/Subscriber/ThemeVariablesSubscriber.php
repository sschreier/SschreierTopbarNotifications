<?php
    namespace sschreier\sschreierTopbarnotifications\Subscriber;

    use Symfony\Component\EventDispatcher\EventSubscriberInterface;
    use Shopware\Storefront\Event\ThemeCompilerEnrichScssVariablesEvent;
    use Shopware\Core\System\SystemConfig\SystemConfigService;

    class ThemeVariablesSubscriber implements EventSubscriberInterface {
        /**
         * @var SystemConfigService
        */
        protected $systemConfig;

        public function __construct(SystemConfigService $systemConfig) {
            $this->systemConfig = $systemConfig;
        }

        public static function getSubscribedEvents(): array {
            return [
                ThemeCompilerEnrichScssVariablesEvent::class => 'onAddVariables'
            ];
        }

        public function onAddVariables(ThemeCompilerEnrichScssVariablesEvent $event) {
            $marginTopTopBar = $this->systemConfig->get('sschreierTopbarnotifications.config.marginTopTopBar', $event->getSalesChannelId());
            $marginBottomTopBar = $this->systemConfig->get('sschreierTopbarnotifications.config.marginBottomTopBar', $event->getSalesChannelId());
            $backgroundColorTopBar = $this->systemConfig->get('sschreierTopbarnotifications.config.backgroundColorTopBar', $event->getSalesChannelId());
            $paddingTopTopBarAreas = $this->systemConfig->get('sschreierTopbarnotifications.config.paddingTopTopBarAreas', $event->getSalesChannelId());
            $paddingBottomTopBarAreas = $this->systemConfig->get('sschreierTopbarnotifications.config.paddingBottomTopBarAreas', $event->getSalesChannelId());
            $iconColorTopBarArea1 = $this->systemConfig->get('sschreierTopbarnotifications.config.iconColorTopBarArea1', $event->getSalesChannelId());
            $hoverIconColorTopBarArea1 = $this->systemConfig->get('sschreierTopbarnotifications.config.hoverIconColorTopBarArea1', $event->getSalesChannelId());
            $iconColorTopBarArea2 = $this->systemConfig->get('sschreierTopbarnotifications.config.iconColorTopBarArea2', $event->getSalesChannelId());
            $hoverIconColorTopBarArea2 = $this->systemConfig->get('sschreierTopbarnotifications.config.hoverIconColorTopBarArea2', $event->getSalesChannelId());
            $iconColorTopBarArea3 = $this->systemConfig->get('sschreierTopbarnotifications.config.iconColorTopBarArea3', $event->getSalesChannelId());
            $hoverIconColorTopBarArea3 = $this->systemConfig->get('sschreierTopbarnotifications.config.hoverIconColorTopBarArea3', $event->getSalesChannelId());
            $iconColorTopBarArea4 = $this->systemConfig->get('sschreierTopbarnotifications.config.iconColorTopBarArea4', $event->getSalesChannelId());
            $hoverIconColorTopBarArea4 = $this->systemConfig->get('sschreierTopbarnotifications.config.hoverIconColorTopBarArea4', $event->getSalesChannelId());
            $iconWidthTopBarArea1 = $this->systemConfig->get('sschreierTopbarnotifications.config.iconWidthTopBarArea1', $event->getSalesChannelId());
            $iconWidthTopBarArea2 = $this->systemConfig->get('sschreierTopbarnotifications.config.iconWidthTopBarArea2', $event->getSalesChannelId());
            $iconWidthTopBarArea3 = $this->systemConfig->get('sschreierTopbarnotifications.config.iconWidthTopBarArea3', $event->getSalesChannelId());
            $iconWidthTopBarArea4 = $this->systemConfig->get('sschreierTopbarnotifications.config.iconWidthTopBarArea4', $event->getSalesChannelId());
            $iconHeightTopBarArea1 = $this->systemConfig->get('sschreierTopbarnotifications.config.iconHeightTopBarArea1', $event->getSalesChannelId());
            $iconHeightTopBarArea2 = $this->systemConfig->get('sschreierTopbarnotifications.config.iconHeightTopBarArea2', $event->getSalesChannelId());
            $iconHeightTopBarArea3 = $this->systemConfig->get('sschreierTopbarnotifications.config.iconHeightTopBarArea3', $event->getSalesChannelId());
            $iconHeightTopBarArea4 = $this->systemConfig->get('sschreierTopbarnotifications.config.iconHeightTopBarArea4', $event->getSalesChannelId());
            $iconMarginTopBarArea1 = $this->systemConfig->get('sschreierTopbarnotifications.config.iconMarginTopBarArea1', $event->getSalesChannelId());
            $iconMarginTopBarArea2 = $this->systemConfig->get('sschreierTopbarnotifications.config.iconMarginTopBarArea2', $event->getSalesChannelId());
            $iconMarginTopBarArea3 = $this->systemConfig->get('sschreierTopbarnotifications.config.iconMarginTopBarArea3', $event->getSalesChannelId());
            $iconMarginTopBarArea4 = $this->systemConfig->get('sschreierTopbarnotifications.config.iconMarginTopBarArea4', $event->getSalesChannelId());
            $fontColorTopBarArea1 = $this->systemConfig->get('sschreierTopbarnotifications.config.fontColorTopBarArea1', $event->getSalesChannelId());
            $hoverFontColorTopBarArea1 = $this->systemConfig->get('sschreierTopbarnotifications.config.hoverFontColorTopBarArea1', $event->getSalesChannelId());
            $fontColorTopBarArea2 = $this->systemConfig->get('sschreierTopbarnotifications.config.fontColorTopBarArea2', $event->getSalesChannelId());
            $hoverFontColorTopBarArea2 = $this->systemConfig->get('sschreierTopbarnotifications.config.hoverFontColorTopBarArea2', $event->getSalesChannelId());
            $fontColorTopBarArea3 = $this->systemConfig->get('sschreierTopbarnotifications.config.fontColorTopBarArea3', $event->getSalesChannelId());
            $hoverFontColorTopBarArea3 = $this->systemConfig->get('sschreierTopbarnotifications.config.hoverFontColorTopBarArea3', $event->getSalesChannelId());
            $fontColorTopBarArea4 = $this->systemConfig->get('sschreierTopbarnotifications.config.fontColorTopBarArea4', $event->getSalesChannelId());
            $hoverFontColorTopBarArea4 = $this->systemConfig->get('sschreierTopbarnotifications.config.hoverFontColorTopBarArea4', $event->getSalesChannelId());
            
            if(is_null($marginTopTopBar)){
                $marginTopTopBar = "0px";
            }

            if(is_null($marginBottomTopBar)){
                $marginBottomTopBar = "0px";
            }

            if(is_null($backgroundColorTopBar)){
                $backgroundColorTopBar = "#ffffff";
            }

            if(is_null($paddingTopTopBarAreas)){
                $paddingTopTopBarAreas = "8px";
            }

            if(is_null($paddingBottomTopBarAreas)){
                $paddingBottomTopBarAreas = "8px";
            }

            if(is_null($iconColorTopBarArea1)){
                $iconColorTopBarArea1 = "#4a545b";
            }

            if(is_null($hoverIconColorTopBarArea1)){
                $hoverIconColorTopBarArea1 = "#4a545b";
            }

            if(is_null($iconColorTopBarArea2)){
                $iconColorTopBarArea2 = "#4a545b";
            }

            if(is_null($hoverIconColorTopBarArea2)){
                $hoverIconColorTopBarArea2 = "#4a545b";
            }

            if(is_null($iconColorTopBarArea3)){
                $iconColorTopBarArea3 = "#4a545b";
            }

            if(is_null($hoverIconColorTopBarArea3)){
                $hoverIconColorTopBarArea3 = "#4a545b";
            }

            if(is_null($iconColorTopBarArea4)){
                $iconColorTopBarArea4 = "#4a545b";
            }

            if(is_null($hoverIconColorTopBarArea4)){
                $hoverIconColorTopBarArea4 = "#4a545b";
            }

            if(is_null($iconWidthTopBarArea1)){
                $iconWidthTopBarArea1 = "22";
            }

            if(is_null($iconWidthTopBarArea2)){
                $iconWidthTopBarArea2 = "22";
            }

            if(is_null($iconWidthTopBarArea3)){
                $iconWidthTopBarArea3 = "22";
            }

            if(is_null($iconWidthTopBarArea4)){
                $iconWidthTopBarArea4 = "22";
            }

            if(is_null($iconHeightTopBarArea1)){
                $iconHeightTopBarArea1 = "22";
            }

            if(is_null($iconHeightTopBarArea2)){
                $iconHeightTopBarArea2 = "22";
            }

            if(is_null($iconHeightTopBarArea3)){
                $iconHeightTopBarArea3 = "22";
            }

            if(is_null($iconHeightTopBarArea4)){
                $iconHeightTopBarArea4 = "22";
            }

            if(is_null($iconMarginTopBarArea1)){
                $iconMarginTopBarArea1 = "2%";
            }

            if(is_null($iconMarginTopBarArea2)){
                $iconMarginTopBarArea2 = "2%";
            }

            if(is_null($iconMarginTopBarArea3)){
                $iconMarginTopBarArea3 = "2%";
            }

            if(is_null($iconMarginTopBarArea4)){
                $iconMarginTopBarArea4 = "2%";
            }

            if(is_null($fontColorTopBarArea1)){
                $fontColorTopBarArea1 = "#4a545b";
            }

            if(is_null($hoverFontColorTopBarArea1)){
                $hoverFontColorTopBarArea1 = "#4a545b";
            }

            if(is_null($fontColorTopBarArea2)){
                $fontColorTopBarArea2 = "#4a545b";
            }

            if(is_null($hoverFontColorTopBarArea2)){
                $hoverFontColorTopBarArea2 = "#4a545b";
            }

            if(is_null($fontColorTopBarArea3)){
                $fontColorTopBarArea3 = "#4a545b";
            }

            if(is_null($hoverFontColorTopBarArea3)){
                $hoverFontColorTopBarArea3 = "#4a545b";
            }

            if(is_null($fontColorTopBarArea4)){
                $fontColorTopBarArea4 = "#4a545b";
            }

            if(is_null($hoverFontColorTopBarArea4)){
                $hoverFontColorTopBarArea4 = "#4a545b";
            }

            $event->addVariable('sschreier-margintop-topbar', $marginTopTopBar);
            $event->addVariable('sschreier-marginbottom-topbar', $marginBottomTopBar);
            $event->addVariable('sschreier-backgroundcolor-topbar', $backgroundColorTopBar);
            $event->addVariable('sschreier-paddingtop-topbar-areas', $paddingTopTopBarAreas);
            $event->addVariable('sschreier-paddingbottom-topbar-areas', $paddingBottomTopBarAreas);
            $event->addVariable('sschreier-iconcolor-topbararea1', $iconColorTopBarArea1);
            $event->addVariable('sschreier-hover-iconcolor-topbararea1', $hoverIconColorTopBarArea1);
            $event->addVariable('sschreier-iconcolor-topbararea2', $iconColorTopBarArea2);
            $event->addVariable('sschreier-hover-iconcolor-topbararea2', $hoverIconColorTopBarArea2);
            $event->addVariable('sschreier-iconcolor-topbararea3', $iconColorTopBarArea3);
            $event->addVariable('sschreier-hover-iconcolor-topbararea3', $hoverIconColorTopBarArea3);
            $event->addVariable('sschreier-iconcolor-topbararea4', $iconColorTopBarArea4);
            $event->addVariable('sschreier-hover-iconcolor-topbararea4', $hoverIconColorTopBarArea4);
            $event->addVariable('sschreier-iconwidth-topbararea1', $iconWidthTopBarArea1);
            $event->addVariable('sschreier-iconwidth-topbararea2', $iconWidthTopBarArea2);
            $event->addVariable('sschreier-iconwidth-topbararea3', $iconWidthTopBarArea3);
            $event->addVariable('sschreier-iconwidth-topbararea4', $iconWidthTopBarArea4);
            $event->addVariable('sschreier-iconheight-topbararea1', $iconHeightTopBarArea1);
            $event->addVariable('sschreier-iconheight-topbararea2', $iconHeightTopBarArea2);
            $event->addVariable('sschreier-iconheight-topbararea3', $iconHeightTopBarArea3);
            $event->addVariable('sschreier-iconheight-topbararea4', $iconHeightTopBarArea4);
            $event->addVariable('sschreier-iconmargin-topbararea1', $iconMarginTopBarArea1);
            $event->addVariable('sschreier-iconmargin-topbararea2', $iconMarginTopBarArea2);
            $event->addVariable('sschreier-iconmargin-topbararea3', $iconMarginTopBarArea3);
            $event->addVariable('sschreier-iconmargin-topbararea4', $iconMarginTopBarArea4);
            $event->addVariable('sschreier-fontcolor-topbararea1', $fontColorTopBarArea1);
            $event->addVariable('sschreier-hover-fontcolor-topbararea1', $hoverFontColorTopBarArea1);
            $event->addVariable('sschreier-fontcolor-topbararea2', $fontColorTopBarArea2);
            $event->addVariable('sschreier-hover-fontcolor-topbararea2', $hoverFontColorTopBarArea2);
            $event->addVariable('sschreier-fontcolor-topbararea3', $fontColorTopBarArea3);
            $event->addVariable('sschreier-hover-fontcolor-topbararea3', $hoverFontColorTopBarArea3);
            $event->addVariable('sschreier-fontcolor-topbararea4', $fontColorTopBarArea4);
            $event->addVariable('sschreier-hover-fontcolor-topbararea4', $hoverFontColorTopBarArea4);
        }
    }