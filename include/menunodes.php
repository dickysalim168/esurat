<?php
	// create menu nodes arr
	$menuNodesObject->menuNodes = array();
		
	if(!$menuNodesObject->isAdminTable()){
		$menuNode = array();
		$menuNode["id"] = "1";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "surat";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Surat";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "2";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "status";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Status";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "3";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "surat_individu";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Surat Individu";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "4";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "surat_jenis";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Surat Jenis";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "5";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "awam";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Awam";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "6";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "agensi";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Agensi";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "7";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "drop_level";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Drop Level";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "8";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "pengguna";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Pengguna";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "9";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "TambahPenerima";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Tambah Penerima";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "10";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Viewer";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Viewer";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "11";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "surat_view";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Surat View";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "12";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "menuview";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Menuview";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "13";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "surat_Kepada";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Surat Kepada";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "14";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "surat_editor";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Surat Editor";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "15";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "surat_maklumatsurat";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Surat Maklumatsurat";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "16";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "surat_PTG";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Surat PTG";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "17";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "surat_Agensi";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Surat Agensi";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "18";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "surat_Awam";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Surat Awam";
		$menuNodesObject->menuNodes[] = $menuNode;
			if($menuNodesObject->pageType == PAGE_MENU && IsAdmin())
		{
				}
	}else{
		//Admin Area menu items
	}	
	
?>
