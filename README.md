# Gravatar Helper
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md) 
[![Travis](https://img.shields.io/travis/PotatoPowered/gravatar-helper.svg?style=flat-square)](https://travis-ci.org/PotatoPowered/phone-helper/builds) 
[![Codecov](https://img.shields.io/codecov/c/github/PotatoPowered/gravatar-helper.svg?style=flat-square)](https://codecov.io/github/PotatoPowered/phone-helper) 
[![Scrutinizer](https://img.shields.io/scrutinizer/g/PotatoPowered/gravatar-helper.svg?style=flat-square)](https://scrutinizer-ci.com/g/PotatoPowered/phone-helper/)
[![Packagist](https://img.shields.io/packagist/dt/potatopowered/gravatar-helper.svg?style=flat-square)](https://packagist.org/packages/potatopowered/gravatar-helper)

A helper that can be used to pull profile pictures from the gravatar service for CakePHP 3.x

## Description

The gravatar helper aims to make it easy to pull user avatars from the gravatar service rather than having to rebuilt the basic connection and link generation for the API every time you want to use it. There are many customizations that can be set including defaults and the avatar size returned.

## Installation

```
composer require potatopowered/gravatar-helper
```
Add the helper to the public helpers variable of the controller you need it on or in the AppController
to have it accessible in all controllers.
```
public $helpers = [
    'Gravatar' => [
        'className' => 'GravatarHelper.Gravatar'
    ]
];
```

## Usage

To use the gravatar helper you simply call the avatar function of the Gravatar helper with the user email as the argument. There are also several options you can set to change defaults like size.
```
// the avatar of the user with an email of $email
$this->Gravatar->avatar($email, ['size' => 40]);
```

## Options for Avatar

 * size: The width and height of the profile (150 default)
 * default: The default gravatar image (mm default) [List Here](http://en.gravatar.com/site/implement/images/)
 * class: The css class of the image tag (gravatar default)
```
