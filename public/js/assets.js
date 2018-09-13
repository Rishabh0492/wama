$(document).ready(function() {
    $("#createForm").ajaxForm({
        beforeSend: function() {
            $(".message").html("<span class='alert alert-warning'>Please wait...</span>");
        },
        success: function(e) {
          $(".message").html("<span class='alert alert-warning'>Record has been added</span>");
          $(".createDiv").hide();
          $(".list").show();
          getTable();              
        },
        complete: function(e) {}
    });
 });


function getTable() {
            $('#employeeDataTable').DataTable({
            "processing": true,
            "serverSide": true,
            "searching":false,
            "ajax":{
                     "url": "/welcome",
                     "dataType": "json",
                     "type": "get",
                     "data":{ _token: "{{csrf_token()}}"}
                   },
            "columns": [
                { "data": "id" ,sortable:false},
                { "data": "name",sortable:false },
                { "data": "contact",sortable:false },
                { "data": "hobby",sortable:false},
                { "data": "category",sortable:false},
                { "data": "image",sortable:false},


            ]    

        });

}
