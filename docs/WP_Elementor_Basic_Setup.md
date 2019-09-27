# WP Basic Setup with Elementor (Pro)
This is our basic setup routine we use for new wordpress installations. 

## Install Wordpress
Use your app manager to install a fresh copy of wordpress (currently 5.2.3).

### Cleanup and activate theme
- Login to [your-url]/wp-admin
- To go Plugins 
- Deactive and delete all plugins
- Go to Themes
- Add new - OceanWP (or the theme you want)
- Activate Theme
- Delete all other themes for security reasons

## install plugins
- install all basic plugins we need
  - Elementor
  - add ocean extra and wpforms (ocean wp tells you to do so)
    - if you see error "Cannot modify header information" for ocean extra - just ignore its fine
  - ithemes security
  - updraftplus
  
## basic setup
- go to pages - delete all (trash - then remove)
- create empty page called "home","about","contact" - if you need "blog"
- go to Settings - Read 
  - choose "home" as homepage, if you have "blog" as blog page (optional)
- go to Settings - Permalinks 
  - change to "postname" and save
- go to Design - Menus 
  - create new menu name it "MainMenu"
  - Add at least 1 page
  - set as "general menu" for theme
- backup the page

