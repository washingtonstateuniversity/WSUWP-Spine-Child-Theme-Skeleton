WSUWP Spine Child Theme Skeleton
===============================

[![Build Status](https://travis-ci.org/washingtonstateuniversity/WSUWP-Spine-Child-Theme-Skeleton.svg?branch=master)](https://travis-ci.org/washingtonstateuniversity/WSUWP-Spine-Child-Theme-Skeleton)

A framework for building a [WordPress child theme](http://codex.wordpress.org/Child_Themes) for the [WSUWP Spine Parent Theme](https://github.com/washingtonstateuniversity/WSUWP-spine-parent-theme) at WSU.

## Initial setup

### Setup the theme repository

1. Create a [new repository](https://github.com/organizations/washingtonstateuniversity/repositories/new) under the Washington State University organization. This should have a name like "website.wsu.edu" that matches the address of the site where the theme will be used. If this is a more general theme, feel free to use something like "WSUWP Descriptive Theme".
1. Clone this [WSUWP Spine Child Theme Skeleton](https://github.com/washingtonstateuniversity/WSUWP-Spine-Child-Theme-Skeleton) repository to a directory on your computer named for the new theme.
1. Change into that new directory.
1. Remove the `.git` directory that provides the history for the WSUWP Spine Child Theme Skeleton project.
1. Initialize a new git repository in the directory.
1. Add the new repository you created in step 1 as the `origin` remote.

#### In terminal

```
git clone https://github.com/washingtonstateuniversity/WSUWP-Spine-Child-Theme-Skeleton.git website-theme-dev
cd website-theme-dev
rm -fr .git
git init
git remote add origin https://github.com/washingtonstateuniversity/website.wsu.edu.git
git status
```

### Alter the theme to be its own project

There are several places throughout the WSUWP Child Theme Skeleton code that should be changed to match the new theme.

1. The theme header portion of the stylesheet in `css/00-banner.css` should be adjusted.
1. Update the project name in `composer.json`.
1. Update the project name and URL in `package.json`.
1. Update the name and description of the project in `README.md`, replacing all of this text.
1. Update the name, copyright, and URL in `LICENSE`.
1. If desired, replace `screenshot.png` with a screenshot of the child theme.

### Testing the initial theme structure

1. Install the NPM dependencies.
1. Install the Composer dependencies.
1. Ensure code standards are sniffed properly.
1. Ensure CSS files are properly processed into `style.css` and `style.css.map`.

#### In terminal

```
npm install
composer install
grunt phpcs
grunt
```

### Add the updated theme files to the repository

The theme should now be in its initial state, with all pieces renamed to fit the new project. An initial commit can be added with all of these files.

1. Check `git status` to be sure only the intended files are being added.
1. Add all files to staging.
1. Add an initial commit.
1. Push the initial commit to the master branch on the origin remote.

#### In terminal

```
git status
git add -A
git commit -m "Initial commit"
git push origin master
```

### Maintaining the project structure

The child theme CSS is maintained in the `css/` directory. Grunt tasks are responsible for concatenating these files in alphabetical order, running autoprefixer, and then linting the compiled CSS for errors. The final destination for the CSS is `style.css`. A source map is created in `style.css.map`.

* CSS should be added and edited in the `css/` directory.
* The built `style.css` is automatically generated **and** tracked in version control.
* Run `grunt` to generate `style.css` before committing changes.
* Use `grunt serve` to start a local web server and view the style guide.

When JavaScript is added to the theme, similar tasks can be added for linting, concatenating, and minifying the JavaScript as needed.
