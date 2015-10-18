Klingon Password Generator
=====================

My first attempt at a basic Laravel Package

Library for generating Klingon XKCD Style Passwords. 

## Basic Usage

    $newpassword = new KlingonPassword\KlingonPass();
    $thispassword = $newpassword->getPassword(3);
    echo ($thispassword);

## Installation

### Using composer

    //composer.json
    
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/ambielecki/KlingonPassword"
        }
    ],
    
    "require": {
        "ambielecki/klingonpassword": "dev-master"
    }