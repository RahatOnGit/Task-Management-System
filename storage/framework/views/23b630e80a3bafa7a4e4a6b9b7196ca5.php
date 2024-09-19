<?php echo $__env->make('home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<style>
    
  .card {
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
max-width: 65%;
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








input[type=text], select, textarea{
  width: 100%;
  padding: 12px;
  border-bottom: 1px solid #ccc;
  border-left: 1px solid white;
  border-top: 1px solid white;
  border-right: 1px solid white;
  resize: vertical;
}


input[type=date]{
  width: 100%;
  padding: 12px;
  border-bottom: 1px solid #ccc;
  border-left: 1px solid white;
  border-top: 1px solid white;
  border-right: 1px solid white;
  resize: vertical;
}

input[type=time]{
  width: 100%;
  padding: 12px;
  border-bottom: 1px solid #ccc;
  border-left: 1px solid white;
  border-top: 1px solid white;
  border-right: 1px solid white;
  resize: vertical;
}
/* Style the label to display next to the inputs */
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

/* Style the submit button */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

/* Style the container */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

/* Floating column for labels: 25% width */
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

/* Floating column for inputs: 75% width */
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}






       

</style>


<div class="card">
  <h5>Add New Task</h5>
  <hr/>
<form action="<?php echo e(url('insert_data')); ?>" method="post">
  
    <?php echo csrf_field(); ?>
  
  
    <input type="text" name="name" id="name" placeholder="Name" required>




  <br> <br>

  <textarea name="description" placeholder="Short Details  (optional) Max 255 Characters " ></textarea>

  <br><br>


  
  <input  type="date" name="date" required>



  <br> <br>


  <input  type="time" name="time" id="time" required > 
   
   
  

       
   <br><br>
       


 
  <select name="status" id="status" required>
    <option value="">Select status</option>
    <option value="Pending">Pending</option>
    <option value="In Progress">In Progress</option>
    <option value="Completed">Completed</option>
  </select>
 

  <br><br>

 

  

  <input type="submit" value="Add Task">



</form>

</div>






<?php /**PATH D:\laravel-project\TaskManagementSystem\resources\views/home/add_new_task.blade.php ENDPATH**/ ?>