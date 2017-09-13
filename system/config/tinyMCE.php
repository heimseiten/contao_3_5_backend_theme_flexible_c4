<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * This is the tinyMCE (rich text editor) configuration file. Please visit
 * http://tinymce.moxiecode.com for more information.
 */
if ($GLOBALS['TL_CONFIG']['useRTE']):

?>
<script>window.tinymce || document.write('<script src="<?php echo TL_ASSETS_URL; ?>assets/tinymce4/tinymce.gzip.js">\x3C/script>')</script>
<script>
setTimeout(function() {
  window.tinymce && tinymce.init({
    skin: 'contao',
    selector: '#<?php echo $selector; ?>',
    language: '<?php echo Backend::getTinyMceLanguage(); ?>',
    element_format: 'html',
    document_base_url: '<?php echo Environment::get('base'); ?>',
    entities: '160,nbsp,60,lt,62,gt,173,shy',
    setup: function(editor) {
      editor.getElement().removeAttribute('required');
    },
    init_instance_callback: function(editor) {
      if (document.activeElement && document.activeElement.id && document.activeElement.id == editor.id) {
        editor.editorManager.get(editor.id).focus();
      }
      editor.on('focus', function() { Backend.getScrollOffset(); });
    },
    file_browser_callback: function(field_name, url, type, win) {
      Backend.openModalBrowser(field_name, url, type, win);
    },
    templates: [
      <?php echo Backend::getTinyTemplates(); ?>
    ],
    plugins: 'autosave charmap code fullscreen image importcss link lists paste searchreplace tabfocus table template visualblocks textcolor',
    browser_spellcheck: true,
    tabfocus_elements: ':prev,:next',
    importcss_append: true,
    importcss_groups: [{title: '<?php echo Config::get('uploadPath'); ?>/tinymce.css'}],
    content_css: '<?php echo TL_PATH; ?>/system/themes/tinymce.css,<?php echo TL_PATH . '/' . Config::get('uploadPath'); ?>/tinymce.css',
    extended_valid_elements: 'q[cite|class|title],article,section,hgroup,figure,figcaption',
    menubar: 'file edit insert view format table',
    toolbar: 'link unlink | image | bold | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | fontsizeselect | formatselect | forecolor | undo redo | code',
    textcolor_map: ["000000", "Black", "993300", "Burnt orange", "333300", "Dark olive", "003300", "Dark green", "003366", "Dark azure", "000080", "Navy Blue", "333399", "Indigo", "333333", "Very dark gray", "800000", "Maroon", "FF6600", "Orange", "808000", "Olive", "008000", "Green", "008080", "Teal", "0000FF", "Blue", "666699", "Grayish blue", "808080", "Gray", "FF0000", "Red", "FF9900", "Amber", "99CC00", "Yellow green", "339966", "Sea green", "33CCCC", "Turquoise", "3366FF", "Royal blue", "800080", "Purple", "999999", "Medium gray", "FF00FF", "Magenta", "FFCC00", "Gold", "FFFF00", "Yellow", "00FF00", "Lime", "00FFFF", "Aqua", "00CCFF", "Sky blue", "993366", "Red violet", "FFFFFF", "White", "FF99CC", "Pink", "FFCC99", "Peach", "FFFF99", "Light yellow", "CCFFCC", "Pale green", "CCFFFF", "Pale cyan", "99CCFF", "Light sky blue", "CC99FF", "Plum"],
    
  });
}, 0);
</script>
<?php endif; ?>
