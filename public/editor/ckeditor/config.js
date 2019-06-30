/** 
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved. 
 * For licensing, see LICENSE.md or http://ckeditor.com/license 
 */
CKEDITOR.editorConfig = function(config) {
    // Define changes to default configuration here. For example:  
    // config.language = 'fr';  
    // config.uiColor = '#AADC6E';  
    config.filebrowserBrowseUrl = 'http://php.microfinet.com/cartwala/public/editor/kcfinder/browse.php?opener=ckeditor&type=files';
    config.filebrowserImageBrowseUrl = 'http://php.microfinet.com/cartwala/public/editor/kcfinder/browse.php?opener=ckeditor&type=images';
    config.filebrowserFlashBrowseUrl = 'http://php.microfinet.com/cartwala/public/editor/kcfinder/browse.php?opener=ckeditor&type=flash';
    config.filebrowserUploadUrl = 'http://php.microfinet.com/cartwala/public/editor/kcfinder/upload.php?opener=ckeditor&type=files';
    config.filebrowserImageUploadUrl = 'http://php.microfinet.com/cartwala/public/editor/kcfinder/upload.php?opener=ckeditor&type=images';
    config.filebrowserFlashUploadUrl = 'http://php.microfinet.com/cartwala/public/editor/kcfinder/upload.php?opener=ckeditor&type=flash';
};