<?php
defined('MOODLE_INTERNAL') || die();

function local_onecourseredirect_before_http_headers() {
    global $USER, $PAGE, $DB, $CFG;

    if (!isloggedin() || isguestuser() || CLI_SCRIPT || AJAX_SCRIPT) {
        return;
    }

    if ($PAGE->pagetype !== 'site-index') {
        return;
    }

    if (is_siteadmin($USER)) {
        return;
    }

    require_once($CFG->dirroot.'/enrol/locallib.php');
    $usercourses = enrol_get_users_courses($USER->id, true);
    $coursecount = count($usercourses);

    if ($coursecount === 1) {
        $course = reset($usercourses);
        $url = new moodle_url('/course/view.php', ['id' => $course->id]);
        redirect($url);
    }
}