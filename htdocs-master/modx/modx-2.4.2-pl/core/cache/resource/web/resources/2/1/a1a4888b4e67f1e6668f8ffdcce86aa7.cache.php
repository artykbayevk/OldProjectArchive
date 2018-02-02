<?php  return array (
  'properties' => 
  array (
    'namespace' => '',
    'limit' => 10,
    'offset' => 0,
    'page' => 1,
    'pageVarKey' => 'page',
    'totalVar' => 'total',
    'pageLimit' => 5,
    'elementClass' => 'modSnippet',
    'pageNavVar' => 'page.nav',
    'pageNavTpl' => '<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>',
    'pageNavOuterTpl' => '[[+first]][[+prev]][[+pages]][[+next]][[+last]]',
    'pageActiveTpl' => '<li[[+activeClasses]]><a class="active"[[+title]] href="[[+href]]">[[+pageNo]]</a></li>',
    'pageFirstTpl' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">First</a></li>',
    'pageLastTpl' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Last</a></li>',
    'pagePrevTpl' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>',
    'pageNextTpl' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>',
    'cache' => true,
    'cache_key' => 'resource',
    'cache_handler' => 'xPDOFileCache',
    'cache_expires' => 0,
    'pageNavScheme' => '',
    'element' => 'getArchives',
    'makeArchive' => '0',
    'parents' => '2',
    'where' => '{"class_key":"Article"}',
    'showHidden' => '1',
    'includeContent' => '1',
    'includeTVs' => '1',
    'includeTVsList' => '',
    'processTVs' => '0',
    'processTVsList' => '',
    'tagKey' => 'articlestags',
    'tagSearchType' => 'contains',
    'sortby' => 'publishedon',
    'sortdir' => 'DESC',
    'tpl' => 'sample.ArticleRowTpl',
    'total' => 4,
    'pageOneLimit' => 10,
    'actualLimit' => 10,
    'toPlaceholder' => '',
    'cachePageKey' => 'web/resources/2/1/a1a4888b4e67f1e6668f8ffdcce86aa7',
    'cacheOptions' => 
    array (
      'cache_key' => 'resource',
      'cache_handler' => 'xPDOFileCache',
      'cache_expires' => 0,
    ),
    'qs' => 
    array (
    ),
    'pageCount' => 1,
    'firstItem' => 1,
    'lastItem' => 4,
    'pageUrl' => 'articlecontainer/',
  ),
  'output' => '<div class="post">
    <h2 class="title"><a href="articlecontainer/2016/02/20/firsttemp/">FIrstTemp</a></h2>
    <p class="post-info">Опубликовано <a href="articlecontainer/author/admin">admin</a> </p>
    <div class="entry">
	    <p>Example for first article on modx</p>
    </div>
    <p class="postmeta">
      <span class="links">
        <a href="articlecontainer/2016/02/20/firsttemp/" class="readmore">Читать дальше</a>
        | <a href="articlecontainer/2016/02/20/firsttemp/#comments" class="comments">Комментарии (0)</a>
        | <span class="date">Feb 20, 2016</span>
      </span>
    </p>
</div>
<div class="post">
    <h2 class="title"><a href=""></a></h2>
    <p class="post-info">Опубликовано <a href="articlecontainer/author/admin">admin</a> </p>
    <div class="entry">
	    <p></p>
    </div>
    <p class="postmeta">
      <span class="links">
        <a href="" class="readmore">Читать дальше</a>
        | <a href="#comments" class="comments">Комментарии (0)</a>
        | <span class="date"></span>
      </span>
    </p>
</div>
<div class="post">
    <h2 class="title"><a href="articlecontainer/title.html">title</a></h2>
    <p class="post-info">Опубликовано <a href="articlecontainer/author/admin">admin</a> </p>
    <div class="entry">
	    <p>tiel</p>
    </div>
    <p class="postmeta">
      <span class="links">
        <a href="articlecontainer/title.html" class="readmore">Читать дальше</a>
        | <a href="articlecontainer/title.html#comments" class="comments">Комментарии (0)</a>
        | <span class="date"></span>
      </span>
    </p>
</div>
<div class="post">
    <h2 class="title"><a href="">Tamer</a></h2>
    <p class="post-info">Опубликовано <a href="articlecontainer/author/admin">admin</a> </p>
    <div class="entry">
	    <p>tamer</p>
    </div>
    <p class="postmeta">
      <span class="links">
        <a href="" class="readmore">Читать дальше</a>
        | <a href="#comments" class="comments">Комментарии (0)</a>
        | <span class="date"></span>
      </span>
    </p>
</div>',
);