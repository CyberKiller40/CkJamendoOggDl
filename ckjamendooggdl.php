#!/usr/bin/php -q

<?php

/*
	CkJamendoOggDl - downloads albums from jamendo.com in OGG Vorbis format
	Copyright (C) 2011 Łukasz "Cyber Killer" Korpalski

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

if($_SERVER["argc"] > 1)
{
	for($num=1; $num<=($_SERVER["argc"]-1); $num++)
	{
		preg_match('/[\d]+/', $_SERVER["argv"][$num], $albumid);
		system("wget --trust-server-names http://www.jamendo.com/get/album/id/album/archiverestricted/redirect/" . $albumid[0] . "/?p2pnet=bittorrent\&are=ogg3");
	}
}
else
{
	print("Jamendo Ogg downloader. Version 1.1 by Cyber Killer\n");
	print("Get the latest version at http://digital.dharkness.info/CkJamendoOggDl\n\n");
	print("Usage:\n");
	print($_SERVER["argv"][0] . " <albumid or album URL> [albumid or album URL] [...]\n");
}

?>
