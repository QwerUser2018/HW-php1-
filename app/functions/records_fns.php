<?php

function _rec_save_data($data){
    fs_saveFile($data,"records");
}

function rec_getCategories(){
    $records = fs_getAll("records");
    foreach ($records as $record){
        if ($record["user"]===auth_currentUser()["login"]){
            return $record["categories"];
        }
    }
}

function rec_addCat($catname){
    $records = fs_getAll("records");
    foreach ($records as &$record){
        if ($record["user"]===auth_currentUser()["login"]){
            $record["categories"][$catname]=[];
        }
    }
    _rec_save_data($records);
    return true;
}





//содержание не менялось
function rec_addRec($catname){
    $records = fs_getAll("records");
    foreach ($records as &$record){
        if ($record["user"]===auth_currentUser()["login"]){
            $record["categories"][$catname]=[];
        }
    }
    _rec_save_data($records);
    return true;
}

//принемает имя категории
function rec_getRecords($catname){
    $records = fs_getAll("records");
    foreach ($records as $record=>$key){
        if (!empty($record["$catname"])) return $record["$catname"];
        // и вернуть ключ
    }
}