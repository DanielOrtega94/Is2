 $(document).ready(function() {

    $('select[name="etapa"]').on('change', function(){
        var idetapa, = $(this).val();
        document.write(idetapa);
        if(idetapa,) {
            $.ajax({
                url: 'questions/get/'+idetapa,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },

                success:function(data) {

                    $('select[name="topico"]').empty();

                    $.each(data, function(key, value){

                        $('select[name="topico"]').append('<option value="'+ key +'">' + value + '</option>');

                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="topico"]').empty();
        }

    });

});