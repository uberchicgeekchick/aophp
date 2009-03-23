<?php
	/*
	 * Unless explicitly acquired and licensed from Licensor under another
	 * license, the contents of this file are subject to the Reciprocal Public
	 * License ("RPL") Version 1.5, or subsequent versions as allowed by the RPL,s
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
	//namespace aophp;
	
	class aophp__xml{
		public $xml;
		public $app;
		public $content;
		
		public function __construct(){
			$this->load_app();
			$this->load_xml();
			$this->validate_app();
			$this->load();
		}//__construct
		
		public function load_app(){
			$this->app="projects";
			$this->content="life";
			
			if(!( (isset($_GET['app'])) && $_GET['app'] ))
				$_GET['app']=$this->app;
			
			$applications=array(
				'episodes', 'specials', 'blogs', 'projects',
				'total'=>4
			);
			
			for($n=0; $n<$applications['total']; $n++ )
				if( (isset( $_GET[ $applications[$n] ] )) ){
					$this->app=$applications[$n];
					$this->content=$_GET[ $this->app ];
					return 1;
				}
			return 0;
		}//set_category
		
		
		
		private function load_xml(){
			if(! (isset($_GET['xml'])) )
				return $this->xml=new aophp__xml__xhtml();
			
			switch($_GET['xml']){
				case 'rss': return $this->xml=new aophp__xml__feeds__rss();
				case 'atom': return $this->xml=new aophp__xml__feeds__atom();
				case 'xhtml': default: return $this->xml=new aophp__xml__xhtml();
			}
		}//set_xml
		
		
		
		private function validate_app(){
			switch($_GET['app']){
			case 'projects':
				$this->app="oss-canvas";
				break;
			case 'episodes':
				$this->app="speakingOUT";
				break;
			default:
				return -1;
			}//switch
			$this->content_uri="./apps/{$this->app}/core.php";
		}//load_app
		
		
		
		public function add_tag( $tag, $attributes, $value ){
			switch( $tag ){
				case "pubDate":
					$value=date( "r", (mktime()) );
				break;
			}
			printf( "<%s%s%s>%s%s", $tag, ( $attributes!="" ? " {$attributes}" : "" ), ( $value=="" ?"/>" :">" ), ( $value=="" ?"" :"</{$tag}>" ) );
		}//paint_tag
		
		
		
		public function load(){
			require_once("./xml/{$this->xml->doctype}/header.php");
			require_once("./xml/{$this->xml->doctype}/body.php");
			require_once("./xml/{$this->xml->doctype}/footer.php");
		}//load
		
	}
