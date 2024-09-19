<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\AllTask;


class TaskApiController extends Controller
{
    public function Register(Request $request)
    {
        $input  = $request->all();

        $input["password"] = bcrypt($input["password"]);

        $user = User::create($input);

        $token= $user->createToken('MyApp')->plainTextToken;

        return ['success'=>true, 'msg'=>'registration completed',  'token'=>$token];


    }


    public function Login(Request $request)
    {
        $user = User::where('email',$request->email)->first();

       

        if(!$user || ! Hash::check($request->password,$user->password))
        {
            return ["success"=>false, "msg"=>"wrong password or email. "];
        }

        $token= $user->createToken('MyApp')->plainTextToken;

        return ['success'=>true, 'msg'=>'login request successful',  'token'=>$token];

        
            
          

    }

    public function Logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return ['msg'=>'logged out'];
    }

    public function Check()
    {
        

         if(auth('sanctum')->user())
         {
            return ['msg'=>'Authenticated'];
         }

         return ['msg'=>'Unauthenticated'];
    }

    public function Insert_data(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255',
            'date'=>'required',
            'status'=>'required',
            'time'=>'required'
        ]);

        
        

        $task = new AllTask;

        $user = auth('sanctum')->user();

        $task->user_id = $user->id;

        $task->taskname = $request->name;
        
        $task->details = $request->details;

        $task->date = $request->date;

        $task->status = $request->status;

        $task->time  =  $request->time;
    
        
        $task->save();
           
        $data =  AllTask::where('user_id',$user->id)->orderBy('date','ASC')->orderBy('time','ASC')->get();

        return ['success'=>true, 'data_for_the_user'=>$data];
    }


    public function All_tasks()
    {
        $user = auth('sanctum')->user();

        $user_id = $user->id;

        $data = AllTask::where('user_id',$user_id)->orderBy('date','ASC')->orderBy('time','ASC')->get();
        
        $count = $data->count();

        return ['success'=>true, 'data'=>$data,'total'=>$count];

    }

    public function Filter_data(Request $request)
    {

        
       

        $user = auth('sanctum')->user();

        $user_id = $user->id;

       
       
        $data = AllTask::where('user_id',$user_id);

        $data = $data->where('status',$request->filter)->orderBy('date','ASC')->orderBy('time','ASC')->get();
    
      
 
        $count = $data->count();

       
       


        return  ['success'=>true,'filtered_data'=>$data,'total'=>$count];

    }

    public function Delete_task($id)
    {
        
        $msg = 'no task found';

        $task = AllTask::find($id);

        if($task && ($task->user_id == auth('sanctum')->user()->id))
        {
          AllTask::destroy($id);
          $msg = 'data deleted successfully';
        }

        else if($task && ($task->user_id != auth('sanctum')->user()->id))
        {
            $msg = 'Unauthenticated';
        }

        

        return [ 'msg'=> $msg];
    }


    public function Task_data($id)
    {
        $data = AllTask::find($id);

        if($data && $data->user_id != auth('sanctum')->user()->id)
        {
            return ['msg'=>'Unauthenticated'];
        }

        else if(!$data)
        {
            return ['msg'=>'No task exists'];
        }

        

        return ['success'=>true, 'data'=>$data];

    }

    public function Update_task(Request $request, $id)
    {
        $task = AllTask::find($id);
        

        if($task && $task->user_id != auth('sanctum')->user()->id)
        {
            return ['msg'=>'Unauthenticated'];
        }

        else if(!$task)
        {
            return ['msg'=>'No task exists'];
        }

        $request->validate([
            'name'=>'required|max:255',
            'date'=>'required',
            'status'=>'required',
            'time'=>'required'
        ]);
       

        $task->taskname = $request->name;
        
        $task->details = $request->details;

        $task->date =   $request->date;

        $task->status = $request->status;

        $task->time  =  $request->time;

    
    
        
        $task->save();

        

        
           
        return ['success'=>true, 'msg'=>'data updated successfully', 'data'=>$task];
    }


}
