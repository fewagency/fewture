#fewture
WordPress functionality package by [FEW Agency](http://fewagency.se).

This readme-file and comments in the code may be general info but it may also be info that is mostly applicable to FEW Agency and the way we work. Feel free to use the info you find in this repo as you see fit.

##Wait, should this package be placed in the theme!?
Yes. I am aware of the concept of [functionality plugins](http://wpcandy.com/teaches/how-to-create-a-functionality-plugin)... In my opinion, that is a good solution when creating themes that are meant to be easily switched to another. However, since we ate FEW are always creating themes for clients and the theme holds a lot of custom functionality, changing a theme and expecting all functionality to still be there will never happen. If we, or someone else, were to make a major overhaul of a site, we would start anew either with a completely blank theme or using the existing theme as a base. Therefore, I decided to keep everything in the theme. Also, less Git-repos, meaning that we don't have to  upgrade our account every month :)

/[Björn F](https://github.com/folbert)  

##Requirements
PHP 5.4+
WordPress 4.0+

##Recommended plugins
Here are some plugins that we like and usually use with almost every installation of WordPress:

* [Admin Menu Editor](https://wordpress.org/plugins/admin-menu-editor/)
* [WordPress SEO by Yoast](https://wordpress.org/plugins/wordpress-seo/)
* [W3 Total Cache](https://wordpress.org/plugins/w3-total-cache/)

##frontend/

* recaptcha.php - Adds easy way to implement [Google Recaptcha](https://www.google.com/recaptcha/)
* assets.php - Adds commonly used assets
* functions.php - Removes some unnecessary stuff from <head>, adds some commonly used JS-vars.
* helpers.php - Adds some commonly used helper-functions
    * get_fa_file_icon_name - Get the name of the icon from Font Awesome that should be used for a file.
    
##backend/

* functions.php - Adds some JS and CSS to the admin system.

##Helpers
fewture comes with a couple of helper functions to make development easier:

* `fewture\dd($var)` - Dump and die. Wraps the dumped var in &lt;pre&gt;
* `fewture\vd($var, $before = '', $after = '')` - Var dump. Wraps the dumped value in &lt;pre&gt; which in turn is wrapped in $before and $after.


