<?php
/**
 * @version $Id$
 * Kunena Component
 * @package Kunena
 *
 * @Copyright (C) 2008 - 2011 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 *
 * Based on FireBoard Component
 * @Copyright (C) 2006 - 2007 Best Of Joomla All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.bestofjoomla.com
 *
 * Based on Joomlaboard Component
 * @copyright (C) 2000 - 2004 TSMF / Jan de Graaff / All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @author TSMF & Jan de Graaff
 **/
defined( '_JEXEC' ) or die();

require_once( JApplicationHelper::getPath( 'toolbar_html' ) );

$task = JRequest::getCmd( 'task' );

switch ($task)
{
    case "cancel":
        CKunenaToolbar::DEFAULT_MENU();

        break;

    case "showCss":
        CKunenaToolbar::CSS_MENU();

        break;

    case "profiles":
        CKunenaToolbar::_PROFILE_MENU();

        break;

    case "instructions": break;

    case "newmoderator":
        CKunenaToolbar::_NEWMOD_MENU();

        break;

    case "userprofile":
        CKunenaToolbar::_EDITUSER_MENU();

        break;

    case "moveusermessages":
        CKunenaToolbar::_MOVEUSERMESSAGES_MENU();

        break;

    case "showprofiles":
        CKunenaToolbar::_PROFILE_MENU();

        break;

	case "showsmilies":
        CKunenaToolbar::_SHOWSMILEY_MENU();

        break;

    case "editsmiley":
        CKunenaToolbar::_EDITSMILEY_MENU();

        break;

    case "newsmiley":
        CKunenaToolbar::_NEWSMILEY_MENU();

        break;

	case "showTemplates":
        CKunenaToolbar::_SHOWTEMPLATES_MENU();

        break;

	case "editKTemplate":
        CKunenaToolbar::_EDITKTEMPLATE_MENU();

        break;

	case "chooseCSSTemplate":
        CKunenaToolbar::_CHOOSECSS_MENU();

        break;

	case "editTemplateCSS":
        CKunenaToolbar::_EDITCSS_MENU();

        break;

    default:

        CKunenaToolbar::BACKONLY_MENU();

        break;

}

?>