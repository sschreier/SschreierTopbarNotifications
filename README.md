# A plugin for information or notification texts in a top bar for Shopware 6

A plugin for _information or notification texts in a top bar_ which can contain _up to 4 areas_.

## Possible Configurations for the top bar
 - set the background color of the top bar
 - set the distance of the areas up- and downwards in pixels
 - activate, if you want 50% width of the areas in the viewport smartphone landscape (SM)
 
## Possible Configurations for each of the possible four areas of the top bar
 - show the area
 - select the viewports in which the area should be shown
 - select, if the icon should obtain from the select field or a snippet
 - select the icon from the select field (which you can find here: https://github.com/shopware/platform/tree/master/src/Storefront/Resources/app/storefront/dist/assets/icon/default )
 - set the icon color and hover icon color
 - set the icon width and height in pixels
 - set the distance between the icon and the content
 - set the font color and hover font color of the content
 - select the position of the content, for example icon on the left and content on the right or icon on the right and content on the left
 - select the orientation of the area (left, center or right)
 - set a link for the area
 - select the link target of the area, for example in the current tab, in a new tab or in a modalbox

## Available snippets to customize the content or the icons
 - ContentTopBarArea1
 - ContentTopBarArea2
 - ContentTopBarArea3
 - ContentTopBarArea4
 - IconTopBarArea1
 - IconTopBarArea2
 - IconTopBarArea3
 - IconTopBarArea4

## How to install the plugin
### via console (recommended)

1. Download the latest _sschreierTopbarnotifications-master.zip_.
2. Unzip the zip file and rename the folder to _sschreierTopbarnotifications_. 
3. Move the folder to the project folder _custom/plugins/_ .
4. Connect to the console via ssh:

```
bin/console plugin:refresh
bin/console plugin:install --activate sschreierTopbarnotifications
```

### via zip upload
1. Download the latest _sschreierTopbarnotifications-master.zip_.
2. Unzip the zip file and rename the folder to _sschreierTopbarnotifications_.
3. Zip the folder to _sschreierTopbarnotifications.zip_.
4. Upload the zip in the Shopware Administration.
5. Install & Activate the plugin.

#### Plugin update (zip)
1. Download the latest _sschreierTopbarnotifications-master.zip_.
2. Unzip the zip file and rename the folder to _sschreierTopbarnotifications_.
3. Zip the folder to _sschreierTopbarnotifications.zip_.
4. Upload the zip in the Shopware Administration.
5. Update the plugin.

## Images

### top bar with four areas

![top bar with four areas](https://www.sebastianschreier.de/plugins/sschreierTopbarnotifications/sschreierTopbarnotifications-Image1.jpg)

### top bar with four areas, first area is linked with a modal box

![top bar with four areas, first area is linked with a modal box](https://www.sebastianschreier.de/plugins/sschreierTopbarnotifications/sschreierTopbarnotifications-Image2.jpg)

### top bar with four areas in a smaller viewport

![top bar with four areas in a smaller viewport](https://www.sebastianschreier.de/plugins/sschreierTopbarnotifications/sschreierTopbarnotifications-Image3.jpg)

### top bar with only one area

![top bar with only one area](https://www.sebastianschreier.de/plugins/sschreierTopbarnotifications/sschreierTopbarnotifications-Image4.jpg)

### plugin configuration - top bar

![plugin configuration - top bar](https://www.sebastianschreier.de/plugins/sschreierTopbarnotifications/sschreierTopbarnotifications-Image5.jpg)

### plugin configuration - area 1 part 1

![plugin configuration - area 1 part 1](https://www.sebastianschreier.de/plugins/sschreierTopbarnotifications/sschreierTopbarnotifications-Image6.jpg)

### plugin configuration - area 1 part 2

![plugin configuration - area 1 part 2](https://www.sebastianschreier.de/plugins/sschreierTopbarnotifications/sschreierTopbarnotifications-Image7.jpg)

### plugin configuration - area 1 part 3

![plugin configuration - area 1 part 3](https://www.sebastianschreier.de/plugins/sschreierTopbarnotifications/sschreierTopbarnotifications-Image8.jpg)