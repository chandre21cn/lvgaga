<?php
class Ip
{
	public function RealIP() {
		$cip = getenv ( 'HTTP_CLIENT_IP' );//代理 IP
		$xip = getenv ( 'HTTP_X_FORWARDED_FOR' );//真实 IP
		$rip = getenv ( 'REMOTE_ADDR' );//最后一个代理服务器IP
		$srip = $_SERVER ['REMOTE_ADDR'];
		if ($cip && strcasecmp ( $cip, 'unknown' )) {
		$onlineip = $cip;
		} elseif ($xip && strcasecmp ( $xip, 'unknown' )) {
		$onlineip = $xip;
		} elseif ($rip && strcasecmp ( $rip, 'unknown' )) {
		$onlineip = $rip;
		} elseif ($srip && strcasecmp ( $srip, 'unknown' )) {
		$onlineip = $srip;
		}
		return $onlineip;
	}
}