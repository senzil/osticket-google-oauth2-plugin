osTicket plugin for Google Outh2 Login
=========================

Based on core plugin aouth-aouth2
[![aouth-aouth2](https://github.com/osTicket/osTicket-plugins/tree/develop/auth-oauth)](https://github.com/osTicket/osTicket-plugins/tree/develop/auth-oauth)
with some fixes and extra features
- [![Use Helpdesk URL for redirect](https://github.com/osTicket/osTicket-plugins/pull/121)](https://github.com/osTicket/osTicket-plugins/pull/121)
- [![Domain Whitelist](https://github.com/osTicket/osTicket-plugins/pull/122/files)](https://github.com/osTicket/osTicket-plugins/tree/develop/auth-oauth)
- Add clients and agents buttons url on config to put the image of your preference.
- Renamed all Google+ to Just Google


Installing
==========

Clone this repo or download the zip file and place the contents into
`include/plugins/google-oauth2-plugin` folder

After cloning, `hydrate` the repo by downloading the third-party library
dependencies.

    php make.php hydrate

Building Plugins
================
Make any necessary additions or edits to plugin and build PHAR file with
the `make.php` command

    php -dphar.readonly=0 make.php build

This will compile a PHAR file for the plugin directory. The PHAR will be
named `google-oauth2-plugin.phar` and can be dropped into the osTicket `plugins/` folder
directly.