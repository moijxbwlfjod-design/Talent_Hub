<?php

class HomeController {
    public function index() {
        include __DIR__ . '/../Views/Home/Home.php';
    }

    public function dashboard() {
        // This links to your recruiter dashboard
        include __DIR__ . '/../Views/Dashboards/Recruiter/Recruiter_dashboard.html';
    }

    public function login(){
        include __DIR__. '/../Views/Auth/login.php';
    }
}
