<?php
   /**
    * WPИ-XM Server Stack - Webinterface
    * Jens-André Koch © 2010 - onwards
    * http://wpn-xm.org/
    *
    *        _\|/_
    *        (o o)
    +-----oOO-{_}-OOo------------------------------------------------------------------+
    |                                                                                  |
    |    LICENSE                                                                       |
    |                                                                                  |
    |    WPИ-XM Serverstack is free software; you can redistribute it and/or modify    |
    |    it under the terms of the GNU General Public License as published by          |
    |    the Free Software Foundation; either version 2 of the License, or             |
    |    (at your option) any later version.                                           |
    |                                                                                  |
    |    WPИ-XM Serverstack is distributed in the hope that it will be useful,         |
    |    but WITHOUT ANY WARRANTY; without even the implied warranty of                |
    |    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the                 |
    |    GNU General Public License for more details.                                  |
    |                                                                                  |
    |    You should have received a copy of the GNU General Public License             |
    |    along with this program; if not, write to the Free Software                   |
    |    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA    |
    |                                                                                  |
    +----------------------------------------------------------------------------------+
    *
    * @license    GNU/GPL v2 or (at your option) any later version..
    * @author     Jens-André Koch <jakoch@web.de>
    * @copyright  Jens-André Koch (2010 - 2012)
    * @link       http://wpn-xm.org/
    */

# common bootstrap file with constants, etc.
include __DIR__ . '/php/bootstrap.php';
include WPNXM_TEMPLATE . 'header.php';

# Functions to display Projects and Tools directories
include WPNXM_PHP_DIR . 'projects.php';
$projects = new Projects();
?>

     <h2 class="heading">Projects and Tools</h2>

        <div class="left-box">
            <div class="cs-message">
                <div class="cs-message-content">
                    <h2>Projects (<?php echo $projects->getNumberOfProjects(); ?>)</h2>
                    <?php $projects->listProjects(); ?>
                </div>
            </div>
        </div>

        <div class="right-box">
            <div class="cs-message">
                <div class="cs-message-content">
                    <h2>Tools (<?php echo $projects->getNumberOfTools(); ?>)</h2>
                    <?php $projects->listTools(); ?>
                </div>
            </div>
        </div>

<?php include WPNXM_TEMPLATE . 'footer.php'; ?>