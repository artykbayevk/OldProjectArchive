<?php  return 'if($_POST[\'action\'] === \'newpost\'){
        $myPost = $modx->newObject(\'Article\',array(
            \'parent\'=>2,
            \'pagetitle\'=>$_POST[\'pagetitle\'],
            \'content\'=>$_POST[\'content\'],
            \'createdby\'=>1,
            \'createdon\'=>time(),
            \'published\'=>1
            ));
    if($myPost->save()){
        $modx->sendRedirect($modx->makeUrl(2));
    }else{
        echo("error");
    }
    
}
return;
';