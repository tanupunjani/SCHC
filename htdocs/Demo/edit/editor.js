var editor = AlloyEditor.editable('main-wrapper', {
    toolbars: {
        styles: {
            selections: [
                {
                    name: 'text', 
                    buttons: ['paragraphLeft', 'paragraphCenter', 'paragraphRight', 'bold', 'italic', 'underline', 'linkEdit', 'image'],
                    test: AlloyEditor.SelectionTest.text
                }
            ]
        }
    }
});