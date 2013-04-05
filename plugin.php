<script src="<?php echo $plugin; ?>src/epiceditor/js/epiceditor.min.js"></script>
<script>
//Override the "basePath" option in all instances made of EpicEditor.
(function(root, EpicEditor){
  root.EpicEditor = function(options){
    options.basePath = "<?php echo $plugin; ?>src/epiceditor";
    return new EpicEditor(options);
  }
})(window, EpicEditor);
</script>
