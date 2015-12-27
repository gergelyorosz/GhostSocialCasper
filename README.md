# Social Sidebar Casper Theme for Ghost with Comments and Contact Form

An theme for the [Ghost](https://ghost.org/) blog engine. Check out how it looks on [this blog](http://blog.pragmaticengineer.com/). Download the theme [as a .zip](https://github.com/gergelyorosz/GhostSocialCasper/releases) from the Releases page. 

This theme extends the extends the default [Casper theme](https://github.com/TryGhost/Casper) and adds:
- A **sidebar** for desktop size screens*
- **Social icons** to the navigation links (does this for all well known sites in the Navigation list like GitHub, Linkedin. Twitter etc)
- **Disqus comments** at the bottom of every post (see [instructions](#disqus-comments) on configuring this)
- A **contact form** with field validation that allows sending out emails (see [instructions](#contact-page) on configuring this)
- Is **mobile optimized** - meaning the sidebar is only shown on desktop resolutions (with screen width at least 880px). On mobile and small screens the original navigation menu with social icons is displayed.

![screenshot of the Social Casper Theme](https://raw.githubusercontent.com/gergelyorosz/GhostSocialCasper/master/github-images/theme-on-multiple-screens.png)

*Note: the sidebar is displayed on the index, post and page subpages. For the author and tag pages no sidebar is displayed.

### Adding Icons to Navigation Items

The theme supports the following sites:

![social icons that the Social Sidebar Casper theme supports](https://raw.githubusercontent.com/gergelyorosz/GhostSocialCasper/master/github-images/supported-social-icons.png)

- *Design*: behance, devinatart, dribbble
- *Social*: facebook, foursquare, googlePlus, reddit, tumblr, twitter, tumblr
- *Image / video / music*: flickr, instagram, picasa, spotify, soundcloud, vimeo
- *Professional*: github, linkedin, slideshare

By setting the `Label` name to match any of these names in the Navigation section of Ghost, the theme will automaitcally add the right icons next to them. E.g. if you add a navigation item with the `Label` being `facebook` and the URL being `http://facebook.com/myprofile`, then the theme will display the Facebook icon next to this link.

![setting up the Ghost navigation links](https://raw.githubusercontent.com/gergelyorosz/GhostSocialCasper/master/github-images/ghost-setup.png)

### Disqus Comments

![Disqus comments with the Ghost theme](https://raw.githubusercontent.com/gergelyorosz/GhostSocialCasper/master/github-images/disqus-screenshot.png)

- To add Disqus comments to your site, you will first need to [register to Disqus](https://disqus.com/register).
- Then in `post.hbs` after the `<!-- Disqus START-->` section, change the `var disqus_shortname = 'example';` line to your blog's identifier, as explained in [these instructions](https://help.disqus.com/customer/portal/articles/1454924-ghost-installation-instructions).
- To disable Disqus comments, simply delete the lines in `post.hbs` between `<!-- Disqus START-->` and `<!-- Disqus END-->`

### Contact Page

![Ghost contact form using Bootstrap and field validation](https://raw.githubusercontent.com/gergelyorosz/GhostSocialCasper/master/github-images/contact-form.gif)

- A backend component needs to be added to send out emails. While [it is possible](https://medium.com/@mariusc23/send-an-email-using-only-javascript-b53319616782) to send emails via Javascript using REST calls, I wouldn't recommend it. The component I'm using is a PHP script - see [ghostContactSendMail.php](https://github.com/gergelyorosz/GhostSocialCasper/blob/master/ServerComponents/ghostContactSendMail.php)
- To enable the contact form, create a static page called Contact, and make sure its URL is `/contact`... and that's it!
- The contact page uses [Bootstrap](http://getbootstrap.com/) to render the form, and the [1000Hz validator plugin](http://1000hz.github.io/bootstrap-validator/)
- All logic for the contact form is in `page-contact.hbs`
- As a small touch when submitting the field, the "send" button turns into this spinner. After submission success or error messages are shown:

![Bootstrap spinning loading button](https://raw.githubusercontent.com/gergelyorosz/GhostSocialCasper/master/github-images/spinning-send-message.gif)


### Changing the Profile Image in the Theme

The theme uses the logo image in the blog to display in the sidebar. Change this image to replace what is shown here. Alternatively see how to customize the theme to change the image.

### Futher customizing the Theme 

My blog at [pragmaticengineer.com](http://pragmaticengineer.com) uses a slightly modified version of the theme.

![pragmaticengineer.com theme changes](https://raw.githubusercontent.com/gergelyorosz/GhostSocialCasper/master/github-images/pragmaticengineer-com.png)

Here is how to make some of the changes I performed. (Note that all these changes are in the [pragmaticengineer-com](https://github.com/gergelyorosz/GhostSocialCasper/tree/pragmaticengineer-com) branch.)

To make layout changes on the index page, posts and page type subpages, you need to manually make the same changes on all three places: `index.hbs`, `posts.hbs` and `page.hbs`. 

#### Change the profile image from the blog logo to something else

Follow instructions in `index.hbs`, `posts.hbs` and `page.hbs` at the section `// to display a custom image...`.

#### Add a title under the profile image

Follow instructions in `index.hbs`, `posts.hbs` and `page.hbs` at the section `// to display your name under the blog logo or profile image...`

#### Add custom links or content under the navigation bar

Follow instructions in `index.hbs`, `posts.hbs` and `page.hbs` in the `Add any other links to the sidebar, under the navigation links here` section.

#### Add / Modify a Social Icon

In `assets/css/screen.css` in the `15. Elusive Font` section add your own `.elusive-icon.myIcon:before` selector. The theme uses the [Elusive Icon](http://elusiveicons.com/icons/) set - adding icons that this font supports are straightforward.

### License

The theme is licensed under the [Apache License 2.0](https://raw.githubusercontent.com/gergelyorosz/GhostSocialCasper/master/LICENSE.txt)

### Credits

The theme is an extension to the orginal [Casper theme](https://github.com/TryGhost/Casper). Some modifications were inspired by the [Minimalistic Blog Theme](http://blog.rriegger.com/free-ghost-cms-template/) by [Raphael Rieger](https://github.com/rriegger).
