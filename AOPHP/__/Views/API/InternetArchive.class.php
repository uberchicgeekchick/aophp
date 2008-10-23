<?php
	/*
	 * Unless explicitly acquired and licensed from Licensor under another
	 * license, the contents of this file are subject to the Reciprocal Public
	 * License ("RPL") Version 1.5, or subsequent versions as allowed by the RPL,
	 * and You may not copy or use this file in either source code or executable
	 * form, except in compliance with the terms and conditions of the RPL.
	 *
	 * All software distributed under the RPL is provided strictly on an "AS
	 * IS" basis, WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESS OR IMPLIED, AND
	 * LICENSOR HEREBY DISCLAIMS ALL SUCH WARRANTIES, INCLUDING WITHOUT
	 * LIMITATION, ANY WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR
	 * PURPOSE, QUIET ENJOYMENT, OR NON-INFRINGEMENT. See the RPL for specific
	 * language governing rights and limitations under the RPL.
	 */
	
	class AOPHP__Views__API__InternetArchive extends AOPHP__Views__API {
		private $Domain;
		
		public __construct(){
			$this->Domain="http://www.archive.org/";
		}
		
		public function login(){
			$form=sprintf("
			<form action='http://www.archive.org/login.php' method='post'>
				<input NAME='username' TYPE='text' id='username' value='' SIZE='26'>
				<input NAME='password' TYPE='PASSWORD' id='password' SIZE='26'>
				<input name='remember' type='checkbox' id='remember' value='CHECKED' checked></td>
				<input name='referer' type='hidden' id='referer' value=''>
				<input NAME='submit' TYPE='submit' id='submit' VALUE='Log in'>
			</form>
			");
		}//login
		
		public function create(){
			$form=sprintf("
				<form method='get' action='http://www.archive.org/create.php'>
					<input maxlength='100' name='title' value=''/>
					<input type='hidden' name='http' value='http'/>
					<input class='button' type='submit' value='Next'/>
				</form>
			");
		}//create
		
		public function upload(){
			$cURL_Data=array(
				'form'=>array(
					'action'=>sprintf("POST==%s", curl_exec($this->create( )) ),
					'enctype'=>"multipart/form-data",
				),
				'fieldset'=>array(
					'input'=>"identifier"
					'input'=>"title",//maxlength="1024"
					'textarea'=>"description",
					//Keyword(s)</b> separated by commas:
					'input'=>"subject",//maxlength="1024"
					'input'=>"creator",//maxlength="1024"
					'input'=>"field_default_licenseurl",//the http://creativecommons.org/ license's  url
					'input'=>"hidden",
					<input type="hidden" name="newccdeed"    id="newccdeed"/>
          <input type="hidden" name="newccname"    id="newccname"/>
          <input type="hidden" name="newccimage"   id="newccimage"/></td></tr>
  
   <tr>
     <td style="font-weight:bold;" class="req" width="100%">File to upload:</td>
     <td><input style="font-size:8pt;" type="file" size="80" name="uploadFile1" id="uploadFile1" onchange="mtpick();"/>
     <div id="more" style="display:none;">
                <input style="font-size:8pt;" type="file" size="80" name="uploadFile2" id="uploadFile2"/><br/>

                <input style="font-size:8pt;" type="file" size="80" name="uploadFile3" id="uploadFile3"/><br/>
                <input style="font-size:8pt;" type="file" size="80" name="uploadFile4" id="uploadFile4"/><br/>
                <input style="font-size:8pt;" type="file" size="80" name="uploadFile5" id="uploadFile5"/><br/>
                <input style="font-size:8pt;" type="file" size="80" name="uploadFile6" id="uploadFile6"/><br/>
                <input style="font-size:8pt;" type="file" size="80" name="uploadFile7" id="uploadFile7"/><br/>
                <input style="font-size:8pt;" type="file" size="80" name="uploadFile8" id="uploadFile8"/><br/>
                <input style="font-size:8pt;" type="file" size="80" name="uploadFile9" id="uploadFile9"/><br/>
                <input style="font-size:8pt;" type="file" size="80" name="uploadFile10" id="uploadFile10"/><br/>
              <div style="font-size:8pt; font-style:italic;">NOTE: You may upload different filetypes.  However, the <b>first</b> file you upload will be used to determine the collection the item will be a part of.</div>

     </div>
     <div id="addmore"><a href="#" onclick="document.getElementById('more').style.display='block'; document.getElementById('addmore').style.display='none'; return false;">Add more files</a></div>
     <div style="font-size:8pt; font-style:italic; padding:5 50 0 50;">NOTE: filenames with SPACE characters will be renamed to "camel case".<br/>For example, <nobr>"my LA roadtrip.mov"</nobr> will become "MyLaRoadtrip.mov"<br/>Letters, numbers, periods (.), dashes (-), or underscores (_) are ok, but other characters will be removed.</div>
     </td>
   </tr>

   <tr><td>Type of item:</td><td>
<div id="mtmovies" onclick="mtselect('movies');" style="border:1px dotted #FFFFEE; -moz-border-radius:15px; padding:10px; text-align:center; float:left;"><img src="http://www.archive.org/images/mediatype_movies.gif"/><br/>(movies)</div><div id="mtaudio" onclick="mtselect('audio');" style="border:1px dotted #FFFFEE; -moz-border-radius:15px; padding:10px; text-align:center; float:left;"><img src="http://www.archive.org/images/mediatype_audio.gif"/><br/>(audio)</div><div id="mttexts" onclick="mtselect('texts');" style="border:1px dotted #FFFFEE; -moz-border-radius:15px; padding:10px; text-align:center; float:left;"><img src="http://www.archive.org/images/mediatype_texts.gif"/><br/>(texts)</div><div id="mtother" onclick="mtselect('other');" style="border:1px dotted #FFFFEE; -moz-border-radius:15px; padding:10px; text-align:center; float:left;"><img src="http://www.archive.org/images/mediatype_other.gif"/><br/>(other)</div><br clear="all"/><input type="hidden" id="mediatypeSel" name="mediatype"/>   </td></tr> 

  </tbody></table>


  <input type="hidden" name="MAX_FILE_SIZE" value="300000000"/>
       
  <div style="margin:30px; padding:20px; text-align:center;">

    <div class="req" style="float:right; text-align:right; font-style:italic;">* Denotes field is required.</div>
    <div style="text-align:left;">This is a test item <br/></i>(remove after 30 days):</i><input id="testing" type="checkbox" name="testing" onchange="testinputs()"  /></div>
       
  <input style="font-size:12pt;" class="button" type="submit" name="submit" value="Upload files"/>
			");
		}//upload
		
	}//AOPHP__Views__API__Archive.org
?>