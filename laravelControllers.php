<?php

class Controller{

    // It means we want to insert only name, and email colmn values
    protected $fillable = ['name', 'email'];

    // It means we want to ignore only name & email we don't want to insert values of name & email colmn
    protected $guarded = ['name', 'email'];

    // We want to insert all columns values
    protected $guarded2 = []; // still $guarded but the name duplicate gets mad

}

?>