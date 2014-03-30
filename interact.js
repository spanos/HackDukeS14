$(document).ready(function () {
        $('input:submit').click( function() {
        if (!confirm("Change status?")){
                return false;
        }
        })
});
