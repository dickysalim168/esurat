<?php
require_once(getabspath("classes/cipherer.php"));




$tdataagensi_awam = array();
	$tdataagensi_awam[".truncateText"] = true;
	$tdataagensi_awam[".NumberOfChars"] = 80;
	$tdataagensi_awam[".ShortName"] = "agensi_awam";
	$tdataagensi_awam[".OwnerID"] = "";
	$tdataagensi_awam[".OriginalTable"] = "agensi_awam";

//	field labels
$fieldLabelsagensi_awam = array();
$fieldToolTipsagensi_awam = array();
$pageTitlesagensi_awam = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsagensi_awam["Malay"] = array();
	$fieldToolTipsagensi_awam["Malay"] = array();
	$pageTitlesagensi_awam["Malay"] = array();
	$fieldLabelsagensi_awam["Malay"]["aid"] = "Aid";
	$fieldToolTipsagensi_awam["Malay"]["aid"] = "";
	$fieldLabelsagensi_awam["Malay"]["nama"] = "Nama";
	$fieldToolTipsagensi_awam["Malay"]["nama"] = "";
	$fieldLabelsagensi_awam["Malay"]["penerangan"] = "Penerangan";
	$fieldToolTipsagensi_awam["Malay"]["penerangan"] = "";
	$fieldLabelsagensi_awam["Malay"]["jenis"] = "Jenis";
	$fieldToolTipsagensi_awam["Malay"]["jenis"] = "";
	if (count($fieldToolTipsagensi_awam["Malay"]))
		$tdataagensi_awam[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsagensi_awam[""] = array();
	$fieldToolTipsagensi_awam[""] = array();
	$pageTitlesagensi_awam[""] = array();
	$fieldLabelsagensi_awam[""]["aid"] = "Aid";
	$fieldToolTipsagensi_awam[""]["aid"] = "";
	$fieldLabelsagensi_awam[""]["nama"] = "Nama";
	$fieldToolTipsagensi_awam[""]["nama"] = "";
	$fieldLabelsagensi_awam[""]["penerangan"] = "Penerangan";
	$fieldToolTipsagensi_awam[""]["penerangan"] = "";
	$fieldLabelsagensi_awam[""]["jenis"] = "Jenis";
	$fieldToolTipsagensi_awam[""]["jenis"] = "";
	if (count($fieldToolTipsagensi_awam[""]))
		$tdataagensi_awam[".isUseToolTips"] = true;
}


	$tdataagensi_awam[".NCSearch"] = true;



$tdataagensi_awam[".shortTableName"] = "agensi_awam";
$tdataagensi_awam[".nSecOptions"] = 0;
$tdataagensi_awam[".recsPerRowList"] = 1;
$tdataagensi_awam[".recsPerRowPrint"] = 1;
$tdataagensi_awam[".mainTableOwnerID"] = "";
$tdataagensi_awam[".moveNext"] = 1;
$tdataagensi_awam[".entityType"] = 0;

$tdataagensi_awam[".strOriginalTableName"] = "agensi_awam";




$tdataagensi_awam[".showAddInPopup"] = false;

$tdataagensi_awam[".showEditInPopup"] = false;

$tdataagensi_awam[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataagensi_awam[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataagensi_awam[".fieldsForRegister"] = array();

$tdataagensi_awam[".listAjax"] = false;

	$tdataagensi_awam[".audit"] = false;

	$tdataagensi_awam[".locking"] = false;



$tdataagensi_awam[".list"] = true;

$tdataagensi_awam[".inlineAdd"] = true;





$tdataagensi_awam[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataagensi_awam[".searchSaving"] = false;
//

$tdataagensi_awam[".showSearchPanel"] = true;
		$tdataagensi_awam[".flexibleSearch"] = true;

if (isMobile())
	$tdataagensi_awam[".isUseAjaxSuggest"] = false;
else
	$tdataagensi_awam[".isUseAjaxSuggest"] = true;

$tdataagensi_awam[".rowHighlite"] = true;


																																																																									
$tdataagensi_awam[".addPageEvents"] = false;

// use timepicker for search panel
$tdataagensi_awam[".isUseTimeForSearch"] = false;





$tdataagensi_awam[".allSearchFields"] = array();
$tdataagensi_awam[".filterFields"] = array();
$tdataagensi_awam[".requiredSearchFields"] = array();

$tdataagensi_awam[".allSearchFields"][] = "nama";
	$tdataagensi_awam[".allSearchFields"][] = "penerangan";
	$tdataagensi_awam[".allSearchFields"][] = "jenis";
	

$tdataagensi_awam[".googleLikeFields"] = array();
$tdataagensi_awam[".googleLikeFields"][] = "aid";
$tdataagensi_awam[".googleLikeFields"][] = "nama";
$tdataagensi_awam[".googleLikeFields"][] = "penerangan";
$tdataagensi_awam[".googleLikeFields"][] = "jenis";


$tdataagensi_awam[".advSearchFields"] = array();
$tdataagensi_awam[".advSearchFields"][] = "nama";
$tdataagensi_awam[".advSearchFields"][] = "penerangan";
$tdataagensi_awam[".advSearchFields"][] = "jenis";

$tdataagensi_awam[".tableType"] = "list";

$tdataagensi_awam[".printerPageOrientation"] = 0;
$tdataagensi_awam[".nPrinterPageScale"] = 100;

$tdataagensi_awam[".nPrinterSplitRecords"] = 40;

$tdataagensi_awam[".nPrinterPDFSplitRecords"] = 40;



$tdataagensi_awam[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataagensi_awam[".pageSize"] = 20;

$tdataagensi_awam[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataagensi_awam[".strOrderBy"] = $tstrOrderBy;

$tdataagensi_awam[".orderindexes"] = array();

$tdataagensi_awam[".sqlHead"] = "SELECT aid,  	nama,  	penerangan,  	jenis";
$tdataagensi_awam[".sqlFrom"] = "FROM agensi_awam";
$tdataagensi_awam[".sqlWhereExpr"] = "";
$tdataagensi_awam[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataagensi_awam[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataagensi_awam[".arrGroupsPerPage"] = $arrGPP;

$tdataagensi_awam[".highlightSearchResults"] = true;

$tableKeysagensi_awam = array();
$tableKeysagensi_awam[] = "aid";
$tdataagensi_awam[".Keys"] = $tableKeysagensi_awam;

$tdataagensi_awam[".listFields"] = array();
$tdataagensi_awam[".listFields"][] = "nama";
$tdataagensi_awam[".listFields"][] = "penerangan";
$tdataagensi_awam[".listFields"][] = "jenis";

$tdataagensi_awam[".hideMobileList"] = array();


$tdataagensi_awam[".viewFields"] = array();

$tdataagensi_awam[".addFields"] = array();

$tdataagensi_awam[".masterListFields"] = array();
$tdataagensi_awam[".masterListFields"][] = "aid";
$tdataagensi_awam[".masterListFields"][] = "nama";
$tdataagensi_awam[".masterListFields"][] = "penerangan";
$tdataagensi_awam[".masterListFields"][] = "jenis";

$tdataagensi_awam[".inlineAddFields"] = array();
$tdataagensi_awam[".inlineAddFields"][] = "nama";
$tdataagensi_awam[".inlineAddFields"][] = "penerangan";
$tdataagensi_awam[".inlineAddFields"][] = "jenis";

$tdataagensi_awam[".editFields"] = array();

$tdataagensi_awam[".inlineEditFields"] = array();

$tdataagensi_awam[".exportFields"] = array();

$tdataagensi_awam[".importFields"] = array();

$tdataagensi_awam[".printFields"] = array();

//	aid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "aid";
	$fdata["GoodName"] = "aid";
	$fdata["ownerTable"] = "agensi_awam";
	$fdata["Label"] = GetFieldLabel("agensi_awam","aid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "aid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aid";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataagensi_awam["aid"] = $fdata;
//	nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nama";
	$fdata["GoodName"] = "nama";
	$fdata["ownerTable"] = "agensi_awam";
	$fdata["Label"] = GetFieldLabel("agensi_awam","nama");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "nama";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nama";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=855";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataagensi_awam["nama"] = $fdata;
//	penerangan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "penerangan";
	$fdata["GoodName"] = "penerangan";
	$fdata["ownerTable"] = "agensi_awam";
	$fdata["Label"] = GetFieldLabel("agensi_awam","penerangan");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "penerangan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "penerangan";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=855";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataagensi_awam["penerangan"] = $fdata;
//	jenis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "jenis";
	$fdata["GoodName"] = "jenis";
	$fdata["ownerTable"] = "agensi_awam";
	$fdata["Label"] = GetFieldLabel("agensi_awam","jenis");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "jenis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jenis";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "surat_jenis";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "jid";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "jenis";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataagensi_awam["jenis"] = $fdata;


$tables_data["agensi_awam"]=&$tdataagensi_awam;
$field_labels["agensi_awam"] = &$fieldLabelsagensi_awam;
$fieldToolTips["agensi_awam"] = &$fieldToolTipsagensi_awam;
$page_titles["agensi_awam"] = &$pageTitlesagensi_awam;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["agensi_awam"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["agensi_awam"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_agensi_awam()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "aid,  	nama,  	penerangan,  	jenis";
$proto0["m_strFrom"] = "FROM agensi_awam";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "aid",
	"m_strTable" => "agensi_awam",
	"m_srcTableName" => "agensi_awam"
));

$proto5["m_sql"] = "aid";
$proto5["m_srcTableName"] = "agensi_awam";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "nama",
	"m_strTable" => "agensi_awam",
	"m_srcTableName" => "agensi_awam"
));

$proto7["m_sql"] = "nama";
$proto7["m_srcTableName"] = "agensi_awam";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "penerangan",
	"m_strTable" => "agensi_awam",
	"m_srcTableName" => "agensi_awam"
));

$proto9["m_sql"] = "penerangan";
$proto9["m_srcTableName"] = "agensi_awam";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "jenis",
	"m_strTable" => "agensi_awam",
	"m_srcTableName" => "agensi_awam"
));

$proto11["m_sql"] = "jenis";
$proto11["m_srcTableName"] = "agensi_awam";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "agensi_awam";
$proto14["m_srcTableName"] = "agensi_awam";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "aid";
$proto14["m_columns"][] = "nama";
$proto14["m_columns"][] = "penerangan";
$proto14["m_columns"][] = "jenis";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "agensi_awam";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "agensi_awam";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="agensi_awam";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_agensi_awam = createSqlQuery_agensi_awam();



				

$tdataagensi_awam[".sqlquery"] = $queryData_agensi_awam;

$tableEvents["agensi_awam"] = new eventsBase;
$tdataagensi_awam[".hasEvents"] = false;

?>