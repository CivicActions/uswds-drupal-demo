# USWDS Subtheme

## Installation

1. Copy this folder ("my_subtheme") out into the desired location for your subtheme (eg, themes/custom/my_subtheme).
2. Rename the folder to the name of your theme (eg, my_renamed_theme).
3. Rename the my_subtheme.info.yml.rename-me file to name-of-your-theme.info.yml (eg, my_renamed_theme.info.yml).
4. Tweak that .info.yml file as needed, noting the instructions there for Sass workflow, if that is desired.
5. If you are using the Sass workflow, copy the settings Sass partials from "node_modules/uswds/dist/scss/settings" to the sass directory in your sub theme. Setup your compiler to import the settings first, then USWDS, then your custom Sass.
6. Enable this theme in the usual way (eg, drush en my_renamed_subtheme).
