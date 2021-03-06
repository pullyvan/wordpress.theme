<?php

/**
 * "Front row" thing on the homepage, immediately after the carousel
 */

namespace EPFL\STI\Theme\Widgets;

if (! class_exists('WP_Widget')) {
  die('Access denied.');
}

require_once(dirname(dirname(__FILE__)) . "/inc/i18n.php");
use function \EPFL\STI\Theme\___;

require_once(dirname(dirname(__FILE__)) . "/inc/epfl.php");
use function EPFL\STI\get_current_language;
use function EPFL\STI\get_institute;

class MasterThesisPosters extends \WP_Widget
{
  public function __construct()
  {
    parent::__construct(
      'EPFL_STI_MasterThesisPosters', // unique id
      ___('EPFL STI Master Thesis Posters'), // widget title
      // additional parameters
      array(
        'description' => ___('Shows a list of preview images and links to Completed Master Theses - can send values for: searchcluster, institute, year')
      )
    );
  }

  public function widget($args, $config)
  {
    echo $args['before_widget'];
    $cl = get_current_language();
    ?>
    <div class="container">
<?php 

$incoming_json=file_get_contents("https://stisrv13.epfl.ch/collaborations/clusters/mastersthesisposters.php");

$incoming=json_decode($incoming_json);

echo "<table>";
foreach ($incoming as $thesis) {
    printf('<tr><td valign=top><a href="https://stisrv13.epfl.ch/masters/img/%s.pdf"><img width=180 src="https://stisrv13.epfl.ch/masters/img/%s.png"> </a></td><td valign="top"><a href="https://stisrv13.epfl.ch/masters/img/%s.pdf">%s</a><br>%s %s<br></td></tr>',
           $thesis->master_id, $thesis->master_id, $thesis->master_id,
           $thesis->title,
           $thesis->firstname, $thesis->surname,
           $thesis->description);
}
echo "</table>";
?>


    </div>
    <?php
    echo $args['after_widget'];
  }  // public function widget
}

register_widget(MasterThesisPosters::class);
