$(document).ready(function(){
    var forma = $('#miforma');
    alert("HOla");
    forma.submit(function(event){
        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: $(this).serialize(),
            dataType: 'json',
            success: function(data){
                $('#hola').html(data.msg);
            }
        });
        event.preventDefault();
    });
});


