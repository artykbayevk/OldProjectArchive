<?php  return array (
  'resourceClass' => 'ArticlesContainer',
  'resource' => 
  array (
    'id' => 2,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'ArticleContainer',
    'longtitle' => '',
    'description' => '',
    'alias' => 'articlecontainer',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 1,
    'introtext' => NULL,
    'content' => '[[+articles]]

[[!+page.nav:notempty=`
<div class=\'paging\'>
	<ul class=\'pageList\'>
		[[+paging]]
	</ul>
</div>
`]]',
    'richtext' => 1,
    'template' => 2,
    'menuindex' => 1,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1455941841,
    'editedby' => 1,
    'editedon' => 1455949296,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1455941850,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'ArticlesContainer',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'articlecontainer/',
    'uri_override' => 0,
    'hide_children_in_tree' => 1,
    'show_in_tree' => 1,
    'properties' => '{"articles":{"articleTemplate":"3","tplArticleRow":"sample.ArticleRowTpl","updateServicesEnabled":"1","articlesPublished":"","articlesRichtext":"1","sortBy":"publishedon","sortDir":"DESC","archivesIncludeTVs":"1","includeTVsList":"","archivesProcessTVs":"0","processTVsList":"","otherGetArchives":"","articleUriTemplate":"%Y\\/%m\\/%d\\/%alias\\/","articlesPerPage":"10","pageLimit":"5","pageNavTpl":"<li[[+classes]]><a[[+classes]][[+title]] href=\\"[[+href]]\\">[[+pageNo]]<\\/a><\\/li>","pageActiveTpl":"<li[[+activeClasses]]><a[[+activeClasses:default=` class=\\"active\\"`]][[+title]] href=\\"[[+href]]\\">[[+pageNo]]<\\/a><\\/li>","pageFirstTpl":"<li class=\\"control\\"><a[[+classes]][[+title]] href=\\"[[+href]]\\">First<\\/a><\\/li>","pageLastTpl":"<li class=\\"control\\"><a[[+classes]][[+title]] href=\\"[[+href]]\\">Last<\\/a><\\/li>","pagePrevTpl":"<li class=\\"control\\"><a[[+classes]][[+title]] href=\\"[[+href]]\\">&lt;&lt;<\\/a><\\/li>","pageNextTpl":"<li class=\\"control\\"><a[[+classes]][[+title]] href=\\"[[+href]]\\">&gt;&gt;<\\/a><\\/li>","pageOffset":"0","pageVarKey":"page","pageTotalVar":"total","pageNavVar":"page.nav","tplArchiveMonth":"row","archiveListingsLimit":"10","archiveByMonth":"1","archiveCls":"","archiveAltCls":"arc-row-alt","archiveGroupByYear":"0","archiveGroupByYearTpl":"sample.ArchiveGroupByYear","tplTagRow":"tag","tagsLimit":"10","tagCls":"tl-tag","tagAltCls":"tl-tag-alt","rssAlias":"feed.rss,rss","rssItems":"10","tplRssFeed":"sample.ArticlesRss","tplRssItem":"sample.ArticlesRssItem","latestPostsTpl":"sample.ArticlesLatestPostTpl","latestPostsLimit":"5","latestPostsOffset":"0","otherLatestPosts":"","notifyTwitter":"0","notifyTwitterConsumerKey":"","notifyTwitterConsumerKeySecret":"","notifyTwitterTpl":"","notifyTwitterTagLimit":"3","shorteningService":"tinyurl","commentsEnabled":"1","commentsThreaded":"0","commentsReplyResourceId":"","commentsMaxDepth":"5","commentsRequirePreview":"0","commentsCloseAfter":"0","commentsDateFormat":"%b %d, %Y at %I:%M %p","commentsAutoConvertLinks":"1","commentsLimit":"0","commentsTplComment":"quipComment","commentsTplCommentOptions":"quipCommentOptions","commentsTplComments":"quipComments","commentsTplAddComment":"quipAddComment","commentsTplLoginToComment":"quipLoginToComment","commentsTplPreview":"quipPreviewComment","commentsUseCss":"1","commentsAltRowCss":"quip-comment-alt","commentsSortDir":"ASC","commentsRequireAuth":"0","commentsModerate":"1","commentsModerators":"","commentsModeratorGroup":"Administrator","commentsModerateAnonymousOnly":"0","commentsModerateFirstPostOnly":"1","commentsReCaptcha":"0","commentsDisableReCaptchaWhenLoggedIn":"1","commentsAllowRemove":"1","commentsRemoveThreshold":"3","commentsAllowReportAsSpam":"1","latestCommentsTpl":"quipLatestComment","latestCommentsLimit":"10","latestCommentsBodyLimit":"300","latestCommentsRowCss":"quip-latest-comment","latestCommentsAltRowCss":"quip-latest-comment-alt","commentsGravatar":"1","commentsGravatarIcon":"identicon","commentsGravatarSize":"50","commentsNameField":"name","commentsShowAnonymousName":"0","commentsAnonymousName":"Anonymous","notificationServices":""}}',
    'articlestags' => 
    array (
      0 => 'articlestags',
      1 => NULL,
      2 => '',
      3 => NULL,
      4 => 'hidden',
    ),
    '_content' => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Articles - ArticleContainer</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="stylesheet" type="text/css" href="[[++articles.assets_url:default=`/modx/modx-2.4.2-pl/assets/components/articles/`]]themes/default/style.css" />
<base href="http://127.0.0.1/modx/modx-2.4.2-pl/" />
</head>
<body>

<div id="header-wrap">
  <div id="header" class="container_16">
    <h1 id="logo-text"><a href="articlecontainer/" title="">Articles</a></h1>
    <p id="intro">Articles By Me</p>
    <!-- navigation -->
    <div id="nav">
      <ul><li class="first"><a href="articlecontainer/" title="Home" >Home</a></li></ul>
    </div>
    <div id="header-image"></div>
      <div id="search">

<form id="quick-search" action="search-results.html" method="get">
<p>
  <label for="qsearch">Search:</label>
  <input class="tbox" id="qsearch" type="text" name="search" value="" title="Start typing and hit ENTER" />
  <input class="btn" alt="Search" type="image" title="Search" src="[[++articles.assets_url:default=`assets/components/articles/`]]themes/default/images/search.gif" />
</p>
</form>
</div>
      
      <!-- header ends here -->
  </div>
</div>
<!-- content starts -->
<div id="content-outer"><div id="content-wrapper" class="container_16">

<!-- main -->
<div id="main" class="grid_12">
[[!getPage?
          &elementClass=`modSnippet`
          &element=`getArchives`
          &makeArchive=`0`
          &cache=`1`
          &parents=`2`
          &where=`{"class_key":"Article"}`
          &showHidden=`1`
          &includeContent=`1`
          &includeTVs=`1`
          &includeTVsList=``
          &processTVs=`0`
          &processTVsList=``
          &tagKey=`articlestags`
          &tagSearchType=`contains`
          &sortby=`publishedon`
          &sortdir=`DESC`
          &tpl=`sample.ArticleRowTpl`

          &limit=`10`
          &pageLimit=`5`
          &pageVarKey=`page`
          &pageNavVar=`page.nav`
          &totalVar=`total`
          &offset=`0`

          &pageNavTpl=`<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`
          &pageActiveTpl=`<li[[+activeClasses]]><a[[+activeClasses:default=` class="active"`]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`
          &pageFirstTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">First</a></li>`
          &pageLastTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Last</a></li>`
          &pagePrevTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>`
          &pageNextTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>`

          
        ]]

[[!+page.nav:notempty=`
<div class=\'paging\'>
	<ul class=\'pageList\'>
		[[!+page.nav]]
	</ul>
</div>
`]]
</div>

<!-- main ends -->


<div id="left-columns" class="grid_4">
  <div class="grid_4 alpha">

<div class="sidemenu">
  <h3>Latest Posts</h3>
  <ul>
  <li>
  <a href="articlecontainer/2016/02/20/firsttemp/">FIrstTemp</a>
  <br /> - Feb 20, 2016
</li>
<li>
  <a href=""></a>
  0
</li>
<li>
  <a href="articlecontainer/title.html">title</a>
  0
</li>
<li>
  <a href="">Tamer</a>
  0
</li>
  </ul>
</div>


<div class="sidemenu">
  <h3>Latest Comments</h3>
  <ul>
  [[!QuipLatestComments?
            &type=`family`
            &family=`b2`
            &tpl=`quipLatestComment`
            &limit=`10`
            &bodyLimit=`300`
            &rowCss=`quip-latest-comment`
            &altRowCss=`quip-latest-comment-alt`
        ]]
  </ul>
</div>



  </div>
  <!-- end left-columns -->
</div>
<!-- contents end here -->

</div></div>

<!-- footer starts here -->
<div id="footer-wrapper" class="container_12">

  <div id="footer-content">
    <div class="grid_4">
<h3>Tags</h3>

    </div>
    <div class="grid_4">
  <h3>Archives</h3>
  <li class="">
    <a href="articlecontainer/2016/02" title="February 2016">February 2016</a> (1)
</li>
<li class=" arc-row-alt">
    <a href="articlecontainer/1970/01" title="January 1970">January 1970</a> (79)
</li>
    </div>
  </div>
  <div id="footer-bottom">
   <p class="bottom-left">
&nbsp; &copy; 2010-2012 Articles. all rights reserved.
      &nbsp; &nbsp; powered by <a href="http://modx.com/">modx revolution</a>
      &nbsp; &nbsp; <a href="http://www.bluewebtemplates.com/" title="Website Templates">website templates</a> by <a href="http://www.styleshout.com/">styleshout</a>
      </p>

      <p class="bottom-right" >
        <a href="http://127.0.0.1/modx/modx-2.4.2-pl/">Home</a> |
        <a href="http://127.0.0.1/modx/modx-2.4.2-pl/">Sitemap</a> |
        <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> |
             <a href="http://validator.w3.org/check/referer">XHTML</a>
      </p>

  </div>
</div>

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
    '[[*pagetitle]]' => 'ArticleContainer',
    '[[*id]]' => 2,
    '[[~2]]' => 'articlecontainer/',
    '[[~3]]' => 'articlecontainer/2016/02/20/firsttemp/',
    '[[~83]]' => 'articlecontainer/title.html',
    '[[getResources?
            &parents=`2`
            &depth=`0`
            &hideContainers=`1`
            &includeContent=`1`
            &showHidden=`1`
	    &includeTVs=`1`
	    &includeTVsList=``
	    &processTVs=`0`
	    &processTVsList=``            
            &tpl=`sample.ArticlesLatestPostTpl`
            &limit=`5`
            &offset=`0`
            &sortby=`publishedon`
            &where=`{"class_key":"Article"}`
          
        ]]' => '<li>
  <a href="articlecontainer/2016/02/20/firsttemp/">FIrstTemp</a>
  <br /> - Feb 20, 2016
</li>
<li>
  <a href=""></a>
  0
</li>
<li>
  <a href="articlecontainer/title.html">title</a>
  0
</li>
<li>
  <a href="">Tamer</a>
  0
</li>',
    '[[tagLister?
            &tpl=`tag`
            &tv=`articlestags`
            &parents=`2`
            &tvDelimiter=`,`
            &useTagFurl=`1`
            &limit=`10`
            &cls=`tl-tag`
            &altCls=`tl-tag-alt`
            &target=`2`
        ]]' => '',
    '[[Archivist?
            &tpl=`row`
            &target=`2`
            &parents=`2`
            &depth=`4`
            &limit=`10`
            &useMonth=`1`
            &groupByYear=`0`
            &groupByYearTpl=`sample.ArchiveGroupByYear`
            &useFurls=`1`
            &cls=``
            &altCls=`arc-row-alt`
            &setLocale=`1`
        ]]' => '<li class="">
    <a href="articlecontainer/2016/02" title="February 2016">February 2016</a> (1)
</li>
<li class=" arc-row-alt">
    <a href="articlecontainer/1970/01" title="January 1970">January 1970</a> (79)
</li>',
    '[[~1]]' => 'http://127.0.0.1/modx/modx-2.4.2-pl/',
    '[[%articles.posted_by]]' => 'Опубликовано',
    '[[%articles.tags]]' => 'Теги',
    '[[%articles.read_more]]' => 'Читать дальше',
    '[[%articles.comments]]' => 'Комментарии',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
    ),
    'modSnippet' => 
    array (
      'getResources' => 
      array (
        'fields' => 
        array (
          'id' => 29,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'getResources',
          'description' => '<strong>1.6.1-pl</strong> A general purpose Resource listing and summarization snippet for MODX Revolution',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * getResources
 *
 * A general purpose Resource listing and summarization snippet for MODX 2.x.
 *
 * @author Jason Coward
 * @copyright Copyright 2010-2013, Jason Coward
 *
 * TEMPLATES
 *
 * tpl - Name of a chunk serving as a resource template
 * [NOTE: if not provided, properties are dumped to output for each resource]
 *
 * tplOdd - (Opt) Name of a chunk serving as resource template for resources with an odd idx value
 * (see idx property)
 * tplFirst - (Opt) Name of a chunk serving as resource template for the first resource (see first
 * property)
 * tplLast - (Opt) Name of a chunk serving as resource template for the last resource (see last
 * property)
 * tpl_{n} - (Opt) Name of a chunk serving as resource template for the nth resource
 *
 * tplCondition - (Opt) Defines a field of the resource to evaluate against keys defined in the
 * conditionalTpls property. Must be a resource field; does not work with Template Variables.
 * conditionalTpls - (Opt) A JSON object defining a map of field values and the associated tpl to
 * use when the field defined by tplCondition matches the value. [NOTE: tplOdd, tplFirst, tplLast,
 * and tpl_{n} will take precedence over any defined conditionalTpls]
 *
 * tplWrapper - (Opt) Name of a chunk serving as a wrapper template for the output
 * [NOTE: Does not work with toSeparatePlaceholders]
 *
 * SELECTION
 *
 * parents - Comma-delimited list of ids serving as parents
 *
 * context - (Opt) Comma-delimited list of context keys to limit results by; if empty, contexts for all specified
 * parents will be used (all contexts if 0 is specified) [default=]
 *
 * depth - (Opt) Integer value indicating depth to search for resources from each parent [default=10]
 *
 * tvFilters - (Opt) Delimited-list of TemplateVar values to filter resources by. Supports two
 * delimiters and two value search formats. The first delimiter || represents a logical OR and the
 * primary grouping mechanism.  Within each group you can provide a comma-delimited list of values.
 * These values can be either tied to a specific TemplateVar by name, e.g. myTV==value, or just the
 * value, indicating you are searching for the value in any TemplateVar tied to the Resource. An
 * example would be &tvFilters=`filter2==one,filter1==bar%||filter1==foo`
 * [NOTE: filtering by values uses a LIKE query and % is considered a wildcard.]
 * [NOTE: this only looks at the raw value set for specific Resource, i. e. there must be a value
 * specifically set for the Resource and it is not evaluated.]
 *
 * tvFiltersAndDelimiter - (Opt) Custom delimiter for logical AND, default \',\', in case you want to
 * match a literal comma in the tvFilters. E.g. &tvFiltersAndDelimiter=`&&`
 * &tvFilters=`filter1==foo,bar&&filter2==baz` [default=,]
 *
 * tvFiltersOrDelimiter - (Opt) Custom delimiter for logical OR, default \'||\', in case you want to
 * match a literal \'||\' in the tvFilters. E.g. &tvFiltersOrDelimiter=`|OR|`
 * &tvFilters=`filter1==foo||bar|OR|filter2==baz` [default=||]
 *
 * where - (Opt) A JSON expression of criteria to build any additional where clauses from. An example would be
 * &where=`{{"alias:LIKE":"foo%", "OR:alias:LIKE":"%bar"},{"OR:pagetitle:=":"foobar", "AND:description:=":"raboof"}}`
 *
 * sortby - (Opt) Field to sort by or a JSON array, e.g. {"publishedon":"ASC","createdon":"DESC"} [default=publishedon]
 * sortbyTV - (opt) A Template Variable name to sort by (if supplied, this precedes the sortby value) [default=]
 * sortbyTVType - (Opt) A data type to CAST a TV Value to in order to sort on it properly [default=string]
 * sortbyAlias - (Opt) Query alias for sortby field [default=]
 * sortbyEscaped - (Opt) Escapes the field name(s) specified in sortby [default=0]
 * sortdir - (Opt) Order which to sort by [default=DESC]
 * sortdirTV - (Opt) Order which to sort by a TV [default=DESC]
 * limit - (Opt) Limits the number of resources returned [default=5]
 * offset - (Opt) An offset of resources returned by the criteria to skip [default=0]
 * dbCacheFlag - (Opt) Controls caching of db queries; 0|false = do not cache result set; 1 = cache result set
 * according to cache settings, any other integer value = number of seconds to cache result set [default=0]
 *
 * OPTIONS
 *
 * includeContent - (Opt) Indicates if the content of each resource should be returned in the
 * results [default=0]
 * includeTVs - (Opt) Indicates if TemplateVar values should be included in the properties available
 * to each resource template [default=0]
 * includeTVList - (Opt) Limits the TemplateVars that are included if includeTVs is true to those specified
 * by name in a comma-delimited list [default=]
 * prepareTVs - (Opt) Prepares media-source dependent TemplateVar values [default=1]
 * prepareTVList - (Opt) Limits the TVs that are prepared to those specified by name in a comma-delimited
 * list [default=]
 * processTVs - (Opt) Indicates if TemplateVar values should be rendered as they would on the
 * resource being summarized [default=0]
 * processTVList - (opt) Limits the TemplateVars that are processed if included to those specified
 * by name in a comma-delimited list [default=]
 * tvPrefix - (Opt) The prefix for TemplateVar properties [default=tv.]
 * idx - (Opt) You can define the starting idx of the resources, which is an property that is
 * incremented as each resource is rendered [default=1]
 * first - (Opt) Define the idx which represents the first resource (see tplFirst) [default=1]
 * last - (Opt) Define the idx which represents the last resource (see tplLast) [default=# of
 * resources being summarized + first - 1]
 * outputSeparator - (Opt) An optional string to separate each tpl instance [default="\\n"]
 * wrapIfEmpty - (Opt) Indicates if the tplWrapper should be applied if the output is empty [default=0]
 *
 */
$output = array();
$outputSeparator = isset($outputSeparator) ? $outputSeparator : "\\n";

/* set default properties */
$tpl = !empty($tpl) ? $tpl : \'\';
$includeContent = !empty($includeContent) ? true : false;
$includeTVs = !empty($includeTVs) ? true : false;
$includeTVList = !empty($includeTVList) ? explode(\',\', $includeTVList) : array();
$processTVs = !empty($processTVs) ? true : false;
$processTVList = !empty($processTVList) ? explode(\',\', $processTVList) : array();
$prepareTVs = !empty($prepareTVs) ? true : false;
$prepareTVList = !empty($prepareTVList) ? explode(\',\', $prepareTVList) : array();
$tvPrefix = isset($tvPrefix) ? $tvPrefix : \'tv.\';
$parents = (!empty($parents) || $parents === \'0\') ? explode(\',\', $parents) : array($modx->resource->get(\'id\'));
array_walk($parents, \'trim\');
$parents = array_unique($parents);
$depth = isset($depth) ? (integer) $depth : 10;

$tvFiltersOrDelimiter = isset($tvFiltersOrDelimiter) ? $tvFiltersOrDelimiter : \'||\';
$tvFiltersAndDelimiter = isset($tvFiltersAndDelimiter) ? $tvFiltersAndDelimiter : \',\';
$tvFilters = !empty($tvFilters) ? explode($tvFiltersOrDelimiter, $tvFilters) : array();

$where = !empty($where) ? $modx->fromJSON($where) : array();
$showUnpublished = !empty($showUnpublished) ? true : false;
$showDeleted = !empty($showDeleted) ? true : false;

$sortby = isset($sortby) ? $sortby : \'publishedon\';
$sortbyTV = isset($sortbyTV) ? $sortbyTV : \'\';
$sortbyAlias = isset($sortbyAlias) ? $sortbyAlias : \'modResource\';
$sortbyEscaped = !empty($sortbyEscaped) ? true : false;
$sortdir = isset($sortdir) ? $sortdir : \'DESC\';
$sortdirTV = isset($sortdirTV) ? $sortdirTV : \'DESC\';
$limit = isset($limit) ? (integer) $limit : 5;
$offset = isset($offset) ? (integer) $offset : 0;
$totalVar = !empty($totalVar) ? $totalVar : \'total\';

$dbCacheFlag = !isset($dbCacheFlag) ? false : $dbCacheFlag;
if (is_string($dbCacheFlag) || is_numeric($dbCacheFlag)) {
    if ($dbCacheFlag == \'0\') {
        $dbCacheFlag = false;
    } elseif ($dbCacheFlag == \'1\') {
        $dbCacheFlag = true;
    } else {
        $dbCacheFlag = (integer) $dbCacheFlag;
    }
}

/* multiple context support */
$contextArray = array();
$contextSpecified = false;
if (!empty($context)) {
    $contextArray = explode(\',\',$context);
    array_walk($contextArray, \'trim\');
    $contexts = array();
    foreach ($contextArray as $ctx) {
        $contexts[] = $modx->quote($ctx);
    }
    $context = implode(\',\',$contexts);
    $contextSpecified = true;
    unset($contexts,$ctx);
} else {
    $context = $modx->quote($modx->context->get(\'key\'));
}

$pcMap = array();
$pcQuery = $modx->newQuery(\'modResource\', array(\'id:IN\' => $parents), $dbCacheFlag);
$pcQuery->select(array(\'id\', \'context_key\'));
if ($pcQuery->prepare() && $pcQuery->stmt->execute()) {
    foreach ($pcQuery->stmt->fetchAll(PDO::FETCH_ASSOC) as $pcRow) {
        $pcMap[(integer) $pcRow[\'id\']] = $pcRow[\'context_key\'];
    }
}

$children = array();
$parentArray = array();
foreach ($parents as $parent) {
    $parent = (integer) $parent;
    if ($parent === 0) {
        $pchildren = array();
        if ($contextSpecified) {
            foreach ($contextArray as $pCtx) {
                if (!in_array($pCtx, $contextArray)) {
                    continue;
                }
                $options = $pCtx !== $modx->context->get(\'key\') ? array(\'context\' => $pCtx) : array();
                $pcchildren = $modx->getChildIds($parent, $depth, $options);
                if (!empty($pcchildren)) $pchildren = array_merge($pchildren, $pcchildren);
            }
        } else {
            $cQuery = $modx->newQuery(\'modContext\', array(\'key:!=\' => \'mgr\'));
            $cQuery->select(array(\'key\'));
            if ($cQuery->prepare() && $cQuery->stmt->execute()) {
                foreach ($cQuery->stmt->fetchAll(PDO::FETCH_COLUMN) as $pCtx) {
                    $options = $pCtx !== $modx->context->get(\'key\') ? array(\'context\' => $pCtx) : array();
                    $pcchildren = $modx->getChildIds($parent, $depth, $options);
                    if (!empty($pcchildren)) $pchildren = array_merge($pchildren, $pcchildren);
                }
            }
        }
        $parentArray[] = $parent;
    } else {
        $pContext = array_key_exists($parent, $pcMap) ? $pcMap[$parent] : false;
        if ($debug) $modx->log(modX::LOG_LEVEL_ERROR, "context for {$parent} is {$pContext}");
        if ($pContext && $contextSpecified && !in_array($pContext, $contextArray, true)) {
            $parent = next($parents);
            continue;
        }
        $parentArray[] = $parent;
        $options = !empty($pContext) && $pContext !== $modx->context->get(\'key\') ? array(\'context\' => $pContext) : array();
        $pchildren = $modx->getChildIds($parent, $depth, $options);
    }
    if (!empty($pchildren)) $children = array_merge($children, $pchildren);
    $parent = next($parents);
}
$parents = array_merge($parentArray, $children);

/* build query */
$criteria = array("modResource.parent IN (" . implode(\',\', $parents) . ")");
if ($contextSpecified) {
    $contextResourceTbl = $modx->getTableName(\'modContextResource\');
    $criteria[] = "(modResource.context_key IN ({$context}) OR EXISTS(SELECT 1 FROM {$contextResourceTbl} ctx WHERE ctx.resource = modResource.id AND ctx.context_key IN ({$context})))";
}
if (empty($showDeleted)) {
    $criteria[\'deleted\'] = \'0\';
}
if (empty($showUnpublished)) {
    $criteria[\'published\'] = \'1\';
}
if (empty($showHidden)) {
    $criteria[\'hidemenu\'] = \'0\';
}
if (!empty($hideContainers)) {
    $criteria[\'isfolder\'] = \'0\';
}
$criteria = $modx->newQuery(\'modResource\', $criteria);
if (!empty($tvFilters)) {
    $tmplVarTbl = $modx->getTableName(\'modTemplateVar\');
    $tmplVarResourceTbl = $modx->getTableName(\'modTemplateVarResource\');
    $conditions = array();
    $operators = array(
        \'<=>\' => \'<=>\',
        \'===\' => \'=\',
        \'!==\' => \'!=\',
        \'<>\' => \'<>\',
        \'==\' => \'LIKE\',
        \'!=\' => \'NOT LIKE\',
        \'<<\' => \'<\',
        \'<=\' => \'<=\',
        \'=<\' => \'=<\',
        \'>>\' => \'>\',
        \'>=\' => \'>=\',
        \'=>\' => \'=>\'
    );
    foreach ($tvFilters as $fGroup => $tvFilter) {
        $filterGroup = array();
        $filters = explode($tvFiltersAndDelimiter, $tvFilter);
        $multiple = count($filters) > 0;
        foreach ($filters as $filter) {
            $operator = \'==\';
            $sqlOperator = \'LIKE\';
            foreach ($operators as $op => $opSymbol) {
                if (strpos($filter, $op, 1) !== false) {
                    $operator = $op;
                    $sqlOperator = $opSymbol;
                    break;
                }
            }
            $tvValueField = \'tvr.value\';
            $tvDefaultField = \'tv.default_text\';
            $f = explode($operator, $filter);
            if (count($f) >= 2) {
                if (count($f) > 2) {
                    $k = array_shift($f);
                    $b = join($operator, $f);
                    $f = array($k, $b);
                }
                $tvName = $modx->quote($f[0]);
                if (is_numeric($f[1]) && !in_array($sqlOperator, array(\'LIKE\', \'NOT LIKE\'))) {
                    $tvValue = $f[1];
                    if ($f[1] == (integer)$f[1]) {
                        $tvValueField = "CAST({$tvValueField} AS SIGNED INTEGER)";
                        $tvDefaultField = "CAST({$tvDefaultField} AS SIGNED INTEGER)";
                    } else {
                        $tvValueField = "CAST({$tvValueField} AS DECIMAL)";
                        $tvDefaultField = "CAST({$tvDefaultField} AS DECIMAL)";
                    }
                } else {
                    $tvValue = $modx->quote($f[1]);
                }
                if ($multiple) {
                    $filterGroup[] =
                        "(EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.name = {$tvName} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id) " .
                        "OR EXISTS (SELECT 1 FROM {$tmplVarTbl} tv WHERE tv.name = {$tvName} AND {$tvDefaultField} {$sqlOperator} {$tvValue} AND tv.id NOT IN (SELECT tmplvarid FROM {$tmplVarResourceTbl} WHERE contentid = modResource.id)) " .
                        ")";
                } else {
                    $filterGroup =
                        "(EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.name = {$tvName} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id) " .
                        "OR EXISTS (SELECT 1 FROM {$tmplVarTbl} tv WHERE tv.name = {$tvName} AND {$tvDefaultField} {$sqlOperator} {$tvValue} AND tv.id NOT IN (SELECT tmplvarid FROM {$tmplVarResourceTbl} WHERE contentid = modResource.id)) " .
                        ")";
                }
            } elseif (count($f) == 1) {
                $tvValue = $modx->quote($f[0]);
                if ($multiple) {
                    $filterGroup[] = "EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id)";
                } else {
                    $filterGroup = "EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id)";
                }
            }
        }
        $conditions[] = $filterGroup;
    }
    if (!empty($conditions)) {
        $firstGroup = true;
        foreach ($conditions as $cGroup => $c) {
            if (is_array($c)) {
                $first = true;
                foreach ($c as $cond) {
                    if ($first && !$firstGroup) {
                        $criteria->condition($criteria->query[\'where\'][0][1], $cond, xPDOQuery::SQL_OR, null, $cGroup);
                    } else {
                        $criteria->condition($criteria->query[\'where\'][0][1], $cond, xPDOQuery::SQL_AND, null, $cGroup);
                    }
                    $first = false;
                }
            } else {
                $criteria->condition($criteria->query[\'where\'][0][1], $c, $firstGroup ? xPDOQuery::SQL_AND : xPDOQuery::SQL_OR, null, $cGroup);
            }
            $firstGroup = false;
        }
    }
}
/* include/exclude resources, via &resources=`123,-456` prop */
if (!empty($resources)) {
    $resourceConditions = array();
    $resources = explode(\',\',$resources);
    $include = array();
    $exclude = array();
    foreach ($resources as $resource) {
        $resource = (int)$resource;
        if ($resource == 0) continue;
        if ($resource < 0) {
            $exclude[] = abs($resource);
        } else {
            $include[] = $resource;
        }
    }
    if (!empty($include)) {
        $criteria->where(array(\'OR:modResource.id:IN\' => $include), xPDOQuery::SQL_OR);
    }
    if (!empty($exclude)) {
        $criteria->where(array(\'modResource.id:NOT IN\' => $exclude), xPDOQuery::SQL_AND, null, 1);
    }
}
if (!empty($where)) {
    $criteria->where($where);
}

$total = $modx->getCount(\'modResource\', $criteria);
$modx->setPlaceholder($totalVar, $total);

$fields = array_keys($modx->getFields(\'modResource\'));
if (empty($includeContent)) {
    $fields = array_diff($fields, array(\'content\'));
}
$columns = $includeContent ? $modx->getSelectColumns(\'modResource\', \'modResource\') : $modx->getSelectColumns(\'modResource\', \'modResource\', \'\', array(\'content\'), true);
$criteria->select($columns);
if (!empty($sortbyTV)) {
    $criteria->leftJoin(\'modTemplateVar\', \'tvDefault\', array(
        "tvDefault.name" => $sortbyTV
    ));
    $criteria->leftJoin(\'modTemplateVarResource\', \'tvSort\', array(
        "tvSort.contentid = modResource.id",
        "tvSort.tmplvarid = tvDefault.id"
    ));
    if (empty($sortbyTVType)) $sortbyTVType = \'string\';
    if ($modx->getOption(\'dbtype\') === \'mysql\') {
        switch ($sortbyTVType) {
            case \'integer\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS SIGNED INTEGER) AS sortTV");
                break;
            case \'decimal\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS DECIMAL) AS sortTV");
                break;
            case \'datetime\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS DATETIME) AS sortTV");
                break;
            case \'string\':
            default:
                $criteria->select("IFNULL(tvSort.value, tvDefault.default_text) AS sortTV");
                break;
        }
    } elseif ($modx->getOption(\'dbtype\') === \'sqlsrv\') {
        switch ($sortbyTVType) {
            case \'integer\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS BIGINT) AS sortTV");
                break;
            case \'decimal\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS DECIMAL) AS sortTV");
                break;
            case \'datetime\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS DATETIME) AS sortTV");
                break;
            case \'string\':
            default:
                $criteria->select("ISNULL(tvSort.value, tvDefault.default_text) AS sortTV");
                break;
        }
    }
    $criteria->sortby("sortTV", $sortdirTV);
}
if (!empty($sortby)) {
    if (strpos($sortby, \'{\') === 0) {
        $sorts = $modx->fromJSON($sortby);
    } else {
        $sorts = array($sortby => $sortdir);
    }
    if (is_array($sorts)) {
        while (list($sort, $dir) = each($sorts)) {
            if ($sortbyEscaped) $sort = $modx->escape($sort);
            if (!empty($sortbyAlias)) $sort = $modx->escape($sortbyAlias) . ".{$sort}";
            $criteria->sortby($sort, $dir);
        }
    }
}
if (!empty($limit)) $criteria->limit($limit, $offset);

if (!empty($debug)) {
    $criteria->prepare();
    $modx->log(modX::LOG_LEVEL_ERROR, $criteria->toSQL());
}
$collection = $modx->getCollection(\'modResource\', $criteria, $dbCacheFlag);

$idx = !empty($idx) || $idx === \'0\' ? (integer) $idx : 1;
$first = empty($first) && $first !== \'0\' ? 1 : (integer) $first;
$last = empty($last) ? (count($collection) + $idx - 1) : (integer) $last;

/* include parseTpl */
include_once $modx->getOption(\'getresources.core_path\',null,$modx->getOption(\'core_path\').\'components/getresources/\').\'include.parsetpl.php\';

$templateVars = array();
if (!empty($includeTVs) && !empty($includeTVList)) {
    $templateVars = $modx->getCollection(\'modTemplateVar\', array(\'name:IN\' => $includeTVList));
}
/** @var modResource $resource */
foreach ($collection as $resourceId => $resource) {
    $tvs = array();
    if (!empty($includeTVs)) {
        if (empty($includeTVList)) {
            $templateVars = $resource->getMany(\'TemplateVars\');
        }
        /** @var modTemplateVar $templateVar */
        foreach ($templateVars as $tvId => $templateVar) {
            if (!empty($includeTVList) && !in_array($templateVar->get(\'name\'), $includeTVList)) continue;
            if ($processTVs && (empty($processTVList) || in_array($templateVar->get(\'name\'), $processTVList))) {
                $tvs[$tvPrefix . $templateVar->get(\'name\')] = $templateVar->renderOutput($resource->get(\'id\'));
            } else {
                $value = $templateVar->getValue($resource->get(\'id\'));
                if ($prepareTVs && method_exists($templateVar, \'prepareOutput\') && (empty($prepareTVList) || in_array($templateVar->get(\'name\'), $prepareTVList))) {
                    $value = $templateVar->prepareOutput($value);
                }
                $tvs[$tvPrefix . $templateVar->get(\'name\')] = $value;
            }
        }
    }
    $odd = ($idx & 1);
    $properties = array_merge(
        $scriptProperties
        ,array(
            \'idx\' => $idx
            ,\'first\' => $first
            ,\'last\' => $last
            ,\'odd\' => $odd
        )
        ,$includeContent ? $resource->toArray() : $resource->get($fields)
        ,$tvs
    );
    $resourceTpl = false;
    if ($idx == $first && !empty($tplFirst)) {
        $resourceTpl = parseTpl($tplFirst, $properties);
    }
    if ($idx == $last && empty($resourceTpl) && !empty($tplLast)) {
        $resourceTpl = parseTpl($tplLast, $properties);
    }
    $tplidx = \'tpl_\' . $idx;
    if (empty($resourceTpl) && !empty($$tplidx)) {
        $resourceTpl = parseTpl($$tplidx, $properties);
    }
    if ($idx > 1 && empty($resourceTpl)) {
        $divisors = getDivisors($idx);
        if (!empty($divisors)) {
            foreach ($divisors as $divisor) {
                $tplnth = \'tpl_n\' . $divisor;
                if (!empty($$tplnth)) {
                    $resourceTpl = parseTpl($$tplnth, $properties);
                    if (!empty($resourceTpl)) {
                        break;
                    }
                }
            }
        }
    }
    if ($odd && empty($resourceTpl) && !empty($tplOdd)) {
        $resourceTpl = parseTpl($tplOdd, $properties);
    }
    if (!empty($tplCondition) && !empty($conditionalTpls) && empty($resourceTpl)) {
        $conTpls = $modx->fromJSON($conditionalTpls);
        $subject = $properties[$tplCondition];
        $tplOperator = !empty($tplOperator) ? $tplOperator : \'=\';
        $tplOperator = strtolower($tplOperator);
        $tplCon = \'\';
        foreach ($conTpls as $operand => $conditionalTpl) {
            switch ($tplOperator) {
                case \'!=\':
                case \'neq\':
                case \'not\':
                case \'isnot\':
                case \'isnt\':
                case \'unequal\':
                case \'notequal\':
                    $tplCon = (($subject != $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'<\':
                case \'lt\':
                case \'less\':
                case \'lessthan\':
                    $tplCon = (($subject < $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'>\':
                case \'gt\':
                case \'greater\':
                case \'greaterthan\':
                    $tplCon = (($subject > $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'<=\':
                case \'lte\':
                case \'lessthanequals\':
                case \'lessthanorequalto\':
                    $tplCon = (($subject <= $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'>=\':
                case \'gte\':
                case \'greaterthanequals\':
                case \'greaterthanequalto\':
                    $tplCon = (($subject >= $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'isempty\':
                case \'empty\':
                    $tplCon = empty($subject) ? $conditionalTpl : $tplCon;
                    break;
                case \'!empty\':
                case \'notempty\':
                case \'isnotempty\':
                    $tplCon = !empty($subject) && $subject != \'\' ? $conditionalTpl : $tplCon;
                    break;
                case \'isnull\':
                case \'null\':
                    $tplCon = $subject == null || strtolower($subject) == \'null\' ? $conditionalTpl : $tplCon;
                    break;
                case \'inarray\':
                case \'in_array\':
                case \'ia\':
                    $operand = explode(\',\', $operand);
                    $tplCon = in_array($subject, $operand) ? $conditionalTpl : $tplCon;
                    break;
                case \'between\':
                case \'range\':
                case \'>=<\':
                case \'><\':
                    $operand = explode(\',\', $operand);
                    $tplCon = ($subject >= min($operand) && $subject <= max($operand)) ? $conditionalTpl : $tplCon;
                    break;
                case \'==\':
                case \'=\':
                case \'eq\':
                case \'is\':
                case \'equal\':
                case \'equals\':
                case \'equalto\':
                default:
                    $tplCon = (($subject == $operand) ? $conditionalTpl : $tplCon);
                    break;
            }
        }
        if (!empty($tplCon)) {
            $resourceTpl = parseTpl($tplCon, $properties);
        }
    }
    if (!empty($tpl) && empty($resourceTpl)) {
        $resourceTpl = parseTpl($tpl, $properties);
    }
    if ($resourceTpl === false && !empty($debug)) {
        $chunk = $modx->newObject(\'modChunk\');
        $chunk->setCacheable(false);
        $output[]= $chunk->process(array(), \'<pre>\' . print_r($properties, true) .\'</pre>\');
    } else {
        $output[]= $resourceTpl;
    }
    $idx++;
}

/* output */
$toSeparatePlaceholders = $modx->getOption(\'toSeparatePlaceholders\', $scriptProperties, false);
if (!empty($toSeparatePlaceholders)) {
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
    return \'\';
}

$output = implode($outputSeparator, $output);

$tplWrapper = $modx->getOption(\'tplWrapper\', $scriptProperties, false);
$wrapIfEmpty = $modx->getOption(\'wrapIfEmpty\', $scriptProperties, false);
if (!empty($tplWrapper) && ($wrapIfEmpty || !empty($output))) {
    $output = parseTpl($tplWrapper, array_merge($scriptProperties, array(\'output\' => $output)));
}

$toPlaceholder = $modx->getOption(\'toPlaceholder\', $scriptProperties, false);
if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
    return \'\';
}
return $output;',
          'locked' => false,
          'properties' => 
          array (
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'Name of a chunk serving as a resource template. NOTE: if not provided, properties are dumped to output for each resource.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as a resource template. NOTE: if not provided, properties are dumped to output for each resource.',
              'area_trans' => '',
            ),
            'tplOdd' => 
            array (
              'name' => 'tplOdd',
              'desc' => 'Name of a chunk serving as resource template for resources with an odd idx value (see idx property).',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as resource template for resources with an odd idx value (see idx property).',
              'area_trans' => '',
            ),
            'tplFirst' => 
            array (
              'name' => 'tplFirst',
              'desc' => 'Name of a chunk serving as resource template for the first resource (see first property).',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as resource template for the first resource (see first property).',
              'area_trans' => '',
            ),
            'tplLast' => 
            array (
              'name' => 'tplLast',
              'desc' => 'Name of a chunk serving as resource template for the last resource (see last property).',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as resource template for the last resource (see last property).',
              'area_trans' => '',
            ),
            'tplWrapper' => 
            array (
              'name' => 'tplWrapper',
              'desc' => 'Name of a chunk serving as wrapper template for the Snippet output. This does not work with toSeparatePlaceholders.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as wrapper template for the Snippet output. This does not work with toSeparatePlaceholders.',
              'area_trans' => '',
            ),
            'wrapIfEmpty' => 
            array (
              'name' => 'wrapIfEmpty',
              'desc' => 'Indicates if empty output should be wrapped by the tplWrapper, if specified. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if empty output should be wrapped by the tplWrapper, if specified. Defaults to false.',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'A field name to sort by or JSON object of field names and sortdir for each field, e.g. {"publishedon":"ASC","createdon":"DESC"}. Defaults to publishedon.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'publishedon',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A field name to sort by or JSON object of field names and sortdir for each field, e.g. {"publishedon":"ASC","createdon":"DESC"}. Defaults to publishedon.',
              'area_trans' => '',
            ),
            'sortbyTV' => 
            array (
              'name' => 'sortbyTV',
              'desc' => 'Name of a Template Variable to sort by. Defaults to empty string.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a Template Variable to sort by. Defaults to empty string.',
              'area_trans' => '',
            ),
            'sortbyTVType' => 
            array (
              'name' => 'sortbyTVType',
              'desc' => 'An optional type to indicate how to sort on the Template Variable value.',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'string',
                  'value' => 'string',
                  'name' => 'string',
                ),
                1 => 
                array (
                  'text' => 'integer',
                  'value' => 'integer',
                  'name' => 'integer',
                ),
                2 => 
                array (
                  'text' => 'decimal',
                  'value' => 'decimal',
                  'name' => 'decimal',
                ),
                3 => 
                array (
                  'text' => 'datetime',
                  'value' => 'datetime',
                  'name' => 'datetime',
                ),
              ),
              'value' => 'string',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'An optional type to indicate how to sort on the Template Variable value.',
              'area_trans' => '',
            ),
            'sortbyAlias' => 
            array (
              'name' => 'sortbyAlias',
              'desc' => 'Query alias for sortby field. Defaults to an empty string.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Query alias for sortby field. Defaults to an empty string.',
              'area_trans' => '',
            ),
            'sortbyEscaped' => 
            array (
              'name' => 'sortbyEscaped',
              'desc' => 'Determines if the field name specified in sortby should be escaped. Defaults to 0.',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Determines if the field name specified in sortby should be escaped. Defaults to 0.',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'Order which to sort by. Defaults to DESC.',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'DESC',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Order which to sort by. Defaults to DESC.',
              'area_trans' => '',
            ),
            'sortdirTV' => 
            array (
              'name' => 'sortdirTV',
              'desc' => 'Order which to sort a Template Variable by. Defaults to DESC.',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'DESC',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Order which to sort a Template Variable by. Defaults to DESC.',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'Limits the number of resources returned. Defaults to 5.',
              'type' => 'textfield',
              'options' => '',
              'value' => '5',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Limits the number of resources returned. Defaults to 5.',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'An offset of resources returned by the criteria to skip.',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'An offset of resources returned by the criteria to skip.',
              'area_trans' => '',
            ),
            'tvFilters' => 
            array (
              'name' => 'tvFilters',
              'desc' => 'Delimited-list of TemplateVar values to filter resources by. Supports two delimiters and two value search formats. THe first delimiter || represents a logical OR and the primary grouping mechanism.  Within each group you can provide a comma-delimited list of values. These values can be either tied to a specific TemplateVar by name, e.g. myTV==value, or just the value, indicating you are searching for the value in any TemplateVar tied to the Resource. An example would be &tvFilters=`filter2==one,filter1==bar%||filter1==foo`. <br />NOTE: filtering by values uses a LIKE query and % is considered a wildcard. <br />ANOTHER NOTE: This only looks at the raw value set for specific Resource, i. e. there must be a value specifically set for the Resource and it is not evaluated.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Delimited-list of TemplateVar values to filter resources by. Supports two delimiters and two value search formats. THe first delimiter || represents a logical OR and the primary grouping mechanism.  Within each group you can provide a comma-delimited list of values. These values can be either tied to a specific TemplateVar by name, e.g. myTV==value, or just the value, indicating you are searching for the value in any TemplateVar tied to the Resource. An example would be &tvFilters=`filter2==one,filter1==bar%||filter1==foo`. <br />NOTE: filtering by values uses a LIKE query and % is considered a wildcard. <br />ANOTHER NOTE: This only looks at the raw value set for specific Resource, i. e. there must be a value specifically set for the Resource and it is not evaluated.',
              'area_trans' => '',
            ),
            'tvFiltersAndDelimiter' => 
            array (
              'name' => 'tvFiltersAndDelimiter',
              'desc' => 'The delimiter to use to separate logical AND expressions in tvFilters. Default is ,',
              'type' => 'textfield',
              'options' => '',
              'value' => ',',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The delimiter to use to separate logical AND expressions in tvFilters. Default is ,',
              'area_trans' => '',
            ),
            'tvFiltersOrDelimiter' => 
            array (
              'name' => 'tvFiltersOrDelimiter',
              'desc' => 'The delimiter to use to separate logical OR expressions in tvFilters. Default is ||',
              'type' => 'textfield',
              'options' => '',
              'value' => '||',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The delimiter to use to separate logical OR expressions in tvFilters. Default is ||',
              'area_trans' => '',
            ),
            'depth' => 
            array (
              'name' => 'depth',
              'desc' => 'Integer value indicating depth to search for resources from each parent. Defaults to 10.',
              'type' => 'textfield',
              'options' => '',
              'value' => '10',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Integer value indicating depth to search for resources from each parent. Defaults to 10.',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'Optional. Comma-delimited list of ids serving as parents.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Optional. Comma-delimited list of ids serving as parents.',
              'area_trans' => '',
            ),
            'includeContent' => 
            array (
              'name' => 'includeContent',
              'desc' => 'Indicates if the content of each resource should be returned in the results. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if the content of each resource should be returned in the results. Defaults to false.',
              'area_trans' => '',
            ),
            'includeTVs' => 
            array (
              'name' => 'includeTVs',
              'desc' => 'Indicates if TemplateVar values should be included in the properties available to each resource template. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if TemplateVar values should be included in the properties available to each resource template. Defaults to false.',
              'area_trans' => '',
            ),
            'includeTVList' => 
            array (
              'name' => 'includeTVList',
              'desc' => 'Limits included TVs to those specified as a comma-delimited list of TV names. Defaults to empty.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Limits included TVs to those specified as a comma-delimited list of TV names. Defaults to empty.',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'Indicates if Resources that are hidden from menus should be shown. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if Resources that are hidden from menus should be shown. Defaults to false.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'Indicates if Resources that are unpublished should be shown. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if Resources that are unpublished should be shown. Defaults to false.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'Indicates if Resources that are deleted should be shown. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if Resources that are deleted should be shown. Defaults to false.',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'A comma-separated list of resource IDs to exclude or include. IDs with a - in front mean to exclude. Ex: 123,-456 means to include Resource 123, but always exclude Resource 456.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A comma-separated list of resource IDs to exclude or include. IDs with a - in front mean to exclude. Ex: 123,-456 means to include Resource 123, but always exclude Resource 456.',
              'area_trans' => '',
            ),
            'processTVs' => 
            array (
              'name' => 'processTVs',
              'desc' => 'Indicates if TemplateVar values should be rendered as they would on the resource being summarized. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if TemplateVar values should be rendered as they would on the resource being summarized. Defaults to false.',
              'area_trans' => '',
            ),
            'processTVList' => 
            array (
              'name' => 'processTVList',
              'desc' => 'Limits processed TVs to those specified as a comma-delimited list of TV names; note only includedTVs will be available for processing if specified. Defaults to empty.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Limits processed TVs to those specified as a comma-delimited list of TV names; note only includedTVs will be available for processing if specified. Defaults to empty.',
              'area_trans' => '',
            ),
            'prepareTVs' => 
            array (
              'name' => 'prepareTVs',
              'desc' => 'Indicates if TemplateVar values that are not processed fully should be prepared before being returned. Defaults to true.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if TemplateVar values that are not processed fully should be prepared before being returned. Defaults to true.',
              'area_trans' => '',
            ),
            'prepareTVList' => 
            array (
              'name' => 'prepareTVList',
              'desc' => 'Limits prepared TVs to those specified as a comma-delimited list of TV names; note only includedTVs will be available for preparing if specified. Defaults to empty.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Limits prepared TVs to those specified as a comma-delimited list of TV names; note only includedTVs will be available for preparing if specified. Defaults to empty.',
              'area_trans' => '',
            ),
            'tvPrefix' => 
            array (
              'name' => 'tvPrefix',
              'desc' => 'The prefix for TemplateVar properties. Defaults to: tv.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'tv.',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The prefix for TemplateVar properties. Defaults to: tv.',
              'area_trans' => '',
            ),
            'idx' => 
            array (
              'name' => 'idx',
              'desc' => 'You can define the starting idx of the resources, which is an property that is incremented as each resource is rendered.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'You can define the starting idx of the resources, which is an property that is incremented as each resource is rendered.',
              'area_trans' => '',
            ),
            'first' => 
            array (
              'name' => 'first',
              'desc' => 'Define the idx which represents the first resource (see tplFirst). Defaults to 1.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Define the idx which represents the first resource (see tplFirst). Defaults to 1.',
              'area_trans' => '',
            ),
            'last' => 
            array (
              'name' => 'last',
              'desc' => 'Define the idx which represents the last resource (see tplLast). Defaults to the number of resources being summarized + first - 1',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Define the idx which represents the last resource (see tplLast). Defaults to the number of resources being summarized + first - 1',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'If set, will assign the result to this placeholder instead of outputting it directly.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'If set, will assign the result to this placeholder instead of outputting it directly.',
              'area_trans' => '',
            ),
            'toSeparatePlaceholders' => 
            array (
              'name' => 'toSeparatePlaceholders',
              'desc' => 'If set, will assign EACH result to a separate placeholder named by this param suffixed with a sequential number (starting from 0).',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'If set, will assign EACH result to a separate placeholder named by this param suffixed with a sequential number (starting from 0).',
              'area_trans' => '',
            ),
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'If true, will send the SQL query to the MODX log. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'If true, will send the SQL query to the MODX log. Defaults to false.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'A JSON expression of criteria to build any additional where clauses from, e.g. &where=`{{"alias:LIKE":"foo%", "OR:alias:LIKE":"%bar"},{"OR:pagetitle:=":"foobar", "AND:description:=":"raboof"}}`',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A JSON expression of criteria to build any additional where clauses from, e.g. &where=`{{"alias:LIKE":"foo%", "OR:alias:LIKE":"%bar"},{"OR:pagetitle:=":"foobar", "AND:description:=":"raboof"}}`',
              'area_trans' => '',
            ),
            'dbCacheFlag' => 
            array (
              'name' => 'dbCacheFlag',
              'desc' => 'Determines how result sets are cached if cache_db is enabled in MODX. 0|false = do not cache result set; 1 = cache result set according to cache settings, any other integer value = number of seconds to cache result set',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Determines how result sets are cached if cache_db is enabled in MODX. 0|false = do not cache result set; 1 = cache result set according to cache settings, any other integer value = number of seconds to cache result set',
              'area_trans' => '',
            ),
            'context' => 
            array (
              'name' => 'context',
              'desc' => 'A comma-delimited list of context keys for limiting results. Default is empty, i.e. do not limit results by context.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A comma-delimited list of context keys for limiting results. Default is empty, i.e. do not limit results by context.',
              'area_trans' => '',
            ),
            'tplCondition' => 
            array (
              'name' => 'tplCondition',
              'desc' => 'A condition to compare against the conditionalTpls property to map Resources to different tpls based on custom conditional logic.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A condition to compare against the conditionalTpls property to map Resources to different tpls based on custom conditional logic.',
              'area_trans' => '',
            ),
            'tplOperator' => 
            array (
              'name' => 'tplOperator',
              'desc' => 'An optional operator to use for the tplCondition when comparing against the conditionalTpls operands. Default is == (equals).',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'is equal to',
                  'value' => '==',
                  'name' => 'is equal to',
                ),
                1 => 
                array (
                  'text' => 'is not equal to',
                  'value' => '!=',
                  'name' => 'is not equal to',
                ),
                2 => 
                array (
                  'text' => 'less than',
                  'value' => '<',
                  'name' => 'less than',
                ),
                3 => 
                array (
                  'text' => 'less than or equal to',
                  'value' => '<=',
                  'name' => 'less than or equal to',
                ),
                4 => 
                array (
                  'text' => 'greater than or equal to',
                  'value' => '>=',
                  'name' => 'greater than or equal to',
                ),
                5 => 
                array (
                  'text' => 'is empty',
                  'value' => 'empty',
                  'name' => 'is empty',
                ),
                6 => 
                array (
                  'text' => 'is not empty',
                  'value' => '!empty',
                  'name' => 'is not empty',
                ),
                7 => 
                array (
                  'text' => 'is null',
                  'value' => 'null',
                  'name' => 'is null',
                ),
                8 => 
                array (
                  'text' => 'is in array',
                  'value' => 'inarray',
                  'name' => 'is in array',
                ),
                9 => 
                array (
                  'text' => 'is between',
                  'value' => 'between',
                  'name' => 'is between',
                ),
              ),
              'value' => '==',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'An optional operator to use for the tplCondition when comparing against the conditionalTpls operands. Default is == (equals).',
              'area_trans' => '',
            ),
            'conditionalTpls' => 
            array (
              'name' => 'conditionalTpls',
              'desc' => 'A JSON map of conditional operands and tpls to compare against the tplCondition property using the specified tplOperator.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A JSON map of conditional operands and tpls to compare against the tplCondition property using the specified tplOperator.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * getResources
 *
 * A general purpose Resource listing and summarization snippet for MODX 2.x.
 *
 * @author Jason Coward
 * @copyright Copyright 2010-2013, Jason Coward
 *
 * TEMPLATES
 *
 * tpl - Name of a chunk serving as a resource template
 * [NOTE: if not provided, properties are dumped to output for each resource]
 *
 * tplOdd - (Opt) Name of a chunk serving as resource template for resources with an odd idx value
 * (see idx property)
 * tplFirst - (Opt) Name of a chunk serving as resource template for the first resource (see first
 * property)
 * tplLast - (Opt) Name of a chunk serving as resource template for the last resource (see last
 * property)
 * tpl_{n} - (Opt) Name of a chunk serving as resource template for the nth resource
 *
 * tplCondition - (Opt) Defines a field of the resource to evaluate against keys defined in the
 * conditionalTpls property. Must be a resource field; does not work with Template Variables.
 * conditionalTpls - (Opt) A JSON object defining a map of field values and the associated tpl to
 * use when the field defined by tplCondition matches the value. [NOTE: tplOdd, tplFirst, tplLast,
 * and tpl_{n} will take precedence over any defined conditionalTpls]
 *
 * tplWrapper - (Opt) Name of a chunk serving as a wrapper template for the output
 * [NOTE: Does not work with toSeparatePlaceholders]
 *
 * SELECTION
 *
 * parents - Comma-delimited list of ids serving as parents
 *
 * context - (Opt) Comma-delimited list of context keys to limit results by; if empty, contexts for all specified
 * parents will be used (all contexts if 0 is specified) [default=]
 *
 * depth - (Opt) Integer value indicating depth to search for resources from each parent [default=10]
 *
 * tvFilters - (Opt) Delimited-list of TemplateVar values to filter resources by. Supports two
 * delimiters and two value search formats. The first delimiter || represents a logical OR and the
 * primary grouping mechanism.  Within each group you can provide a comma-delimited list of values.
 * These values can be either tied to a specific TemplateVar by name, e.g. myTV==value, or just the
 * value, indicating you are searching for the value in any TemplateVar tied to the Resource. An
 * example would be &tvFilters=`filter2==one,filter1==bar%||filter1==foo`
 * [NOTE: filtering by values uses a LIKE query and % is considered a wildcard.]
 * [NOTE: this only looks at the raw value set for specific Resource, i. e. there must be a value
 * specifically set for the Resource and it is not evaluated.]
 *
 * tvFiltersAndDelimiter - (Opt) Custom delimiter for logical AND, default \',\', in case you want to
 * match a literal comma in the tvFilters. E.g. &tvFiltersAndDelimiter=`&&`
 * &tvFilters=`filter1==foo,bar&&filter2==baz` [default=,]
 *
 * tvFiltersOrDelimiter - (Opt) Custom delimiter for logical OR, default \'||\', in case you want to
 * match a literal \'||\' in the tvFilters. E.g. &tvFiltersOrDelimiter=`|OR|`
 * &tvFilters=`filter1==foo||bar|OR|filter2==baz` [default=||]
 *
 * where - (Opt) A JSON expression of criteria to build any additional where clauses from. An example would be
 * &where=`{{"alias:LIKE":"foo%", "OR:alias:LIKE":"%bar"},{"OR:pagetitle:=":"foobar", "AND:description:=":"raboof"}}`
 *
 * sortby - (Opt) Field to sort by or a JSON array, e.g. {"publishedon":"ASC","createdon":"DESC"} [default=publishedon]
 * sortbyTV - (opt) A Template Variable name to sort by (if supplied, this precedes the sortby value) [default=]
 * sortbyTVType - (Opt) A data type to CAST a TV Value to in order to sort on it properly [default=string]
 * sortbyAlias - (Opt) Query alias for sortby field [default=]
 * sortbyEscaped - (Opt) Escapes the field name(s) specified in sortby [default=0]
 * sortdir - (Opt) Order which to sort by [default=DESC]
 * sortdirTV - (Opt) Order which to sort by a TV [default=DESC]
 * limit - (Opt) Limits the number of resources returned [default=5]
 * offset - (Opt) An offset of resources returned by the criteria to skip [default=0]
 * dbCacheFlag - (Opt) Controls caching of db queries; 0|false = do not cache result set; 1 = cache result set
 * according to cache settings, any other integer value = number of seconds to cache result set [default=0]
 *
 * OPTIONS
 *
 * includeContent - (Opt) Indicates if the content of each resource should be returned in the
 * results [default=0]
 * includeTVs - (Opt) Indicates if TemplateVar values should be included in the properties available
 * to each resource template [default=0]
 * includeTVList - (Opt) Limits the TemplateVars that are included if includeTVs is true to those specified
 * by name in a comma-delimited list [default=]
 * prepareTVs - (Opt) Prepares media-source dependent TemplateVar values [default=1]
 * prepareTVList - (Opt) Limits the TVs that are prepared to those specified by name in a comma-delimited
 * list [default=]
 * processTVs - (Opt) Indicates if TemplateVar values should be rendered as they would on the
 * resource being summarized [default=0]
 * processTVList - (opt) Limits the TemplateVars that are processed if included to those specified
 * by name in a comma-delimited list [default=]
 * tvPrefix - (Opt) The prefix for TemplateVar properties [default=tv.]
 * idx - (Opt) You can define the starting idx of the resources, which is an property that is
 * incremented as each resource is rendered [default=1]
 * first - (Opt) Define the idx which represents the first resource (see tplFirst) [default=1]
 * last - (Opt) Define the idx which represents the last resource (see tplLast) [default=# of
 * resources being summarized + first - 1]
 * outputSeparator - (Opt) An optional string to separate each tpl instance [default="\\n"]
 * wrapIfEmpty - (Opt) Indicates if the tplWrapper should be applied if the output is empty [default=0]
 *
 */
$output = array();
$outputSeparator = isset($outputSeparator) ? $outputSeparator : "\\n";

/* set default properties */
$tpl = !empty($tpl) ? $tpl : \'\';
$includeContent = !empty($includeContent) ? true : false;
$includeTVs = !empty($includeTVs) ? true : false;
$includeTVList = !empty($includeTVList) ? explode(\',\', $includeTVList) : array();
$processTVs = !empty($processTVs) ? true : false;
$processTVList = !empty($processTVList) ? explode(\',\', $processTVList) : array();
$prepareTVs = !empty($prepareTVs) ? true : false;
$prepareTVList = !empty($prepareTVList) ? explode(\',\', $prepareTVList) : array();
$tvPrefix = isset($tvPrefix) ? $tvPrefix : \'tv.\';
$parents = (!empty($parents) || $parents === \'0\') ? explode(\',\', $parents) : array($modx->resource->get(\'id\'));
array_walk($parents, \'trim\');
$parents = array_unique($parents);
$depth = isset($depth) ? (integer) $depth : 10;

$tvFiltersOrDelimiter = isset($tvFiltersOrDelimiter) ? $tvFiltersOrDelimiter : \'||\';
$tvFiltersAndDelimiter = isset($tvFiltersAndDelimiter) ? $tvFiltersAndDelimiter : \',\';
$tvFilters = !empty($tvFilters) ? explode($tvFiltersOrDelimiter, $tvFilters) : array();

$where = !empty($where) ? $modx->fromJSON($where) : array();
$showUnpublished = !empty($showUnpublished) ? true : false;
$showDeleted = !empty($showDeleted) ? true : false;

$sortby = isset($sortby) ? $sortby : \'publishedon\';
$sortbyTV = isset($sortbyTV) ? $sortbyTV : \'\';
$sortbyAlias = isset($sortbyAlias) ? $sortbyAlias : \'modResource\';
$sortbyEscaped = !empty($sortbyEscaped) ? true : false;
$sortdir = isset($sortdir) ? $sortdir : \'DESC\';
$sortdirTV = isset($sortdirTV) ? $sortdirTV : \'DESC\';
$limit = isset($limit) ? (integer) $limit : 5;
$offset = isset($offset) ? (integer) $offset : 0;
$totalVar = !empty($totalVar) ? $totalVar : \'total\';

$dbCacheFlag = !isset($dbCacheFlag) ? false : $dbCacheFlag;
if (is_string($dbCacheFlag) || is_numeric($dbCacheFlag)) {
    if ($dbCacheFlag == \'0\') {
        $dbCacheFlag = false;
    } elseif ($dbCacheFlag == \'1\') {
        $dbCacheFlag = true;
    } else {
        $dbCacheFlag = (integer) $dbCacheFlag;
    }
}

/* multiple context support */
$contextArray = array();
$contextSpecified = false;
if (!empty($context)) {
    $contextArray = explode(\',\',$context);
    array_walk($contextArray, \'trim\');
    $contexts = array();
    foreach ($contextArray as $ctx) {
        $contexts[] = $modx->quote($ctx);
    }
    $context = implode(\',\',$contexts);
    $contextSpecified = true;
    unset($contexts,$ctx);
} else {
    $context = $modx->quote($modx->context->get(\'key\'));
}

$pcMap = array();
$pcQuery = $modx->newQuery(\'modResource\', array(\'id:IN\' => $parents), $dbCacheFlag);
$pcQuery->select(array(\'id\', \'context_key\'));
if ($pcQuery->prepare() && $pcQuery->stmt->execute()) {
    foreach ($pcQuery->stmt->fetchAll(PDO::FETCH_ASSOC) as $pcRow) {
        $pcMap[(integer) $pcRow[\'id\']] = $pcRow[\'context_key\'];
    }
}

$children = array();
$parentArray = array();
foreach ($parents as $parent) {
    $parent = (integer) $parent;
    if ($parent === 0) {
        $pchildren = array();
        if ($contextSpecified) {
            foreach ($contextArray as $pCtx) {
                if (!in_array($pCtx, $contextArray)) {
                    continue;
                }
                $options = $pCtx !== $modx->context->get(\'key\') ? array(\'context\' => $pCtx) : array();
                $pcchildren = $modx->getChildIds($parent, $depth, $options);
                if (!empty($pcchildren)) $pchildren = array_merge($pchildren, $pcchildren);
            }
        } else {
            $cQuery = $modx->newQuery(\'modContext\', array(\'key:!=\' => \'mgr\'));
            $cQuery->select(array(\'key\'));
            if ($cQuery->prepare() && $cQuery->stmt->execute()) {
                foreach ($cQuery->stmt->fetchAll(PDO::FETCH_COLUMN) as $pCtx) {
                    $options = $pCtx !== $modx->context->get(\'key\') ? array(\'context\' => $pCtx) : array();
                    $pcchildren = $modx->getChildIds($parent, $depth, $options);
                    if (!empty($pcchildren)) $pchildren = array_merge($pchildren, $pcchildren);
                }
            }
        }
        $parentArray[] = $parent;
    } else {
        $pContext = array_key_exists($parent, $pcMap) ? $pcMap[$parent] : false;
        if ($debug) $modx->log(modX::LOG_LEVEL_ERROR, "context for {$parent} is {$pContext}");
        if ($pContext && $contextSpecified && !in_array($pContext, $contextArray, true)) {
            $parent = next($parents);
            continue;
        }
        $parentArray[] = $parent;
        $options = !empty($pContext) && $pContext !== $modx->context->get(\'key\') ? array(\'context\' => $pContext) : array();
        $pchildren = $modx->getChildIds($parent, $depth, $options);
    }
    if (!empty($pchildren)) $children = array_merge($children, $pchildren);
    $parent = next($parents);
}
$parents = array_merge($parentArray, $children);

/* build query */
$criteria = array("modResource.parent IN (" . implode(\',\', $parents) . ")");
if ($contextSpecified) {
    $contextResourceTbl = $modx->getTableName(\'modContextResource\');
    $criteria[] = "(modResource.context_key IN ({$context}) OR EXISTS(SELECT 1 FROM {$contextResourceTbl} ctx WHERE ctx.resource = modResource.id AND ctx.context_key IN ({$context})))";
}
if (empty($showDeleted)) {
    $criteria[\'deleted\'] = \'0\';
}
if (empty($showUnpublished)) {
    $criteria[\'published\'] = \'1\';
}
if (empty($showHidden)) {
    $criteria[\'hidemenu\'] = \'0\';
}
if (!empty($hideContainers)) {
    $criteria[\'isfolder\'] = \'0\';
}
$criteria = $modx->newQuery(\'modResource\', $criteria);
if (!empty($tvFilters)) {
    $tmplVarTbl = $modx->getTableName(\'modTemplateVar\');
    $tmplVarResourceTbl = $modx->getTableName(\'modTemplateVarResource\');
    $conditions = array();
    $operators = array(
        \'<=>\' => \'<=>\',
        \'===\' => \'=\',
        \'!==\' => \'!=\',
        \'<>\' => \'<>\',
        \'==\' => \'LIKE\',
        \'!=\' => \'NOT LIKE\',
        \'<<\' => \'<\',
        \'<=\' => \'<=\',
        \'=<\' => \'=<\',
        \'>>\' => \'>\',
        \'>=\' => \'>=\',
        \'=>\' => \'=>\'
    );
    foreach ($tvFilters as $fGroup => $tvFilter) {
        $filterGroup = array();
        $filters = explode($tvFiltersAndDelimiter, $tvFilter);
        $multiple = count($filters) > 0;
        foreach ($filters as $filter) {
            $operator = \'==\';
            $sqlOperator = \'LIKE\';
            foreach ($operators as $op => $opSymbol) {
                if (strpos($filter, $op, 1) !== false) {
                    $operator = $op;
                    $sqlOperator = $opSymbol;
                    break;
                }
            }
            $tvValueField = \'tvr.value\';
            $tvDefaultField = \'tv.default_text\';
            $f = explode($operator, $filter);
            if (count($f) >= 2) {
                if (count($f) > 2) {
                    $k = array_shift($f);
                    $b = join($operator, $f);
                    $f = array($k, $b);
                }
                $tvName = $modx->quote($f[0]);
                if (is_numeric($f[1]) && !in_array($sqlOperator, array(\'LIKE\', \'NOT LIKE\'))) {
                    $tvValue = $f[1];
                    if ($f[1] == (integer)$f[1]) {
                        $tvValueField = "CAST({$tvValueField} AS SIGNED INTEGER)";
                        $tvDefaultField = "CAST({$tvDefaultField} AS SIGNED INTEGER)";
                    } else {
                        $tvValueField = "CAST({$tvValueField} AS DECIMAL)";
                        $tvDefaultField = "CAST({$tvDefaultField} AS DECIMAL)";
                    }
                } else {
                    $tvValue = $modx->quote($f[1]);
                }
                if ($multiple) {
                    $filterGroup[] =
                        "(EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.name = {$tvName} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id) " .
                        "OR EXISTS (SELECT 1 FROM {$tmplVarTbl} tv WHERE tv.name = {$tvName} AND {$tvDefaultField} {$sqlOperator} {$tvValue} AND tv.id NOT IN (SELECT tmplvarid FROM {$tmplVarResourceTbl} WHERE contentid = modResource.id)) " .
                        ")";
                } else {
                    $filterGroup =
                        "(EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.name = {$tvName} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id) " .
                        "OR EXISTS (SELECT 1 FROM {$tmplVarTbl} tv WHERE tv.name = {$tvName} AND {$tvDefaultField} {$sqlOperator} {$tvValue} AND tv.id NOT IN (SELECT tmplvarid FROM {$tmplVarResourceTbl} WHERE contentid = modResource.id)) " .
                        ")";
                }
            } elseif (count($f) == 1) {
                $tvValue = $modx->quote($f[0]);
                if ($multiple) {
                    $filterGroup[] = "EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id)";
                } else {
                    $filterGroup = "EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id)";
                }
            }
        }
        $conditions[] = $filterGroup;
    }
    if (!empty($conditions)) {
        $firstGroup = true;
        foreach ($conditions as $cGroup => $c) {
            if (is_array($c)) {
                $first = true;
                foreach ($c as $cond) {
                    if ($first && !$firstGroup) {
                        $criteria->condition($criteria->query[\'where\'][0][1], $cond, xPDOQuery::SQL_OR, null, $cGroup);
                    } else {
                        $criteria->condition($criteria->query[\'where\'][0][1], $cond, xPDOQuery::SQL_AND, null, $cGroup);
                    }
                    $first = false;
                }
            } else {
                $criteria->condition($criteria->query[\'where\'][0][1], $c, $firstGroup ? xPDOQuery::SQL_AND : xPDOQuery::SQL_OR, null, $cGroup);
            }
            $firstGroup = false;
        }
    }
}
/* include/exclude resources, via &resources=`123,-456` prop */
if (!empty($resources)) {
    $resourceConditions = array();
    $resources = explode(\',\',$resources);
    $include = array();
    $exclude = array();
    foreach ($resources as $resource) {
        $resource = (int)$resource;
        if ($resource == 0) continue;
        if ($resource < 0) {
            $exclude[] = abs($resource);
        } else {
            $include[] = $resource;
        }
    }
    if (!empty($include)) {
        $criteria->where(array(\'OR:modResource.id:IN\' => $include), xPDOQuery::SQL_OR);
    }
    if (!empty($exclude)) {
        $criteria->where(array(\'modResource.id:NOT IN\' => $exclude), xPDOQuery::SQL_AND, null, 1);
    }
}
if (!empty($where)) {
    $criteria->where($where);
}

$total = $modx->getCount(\'modResource\', $criteria);
$modx->setPlaceholder($totalVar, $total);

$fields = array_keys($modx->getFields(\'modResource\'));
if (empty($includeContent)) {
    $fields = array_diff($fields, array(\'content\'));
}
$columns = $includeContent ? $modx->getSelectColumns(\'modResource\', \'modResource\') : $modx->getSelectColumns(\'modResource\', \'modResource\', \'\', array(\'content\'), true);
$criteria->select($columns);
if (!empty($sortbyTV)) {
    $criteria->leftJoin(\'modTemplateVar\', \'tvDefault\', array(
        "tvDefault.name" => $sortbyTV
    ));
    $criteria->leftJoin(\'modTemplateVarResource\', \'tvSort\', array(
        "tvSort.contentid = modResource.id",
        "tvSort.tmplvarid = tvDefault.id"
    ));
    if (empty($sortbyTVType)) $sortbyTVType = \'string\';
    if ($modx->getOption(\'dbtype\') === \'mysql\') {
        switch ($sortbyTVType) {
            case \'integer\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS SIGNED INTEGER) AS sortTV");
                break;
            case \'decimal\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS DECIMAL) AS sortTV");
                break;
            case \'datetime\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS DATETIME) AS sortTV");
                break;
            case \'string\':
            default:
                $criteria->select("IFNULL(tvSort.value, tvDefault.default_text) AS sortTV");
                break;
        }
    } elseif ($modx->getOption(\'dbtype\') === \'sqlsrv\') {
        switch ($sortbyTVType) {
            case \'integer\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS BIGINT) AS sortTV");
                break;
            case \'decimal\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS DECIMAL) AS sortTV");
                break;
            case \'datetime\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS DATETIME) AS sortTV");
                break;
            case \'string\':
            default:
                $criteria->select("ISNULL(tvSort.value, tvDefault.default_text) AS sortTV");
                break;
        }
    }
    $criteria->sortby("sortTV", $sortdirTV);
}
if (!empty($sortby)) {
    if (strpos($sortby, \'{\') === 0) {
        $sorts = $modx->fromJSON($sortby);
    } else {
        $sorts = array($sortby => $sortdir);
    }
    if (is_array($sorts)) {
        while (list($sort, $dir) = each($sorts)) {
            if ($sortbyEscaped) $sort = $modx->escape($sort);
            if (!empty($sortbyAlias)) $sort = $modx->escape($sortbyAlias) . ".{$sort}";
            $criteria->sortby($sort, $dir);
        }
    }
}
if (!empty($limit)) $criteria->limit($limit, $offset);

if (!empty($debug)) {
    $criteria->prepare();
    $modx->log(modX::LOG_LEVEL_ERROR, $criteria->toSQL());
}
$collection = $modx->getCollection(\'modResource\', $criteria, $dbCacheFlag);

$idx = !empty($idx) || $idx === \'0\' ? (integer) $idx : 1;
$first = empty($first) && $first !== \'0\' ? 1 : (integer) $first;
$last = empty($last) ? (count($collection) + $idx - 1) : (integer) $last;

/* include parseTpl */
include_once $modx->getOption(\'getresources.core_path\',null,$modx->getOption(\'core_path\').\'components/getresources/\').\'include.parsetpl.php\';

$templateVars = array();
if (!empty($includeTVs) && !empty($includeTVList)) {
    $templateVars = $modx->getCollection(\'modTemplateVar\', array(\'name:IN\' => $includeTVList));
}
/** @var modResource $resource */
foreach ($collection as $resourceId => $resource) {
    $tvs = array();
    if (!empty($includeTVs)) {
        if (empty($includeTVList)) {
            $templateVars = $resource->getMany(\'TemplateVars\');
        }
        /** @var modTemplateVar $templateVar */
        foreach ($templateVars as $tvId => $templateVar) {
            if (!empty($includeTVList) && !in_array($templateVar->get(\'name\'), $includeTVList)) continue;
            if ($processTVs && (empty($processTVList) || in_array($templateVar->get(\'name\'), $processTVList))) {
                $tvs[$tvPrefix . $templateVar->get(\'name\')] = $templateVar->renderOutput($resource->get(\'id\'));
            } else {
                $value = $templateVar->getValue($resource->get(\'id\'));
                if ($prepareTVs && method_exists($templateVar, \'prepareOutput\') && (empty($prepareTVList) || in_array($templateVar->get(\'name\'), $prepareTVList))) {
                    $value = $templateVar->prepareOutput($value);
                }
                $tvs[$tvPrefix . $templateVar->get(\'name\')] = $value;
            }
        }
    }
    $odd = ($idx & 1);
    $properties = array_merge(
        $scriptProperties
        ,array(
            \'idx\' => $idx
            ,\'first\' => $first
            ,\'last\' => $last
            ,\'odd\' => $odd
        )
        ,$includeContent ? $resource->toArray() : $resource->get($fields)
        ,$tvs
    );
    $resourceTpl = false;
    if ($idx == $first && !empty($tplFirst)) {
        $resourceTpl = parseTpl($tplFirst, $properties);
    }
    if ($idx == $last && empty($resourceTpl) && !empty($tplLast)) {
        $resourceTpl = parseTpl($tplLast, $properties);
    }
    $tplidx = \'tpl_\' . $idx;
    if (empty($resourceTpl) && !empty($$tplidx)) {
        $resourceTpl = parseTpl($$tplidx, $properties);
    }
    if ($idx > 1 && empty($resourceTpl)) {
        $divisors = getDivisors($idx);
        if (!empty($divisors)) {
            foreach ($divisors as $divisor) {
                $tplnth = \'tpl_n\' . $divisor;
                if (!empty($$tplnth)) {
                    $resourceTpl = parseTpl($$tplnth, $properties);
                    if (!empty($resourceTpl)) {
                        break;
                    }
                }
            }
        }
    }
    if ($odd && empty($resourceTpl) && !empty($tplOdd)) {
        $resourceTpl = parseTpl($tplOdd, $properties);
    }
    if (!empty($tplCondition) && !empty($conditionalTpls) && empty($resourceTpl)) {
        $conTpls = $modx->fromJSON($conditionalTpls);
        $subject = $properties[$tplCondition];
        $tplOperator = !empty($tplOperator) ? $tplOperator : \'=\';
        $tplOperator = strtolower($tplOperator);
        $tplCon = \'\';
        foreach ($conTpls as $operand => $conditionalTpl) {
            switch ($tplOperator) {
                case \'!=\':
                case \'neq\':
                case \'not\':
                case \'isnot\':
                case \'isnt\':
                case \'unequal\':
                case \'notequal\':
                    $tplCon = (($subject != $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'<\':
                case \'lt\':
                case \'less\':
                case \'lessthan\':
                    $tplCon = (($subject < $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'>\':
                case \'gt\':
                case \'greater\':
                case \'greaterthan\':
                    $tplCon = (($subject > $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'<=\':
                case \'lte\':
                case \'lessthanequals\':
                case \'lessthanorequalto\':
                    $tplCon = (($subject <= $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'>=\':
                case \'gte\':
                case \'greaterthanequals\':
                case \'greaterthanequalto\':
                    $tplCon = (($subject >= $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'isempty\':
                case \'empty\':
                    $tplCon = empty($subject) ? $conditionalTpl : $tplCon;
                    break;
                case \'!empty\':
                case \'notempty\':
                case \'isnotempty\':
                    $tplCon = !empty($subject) && $subject != \'\' ? $conditionalTpl : $tplCon;
                    break;
                case \'isnull\':
                case \'null\':
                    $tplCon = $subject == null || strtolower($subject) == \'null\' ? $conditionalTpl : $tplCon;
                    break;
                case \'inarray\':
                case \'in_array\':
                case \'ia\':
                    $operand = explode(\',\', $operand);
                    $tplCon = in_array($subject, $operand) ? $conditionalTpl : $tplCon;
                    break;
                case \'between\':
                case \'range\':
                case \'>=<\':
                case \'><\':
                    $operand = explode(\',\', $operand);
                    $tplCon = ($subject >= min($operand) && $subject <= max($operand)) ? $conditionalTpl : $tplCon;
                    break;
                case \'==\':
                case \'=\':
                case \'eq\':
                case \'is\':
                case \'equal\':
                case \'equals\':
                case \'equalto\':
                default:
                    $tplCon = (($subject == $operand) ? $conditionalTpl : $tplCon);
                    break;
            }
        }
        if (!empty($tplCon)) {
            $resourceTpl = parseTpl($tplCon, $properties);
        }
    }
    if (!empty($tpl) && empty($resourceTpl)) {
        $resourceTpl = parseTpl($tpl, $properties);
    }
    if ($resourceTpl === false && !empty($debug)) {
        $chunk = $modx->newObject(\'modChunk\');
        $chunk->setCacheable(false);
        $output[]= $chunk->process(array(), \'<pre>\' . print_r($properties, true) .\'</pre>\');
    } else {
        $output[]= $resourceTpl;
    }
    $idx++;
}

/* output */
$toSeparatePlaceholders = $modx->getOption(\'toSeparatePlaceholders\', $scriptProperties, false);
if (!empty($toSeparatePlaceholders)) {
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
    return \'\';
}

$output = implode($outputSeparator, $output);

$tplWrapper = $modx->getOption(\'tplWrapper\', $scriptProperties, false);
$wrapIfEmpty = $modx->getOption(\'wrapIfEmpty\', $scriptProperties, false);
if (!empty($tplWrapper) && ($wrapIfEmpty || !empty($output))) {
    $output = parseTpl($tplWrapper, array_merge($scriptProperties, array(\'output\' => $output)));
}

$toPlaceholder = $modx->getOption(\'toPlaceholder\', $scriptProperties, false);
if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
    return \'\';
}
return $output;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'tagLister' => 
      array (
        'fields' => 
        array (
          'id' => 10,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'tagLister',
          'description' => 'A simple tag listing snippet that grabs tags from a TV value.',
          'editor_type' => 0,
          'category' => 3,
          'cache_type' => 0,
          'snippet' => '/**
 * tagLister
 *
 * Copyright 2010 by Shaun McCormick <shaun@modxcms.com>
 *
 * This file is part of tagLister, a simple tag listing snippet for MODx
 * Revolution.
 *
 * tagLister is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * tagLister is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * tagLister; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package taglister
 */
/**
 * tagLister snippet
 *
 * @var modX $modx
 * @var TagLister $tagLister
 * @var array $scriptProperties
 *
 * @package taglister
 */
$tagLister = $modx->getService(\'taglister\',\'TagLister\',$modx->getOption(\'taglister.core_path\',null,$modx->getOption(\'core_path\').\'components/taglister/\').\'model/taglister/\',$scriptProperties);
if (!($tagLister instanceof TagLister)) return \'\';
$modx->lexicon->load(\'taglister:default\');

/* setup default properties */
$tpl = $modx->getOption(\'tpl\',$scriptProperties,\'tag\');
$tv = $modx->getOption(\'tv\',$scriptProperties,\'tags\');
$tvDelimiter = $modx->getOption(\'tvDelimiter\',$scriptProperties,\',\');
$target = $modx->getOption(\'target\',$scriptProperties,1);
$tagVar = $modx->getOption(\'tagVar\',$scriptProperties,\'tag\');
$tagKeyVar = $modx->getOption(\'tagKeyVar\',$scriptProperties,\'key\');
$limit = $modx->getOption(\'limit\',$scriptProperties,10);
$sortBy = strtolower($modx->getOption(\'sortBy\',$scriptProperties,\'count\'));
$sortDir = strtoupper($modx->getOption(\'sortDir\',$scriptProperties,\'ASC\'));
$cls = $modx->getOption(\'cls\',$scriptProperties,\'\');
$altCls = $modx->getOption(\'altCls\',$scriptProperties,\'\');
$firstCls = $modx->getOption(\'firstCls\',$scriptProperties,\'\');
$lastCls = $modx->getOption(\'lastCls\',$scriptProperties,\'\');
$activeCls = $modx->getOption(\'activeCls\',$scriptProperties,\'\');
$activeTag = isset($_REQUEST[$tagVar]) ? $modx->stripTags(urldecode($_REQUEST[$tagVar])) : \'\';
$activeKey = isset($_REQUEST[$tagKeyVar]) ? $modx->stripTags(urldecode($_REQUEST[$tagKeyVar])) : \'\';
$all = $modx->getOption(\'all\',$scriptProperties,false);
$toLower = $modx->getOption(\'toLower\',$scriptProperties,false);
$weights = $modx->getOption(\'weights\',$scriptProperties,0);
$weightCls = $modx->getOption(\'weightCls\',$scriptProperties,\'\');
$useTagFurl = $modx->getOption(\'useTagFurl\',$scriptProperties,false);
$furlKey = $modx->getOption(\'furlKey\',$scriptProperties,\'tags\');


/* get TV values */
$c = $modx->newQuery(\'modTemplateVarResource\');
$c->innerJoin(\'modTemplateVar\',\'TemplateVar\');
$c->innerJoin(\'modResource\',\'Resource\');
$c->leftJoin(\'modUser\',\'CreatedBy\',\'CreatedBy.id = Resource.createdby\');
$c->leftJoin(\'modUser\',\'PublishedBy\',\'PublishedBy.id = Resource.publishedby\');
$c->leftJoin(\'modUser\',\'EditedBy\',\'EditedBy.id = Resource.editedby\');
$tvPk = (int)$tv;
if (!empty($tvPk)) {
    $c->where(array(\'TemplateVar.id\' => $tvPk));
} else {
    $c->where(array(\'TemplateVar.name\' => $tv));
}
/* parents support */
$parents = isset($parents) ? explode(\',\', $parents) : array();
if (!empty($parents)) {
    $depth = isset($depth) ? (integer) $depth : 10;
    $children = array();
    foreach ($parents as $parent) {
        $kids = $modx->getChildIds($parent,$depth);
        if (!empty($kids)) {
            $children = array_merge($children,$kids);
        }
    }
    if (!empty($children)) {
        $children = array_unique($children);
        $parents = array_merge($parents,$children);
    }
    $parents = array_unique($parents);
    if (!empty($parents)) {
        $c->where(array(
            \'Resource.id:IN\' => $parents,
        ));
    }
}
if (!$modx->getOption(\'includeDeleted\',$scriptProperties,false)) {
    $c->where(array(\'Resource.deleted\' => 0));
}
if (!$modx->getOption(\'includeUnpublished\',$scriptProperties,false)) {
    $c->where(array(\'Resource.published\' => 1));
}
/* json where support */
$where = $modx->getOption(\'where\',$scriptProperties,\'\');
if (!empty($where)) {
    $where = $modx->fromJSON($where);
    if (is_array($where) && !empty($where)) {
        $c->where($where);
    }
}
if ($sortBy == \'publishedon\') {
    $c->sortby(\'Resource.publishedon\',$sortDir);
} else if (in_array($sortBy,array(\'rand\',\'random\',\'rand()\'))) {
    $c->sortby(\'RAND()\',\'\');
}
$tags = $modx->getCollection(\'modTemplateVarResource\',$c);

/* parse TV values */
$output = array();
$tagList = array();
$encoding = $modx->getOption(\'modx_charset\',$scriptProperties,\'UTF-8\');
$useMultibyte = $modx->getOption(\'use_multibyte\',$scriptProperties,false);
/** @var modTemplateVarResource $tag */
foreach ($tags as $tag) {
   $v = $tag->get(\'value\');
   $vs = explode($tvDelimiter,$v);
   foreach ($vs as $key) {
      $key = trim($key);
      if (empty($key)) continue;
      if ($toLower) { /* allow for case-insensitive filtering */
          $key = $useMultibyte ? mb_strtolower($key,$encoding) : strtolower($key);
      }
      /* increment tag count */
      if (empty($tagList[$key])) {
         $tagList[$key] = 1;
      } else { $tagList[$key]++; }
   }
}

/* sort */
switch ($sortBy.\'-\'.$sortDir) {
    case \'publishedon-DESC\': case \'publishedon-ASC\': break;
    case \'tag-ASC\': ksort($tagList); break;
    case \'tag-DESC\': krsort($tagList); break;
    case \'count-DESC\': asort($tagList); break;
    case \'count-ASC\': default: arsort($tagList); break;
    case \'rand-ASC\': case \'random-ASC\': case \'rand()-asc\': $tagList = $tagLister->ashuffle($tagList); break;
}

/* iterate */
$totalTags = 0;
$i = $all ? 1 : 0;
foreach ($tagList as $tag => $count) {
    if ($i >= $limit) break;
    $tagCls = $cls.((!empty($altCls) && $i % 2)? \' \'.$altCls : \'\');
    if (!empty($firstCls) && $i == 0) $tagCls .= \' \'.$firstCls;
    if (!empty($lastCls) && ($i+1 >= $limit || $i == $count)) $tagCls .= \' \'.$lastCls;
    /* if tag is currently being viewed, mark as active */
    if (!empty($activeCls) && $tag==$activeTag && (empty($activeKey) || $tv==$activeKey)) $tagCls .= \' \'.$activeCls;
    /* handle weighting for css */
    if (!empty($weights) && !empty($weightCls)) $tagCls .= \' \'.$weightCls.ceil($count / (max($tagList) / $weights));

    $tagArray = array(
        \'tag\' => $tag,
        \'tagVar\' => $tagVar,
        \'tagKey\' => $tv,
        \'tagKeyVar\' => $tagKeyVar,
        \'count\' => $count,
        \'target\' => $target,
        \'cls\' => $tagCls,
        \'idx\' => $i,
    );
    $tagParams = array();
    if (empty($useTagFurl)) {
        $tagParams[$tagVar] = $tag;
        $tagParams[$tagKeyVar] = $tv;
    }
    $tagArray[\'url\'] = $modx->makeUrl($target,\'\',$tagParams);
    if (!empty($useTagFurl)) {
        $tagArray[\'url\'] = rtrim($tagArray[\'url\'],\'/\').\'/\'.(!empty($furlKey) ? $furlKey : $tv).\'/\'.urlencode($tag);
    }

    $output[] = $tagLister->getChunk($tpl,$tagArray);
    $totalTags += $count;
    $i++;
}

if ($all) {
    $allTpl = $modx->getOption(\'allTpl\',$scriptProperties,\'all\');
    $allChunk = $tagLister->getChunk($allTpl,array(
        \'tag\' => !empty($scriptProperties[\'allText\']) ? $scriptProperties[\'allText\'] : $modx->lexicon(\'all_tags\'),
        \'tagVar\' => $tagVar,
        \'tagKey\' => $tv,
        \'tagKeyVar\' => $tagKeyVar,
        \'count\' => $totalTags,
        \'target\' => $target,
        \'cls\' => $cls,
        \'url\' => $useTagFurl ? $modx->makeUrl($target).$tv.\'/\' : $modx->makeUrl($target,\'\',array(
            $tagVar => \'\',
            $tagKeyVar => $tv,
        )),
    ));
    if ($modx->getOption(\'allPosition\',$scriptProperties,\'B\') == \'T\') {
        array_unshift($output,$allChunk);
    } else {
        array_push($output,$allChunk);
    }
}

/* output */
$outputSeparator = $modx->getOption(\'outputSeparator\',$scriptProperties,"\\n");
$output = implode($outputSeparator,$output);
$toPlaceholder = $modx->getOption(\'toPlaceholder\',$scriptProperties,false);
if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder,$output);
    return \'\';
}
return $output;',
          'locked' => false,
          'properties' => 
          array (
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'prop_taglister.tpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'tag',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Name of a Chunk that will be used for each result.',
              'area_trans' => '',
            ),
            'tv' => 
            array (
              'name' => 'tv',
              'desc' => 'prop_taglister.tv_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'tags',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The name or ID of the TV being used for tags.',
              'area_trans' => '',
            ),
            'tvDelimiter' => 
            array (
              'name' => 'tvDelimiter',
              'desc' => 'prop_taglister.tvdelimiter_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => ',',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The delimiter being used between tags in the TV. Usually a comma, sometimes a space.',
              'area_trans' => '',
            ),
            'target' => 
            array (
              'name' => 'target',
              'desc' => 'prop_taglister.target_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The target Resource to point the tag links to. Will default to the current Resource.',
              'area_trans' => '',
            ),
            'tagVar' => 
            array (
              'name' => 'tagVar',
              'desc' => 'prop_taglister.tagvar_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'tag',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The REQUEST var of the tag value. Used in the links generated for each tag result.',
              'area_trans' => '',
            ),
            'tagKeyVar' => 
            array (
              'name' => 'tagKeyVar',
              'desc' => 'prop_taglister.tagkeyvar_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'key',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The REQUEST var of the tv name. Used in the links generated for each tag result',
              'area_trans' => '',
            ),
            'sortBy' => 
            array (
              'name' => 'sortBy',
              'desc' => 'prop_taglister.sortby_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'count',
                  'value' => 'count',
                  'name' => 'Count',
                ),
                1 => 
                array (
                  'text' => 'tag',
                  'value' => 'tag',
                  'name' => 'Tag',
                ),
              ),
              'value' => 'count',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Field to sort by. Defaults to count. Can be either tag or count.',
              'area_trans' => '',
            ),
            'sortDir' => 
            array (
              'name' => 'sortDir',
              'desc' => 'prop_taglister.sortdir_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ascending',
                  'vaue' => 'ASC',
                  'name' => 'Ascending',
                ),
                1 => 
                array (
                  'text' => 'descending',
                  'value' => 'DESC',
                  'name' => 'Descending',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Order which to sort by. Defaults to ASC.',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'prop_taglister.limit_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 10,
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Limits the number of resources returned. Defaults to 10.',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'prop_taglister.parents_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Optional. Comma-delimited list of ids serving as parents.',
              'area_trans' => '',
            ),
            'depth' => 
            array (
              'name' => 'depth',
              'desc' => 'prop_taglister.depth_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 10,
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Integer value indicating depth to search for resources from each parent. Defaults to 10.',
              'area_trans' => '',
            ),
            'includeDeleted' => 
            array (
              'name' => 'includeDeleted',
              'desc' => 'prop_taglister.includedeleted_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Include tags from deleted Resources in the results.',
              'area_trans' => '',
            ),
            'includeUnpublished' => 
            array (
              'name' => 'includeUnpublished',
              'desc' => 'prop_taglister.includeunpublished_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Include tags from unpublished Resources in the results.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'prop_taglister.where_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'A criteria in JSON format for filtering results.',
              'area_trans' => '',
            ),
            'cls' => 
            array (
              'name' => 'cls',
              'desc' => 'prop_taglister.cls_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'tl-tag',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Optional. A CSS class to add to each row. If empty will ignore.',
              'area_trans' => '',
            ),
            'altCls' => 
            array (
              'name' => 'altCls',
              'desc' => 'prop_taglister.altcls_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'tl-tag-alt',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Optional. A CSS class to add to each alternate row. If empty will ignore.',
              'area_trans' => '',
            ),
            'firstCls' => 
            array (
              'name' => 'firstCls',
              'desc' => 'prop_taglister.firstcls_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Optional. A CSS class to add to the first row. If empty will ignore.',
              'area_trans' => '',
            ),
            'lastCls' => 
            array (
              'name' => 'lastCls',
              'desc' => 'prop_taglister.lastcls_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Optional. A CSS class to add to the last row. If empty will ignore.',
              'area_trans' => '',
            ),
            'toLower' => 
            array (
              'name' => 'toLower',
              'desc' => 'prop_taglister.tolower_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Optional. If set to true, will allow case-insensitive tag listing.',
              'area_trans' => '',
            ),
            'all' => 
            array (
              'name' => 'all',
              'desc' => 'prop_taglister.all_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Whether or not to show an "All Tags" result.',
              'area_trans' => '',
            ),
            'allTpl' => 
            array (
              'name' => 'allTpl',
              'desc' => 'prop_taglister.alltpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'all',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The chunk for showing the all tags link.',
              'area_trans' => '',
            ),
            'allPosition' => 
            array (
              'name' => 'allPosition',
              'desc' => 'prop_taglister.allposition_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'bottom',
                  'value' => 'B',
                  'name' => 'Bottom',
                ),
                1 => 
                array (
                  'text' => 'top',
                  'value' => 'T',
                  'name' => 'Top',
                ),
              ),
              'value' => 'B',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Whether or not the all tags link should be at the top (T) or bottom (B) of the results.',
              'area_trans' => '',
            ),
            'allText' => 
            array (
              'name' => 'allText',
              'desc' => 'prop_taglister.alltext_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The text for the all tags link. Defaults to "All Tags".',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'prop_taglister.toplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'If set, will set the output of this snippet to this placeholder rather than output it.',
              'area_trans' => '',
            ),
            'outputSeparator' => 
            array (
              'name' => 'outputSeparator',
              'desc' => 'prop_taglister.outputseparator_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '
',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The separator for output for each result.',
              'area_trans' => '',
            ),
            'activeCls' => 
            array (
              'name' => 'activeCls',
              'desc' => 'prop_taglister.activecls_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Optional. A CSS class to add to the active tag. If empty will ignore.',
              'area_trans' => '',
            ),
            'weightCls' => 
            array (
              'name' => 'weightCls',
              'desc' => 'prop_taglister.weightcls_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'tl-tag-weight',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Optional. A CSS class to prefix to each weight. If empty will disable weights.',
              'area_trans' => '',
            ),
            'weights' => 
            array (
              'name' => 'weights',
              'desc' => 'prop_taglister.weights_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '5',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Optional. The number of weights to calculate. 0 or empty will disable weights.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * tagLister
 *
 * Copyright 2010 by Shaun McCormick <shaun@modxcms.com>
 *
 * This file is part of tagLister, a simple tag listing snippet for MODx
 * Revolution.
 *
 * tagLister is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * tagLister is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * tagLister; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package taglister
 */
/**
 * tagLister snippet
 *
 * @var modX $modx
 * @var TagLister $tagLister
 * @var array $scriptProperties
 *
 * @package taglister
 */
$tagLister = $modx->getService(\'taglister\',\'TagLister\',$modx->getOption(\'taglister.core_path\',null,$modx->getOption(\'core_path\').\'components/taglister/\').\'model/taglister/\',$scriptProperties);
if (!($tagLister instanceof TagLister)) return \'\';
$modx->lexicon->load(\'taglister:default\');

/* setup default properties */
$tpl = $modx->getOption(\'tpl\',$scriptProperties,\'tag\');
$tv = $modx->getOption(\'tv\',$scriptProperties,\'tags\');
$tvDelimiter = $modx->getOption(\'tvDelimiter\',$scriptProperties,\',\');
$target = $modx->getOption(\'target\',$scriptProperties,1);
$tagVar = $modx->getOption(\'tagVar\',$scriptProperties,\'tag\');
$tagKeyVar = $modx->getOption(\'tagKeyVar\',$scriptProperties,\'key\');
$limit = $modx->getOption(\'limit\',$scriptProperties,10);
$sortBy = strtolower($modx->getOption(\'sortBy\',$scriptProperties,\'count\'));
$sortDir = strtoupper($modx->getOption(\'sortDir\',$scriptProperties,\'ASC\'));
$cls = $modx->getOption(\'cls\',$scriptProperties,\'\');
$altCls = $modx->getOption(\'altCls\',$scriptProperties,\'\');
$firstCls = $modx->getOption(\'firstCls\',$scriptProperties,\'\');
$lastCls = $modx->getOption(\'lastCls\',$scriptProperties,\'\');
$activeCls = $modx->getOption(\'activeCls\',$scriptProperties,\'\');
$activeTag = isset($_REQUEST[$tagVar]) ? $modx->stripTags(urldecode($_REQUEST[$tagVar])) : \'\';
$activeKey = isset($_REQUEST[$tagKeyVar]) ? $modx->stripTags(urldecode($_REQUEST[$tagKeyVar])) : \'\';
$all = $modx->getOption(\'all\',$scriptProperties,false);
$toLower = $modx->getOption(\'toLower\',$scriptProperties,false);
$weights = $modx->getOption(\'weights\',$scriptProperties,0);
$weightCls = $modx->getOption(\'weightCls\',$scriptProperties,\'\');
$useTagFurl = $modx->getOption(\'useTagFurl\',$scriptProperties,false);
$furlKey = $modx->getOption(\'furlKey\',$scriptProperties,\'tags\');


/* get TV values */
$c = $modx->newQuery(\'modTemplateVarResource\');
$c->innerJoin(\'modTemplateVar\',\'TemplateVar\');
$c->innerJoin(\'modResource\',\'Resource\');
$c->leftJoin(\'modUser\',\'CreatedBy\',\'CreatedBy.id = Resource.createdby\');
$c->leftJoin(\'modUser\',\'PublishedBy\',\'PublishedBy.id = Resource.publishedby\');
$c->leftJoin(\'modUser\',\'EditedBy\',\'EditedBy.id = Resource.editedby\');
$tvPk = (int)$tv;
if (!empty($tvPk)) {
    $c->where(array(\'TemplateVar.id\' => $tvPk));
} else {
    $c->where(array(\'TemplateVar.name\' => $tv));
}
/* parents support */
$parents = isset($parents) ? explode(\',\', $parents) : array();
if (!empty($parents)) {
    $depth = isset($depth) ? (integer) $depth : 10;
    $children = array();
    foreach ($parents as $parent) {
        $kids = $modx->getChildIds($parent,$depth);
        if (!empty($kids)) {
            $children = array_merge($children,$kids);
        }
    }
    if (!empty($children)) {
        $children = array_unique($children);
        $parents = array_merge($parents,$children);
    }
    $parents = array_unique($parents);
    if (!empty($parents)) {
        $c->where(array(
            \'Resource.id:IN\' => $parents,
        ));
    }
}
if (!$modx->getOption(\'includeDeleted\',$scriptProperties,false)) {
    $c->where(array(\'Resource.deleted\' => 0));
}
if (!$modx->getOption(\'includeUnpublished\',$scriptProperties,false)) {
    $c->where(array(\'Resource.published\' => 1));
}
/* json where support */
$where = $modx->getOption(\'where\',$scriptProperties,\'\');
if (!empty($where)) {
    $where = $modx->fromJSON($where);
    if (is_array($where) && !empty($where)) {
        $c->where($where);
    }
}
if ($sortBy == \'publishedon\') {
    $c->sortby(\'Resource.publishedon\',$sortDir);
} else if (in_array($sortBy,array(\'rand\',\'random\',\'rand()\'))) {
    $c->sortby(\'RAND()\',\'\');
}
$tags = $modx->getCollection(\'modTemplateVarResource\',$c);

/* parse TV values */
$output = array();
$tagList = array();
$encoding = $modx->getOption(\'modx_charset\',$scriptProperties,\'UTF-8\');
$useMultibyte = $modx->getOption(\'use_multibyte\',$scriptProperties,false);
/** @var modTemplateVarResource $tag */
foreach ($tags as $tag) {
   $v = $tag->get(\'value\');
   $vs = explode($tvDelimiter,$v);
   foreach ($vs as $key) {
      $key = trim($key);
      if (empty($key)) continue;
      if ($toLower) { /* allow for case-insensitive filtering */
          $key = $useMultibyte ? mb_strtolower($key,$encoding) : strtolower($key);
      }
      /* increment tag count */
      if (empty($tagList[$key])) {
         $tagList[$key] = 1;
      } else { $tagList[$key]++; }
   }
}

/* sort */
switch ($sortBy.\'-\'.$sortDir) {
    case \'publishedon-DESC\': case \'publishedon-ASC\': break;
    case \'tag-ASC\': ksort($tagList); break;
    case \'tag-DESC\': krsort($tagList); break;
    case \'count-DESC\': asort($tagList); break;
    case \'count-ASC\': default: arsort($tagList); break;
    case \'rand-ASC\': case \'random-ASC\': case \'rand()-asc\': $tagList = $tagLister->ashuffle($tagList); break;
}

/* iterate */
$totalTags = 0;
$i = $all ? 1 : 0;
foreach ($tagList as $tag => $count) {
    if ($i >= $limit) break;
    $tagCls = $cls.((!empty($altCls) && $i % 2)? \' \'.$altCls : \'\');
    if (!empty($firstCls) && $i == 0) $tagCls .= \' \'.$firstCls;
    if (!empty($lastCls) && ($i+1 >= $limit || $i == $count)) $tagCls .= \' \'.$lastCls;
    /* if tag is currently being viewed, mark as active */
    if (!empty($activeCls) && $tag==$activeTag && (empty($activeKey) || $tv==$activeKey)) $tagCls .= \' \'.$activeCls;
    /* handle weighting for css */
    if (!empty($weights) && !empty($weightCls)) $tagCls .= \' \'.$weightCls.ceil($count / (max($tagList) / $weights));

    $tagArray = array(
        \'tag\' => $tag,
        \'tagVar\' => $tagVar,
        \'tagKey\' => $tv,
        \'tagKeyVar\' => $tagKeyVar,
        \'count\' => $count,
        \'target\' => $target,
        \'cls\' => $tagCls,
        \'idx\' => $i,
    );
    $tagParams = array();
    if (empty($useTagFurl)) {
        $tagParams[$tagVar] = $tag;
        $tagParams[$tagKeyVar] = $tv;
    }
    $tagArray[\'url\'] = $modx->makeUrl($target,\'\',$tagParams);
    if (!empty($useTagFurl)) {
        $tagArray[\'url\'] = rtrim($tagArray[\'url\'],\'/\').\'/\'.(!empty($furlKey) ? $furlKey : $tv).\'/\'.urlencode($tag);
    }

    $output[] = $tagLister->getChunk($tpl,$tagArray);
    $totalTags += $count;
    $i++;
}

if ($all) {
    $allTpl = $modx->getOption(\'allTpl\',$scriptProperties,\'all\');
    $allChunk = $tagLister->getChunk($allTpl,array(
        \'tag\' => !empty($scriptProperties[\'allText\']) ? $scriptProperties[\'allText\'] : $modx->lexicon(\'all_tags\'),
        \'tagVar\' => $tagVar,
        \'tagKey\' => $tv,
        \'tagKeyVar\' => $tagKeyVar,
        \'count\' => $totalTags,
        \'target\' => $target,
        \'cls\' => $cls,
        \'url\' => $useTagFurl ? $modx->makeUrl($target).$tv.\'/\' : $modx->makeUrl($target,\'\',array(
            $tagVar => \'\',
            $tagKeyVar => $tv,
        )),
    ));
    if ($modx->getOption(\'allPosition\',$scriptProperties,\'B\') == \'T\') {
        array_unshift($output,$allChunk);
    } else {
        array_push($output,$allChunk);
    }
}

/* output */
$outputSeparator = $modx->getOption(\'outputSeparator\',$scriptProperties,"\\n");
$output = implode($outputSeparator,$output);
$toPlaceholder = $modx->getOption(\'toPlaceholder\',$scriptProperties,false);
if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder,$output);
    return \'\';
}
return $output;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'Archivist' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Archivist',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '/**
 * Archivist
 *
 * Copyright 2010-2011 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Archivist, a simple archive navigation system for MODx
 * Revolution.
 *
 * Archivist is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Archivist is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Archivist; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package archivist
 */
/**
 * Display an archived result filter list
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var Archivist $archivist
 *
 * @package archivist
 */
$archivist = $modx->getService(\'archivist\',\'Archivist\',$modx->getOption(\'archivist.core_path\',null,$modx->getOption(\'core_path\').\'components/archivist/\').\'model/archivist/\',$scriptProperties);
if (!($archivist instanceof Archivist)) return \'\';

/* setup default properties */
$tpl = $modx->getOption(\'tpl\',$scriptProperties,\'row\');
$parents = !empty($scriptProperties[\'parents\']) ? $scriptProperties[\'parents\'] : $modx->resource->get(\'id\');
$parents = explode(\',\',$parents);
$target = !empty($scriptProperties[\'target\']) ? $scriptProperties[\'target\'] : $modx->resource->get(\'id\');
$sortBy = $modx->getOption(\'sortBy\',$scriptProperties,\'publishedon\');
$sortDir = $modx->getOption(\'sortDir\',$scriptProperties,\'DESC\');
$groupByYear = $modx->getOption(\'groupByYear\',$scriptProperties,false);
$sortYear = $modx->getOption(\'sortYear\',$scriptProperties,\'DESC\');
$depth = $modx->getOption(\'depth\',$scriptProperties,10);
$where = $modx->getOption(\'where\',$scriptProperties,\'\');

$cls = $modx->getOption(\'cls\',$scriptProperties,\'arc-row\');
$altCls = $modx->getOption(\'altCls\',$scriptProperties,\'arc-row-alt\');
$lastCls = $modx->getOption(\'lastCls\',$scriptProperties,\'\');
$firstCls = $modx->getOption(\'firstCls\',$scriptProperties,\'\');

$filterPrefix = $modx->getOption(\'filterPrefix\',$scriptProperties,\'arc_\');
$useMonth = $modx->getOption(\'useMonth\',$scriptProperties,true);
$useDay = $modx->getOption(\'useDay\',$scriptProperties,false);
$dateFormat = !empty($scriptProperties[\'dateFormat\']) ? $scriptProperties[\'dateFormat\'] : \'\';
$limit = $modx->getOption(\'limit\',$scriptProperties,12);
$start = $modx->getOption(\'start\',$scriptProperties,0);
$hideContainers = $modx->getOption(\'hideContainers\',$scriptProperties,true);
$useFurls = $modx->getOption(\'useFurls\',$scriptProperties,true);
$persistGetParams = $modx->getOption(\'persistGetParams\',$scriptProperties,false);

/* handle existing GET params */
$extraParams = $modx->getOption(\'extraParams\',$scriptProperties,array());
$extraParams = $archivist->mergeGetParams($extraParams,$persistGetParams,$filterPrefix);

/* set locale for date processing */
if ($modx->getOption(\'setLocale\',$scriptProperties,true)) {
    $cultureKey = $modx->getOption(\'cultureKey\',null,\'en\');
    $locale = !empty($scriptProperties[\'locale\']) ? $scriptProperties[\'locale\'] : $cultureKey;
    if (!empty($locale)) {
        setlocale(LC_ALL,$locale);
    }
}

/* find children of parents */
$children = array();
foreach ($parents as $parent) {
    $pchildren = $modx->getChildIds($parent, $depth);
    if (!empty($pchildren)) $children = array_merge($children, $pchildren);
}
if (!empty($children)) $parents = array_merge($parents, $children);

/* get filter format */
$dateEmpty = empty($dateFormat);
$sqlDateFormat = \'%Y\';
if ($dateEmpty) $dateFormat = \'%Y\';
if ($useMonth) {
    if ($dateEmpty) $dateFormat = \'%B \'.$dateFormat;
    $sqlDateFormat = \'%b \'.$sqlDateFormat;
}
if ($useDay) {
    if ($dateEmpty) $dateFormat = \'%d \'.$dateFormat;
    $sqlDateFormat = \'%d \'.$sqlDateFormat;
}
/* build query */
$c = $modx->newQuery(\'modResource\');
$fields = $modx->getSelectColumns(\'modResource\',\'\',\'\',array(\'id\',$sortBy));
$c->select($fields);
$c->select(array(
    \'FROM_UNIXTIME(\'.$sortBy.\',"\'.$sqlDateFormat.\'") AS \'.$modx->escape(\'date\'),
    \'FROM_UNIXTIME(\'.$sortBy.\',"\'.$sqlDateFormat.\'") AS \'.$modx->escape(\'date\'),
    \'FROM_UNIXTIME(\'.$sortBy.\',"%D") AS \'.$modx->escape(\'day_formatted\'),
    \'COUNT(\'.$modx->escape(\'id\').\') AS \'.$modx->escape(\'count\'),
));
$c->where(array(
    \'parent:IN\' => $parents,
    \'published\' => true,
    \'deleted\' => false,
));
/* don\'t grab unpublished resources */
$c->where(array(
    \'published\' => true,
));
if ($hideContainers) {
    $c->where(array(
        \'isfolder\' => false,
    ));
}
if (!empty($where)) {
    $where = $modx->fromJSON($where);
    $c->where($where);
}
$exclude = $modx->getOption(\'exclude\',$scriptProperties,\'\');
if (!empty($exclude)) {
    $c->where(array(
        \'id:NOT IN\' => is_array($exclude) ? $exclude : explode(\',\',$exclude),
    ));
}
$c->sortby(\'FROM_UNIXTIME(`\'.$sortBy.\'`,"%Y") \'.$sortDir.\', FROM_UNIXTIME(`\'.$sortBy.\'`,"%m") \'.$sortDir.\', FROM_UNIXTIME(`\'.$sortBy.\'`,"%d") \'.$sortDir,\'\');
$c->groupby(\'FROM_UNIXTIME(`\'.$sortBy.\'`,"\'.$sqlDateFormat.\'")\');
/* if limiting to X records */
if (!empty($limit)) { $c->limit($limit,$start); }
$resources = $modx->getIterator(\'modResource\',$c);

/* iterate over resources */
$output = array();
$groupByYearOutput = array();
$idx = 0;
$count = count($resources);
/** @var modResource $resource */
foreach ($resources as $resource) {
    $resourceArray = $resource->toArray();

    $date = $resource->get($sortBy);
    $dateObj = strtotime($date);

    $resourceArray[\'date\'] = strftime($dateFormat,$dateObj);
    $resourceArray[\'month_name_abbr\'] = strftime(\'%b\',$dateObj);
    $resourceArray[\'month_name\'] = strftime(\'%B\',$dateObj);
    $resourceArray[\'month\'] = strftime(\'%m\',$dateObj);
    $resourceArray[\'year\'] = strftime(\'%Y\',$dateObj);
    $resourceArray[\'year_two_digit\'] = strftime(\'%y\',$dateObj);
    $resourceArray[\'day\'] = strftime(\'%d\',$dateObj);
    $resourceArray[\'weekday\'] = strftime(\'%A\',$dateObj);
    $resourceArray[\'weekday_abbr\'] = strftime(\'%a\',$dateObj);
    $resourceArray[\'weekday_idx\'] = strftime(\'%w\',$dateObj);

    /* css classes */
    $resourceArray[\'cls\'] = $cls;
    if ($idx % 2) { $resourceArray[\'cls\'] .= \' \'.$altCls; }
    if ($idx == 0 && !empty($firstCls)) { $resourceArray[\'cls\'] .= \' \'.$firstCls; }
    if ($idx+1 == $count && !empty($lastCls)) { $resourceArray[\'cls\'] .= \' \'.$lastCls; }

    /* setup GET params */
    $params = array();
    $params[$filterPrefix.\'year\'] = $resourceArray[\'year\'];

    /* if using month filter */
    if ($useMonth) {
        $params[$filterPrefix.\'month\'] = $resourceArray[\'month\'];
    }
    /* if using day filter (why you would ever is beyond me...) */
    if ($useDay) {
        $params[$filterPrefix.\'day\'] = $resourceArray[\'day\'];
        if (empty($scriptProperties[\'dateFormat\'])) {
            $resourceArray[\'date\'] = $resourceArray[\'month_name\'].\' \'.$resourceArray[\'day\'].\', \'.$resourceArray[\'year\'];
        }
    }

    if ($useFurls) {
        $params = implode(\'/\',$params);
        if (!empty($extraParams)) $params .= \'?\'.$extraParams;
        $resourceArray[\'url\'] = $modx->makeUrl($target).$params;
    } else {
        $params = http_build_query($params);
        if (!empty($extraParams)) $params .= \'&\'.$extraParams;
        $resourceArray[\'url\'] = $modx->makeUrl($target,\'\',$params);
    }

    if ($groupByYear) {
        $groupByYearOutput[$resourceArray[\'year\']][] = $resourceArray;
    } else {
        $output[] = $archivist->getChunk($tpl,$resourceArray);
    }

    $idx++;
}

if ($groupByYear) {
    $wrapperTpl = $modx->getOption(\'yearGroupTpl\',$scriptProperties,\'yeargroup\');
    $wrapperRowSeparator = $modx->getOption(\'yearGroupRowSeparator\',$scriptProperties,"\\n");
    if (strtolower($sortYear) === \'asc\') {
        ksort($groupByYearOutput);
    } else {
        krsort($groupByYearOutput);
    }
    foreach ($groupByYearOutput as $year => $row) {
        $wrapper[\'year\'] = $year;

        $params = array();
        $params[$filterPrefix.\'year\'] = $year;

        if ($useFurls) {
            $params = implode(\'/\',$params);
            if (!empty($extraParams)) $params .= \'?\'.$extraParams;
            $wrapper[\'url\'] = $modx->makeUrl($target).$params;
        } else {
            $params = http_build_query($params);
            if (!empty($extraParams)) $params .= \'&\'.$extraParams;
            $wrapper[\'url\'] = $modx->makeUrl($target,\'\',$params);
        }

        $wrapper[\'row\'] = array();
        foreach ($row as $month) {
            $wrapper[\'row\'][] = $archivist->getChunk($tpl,$month);
        }
        $wrapper[\'row\'] = implode($wrapperRowSeparator,$wrapper[\'row\']);
        $output[] = $archivist->getChunk($wrapperTpl,$wrapper);
    }
}

/* output or set to placeholder */
$outputSeparator = $modx->getOption(\'outputSeparator\',$scriptProperties,"\\n");
$output = implode($outputSeparator,$output);
$toPlaceholder = $modx->getOption(\'toPlaceholder\',$scriptProperties,false);
if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder,$output);
    return \'\';
}
return $output;',
          'locked' => false,
          'properties' => 
          array (
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'prop_archivist.tpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'row',
              'lexicon' => 'archivist:properties',
              'area' => '',
              'desc_trans' => 'Name of a Chunk that will be used for each result.',
              'area_trans' => '',
            ),
            'target' => 
            array (
              'name' => 'target',
              'desc' => 'prop_archivist.target_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'archivist:properties',
              'area' => '',
              'desc_trans' => 'The target Resource to point the archive links to. Will default to the current Resource.',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'prop_archivist.parents_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'archivist:properties',
              'area' => '',
              'desc_trans' => 'Optional. Comma-delimited list of ids serving as parents. Will default to the current Resource otherwise.',
              'area_trans' => '',
            ),
            'depth' => 
            array (
              'name' => 'depth',
              'desc' => 'prop_archivist.depth_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '10',
              'lexicon' => 'archivist:properties',
              'area' => '',
              'desc_trans' => 'Integer value indicating depth to search for resources from each parent. Defaults to 10.',
              'area_trans' => '',
            ),
            'exclude' => 
            array (
              'name' => 'exclude',
              'desc' => 'prop_archivist.exclude_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'archivist:properties',
              'area' => '',
              'desc_trans' => 'Optional. Comma-delimited list of ids to exclude from results. Defaults to none.',
              'area_trans' => '',
            ),
            'sortBy' => 
            array (
              'name' => 'sortBy',
              'desc' => 'prop_archivist.sortby_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'publishedon',
              'lexicon' => 'archivist:properties',
              'area' => '',
              'desc_trans' => 'Field to sort by. Defaults to publishedon.',
              'area_trans' => '',
            ),
            'sortDir' => 
            array (
              'name' => 'sortDir',
              'desc' => 'prop_archivist.sortdir_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'prop_arc.ascending',
                  'value' => 'ASC',
                  'name' => 'Ascending',
                ),
                1 => 
                array (
                  'text' => 'prop_arc.descending',
                  'value' => 'DESC',
                  'name' => 'Descending',
                ),
              ),
              'value' => 'DESC',
              'lexicon' => 'archivist:properties',
              'area' => '',
              'desc_trans' => 'Order which to sort by. Defaults to DESC.',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'prop_archivist.limit_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '12',
              'lexicon' => 'archivist:properties',
              'area' => '',
              'desc_trans' => 'Limits the number of resources returned. Defaults to 10.',
              'area_trans' => '',
            ),
            'start' => 
            array (
              'name' => 'start',
              'desc' => 'prop_archivist.start_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'archivist:properties',
              'area' => '',
              'desc_trans' => 'Optional. An offset of resources returned by the criteria to skip.',
              'area_trans' => '',
            ),
            'useMonth' => 
            array (
              'name' => 'useMonth',
              'desc' => 'prop_archivist.usemonth_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'archivist:properties',
              'area' => '',
              'desc_trans' => 'If 1, will use the month in the archive list.',
              'area_trans' => '',
            ),
            'useDay' => 
            array (
              'name' => 'useDay',
              'desc' => 'prop_archivist.useday_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'archivist:properties',
              'area' => '',
              'desc_trans' => 'If 1, will use the day in the archive list.',
              'area_trans' => '',
            ),
            'groupByYear' => 
            array (
              'name' => 'groupByYear',
              'desc' => 'prop_archivist.groupbyyear_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'archivist:properties',
              'area' => '',
              'desc_trans' => 'If 1, Archivist will attempt to group the results by year and display results in a nested list.',
              'area_trans' => '',
            ),
            'groupByYearTpl' => 
            array (
              'name' => 'groupByYearTpl',
              'desc' => 'prop_archivist.groupbyyeartpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'yeargroup',
              'lexicon' => 'archivist:properties',
              'area' => '',
              'desc_trans' => 'The Chunk to use for the wrapper when grouping by year.',
              'area_trans' => '',
            ),
            'dateFormat' => 
            array (
              'name' => 'dateFormat',
              'desc' => 'prop_archivist.dateformat_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'archivist:properties',
              'area' => '',
              'desc_trans' => 'Optional. The date format, according to MySQL DATE_FORMAT() syntax, for each row. If blank, Archivist will calculate this automatically.',
              'area_trans' => '',
            ),
            'useFurls' => 
            array (
              'name' => 'useFurls',
              'desc' => 'prop_archivist.usefurls',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'archivist:properties',
              'area' => '',
              'desc_trans' => 'prop_archivist.usefurls',
              'area_trans' => '',
            ),
            'persistGetParams' => 
            array (
              'name' => 'persistGetParams',
              'desc' => 'prop_archivist.persistgetparams_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'archivist:properties',
              'area' => '',
              'desc_trans' => 'If true, links generated will persist the GET params of the page they are on. Not recommended.',
              'area_trans' => '',
            ),
            'extraParams' => 
            array (
              'name' => 'extraParams',
              'desc' => 'prop_archivist.extraparams_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'archivist:properties',
              'area' => '',
              'desc_trans' => 'Optional. If specified, will attach this to the URL of each row.',
              'area_trans' => '',
            ),
            'cls' => 
            array (
              'name' => 'cls',
              'desc' => 'prop_archivist.cls_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'arc-row',
              'lexicon' => 'archivist:properties',
              'area' => '',
              'desc_trans' => 'A CSS class to add to each row.',
              'area_trans' => '',
            ),
            'altCls' => 
            array (
              'name' => 'altCls',
              'desc' => 'prop_archivist.altcls_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'arc-row-alt',
              'lexicon' => 'archivist:properties',
              'area' => '',
              'desc_trans' => 'A CSS class to add to each alternate row.',
              'area_trans' => '',
            ),
            'firstCls' => 
            array (
              'name' => 'firstCls',
              'desc' => 'prop_archivist.firstcls_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'archivist:properties',
              'area' => '',
              'desc_trans' => 'Optional. A CSS class to add to the first row. If empty will ignore.',
              'area_trans' => '',
            ),
            'lastCls' => 
            array (
              'name' => 'lastCls',
              'desc' => 'prop_archivist.lastcls_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'archivist:properties',
              'area' => '',
              'desc_trans' => 'Optional. A CSS class to add to the last row. If empty will ignore.',
              'area_trans' => '',
            ),
            'filterPrefix' => 
            array (
              'name' => 'filterPrefix',
              'desc' => 'prop_archivist.filterprefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'arc_',
              'lexicon' => 'archivist:properties',
              'area' => '',
              'desc_trans' => 'The prefix to use for GET parameters with the Archivist links. Make sure this is the same as the filterPrefix parameter on the getArchives snippet call.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'prop_archivist.toplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'archivist:properties',
              'area' => '',
              'desc_trans' => 'If set, will set the output of this snippet to this placeholder rather than output it.',
              'area_trans' => '',
            ),
            'setLocale' => 
            array (
              'name' => 'setLocale',
              'desc' => 'prop_archivist.setlocale_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'archivist:properties',
              'area' => '',
              'desc_trans' => 'If 1, Archivist will run the setlocale function with your cultureKey setting if your cultureKey is not "en".',
              'area_trans' => '',
            ),
            'locale' => 
            array (
              'name' => 'locale',
              'desc' => 'prop_archivist.locale_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => true,
              'lexicon' => 'archivist:properties',
              'area' => '',
              'desc_trans' => 'If this is set and setLocale is 1, will use this value instead of the cultureKey setting to set the locale by.',
              'area_trans' => '',
            ),
            'hideContainers' => 
            array (
              'name' => 'hideContainers',
              'desc' => 'prop_archivistbymonth.hidecontainers_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'archivist:properties',
              'area' => '',
              'desc_trans' => 'prop_archivistbymonth.hidecontainers_desc',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Archivist
 *
 * Copyright 2010-2011 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Archivist, a simple archive navigation system for MODx
 * Revolution.
 *
 * Archivist is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Archivist is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Archivist; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package archivist
 */
/**
 * Display an archived result filter list
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var Archivist $archivist
 *
 * @package archivist
 */
$archivist = $modx->getService(\'archivist\',\'Archivist\',$modx->getOption(\'archivist.core_path\',null,$modx->getOption(\'core_path\').\'components/archivist/\').\'model/archivist/\',$scriptProperties);
if (!($archivist instanceof Archivist)) return \'\';

/* setup default properties */
$tpl = $modx->getOption(\'tpl\',$scriptProperties,\'row\');
$parents = !empty($scriptProperties[\'parents\']) ? $scriptProperties[\'parents\'] : $modx->resource->get(\'id\');
$parents = explode(\',\',$parents);
$target = !empty($scriptProperties[\'target\']) ? $scriptProperties[\'target\'] : $modx->resource->get(\'id\');
$sortBy = $modx->getOption(\'sortBy\',$scriptProperties,\'publishedon\');
$sortDir = $modx->getOption(\'sortDir\',$scriptProperties,\'DESC\');
$groupByYear = $modx->getOption(\'groupByYear\',$scriptProperties,false);
$sortYear = $modx->getOption(\'sortYear\',$scriptProperties,\'DESC\');
$depth = $modx->getOption(\'depth\',$scriptProperties,10);
$where = $modx->getOption(\'where\',$scriptProperties,\'\');

$cls = $modx->getOption(\'cls\',$scriptProperties,\'arc-row\');
$altCls = $modx->getOption(\'altCls\',$scriptProperties,\'arc-row-alt\');
$lastCls = $modx->getOption(\'lastCls\',$scriptProperties,\'\');
$firstCls = $modx->getOption(\'firstCls\',$scriptProperties,\'\');

$filterPrefix = $modx->getOption(\'filterPrefix\',$scriptProperties,\'arc_\');
$useMonth = $modx->getOption(\'useMonth\',$scriptProperties,true);
$useDay = $modx->getOption(\'useDay\',$scriptProperties,false);
$dateFormat = !empty($scriptProperties[\'dateFormat\']) ? $scriptProperties[\'dateFormat\'] : \'\';
$limit = $modx->getOption(\'limit\',$scriptProperties,12);
$start = $modx->getOption(\'start\',$scriptProperties,0);
$hideContainers = $modx->getOption(\'hideContainers\',$scriptProperties,true);
$useFurls = $modx->getOption(\'useFurls\',$scriptProperties,true);
$persistGetParams = $modx->getOption(\'persistGetParams\',$scriptProperties,false);

/* handle existing GET params */
$extraParams = $modx->getOption(\'extraParams\',$scriptProperties,array());
$extraParams = $archivist->mergeGetParams($extraParams,$persistGetParams,$filterPrefix);

/* set locale for date processing */
if ($modx->getOption(\'setLocale\',$scriptProperties,true)) {
    $cultureKey = $modx->getOption(\'cultureKey\',null,\'en\');
    $locale = !empty($scriptProperties[\'locale\']) ? $scriptProperties[\'locale\'] : $cultureKey;
    if (!empty($locale)) {
        setlocale(LC_ALL,$locale);
    }
}

/* find children of parents */
$children = array();
foreach ($parents as $parent) {
    $pchildren = $modx->getChildIds($parent, $depth);
    if (!empty($pchildren)) $children = array_merge($children, $pchildren);
}
if (!empty($children)) $parents = array_merge($parents, $children);

/* get filter format */
$dateEmpty = empty($dateFormat);
$sqlDateFormat = \'%Y\';
if ($dateEmpty) $dateFormat = \'%Y\';
if ($useMonth) {
    if ($dateEmpty) $dateFormat = \'%B \'.$dateFormat;
    $sqlDateFormat = \'%b \'.$sqlDateFormat;
}
if ($useDay) {
    if ($dateEmpty) $dateFormat = \'%d \'.$dateFormat;
    $sqlDateFormat = \'%d \'.$sqlDateFormat;
}
/* build query */
$c = $modx->newQuery(\'modResource\');
$fields = $modx->getSelectColumns(\'modResource\',\'\',\'\',array(\'id\',$sortBy));
$c->select($fields);
$c->select(array(
    \'FROM_UNIXTIME(\'.$sortBy.\',"\'.$sqlDateFormat.\'") AS \'.$modx->escape(\'date\'),
    \'FROM_UNIXTIME(\'.$sortBy.\',"\'.$sqlDateFormat.\'") AS \'.$modx->escape(\'date\'),
    \'FROM_UNIXTIME(\'.$sortBy.\',"%D") AS \'.$modx->escape(\'day_formatted\'),
    \'COUNT(\'.$modx->escape(\'id\').\') AS \'.$modx->escape(\'count\'),
));
$c->where(array(
    \'parent:IN\' => $parents,
    \'published\' => true,
    \'deleted\' => false,
));
/* don\'t grab unpublished resources */
$c->where(array(
    \'published\' => true,
));
if ($hideContainers) {
    $c->where(array(
        \'isfolder\' => false,
    ));
}
if (!empty($where)) {
    $where = $modx->fromJSON($where);
    $c->where($where);
}
$exclude = $modx->getOption(\'exclude\',$scriptProperties,\'\');
if (!empty($exclude)) {
    $c->where(array(
        \'id:NOT IN\' => is_array($exclude) ? $exclude : explode(\',\',$exclude),
    ));
}
$c->sortby(\'FROM_UNIXTIME(`\'.$sortBy.\'`,"%Y") \'.$sortDir.\', FROM_UNIXTIME(`\'.$sortBy.\'`,"%m") \'.$sortDir.\', FROM_UNIXTIME(`\'.$sortBy.\'`,"%d") \'.$sortDir,\'\');
$c->groupby(\'FROM_UNIXTIME(`\'.$sortBy.\'`,"\'.$sqlDateFormat.\'")\');
/* if limiting to X records */
if (!empty($limit)) { $c->limit($limit,$start); }
$resources = $modx->getIterator(\'modResource\',$c);

/* iterate over resources */
$output = array();
$groupByYearOutput = array();
$idx = 0;
$count = count($resources);
/** @var modResource $resource */
foreach ($resources as $resource) {
    $resourceArray = $resource->toArray();

    $date = $resource->get($sortBy);
    $dateObj = strtotime($date);

    $resourceArray[\'date\'] = strftime($dateFormat,$dateObj);
    $resourceArray[\'month_name_abbr\'] = strftime(\'%b\',$dateObj);
    $resourceArray[\'month_name\'] = strftime(\'%B\',$dateObj);
    $resourceArray[\'month\'] = strftime(\'%m\',$dateObj);
    $resourceArray[\'year\'] = strftime(\'%Y\',$dateObj);
    $resourceArray[\'year_two_digit\'] = strftime(\'%y\',$dateObj);
    $resourceArray[\'day\'] = strftime(\'%d\',$dateObj);
    $resourceArray[\'weekday\'] = strftime(\'%A\',$dateObj);
    $resourceArray[\'weekday_abbr\'] = strftime(\'%a\',$dateObj);
    $resourceArray[\'weekday_idx\'] = strftime(\'%w\',$dateObj);

    /* css classes */
    $resourceArray[\'cls\'] = $cls;
    if ($idx % 2) { $resourceArray[\'cls\'] .= \' \'.$altCls; }
    if ($idx == 0 && !empty($firstCls)) { $resourceArray[\'cls\'] .= \' \'.$firstCls; }
    if ($idx+1 == $count && !empty($lastCls)) { $resourceArray[\'cls\'] .= \' \'.$lastCls; }

    /* setup GET params */
    $params = array();
    $params[$filterPrefix.\'year\'] = $resourceArray[\'year\'];

    /* if using month filter */
    if ($useMonth) {
        $params[$filterPrefix.\'month\'] = $resourceArray[\'month\'];
    }
    /* if using day filter (why you would ever is beyond me...) */
    if ($useDay) {
        $params[$filterPrefix.\'day\'] = $resourceArray[\'day\'];
        if (empty($scriptProperties[\'dateFormat\'])) {
            $resourceArray[\'date\'] = $resourceArray[\'month_name\'].\' \'.$resourceArray[\'day\'].\', \'.$resourceArray[\'year\'];
        }
    }

    if ($useFurls) {
        $params = implode(\'/\',$params);
        if (!empty($extraParams)) $params .= \'?\'.$extraParams;
        $resourceArray[\'url\'] = $modx->makeUrl($target).$params;
    } else {
        $params = http_build_query($params);
        if (!empty($extraParams)) $params .= \'&\'.$extraParams;
        $resourceArray[\'url\'] = $modx->makeUrl($target,\'\',$params);
    }

    if ($groupByYear) {
        $groupByYearOutput[$resourceArray[\'year\']][] = $resourceArray;
    } else {
        $output[] = $archivist->getChunk($tpl,$resourceArray);
    }

    $idx++;
}

if ($groupByYear) {
    $wrapperTpl = $modx->getOption(\'yearGroupTpl\',$scriptProperties,\'yeargroup\');
    $wrapperRowSeparator = $modx->getOption(\'yearGroupRowSeparator\',$scriptProperties,"\\n");
    if (strtolower($sortYear) === \'asc\') {
        ksort($groupByYearOutput);
    } else {
        krsort($groupByYearOutput);
    }
    foreach ($groupByYearOutput as $year => $row) {
        $wrapper[\'year\'] = $year;

        $params = array();
        $params[$filterPrefix.\'year\'] = $year;

        if ($useFurls) {
            $params = implode(\'/\',$params);
            if (!empty($extraParams)) $params .= \'?\'.$extraParams;
            $wrapper[\'url\'] = $modx->makeUrl($target).$params;
        } else {
            $params = http_build_query($params);
            if (!empty($extraParams)) $params .= \'&\'.$extraParams;
            $wrapper[\'url\'] = $modx->makeUrl($target,\'\',$params);
        }

        $wrapper[\'row\'] = array();
        foreach ($row as $month) {
            $wrapper[\'row\'][] = $archivist->getChunk($tpl,$month);
        }
        $wrapper[\'row\'] = implode($wrapperRowSeparator,$wrapper[\'row\']);
        $output[] = $archivist->getChunk($wrapperTpl,$wrapper);
    }
}

/* output or set to placeholder */
$outputSeparator = $modx->getOption(\'outputSeparator\',$scriptProperties,"\\n");
$output = implode($outputSeparator,$output);
$toPlaceholder = $modx->getOption(\'toPlaceholder\',$scriptProperties,false);
if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder,$output);
    return \'\';
}
return $output;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'getPage' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'getPage',
          'description' => '<b>1.2.4-pl</b> A generic wrapper snippet for returning paged results and navigation from snippets that return limitable collections.',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * @package getpage
 */
$output = \'\';

$properties =& $scriptProperties;
$properties[\'page\'] = (isset($_GET[$properties[\'pageVarKey\']]) && ($page = intval($_GET[$properties[\'pageVarKey\']]))) ? $page : null;
if ($properties[\'page\'] === null) {
    $properties[\'page\'] = (isset($_REQUEST[$properties[\'pageVarKey\']]) && ($page = intval($_REQUEST[$properties[\'pageVarKey\']]))) ? $page : 1;
}
$properties[\'limit\'] = (isset($_GET[\'limit\'])) ? intval($_GET[\'limit\']) : null;
if ($properties[\'limit\'] === null) {
    $properties[\'limit\'] = (isset($_REQUEST[\'limit\'])) ? intval($_REQUEST[\'limit\']) : intval($limit);
}
$properties[\'offset\'] = (!empty($properties[\'limit\']) && !empty($properties[\'page\'])) ? ($properties[\'limit\'] * ($properties[\'page\'] - 1)) : 0;
$properties[\'totalVar\'] = empty($totalVar) ? "total" : $totalVar;
$properties[$properties[\'totalVar\']] = !empty($properties[$properties[\'totalVar\']]) && $total = intval($properties[$properties[\'totalVar\']]) ? $total : 0;
$properties[\'pageOneLimit\'] = (!empty($pageOneLimit) && $pageOneLimit = intval($pageOneLimit)) ? $pageOneLimit : $properties[\'limit\'];
$properties[\'actualLimit\'] = $properties[\'limit\'];
$properties[\'pageLimit\'] = isset($pageLimit) && is_numeric($pageLimit) ? intval($pageLimit) : 5;
$properties[\'element\'] = empty($element) ? \'\' : $element;
$properties[\'elementClass\'] = empty($elementClass) ? \'modChunk\' : $elementClass;
$properties[\'pageNavVar\'] = empty($pageNavVar) ? \'page.nav\' : $pageNavVar;
$properties[\'pageNavTpl\'] = !isset($pageNavTpl) ? "<li[[+classes]]><a[[+classes]][[+title]] href=\\"[[+href]]\\">[[+pageNo]]</a></li>" : $pageNavTpl;
$properties[\'pageNavOuterTpl\'] = !isset($pageNavOuterTpl) ? "[[+first]][[+prev]][[+pages]][[+next]][[+last]]" : $pageNavOuterTpl;
$properties[\'pageActiveTpl\'] = !isset($pageActiveTpl) ? "<li[[+activeClasses:default=` class=\\"active\\"`]]><a[[+activeClasses:default=` class=\\"active\\"`]][[+title]] href=\\"[[+href]]\\">[[+pageNo]]</a></li>" : $pageActiveTpl;
$properties[\'pageFirstTpl\'] = !isset($pageFirstTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">First</a></li>" : $pageFirstTpl;
$properties[\'pageLastTpl\'] = !isset($pageLastTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">Last</a></li>" : $pageLastTpl;
$properties[\'pagePrevTpl\'] = !isset($pagePrevTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">&lt;&lt;</a></li>" : $pagePrevTpl;
$properties[\'pageNextTpl\'] = !isset($pageNextTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">&gt;&gt;</a></li>" : $pageNextTpl;
$properties[\'toPlaceholder\'] = !empty($toPlaceholder) ? $toPlaceholder : \'\';
$properties[\'cache\'] = isset($cache) ? (boolean) $cache : (boolean) $modx->getOption(\'cache_resource\', null, false);
if (empty($cache_key)) $properties[xPDO::OPT_CACHE_KEY] = $modx->getOption(\'cache_resource_key\', null, \'resource\');
if (empty($cache_handler)) $properties[xPDO::OPT_CACHE_HANDLER] = $modx->getOption(\'cache_resource_handler\', null, \'xPDOFileCache\');
if (empty($cache_expires)) $properties[xPDO::OPT_CACHE_EXPIRES] = (integer) $modx->getOption(\'cache_resource_expires\', null, 0);

if ($properties[\'page\'] == 1 && $properties[\'pageOneLimit\'] !== $properties[\'actualLimit\']) {
    $properties[\'limit\'] = $properties[\'pageOneLimit\'];
}

if ($properties[\'cache\']) {
    $properties[\'cachePageKey\'] = $modx->resource->getCacheKey() . \'/\' . $properties[\'page\'] . \'/\' . md5(http_build_query($modx->request->getParameters()) . http_build_query($scriptProperties));
    $properties[\'cacheOptions\'] = array(
        xPDO::OPT_CACHE_KEY => $properties[xPDO::OPT_CACHE_KEY],
        xPDO::OPT_CACHE_HANDLER => $properties[xPDO::OPT_CACHE_HANDLER],
        xPDO::OPT_CACHE_EXPIRES => $properties[xPDO::OPT_CACHE_EXPIRES],
    );
}
$cached = false;
if ($properties[\'cache\']) {
    if ($modx->getCacheManager()) {
        $cached = $modx->cacheManager->get($properties[\'cachePageKey\'], $properties[\'cacheOptions\']);
    }
}
if (empty($cached) || !isset($cached[\'properties\']) || !isset($cached[\'output\'])) {
    $elementObj = $modx->getObject($properties[\'elementClass\'], array(\'name\' => $properties[\'element\']));
    if ($elementObj) {
        $elementObj->setCacheable(false);
        if (!empty($properties[\'toPlaceholder\'])) {
            $elementObj->process($properties);
            $output = $modx->getPlaceholder($properties[\'toPlaceholder\']);
        } else {
            $output = $elementObj->process($properties);
        }
    }

    include_once $modx->getOption(\'getpage.core_path\',$properties,$modx->getOption(\'core_path\', $properties, MODX_CORE_PATH) . \'components/getpage/\').\'include.getpage.php\';

    $qs = $modx->request->getParameters();
    $properties[\'qs\'] =& $qs;

    $totalSet = $modx->getPlaceholder($properties[\'totalVar\']);
    $properties[$properties[\'totalVar\']] = (($totalSet = intval($totalSet)) ? $totalSet : $properties[$properties[\'totalVar\']]);
    if (!empty($properties[$properties[\'totalVar\']]) && !empty($properties[\'actualLimit\'])) {
        if ($properties[\'pageOneLimit\'] !== $properties[\'actualLimit\']) {
            $adjustedTotal = $properties[$properties[\'totalVar\']] - $properties[\'pageOneLimit\'];
            $properties[\'pageCount\'] = $adjustedTotal > 0 ? ceil($adjustedTotal / $properties[\'actualLimit\']) + 1 : 1;
        } else {
            $properties[\'pageCount\'] = ceil($properties[$properties[\'totalVar\']] / $properties[\'actualLimit\']);
        }
    } else {
        $properties[\'pageCount\'] = 1;
    }
    if (empty($properties[$properties[\'totalVar\']]) || empty($properties[\'actualLimit\']) || $properties[$properties[\'totalVar\']] <= $properties[\'actualLimit\'] || ($properties[\'page\'] == 1 && $properties[$properties[\'totalVar\']] <= $properties[\'pageOneLimit\'])) {
        $properties[\'page\'] = 1;
    } else {
        $pageNav = getpage_buildControls($modx, $properties);
        $properties[$properties[\'pageNavVar\']] = $modx->newObject(\'modChunk\')->process(array_merge($properties, $pageNav), $properties[\'pageNavOuterTpl\']);
        if ($properties[\'page\'] > 1) {
            $qs[$properties[\'pageVarKey\']] = $properties[\'page\'];
        }
    }

    $properties[\'firstItem\'] = $properties[\'offset\'] + 1;
    $properties[\'lastItem\'] = ($properties[\'offset\'] + $properties[\'limit\']) < $totalSet ? ($properties[\'offset\'] + $properties[\'limit\']) : $totalSet;

    $properties[\'pageUrl\'] = $modx->makeUrl($modx->resource->get(\'id\'), \'\', $qs);
    if ($properties[\'cache\'] && $modx->getCacheManager()) {
        $cached = array(\'properties\' => $properties, \'output\' => $output);
        $modx->cacheManager->set($properties[\'cachePageKey\'], $cached, $properties[xPDO::OPT_CACHE_EXPIRES], $properties[\'cacheOptions\']);
    }
} else {
    $properties = $cached[\'properties\'];
    $output = $cached[\'output\'];
}
$modx->setPlaceholders($properties, $properties[\'namespace\']);
if (!empty($properties[\'toPlaceholder\'])) {
    $modx->setPlaceholder($properties[\'toPlaceholder\'], $output);
    $output = \'\';
}

return $output;',
          'locked' => false,
          'properties' => 
          array (
            'namespace' => 
            array (
              'name' => 'namespace',
              'desc' => 'An execution namespace that serves as a prefix for placeholders set by a specific instance of the getPage snippet.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'An execution namespace that serves as a prefix for placeholders set by a specific instance of the getPage snippet.',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'The result limit per page; can be overridden in the $_REQUEST.',
              'type' => 'textfield',
              'options' => '',
              'value' => '10',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The result limit per page; can be overridden in the $_REQUEST.',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'The offset, or record position to start at within the collection for rendering results for the current page; should be calculated based on page variable set in pageVarKey.',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The offset, or record position to start at within the collection for rendering results for the current page; should be calculated based on page variable set in pageVarKey.',
              'area_trans' => '',
            ),
            'page' => 
            array (
              'name' => 'page',
              'desc' => 'The page to display; this is determined based on the value indicated by the page variable set in pageVarKey, typically in the $_REQUEST.',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The page to display; this is determined based on the value indicated by the page variable set in pageVarKey, typically in the $_REQUEST.',
              'area_trans' => '',
            ),
            'pageVarKey' => 
            array (
              'name' => 'pageVarKey',
              'desc' => 'The key of a property that indicates the current page.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'page',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The key of a property that indicates the current page.',
              'area_trans' => '',
            ),
            'totalVar' => 
            array (
              'name' => 'totalVar',
              'desc' => 'The key of a placeholder that must contain the total records in the limitable collection being paged.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'total',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The key of a placeholder that must contain the total records in the limitable collection being paged.',
              'area_trans' => '',
            ),
            'pageLimit' => 
            array (
              'name' => 'pageLimit',
              'desc' => 'The maximum number of pages to display when rendering paging controls',
              'type' => 'textfield',
              'options' => '',
              'value' => '5',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The maximum number of pages to display when rendering paging controls',
              'area_trans' => '',
            ),
            'elementClass' => 
            array (
              'name' => 'elementClass',
              'desc' => 'The class of element that will be called by the getPage snippet instance.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'modSnippet',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The class of element that will be called by the getPage snippet instance.',
              'area_trans' => '',
            ),
            'pageNavVar' => 
            array (
              'name' => 'pageNavVar',
              'desc' => 'The key of a placeholder to be set with the paging navigation controls.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'page.nav',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The key of a placeholder to be set with the paging navigation controls.',
              'area_trans' => '',
            ),
            'pageNavTpl' => 
            array (
              'name' => 'pageNavTpl',
              'desc' => 'Content representing a single page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing a single page navigation control.',
              'area_trans' => '',
            ),
            'pageNavOuterTpl' => 
            array (
              'name' => 'pageNavOuterTpl',
              'desc' => 'Content representing the layout of the page navigation controls.',
              'type' => 'textfield',
              'options' => '',
              'value' => '[[+first]][[+prev]][[+pages]][[+next]][[+last]]',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the layout of the page navigation controls.',
              'area_trans' => '',
            ),
            'pageActiveTpl' => 
            array (
              'name' => 'pageActiveTpl',
              'desc' => 'Content representing the current page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li[[+activeClasses]]><a[[+activeClasses:default=` class="active"`]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the current page navigation control.',
              'area_trans' => '',
            ),
            'pageFirstTpl' => 
            array (
              'name' => 'pageFirstTpl',
              'desc' => 'Content representing the first page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">First</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the first page navigation control.',
              'area_trans' => '',
            ),
            'pageLastTpl' => 
            array (
              'name' => 'pageLastTpl',
              'desc' => 'Content representing the last page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Last</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the last page navigation control.',
              'area_trans' => '',
            ),
            'pagePrevTpl' => 
            array (
              'name' => 'pagePrevTpl',
              'desc' => 'Content representing the previous page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the previous page navigation control.',
              'area_trans' => '',
            ),
            'pageNextTpl' => 
            array (
              'name' => 'pageNextTpl',
              'desc' => 'Content representing the next page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the next page navigation control.',
              'area_trans' => '',
            ),
            'cache' => 
            array (
              'name' => 'cache',
              'desc' => 'If true, unique page requests will be cached according to addition cache properties.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'If true, unique page requests will be cached according to addition cache properties.',
              'area_trans' => '',
            ),
            'cache_key' => 
            array (
              'name' => 'cache_key',
              'desc' => 'The key of the cache provider to use; leave empty to use the cache_resource_key cache partition (default is "resource").',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The key of the cache provider to use; leave empty to use the cache_resource_key cache partition (default is "resource").',
              'area_trans' => '',
            ),
            'cache_handler' => 
            array (
              'name' => 'cache_handler',
              'desc' => 'The cache provider implementation to use; leave empty unless you are caching to a custom cache_key.',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The cache provider implementation to use; leave empty unless you are caching to a custom cache_key.',
              'area_trans' => '',
            ),
            'cache_expires' => 
            array (
              'name' => 'cache_expires',
              'desc' => 'The number of seconds before the cached pages expire and must be regenerated; leave empty to use the cache provider option for cache_expires.',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The number of seconds before the cached pages expire and must be regenerated; leave empty to use the cache provider option for cache_expires.',
              'area_trans' => '',
            ),
            'pageNavScheme' => 
            array (
              'name' => 'pageNavScheme',
              'desc' => 'Optionally specify a scheme for use when generating page navigation links; will use link_tag_scheme if empty or not specified (default is empty).',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Optionally specify a scheme for use when generating page navigation links; will use link_tag_scheme if empty or not specified (default is empty).',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * @package getpage
 */
$output = \'\';

$properties =& $scriptProperties;
$properties[\'page\'] = (isset($_GET[$properties[\'pageVarKey\']]) && ($page = intval($_GET[$properties[\'pageVarKey\']]))) ? $page : null;
if ($properties[\'page\'] === null) {
    $properties[\'page\'] = (isset($_REQUEST[$properties[\'pageVarKey\']]) && ($page = intval($_REQUEST[$properties[\'pageVarKey\']]))) ? $page : 1;
}
$properties[\'limit\'] = (isset($_GET[\'limit\'])) ? intval($_GET[\'limit\']) : null;
if ($properties[\'limit\'] === null) {
    $properties[\'limit\'] = (isset($_REQUEST[\'limit\'])) ? intval($_REQUEST[\'limit\']) : intval($limit);
}
$properties[\'offset\'] = (!empty($properties[\'limit\']) && !empty($properties[\'page\'])) ? ($properties[\'limit\'] * ($properties[\'page\'] - 1)) : 0;
$properties[\'totalVar\'] = empty($totalVar) ? "total" : $totalVar;
$properties[$properties[\'totalVar\']] = !empty($properties[$properties[\'totalVar\']]) && $total = intval($properties[$properties[\'totalVar\']]) ? $total : 0;
$properties[\'pageOneLimit\'] = (!empty($pageOneLimit) && $pageOneLimit = intval($pageOneLimit)) ? $pageOneLimit : $properties[\'limit\'];
$properties[\'actualLimit\'] = $properties[\'limit\'];
$properties[\'pageLimit\'] = isset($pageLimit) && is_numeric($pageLimit) ? intval($pageLimit) : 5;
$properties[\'element\'] = empty($element) ? \'\' : $element;
$properties[\'elementClass\'] = empty($elementClass) ? \'modChunk\' : $elementClass;
$properties[\'pageNavVar\'] = empty($pageNavVar) ? \'page.nav\' : $pageNavVar;
$properties[\'pageNavTpl\'] = !isset($pageNavTpl) ? "<li[[+classes]]><a[[+classes]][[+title]] href=\\"[[+href]]\\">[[+pageNo]]</a></li>" : $pageNavTpl;
$properties[\'pageNavOuterTpl\'] = !isset($pageNavOuterTpl) ? "[[+first]][[+prev]][[+pages]][[+next]][[+last]]" : $pageNavOuterTpl;
$properties[\'pageActiveTpl\'] = !isset($pageActiveTpl) ? "<li[[+activeClasses:default=` class=\\"active\\"`]]><a[[+activeClasses:default=` class=\\"active\\"`]][[+title]] href=\\"[[+href]]\\">[[+pageNo]]</a></li>" : $pageActiveTpl;
$properties[\'pageFirstTpl\'] = !isset($pageFirstTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">First</a></li>" : $pageFirstTpl;
$properties[\'pageLastTpl\'] = !isset($pageLastTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">Last</a></li>" : $pageLastTpl;
$properties[\'pagePrevTpl\'] = !isset($pagePrevTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">&lt;&lt;</a></li>" : $pagePrevTpl;
$properties[\'pageNextTpl\'] = !isset($pageNextTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">&gt;&gt;</a></li>" : $pageNextTpl;
$properties[\'toPlaceholder\'] = !empty($toPlaceholder) ? $toPlaceholder : \'\';
$properties[\'cache\'] = isset($cache) ? (boolean) $cache : (boolean) $modx->getOption(\'cache_resource\', null, false);
if (empty($cache_key)) $properties[xPDO::OPT_CACHE_KEY] = $modx->getOption(\'cache_resource_key\', null, \'resource\');
if (empty($cache_handler)) $properties[xPDO::OPT_CACHE_HANDLER] = $modx->getOption(\'cache_resource_handler\', null, \'xPDOFileCache\');
if (empty($cache_expires)) $properties[xPDO::OPT_CACHE_EXPIRES] = (integer) $modx->getOption(\'cache_resource_expires\', null, 0);

if ($properties[\'page\'] == 1 && $properties[\'pageOneLimit\'] !== $properties[\'actualLimit\']) {
    $properties[\'limit\'] = $properties[\'pageOneLimit\'];
}

if ($properties[\'cache\']) {
    $properties[\'cachePageKey\'] = $modx->resource->getCacheKey() . \'/\' . $properties[\'page\'] . \'/\' . md5(http_build_query($modx->request->getParameters()) . http_build_query($scriptProperties));
    $properties[\'cacheOptions\'] = array(
        xPDO::OPT_CACHE_KEY => $properties[xPDO::OPT_CACHE_KEY],
        xPDO::OPT_CACHE_HANDLER => $properties[xPDO::OPT_CACHE_HANDLER],
        xPDO::OPT_CACHE_EXPIRES => $properties[xPDO::OPT_CACHE_EXPIRES],
    );
}
$cached = false;
if ($properties[\'cache\']) {
    if ($modx->getCacheManager()) {
        $cached = $modx->cacheManager->get($properties[\'cachePageKey\'], $properties[\'cacheOptions\']);
    }
}
if (empty($cached) || !isset($cached[\'properties\']) || !isset($cached[\'output\'])) {
    $elementObj = $modx->getObject($properties[\'elementClass\'], array(\'name\' => $properties[\'element\']));
    if ($elementObj) {
        $elementObj->setCacheable(false);
        if (!empty($properties[\'toPlaceholder\'])) {
            $elementObj->process($properties);
            $output = $modx->getPlaceholder($properties[\'toPlaceholder\']);
        } else {
            $output = $elementObj->process($properties);
        }
    }

    include_once $modx->getOption(\'getpage.core_path\',$properties,$modx->getOption(\'core_path\', $properties, MODX_CORE_PATH) . \'components/getpage/\').\'include.getpage.php\';

    $qs = $modx->request->getParameters();
    $properties[\'qs\'] =& $qs;

    $totalSet = $modx->getPlaceholder($properties[\'totalVar\']);
    $properties[$properties[\'totalVar\']] = (($totalSet = intval($totalSet)) ? $totalSet : $properties[$properties[\'totalVar\']]);
    if (!empty($properties[$properties[\'totalVar\']]) && !empty($properties[\'actualLimit\'])) {
        if ($properties[\'pageOneLimit\'] !== $properties[\'actualLimit\']) {
            $adjustedTotal = $properties[$properties[\'totalVar\']] - $properties[\'pageOneLimit\'];
            $properties[\'pageCount\'] = $adjustedTotal > 0 ? ceil($adjustedTotal / $properties[\'actualLimit\']) + 1 : 1;
        } else {
            $properties[\'pageCount\'] = ceil($properties[$properties[\'totalVar\']] / $properties[\'actualLimit\']);
        }
    } else {
        $properties[\'pageCount\'] = 1;
    }
    if (empty($properties[$properties[\'totalVar\']]) || empty($properties[\'actualLimit\']) || $properties[$properties[\'totalVar\']] <= $properties[\'actualLimit\'] || ($properties[\'page\'] == 1 && $properties[$properties[\'totalVar\']] <= $properties[\'pageOneLimit\'])) {
        $properties[\'page\'] = 1;
    } else {
        $pageNav = getpage_buildControls($modx, $properties);
        $properties[$properties[\'pageNavVar\']] = $modx->newObject(\'modChunk\')->process(array_merge($properties, $pageNav), $properties[\'pageNavOuterTpl\']);
        if ($properties[\'page\'] > 1) {
            $qs[$properties[\'pageVarKey\']] = $properties[\'page\'];
        }
    }

    $properties[\'firstItem\'] = $properties[\'offset\'] + 1;
    $properties[\'lastItem\'] = ($properties[\'offset\'] + $properties[\'limit\']) < $totalSet ? ($properties[\'offset\'] + $properties[\'limit\']) : $totalSet;

    $properties[\'pageUrl\'] = $modx->makeUrl($modx->resource->get(\'id\'), \'\', $qs);
    if ($properties[\'cache\'] && $modx->getCacheManager()) {
        $cached = array(\'properties\' => $properties, \'output\' => $output);
        $modx->cacheManager->set($properties[\'cachePageKey\'], $cached, $properties[xPDO::OPT_CACHE_EXPIRES], $properties[\'cacheOptions\']);
    }
} else {
    $properties = $cached[\'properties\'];
    $output = $cached[\'output\'];
}
$modx->setPlaceholders($properties, $properties[\'namespace\']);
if (!empty($properties[\'toPlaceholder\'])) {
    $modx->setPlaceholder($properties[\'toPlaceholder\'], $output);
    $output = \'\';
}

return $output;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'tolinks' => 
      array (
        'fields' => 
        array (
          'id' => 11,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'tolinks',
          'description' => 'Builds links from tags.',
          'editor_type' => 0,
          'category' => 3,
          'cache_type' => 0,
          'snippet' => '/**
 * tagLister
 *
 * Copyright 2010 by Shaun McCormick <shaun@modxcms.com>
 *
 * This file is part of tagLister, a simple tag listing snippet for MODx
 * Revolution.
 *
 * tagLister is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * tagLister is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * tagLister; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package taglister
 */
/**
 * tolinks snippet. Creates links out of tags.
 *
 * @var modX $modx
 * @var tagLister $tagLister
 * @var array $scriptProperties
 * 
 * @package taglister
 */
$tagLister = $modx->getService(\'taglister\',\'TagLister\',$modx->getOption(\'taglister.core_path\',null,$modx->getOption(\'core_path\').\'components/taglister/\').\'model/taglister/\',$scriptProperties);
if (!($tagLister instanceof TagLister)) return \'\';

/* setup default properties */
$inputDelim = $modx->getOption(\'inputDelim\',$scriptProperties,\',\');
$outputDelim = $modx->getOption(\'outputDelim\',$scriptProperties,\', \');
$tagRequestParam = $modx->getOption(\'tagRequestParam\',$scriptProperties,\'tag\');
$tagKeyVar = $modx->getOption(\'tagKeyVar\',$scriptProperties,\'key\');
$tagKey = $modx->getOption(\'tagKey\',$scriptProperties,\'tags\');
$target = !empty($scriptProperties[\'target\']) ? $scriptProperties[\'target\'] : $modx->resource->get(\'id\');
$tpl = $modx->getOption(\'tpl\',$scriptProperties,\'link\');
$cls = $modx->getOption(\'cls\',$scriptProperties,\'tl-tag\');
$useTagsFurl = $modx->getOption(\'useTagsFurl\',$scriptProperties,false);

/* get items */
$items = $modx->getOption(\'items\',$scriptProperties,\'\');
if (empty($items)) return \'\';
$items = explode($inputDelim,$items);

/* if extra params, set em */
$extraParams = $modx->getOption(\'extraParams\',$scriptProperties,\'\');
if (!empty($extraParams)) {
    $extraParams = trim(trim(trim($extraParams,\'?\'),\'&\'),\'&amp;\');
    $eps= explode(\',\',$extraParams);
    $extraParams = array();
    foreach ($eps as $ep) {
        $ep = explode(\'=\',$ep);
        if (!empty($ep[1])) {
            $extraParams[$ep[0]] = $ep[1];
        }
    }
}

/* iterate */
$tags = array();
foreach ($items as $item) {
    $itemArray = array();
    $itemArray[\'item\'] = trim($item);
    $params = array();
    if (empty($useTagsFurl)) {
        $params = array(
            $tagRequestParam => $itemArray[\'item\'],
            $tagKeyVar => $tagKey,
        );
    }

    if (!empty($extraParams)) {
        $params = array_merge($extraParams,$params);
    }
    $itemArray[\'url\'] = $modx->makeUrl($target,\'\',$params);
    if (!empty($useTagsFurl)) {
         $itemArray[\'url\'] = rtrim($itemArray[\'url\'],\'/\').\'/\'.$tagKey.\'/\'.$itemArray[\'item\'];
    }
    $itemArray[\'url\'] = str_replace(\' \',\'+\',$itemArray[\'url\']);
    $itemArray[\'cls\'] = $cls;
    $tags[] = $tagLister->getChunk($tpl,$itemArray);
}

/* output */
$toPlaceholder = $modx->getOption(\'toPlaceholder\',$scriptProperties,false);
$output = trim(implode($outputDelim,$tags),$outputDelim);
if ($toPlaceholder) {
    $modx->setPlaceholder($toPlaceholder,$output);
    return \'\';
}
return $output;',
          'locked' => false,
          'properties' => 
          array (
            'items' => 
            array (
              'name' => 'items',
              'desc' => 'prop_tolinks.items_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The items to turn into links.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'prop_tolinks.tpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'link',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Name of a Chunk that will be used for each result.',
              'area_trans' => '',
            ),
            'target' => 
            array (
              'name' => 'target',
              'desc' => 'prop_tolinks.target_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The ID of the Resource that links will point to. Defaults to the current Resource.',
              'area_trans' => '',
            ),
            'inputDelim' => 
            array (
              'name' => 'inputDelim',
              'desc' => 'prop_tolinks.inputdelim_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => ',',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The delimiter that is used on the items property. Defaults to a comma.',
              'area_trans' => '',
            ),
            'outputDelim' => 
            array (
              'name' => 'outputDelim',
              'desc' => 'prop_tolinks.outputdelim_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => ', ',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The delimiter that separates the links that are outputted. Defaults to a comma.',
              'area_trans' => '',
            ),
            'tagRequestParam' => 
            array (
              'name' => 'tagRequestParam',
              'desc' => 'prop_tolinks.tagrequestparam_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'tag',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The REQUEST var key that will be used in generating the links.',
              'area_trans' => '',
            ),
            'tagKeyVar' => 
            array (
              'name' => 'tagKeyVar',
              'desc' => 'prop_tolinks.tagkeyvar_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'key',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The REQUEST var of the tv name. Used in the links generated for each tag result',
              'area_trans' => '',
            ),
            'tagKey' => 
            array (
              'name' => 'tagKey',
              'desc' => 'prop_tolinks.tagkey_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'tags',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The REQUEST var of the tag value. Used in the links generated for each tag result.',
              'area_trans' => '',
            ),
            'cls' => 
            array (
              'name' => 'cls',
              'desc' => 'prop_tolinks.cls_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'tl-tag',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Name of a CSS class to add to each result.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'prop_tolinks.toplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'If set, will set the output of this snippet to this placeholder rather than output it.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * tagLister
 *
 * Copyright 2010 by Shaun McCormick <shaun@modxcms.com>
 *
 * This file is part of tagLister, a simple tag listing snippet for MODx
 * Revolution.
 *
 * tagLister is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * tagLister is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * tagLister; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package taglister
 */
/**
 * tolinks snippet. Creates links out of tags.
 *
 * @var modX $modx
 * @var tagLister $tagLister
 * @var array $scriptProperties
 * 
 * @package taglister
 */
$tagLister = $modx->getService(\'taglister\',\'TagLister\',$modx->getOption(\'taglister.core_path\',null,$modx->getOption(\'core_path\').\'components/taglister/\').\'model/taglister/\',$scriptProperties);
if (!($tagLister instanceof TagLister)) return \'\';

/* setup default properties */
$inputDelim = $modx->getOption(\'inputDelim\',$scriptProperties,\',\');
$outputDelim = $modx->getOption(\'outputDelim\',$scriptProperties,\', \');
$tagRequestParam = $modx->getOption(\'tagRequestParam\',$scriptProperties,\'tag\');
$tagKeyVar = $modx->getOption(\'tagKeyVar\',$scriptProperties,\'key\');
$tagKey = $modx->getOption(\'tagKey\',$scriptProperties,\'tags\');
$target = !empty($scriptProperties[\'target\']) ? $scriptProperties[\'target\'] : $modx->resource->get(\'id\');
$tpl = $modx->getOption(\'tpl\',$scriptProperties,\'link\');
$cls = $modx->getOption(\'cls\',$scriptProperties,\'tl-tag\');
$useTagsFurl = $modx->getOption(\'useTagsFurl\',$scriptProperties,false);

/* get items */
$items = $modx->getOption(\'items\',$scriptProperties,\'\');
if (empty($items)) return \'\';
$items = explode($inputDelim,$items);

/* if extra params, set em */
$extraParams = $modx->getOption(\'extraParams\',$scriptProperties,\'\');
if (!empty($extraParams)) {
    $extraParams = trim(trim(trim($extraParams,\'?\'),\'&\'),\'&amp;\');
    $eps= explode(\',\',$extraParams);
    $extraParams = array();
    foreach ($eps as $ep) {
        $ep = explode(\'=\',$ep);
        if (!empty($ep[1])) {
            $extraParams[$ep[0]] = $ep[1];
        }
    }
}

/* iterate */
$tags = array();
foreach ($items as $item) {
    $itemArray = array();
    $itemArray[\'item\'] = trim($item);
    $params = array();
    if (empty($useTagsFurl)) {
        $params = array(
            $tagRequestParam => $itemArray[\'item\'],
            $tagKeyVar => $tagKey,
        );
    }

    if (!empty($extraParams)) {
        $params = array_merge($extraParams,$params);
    }
    $itemArray[\'url\'] = $modx->makeUrl($target,\'\',$params);
    if (!empty($useTagsFurl)) {
         $itemArray[\'url\'] = rtrim($itemArray[\'url\'],\'/\').\'/\'.$tagKey.\'/\'.$itemArray[\'item\'];
    }
    $itemArray[\'url\'] = str_replace(\' \',\'+\',$itemArray[\'url\']);
    $itemArray[\'cls\'] = $cls;
    $tags[] = $tagLister->getChunk($tpl,$itemArray);
}

/* output */
$toPlaceholder = $modx->getOption(\'toPlaceholder\',$scriptProperties,false);
$output = trim(implode($outputDelim,$tags),$outputDelim);
if ($toPlaceholder) {
    $modx->setPlaceholder($toPlaceholder,$output);
    return \'\';
}
return $output;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'QuipCount' => 
      array (
        'fields' => 
        array (
          'id' => 6,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'QuipCount',
          'description' => 'An assistance snippet for getting thread/user comment counts.',
          'editor_type' => 0,
          'category' => 2,
          'cache_type' => 0,
          'snippet' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * QuipCount
 *
 * Gets the total # of comments in a thread or by a user.
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var Quip $quip
 *
 * @name QuipCount
 * @author Shaun McCormick <shaun@modx.com>
 * @package quip
 */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return \'\';
$quip->initialize($modx->context->get(\'key\'));
$controller = $quip->loadController(\'ThreadCount\');
$output = $controller->run($scriptProperties);
return $output;',
          'locked' => false,
          'properties' => 
          array (
            'type' => 
            array (
              'name' => 'type',
              'desc' => 'quip.prop_count_type_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'quip.thread',
                  'value' => 'thread',
                  'name' => 'Тема',
                ),
                1 => 
                array (
                  'text' => 'quip.user',
                  'value' => 'user',
                  'name' => 'Пользователь',
                ),
                2 => 
                array (
                  'text' => 'quip.family',
                  'value' => 'family',
                  'name' => 'Family',
                ),
              ),
              'value' => 'thread',
              'lexicon' => 'quip:properties',
              'area' => '',
              'desc_trans' => 'If set to Thread, will count the # of comments in a thread. If set to User, will grab # of total comments by a User.',
              'area_trans' => '',
            ),
            'thread' => 
            array (
              'name' => 'thread',
              'desc' => 'quip.prop_count_thread_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'quip:properties',
              'area' => '',
              'desc_trans' => 'The thread ID to pull from. Only if type is set to Thread.',
              'area_trans' => '',
            ),
            'user' => 
            array (
              'name' => 'user',
              'desc' => 'quip.prop_count_user_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'quip:properties',
              'area' => '',
              'desc_trans' => 'The User ID or username to pull from. Only if type is set to User.',
              'area_trans' => '',
            ),
            'family' => 
            array (
              'name' => 'family',
              'desc' => 'quip.prop_count_family_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'quip:properties',
              'area' => '',
              'desc_trans' => 'The family of threads to pull from. Only if type contains `family`.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'quip.prop_count_toplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'quip:properties',
              'area' => '',
              'desc_trans' => 'If set, will output the content to the placeholder specified in this property, rather than outputting the content directly.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * QuipCount
 *
 * Gets the total # of comments in a thread or by a user.
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var Quip $quip
 *
 * @name QuipCount
 * @author Shaun McCormick <shaun@modx.com>
 * @package quip
 */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return \'\';
$quip->initialize($modx->context->get(\'key\'));
$controller = $quip->loadController(\'ThreadCount\');
$output = $controller->run($scriptProperties);
return $output;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'QuipLatestComments' => 
      array (
        'fields' => 
        array (
          'id' => 7,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'QuipLatestComments',
          'description' => 'An assistance snippet for getting the latest comments for the whole site or a thread or user.',
          'editor_type' => 0,
          'category' => 2,
          'cache_type' => 0,
          'snippet' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * QuipLatestComments
 *
 * Gets latest comments in a thread or by a user.
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var Quip $quip
 * 
 * @name QuipLatestComments
 * @author Shaun McCormick <shaun@modx.com>
 * @package quip
 */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return \'\';
$quip->initialize($modx->context->get(\'key\'));
$controller = $quip->loadController(\'LatestComments\');
$output = $controller->run($scriptProperties);
return $output;',
          'locked' => false,
          'properties' => 
          array (
            'type' => 
            array (
              'name' => 'type',
              'desc' => 'quip.prop_late_type_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'all',
                  'text' => 'quip.all',
                  'name' => 'Все',
                ),
                1 => 
                array (
                  'value' => 'thread',
                  'text' => 'quip.thread',
                  'name' => 'Тема',
                ),
                2 => 
                array (
                  'value' => 'family',
                  'text' => 'quip.family',
                  'name' => 'Family',
                ),
                3 => 
                array (
                  'value' => 'user',
                  'text' => 'quip.user',
                  'name' => 'Пользователь',
                ),
              ),
              'value' => 'all',
              'lexicon' => 'quip:properties',
              'area' => '',
              'desc_trans' => 'Whether to grab a list from all comments, per thread, per family of threads, or per user.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'quip.prop_late_tpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'quipLatestComment',
              'lexicon' => 'quip:properties',
              'area' => '',
              'desc_trans' => 'The chunk tpl to use for each row.',
              'area_trans' => '',
            ),
            'thread' => 
            array (
              'name' => 'thread',
              'desc' => 'quip.prop_late_thread_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'quip:properties',
              'area' => '',
              'desc_trans' => 'The thread ID to pull from. Only if type is set to Thread.',
              'area_trans' => '',
            ),
            'user' => 
            array (
              'name' => 'user',
              'desc' => 'quip.prop_late_user_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'quip:properties',
              'area' => '',
              'desc_trans' => 'The User ID or username to pull from. Only if type is set to User.',
              'area_trans' => '',
            ),
            'family' => 
            array (
              'name' => 'family',
              'desc' => 'quip.prop_late_family_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'quip:properties',
              'area' => '',
              'desc_trans' => 'The family of threads to pull from. Only if type is set to Family.',
              'area_trans' => '',
            ),
            'stripTags' => 
            array (
              'name' => 'stripTags',
              'desc' => 'quip.prop_late_striptags_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'quip:properties',
              'area' => '',
              'desc_trans' => 'If set to true, tags will be stripped from the body text.',
              'area_trans' => '',
            ),
            'dateFormat' => 
            array (
              'name' => 'dateFormat',
              'desc' => 'quip.prop_late_dateformat_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '%b %d, %Y at %I:%M %p',
              'lexicon' => 'quip:properties',
              'area' => '',
              'desc_trans' => 'The format of the dates displayed for a comment.',
              'area_trans' => '',
            ),
            'bodyLimit' => 
            array (
              'name' => 'bodyLimit',
              'desc' => 'quip.prop_late_bodylimit_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 30,
              'lexicon' => 'quip:properties',
              'area' => '',
              'desc_trans' => 'The number of characters to limit the body field in the comment display to before adding an ellipsis.',
              'area_trans' => '',
            ),
            'rowCss' => 
            array (
              'name' => 'rowCss',
              'desc' => 'quip.prop_late_rowcss_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'quip-latest-comment',
              'lexicon' => 'quip:properties',
              'area' => '',
              'desc_trans' => 'The CSS class to put on each row.',
              'area_trans' => '',
            ),
            'altRowCss' => 
            array (
              'name' => 'altRowCss',
              'desc' => 'quip.prop_late_altrowcss_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'quip-latest-comment-alt',
              'lexicon' => 'quip:properties',
              'area' => '',
              'desc_trans' => 'The CSS class to put on alternating comments.',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'quip.prop_late_limit_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 5,
              'lexicon' => 'quip:properties',
              'area' => '',
              'desc_trans' => 'The number of comments to pull.',
              'area_trans' => '',
            ),
            'start' => 
            array (
              'name' => 'start',
              'desc' => 'quip.prop_late_start_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 0,
              'lexicon' => 'quip:properties',
              'area' => '',
              'desc_trans' => 'The start index of comments to pull from.',
              'area_trans' => '',
            ),
            'sortBy' => 
            array (
              'name' => 'sortBy',
              'desc' => 'quip.prop_late_sortby_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'createdon',
              'lexicon' => 'quip:properties',
              'area' => '',
              'desc_trans' => 'The field to sort by.',
              'area_trans' => '',
            ),
            'sortByAlias' => 
            array (
              'name' => 'sortByAlias',
              'desc' => 'quip.prop_late_sortbyalias_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'quip.comment',
                  'value' => 'quipComment',
                  'name' => 'Комментарий',
                ),
                1 => 
                array (
                  'text' => 'quip.author',
                  'value' => 'Author',
                  'name' => 'Автор',
                ),
              ),
              'value' => 'quipComment',
              'lexicon' => 'quip:properties',
              'area' => '',
              'desc_trans' => 'The alias of classes to use with sort by.',
              'area_trans' => '',
            ),
            'sortDir' => 
            array (
              'name' => 'sortDir',
              'desc' => 'quip.prop_late_sortdir_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'quip.ascending',
                  'value' => 'ASC',
                  'name' => 'По возрастанию',
                ),
                1 => 
                array (
                  'text' => 'quip.descending',
                  'value' => 'DESC',
                  'name' => 'По убыванию',
                ),
              ),
              'value' => 'DESC',
              'lexicon' => 'quip:properties',
              'area' => '',
              'desc_trans' => 'The direction to sort by.',
              'area_trans' => '',
            ),
            'contexts' => 
            array (
              'name' => 'contexts',
              'desc' => 'quip.prop_late_contexts_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'quip:properties',
              'area' => '',
              'desc_trans' => 'A comma-separated list of Contexts to pull comments from. If not set, will grab comments from all Contexts.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'quip.prop_late_toplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'quip:properties',
              'area' => '',
              'desc_trans' => 'If set, will output the content to the placeholder specified in this property, rather than outputting the content directly.',
              'area_trans' => '',
            ),
            'placeholderPrefix' => 
            array (
              'name' => 'placeholderPrefix',
              'desc' => 'quip.prop_late_placeholderprefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'quip.latest',
              'lexicon' => 'quip:properties',
              'area' => '',
              'desc_trans' => 'The prefix for the global placeholders set by QuipLatestComments.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * QuipLatestComments
 *
 * Gets latest comments in a thread or by a user.
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var Quip $quip
 * 
 * @name QuipLatestComments
 * @author Shaun McCormick <shaun@modx.com>
 * @package quip
 */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return \'\';
$quip->initialize($modx->context->get(\'key\'));
$controller = $quip->loadController(\'LatestComments\');
$output = $controller->run($scriptProperties);
return $output;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);