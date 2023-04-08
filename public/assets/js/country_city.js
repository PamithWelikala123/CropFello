$(document).ready(function() {
    $('#country').change(function() {
        var countryId = $(this).val();
        if (countryId !== '') {
            $.ajax({
                url: 'index.php?controller=country_city&action=getCitiesByCountry&country_id=' + countryId,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#city').empty();
                    $.each(data, function(key, value) {
                        $('#city').append('<option value="' + value.id + '">' + value.name + '</option>');
                    });
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus + ': ' + errorThrown);
                }
            });
        }
        else {
            $('#city').empty();
            $('#city').append('<option value="">Select a city</option>');
        }
    });
});