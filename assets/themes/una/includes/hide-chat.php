<script type='text/javascript'>
olark('api.box.hide');
olark('api.visitor.getDetails', function(details){
    if (details.isConversing) {
        olark('api.box.show');
    }
});
</script>