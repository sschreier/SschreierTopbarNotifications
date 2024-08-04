# bar for information and notification texts or messages for Shopware 6

A shopware 6 extension for a bar for information and notification texts or messages which can contain up to 4 areas. It can be displayed either in the top bar or in the footer bar or also above or below the breadcrumb navigation.

## Possible Configurations for the bar
 - show the content in a top or footer bar or above or below the breadcrumb navigation
 - set the background color of the area (*1)
 - set the shadow of the area (*1)
 - set the outer distance of the area up- and downwards in pixels or percent (*1)
 - set the distance of the areas up- and downwards in pixels or percent (*1)
 - activate, if you want 50% width of the areas in the viewport smartphone landscape (SM)
 
## Possible Configurations for each of the possible four areas of the bar
 - show the area
 - select the viewports in which the area should be shown
 - select, if the icon should obtain from the select field or a snippet
 - select the icon from the select field (which you can find here: https://github.com/shopware/platform/tree/master/src/Storefront/Resources/app/storefront/dist/assets/icon/default )
 - set the icon via snippet
 - set the icon color and hover icon color (*1)
 - set the icon width and height in pixels (*1)
 - set the distance between the icon and the content (*1)
 - set the font color and hover font color of the content (*1)
 - set the font size of the content in pixels (*1)
 - select, if the content should obtain from the text editor or a snippet
 - set the content via the text editor
 - set the content via snippet
 - select the position of the content, for example icon on the left and content on the right or icon on the right and content on the left
 - select the orientation of the area (left, center or right)
 - set a link for the area
 - select the link target of the area, for example in the current tab, in a new tab or in a modalbox

## Available snippets to customize the content or the icons
 - ContentTextEditorTopBarArea1
 - ContentTextEditorTopBarArea2
 - ContentTextEditorTopBarArea3
 - ContentTextEditorTopBarArea4
 - ContentTopBarArea1
 - ContentTopBarArea2
 - ContentTopBarArea3
 - ContentTopBarArea4
 - IconTopBarArea1
 - IconTopBarArea2
 - IconTopBarArea3
 - IconTopBarArea4

## Some changes in the settings within the configuration are not immediately visible in the frontend of the shop
After changing settings specifically for the appearance of the areas (*1), the theme must be recompiled, for example by saving the theme in the administration:
1. Switch to "Content" and "Themes"
2. Select the active theme
3. Click on the button "Save"

## How to install the extension
### via console (recommended)
1. Download the latest _SschreierTopbarNotifications-master.zip_.
2. Unzip the zip file and rename the folder to _SschreierTopbarNotifications_. 
3. Move the folder to the project folder _custom/plugins/_ .
4. Connect to the console via ssh:

```
bin/console plugin:refresh
bin/console plugin:install --activate SschreierTopbarNotifications
```

### via composer
1. Add the repository URL to the composer.json of the project
```
"repositories": [
    ...,
    {
        "type": "vcs",
        "url": "https://github.com/sschreier/SschreierTopbarNotifications"
    }
],
```

2. Connect to the console via ssh and install the plugin source code via the command 
```
composer require sschreier/sschreiertopbarnotifications
bin/console plugin:refresh
bin/console plugin:install --activate SschreierTopbarNotifications
```

### via zip upload
1. Download the latest _SschreierTopbarNotifications-master.zip_.
2. Unzip the zip file and rename the folder to _SschreierTopbarNotifications_.
3. Zip the folder to _SschreierTopbarNotifications.zip_.
4. Upload the zip in the Shopware Administration.
5. Install & Activate the extension.

#### extension update (zip)
1. Download the latest _SschreierTopbarNotifications-master.zip_.
2. Unzip the zip file and rename the folder to _SschreierTopbarNotifications_.
3. Zip the folder to _SschreierTopbarNotifications.zip_.
4. Upload the zip in the Shopware Administration.
5. Update the extension.

## Images

### top bar with four areas

![top bar with four areas](https://www.sebastianschreier.de/plugins/sschreierTopbarnotifications/sschreierTopbarnotifications-Image1.jpg)

### top bar with four areas, first area is linked with a modal box

![top bar with four areas, first area is linked with a modal box](https://www.sebastianschreier.de/plugins/sschreierTopbarnotifications/sschreierTopbarnotifications-Image2.jpg)

### top bar with four areas in a smaller viewport

![top bar with four areas in a smaller viewport](https://www.sebastianschreier.de/plugins/sschreierTopbarnotifications/sschreierTopbarnotifications-Image3.jpg)

### top bar with only one area

![top bar with only one area](https://www.sebastianschreier.de/plugins/sschreierTopbarnotifications/sschreierTopbarnotifications-Image4.jpg)

### footer bar with four areas

![footer bar with four areas](https://www.sebastianschreier.de/plugins/sschreierTopbarnotifications/sschreierTopbarnotifications-Image9.jpg)

### bar with only one area above the breadcrumb navigation

![bar with only one area above the breadcrumb navigation](https://www.sebastianschreier.de/plugins/sschreierTopbarnotifications/sschreierTopbarnotifications-Image11.jpg)

### bar with only one area below the breadcrumb navigation

![bar with only one area below the breadcrumb navigation](https://www.sebastianschreier.de/plugins/sschreierTopbarnotifications/sschreierTopbarnotifications-Image12.jpg)

### extension configuration - top bar part 1

![extension configuration - top bar part 1](https://www.sebastianschreier.de/plugins/sschreierTopbarnotifications/sschreierTopbarnotifications-Image5.jpg)

### extension configuration - top bar part 2

![extension configuration - top bar part 2](https://www.sebastianschreier.de/plugins/sschreierTopbarnotifications/sschreierTopbarnotifications-Image6.jpg)

### extension configuration - area 1 part 1

![extension configuration - area 1 part 1](https://www.sebastianschreier.de/plugins/sschreierTopbarnotifications/sschreierTopbarnotifications-Image7.jpg)

### extension configuration - area 1 part 2

![extension configuration - area 1 part 2](https://www.sebastianschreier.de/plugins/sschreierTopbarnotifications/sschreierTopbarnotifications-Image8.jpg)

### extension configuration - area 1 part 3

![extension configuration - area 1 part 3](https://www.sebastianschreier.de/plugins/sschreierTopbarnotifications/sschreierTopbarnotifications-Image10.jpg)
