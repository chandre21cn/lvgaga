<?php
class CI_Redis
{
	public static $redis;
	public function GetRedis(){
		if( isset($this->redis) && get_class($this->redis)=='Redis'){
			return $this->redis;
		}
		$ci = &get_instance();
		$ci->config->load('redis');
		$ip = $ci->config->item('ip');
		$port = $ci->config->item('port');
		$this->redis = new Redis();
		$this->redis->connect($ip , $port);
		return $this->redis;
	}
}