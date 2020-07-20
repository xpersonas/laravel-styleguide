{{--CodeMirror Scripts and Styles.--}}
<script src= "https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.55.0/codemirror.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.55.0/codemirror.min.css">
<script src= "https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.55.0/mode/javascript/javascript.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.55.0/theme/monokai.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.55.0/mode/xml/xml.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.55.0/addon/edit/closetag.js"></script>
<script src="../https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.55.0/addon/fold/xml-fold.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.55.0/mode/css/css.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.55.0/mode/htmlmixed/htmlmixed.js"></script>
<script>
    const codemirrorEditor = CodeMirror.fromTextArea(document.querySelector('.coder'), {
        lineNumbers: true,
        mode : "text/html",
        htmlMode: true,
        theme: "monokai",
        lineWrapping: false,
        autoCloseTags: true,
    });
</script>
