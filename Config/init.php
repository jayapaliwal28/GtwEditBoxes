<?php
/*
    Gintonic Web
    Author:    Philippe Lafrance
    Link:      http://gintonicweb.com
    
*/

if (!file_exists(WWW_ROOT.'GtwEditBoxes')){
    symlink ( CakePlugin::path('GtwEditBoxes').'webroot' , WWW_ROOT.'GtwEditBoxes');
}