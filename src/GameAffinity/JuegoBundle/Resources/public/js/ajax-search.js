/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {

    jQuery('#buscador').keyup(function() {

        var input = jQuery('#buscador').val();
        var url = jQuery('#buscador').attr('data-url');

        

        //la busqueda
        if (jQuery('#buscador').val().length !==0){

            jQuery.ajax({
                type: 'POST',
                url: url,
                data: "input=" + input,
                dataType: 'html',
                success: function(data) {


                    jQuery("#resultado").empty();
                    jQuery('#resultado').html(data);

                }



            }



            );
        }
    }

    );



});
