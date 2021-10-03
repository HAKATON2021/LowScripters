<?php
class Home extends Controller{
    public function index(){
        $homeModel = $this->model("HomeModel");
        $home = $homeModel->start();
        $data = [];

        $events = $homeModel->getEvents();

        if(isset($_POST['submit'])){
            $add = $homeModel->createEvent($_POST['eve_name'],$_POST['eve_description'],$_POST['eve_date'],$_POST['eve_time'],$_POST['eve_location'],$_POST['eve_organizer']);
        }

        $data['events'] = $events;
        $this->view("home/index",$data,$home);
    }

}