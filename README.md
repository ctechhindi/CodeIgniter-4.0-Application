# CodeIgniter 4 Development

[![Build Status](https://travis-ci.org/bcit-ci/CodeIgniter4.svg?branch=develop)](https://travis-ci.org/bcit-ci/CodeIgniter4)
[![Coverage Status](https://coveralls.io/repos/github/bcit-ci/CodeIgniter4/badge.svg?branch=develop)](https://coveralls.io/github/bcit-ci/CodeIgniter4?branch=develop)
<br>
[Source Code](https://goo.gl/PRREG6)

## What is CodeIgniter?
CodeIgniter is a PHP full-stack web framework that is light, fast, flexible, and secure. 
More information can be found at the [official site](http://codeigniter.com).

This repository holds the pre-alpha code for CodeIgniter 4 only. 
Version 4 is a complete rewrite to bring the quality and the code into a more modern version, 
while still keeping as many of the things intact that has made people love the framework over the years. 

**This is pre-release code and should not be used in production sites.**

More information about the plans for version 4 can be found in [the announcement](http://forum.codeigniter.com/thread-62615.html) on the forums.

### Documentation

The current documentation can be found [here](https://bcit-ci.github.io/CodeIgniter4/). As with the rest of the framework, it is currently a work in progress, and will see changes over time to structure, explanations, etc.

## Important Change with index.php

index.php is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!
The user guide updating and deployment is a bit awkward at the moment, but we are working on it!

## Server Requirements
PHP version 7.1 or higher is required, with the following extensions installed: 

- intl


## Git Commit's

- Setup (Installing Codeigniter 4.0-dev)