<?php
return [
    "/" => "main@index",
    "/login" => "login@login",
    "/register" => "login@register",
    "/logout" => "login@logout",
    "/login/handle" => "login@loginhandle",
    "/register/handle" => "login@registerhandle",
    "/contacts" => "main@contacts",
    "/addcat"=>"records@addcat",
    "/records/delcat"=>"records@delcat",
    "/records/viewrec"=>"records@viewrec",
    "/records/addrecord"=>"records@addrecord",

];