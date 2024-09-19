@include('home.header')



<style>
    
    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 70%;
  margin: auto;
  display: flex;
  justify-content: center;
  align-items: center;
 
  text-align: center;
  padding-top: 2%;
  padding-bottom: 1%;
  margin-top: 3%;
  margin-bottom: 2%;
 
  
}

.card3{
    box-shadow: rgb(235, 225, 225);
 
  margin: auto;
  display: flex;
  justify-content: center;
  align-items: center;
 
  text-align: center;
 
  
}

.card4{
    box-shadow: rgb(235, 225, 225);
 
  margin: auto;
  display: flex;
  justify-content: center;
  align-items: center;
 
  text-align: center;
  margin-top: 1%;
 
  
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}





button:hover, a:hover {
  opacity: 0.7;
}

</style>

<div class="card3">
<form action="{{url('get_data')}}" method="get">




<select name="filter"  required>

    @if($filtered=='')
    <option value="">Filter by status</option>
    @else
    <option value="{{$filtered}}">{{$filtered}}</option>
    @endif

   
    
     @foreach ($status as $i)
        @if($i->status!=$filtered)
        <option value="{{$i->status}}">{{$i->status}}</option>
        @endif
     @endforeach
</select>






<input type="submit" value="Apply filter" style="color: blue;">


</form>







</div>



<div class="card4" style="margin-top: 1%;">


  <form action="{{url('all_tasks')}}" method="get">

    <input type="submit"  value="Get all tasks">

  </form>



</div>



@foreach ($data as $i)
<div class="card" >
    <p>Date: {{$i->date}} , Time: {{$i->time}}</p> 
    
    <h3>{{$i->taskname}}</h3>
    <p class="title">{{$i->details}}</p>

    @if($i->status=="Pending")
    <p> <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M680-80q-83 0-141.5-58.5T480-280q0-83 58.5-141.5T680-480q83 0 141.5 58.5T880-280q0 83-58.5 141.5T680-80Zm67-105 28-28-75-75v-112h-40v128l87 87Zm-547 65q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h167q11-35 43-57.5t70-22.5q40 0 71.5 22.5T594-840h166q33 0 56.5 23.5T840-760v250q-18-13-38-22t-42-16v-212h-80v120H280v-120h-80v560h212q7 22 16 42t22 38H200Zm280-640q17 0 28.5-11.5T520-800q0-17-11.5-28.5T480-840q-17 0-28.5 11.5T440-800q0 17 11.5 28.5T480-760Z"/></svg> {{$i->status}}</p>
    @elseif($i->status=="In Progress")
    <p><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80ZM253-253l227-227v-320q-134 0-227 93t-93 227q0 64 24 123t69 104Z"/></svg> {{$i->status}}</p>
    @else
    <p><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="m424-312 282-282-56-56-226 226-114-114-56 56 170 170ZM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm0-560v560-560Z"/></svg> {{$i->status}}</p>
    @endif
    
    <p><a href="{{url('edit_task',$i->id)}}" class="btn btn-info" ><svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#5f6368"><path d="M160-400v-80h280v80H160Zm0-160v-80h440v80H160Zm0-160v-80h440v80H160Zm360 560v-123l221-220q9-9 20-13t22-4q12 0 23 4.5t20 13.5l37 37q8 9 12.5 20t4.5 22q0 11-4 22.5T863-380L643-160H520Zm300-263-37-37 37 37ZM580-220h38l121-122-18-19-19-18-122 121v38Zm141-141-19-18 37 37-18-19Z"/></svg></a>   
       <a href="{{url('delete_task',$i->id)}}" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" height="28px" viewBox="0 -960 960 960" width="28px" fill="#5f6368"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></a>
    </p>
    
    
    
  </div>

@endforeach

@if($count==0 && $filtered=='')
<h1 class="card" style="color: gray;">No task is added</h1>

@elseif($count==0 &&  $filtered!='')
<h1 class="card" style="color: gray;">No task is {{$filtered}}</h1>

@endif




 