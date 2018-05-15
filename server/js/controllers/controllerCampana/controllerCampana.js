

$(document).ready(function(){

    // $("#form_campana").validate({
    //     rules         : {
    //         campana_name      : { required : true, minlength: 2},
    //         file_crear_campana         : { required : true}
    //     },
    //     messages      : {
    //         campana_name        : "Debe introducir un nombre de Campaña.",
    //         file_crear_campana  : "Debe introducir un rut."
    //     }
    // });

    $("#user_form2").validate({
        rules         : {
            id_user         : { required : true, minlength: 1},
            campana_name2      : { required : true, minlength: 2},
            rut             : { required : true, minlength: 1},
            user_name2      : { required : true, minlength: 2},
            user_tel        : { required : true, minlength: 7},
            user_deuda      : { required:true, minlength: 2}
        },
        messages      : {
            id_user      : "Debe Seleccionar un id de usuario.",
            campana_name2      : "Debe introducir un nombre de Campaña.",
            rut                : "Debe introducir un rut.",
            user_name2         : "Debe introducir un Nombre de usuario.",
            user_tel           : "Debe introducir un Télefono válido.",
            user_deuda         : "El campo Deuda es obligatorio."
            
        }
    });

    getIDCreador();
    // obtener id y nombre del creador campaña
    function getIDCreador(){
        $.get("controllers/controllerCampana/controllerGetIdCreador.php", function(data){
          // si existe un json lo parseo
          if(data){
            $("#id_user").append(data);
            
          }
          else
          {
            $('#alert_user_id').addClass('alert alert-danger');
            $('#alert_user_id').html('Ocurrio un error con el id del creador Campaña').show(2000).delay(3000).hide(5000);
          }
        });
  }

      getIdArbol();
      // obtener id y nombre de IVRC_ arbol para crear la tabla de forma de arbol con las campanas creadas
      function getIdArbol(){
          $.get("controllers/controllerArbol/controllerGetTree.php", function(data){
          
          if(data){
              $("#ivr_arbol").html(data);
              
          }
          else
          {
              $('#ivr_arbol').addClass('alert alert-danger');
              $('#ivr_arbol').html('Ocurrio un error con el id del arbol ivr').show(2000).delay(3000).hide(5000);
          }
          });
      }

      $('.selectpicker').selectpicker({
        language: 'ES',
        style: 'btn-info',
        size: 4
      });


    //crear una campaña como user o master
    $('#form_campana').on('submit', function(event){
        event.preventDefault();  
        $('#btn_submit').attr('disabled','disabled');
        $.ajax({
              url:"controllers/controllerCampana/controllerCampana.php",
              method:"POST",  
              data:new FormData(this),
              contentType:false,  
              processData:false,  
              success:function(data){  
                //   $('#result').html(data).show(2000).delay(3000).hide(5000);
                  $('#result').html(data);
                  
                  $('#file_crear_campana').val('');
                  $('#btn_submit').attr('disabled', false);
                  userdataTable.ajax.reload();
              }
        });
    });

    //muestra tabla con los datos de las campañas para el master
    var userdataTable = $('#user_data2').DataTable({
      "processing": true,
      "serverSide": true,
      "order": [],
      "ajax":{
        url:"controllers/controllerCampana/controllerGetCampana.php",
        type:"POST"
      },
      "columnDefs":[
        {
          "target":[4,8], //numero de columnas que se muestran, contadas desde 0
          "orderable":false
        }
      ],
      "pageLength":5 //maximo filas a mostrar en una vista
    });

    // Agregar campana individual como master, cuando enviamos la data del formulario en el modal
    $(document).on('submit', '#user_form2', function(event){
        event.preventDefault();
        $('#action2').attr('disabled','disabled');
        var form_data = $(this).serialize();
        // var id_user = $('#id_user').val();
        console.log(form_data);
        $.ajax({
         url:"controllers/controllerCampana/controllerCRUDCampana.php",
         method:"POST",
         data:form_data,
         success:function(data)
         {
           //el formulario esta enlazado con el evento click en la clase .update, cambiamos los valores de los inputos luego de editar a Add
          $('#btn_action2').val('');
          $('#action2').val('Add');
          $('.modal-title').html("<i class='fa fa-plus'></i> Agregar Campaña");
          $('#user_form2')[0].reset();
          $('#userModal2').modal('hide');
          $('#alert_action2').fadeIn(1000).html('<div class="alert alert-success">'+data+'</div>').delay(1000).fadeOut(3000);
          $('#action2').attr('disabled', false);
          userdataTable.ajax.reload();
         }
        })
       });


    // Modal para editar una Campaña
    $(document).on('click', '.update2', function(){
        var user_id2 = $(this).attr("id");
        var btn_action2 = 'fetch_single';
        console.log(user_id2);
        $.ajax({
          url:"controllers/controllerCampana/controllerCRUDCampana.php",
          method:"POST",
          data:{
            user_id2:user_id2,
            btn_action2:btn_action2
          },
          dataType:"json",
          success:function(data)
          {
            //retorno la data en json, muestro el modal y los datos json en los inputs para editarlos
            $('#userModal2').modal('show');
            $('#campana_name_oculto').val(data.campana_name_oculto);
            $('#campana_name2').val(data.campana_name2);
            $('#rut').val(data.rut);
            $('#user_name2').val(data.user_name2);
            $('#user_tel').val(data.user_tel);
            $('#user_deuda').val(data.user_deuda);
            $('.modal-title-campana').html("<i class='fa fa-pencil-square-o'></i>Editar Campaña");
            $('#user_id2').val(user_id2);
            $('#action2').val('Edit');
            $('#btn_action2').val('Edit');
          }
        });
      });

    //borrar fila seleccionada de la tabla 
    $(document).on('click', '.borrar', function(){
        var user_id2 = $(this).attr("id");
        var btn_action2 = "borrar";
        if(confirm("¿Seguro quieres Eliminar la campaña?")){
                $.ajax({
                    url:"controllers/controllerCampana/controllerCRUDCampana.php",
                    method:"POST",
                    data:{user_id2:user_id2,
                        btn_action2:btn_action2},
                    success:function(data){
                        $("#alert_action2").fadeIn(1000).html('<div class="alert alert-info">'+data+'</div>').delay(1000).fadeOut(3000);
                        userdataTable.ajax.reload();
                    }
                })
        } else {
            return false;
        }
    });
});