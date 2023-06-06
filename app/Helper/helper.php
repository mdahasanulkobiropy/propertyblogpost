<?php

function blogPostCountWithCategory($id){
    return App\Models\BlogPost::where('blogcategory_id', $id)->get()->count();
}
function blogPostCountWithTag($id){
    return App\Models\BlogPost::where('blogtag_id', $id)->get()->count();
}


