<?php
require(__DIR__ . '/../../config.php');

$PAGE->set_url(new moodle_url('/local/helloworld/index.php'));

$PAGE->set_context(context_system::instance());

$PAGE->set_title(get_string('pluginname', 'local_helloworld'));

$PAGE->set_pagelayout('standard');

$PAGE->set_heading(  get_string('helloworld', 'local_helloworld') .'page heading');
echo $OUTPUT->header();
?>
<div class="row">
    <div class="col-md-6 mx-auto py-2">
        <h1><?= get_string('helloworld', 'local_helloworld') ?>!</h1>
    </div>
</div>

<?php echo $OUTPUT->footer(); ?>
