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
	
	class AOPHP__XML__RSS__Status{
		private $RSS_URI;
		private $Cache_File;
		private $Max_Tweets;
		private $User_Name;
		
		public $My_Tweets;
		
		public function __construct($User_Name, $RSS_URI, $Max_Tweets=40){
			$this->RSS_URI=$RSS_URI;
			$this->Max_Tweets=$Max_Tweets;
			$this->My_Tweets="";
			$this->User_Name=$User_Name;
			
			$this->Load_My_Tweets();
		}//__construct
		
		private function Load_Cache(){
		}//Load_Cache
		
		private function Load_My_Tweets(){
			$this->Get_Tweets();
			$this->Parse_Tweets();
			$this->Load_Cache();
			$this->Save_Tweets();
		}//Load_My_Tweets
		
		private function Get_Tweets(){
			$this->My_Tweets="";
			
			if( !($My_Tweets_fp=fopen($this->RSS_URI, 'r')) )
				return;
			
			while( !(feof($My_Tweets_fp)) ) $this->My_Tweets.=fread($My_Tweets_fp, 4048);
			
			fclose($My_Tweets_fp);
		}//Get_Tweets
		
		private function Parse_Tweets(){
			if( !($this->My_Tweets) ) return;
			
			$this->My_Tweets=preg_replace("/[\r\n]+/", "", $this->My_Tweets);
			$this->My_Tweets=preg_replace("/(<\/item>)/", "$1\n", $this->My_Tweets);
			$this->My_Tweets=preg_replace(
				"/^.*<item>.*<title>[^<]+<\/title>.*<description>{$this->User_Name}:\ ([^<]+)<\/description>.*<pubDate>([^<]+)<\/pubDate>.*<guid>[^<]+<\/guid>.*<link>([^<]+)<\/link>.*<\/item>$/im", 
				"\n\t\t\t\t<li><a href='$3'>$1</a> &ndash; @$2</li><br/>\n\t\t\t\t",
				$this->My_Tweets
			);
		}//Parse_Tweets
		
		public function Display_Tweets(){
			print("\n\t\t\t<ul>{$this->My_Tweets}\n\t\t\t</ul>");
		}//Display_Tweets
		
		private function Save_Tweets(){
		}//Save_Tweets
		
	}//AOPHP__API__Twitter__RSS
	
	$Twitters_RSS=new AOPHP__XML__RSS__Status("uberChick", "http://twitter.com/statuses/user_timeline/8685112.rss");
	
print <<<BLOC
			<!-- bloc starts -->
			<div class='bloc_tweets'>
				<div class='bloc_title'>
					<a href='http://twitter.com/uberChick' class='bloc_title'>@uberChick</>::MyTweets
				</div><div class='bloc_content'>
					{$Twitters_RSS->My_Tweets}
					&nbsp;
				</div>
				<div class='bloc_extra'>&nbsp;</div>
			</div>
			<!-- bloc ends -->
BLOC;
?>
