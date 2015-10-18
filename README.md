Klingon Password Generator
=====================

My first attempt at a basic Laravel Package

Library for generating Klingon XKCD Style Passwords. 

## Basic Usage

    $generator = new ambielecki\LoremIpsum\Generator();
    $paragraphs = $generator->getParagraphs(5);
    echo implode('<p>', $paragraphs);

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