<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use redirect;
class EmployeeController extends Controller
{
   public function store(Request $data)
   {
   	 Employee::create([
            'name' => $data['employee_name'],
            'contact' => $data['contact'],
            'hobby' => implode(',', $data->hobby),
            'category' => $data['category'],
            'contact' => $data['contact'],
            'image' => $data['fileToUpload'],
        ]);


   }
 
   public function show(Request $request)
   {
   	 $columns = array( 
                            0 =>'id', 
                            1 =>'title',
                            2=> 'body',
                            3=> 'created_at',
                            4=> 'id',
                        );
  
        $totalData = Employee::count();
            
        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
            
        if(empty($request->input('search.value')))
        {            
            $posts = Employee::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        $data = array();
        if(!empty($posts))
        {
            foreach ($posts as $post)
            {
                $nestedData['id'] = $post->id;
                $nestedData['name'] = $post->name;
                $nestedData['contact'] = $post->contact;
                $nestedData['hobby'] = $post->hobby;
                $nestedData['category'] = $post->category;
                $nestedData['image'] = "<img src=".$post->image.">";
                $nestedData['action']="<a>Delete</a>";
                $data[] = $nestedData;

            }
        }
          
        $json_data = array(
                    "draw"            => intval($request->input('draw')),  
                    "recordsTotal"    => intval($totalData),  
                    "recordsFiltered" => intval($totalFiltered), 
                    "data"            => $data   
                    );
            
        echo json_encode($json_data); 
        

   }
}
			