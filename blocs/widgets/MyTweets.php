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
	
	class AOPHP__API__Twitter{
		private $URI;
		private $Cache_File;
		private $Max_Tweets;
		
		public $My_Tweets;
		
		public function __construct($URI, $Max_Tweets=40){
			$this->URI=$URI;
			$this->Max_Tweets=$Max_Tweets;
			$this->My_Tweets="";
			
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
			
			if( !($My_Tweets_fp=fopen($this->URI, 'r')) )
				return;
			
			while( !(feof($My_Tweets_fp)) ){
				$this->My_Tweets.=fread($My_Tweets_fp, 30000);
			}
			fclose($My_Tweets_fp);
		}//Get_Tweets
		
		private function Parse_Tweets(){
			if( !($this->My_Tweets) ) return;
			
			$Tweets_Array=preg_split("/.*<item>(.*)<\/item>.*/im", $this->My_Tweets, -1, PREG_SPLIT_NO_EMPTY );
			$Total_Tweets=count($Tweets_Array);
			for($Tweet=0; $Tweet<$Total_Tweets; $Tweet++)
				$Tweets_Array[$Tweet]=preg_replace("/.*<description>([^<]+)<\/description>.*<pubDate>([^<]+)<\/pubDate>.*<link>([^<]+)<\/link>.*/im", "<p><a href='$2'>$1</a></p><p>@$3</p><br/><br/>", $Tweets_Array[$Tweet]);
			
			$this->My_Tweets=implode("<br/>\t\t\t\n", $Tweets_Array);
		}//Parse_Tweets
		
		public function Display_Tweets(){
			print($this->My_Tweets);
		}//Display_Tweets
		
		private function Save_Tweets(){
		}//Save_Tweets
		
	}//AOPHP__API__Twitter
	
	$My_Tweets=new AOPHP__API__Twitter("http://twitter.com/statuses/user_timeline/8685112.rss");
	
print <<<BLOC
			<!-- bloc starts -->
			<div class='bloc'>
				<div class='bloc_title'>
					<a href='http://twitter.com/uberChick' class='bloc_title'>@uberChick</>::MyTweets
				</div><div class='bloc_content'>
					{$My_Tweets->My_Tweets}
					&nbsp;
				</div>
				<div class='bloc_extra'>&nbsp;</div>
			</div>
			<!-- bloc ends -->
BLOC;
?>
