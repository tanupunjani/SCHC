var editor = AlloyEditor.editable('textbox1', {
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