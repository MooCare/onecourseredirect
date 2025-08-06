# Course Auto-Redirect Plugin for Moodle

**Redirects students to their course if they are enrolled in only one.**  
Developed in 2025 by [MooCare](https://www.moocare.fr) 🐄

---

## Description ##

This Moodle local plugin improves the student experience by eliminating unnecessary navigation:

- Automatically redirects students to their course after login if they are enrolled in **only one**.
- The **Home** button (typically pointing to the Dashboard or Site Home) will redirect back to their course.
- Has no effect on users enrolled in multiple courses or users with elevated roles (e.g., teachers, managers, admins).


## Plugin Type ##

- Type : Local plugin
- Name: local_onecourseredirect

## Installation ##

Download or clone the plugin into the `local/` directory of your Moodle installation:

git clone https://github.com/MooCare/onecourseredirect.git

## Configuration ##

There is no settings page. Once installed, the plugin activates automatically.

## How It Works ##
	1.	During login:
	•	The plugin checks if the current user is:
	•	A student.
	•	Enrolled in exactly one visible course.
	•	If so, the user is redirected to the course view page (/course/view.php?id=XX).

	2.	Redefining the Home Button:
	•	The plugin intercepts the default home URL for qualifying students and points it back to their course page.
	•	This affects the Dashboard, Site Home, and the logo link (depending on theme behavior).

## Use Cases ##
- Training platforms with one-course-per-student structures.
- Private academies or corporate training platforms with focused enrollment.
- Minimizing confusion and navigation for learners in simplified environments.

## Requirements ##
- Moodle 4.0 or higher (tested up to 4.5)
- PHP 7.4 or higher (depending on Moodle version)

## Licence ##
- This plugin is open source and distributed under the GNU GPL v3.

