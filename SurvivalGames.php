<?php

/*
__PocketMine Plugin__
name=SurvivalGames
version=0.1
author=Junyi00,Hexdro
class=SurvivalGames
apiversion=11
*/

class SurvivalGames implements Plugin{

	private $api, $path;
	
	public function __construct(ServerAPI $api, $server = false){
		$this->api = $api;
	}
	
	public function init(){
		$this->path = $this->api->plugin->configPath($this); 
		$this->createConfig();	
	}
	
	public function __destruct() {}
	
}
