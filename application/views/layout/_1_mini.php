<!DOCTYPE html>
<!--
Author: Apogee Digitech
Website: <?= base_url() ?>
Contact: nobleui123@gmail.com
Purchase: <?= base_url() ?>
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">

<head>
	<?php $this->load->view('components/theme/_head'); ?>
	<title><?= (isset($page['title']))? $page['title']: $CLIENT_NAME . " • " . APP_NAME ?></title>
</head>

<body>
