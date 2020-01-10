var editor; // use a global for the submit and return data rendering in the examples
 
$(document).ready(function() {
    editor = new $.fn.dataTable.Editor( {
        ajax: {
            create: {
                type: 'POST',
                url:  '../php/rest/create.php'
            },
            edit: {
                type: 'PUT',
                url:  '../php/rest/edit.php?id=_id_'
            },
            remove: {
                type: 'DELETE',
                url:  '../php/rest/remove.php?id=_id_'
            }
        },
        table: "#example",
        fields: [ {
                label: "First name:",
                name: "first_name"
            }, {
                label: "Last name:",
                name: "last_name"
            }, {
                label: "Position:",
                name: "position"
            }, {
                label: "Office:",
                name: "office"
            }, {
                label: "Extension:",
                name: "extn"
            }, {
                label: "Start date:",
                name: "start_date"
            }, {
                label: "Salary:",
                name: "salary"
            }
        ]
    } );
 
    $('#example').DataTable( {
        dom: "Bfrtip",
        ajax: "http://localhost:3333/api/v1/books",
        columns: [
            { data: null, render: function ( data, type, row ) {
                // Combine the first and last names into a single table field
                return data.first_name+' '+data.last_name;
            } },
            { data: "CodUsuario" },
            { data: "Nombre" },
            { data: "Apellido" },
            { data: "Usuario" },
            { data: "Correo" }
        ],
        select: true,
        buttons: [
            { extend: "create", editor: editor },
            { extend: "edit",   editor: editor },
            { extend: "remove", editor: editor }
        ]
    } );
} );