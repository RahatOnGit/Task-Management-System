# Task-Management-System

Overview
-----

- This is a simple but effective task management system. 
- To use the app, user should register his account. 
- After registartion, user can use the applicaton after providing valid email address and password. 
- User can add new tasks. 
- To add a new task, user should provide due date and time.
- User can view all the tasks that he created.
- All the tasks of the user are always shown in  ascending order of due date and time.
- User can filter his tasks by status (e.g., Pending, In Progress, Completed). 
- User can update, edit and delete his existing tasks.
- User can logout from the system.

Technologies used here are
---------------------------

Backend: Php, Laravel, Laravel Rest Api

Frontend: HTML, CSS, Javascript, BootStrap

Database: MySQL


Development process
-------------------

- The user registration, login and logout are handled by Breeze (for web) and Sanctum (for API) packages.

- For storing all the tasks data, I have created a table named 'all_tasks'.

- Here, at the table 'all_tasks', I have added 6 fields for storing the task data. These 6 fields are user_id(Foreign key), taskname, details, date, time, status (e.g., Pending, In Progress, Completed).

- user_id is the Primary key of the User Table.

- To create, read, update or delete a new task, user authentication is checked. 

- To read, update or delete a task, authenticated user id should be same to the user_id field value of the 'all_tasks' table.

- All the tasks of a user is sorted in ascending order of due date and time. Then, all the tasks data are shown.

- When a user use  filter by status, filtered tasks are also sorted in ascending order of due date and time. Then, the filtered tasks are shown.




