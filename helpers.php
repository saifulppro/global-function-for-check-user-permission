<?php
// function for unathourized user

use Illuminate\Support\Facades\Auth;

function lms_unathuorized($permission){
    if(!Auth::user()->hasPermissionTo($permission)){
        flash()->addWarning('You are not authorized this page');
        return redirect()->back();
    }
    
}


?>
