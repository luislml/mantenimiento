$(document).ready(function(){
    function loadarea() {
        var unidad_id = $('#unidad').val();
        if ($.trim(unidad_id) != '') {
            $.get('areas', {unidad_id: unidad_id}, function (areas) {

                var old = $('#area').data('old') != '' ? $('#area').data('old') : '';

                $('#area').empty();
                $('#area').append("<option value=''>Selecciona un area</option>");

                $.each(areas, function (index, value) {
                    $('#area').append("<option value='" + index + "'" + (old == index ? 'selected' : '') + ">" + value +"</option>");
                })
            });
        }
    }
    loadarea();
    $('#unidad').on('change', loadarea);
});

