

<?PHP


   
spl_autoload_register(function ($class)
{
    include $_SERVER['DOCUMENT_ROOT'] . '/' . str_replace('\\', '/', $class) . '.php';

});



//$pageController = new controllers\PageController();

//index
Route::add('/',function(){
   $pageController = new Controllers\PageController();
   $pageController->home();
});

//home
Route::add('/home',function(){
  $pageController = new Controllers\PageController();
  $pages = $pageController->home();
});
//users
Route::add('/users',function(){
   $userController = new Controllers\UserController();
  $users = $userController->viewUsers();
});

//clients
Route::add('/clients',function(){
  $clientController = new Controllers\ClientController();
  $clients = $clientController->viewClients();
});
//projects
Route::add('/projects',function(){
   $projectController = new Controllers\ProjectController();
  $projects = $projectController->viewProjects();
});
//tasks
Route::add('/tasks',function(){
  $taskController = new Controllers\TaskController();
  $tasks = $taskController->viewTasks();
});

//add project
Route::add('/addproject',function(){
  $projectController = new Controllers\ProjectController();
  $projectController->addProject();
},['get','post']);
//edit project
Route::add('/editproject',function(){
  $projectController = new Controllers\ProjectController();
  $projectController->editProject();
},['get','post']);
//delete project
Route::add('/deleteproject',function(){
$projectController = new Controllers\ProjectController();
  $projectController->deleteProject();

});
//add user
Route::add('/adduser',function(){
  $userController = new Controllers\UserController();
  $userController->addUser();
},['get','post']);
//edit user
Route::add('/edituser',function(){
 $userController = new Controllers\UserController();
  $userController->editUser();
},['get','post']);
//delete user
Route::add('/deleteuser',function(){
 $userController = new Controllers\UserController();
  $userController->delete();;

});
//add client
Route::add('/addclient',function(){
 $clientController = new Controllers\ClientController();
  $clientController->addClient();
},['get','post']);
//edit client
Route::add('/editclient',function(){
 $clientController = new Controllers\ClientController();
  $clientController->editClient();

},['get','post']);
//delete client
Route::add('/deleteclient',function(){
 $clientController = new Controllers\ClientController();
  $clientController->deleteClient();

});
//add task
Route::add('/addtask',function(){
   $taskController = new Controllers\TaskController();
  $taskController->addTask();
},['get','post']);
//edit task
Route::add('/edittask',function(){
$taskController = new Controllers\TaskController();
  $taskController->editTask();
},['get','post']);
//delete task
Route::add('/deletetask',function(){
$taskController = new Controllers\TaskController();
  $taskController->deleteTask();

});

Route::pathNotFound(function($path){
  echo 'Error 404 :-(<br/>';
  echo 'The requested path "'.$path.'" was not found!';
});

// Add a 405 method not allowed route
Route::methodNotAllowed(function($path, $method){
  echo 'Error 405 :-(<br/>';
  echo 'The requested path "'.$path.'" exists. But the request method "'.$method.'" is not allowed on this path!';
});


Route::run('/');




//<?php
 //include 'Db.php' 
 //$db= Db::getInstance();
//$db->getConnection();
?>