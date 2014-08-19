hykw-multi-device-switcher-parasitic
====================================

parasitic multi-device-switcher wordpress plugin

## Description

It just returns the user-agent string with a function in multi-device-switcher plugin.

## Usage
You just calls hykwMDSP::getDevice(). it returns the followings:

    hykwMDSP::SP
    hykwMDSP::TABLET
    hykwMDSP::MOBILE
         -> cellular phone
    hykwMDSP::OTHERS
         -> pc, bot, etc...

## Example
    function isSmartPhone()
    {
      switch (hykwMDSP::getDevice()) {
      case hykwMDSP::SP:
        return TRUE;
      }

      return FALSE;
    }

## License
MIT
