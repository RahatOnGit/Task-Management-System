# Kajer ShomoySuchi

About
-----

- This is a simple Task Management Application.
- The user need to register for using the application.
- Only authenticated users can create, read, update and delete tasks.
- An user can only read, update and delete his own tasks.
- All the tasks for an user is shown in ascending order by due date and time.
- An user can filter his tasks by status (e.g., Pending, In Progress, Completed).


Technologies used here are
---------------------------

Backend: Php, Laravel, Laravel Rest API

Frontend: HTML, CSS, Javascript, BootStrap

Database: MySQL


Explanation
-----------


- User Registration, login and logout is handled by Breeze(for web) and Sanctum(for API) packages.

- After properly using the packages, we will get "users" table in the database.

- "users" table will contain the necessary details of the users.

- For storing all tasks data, I have used a table named "all_tasks". I have added 6 fields to the table. These fields are 
 'user_id' (Foreign Key), 'taskname', 'details'(nullable), 'date' , 'time' and 'status'. 

- 'user_id' is the Primary key of the "users" table.

- To use the application, user should be authenticated. So, for every request user authentication
  is checked.

- If an authenticated user wants to add a new task, this task data will be added in the 
  "all_tasks" table. Authenticated user id will be set as the value of the 'user_id' field.

- If an authenticated user wants to get all his tasks, a query is made using the
 authenticated user id at the "all_tasks" table.

- To edit a task, authenticated user id is matched with the 'user_id' field for the task. If it 
  is matched only, then the user can edit the task.

- To delete a task, authenticated user id is matched with the 'user_id' field for the task. If it 
  is matched only, then the user can delete the task.

- All the tasks data for a user is sorted in ascending order by date and time, then it is served.

- For filtering, a query is made using the status type at the user's all tasks.


API Development
---------------

 For the interaction with other applications, an API for the Task Management System has also been developed.
 
- Route for the API: https://github.com/RahatOnGit/Task-Management-System/blob/main/routes/api.php
- Controller for the API: https://github.com/RahatOnGit/Task-Management-System/blob/main/app/Http/Controllers/TaskApiController.php

Simple Demo:
-------------

*     Home Page

![home](https://github.com/user-attachments/assets/b7650127-3e0a-4c00-be78-a423fcd68b8b)

*     Register Page
![register](https://github.com/user-attachments/assets/93f90390-aa10-4a8e-ad8e-bf2377e8611e)

*     User Home Page
![user_home](https://github.com/user-attachments/assets/cfc00eab-eacb-4823-a188-4bb6be219789)

*     Add New Task
![add_new_task_1](https://github.com/user-attachments/assets/908587fe-8791-444e-9b24-2c4dbe0ff480)

*     All Tasks
![all_tasks_2](https://github.com/user-attachments/assets/928364cd-0cd7-4c76-94a7-23e8982412a0)

*     Edit a task
![edit_task](https://github.com/user-attachments/assets/3bb0a420-7654-4be9-b15d-17b4c2a90144)

*     Filter by 'Completed'
![filter_by_completed](https://github.com/user-attachments/assets/5f0ce86e-8d43-4c18-bd5a-fc64620b8055)

*     After deleting the only 'Completed' task
![after_deleting_only_completed](https://github.com/user-attachments/assets/9702e149-74c1-4e68-b572-76048ad3bd58)

