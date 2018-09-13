<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
<div class="row">
    <div class="col-md-2">
    <a href="/create">Add</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
               <table class=".table-striped display" id="employeeDataTable" style="width:100%">
                    <thead>
                        <th style="display:none;">Bulk Delete</th>
                           <th>NO</th>
                           <th>Name</th>
                           <th>Contact</th>
                           <th>Category</th>
                           <th>Hobby</th>
                           <th>Image</th>
                           <th>Action</th>

                    </thead>                
               </table>
        </div>
</div>
<script>
    $(document).ready(function () {
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
                { "data": "action",sortable:false},

            ]    

        });
        $('[data-toggle=confirmation]').confirmation({
            rootSelector: '[data-toggle=confirmation]',
            onConfirm: function (event, element) {
                element.closest('form').submit();
            }
        });   
    });
</script>