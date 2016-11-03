
YUI.add('widget-base',function(Y,NAME){var L=Y.Lang,Node=Y.Node,ClassNameManager=Y.ClassNameManager,_getClassName=ClassNameManager.getClassName,_getWidgetClassName,_toInitialCap=Y.cached(function(str){return str.substring(0,1).toUpperCase()+str.substring(1);}),CONTENT="content",VISIBLE="visible",HIDDEN="hidden",DISABLED="disabled",FOCUSED="focused",WIDTH="width",HEIGHT="height",BOUNDING_BOX="boundingBox",CONTENT_BOX="contentBox",PARENT_NODE="parentNode",OWNER_DOCUMENT="ownerDocument",AUTO="auto",SRC_NODE="srcNode",BODY="body",TAB_INDEX="tabIndex",ID="id",RENDER="render",RENDERED="rendered",DESTROYED="destroyed",STRINGS="strings",DIV="<div></div>",CHANGE="Change",LOADING="loading",_UISET="_uiSet",EMPTY_STR="",EMPTY_FN=function(){},TRUE=true,FALSE=false,UI,ATTRS={},UI_ATTRS=[VISIBLE,DISABLED,HEIGHT,WIDTH,FOCUSED,TAB_INDEX],WEBKIT=Y.UA.webkit,_instances={};function Widget(config){var widget=this,parentNode,render,constructor=widget.constructor;widget._strs={};widget._cssPrefix=constructor.CSS_PREFIX||_getClassName(constructor.NAME.toLowerCase());config=config||{};Widget.superclass.constructor.call(widget,config);render=widget.get(RENDER);if(render){if(render!==TRUE){parentNode=render;}
widget.render(parentNode);}}
Widget.NAME="widget";UI=Widget.UI_SRC="ui";Widget.ATTRS=ATTRS;ATTRS[ID]={valueFn:"_guid",writeOnce:TRUE};ATTRS[RENDERED]={value:FALSE,readOnly:TRUE};ATTRS[BOUNDING_BOX]={value:null,setter:"_setBB",writeOnce:TRUE};ATTRS[CONTENT_BOX]={valueFn:"_defaultCB",setter:"_setCB",writeOnce:TRUE};ATTRS[TAB_INDEX]={value:null,validator:"_validTabIndex"};ATTRS[FOCUSED]={value:FALSE,readOnly:TRUE};ATTRS[DISABLED]={value:FALSE};ATTRS[VISIBLE]={value:TRUE};ATTRS[HEIGHT]={value:EMPTY_STR};ATTRS[WIDTH]={value:EMPTY_STR};ATTRS[STRINGS]={value:{},setter:"_strSetter",getter:"_strGetter"};ATTRS[RENDER]={value:FALSE,writeOnce:TRUE};Widget.CSS_PREFIX=_getClassName(Widget.NAME.toLowerCase());Widget.getClassName=function(){return _getClassName.apply(ClassNameManager,[Widget.CSS_PREFIX].concat(Y.Array(arguments),true));};_getWidgetClassName=Widget.getClassName;Widget.getByNode=function(node){var widget,widgetMarker=_getWidgetClassName();node=Node.one(node);if(node){node=node.ancestor("."+widgetMarker,true);if(node){widget=_instances[Y.stamp(node,true)];}}
return widget||null;};Y.extend(Widget,Y.Base,{getClassName:function(){return _getClassName.apply(ClassNameManager,[this._cssPrefix].concat(Y.Array(arguments),true));},initializer:function(config){var bb=this.get(BOUNDING_BOX);if(bb instanceof Node){this._mapInstance(Y.stamp(bb));}
if(this._applyParser){this._applyParser(config);}},_mapInstance:function(id){_instances[id]=this;},destructor:function(){var boundingBox=this.get(BOUNDING_BOX),bbGuid;if(boundingBox instanceof Node){bbGuid=Y.stamp(boundingBox,true);if(bbGuid in _instances){delete _instances[bbGuid];}
this._destroyBox();}},destroy:function(destroyAllNodes){this._destroyAllNodes=destroyAllNodes;return Widget.superclass.destroy.apply(this);},_destroyBox:function(){var boundingBox=this.get(BOUNDING_BOX),contentBox=this.get(CONTENT_BOX),deep=this._destroyAllNodes,same;same=boundingBox&&boundingBox.compareTo(contentBox);if(this.UI_EVENTS){this._destroyUIEvents();}
this._unbindUI(boundingBox);if(deep){boundingBox.empty();boundingBox.remove(TRUE);}else{if(contentBox){contentBox.remove(TRUE);}
if(!same){boundingBox.remove(TRUE);}}},render:function(parentNode){if(!this.get(DESTROYED)&&!this.get(RENDERED)){this.publish(RENDER,{queuable:FALSE,fireOnce:TRUE,defaultTargetOnly:TRUE,defaultFn:this._defRenderFn});this.fire(RENDER,{parentNode:(parentNode)?Node.one(parentNode):null});}
return this;},_defRenderFn:function(e){this._parentNode=e.parentNode;this.renderer();this._set(RENDERED,TRUE);this._removeLoadingClassNames();},renderer:function(){var widget=this;widget._renderUI();widget.renderUI();widget._bindUI();widget.bindUI();widget._syncUI();widget.syncUI();},bindUI:EMPTY_FN,renderUI:EMPTY_FN,syncUI:EMPTY_FN,hide:function(){return this.set(VISIBLE,FALSE);},show:function(){return this.set(VISIBLE,TRUE);},focus:function(){return this._set(FOCUSED,TRUE);},blur:function(){return this._set(FOCUSED,FALSE);},enable:function(){return this.set(DISABLED,FALSE);},disable:function(){return this.set(DISABLED,TRUE);},_uiSizeCB:function(expand){this.get(CONTENT_BOX).toggleClass(_getWidgetClassName(CONTENT,"expanded"),expand);},_renderBox:function(parentNode){var widget=this,contentBox=widget.get(CONTENT_BOX),boundingBox=widget.get(BOUNDING_BOX),srcNode=widget.get(SRC_NODE),defParentNode=widget.DEF_PARENT_NODE,doc=(srcNode&&srcNode.get(OWNER_DOCUMENT))||boundingBox.get(OWNER_DOCUMENT)||contentBox.get(OWNER_DOCUMENT);if(srcNode&&!srcNode.compareTo(contentBox)&&!contentBox.inDoc(doc)){srcNode.replace(contentBox);}
if(!boundingBox.compareTo(contentBox.get(PARENT_NODE))&&!boundingBox.compareTo(contentBox)){if(contentBox.inDoc(doc)){contentBox.replace(boundingBox);}
boundingBox.appendChild(contentBox);}
parentNode=parentNode||(defParentNode&&Node.one(defParentNode));if(parentNode){parentNode.appendChild(boundingBox);}else if(!boundingBox.inDoc(doc)){Node.one(BODY).insert(boundingBox,0);}},_setBB:function(node){return this._setBox(this.get(ID),node,this.BOUNDING_TEMPLATE,true);},_setCB:function(node){return(this.CONTENT_TEMPLATE===null)?this.get(BOUNDING_BOX):this._setBox(null,node,this.CONTENT_TEMPLATE,false);},_defaultCB:function(node){return this.get(SRC_NODE)||null;},_setBox:function(id,node,template,isBounding){node=Node.one(node);if(!node){node=Node.create(template);if(isBounding){this._bbFromTemplate=true;}else{this._cbFromTemplate=true;}}
if(!node.get(ID)){node.set(ID,id||Y.guid());}
return node;},_renderUI:function(){this._renderBoxClassNames();this._renderBox(this._parentNode);},_renderBoxClassNames:function(){var classes=this._getClasses(),cl,boundingBox=this.get(BOUNDING_BOX),i;boundingBox.addClass(_getWidgetClassName());for(i=classes.length-3;i>=0;i--){cl=classes[i];boundingBox.addClass(cl.CSS_PREFIX||_getClassName(cl.NAME.toLowerCase()));}
this.get(CONTENT_BOX).addClass(this.getClassName(CONTENT));},_removeLoadingClassNames:function(){var boundingBox=this.get(BOUNDING_BOX),contentBox=this.get(CONTENT_BOX),instClass=this.getClassName(LOADING),widgetClass=_getWidgetClassName(LOADING);boundingBox.removeClass(widgetClass).removeClass(instClass);contentBox.removeClass(widgetClass).removeClass(instClass);},_bindUI:function(){this._bindAttrUI(this._UI_ATTRS.BIND);this._bindDOM();},_unbindUI:function(boundingBox){this._unbindDOM(boundingBox);},_bindDOM:function(){var oDocument=this.get(BOUNDING_BOX).get(OWNER_DOCUMENT),focusHandle=Widget._hDocFocus;if(!focusHandle){focusHandle=Widget._hDocFocus=oDocument.on("focus",this._onDocFocus,this);focusHandle.listeners={count:0};}
focusHandle.listeners[Y.stamp(this,true)]=true;focusHandle.listeners.count++;if(WEBKIT){this._hDocMouseDown=oDocument.on("mousedown",this._onDocMouseDown,this);}},_unbindDOM:function(boundingBox){var focusHandle=Widget._hDocFocus,yuid=Y.stamp(this,true),focusListeners,mouseHandle=this._hDocMouseDown;if(focusHandle){focusListeners=focusHandle.listeners;if(focusListeners[yuid]){delete focusListeners[yuid];focusListeners.count--;}
if(focusListeners.count===0){focusHandle.detach();Widget._hDocFocus=null;}}
if(WEBKIT&&mouseHandle){mouseHandle.detach();}},_syncUI:function(){this._syncAttrUI(this._UI_ATTRS.SYNC);},_uiSetHeight:function(val){this._uiSetDim(HEIGHT,val);this._uiSizeCB((val!==EMPTY_STR&&val!==AUTO));},_uiSetWidth:function(val){this._uiSetDim(WIDTH,val);},_uiSetDim:function(dimension,val){this.get(BOUNDING_BOX).setStyle(dimension,L.isNumber(val)?val+this.DEF_UNIT:val);},_uiSetVisible:function(val){this.get(BOUNDING_BOX).toggleClass(this.getClassName(HIDDEN),!val);},_uiSetDisabled:function(val){this.get(BOUNDING_BOX).toggleClass(this.getClassName(DISABLED),val);},_uiSetFocused:function(val,src){if(typeof src=='undefined'){return;}
var boundingBox=this.get(BOUNDING_BOX);boundingBox.toggleClass(this.getClassName(FOCUSED),val);if(src!==UI){if(val){boundingBox.focus();}else{boundingBox.blur();}}},_uiSetTabIndex:function(index){var boundingBox=this.get(BOUNDING_BOX);if(L.isNumber(index)){boundingBox.set(TAB_INDEX,index);}else{boundingBox.removeAttribute(TAB_INDEX);}},_onDocMouseDown:function(evt){if(this._domFocus){this._onDocFocus(evt);}},_onDocFocus:function(evt){var widget=Widget.getByNode(evt.target),activeWidget=Widget._active;if(activeWidget&&(activeWidget!==widget)){activeWidget._domFocus=false;activeWidget._set(FOCUSED,false,{src:UI});Widget._active=null;}
if(widget){widget._domFocus=true;widget._set(FOCUSED,true,{src:UI});Widget._active=widget;}},toString:function(){return this.name+"["+this.get(ID)+"]";},DEF_UNIT:"px",DEF_PARENT_NODE:null,CONTENT_TEMPLATE:DIV,BOUNDING_TEMPLATE:DIV,_guid:function(){return Y.guid();},_validTabIndex:function(tabIndex){return(L.isNumber(tabIndex)||L.isNull(tabIndex));},_bindAttrUI:function(attrs){var i,l=attrs.length;for(i=0;i<l;i++){this.after(attrs[i]+CHANGE,this._setAttrUI);}},_syncAttrUI:function(attrs){var i,l=attrs.length,attr;for(i=0;i<l;i++){attr=attrs[i];this[_UISET+_toInitialCap(attr)](this.get(attr));}},_setAttrUI:function(e){if(e.target===this){this[_UISET+_toInitialCap(e.attrName)](e.newVal,e.src);}},_strSetter:function(strings){return Y.merge(this.get(STRINGS),strings);},getString:function(key){return this.get(STRINGS)[key];},getStrings:function(){return this.get(STRINGS);},_UI_ATTRS:{BIND:UI_ATTRS,SYNC:UI_ATTRS}});Y.Widget=Widget;},'3.7.2',{"requires":["attribute","base-base","base-pluginhost","classnamemanager","event-focus","node-base","node-style"],"skinnable":true});