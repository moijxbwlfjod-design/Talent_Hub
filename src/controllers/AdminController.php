<?php
require_once __DIR__ . '/../Models/repositories/AdminRepo.php';
class AdminConroller{
    private $role;
    private $id;
    public function view($view, $data){
        extract($data);
        require __DIR__ . "/../views/$view.php";
    }
    public function show(){
        $repo=new AdminRepo();
        $user = $repo->showUser();
        $this->view("src/Views/dashboards/Admin/manage_user.html", ['users' => $user]);
    }
    public function delete(){
        $cs=new AdminRepo();
        $cs->showUser($id);
        include '';
    }
}
$u = new AdminConroller();