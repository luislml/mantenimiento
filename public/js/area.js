$(document).ready(function(){
    function loadarea() {
        var unidad_id = $('#unidad').val();
        if ($.trim(unidad_id) != '') {
            $.get('area', {unidad_id: unidad_id}, function (areaa) {

                var old = $('#area').data('old') != '' ? $('#area').data('old') : '';
                alert(areaa);
                $('#area').empty();
                $('#area').append("<option value=''>Selecciona un area</option>");

                $.on(area,{unidad_id:unidad_id}, function (index, value) {
                    $('#area').append("<option value='" + index + "'" + (old == index ? 'selected' : '') + ">" + value +"</option>");
                })
            });
        }
    }
    loadarea();
    $('#unidad').on('change', loadarea);
});

