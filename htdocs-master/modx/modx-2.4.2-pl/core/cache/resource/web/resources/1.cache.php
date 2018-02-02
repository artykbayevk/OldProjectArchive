<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'MainPage',
    'longtitle' => '',
    'description' => '',
    'alias' => 'index',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 1,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1455940784,
    'editedby' => 1,
    'editedon' => 1455944111,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'index.html',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<html>
<head>
<title>MODX Revolution - MainPage</title>
<base href="http://localhost/modx/modx-2.4.2-pl/" />
</head>
<body>

[[!mySnippet]]

 
<h2>Resource Form</h2>
<p>[[+fi.error.error_message]]</p>
<form class="form" action="http://localhost/modx/modx-2.4.2-pl/" method="post">
    <input name="action" type="hidden" value="newpost" />
    <label for="pagetitle">
        Pagetitle:
        <span class="error">[[+fi.error.pagetitle]]</span>
    </label>
    <input id="pagetitle" name="pagetitle" type="text" value="[[+fi.pagetitle]]" />
    <br/>
    <label for="content">
        Content:
        <span class="error">[[+fi.error.content]]</span>
    </label>
    <textarea id="content" cols="55" rows="7" name="content">[[+fi.content]]</textarea>
<br class="clear" />
<div class="form-buttons">
        <input type="submit" value="Create Resource" />
    </div>
</form>
</body>
</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[*pagetitle]]' => 'MainPage',
    '[[*id]]' => 1,
    '[[~1]]' => 'http://localhost/modx/modx-2.4.2-pl/',
    '[[$ForArticles]]' => '[[!mySnippet]]

 
<h2>Resource Form</h2>
<p>[[+fi.error.error_message]]</p>
<form class="form" action="http://localhost/modx/modx-2.4.2-pl/" method="post">
    <input name="action" type="hidden" value="newpost" />
    <label for="pagetitle">
        Pagetitle:
        <span class="error">[[+fi.error.pagetitle]]</span>
    </label>
    <input id="pagetitle" name="pagetitle" type="text" value="[[+fi.pagetitle]]" />
    <br/>
    <label for="content">
        Content:
        <span class="error">[[+fi.error.content]]</span>
    </label>
    <textarea id="content" cols="55" rows="7" name="content">[[+fi.content]]</textarea>
<br class="clear" />
<div class="form-buttons">
        <input type="submit" value="Create Resource" />
    </div>
</form>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'ForArticles' => 
      array (
        'fields' => 
        array (
          'id' => 31,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'ForArticles',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '[[!mySnippet]]

 
<h2>Resource Form</h2>
<p>[[+fi.error.error_message]]</p>
<form class="form" action="[[~[[*id]]]]" method="post">
    <input name="action" type="hidden" value="newpost" />
    <label for="pagetitle">
        Pagetitle:
        <span class="error">[[+fi.error.pagetitle]]</span>
    </label>
    <input id="pagetitle" name="pagetitle" type="text" value="[[+fi.pagetitle]]" />
    <br/>
    <label for="content">
        Content:
        <span class="error">[[+fi.error.content]]</span>
    </label>
    <textarea id="content" cols="55" rows="7" name="content">[[+fi.content]]</textarea>
<br class="clear" />
<div class="form-buttons">
        <input type="submit" value="Create Resource" />
    </div>
</form>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '[[!mySnippet]]

 
<h2>Resource Form</h2>
<p>[[+fi.error.error_message]]</p>
<form class="form" action="[[~[[*id]]]]" method="post">
    <input name="action" type="hidden" value="newpost" />
    <label for="pagetitle">
        Pagetitle:
        <span class="error">[[+fi.error.pagetitle]]</span>
    </label>
    <input id="pagetitle" name="pagetitle" type="text" value="[[+fi.pagetitle]]" />
    <br/>
    <label for="content">
        Content:
        <span class="error">[[+fi.error.content]]</span>
    </label>
    <textarea id="content" cols="55" rows="7" name="content">[[+fi.content]]</textarea>
<br class="clear" />
<div class="form-buttons">
        <input type="submit" value="Create Resource" />
    </div>
</form>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'mySnippet' => 
      array (
        'fields' => 
        array (
          'id' => 41,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'mySnippet',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => 'if($_POST[\'action\'] === \'newpost\'){
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
    
}',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => 'if($_POST[\'action\'] === \'newpost\'){
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
    
}',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);