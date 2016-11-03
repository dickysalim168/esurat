<?php
require_once(getabspath("classes/cipherer.php"));
$tdatadocument = array();
	$tdatadocument[".NumberOfChars"] = 80; 
	$tdatadocument[".ShortName"] = "document";
	$tdatadocument[".OwnerID"] = "";
	$tdatadocument[".OriginalTable"] = "document";

//	field labels
$fieldLabelsdocument = array();
if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsdocument["Malay"] = array();
	$fieldToolTipsdocument["Malay"] = array();
	$fieldLabelsdocument["Malay"]["did"] = "Pilihan";
	$fieldToolTipsdocument["Malay"]["did"] = "";
	$fieldLabelsdocument["Malay"]["sid"] = "Sid";
	$fieldToolTipsdocument["Malay"]["sid"] = "";
	$fieldLabelsdocument["Malay"]["tahun"] = "Tahun";
	$fieldToolTipsdocument["Malay"]["tahun"] = "";
	$fieldLabelsdocument["Malay"]["bulan"] = "Bulan";
	$fieldToolTipsdocument["Malay"]["bulan"] = "";
	$fieldLabelsdocument["Malay"]["nama"] = "Fail";
	$fieldToolTipsdocument["Malay"]["nama"] = "";
	$fieldLabelsdocument["Malay"]["thumb"] = "Thumb";
	$fieldToolTipsdocument["Malay"]["thumb"] = "";
	if (count($fieldToolTipsdocument["Malay"]))
		$tdatadocument[".isUseToolTips"] = true;
}
	
	
	$tdatadocument[".NCSearch"] = true;



$tdatadocument[".shortTableName"] = "document";
$tdatadocument[".nSecOptions"] = 0;
$tdatadocument[".recsPerRowList"] = 1;
$tdatadocument[".mainTableOwnerID"] = "";
$tdatadocument[".moveNext"] = 1;
$tdatadocument[".nType"] = 0;

$tdatadocument[".strOriginalTableName"] = "document";




$tdatadocument[".showAddInPopup"] = false;

$tdatadocument[".showEditInPopup"] = false;

$tdatadocument[".showViewInPopup"] = false;

$tdatadocument[".fieldsForRegister"] = array();
	
$tdatadocument[".listAjax"] = false;

	$tdatadocument[".audit"] = false;

	$tdatadocument[".locking"] = false;

$tdatadocument[".listIcons"] = true;
$tdatadocument[".inlineAdd"] = true;
$tdatadocument[".view"] = true;



$tdatadocument[".delete"] = true;

$tdatadocument[".showSimpleSearchOptions"] = false;

$tdatadocument[".showSearchPanel"] = true;

if (isMobile())
	$tdatadocument[".isUseAjaxSuggest"] = false;
else 
	$tdatadocument[".isUseAjaxSuggest"] = true;

$tdatadocument[".rowHighlite"] = true;

// button handlers file names
$tdatadocument[".isUsebuttonHandlers"] = true;

$tdatadocument[".addPageEvents"] = false;

// use datepicker for search panel
$tdatadocument[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdatadocument[".isUseTimeForSearch"] = false;




$tdatadocument[".allSearchFields"] = array();

$tdatadocument[".allSearchFields"][] = "thumb";
$tdatadocument[".allSearchFields"][] = "nama";

$tdatadocument[".googleLikeFields"][] = "thumb";
$tdatadocument[".googleLikeFields"][] = "nama";
$tdatadocument[".googleLikeFields"][] = "sid";
$tdatadocument[".googleLikeFields"][] = "did";
$tdatadocument[".googleLikeFields"][] = "tahun";
$tdatadocument[".googleLikeFields"][] = "bulan";


$tdatadocument[".advSearchFields"][] = "thumb";
$tdatadocument[".advSearchFields"][] = "nama";

$tdatadocument[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatadocument[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadocument[".strOrderBy"] = $tstrOrderBy;

$tdatadocument[".orderindexes"] = array();

$tdatadocument[".sqlHead"] = "SELECT did,   sid,   tahun,   bulan,   nama,  nama AS thumb";
$tdatadocument[".sqlFrom"] = "FROM document";
$tdatadocument[".sqlWhereExpr"] = "";
$tdatadocument[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadocument[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadocument[".arrGroupsPerPage"] = $arrGPP;

$tableKeysdocument = array();
$tableKeysdocument[] = "did";
$tdatadocument[".Keys"] = $tableKeysdocument;

$tdatadocument[".listFields"] = array();
$tdatadocument[".listFields"][] = "thumb";
$tdatadocument[".listFields"][] = "nama";
$tdatadocument[".listFields"][] = "did";

$tdatadocument[".viewFields"] = array();
$tdatadocument[".viewFields"][] = "thumb";
$tdatadocument[".viewFields"][] = "nama";
$tdatadocument[".viewFields"][] = "did";

$tdatadocument[".addFields"] = array();
$tdatadocument[".addFields"][] = "thumb";
$tdatadocument[".addFields"][] = "nama";

$tdatadocument[".inlineAddFields"] = array();
$tdatadocument[".inlineAddFields"][] = "thumb";
$tdatadocument[".inlineAddFields"][] = "nama";

$tdatadocument[".editFields"] = array();
$tdatadocument[".editFields"][] = "thumb";
$tdatadocument[".editFields"][] = "nama";

$tdatadocument[".inlineEditFields"] = array();
$tdatadocument[".inlineEditFields"][] = "thumb";
$tdatadocument[".inlineEditFields"][] = "nama";

$tdatadocument[".exportFields"] = array();

$tdatadocument[".printFields"] = array();

//	did
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "did";
	$fdata["GoodName"] = "did";
	$fdata["ownerTable"] = "document";
	$fdata["Label"] = "Pilihan"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "did"; 
		$fdata["FullName"] = "did";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadocument["did"] = $fdata;
//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "document";
	$fdata["Label"] = "Sid"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "sid"; 
		$fdata["FullName"] = "sid";
	
		
		
				
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
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadocument["sid"] = $fdata;
//	tahun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tahun";
	$fdata["GoodName"] = "tahun";
	$fdata["ownerTable"] = "document";
	$fdata["Label"] = "Tahun"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "tahun"; 
		$fdata["FullName"] = "tahun";
	
		
		
				
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
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadocument["tahun"] = $fdata;
//	bulan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "bulan";
	$fdata["GoodName"] = "bulan";
	$fdata["ownerTable"] = "document";
	$fdata["Label"] = "Bulan"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "bulan"; 
		$fdata["FullName"] = "bulan";
	
		
		
				
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
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadocument["bulan"] = $fdata;
//	nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "nama";
	$fdata["GoodName"] = "nama";
	$fdata["ownerTable"] = "document";
	$fdata["Label"] = "Fail"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "nama"; 
		$fdata["FullName"] = "nama";
	
		
		
				$fdata["FieldPermissions"] = true;
	
					
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "";
	$edata["ThumbnailSize"] = 0;
	
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadocument["nama"] = $fdata;
//	thumb
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "thumb";
	$fdata["GoodName"] = "thumb";
	$fdata["ownerTable"] = "document";
	$fdata["Label"] = "Thumb"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "nama"; 
		$fdata["FullName"] = "nama";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatadocument["thumb"] = $fdata;

	
$tables_data["document"]=&$tdatadocument;
$field_labels["document"] = &$fieldLabelsdocument;
$fieldToolTips["document"] = &$fieldToolTipsdocument;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["document"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["document"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="surat";
	$masterParams["mDataSourceTable"]="surat";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "surat";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterTablesData["document"][$mIndex] = $masterParams;	
		$masterTablesData["document"][$mIndex]["masterKeys"][]="sid";
		$masterTablesData["document"][$mIndex]["detailKeys"][]="sid";

$mIndex = 2-1;
			$strOriginalDetailsTable="surat_individu";
	$masterParams["mDataSourceTable"]="UserView";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "UserView";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterTablesData["document"][$mIndex] = $masterParams;	
		$masterTablesData["document"][$mIndex]["masterKeys"][]="sid";
		$masterTablesData["document"][$mIndex]["detailKeys"][]="sid";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_document()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "did,   sid,   tahun,   bulan,   nama,  nama AS thumb";
$proto0["m_strFrom"] = "FROM document";
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
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
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
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "0";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "did",
	"m_strTable" => "document"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "document"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "tahun",
	"m_strTable" => "document"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "bulan",
	"m_strTable" => "document"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "nama",
	"m_strTable" => "document"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "nama",
	"m_strTable" => "document"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "thumb";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "document";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "did";
$proto18["m_columns"][] = "sid";
$proto18["m_columns"][] = "tahun";
$proto18["m_columns"][] = "bulan";
$proto18["m_columns"][] = "nama";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_alias"] = "";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = "0";
$proto19["m_inBrackets"] = "0";
$proto19["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_document = createSqlQuery_document();
						$tdatadocument[".sqlquery"] = $queryData_document;
	
if(isset($tdatadocument["field2"])){
	$tdatadocument["field2"]["LookupTable"] = "carscars_view";
	$tdatadocument["field2"]["LookupOrderBy"] = "name";
	$tdatadocument["field2"]["LookupType"] = 4;
	$tdatadocument["field2"]["LinkField"] = "email";
	$tdatadocument["field2"]["DisplayField"] = "name";
	$tdatadocument[".hasCustomViewField"] = true;
}

include_once(getabspath("include/document_events.php"));
$tableEvents["document"] = new eventclass_document;
$tdatadocument[".hasEvents"] = true;

$cipherer = new RunnerCipherer("document");

?>