/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(e) {
    var links = $('.ajax-eliminar');
    for (var i = 0; i < links.length; i++) {
        var link = links[i];
        var url = link.attr('data-url');
        var slug = link.attr('data-slug');

        link.bind('click', function() {
            $.ajax({
                type: 'POST',
                url: url,
                data: 'slug=' + slug,
                success: function(data) {
                    $(this).parent().parent().remove();
                }
            });


        });
    }

});

