<?php

/**
 * MyBB 1.8 Türkçe Dil Paketi
 * Copyright © 2024 MyBB Pro, Tüm Hakları Saklıdır.
 * 
 * Website: https://mybb.pro
 * Çeviri: Simurg
 * Last Update: 02.06.2025
 */

/**
 * Upgrade Script: 1.8.38
 */

$upgrade_detail = array(
	"revert_all_templates" => 0,
	"revert_all_themes" => 0,
	"revert_all_settings" => 0
);

@set_time_limit(0);
function upgrade60_dbchanges()
{
	global $output, $mybb, $db, $cache;

	$output->print_header("Veritabanı Güncelleniyor");
	echo "<p>Gerekli yükseltme sorguları gerçekleştiriliyor...</p>";
	flush();

	if ($db->field_exists('icq', 'users')) {
		$db->drop_column('users', 'icq');
	}
	$db->delete_query("settings", "name='allowicqfield'");

	$db->modify_column("posts", "username", "varchar(120)", "set", "''");
	$db->modify_column("threads", "username", "varchar(120)", "set", "''");

	$output->print_contents("<p>Yükseltme işlemine devam etmek için ileri düğmesine tıklayın.</p>");
	$output->print_footer("60_done");
}
