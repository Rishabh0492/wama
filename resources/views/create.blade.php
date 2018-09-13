 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>

  <script src="js/ajaxform.js"></script>
  <script src="js/assets.js"></script>

{!! Form::open(array('url' => '/store','id'=>'createForm')) !!}
   {{ csrf_field() }}
   <div class="message"></div>
<div class="createDiv">
<p>
<label>Name
<input type="text" name="employee_name" required>
</label> 
</p>

<p>
<label>Phone 
<input type="tel" name="contact">
</label>
</p>

<p>
<label>Category 
<input type="text" name="category">
</label>
</p>

<legend>Select your Hobby</legend>
<p><label> <input type="checkbox" name="hobby[]" value="programming"> programming </label></p>
<p><label> <input type="checkbox" name="hobby[]" value="games"> Games </label></p>
<p><label> <input type="checkbox" name="hobby[]" value="reading"> Reading </label></p>
<p><label> <input type="checkbox" name="hobby[]" value="photography"> Photography </label></p>
</fieldset>
	
<p>
<label><b>Select image to upload:</b><br>
<input type="file" name="fileToUpload" id="fileToUpload">
</label>
</p>
<p><button>Submit</button></p>

{!! Form::close() !!}

</div>

<div class="list" style="display: none">
	<div class="row">
    <div class="col-md-12">
               <table class=".table-striped display" id="employeeDataTable" style="width:100%">
                    <thead>
                           <th>NO</th>
                           <th>Name</th>
                           <th>Contact</th>
                           <th>Category</th>
                           <th>Hobby</th>
                           <th>Image</th>
                           <th>Action</th>>

                    </thead>                
               </table>
        </div>
</div>

</div>