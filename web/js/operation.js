var urlOperationPatient = $("#operationsPatient").attr('url');
var formCreate = $("#createOperation");
var urlCreate = $("#createOperation").attr('action');
var formEdit = $("#updateOperation");
var urlEdit = $("#updateOperation").attr('action');

function ajouterOperation()
{
    $.ajax({
        type: "POST",
        url: urlCreate,
        data: formCreate.serialize(),
        dataType: "json",
        beforeSend: function() {
            $("#editOp").hide();
            $("#loader").show();
        },
        success: function(data) {
            $("#loader").hide();
            $("#operation").dialog('close');
            alert(data.ok);
            location.reload();
            //$("#operationsPatient").load(urlOperationPatient);
        },
        error: function() {
            alert('error handing here');
        }
    });
    return false;
}
function modifierOperation()
{
    $.ajax({
        type: "POST",
        url: urlEdit,
        data: formEdit.serialize(),
        dataType: "json",
        beforeSend: function() {
            $("#editOp").hide();
            $("#loader").show();
        },
        success: function(data) {
            $("#loader").hide();
            $("#operation").dialog('close');
            alert(data.ok);
            location.reload();
            //$("#operationsPatient").load(urlOperationPatient);
        },
        error: function() {
            alert('error handing here');
        }
    });
    return false;
}

$(document).ready(function() {

     
    $('#cabinet_patientbundle_rdv_patient').autocomplete({
        source: function(requete, reponse) {
            var motcle = $('#cabinet_patientbundle_rdv_patient').val();
            var DATA = 'motcle=' + motcle;
           var url = $('#patient').attr('url');
            $.ajax({
                type: "POST",
                url: url,
                dataType: 'json',
                data: DATA,
                success: function(data) {
                    reponse($.map(data, function(item) {
                        return {label: item.name, value: item.name}

                    }));
//                    reponse($.map(data, function(objet){
//                        return objet.toString();
//                    }));
                }
            });
        }
    });
    $("#cabinet_patientbundle_operation_date").datepicker({
        changeMonth: true,
        minDate: 'today',
        dateFormat: 'dd-mm-yy'

    });
    $('#cabinet_patientbundle_rdv_date').datetimepicker({
        altField: "#cabinet_patientbundle_rdv_heure",
        dateFormat: 'dd-mm-yy',
        hourMin: 9,
        hourMax: 17
    });
    $('.actionOperation').click(function() {
        var url = $(this).attr('url');
        $("#operation").load(url, function() {
            $(this).dialog({
                autoOpen: true,
                height: 'auto',
                width: 'auto',
                modal: true,
                draggable: true,
                title: '',
                position: 'center',
                overlay: {
                    backgroundColor: '#000',
                    opacity: 0.5
                },
                close: function()
                {
                    $(this).dialog('destroy').remove();
                }

            });
        });
    });
    $('.deleteOperation').click(function() {
        var urlDelete = $(this).attr('url');
        if (confirm('Vous êtes sûr de vouloir supprimer cette operation?'))
        {
            //alert(urlDelete);
            $.ajax({
                //type:"POST",
                url: urlDelete,
                //data:formEdit.serialize(),
                dataType: "json",
                success: function(data) {
                    alert(data.ok);
                    location.reload();
                    //$("#operationsPatient").load(urlOperationPatient);
                },
                error: function() {
                    alert('error handing here');
                }
            });
        }
        else
        {
            return false;
        }
        return false;
    });
});