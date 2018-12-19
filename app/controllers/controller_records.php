<?php
define("REC_FILE","recfile");

function action_index(){
    $data = [
        "title"=>"Главная",
        "currentUser"=>auth_currentUser(),
        "categories"=>rec_getCategories()
    ];
    return renderViewWithTemplate("records","default",$data);
}

function action_addcat(){
    $catname = $_POST["cat_name"];
    rec_addCat($catname);

    action_viewrec($catname);

    redirect("/");
    return "";
}

//удаляет категорию по имени с $_GET
function action_delcat(){
    $catname = $_GET["catName"];
    $arr= fs_getAll(REC_FILE);
    $arr = array_filter($arr,function ($e) use ($catname){
        return $e["categories"]!=$catname;
    });
    fs_saveFile($arr,REC_FILE);

    header("Location:/records");
    return "";

}
function action_viewrec($catname){

    rec_getRecords($catname);

    redirect("/records");
    return "";

}

function action_addrecord(){

}