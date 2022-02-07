<?php

namespace App\Traits;

Trait  FileTrait
{
     function saveFile($photo,$folder){
        //save photo in folder
        $file_extension = $photo -> getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path = $folder;
        $photo -> move($path,$file_name);

        return $file_name;
    }

    function saveGallery($photo,$folder,$count){
        
        $file_extension = $photo -> getClientOriginalExtension();
        $file_name = time().$count.'.'.$file_extension;
        $path = $folder;
        $photo -> move($path,$file_name);

        return $file_name;
    }


}
