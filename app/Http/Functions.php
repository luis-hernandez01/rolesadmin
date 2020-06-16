
    <?php 

// para que sirva este archivo hay que crear un dentro la carpeta app de nuestro proyecto
// con el nombre Functions.php estara junto al archivo Kernel del proyecto e irnos al archivo composer.json
// y remplazar el siguiente comando.

//  "autoload": {
//     "files": [
//         "app/Http/Functions.php"
//     ],
//         "psr-4": {
//             "App\\": "app/"
//         },
//         "classmap": [
//             "database/seeds",
//             "database/factories"
//         ]
//     } 


//key value for json -> esto es para los check box de los permisos
    function kvjf($json, $key)
{
    if($json==null):
        return null;
    else:
        $json=$json;
        $json= json_decode($json, true);
        if(array_key_exists($key, $json)):
            return $json[$key];
        else:
            
            return null;
        endif;
    endif;
}



function getRoleUserArray($mode, $usershowid)
{
    $roles= ['0'=>'Usuario', '1'=>'Administrador'];
    if(!is_null($mode)):
        return $roles;
    else:
        return $roles[$usershowid];
    endif;
}

function getStatusUserArray($mode, $usershowid)
{
    $status= ['0'=>'Registrado', '1'=>'Verificado', '100'=>'Usuario baneado'];
    if(!is_null($mode)):
        return $status;
    else:
        return $status[$usershowid];
    endif;
}


