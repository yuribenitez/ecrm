/*
 Copyright (c) 2009, Yahoo! Inc. All rights reserved.
 Code licensed under the BSD License:
 http://developer.yahoo.net/yui/license.txt
 version: 3.0.0
 build: 1549
 */
YUI.add('slider',function(Y){var SLIDER='slider',RAIL='rail',THUMB='thumb',VALUE='value',MIN='min',MAX='max',MIN_GUTTER='minGutter',MAX_GUTTER='maxGutter',THUMB_IMAGE='thumbImage',RAIL_SIZE='railSize',CONTENT_BOX='contentBox',SLIDE_START='slideStart',SLIDE_END='slideEnd',THUMB_DRAG='thumbDrag',SYNC='sync',POSITION_THUMB='positionThumb',RENDERED='rendered',DISABLED='disabled',DISABLED_CHANGE='disabledChange',DOT='.',PX='px',WIDTH='width',HEIGHT='height',COMPLETE='complete',L=Y.Lang,isBoolean=L.isBoolean,isString=L.isString,isNumber=L.isNumber,getCN=Y.ClassNameManager.getClassName,IMAGE='image',C_RAIL=getCN(SLIDER,RAIL),C_THUMB=getCN(SLIDER,THUMB),C_THUMB_IMAGE=getCN(SLIDER,THUMB,IMAGE),C_IMAGE_ERROR=getCN(SLIDER,IMAGE,'error'),M=Math,max=M.max,round=M.round,floor=M.floor;function Slider(){Slider.superclass.constructor.apply(this,arguments);}
Y.mix(Slider,{NAME:SLIDER,_AXIS_KEYS:{x:{dim:WIDTH,offAxisDim:HEIGHT,eventPageAxis:'pageX',ddStick:'stickX',xyIndex:0},y:{dim:HEIGHT,offAxisDim:WIDTH,eventPageAxis:'pageY',ddStick:'stickY',xyIndex:1}},HTML_PARSER:{rail:DOT+C_RAIL,thumb:DOT+C_THUMB,thumbImage:DOT+C_THUMB_IMAGE},ATTRS:{axis:{value:'x',writeOnce:true,validator:function(v){return this._validateNewAxis(v);},setter:function(v){return this._setAxisFn(v);}},min:{value:0,validator:function(v){return this._validateNewMin(v);}},max:{value:100,validator:function(v){return this._validateNewMax(v);}},value:{value:0,validator:function(v){return this._validateNewValue(v);}},rail:{value:null,validator:function(v){return this._validateNewRail(v);},setter:function(v){return this._setRailFn(v);}},thumb:{value:null,validator:function(v){return this._validateNewThumb(v);},setter:function(v){return this._setThumbFn(v);}},thumbImage:{value:null,validator:function(v){return this._validateNewThumbImage(v);},setter:function(v){return this._setThumbImageFn(v);}},railSize:{value:'0',validator:function(v){return this._validateNewRailSize(v);}},railEnabled:{value:true,validator:isBoolean},minGutter:{value:0,validator:isNumber},maxGutter:{value:0,validator:isNumber}}});Y.extend(Slider,Y.Widget,{_key:null,_factor:1,_railSize:null,_thumbSize:null,_thumbOffset:0,_stall:false,_disabled:false,initializer:function(){this._key=Slider._AXIS_KEYS[this.get('axis')];this.after('minChange',this._afterMinChange);this.after('maxChange',this._afterMaxChange);this.after('railSizeChange',this._afterRailSizeChange);this.publish(SLIDE_START);this.publish(SLIDE_END);this.publish(SYNC,{defaultFn:this._defSyncFn});this.publish(POSITION_THUMB,{defaultFn:this._defPositionThumbFn});},renderUI:function(){this._initRail();this._initThumb();},_initRail:function(){var cb=this.get(CONTENT_BOX),rail=this.get(RAIL);if(!rail){rail=cb.appendChild(Y.Node.create('<div class="'+C_RAIL+'"></div>'));this.set(RAIL,rail);}else if(!cb.contains(rail)){cb.appendChild(rail);}
rail.addClass(C_RAIL);rail.addClass(this.getClassName(RAIL,this.get('axis')));},_initThumb:function(){var rail=this.get(RAIL),thumb=this.get(THUMB);if(thumb&&!this.get(THUMB_IMAGE)&&thumb.get('nodeName').toLowerCase()==='img'){this.set(THUMB_IMAGE,thumb);this.set(THUMB,null);thumb=null;}
if(!thumb){thumb=Y.Node.create('<div class="'+C_THUMB+'"></div>');this.set(THUMB,thumb);}
thumb.addClass(C_THUMB);if(!rail.contains(thumb)){rail.appendChild(thumb);}
if(this.get(THUMB_IMAGE)){this._initThumbImage();}},_initThumbImage:function(){var thumb=this.get(THUMB),img=this.get(THUMB_IMAGE);if(img){img.replaceClass(C_THUMB,C_THUMB_IMAGE);if(!thumb.contains(img)){thumb.appendChild(img);}}},bindUI:function(){this.publish(THUMB_DRAG,{defaultFn:this._defThumbDragFn});this._bindThumbDD();this.after('valueChange',this._afterValueChange);this.after('thumbImageChange',this._afterThumbImageChange);this.after(DISABLED_CHANGE,this._afterDisabledChange);},_bindThumbDD:function(){var ddConf={node:this.get(THUMB),bubble:false},conConf={constrain2node:this.get(RAIL)};conConf[this._key.ddStick]=true;this._dd=new Y.DD.Drag(ddConf).plug(Y.Plugin.DDConstrained,conConf);this._dd.on('drag:start',Y.bind(this._onDDStartDrag,this));this._dd.on('drag:drag',Y.bind(this._onDDDrag,this));this._dd.on('drag:end',Y.bind(this._onDDEndDrag,this));this._initRailDD();},_initRailDD:function(){this.get(RAIL).on('mousedown',Y.bind(this._handleRailMouseDown,this));},_handleRailMouseDown:function(e){if(this.get('railEnabled')&&!this.get(DISABLED)){var dd=this._dd,xyIndex=this._key.xyIndex,xy;if(dd.get('primaryButtonOnly')&&e.button>1){return false;}
dd._dragThreshMet=true;dd._fixIEMouseDown();e.halt();Y.DD.DDM.activeDrag=dd;xy=dd.get('dragNode').getXY();xy[xyIndex]+=this._thumbOffset;dd._setStartPosition(xy);dd.set('activeHandle',dd.get('dragNode'));dd.start();dd._alignNode([e.pageX,e.pageY]);}},syncUI:function(){this.get(CONTENT_BOX).removeClass(C_IMAGE_ERROR);var img=this.get(THUMB_IMAGE);if(this._isImageLoading(img)){this._scheduleSync();}else{this._ready(img,!this._isImageLoaded(img));}},_scheduleSync:function(){var img,handler;if(!this._stall){this._disabled=this.get(DISABLED);this.set(DISABLED,true);this._stall=this.on(DISABLED_CHANGE,this._stallDisabledChange);img=this.get(THUMB_IMAGE);handler=Y.bind(this._imageLoaded,this,img);img.on('load',handler);img.on('error',handler);}},_stallDisabledChange:function(e){this._disabled=e.newVal;e.preventDefault();},_imageLoaded:function(img,e){var error=(e.type.toLowerCase().indexOf('error')>-1);Y.later(0,this,function(){if(this._stall){this._stall.detach();}
this._stall=false;this._ready(img,error);this.set(DISABLED,this._disabled);});},_ready:function(img,error){var method=error?'addClass':'removeClass';this.get(CONTENT_BOX)[method](C_IMAGE_ERROR);this.fire(SYNC);},_defSyncFn:function(e){this._uiSetThumbSize();this._setThumbOffset();this._uiSetRailSize();this._setRailOffsetXY();this._setDDGutter();this._resetDDCacheRegion();this._setFactor();var val=this.get(VALUE);this.fire(POSITION_THUMB,{value:val,offset:this._convertValueToOffset(val)});this.get('boundingBox').toggleClass('');},_uiSetThumbSize:function(){var thumb=this.get(THUMB),dim=this._key.dim,img=this.get(THUMB_IMAGE),size;size=parseInt(thumb.getComputedStyle(dim),10);if(img&&this._isImageLoaded(img)){size=img.get(dim);}
this._thumbSize=size;},_setThumbOffset:function(){this._thumbOffset=floor(this._thumbSize/2);},_uiSetRailSize:function(){var rail=this.get(RAIL),thumb=this.get(THUMB),img=this.get(THUMB_IMAGE),dim=this._key.dim,size=this.get(RAIL_SIZE),setxy=false;if(parseInt(size,10)){rail.setStyle(dim,size);size=parseInt(rail.getComputedStyle(dim),10);}else{size=this.get(dim);if(parseInt(size,10)){setxy=true;rail.setStyle(dim,size);size=parseInt(rail.getComputedStyle(dim),10);}
size=max(size|0,parseInt(thumb.getComputedStyle(dim),10),parseInt(rail.getComputedStyle(dim),10));if(img&&this._isImageLoaded(img)){size=max(img.get(dim),size);}}
rail.setStyle(dim,size+PX);this._railSize=size;if(setxy){dim=this._key.offAxisDim;size=this.get(dim);if(size){rail.set(dim,size);}}},_setRailOffsetXY:function(){this._offsetXY=this.get(RAIL).getXY()[this._key.xyIndex]+
this.get(MIN_GUTTER);},_setDDGutter:function(){var gutter=this._key.xyIndex?this.get(MIN_GUTTER)+" 0 "+this.get(MAX_GUTTER):"0 "+this.get(MAX_GUTTER)+" 0 "+this.get(MIN_GUTTER);this._dd.con.set('gutter',gutter);},_resetDDCacheRegion:function(){this._dd.con._cacheRegion();},_setFactor:function(){var range=this._railSize-this._thumbSize-
this.get(MIN_GUTTER)-this.get(MAX_GUTTER);this._factor=this._railSize?(this.get(MAX)-this.get(MIN))/range:1;},getValue:function(){return this.get(VALUE);},setValue:function(val){this.set(VALUE,val);},_validateNewAxis:function(v){return isString(v)&&'xXyY'.indexOf(v.charAt(0))>-1;},_validateNewMin:function(v){return isNumber(v);},_validateNewMax:function(v){return isNumber(v);},_validateNewValue:function(v){var min=this.get(MIN),max=this.get(MAX);return isNumber(v)&&(min<max?(v>=min&&v<=max):(v>=max&&v<=min));},_validateNewRail:function(v){return!this.get(RENDERED)||v;},_validateNewThumb:function(v){return!this.get(RENDERED)||v;},_validateNewThumbImage:function(v){return!this.get(RENDERED)||v;},_validateNewRailSize:function(v){return isString(v)&&(v==='0'||/^\d+(?:p[xtc]|%|e[mx]|in|[mc]m)$/.test(v));},_setAxisFn:function(v){return v.charAt(0).toLowerCase();},_setRailFn:function(v){return Y.get(v)||null;},_setThumbFn:function(v){return Y.get(v)||null;},_setThumbImageFn:function(v){return v?Y.get(v)||Y.Node.create('<img src="'+v+'" alt="Slider thumb">'):null;},_onDDStartDrag:function(e){this._setRailOffsetXY();this.fire(SLIDE_START,{ddEvent:e});},_onDDDrag:function(e){this.fire(THUMB_DRAG,{ddEvent:e});},_defThumbDragFn:function(e){var before=this.get(VALUE),val=e.ddEvent[this._key.eventPageAxis]-this._offsetXY;val=this._convertOffsetToValue(val);if(before!==val){this.set(VALUE,val,{ddEvent:e.ddEvent});}},_onDDEndDrag:function(e){this.fire(SLIDE_END,{ddEvent:e});},_defPositionThumbFn:function(e){this._uiPositionThumb(e.offset);},_uiPositionThumb:function(xy){var dd=this._dd,thumb=dd.get('dragNode'),hidden=thumb.ancestor(this._isDisplayNone);if(!hidden){dd._setStartPosition(dd.get('dragNode').getXY());dd._alignNode([xy,xy],true);}},_isDisplayNone:function(node){return node.getComputedStyle('display')==='none';},_afterValueChange:function(e){if(!e.ddEvent){var xy=this._convertValueToOffset(e.newVal);this.fire(POSITION_THUMB,{value:e.newVal,offset:xy});}},_convertValueToOffset:function(v){return round((v-this.get(MIN))/this._factor)+this._offsetXY;},_convertOffsetToValue:function(v){return round(this.get(MIN)+(v*this._factor));},_afterThumbChange:function(e){var thumb;if(this.get(RENDERED)){if(e.prevValue){e.prevValue.get('parentNode').removeChild(e.prevValue);}
this._initThumb();thumb=this.get(THUMB);this._dd.set('node',thumb);this._dd.set('dragNode',thumb);this.syncUI();}},_afterThumbImageChange:function(e){if(this.get(RENDERED)){if(e.prevValue){e.prevValue.get('parentNode').removeChild(e.prevValue);}
this._initThumbImage();this.syncUI();}},_afterMinChange:function(e){this._refresh(e);},_afterMaxChange:function(e){this._refresh(e);},_afterRailSizeChange:function(e){this._refresh(e);},_afterDisabledChange:function(e){if(this._dd){this._dd.set('lock',e.newVal);}},_refresh:function(e){if(e.newVal!==e.prevVal&&this.get(RENDERED)){this.syncUI();}},_isImageLoading:function(img){return img&&!img.get(COMPLETE);},_isImageLoaded:function(img){if(img){var w=img.get('naturalWidth');return img.get(COMPLETE)&&(!isNumber(w)?img.get(WIDTH):w);}
return true;}});Y.Slider=Slider;},'3.0.0',{requires:['widget','dd-constrain']});