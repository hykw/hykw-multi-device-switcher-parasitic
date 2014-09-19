hykw-multi-device-switcher-parasitic
====================================

# -----Warning-----

As of Version 1.3.0, multi-device-switcher plugin has supported `is_multi_device()` function. I'll use the function in multi-device-switcher, this plugin won't be maintained any more!

    c.f.
      http://blog.thingslabo.com/archives/000400.html

## Usage: `is_multi__device()`
    function isSmartPhone()
    {
      if (is_multi_device('smart'))
        return TRUE;
    
      return FALSE;
    }

