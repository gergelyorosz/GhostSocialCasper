# Social Sidebar Casper Theme for Ghost

An theme for the [Ghost](https://ghost.org/) blog engine. This theme extends the extends the default [Casper theme](https://github.com/TryGhost/Casper) and adds:
- A **sidebar** for desktop size screens
- **Social icons** to the navigation links (does this for all well known sites in the Navigation list like GitHub, Linkedin. Twitter etc)
- Is **mobile optimized** meaning the sidebar is only shown on desktop resolutions, on mobile the original navigation menu with social icons is displayed

![screenshot of the Social Casper Theme](https://raw.githubusercontent.com/gergelyorosz/GhostSocialCasper/master/github-images/theme-on-multiple-screens.png)

### Adding Icons to Navigation Items

By naming the links in the Navigation section of Ghost as per these names, the theme will automaitcally add the right icons next to them.

![setting up the Ghost navigation links](https://raw.githubusercontent.com/gergelyorosz/GhostSocialCasper/master/github-images/ghost-setup.png)

Sites the theme supports - just use these names on the links
- *Design*: behance, devinatart, dribbble
- *Social*: facebook, foursquare, googlePlus, reddit, tumblr, twitter, tumblr
- *Image / video / music*: flickr, instagram, picasa, spotify, soundcloud, vimeo
- *Professional*: github, linkedin, slideshare

### Changing the Profile Image in the Theme

The theme uses the logo image in the blog to display in the sidebar. Change this image to replace what is shown here. Alternatively see how to customize the theme to change the image.

### Futher customizing the Theme 

My blog at [pragmaticengineer.com](http://pragmaticengineer.com) uses a slightly modified version of the theme.

![pragmaticengineer.com theme changes](https://raw.githubusercontent.com/gergelyorosz/GhostSocialCasper/master/github-images/pragmaticengineer-com.png)

Here is how to make some of the changes I performed. (Note that all these changes are in the [pragmaticengineer-com](https://github.com/gergelyorosz/GhostSocialCasper/tree/pragmaticengineer-com) branch.)

#### Change the profile image from the blog logo to something else

Follow instructions in `default.hbs` at the section `// to display a custom image...`

#### Add a title under the profile image

Follow instructions in `default.hbs` at the section `// to display your name under the blog logo or profile image...`

#### Add custom links or content under the navigation bar

Follow instructions in `default.hbs` in the `Add any other links to the sidebar, under the navigation links here` section.

#### Add / Modify a Social Icon

In `assets/css/screen.css` in the `15. Elusive Font` section add your own `.elusive-icon.myIcon:before` selector. The theme uses the [Elusive Icon](http://elusiveicons.com/icons/) set - adding icons that this font supports are straightforward.

### License

The theme is licensed under the [Apache License 2.0](https://raw.githubusercontent.com/gergelyorosz/GhostSocialCasper/master/LICENSE.txt)

### Credits

The theme is an extension to the orginal [Casper theme](https://github.com/TryGhost/Casper). Some modifications were inspired by the [Minimalistic Blog Theme](http://blog.rriegger.com/free-ghost-cms-template/) by [Raphael Rieger](https://github.com/rriegger)
