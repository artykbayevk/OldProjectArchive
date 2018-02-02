<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'The MIT License (MIT)

Copyright (c) 2014 Dmitry Ponomarev (email: ponomarev.dev@gmail.com)

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
the Software, and to permit persons to whom the Software is furnished to do so,
subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
',
    'readme' => '=== Bootstrap ===
Extra Version: 1.0.23-pl
Requires at least: Revolution 2.2.x
Contributor: earthperson (Dmitry Ponomarev) <ponomarev.dev@gmail.com>
Donate link: 
Contributor Website: http://earthperson.info
Extra Website: http://modx.com/extras/package/bootstrap
Extra GitHub page: https://github.com/earthperson/MODX-Bootstrap
Tags: bootstrap, twitter bootstrap, template, style
License: The MIT License (MIT)
License URI: http://opensource.org/licenses/MIT

== Description ==

Extra for starting with Twitter Bootstrap - open source front-end framework. This extra is especially useful for MODX Revo beginners and/or for the blank (fresh) MODX Revo installation with Twitter Bootstrap framework in the future.

Dependencies (will be installed automatically): BreadCrumb, If, Wayfinder.

You can go to the System Settings and set setting bootstrap.dropdown_disabled to 0 or 1. If equal to 1 then the upper menu item that has child pages will be possible to click and go to the corresponding page.

== Installation ==

Install via Package Management. Use the BootstrapTemplate for your resources (pages).
',
    'changelog' => 'Changelog file for Bootstrap.

Bootstrap 1.0.23-pl
====================================
- Updated bootstrap/dist to v3.3.6

Bootstrap 1.0.22-pl
====================================
- Updated bootstrap/dist to v3.3.5

Bootstrap 1.0.21-pl
====================================
- Updated bootstrap/vendor/js/jquery.js to v1.11.3
- Updated bootstrap/vendor/js/jquery.modern.js to v2.1.4

Bootstrap 1.0.20-pl
====================================
- Updated bootstrap/dist to v3.3.4

Bootstrap 1.0.19-pl
====================================
- Updated dependency BreadCrumb in the _build/subpackages to 1.4.3-pl

Bootstrap 1.0.18-pl
====================================
- Updated bootstrap/dist to v3.3.2

Bootstrap 1.0.17-pl
====================================
- Updated bootstrap/vendor/js/jquery.js to v1.11.2
- Updated bootstrap/vendor/js/jquery.modern.js to v2.1.3

Bootstrap 1.0.16-pl
====================================
- Updated bootstrap/dist to v3.3.1

Bootstrap 1.0.15-pl
====================================
- Updated bootstrap/dist to v3.3.0

Bootstrap 1.0.14-pl
====================================
- Added bootstrap/vendor/js/jquery.modern.js v2.1.1
- Added possibility to choose from modern jQuery 2.x and legacy jQuery 1.x during installation (not update or reinstall)
  via Package Management. It affects the chunk Head, and can be edited manually later.

Bootstrap 1.0.13-pl
====================================
- GitHub, source code related minor refactoring

Bootstrap 1.0.12-pl
====================================
- Removed donate link in the readme.txt

Bootstrap 1.0.11-pl
====================================
- Updated dependency BreadCrumb in the _build/subpackages to 1.4.2-pl

Bootstrap 1.0.10-pl
====================================
- Updated bootstrap/dist to v3.2.0
- Updated bootstrap/vendor/js/html5shiv.js to v3.7.2

Bootstrap 1.0.9-pl
====================================
- Updated bootstrap/vendor/js/jquery.js to v1.11.1

Bootstrap 1.0.8-pl
====================================
- Minor BootstrapTemplate cleanup
- Added URL of this extra at the bottom right of the chunk Footer
- Added donate link in the readme.txt

Bootstrap 1.0.7-pl
====================================
- This update is actual for new installation only, because templates and chunks are not overridden during extra update or reinstall
- Added lang="[[++cultureKey]]" instead of lang="en" in the BootstrapTemplate
- Updated BootstrapTemplate, chunk Head and style.css for new "Sticky footer" implementation

Bootstrap 1.0.6-pl
====================================
- Skip update templates and chunks during extra update or reinstall
- Setting bootstrap.dropdown_disabled equal to 1 by default

Bootstrap 1.0.5-pl
====================================
- Updated bootstrap/dist to v3.1.1

Bootstrap 1.0.4-pl
====================================
- Fixed bootstrap dist contents

Bootstrap 1.0.3-pl
====================================
- Updated readme

Bootstrap 1.0.3-beta-1
====================================
- Added lexicons
- Updated readme
- Fixed setting bootstrap.dropdown_disabled
- Zip up transport package via the Build script instead of the extra PackMan

Bootstrap 1.0.2-beta-1
====================================
- Updated readme

Bootstrap 1.0.1-beta-1
====================================
- Updated template BootstrapTemplate
- Updated chunk Header
- Added [[++site_url]] instead of "/" in the chunk Navbar
- Updated bootstrap/dist to v3.1.0
- Updated bootstrap/vendor/html5shiv.js to v3.7.0
- Updated bootstrap/vendor/respond.min.js to v1.4.2
- Updated bootstrap/vendor/jquery.js to v1.11.0
 
Bootstrap 1.0.0-beta-1
====================================
- Initial release
',
    'setup-options' => 'bootstrap-1.0.23-pl/setup-options.php',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '0515b7f6623361e0b65ac46200645ee6',
      'native_key' => 'bootstrap',
      'filename' => 'modNamespace/63a539c0c5616a6a0418fe4d111d49f8.vehicle',
      'namespace' => 'bootstrap',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => '624b3c86e8269b738c739f8be62351dd',
      'native_key' => '624b3c86e8269b738c739f8be62351dd',
      'filename' => 'xPDOTransportVehicle/8444f85d350d925eee4920a6a4cf92c9.vehicle',
      'namespace' => 'bootstrap',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => '5dcd30db0174de690a8c3d5eba0a38e3',
      'native_key' => '5dcd30db0174de690a8c3d5eba0a38e3',
      'filename' => 'xPDOTransportVehicle/750c382c674a33e7263615c36d13d1ec.vehicle',
      'namespace' => 'bootstrap',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => '5bdc9e002aec9c3be7a69fd70b242f4d',
      'native_key' => '5bdc9e002aec9c3be7a69fd70b242f4d',
      'filename' => 'xPDOTransportVehicle/77abc37147f44375e26b7cefaaed211c.vehicle',
      'namespace' => 'bootstrap',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '08d6712eab89705deb27d1206b03f8a1',
      'native_key' => 0,
      'filename' => 'modCategory/b1d3be32dd904e32eedfe99f386aa533.vehicle',
      'namespace' => 'bootstrap',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8f0eebf292dd207aaa6a39184ff45ef9',
      'native_key' => 'bootstrap.dropdown_disabled',
      'filename' => 'modSystemSetting/d0b5dfdbf762a4b206036f5f1d226f10.vehicle',
      'namespace' => 'bootstrap',
    ),
  ),
);