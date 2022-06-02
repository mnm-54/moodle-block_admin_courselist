<p align="center">
  <a href="" rel="noopener">
 <img width=200px height=200px src="https://moodle.org/theme/image.php/moodleorg/theme_moodleorg/1653695412/moodle_logo_small" alt="Project logo"></a>
</p>

<h3 align="center">Moodle-Block Admin Courselist Plugin</h3>

<div align="center">

[![Status](https://img.shields.io/badge/status-active-success.svg)]()
[![GitHub Issues](https://img.shields.io/badge/issues-0-brightgreen)](https://github.com/mnm-54/moodle-block_admin_courselist/issues)
[![GitHub Pull Requests](https://img.shields.io/badge/pull%20request-0-yellowgreen)](https://github.com/mnm-54/moodle-block_admin_courselist/pulls)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](/LICENSE)

</div>

---

<p align="center"> List courses to help upload student images for attandances.
    <br> 
</p>

## 📝 Table of Contents

- [About](#about)
- [Getting Started](#getting_started)
- [Deployment](#deployment)
- [Usage](#usage)
- [Built Using](#built_using)
- [TODO](../TODO.md)
- [Contributing](../CONTRIBUTING.md)
- [Authors](#authors)

## 🧐 About <a name = "about"></a>

List all the available courses to admin. And admin can view the list of students through this plugin. I tlinks another local plugin

## 🏁 Getting Started <a name = "getting_started"></a>

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See [deployment](#deployment) for notes on how to deploy the project on a live system.

### Prerequisites

You need to have 2 other plugins instelled in you moodle system to to have it working perfectly.

- `local_participant_image_upload` for uploading student images according to courses

```
https://github.com/mnm-54/moodle-local_participant_image_upload
```

- `block_face_recognition_student_attendance` for student face recognition attandance

```
https://github.com/mnm-54/moodle-block_face_recognition_student_attendance
```

### Installing

A step by step series of examples that tell you how to get a development env running.

Say what the step will be

- Go to moodle blocks folder

```
cd {moodle folder}/blocks
```

replace {moodle folder} with the filepath of your moodle system

- git clone the repo

```
git clone https://github.com/mnm-54/moodle-block_admin_courselist.git
```

- rename the folder to `admin_courselist`
- Now in your moodle site go to

```
Dashboard->Site Administration
```

- Now follow the instruction there to complete the installation

## 🎈 Usage <a name="usage"></a>

- Add the block in your dashboard . goto

```
Dashboard->Customize this page->Add a block
```

- Select Admin courselist
- It will view all the available courses with a button to access the local plugin `local_participant_image_upload`

## 🚀 Deployment <a name = "deployment"></a>

No additional notes about how to deploy this on a live system.

## ⛏️ Built Using <a name = "built_using"></a>

- [PHP](https://www.php.net/) - Initial coding
- [Moodle](https://moodle.com/) - Web Framework

## ✍️ Authors <a name = "authors"></a>

- [@mnm-54](https://github.com/mnm-54) - Initial work

See also the list of [contributors](https://github.com/mnm-54/moodle-block_admin_courselist/graphs/contributors) who participated in this project.
