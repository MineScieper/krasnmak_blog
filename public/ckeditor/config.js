/**
 * @license Copyright (c) 2003-2022, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For complete reference see:
	// https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html

	// The toolbar groups arrangement, optimized for two toolbar rows.
    config.toolbarGroups = [
        { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
        { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
        { name: 'forms', groups: [ 'forms' ] },
        { name: 'tools', groups: [ 'tools' ] },
        { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
        { name: 'others', groups: [ 'others' ] },
        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
        { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
        { name: 'links', groups: [ 'links' ] },
        { name: 'insert', groups: [ 'insert' ] },
        { name: 'styles', groups: [ 'styles' ] },
        { name: 'colors', groups: [ 'colors' ] },
        { name: 'about', groups: [ 'about' ] }
    ];

    config.removeButtons = 'Cut,Copy,Paste,Redo,Anchor,Strike,Outdent,Indent,About,PasteText,PasteFromWord';

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';

	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';

    config.extraPlugins = 'image2,justify,font,richcombo,floatpanel,panel,listblock,button';
    config.removePlugins = 'image';

    config.autoGrow_bottomSpace = 50;
    config.autoGrow_maxHeight = 500;
    config.autoGrow_onStartup = true;

    config.fontSize_defaultLabel = '18';
    config.fontSize_sizes = '18/18px;23/23px;';
    config.font_defaultLabel = 'GolosUI';
    config.font_names = '';

    // Насильно изменять размер картинки - высоту делать равной 500px, а ширина пропорционально изменяется
    // Принцип работы - изменение функции кнопки 'ОК'
    CKEDITOR.on('dialogDefinition', function (ev) {
        var dialogName = ev.data.name,
            dialogDefinition = ev.data.definition;
        if (dialogName == 'image2') {
            var onOk = dialogDefinition.onOk;
            dialogDefinition.onOk = function (e) {
                var width = this.getContentElement('info', 'width');
                width.setValue('null');// Set Default Width
                if (this.getContentElement('info', 'height').getValue() < 500) {
                    this.getContentElement('info', 'height').setValue('500');
                }
                if (this.getContentElement('info', 'align').getValue() === 'none') {
                    this.getContentElement('info', 'align').setValue('center');
                }
                onOk && onOk.apply(this, e);
            };
        }
    });
};
