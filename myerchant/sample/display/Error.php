<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-JP" xml:lang="ja-JP">
<head>
	<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8" />	
	<link rel="stylesheet" href="style/pgcommon.css" charset="UTF-8" />

	<title>[Error]-PGマルチペイメントサービス－モジュールタイプ呼び出しサンプル</title>
</head>
<body>

<div id="header">
	<h1>エラーリターン/モジュールタイプ(PHP) 呼び出しサンプル</h1>
	<a href="index.html">インデックスに戻る</a>
</div>

<div id="main">
	<ul>
	<?php
		require_once( PGCARD_SAMPLE_BASE . '/common/ErrorMessageHandler.php');
		$errorHandle = new ErrorHandler();
		$errorList = $output->getErrList();
		
		foreach( $errorList as  $errorInfo ){/* @var $errorInfo ErrHolder */
			
			echo '<li>'
				. $errorInfo->getErrCode()
				. ':' . $errorInfo->getErrInfo()
				. ':' . $errorHandle->getMessage( $errorInfo->getErrInfo() )
				.'</li>';
				
		}
	?>
	</ul>
</div>

<div id="footer">
	<em>Copyright (c) GMO Payment Gateway,Inc. All Rights Reserved.</em>
</div>

</body>
</html>