<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
add_nocache_headers();

include('include/xtempl.php');
include("include/pergerakan_variables.php");
include_once("include/pergerakanbahagian_settings.php");
include('classes/runnerpage.php');
include('classes/listpage.php');
include("classes/searchpanel.php");
include("classes/searchcontrol.php");
include("classes/searchclause.php");
include("classes/panelsearchcontrol.php");

if(!isLogged())
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}

if(isLoggedAsGuest()){
   $_SESSION["MyURL"] = $_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
}

if(CheckPermissionsEvent($strTableName, 'S') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add"))
{
	if(IsAdmin())
		echo "<p>"."Anda tidak mempunyai kebenaran untuk akses jadual ini"."<br><a href=\"admin_rights_list.php\">"."Proceed to Admin Area"."</a> "."to set up user permissions"."</p>";
	else
		echo "<p>"."Anda tidak mempunyai kebenaran untuk akses jadual ini"." <a href=\"login.php\">"."Kembali ke halaman log-masuk"."</a></p>";
	exit();
}

$layout = new TLayout("list7","Purific1Aqua","MobileAqua");
$layout->blocks["center"] = array();
$layout->containers["bigblock"] = array();

$layout->containers["bigblock"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"recordcontrols");


$layout->containers["recordcontrols"] = array();

$layout->containers["recordcontrols"][] = array("name"=>"recordcontrols_new","block"=>"newrecord_controls_block","substyle"=>1);


$layout->containers["recordcontrols"][] = array("name"=>"recordcontrol","block"=>"record_controls_block","substyle"=>1);


$layout->skins["recordcontrols"] = "2";

$layout->containers["bigblock"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"message");


$layout->containers["message"] = array();

$layout->containers["message"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->skins["message"] = "2";

$layout->containers["bigblock"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"grid");


$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"grid","block"=>"grid_block","substyle"=>1);


$layout->skins["grid"] = "grid";

$layout->containers["bigblock"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"pagination");


$layout->containers["pagination"] = array();

$layout->containers["pagination"][] = array("name"=>"pagination","block"=>"pagination_block","substyle"=>1);


$layout->skins["pagination"] = "2";

$layout->skins["bigblock"] = "1";
$layout->blocks["center"][] = "bigblock";$layout->blocks["left"] = array();
$layout->containers["left"] = array();

$layout->containers["left"][] = array("name"=>"searchpanel","block"=>"searchPanel","substyle"=>1);


$layout->skins["left"] = "menu";
$layout->blocks["left"][] = "left";$layout->blocks["top"] = array();
$layout->containers["master"] = array();

$layout->containers["master"][] = array("name"=>"masterinfo","block"=>"mastertable_block","substyle"=>1);


$layout->skins["master"] = "empty";
$layout->blocks["top"][] = "master";
$layout->containers["toplinks"] = array();

$layout->containers["toplinks"][] = array("name"=>"loggedas","block"=>"security_block","substyle"=>1);



$layout->containers["toplinks"][] = array("name"=>"toplinks_advsearch","block"=>"asearch_link","substyle"=>1);






$layout->skins["toplinks"] = "empty";
$layout->blocks["top"][] = "toplinks";
$layout->containers["hmenu"] = array();

$layout->containers["hmenu"][] = array("name"=>"hmenu","block"=>"menu_block","substyle"=>1);


$layout->skins["hmenu"] = "hmenu";
$layout->blocks["top"][] = "hmenu";
$layout->containers["search"] = array();

$layout->containers["search"][] = array("name"=>"search","block"=>"searchform_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"search_buttons","block"=>"searchformbuttons_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"details_found","block"=>"details_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"page_of","block"=>"pages_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"recsperpage","block"=>"recordspp_block","substyle"=>1);


$layout->skins["search"] = "1";
$layout->blocks["top"][] = "search";$page_layouts["pergerakan_list"] = $layout;



//	Include necessary files in accordance with mode displaying page
if (postvalue("mode")=="")
{
	$mode = LIST_SIMPLE;
	include('classes/listpage_simple.php');
	include("classes/searchpanelsimple.php");
}
elseif(postvalue("mode") == "ajax")
{
	$mode = LIST_AJAX;
	include('classes/listpage_simple.php');
	include('classes/listpage_ajax.php');
	include("classes/searchpanelsimple.php");
}
elseif(postvalue("mode") == "lookup")
{	
	include('classes/listpage_embed.php');
	include('classes/listpage_lookup.php');
	include("classes/searchpanellookup.php");
	$mode=LIST_LOOKUP;
	//determine which field should be used to select values
			$params["lookupSelectField"] = "tarikh";
			}
elseif(postvalue("mode")=="listdetails")
{
	
	include('classes/listpage_embed.php');
	include('classes/listpage_dpinline.php');
	$mode=LIST_DETAILS;
}
$xt = new Xtempl();


// Modify query: remove blob fields from fieldlist.
// Blob fields on a list page are shown using imager.php (for example).
// They don't need to be selected from DB in list.php itself.
$noBlobReplace = false;

$options = array();
//array of params for classes
$options["pageType"] = PAGE_LIST;
$options["id"] = postvalue("id") ? postvalue("id") : 1;
$options["mode"] = $mode;
$options['xt'] = &$xt;
$options['mainMasterPageType'] = postvalue("mainmasterpagetype");
$options['masterPageType'] = postvalue("masterpagetype");
$options["masterTable"] = postvalue("mastertable");
$options["masterId"] = postvalue("masterid");
$options["firstTime"] = postvalue("firsttime");

$i = 1;
while(isset($_REQUEST["masterkey".$i])) 
{
	$options["masterKeysReq"][$i] = $_REQUEST["masterkey".$i];
	$i++;
}
$pageObject = ListPage::createListPage($strTableName, $options);


$layout = new TLayout("masterlist","Purific1Aqua","MobileAqua");
$layout->blocks["bare"] = array();
$layout->containers["0"] = array();

$layout->containers["0"][] = array("name"=>"masterlistheader","block"=>"","substyle"=>1);


$layout->skins["0"] = "empty";
$layout->blocks["bare"][] = "0";
$layout->containers["mastergrid"] = array();

$layout->containers["mastergrid"][] = array("name"=>"masterlistfields","block"=>"","substyle"=>1);


$layout->skins["mastergrid"] = "grid";
$layout->blocks["bare"][] = "mastergrid";$page_layouts["surat_masterlist"] = $layout;

$layout = GetPageLayout("surat", 'masterlist');
if($layout)
{
	$rtl = $xt->getReadingOrder() == 'RTL' ? 'RTL' : '';
	$xt->cssFiles[] = array("stylepath" => "styles/".$layout->style.'/style'.$rtl.".css"
		, "pagestylepath" => "pagestyles/".$layout->name.$rtl.".css");
	$xt->IEcssFiles[] = array("stylepathIE" => "styles/".$layout->style.'/styleIE'.".css");
}
include_once getabspath('classes/controls/ViewControlsContainer.php');
$viewControls = new ViewControlsContainer(new ProjectSettings("surat", PAGE_LIST), PAGE_LIST);
$viewControls->addControlsJSAndCSS();
$pageObject->includes_js = array_merge($pageObject->includes_js, $viewControls->includes_js);
$pageObject->includes_jsreq = array_merge($pageObject->includes_jsreq, $viewControls->includes_jsreq);
$pageObject->includes_css = array_merge($pageObject->includes_css, $viewControls->includes_css);

if (!$noBlobReplace){
	$gQuery->ReplaceFieldsWithDummies($pageObject->pSet->getBinaryFieldsIndices());
}

if ($mode != LIST_DETAILS) { 
}

unset($_SESSION["message_add"]);
unset($_SESSION["message_edit"]);

// prepare code for build page
$pageObject->prepareForBuildPage();

$includesArr = array();
$masterTablesInfoArr = $pageObject->pSet->getMasterTablesArr($strTableName);
for($i=0;$i<count($masterTablesInfoArr);$i++) 
{
	if($masterTablesInfoArr[$i]['dispInfo'])
		$includesArr[] = getabspath("include/".$masterTablesInfoArr[$i]['mShortTable']."_masterlist.php");
}

//include files if need
for($i=0;$i<count($includesArr);$i++)
	include($includesArr[$i]);

// show page depends of mode

$pageObject->showPage();

?>