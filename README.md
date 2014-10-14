# EditBoxes plugin for CakePHP

This plugin provides an easy way to update static pages content in elaborate layouts. Once the layout is laid down, replace text sections by EditBoxes to allow admins to edit them inline.

## Requirements

CakePHP 2.4.0+  
[GtwUi](https://github.com/Phillaf/GtwUi)  
[GtwRequire](https://github.com/Phillaf/GtwRequire)

## Installation

Init the plugin by adding this line in `app/Config/bootstrap.php`

    CakePlugin::load('GtwEditBoxes' => array('bootstrap' => 'init'));
    
Add the following config to your requirejs config file

    requirejs.config({
        paths: {
            editbox:  '/GtwEditBoxes/js'
        }
    });
    
Include editbox.less in your theme.less file

    @import "../GtwEditBoxes/less/editbox.less";
    
## How to use

1. Create EditBoxes in the database by pointing your browser to `/gtw_edit_boxes/edit_boxes/`. Titles needs to be unique, lowecase_underscored.
2. Show EditBoxes in your views with `<?php echo $this->element('GtwEditBoxes.view', array("name" => "example_box"), array('cache'=>true)); ?>`.
3. Give admin control by using `<?php echo $this->element('GtwEditBoxes.admin', array("name" => "example_box"), array('cache'=>true)); ?>`. You will need to load 

Make sure you setup your permissions correctly so that the admins can use the "save" function.

## Copyright and license
Author: Philippe Lafrance  
Copyright 2013 [Gintonic Web](http://gintonicweb.com)  
Licensed under the [Apache 2.0 license](http://www.apache.org/licenses/LICENSE-2.0.html)
