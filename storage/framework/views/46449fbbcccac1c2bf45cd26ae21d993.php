<?php echo $__env->make('home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<style>

   .card4{
    box-shadow: rgb(235, 225, 225);
 
  margin: auto;
  display: flex;
  justify-content: center;
  align-items: center;
 
  text-align: center;
  margin-top: 1%;
 
  
}


</style>

<div class="card4" style="margin-top: 1%;">
  
  
    
    <a href="<?php echo e(url('add_new_task')); ?>" ><svg xmlns="http://www.w3.org/2000/svg" height="200px" viewBox="0 -960 960 960" width="200px" fill="#5f6368"><path d="M180-120q-24.75 0-42.37-17.63Q120-155.25 120-180v-600q0-24.75 17.63-42.38Q155.25-840 180-840h600q24.75 0 42.38 17.62Q840-804.75 840-780v329q-14-8-29.5-13t-30.5-8v-308H180v600h309q4 16 9.02 31.17Q503.05-133.66 510-120H180Zm0-107v47-600 308-4 249Zm100-53h211q4-16 9-31t13-29H280v60Zm0-170h344q14-7 27-11.5t29-8.5v-40H280v60Zm0-170h400v-60H280v60ZM732.5-41Q655-41 600-96.5T545-228q0-78.43 54.99-133.72Q654.98-417 733-417q77 0 132.5 55.28Q921-306.43 921-228q0 76-55.5 131.5T732.5-41ZM718-101h33v-110h110v-33H751v-110h-33v110H608v33h110v110Z"/></svg></a>

    <h3>Add New Task</h3>
  
  </div>



<?php /**PATH D:\laravel-project\TaskManagementSystem\resources\views/home/index.blade.php ENDPATH**/ ?>