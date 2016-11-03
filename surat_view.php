<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("include/surat_variables.php");
require_once('include/xtempl.php');
require_once('classes/viewpage.php');
require_once("classes/searchclause.php");

add_nocache_headers();

if( !ViewPage::processEditPageSecurity( $strTableName ) )
	return;	




$layout = new TLayout("view2old", "FusionAqua", "MobileAqua");
$layout->version = 1;
$layout->blocks["top"] = array();
$layout->containers["all"] = array();
$layout->container_properties["all"] = array(  );
$layout->containers["all"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"main" );
$layout->containers["main"] = array();
$layout->container_properties["main"] = array(  );
$layout->containers["main"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"view" );
$layout->containers["view"] = array();
$layout->container_properties["view"] = array(  );
$layout->containers["view"][] = array("name"=>"viewheader", 
	"block"=>"viewheader", "substyle"=>2  );

$layout->containers["view"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"fields" );
$layout->containers["fields"] = array();
$layout->container_properties["fields"] = array(  );
$layout->containers["fields"][] = array("name"=>"viewfields", 
	"block"=>"", "substyle"=>1  );

$layout->containers["fields"][] = array("name"=>"viewbuttons", 
	"block"=>"viewbuttons", "substyle"=>2  );

$layout->skins["fields"] = "fields";


$layout->skins["view"] = "1";


$layout->skins["main"] = "empty";


$layout->containers["all"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"details" );
$layout->containers["details"] = array();
$layout->container_properties["details"] = array(  );
$layout->containers["details"][] = array("name"=>"viewdetails", 
	"block"=>"detail_tables", "substyle"=>1  );

$layout->skins["details"] = "empty";


$layout->skins["all"] = "empty";

$layout->blocks["top"][] = "all";
$page_layouts["surat_view"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button2");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");






$layout = new TLayout("viewtab", "FusionAqua", "MobileAqua");
$layout->version = 2;
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();
$layout->container_properties["1"] = array(  );
$layout->containers["1"][] = array("name"=>"viewtabfield", 
	"block"=>"", "substyle"=>1  );

$layout->skins["1"] = "empty";

$layout->blocks["bare"][] = "1";
$page_layouts["surat_view_PTG1"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button2");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");





$layout = new TLayout("viewtab", "FusionAqua", "MobileAqua");
$layout->version = 2;
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();
$layout->container_properties["1"] = array(  );
$layout->containers["1"][] = array("name"=>"viewtabfield", 
	"block"=>"", "substyle"=>1  );

$layout->skins["1"] = "empty";

$layout->blocks["bare"][] = "1";
$page_layouts["surat_view_Agensi1"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button2");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");





$layout = new TLayout("viewtab", "FusionAqua", "MobileAqua");
$layout->version = 2;
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();
$layout->container_properties["1"] = array(  );
$layout->containers["1"][] = array("name"=>"viewtabfield", 
	"block"=>"", "substyle"=>1  );

$layout->skins["1"] = "empty";

$layout->blocks["bare"][] = "1";
$page_layouts["surat_view_Awam1"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button2");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");



	
						


$layout = new TLayout("list5", "FusionAqua", "MobileAqua");
$layout->version = 2;
$layout->blocks["center"] = array();
$layout->containers["bigblock"] = array();
$layout->container_properties["bigblock"] = array(  );
$layout->containers["bigblock"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"recordcontrols" );
$layout->containers["recordcontrols"] = array();
$layout->container_properties["recordcontrols"] = array(  );
$layout->containers["recordcontrols"][] = array("name"=>"recordcontrols_new", 
	"block"=>"newrecord_controls_block", "substyle"=>1  );

$layout->containers["recordcontrols"][] = array("name"=>"recordcontrol", 
	"block"=>"record_controls_block", "substyle"=>1  );

$layout->containers["recordcontrols"][] = array("name"=>"toplinks", 
	"block"=>"more_list", "substyle"=>1  );

$layout->skins["recordcontrols"] = "2";


$layout->containers["bigblock"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"message" );
$layout->containers["message"] = array();
$layout->container_properties["message"] = array(  );
$layout->containers["message"][] = array("name"=>"message", 
	"block"=>"message_block", "substyle"=>1  );

$layout->skins["message"] = "2";


$layout->containers["bigblock"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"grid" );
$layout->containers["grid"] = array();
$layout->container_properties["grid"] = array(  );
$layout->containers["grid"][] = array("name"=>"grid", 
	"block"=>"grid_block", "substyle"=>1  );

$layout->skins["grid"] = "grid";


$layout->containers["bigblock"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"pagination" );
$layout->containers["pagination"] = array();
$layout->container_properties["pagination"] = array(  );
$layout->containers["pagination"][] = array("name"=>"pagination", 
	"block"=>"pagination_block", "substyle"=>1  );

$layout->skins["pagination"] = "2";


$layout->skins["bigblock"] = "1";

$layout->blocks["center"][] = "bigblock";
$layout->blocks["left"] = array();
$layout->containers["left"] = array();
$layout->container_properties["left"] = array(  );
$layout->containers["left"][] = array("name"=>"vmenu", 
	"block"=>"menu_block", "substyle"=>1  );

$layout->containers["left"][] = array("name"=>"vsearch1", 
	"block"=>"searchform_block", "substyle"=>1  );

$layout->containers["left"][] = array("name"=>"vsearch2", 
	"block"=>"searchform_block", "substyle"=>1  );

$layout->containers["left"][] = array("name"=>"search_saving_buttons", 
	"block"=>"searchsaving_block", "substyle"=>1  );

$layout->containers["left"][] = array("name"=>"vdetails_found", 
	"block"=>"details_block", "substyle"=>2  );

$layout->containers["left"][] = array("name"=>"vpage_of", 
	"block"=>"pages_block", "substyle"=>1  );

$layout->containers["left"][] = array("name"=>"vrecsperpage", 
	"block"=>"recordspp_block", "substyle"=>1  );

$layout->containers["left"][] = array("name"=>"searchpanel", 
	"block"=>"searchPanel", "substyle"=>1  );

$layout->skins["left"] = "menu";

$layout->blocks["left"][] = "left";
$layout->blocks["top"] = array();
$layout->containers["master"] = array();
$layout->container_properties["master"] = array(  );
$layout->containers["master"][] = array("name"=>"masterinfo", 
	"block"=>"mastertable_block", "substyle"=>1  );

$layout->skins["master"] = "empty";

$layout->blocks["top"][] = "master";
$layout->containers["toplinks"] = array();
$layout->container_properties["toplinks"] = array(  );
$layout->containers["toplinks"][] = array("name"=>"loggedas", 
	"block"=>"security_block", "substyle"=>1  );

$layout->containers["toplinks"][] = array("name"=>"printpanel", 
	"block"=>"", "substyle"=>1  );

$layout->skins["toplinks"] = "2";

$layout->blocks["top"][] = "toplinks";
$page_layouts["surat_individu_list"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button2");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");



$pageMode = ViewPage::readViewModeFromRequest();

$xt = new Xtempl();

//Set page id
$id = postvalue("id");
$id = intval($id) == 0 ? 1 : $id;

// $keys could not be set properly if editid params were no passed
$keys = array();
$keys["sid"] = postvalue("editid1");

//array of params for classes
$params = array();
$params["id"] = $id;
$params["xt"] = &$xt;
$params["keys"] = $keys;
$params["mode"] = $pageMode;
$params["pageType"] = PAGE_VIEW;
$params["tName"] = $strTableName;
$params["pdfMode"] = postvalue("pdf") !== "";

if( $pageMode == VIEW_DASHBOARD ) 
{
	$params["dashElementName"] = postvalue("dashelement");
	$params["dashTName"] = postvalue("table");
	if(	postvalue("mapRefresh") )
	{
		$params["mapRefresh"] = true;
		$params["vpCoordinates"] = my_json_decode( postvalue("vpCoordinates") );
	}		
} 
if( $pageMode == VIEW_POPUP )
{
	$params["dashElementName"] = postvalue("dashelement");
	$params["dashTName"] = postvalue("dashTName");
}

$pageObject = new ViewPage($params);
$pageObject->init();

$pageObject->process();

?>