<?php
/**
 * @package HYKW Multi Device Switcher parasitic Plugin
 * @version 0.1
 */
/*
Plugin Name: HYKW Multi Device Switcher parasitic Plugin
Plugin URI: https://github.com/hykw/hykw-multi-device-switcher-parasitic
Description: Multi Device Switcher のデバイス判定機能を利用するだけのプラグイン
Author: hitoshi-hayakawa
Version: 0.1
*/

class hykwMDSP
{
  const SP = 'smart';
  const TABLET = 'tablet';
  const MOBILE = 'mobile';
  const OTHERS = 'others';

  public static function getDevice()
  {
    $obj = new Multi_Device_Switcher();
    $device = $obj->device;
    switch($device) {
	case '':
	  return self::OTHERS;
	case self::SP:
	case self::TABLET:
	case self::MOBILE:
	  return $device;
    }
    
    return self::OTHERS;
  }
}
