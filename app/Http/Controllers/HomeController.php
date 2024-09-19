<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use App\Models\AllTask;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function Main_Route()
    {
        if(Auth::id())
        {
            return redirect('all_tasks');
        }

        else
        {
            return view('welcome2');
        }
    }

    public function Home()
    {
        return view('home.index');
    }

    public function Add_new_task()
    {
        
        return view('home.add_new_task');
    }

    public function Insert_data(Request $request)
    {
        $task = new AllTask;

        $user = Auth::user();

        $task->user_id = $user->id;

        $task->taskname = $request->name;
        
        $task->details = $request->description;

        $task->date = $request->date;

        $task->status = $request->status;

        $task->time  =  $request->time;
    
        
        $task->save();
           
        return redirect('all_tasks');
        

    }

    public function All_tasks()
    {
        $user = Auth::user();

        $user_id = $user->id;

        $data = AllTask::where('user_id',$user_id)->orderBy('date','ASC')->orderBy('time','ASC')->get();
        
        $status = Status::all();

        $count = $data->count();

        return view('home.all_tasks', ['data'=>$data, 'count'=>$count, 'filtered'=>'','status'=>$status]);

    }

    public function Get_data(Request $request)
    {
      
        $data = '';

        $user = Auth::user();

        $user_id = $user->id;

       
       
        $data = AllTask::where('user_id',$user_id);

        $data = $data->where('status',$request->filter)->orderBy('date','ASC')->orderBy('time','ASC')->get();
    
      
 
        $count = $data->count();

       
       
        $status = Status::all();


        return view('home.all_tasks', ['data'=>$data,'count'=>$count, 'filtered'=> $request->filter,'status'=>$status]);

    }

    public function Delete_task($id)
    {
       

        $task = AllTask::find($id);

        if($task && ($task->user_id == Auth::user()->id))
        {
          AllTask::destroy($id);
          
        }

        

        return redirect()->back();

    }

    public function Edit_task($id)
    {
        $data = AllTask::find($id);

        if($data && $data->user_id != Auth::user()->id)
        {
            return redirect()->back();
        }

        $status = Status::all();

        return view('home.edit_task',['data'=>$data,'status'=>$status]);
    }

    public function Update_data(Request $request, $id)
    {
        $task = AllTask::find($id);
        

        if($task && $task->user_id != Auth::user()->id)
        {
            return redirect()->back();
        }
       

        $task->taskname = $request->name;
        
        $task->details = $request->description;

        $task->date = $request->date;

        $task->status = $request->status;

        $task->time  =  $request->time;

    
    
        
        $task->save();

        

        
           
        return redirect($request->path);

    }
}
