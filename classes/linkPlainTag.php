<?php
/*
PHPDoctor: The PHP Documentation Creator
Copyright (C) 2004 Paul James <paul@peej.co.uk>

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

require_once('seeTag.php');

/** Represents an inline link tag.
 *
 * @package PHPDoctor.Tags
 * @version $id$
 */
class linkPlainTag extends seeTag {

	/**
	 * Constructor
	 *
	 * @param str text The contents of the tag
	 * @param str[] data Reference to doc comment data array
	 * @param rootDoc root The root object
	 */
	function linkPlainTag($text, &$data, &$root) {
		$explode = preg_split('/[ \t]+/', $text);
		$link = array_shift($explode);
		if ($link) {
			$this->_link = $link;
			$text = join(' ', $explode);
		} else {
			$this->_link = NULL;
		}
		parent::tag('@linkplain', $text, $root);
	}

	/** Return true if this Taglet is used in constructor documentation. */
	function inConstructor() {
		return TRUE;
	}

	/** Return true if this Taglet is used in field documentation. */
	function inField() {
		return TRUE;
	}

	/** Return true if this Taglet is used in method documentation. */          
	function inMethod() {
		return TRUE;
	}

	/** Return true if this Taglet is used in overview documentation. */
	function inOverview() {
		return TRUE;
	}

	/** Return true if this Taglet is used in package documentation. */
	function inPackage() {
		return TRUE;
	}

	/** Return true if this Taglet is used in class or interface documentation. */
	function inType() {
		return TRUE;
	}

	/** Return true if this Taglet is an inline tag. */
	function isInlineTag() {
		return TRUE;
	}

}

?>