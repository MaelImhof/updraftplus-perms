<p align="center">
    <img src="https://img.shields.io/github/v/release/MaelImhof/updraftplus-perms" />
    <img src="https://img.shields.io/badge/Wordpress-6.1.1-blue" />
    <img src="https://img.shields.io/badge/UpdraftPlus-1.22.24-red" />
    <img src="https://img.shields.io/github/last-commit/MaelImhof/updraftplus-perms/main" />
</p>

# UpdraftPlus Perms

*UpdraftPlus Perms*, or *Allow Editors in UpdraftPlus admin*, I don't know how to call it,
is a pretty straightforward Wordpress plugin that allows you to let your Wordpress site's
editors **use [UpdraftPlus](https://wordpress.org/plugins/updraftplus/) and make backups of
your site** even tho, by default, only administrators can access the UpdraftPlus settings.

## Status of the "plugin"

"Plugin" because it is actually a few lines of code, not much of a plugin.

Anyway, the plugin might get some update in the future, don't really know, it depends on if
I ever need it again (probably) and if I need more features to it (less likely).

See below for a quick list of ideas of features that could appear in this plugin.

It has been tested using `Wordpress 6.1.1` and `UpdraftPlus 1.22.24`, but I assume it can
work with later versions since it only uses one Wordpress filter that is unlikely to change.

## Using UpdraftPlus Perms

Basically head to the repo's [releases tab](https://github.com/MaelImhof/updraftplus-perms/releases),
pick the last one and download the `updraftplus-perms.zip` file attached to it. You can then use
this file to upload the plugin to your Wordpress site and install it.

Once activated, the plugin will work, and your editors should be able to see the UpdraftPlus settings.

## Having issues?

If you encounter any issue running the plugin, please let me know using the repo
[issues tab](https://github.com/MaelImhof/updraftplus-perms/issues).

## Contributing

Contributions are welcome, feel free to open a pull-request if you want to add something to the code.

Other contributions like opening issues for problems or new features ideas are welcome as well !

## Roadmap (ideas)

Here are some ideas of features I could add to the plugin in the future (or that you could work on
if you want to contribute to the code.)

| Idea title                 | Idea description                                                                                                                                                                                                                                                         |
|----------------------------|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| Custom required permission | The plugin has a settings page where admins can define what permission should be required to access UpdraftPlus settings (currently in 1.0.0.0 : 'moderate_comments'                                                                                                     |
| Must use plugin            | Create a simple way to automatically put this plugin in the Must-Use Plugins directory (see [documentation](https://wordpress.org/documentation/article/must-use-plugins/)). I honestly don't know if that's possible to do it automatically, but I find it pretty neat. |
| Custom permission          | Instead of using an existing permission to access UpdraftPlus settings, create a new permission managed by UpdraftPlus Perms. This permission could then be added to roles.                                                                                              |