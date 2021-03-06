<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version details
 *
 * @package    theme
 * @subpackage bcu
 * @copyright  2014 Birmingham City University <michael.grant@bcu.ac.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */
 
?>

<footer id="page-footer">
    <div id="course-footer"><?php //echo $OUTPUT->course_footer(); ?></div>
    
    <div class="container">
        <div class="row-fluid">
        </div>
    </div>
    
    
    <div class="info container2 clearfix">
        <div class="container">
            <div class="row-fluid">
                <div>
                   <p style="text-align: center"><span style="font-size: 14.44px;">Programa de Entornos Virtuales de Aprendizaje (ProEVA) - Departamento de Apoyo Técnico Académico (DATA) - Comisión Sectorial de Enseñanza (CSE) - Universidad de la República (Udelar) - <a href="http://proeva.edu.uy/portada/articuladores-y-encargados-de-los-eva-por-servicio/"  style="color: white;">Contacto</a></span></p>
                    <?php // echo $html->footnote; 
                     ?>
                    <?php //echo $OUTPUT->standard_footer_html(); 
                 ?>
                </div>
                <!--div class="span6 helplink">
                    <?php echo $OUTPUT->page_doc_link(); ?>
                </div>
                <div class="span3">
                    <?php echo $OUTPUT->standard_footer_html(); ?>
                </div-->
            </div>


<div class="row-fluid"><div align="center">
<a href="http://proeva.edu.uy" target="_blank">
<img src="http://164.73.2.138/permalinks/eva/logo_pie_proeva.svg" width="150">
</a>
</div></div>


        </div>
    </div>
    
</footer>
<a class="back-to-top" href="#top" ><i class="fa fa-angle-up "></i></a>
    <?php echo $OUTPUT->standard_end_of_body_html() ?>

</div>
<?php echo $PAGE->theme->settings->jssection; ?>
</body>
</html>
