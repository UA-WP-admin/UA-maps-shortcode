## Synopsis

This plugin was created for the University of Arkansas. It creates a shortcode for use within WordPress that will display an embedded map to a named location on the Fayetteville campus.

## Usage

The shortcode uses the following format: `[ua-maps building="1" width="500" height="300"]`
The building id can be found by visiting the UARK building directory: http://campusmaps.uark.edu/buildings
Select the building you wish to map to.
The building code will be in the URL after "&bldg_code=".

## Motivation

This plugin allows users on the UARK WordPress networks to add a shortcode within their site content that will display an embedded google map to a specified location on campus. The code embeds an iframe into the content. Iframes cannot be added to content directly by site admins or editors within a multisite network. This plugin allows them to add the map without needing assistance from the network super-admin.

## Installation

1. Upload the zipped plugin files to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Plugin should be network activated so that it works on all sites without needing to be activated by the individual site admins.

## License

The UA Maps Shortcode is licensed under the GPL v2 or later.

    This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License, version 2, as published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

    You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA

A copy of the license is included in the root of the plugin’s directory. The file is named LICENSE.
