const editor = new EditorJS({
    holder: 'editorjs',
    tools: {
      header: {
        class: Header,
        inlineToolbar: true,
        config: {
          levels: [2, 3, 4],
          defaultLevel: 3
        }
      },
      paragraph: {
        class: Paragraph,
        inlineToolbar: true,
      }
    }
  });
  
  function saveData() {
    editor.save().then((outputData) => {
      console.log("Editor.js Output:", outputData); // Logs full structured data
  
      // Extracting only text content from blocks
      const textContent = outputData.blocks.map(block => block.data.text).join("\n");
      console.log("Extracted Text Content:\n", textContent); // Logs plain text
  
      fetch('/save', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({ content: outputData })
      });
    }).catch((error) => {
      console.log('Saving failed: ', error);
    });
  }