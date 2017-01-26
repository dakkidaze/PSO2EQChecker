<html>
<title>PSO2紧急预报查看</title>
以下皆使用日本（UTC+09:00）时间。<br>默认显示最近3条，想获取更多条信息请访问http://eq.psobb.us/index.php?count=x，其中x为条数，最多20条。<br>来源：https://mobile.twitter.com/pso2_emg_hour<br>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header("Content-Type:text/html; charset=utf-8");
include('./simple_html_dom.php');

//echo "以下皆使用日本（UTC+09:00）时间。"."<br />"."默认显示最近3条，想获取更多条信息请访问http://eq.psobb.us/index.php?count=x，其中x为条数，最多20条。"."</br>";

$feed_count = 3;

if(isset($_GET['count']))
{
	$feed_count = strval($_GET['count']);
}

$dom = file_get_html('https://mobile.twitter.com/pso2_emg_hour');
//$tweets_html = file_get_contents("https://mobile.twitter.com/pso2_emg_hour");

for($i = 0; $i < $feed_count; $i++)
{
	//启用此句不显示前面的＜xx時 緊急クエスト予告＞
	//echo preg_replace("/＜[^\n\r]*＞/","",str_replace("#PSO2","", $dom->find('div[class=tweet-text]', $i)->plaintext))."<br />";
	echo str_replace("#PSO2","", $dom->find('div[class=tweet-text]', $i)->plaintext)."<br />";
	}

?>

<script src="http://s11.cnzz.com/z_stat.php?id=1261004006&web_id=1261004006" language="JavaScript"></script>

</html>

