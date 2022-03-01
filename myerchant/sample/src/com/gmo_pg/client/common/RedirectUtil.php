<?php

require_once 'com/gmo_pg/client/common/GPayException.php';
require_once 'com/gmo_pg/client/common/ConnectUrlMap.php';

/**
 * <b>リダイレクトページ生成</b>
 *
 * Acsにリダイレクトするページを生成します。決済実行して、Acsフラグがオンで返却された場合に
 * 利用します。
 *
 * @package com.gmo_pg.client
 * @subpackage common
 * @see commonPackageInfo.php
 * @author GMO PaymentGateway
 */
class RedirectUtil {

    /**
     * @var GPayException 例外
     */
    private $exception;

    /**
     * コンストラクタ
     */
    public function __construct() {
    }

    /**
     * リダイレクトページの内容を作成する
     *
     * @param string $pagePath    雛形ページファイルへのパス
     * @param AcsParam param    ACSパラメータ
     * @param string $encode    雛形ページファイルの文字コード
     * @reutnr string 雛形htmlの文字列
     */
    public function createRedirectPage($pagePath, $param, $encode = null) {
        $acsUrl = $param->getAcsUrl();
        $paReq = $param->getPaReq();
        $termUrl = $param->getTermUrl();
        $md = $param->getMd();

        if (empty($acsUrl) || empty($md) || empty($paReq) || empty($termUrl)) {
            $this->exception =
                new GPayException("必須ACSパラメータに値が入っていません。", $this->exception);
            return null;
        }

        // 雛形ページファイル読込
        // ※file_get_contents()はPHP4.3.0以降で動作します。
        $strPage = file_get_contents($pagePath, true);
        if (!$strPage) {
            $this->exception =
                new GPayException("リダイレクトページの作成に失敗しました。", $this->exception);
            return null;
        }

        // $encodeが指定されていれば指定文字コードへ変換
        if (!is_null($encode)) {
            $strPage = mb_convert_encoding($strPage, $encode, 'EUC-JP,UTF-8,SJIS,ASCII');
        }

        // 雛形ページ中のパラメータ項目を置き換え
        $strPage = str_replace('${ACSUrl}', $acsUrl, $strPage);
        $strPage = str_replace('${PaReq}', $paReq, $strPage);
        $strPage = str_replace('${TermUrl}', $termUrl, $strPage);
        $strPage = str_replace('${MD}', $md, $strPage);

        return $strPage;
    }

    /**
     * リダイレクトページの内容を作成する
     *
     * @param string $pagePath    雛形ページファイルへのパス
     * @param PaypalStartParam param    Paypal支払開始パラメタ
     * @param string $encode    雛形ページファイルの文字コード
     * @reutnr string 雛形htmlの文字列
     */
    public function paypalStart($pagePath, $param, $encode = null) {

        $shopId = $param->getShopId();
        $accessId = $param->getAccessId();

        if (empty($shopId) || empty($accessId)) {
            $this->exception =
                new GPayException("必須Paypal支払開始パラメータに値が入っていません。", $this->exception);
            return null;
        }

        // 雛形ページファイル読込
        // ※file_get_contents()はPHP4.3.0以降で動作します。
        $strPage = file_get_contents($pagePath, true);
        if (!$strPage) {
            $this->exception =
                new GPayException("リダイレクトページの作成に失敗しました。", $this->exception);
            return null;
        }

        // $encodeが指定されていれば指定文字コードへ変換
        if (!is_null($encode)) {
            $strPage = mb_convert_encoding($strPage, $encode, 'EUC-JP,UTF-8,SJIS,ASCII');
        }

  		$urlMap = new ConnectUrlMap();
		$url = $urlMap->getUrl('PaypalStart');
        // 雛形ページ中のパラメータ項目を置き換え
        $strPage = str_replace('${PaypalStartUrl}', $url, $strPage);
        $strPage = str_replace('${ShopID}', $shopId, $strPage);
        $strPage = str_replace('${AccessID}', $accessId, $strPage);

        return $strPage;
    }

    /**
     * リダイレクトページの内容を作成する
     *
     * @param string $pagePath    雛形ページファイルへのパス
     * @param WebmoneyStartParam param    Webmoney支払開始パラメタ
     * @param string $encode    雛形ページファイルの文字コード
     * @reutnr string 雛形htmlの文字列
     */
    public function webmoneyStart($pagePath, $param, $encode = null) {

        $accessId = $param->getAccessId();

        if (empty($accessId)) {
            $this->exception =
                new GPayException("必須Webmoney支払開始パラメータに値が入っていません。", $this->exception);
            return null;
        }

        // 雛形ページファイル読込
        // ※file_get_contents()はPHP4.3.0以降で動作します。
        $strPage = file_get_contents($pagePath, true);
        if (!$strPage) {
            $this->exception =
                new GPayException("リダイレクトページの作成に失敗しました。", $this->exception);
            return null;
        }

        // $encodeが指定されていれば指定文字コードへ変換
        if (!is_null($encode)) {
            $strPage = mb_convert_encoding($strPage, $encode, 'EUC-JP,UTF-8,SJIS,ASCII');
        }

  		$urlMap = new ConnectUrlMap();
		$url = $urlMap->getUrl('WebmoneyStart');
        // 雛形ページ中のパラメータ項目を置き換え
        $strPage = str_replace('${WebmoneyStartUrl}', $url, $strPage);
        $strPage = str_replace('${AccessID}', $accessId, $strPage);

        return $strPage;
    }

    /**
     * リダイレクトページの内容を作成する
     *
     * @param string $pagePath    雛形ページファイルへのパス
     * @param webmoneyQuickStartInput param    クイック支払い手続き開始パラメタ
     * @param string $encode    雛形ページファイルの文字コード
     * @reutnr string 雛形htmlの文字列
     */
    public function webmoneyQuickStart($pagePath, $param, $encode = null) {

    	$accessID = $param->getAccessID();

    	if (
    			empty($accessID)
    	) {
    		$this->exception =
    		new GPayException("必須Webmoneyクイック支払い手続き開始パラメータに値が入っていません。", $this->exception);
    		return null;
    	}

    	// 雛形ページファイル読込
    	// ※file_get_contents()はPHP4.3.0以降で動作します。
    	$strPage = file_get_contents($pagePath, true);
    	if (!$strPage) {
    		$this->exception =
    		new GPayException("リダイレクトページの作成に失敗しました。", $this->exception);
    		return mb_convert_encoding("リダイレクトページの作成に失敗しました。", 'SJIS', 'UTF-8');
    	}

    	// $encodeが指定されていれば指定文字コードへ変換
    	if (!is_null($encode)) {
    		$strPage = mb_convert_encoding($strPage, $encode, 'EUC-JP,UTF-8,SJIS,ASCII');
    	}

    	$urlMap = new ConnectUrlMap();
    	$url = $urlMap->getUrl('WebmoneyQuickStart');
    	// 雛形ページ中のパラメータ項目を置き換え
    	$strPage = str_replace('${WebmoneyStartURL}', $url, $strPage);
    	$strPage = str_replace('${AccessID}', $accessID, $strPage);

    	return $strPage;
    }

    /**
     * リダイレクトページの内容を作成する
     *
     * @param string $pagePath    雛形ページファイルへのパス
     * @param string $startURL    支払手続き開始IFのURL
     * @param string $accessID    取引ID
     * @param string $token       トークン
     * @param string $encode    雛形ページファイルの文字コード
     * @reutnr string 雛形htmlの文字列
     */
    public function auStart($pagePath, $startURL, $accessID, $token, $encode = null) {
		if (
			empty($startURL) ||
			empty($accessID) ||
			empty($token)
		) {
            $this->exception =
                new GPayException("必須auかんたん決済OpenID連携パラメータに値が入っていません。", $this->exception);
            return null;
        }

        // 雛形ページファイル読込
        // ※file_get_contents()はPHP4.3.0以降で動作します。
        $strPage = file_get_contents($pagePath, true);
        if (!$strPage) {
            $this->exception =
                new GPayException("リダイレクトページの作成に失敗しました。", $this->exception);
            return mb_convert_encoding("リダイレクトページの作成に失敗しました。", 'SJIS', 'UTF-8');
        }

        // $encodeが指定されていれば指定文字コードへ変換
        if (!is_null($encode)) {
            $strPage = mb_convert_encoding($strPage, $encode, 'EUC-JP,UTF-8,SJIS,ASCII');
        }

  		$urlMap = new ConnectUrlMap();
		$url = $urlMap->getUrl('AuStart');
        // 雛形ページ中のパラメータ項目を置き換え
		$strPage = str_replace('${StartURL}', $startURL, $strPage);
		$strPage = str_replace('${AccessID}', $accessID, $strPage);
		$strPage = str_replace('${Token}', $token, $strPage);

        return $strPage;
    }

	/**
	 * リダイレクトページの内容を作成する
	 *
	 * @param string $pagePath    雛形ページファイルへのパス
	 * @param DocomoStartInput param    支払手続き開始パラメタ
	 * @param string $encode    雛形ページファイルの文字コード
	 * @reutnr string 雛形htmlの文字列
	 */
	public function docomoStart($pagePath, $param, $encode = null) {
		$accessID = $param->getAccessID();
		$token = $param->getToken();

		if (
			empty($accessID) ||
			empty($token)
		) {
			$this->exception =
				new GPayException("必須ドコモ払い支払手続き開始パラメータに値が入っていません。", $this->exception);
			return null;
		}

		// 雛形ページファイル読込
		// ※file_get_contents()はPHP4.3.0以降で動作します。
		$strPage = file_get_contents($pagePath, true);
		if (!$strPage) {
			$this->exception =
				new GPayException("リダイレクトページの作成に失敗しました。", $this->exception);
			return mb_convert_encoding("リダイレクトページの作成に失敗しました。", 'SJIS', 'UTF-8');
		}

		// $encodeが指定されていれば指定文字コードへ変換
		if (!is_null($encode)) {
			$strPage = mb_convert_encoding($strPage, $encode, 'EUC-JP,UTF-8,SJIS,ASCII');
		}

		$urlMap = new ConnectUrlMap();
		$url = $urlMap->getUrl('DocomoStart');
		// 雛形ページ中のパラメータ項目を置き換え
		$strPage = str_replace('${DocomoStartURL}', $url, $strPage);
		$strPage = str_replace('${AccessID}', $accessID, $strPage);
		$strPage = str_replace('${Token}', $token, $strPage);

		return $strPage;
	}

    /**
     * リダイレクトページの内容を作成する
     *
     * @param string $pagePath    雛形ページファイルへのパス
     * @param string $startURL    支払手続き開始IFのURL
     * @param string $accessID    取引ID
     * @param string $token       トークン
     * @param string $encode    雛形ページファイルの文字コード
     * @reutnr string 雛形htmlの文字列
     */
    public function docomoContinuanceStart($pagePath, $startURL, $accessID, $token, $encode = null) {
		if (
			empty($startURL) ||
			empty($accessID) ||
			empty($token)
		) {
            $this->exception =
                new GPayException("必須ドコモ継続課金決済パラメータに値が入っていません。", $this->exception);
            return null;
        }

        // 雛形ページファイル読込
        // ※file_get_contents()はPHP4.3.0以降で動作します。
        $strPage = file_get_contents($pagePath, true);
        if (!$strPage) {
            $this->exception =
                new GPayException("リダイレクトページの作成に失敗しました。", $this->exception);
            return mb_convert_encoding("リダイレクトページの作成に失敗しました。", 'SJIS', 'UTF-8');
        }

        // $encodeが指定されていれば指定文字コードへ変換
        if (!is_null($encode)) {
            $strPage = mb_convert_encoding($strPage, $encode, 'EUC-JP,UTF-8,SJIS,ASCII');
        }

        // 雛形ページ中のパラメータ項目を置き換え
		$strPage = str_replace('${DocomoContinuanceStartURL}', $startURL, $strPage);
		$strPage = str_replace('${AccessID}', $accessID, $strPage);
		$strPage = str_replace('${Token}', $token, $strPage);

        return $strPage;
    }

	/**
	 * リダイレクトページの内容を作成する
	 *
	 * @param string $pagePath    雛形ページファイルへのパス
	 * @param JibunStartInput param    支払手続き開始パラメタ
	 * @param string $encode    雛形ページファイルの文字コード
	 * @reutnr string 雛形htmlの文字列
	 */
	public function jibunStart($pagePath, $param, $encode = null) {
		$accessID = $param->getAccessID();
		$token = $param->getToken();

		if (
			empty($accessID) ||
			empty($token)
		) {
			$this->exception =
				new GPayException("必須じぶん銀行決済手続き開始パラメータに値が入っていません。", $this->exception);
			return null;
		}

		// 雛形ページファイル読込
		// ※file_get_contents()はPHP4.3.0以降で動作します。
		$strPage = file_get_contents($pagePath, true);
		if (!$strPage) {
			$this->exception =
				new GPayException("リダイレクトページの作成に失敗しました。", $this->exception);
			return mb_convert_encoding("リダイレクトページの作成に失敗しました。", 'SJIS', 'UTF-8');
		}

		// $encodeが指定されていれば指定文字コードへ変換
		if (!is_null($encode)) {
			$strPage = mb_convert_encoding($strPage, $encode, 'EUC-JP,UTF-8,SJIS,ASCII');
		}

		$urlMap = new ConnectUrlMap();
		$url = $urlMap->getUrl('JibunStart');
		// 雛形ページ中のパラメータ項目を置き換え
		$strPage = str_replace('${JibunStartURL}', $url, $strPage);
		$strPage = str_replace('${AccessID}', $accessID, $strPage);
		$strPage = str_replace('${Token}', $token, $strPage);

		return $strPage;
	}

	/**
	 * リダイレクトページの内容を作成する
	 *
	 * @param string $pagePath    雛形ページファイルへのパス
	 * @param SbStartInput param    支払手続き開始パラメタ
	 * @param string $encode    雛形ページファイルの文字コード
	 * @reutnr string 雛形htmlの文字列
	 */
	public function sbStart($pagePath, $param, $encode = null) {
		$accessID = $param->getAccessID();
		$token = $param->getToken();

		if (
			empty($accessID) ||
			empty($token)
		) {
			$this->exception =
				new GPayException("必須ソフトバンクケータイ支払い支払手続き開始パラメータに値が入っていません。", $this->exception);
			return null;
		}

		// 雛形ページファイル読込
		// ※file_get_contents()はPHP4.3.0以降で動作します。
		$strPage = file_get_contents($pagePath, true);
		if (!$strPage) {
			$this->exception =
				new GPayException("リダイレクトページの作成に失敗しました。", $this->exception);
			return mb_convert_encoding("リダイレクトページの作成に失敗しました。", 'SJIS', 'UTF-8');
		}

		// $encodeが指定されていれば指定文字コードへ変換
		if (!is_null($encode)) {
			$strPage = mb_convert_encoding($strPage, $encode, 'EUC-JP,UTF-8,SJIS,ASCII');
		}

		$urlMap = new ConnectUrlMap();
		$url = $urlMap->getUrl('SbStart');
		// 雛形ページ中のパラメータ項目を置き換え
		$strPage = str_replace('${SbStartURL}', $url, $strPage);
		$strPage = str_replace('${AccessID}', $accessID, $strPage);
		$strPage = str_replace('${Token}', $token, $strPage);

		return $strPage;
	}
	/**
	 * リダイレクトページの内容を作成する
	 *
	 * @param string $pagePath    雛形ページファイルへのパス
	 * @param SbStartInput param    支払手続き開始パラメタ
	 * @param string $encode    雛形ページファイルの文字コード
	 * @reutnr string 雛形htmlの文字列
	 */
	public function auContinuanceStart($pagePath, $param, $encode = null) {
		$accessID = $param->getAccessID();
		$token = $param->getToken();

		if (
			empty($accessID) ||
			empty($token)
		) {
			$this->exception =
				new GPayException("必須au継続支払手続き開始パラメータに値が入っていません。", $this->exception);
			return null;
		}

		// 雛形ページファイル読込
		// ※file_get_contents()はPHP4.3.0以降で動作します。
		$strPage = file_get_contents($pagePath, true);
		if (!$strPage) {
			$this->exception =
				new GPayException("リダイレクトページの作成に失敗しました。", $this->exception);
			return mb_convert_encoding("リダイレクトページの作成に失敗しました。", 'SJIS', 'UTF-8');
		}

		// $encodeが指定されていれば指定文字コードへ変換
		if (!is_null($encode)) {
			$strPage = mb_convert_encoding($strPage, $encode, 'EUC-JP,UTF-8,SJIS,ASCII');
		}

		$urlMap = new ConnectUrlMap();
		$url = $urlMap->getUrl('AuContinuanceStart');
		// 雛形ページ中のパラメータ項目を置き換え
		$strPage = str_replace('${AuContinuanceStartURL}', $url, $strPage);
		$strPage = str_replace('${AccessID}', $accessID, $strPage);
		$strPage = str_replace('${Token}', $token, $strPage);

		return $strPage;
	}

	/**
	 * リダイレクトページの内容を作成する
	 *
	 * @param string $pagePath    雛形ページファイルへのパス
	 * @param SbStartInput param    支払手続き開始パラメタ
	 * @param string $encode    雛形ページファイルの文字コード
	 * @reutnr string 雛形htmlの文字列
	 */
	public function authProcessing($pagePath, $param, $encode = null) {
		$accessID = $param->getAccessID();
		$authProcessingHash = $param->getAuthProcessingHash();


		if (
			empty($accessID) ||
			empty($authProcessingHash)
		) {
			$this->exception =
				new GPayException("必須PGプリカ手続き開始パラメータに値が入っていません。", $this->exception);
			return null;
		}

		// 雛形ページファイル読込
		// ※file_get_contents()はPHP4.3.0以降で動作します。
		$strPage = file_get_contents($pagePath, true);
		if (!$strPage) {
			$this->exception =
				new GPayException("リダイレクトページの作成に失敗しました。", $this->exception);
			return mb_convert_encoding("リダイレクトページの作成に失敗しました。", 'SJIS', 'UTF-8');
		}

		// $encodeが指定されていれば指定文字コードへ変換
		if (!is_null($encode)) {
			$strPage = mb_convert_encoding($strPage, $encode, 'EUC-JP,UTF-8,SJIS,ASCII');
		}

		$urlMap = new ConnectUrlMap();
		$url = $urlMap->getUrl('authProcessing');
		// 雛形ページ中のパラメータ項目を置き換え
		$strPage = str_replace('${AuthProcessingURL}', $url, $strPage);
		$strPage = str_replace('${AccessID}', $accessID, $strPage);
		$strPage = str_replace('${AuthProcessingHash}', $authProcessingHash, $strPage);


		return $strPage;
	}

	/**
	 * リダイレクトページの内容を作成する
	 *
	 * @param string $pagePath    雛形ページファイルへのパス
	 * @param SbStartInput param    支払手続き開始パラメタ
	 * @param string $encode    雛形ページファイルの文字コード
	 * @reutnr string 雛形htmlの文字列
	 */
	public function netcashStart($pagePath, $param, $encode = null) {
		$accessID = $param->getAccessID();
		$token = $param->getToken();


		if (
			empty($accessID) ||
			empty($token)
		) {
			$this->exception =
				new GPayException("必須NET CASH手続き開始パラメータに値が入っていません。", $this->exception);
			return null;
		}

		// 雛形ページファイル読込
		// ※file_get_contents()はPHP4.3.0以降で動作します。
		$strPage = file_get_contents($pagePath, true);
		if (!$strPage) {
			$this->exception =
				new GPayException("リダイレクトページの作成に失敗しました。", $this->exception);
			return mb_convert_encoding("リダイレクトページの作成に失敗しました。", 'SJIS', 'UTF-8');
		}

		// $encodeが指定されていれば指定文字コードへ変換
		if (!is_null($encode)) {
			$strPage = mb_convert_encoding($strPage, $encode, 'EUC-JP,UTF-8,SJIS,ASCII');
		}

		$urlMap = new ConnectUrlMap();
		$url = $urlMap->getUrl('netcashStart');
		// 雛形ページ中のパラメータ項目を置き換え
		$strPage = str_replace('${NetcashStartURL}', $url, $strPage);
		$strPage = str_replace('${AccessID}', $accessID, $strPage);
		$strPage = str_replace('${Token}', $token, $strPage);


		return $strPage;
	}
	/**
	 * リダイレクトページの内容を作成する
	 *
	 * @param string $pagePath    雛形ページファイルへのパス
	 * @param SbStartInput param    支払手続き開始パラメタ
	 * @param string $encode    雛形ページファイルの文字コード
	 * @reutnr string 雛形htmlの文字列
	 */
	public function rakutenIdStart($pagePath, $param, $encode = null) {
		$accessID = $param->getAccessID();
		$token = $param->getToken();


		if (
			empty($accessID) ||
			empty($token)
		) {
			$this->exception =
				new GPayException("必須楽天ID手続き開始パラメータに値が入っていません。", $this->exception);
			return null;
		}

		// 雛形ページファイル読込
		// ※file_get_contents()はPHP4.3.0以降で動作します。
		$strPage = file_get_contents($pagePath, true);
		if (!$strPage) {
			$this->exception =
				new GPayException("リダイレクトページの作成に失敗しました。", $this->exception);
			return mb_convert_encoding("リダイレクトページの作成に失敗しました。", 'SJIS', 'UTF-8');
		}

		// $encodeが指定されていれば指定文字コードへ変換
		if (!is_null($encode)) {
			$strPage = mb_convert_encoding($strPage, $encode, 'EUC-JP,UTF-8,SJIS,ASCII');
		}

		$urlMap = new ConnectUrlMap();
		$url = $urlMap->getUrl('rakutenIdStart');
		// 雛形ページ中のパラメータ項目を置き換え
		$strPage = str_replace('${RakutenIdStartURL}', $url, $strPage);
		$strPage = str_replace('${AccessID}', $accessID, $strPage);
		$strPage = str_replace('${Token}', $token, $strPage);


		return $strPage;
	}
	/**
	 * リダイレクトページの内容を作成する
	 *
	 * @param string $pagePath    雛形ページファイルへのパス
	 * @param SbStartInput param    支払手続き開始パラメタ
	 * @param string $encode    雛形ページファイルの文字コード
	 * @reutnr string 雛形htmlの文字列
	 */
	public function mcpStart($pagePath, $param, $encode = null) {
		$accessID = $param->getAccessID();
		$token = $param->getToken();


		if (
			empty($accessID) ||
			empty($token)
		) {
			$this->exception =
				new GPayException("必須多通貨クレジットカード手続き開始パラメータに値が入っていません。", $this->exception);
			return null;
		}

		// 雛形ページファイル読込
		// ※file_get_contents()はPHP4.3.0以降で動作します。
		$strPage = file_get_contents($pagePath, true);
		if (!$strPage) {
			$this->exception =
				new GPayException("リダイレクトページの作成に失敗しました。", $this->exception);
			return mb_convert_encoding("リダイレクトページの作成に失敗しました。", 'SJIS', 'UTF-8');
		}

		// $encodeが指定されていれば指定文字コードへ変換
		if (!is_null($encode)) {
			$strPage = mb_convert_encoding($strPage, $encode, 'EUC-JP,UTF-8,SJIS,ASCII');
		}

		$urlMap = new ConnectUrlMap();
		$url = $urlMap->getUrl('mcpStart');
		// 雛形ページ中のパラメータ項目を置き換え
		$strPage = str_replace('${McpStartURL}', $url, $strPage);
		$strPage = str_replace('${AccessID}', $accessID, $strPage);
		$strPage = str_replace('${Token}', $token, $strPage);


		return $strPage;
	}
	/**
	 * リダイレクトページの内容を作成する
	 *
	 * @param string $pagePath    雛形ページファイルへのパス
	 * @param SbStartInput param    支払手続き開始パラメタ
	 * @param string $encode    雛形ページファイルの文字コード
	 * @reutnr string 雛形htmlの文字列
	 */
	public function linepayStart($pagePath, $param, $encode = null) {
		$accessID = $param->getAccessID();
		$token = $param->getToken();


		if (
			empty($accessID) ||
			empty($token)
		) {
			$this->exception =
				new GPayException("必須LINE Pay手続き開始パラメータに値が入っていません。", $this->exception);
			return null;
		}

		// 雛形ページファイル読込
		// ※file_get_contents()はPHP4.3.0以降で動作します。
		$strPage = file_get_contents($pagePath, true);
		if (!$strPage) {
			$this->exception =
				new GPayException("リダイレクトページの作成に失敗しました。", $this->exception);
			return mb_convert_encoding("リダイレクトページの作成に失敗しました。", 'SJIS', 'UTF-8');
		}

		// $encodeが指定されていれば指定文字コードへ変換
		if (!is_null($encode)) {
			$strPage = mb_convert_encoding($strPage, $encode, 'EUC-JP,UTF-8,SJIS,ASCII');
		}

		$urlMap = new ConnectUrlMap();
		$url = $urlMap->getUrl('linepayStart');
		// 雛形ページ中のパラメータ項目を置き換え
		$strPage = str_replace('${LinepayStartURL}', $url, $strPage);
		$strPage = str_replace('${AccessID}', $accessID, $strPage);
		$strPage = str_replace('${Token}', $token, $strPage);


		return $strPage;
	}
	/**
	 * リダイレクトページの内容を作成する
	 *
	 * @param string $pagePath    雛形ページファイルへのパス
	 * @param SbStartInput param    支払手続き開始パラメタ
	 * @param string $encode    雛形ページファイルの文字コード
	 * @reutnr string 雛形htmlの文字列
	 */
	public function unionpayStart($pagePath, $param, $encode = null) {
		$accessID = $param->getAccessID();
		$token = $param->getToken();


		if (
			empty($accessID) ||
			empty($token)
		) {
			$this->exception =
				new GPayException("必須ネット銀聯手続き開始パラメータに値が入っていません。", $this->exception);
			return null;
		}

		// 雛形ページファイル読込
		// ※file_get_contents()はPHP4.3.0以降で動作します。
		$strPage = file_get_contents($pagePath, true);
		if (!$strPage) {
			$this->exception =
				new GPayException("リダイレクトページの作成に失敗しました。", $this->exception);
			return mb_convert_encoding("リダイレクトページの作成に失敗しました。", 'SJIS', 'UTF-8');
		}

		// $encodeが指定されていれば指定文字コードへ変換
		if (!is_null($encode)) {
			$strPage = mb_convert_encoding($strPage, $encode, 'EUC-JP,UTF-8,SJIS,ASCII');
		}

		$urlMap = new ConnectUrlMap();
		$url = $urlMap->getUrl('unionpayStart');
		// 雛形ページ中のパラメータ項目を置き換え
		$strPage = str_replace('${UnionpayStartURL}', $url, $strPage);
		$strPage = str_replace('${AccessID}', $accessID, $strPage);
		$strPage = str_replace('${Token}', $token, $strPage);


		return $strPage;
	}
	/**
	 * リダイレクトページの内容を作成する
	 *
	 * @param string $pagePath    雛形ページファイルへのパス
	 * @param SbStartInput param    支払手続き開始パラメタ
	 * @param string $encode    雛形ページファイルの文字コード
	 * @reutnr string 雛形htmlの文字列
	 */
	public function sbContinuanceStart($pagePath, $param, $encode = null) {
		$accessID = $param->getAccessID();
		$token = $param->getToken();


		if (
			empty($accessID) ||
			empty($token)
		) {
			$this->exception =
				new GPayException("必須ソフトバンク継続手続き開始パラメータに値が入っていません。", $this->exception);
			return null;
		}

		// 雛形ページファイル読込
		// ※file_get_contents()はPHP4.3.0以降で動作します。
		$strPage = file_get_contents($pagePath, true);
		if (!$strPage) {
			$this->exception =
				new GPayException("リダイレクトページの作成に失敗しました。", $this->exception);
			return mb_convert_encoding("リダイレクトページの作成に失敗しました。", 'SJIS', 'UTF-8');
		}

		// $encodeが指定されていれば指定文字コードへ変換
		if (!is_null($encode)) {
			$strPage = mb_convert_encoding($strPage, $encode, 'EUC-JP,UTF-8,SJIS,ASCII');
		}

		$urlMap = new ConnectUrlMap();
		$url = $urlMap->getUrl('sbContinuanceStart');
		// 雛形ページ中のパラメータ項目を置き換え
		$strPage = str_replace('${SbContinuanceStartURL}', $url, $strPage);
		$strPage = str_replace('${AccessID}', $accessID, $strPage);
		$strPage = str_replace('${Token}', $token, $strPage);


		return $strPage;
	}
	/**
	 * リダイレクトページの内容を作成する
	 *
	 * @param string $pagePath    雛形ページファイルへのパス
	 * @param SbStartInput param    支払手続き開始パラメタ
	 * @param string $encode    雛形ページファイルの文字コード
	 * @reutnr string 雛形htmlの文字列
	 */
	public function recruitStart($pagePath, $param, $encode = null) {
		$accessID = $param->getAccessID();
		$token = $param->getToken();


		if (
			empty($accessID) ||
			empty($token)
		) {
			$this->exception =
				new GPayException("必須リクルートかんたん支払い手続き開始パラメータに値が入っていません。", $this->exception);
			return null;
		}

		// 雛形ページファイル読込
		// ※file_get_contents()はPHP4.3.0以降で動作します。
		$strPage = file_get_contents($pagePath, true);
		if (!$strPage) {
			$this->exception =
				new GPayException("リダイレクトページの作成に失敗しました。", $this->exception);
			return mb_convert_encoding("リダイレクトページの作成に失敗しました。", 'SJIS', 'UTF-8');
		}

		// $encodeが指定されていれば指定文字コードへ変換
		if (!is_null($encode)) {
			$strPage = mb_convert_encoding($strPage, $encode, 'EUC-JP,UTF-8,SJIS,ASCII');
		}

		$urlMap = new ConnectUrlMap();
		$url = $urlMap->getUrl('recruitStart');
		// 雛形ページ中のパラメータ項目を置き換え
		$strPage = str_replace('${RecruitStartURL}', $url, $strPage);
		$strPage = str_replace('${AccessID}', $accessID, $strPage);
		$strPage = str_replace('${Token}', $token, $strPage);


		return $strPage;
	}
	/**
	 * リダイレクトページの内容を作成する
	 *
	 * @param string $pagePath    雛形ページファイルへのパス
	 * @param SbStartInput param    支払手続き開始パラメタ
	 * @param string $encode    雛形ページファイルの文字コード
	 * @reutnr string 雛形htmlの文字列
	 */
	public function recruitContinuanceStart($pagePath, $param, $encode = null) {
		$accessID = $param->getAccessID();
		$token = $param->getToken();


		if (
			empty($accessID) ||
			empty($token)
		) {
			$this->exception =
				new GPayException("必須リクルートかんたん支払い継続課金手続き開始パラメータに値が入っていません。", $this->exception);
			return null;
		}

		// 雛形ページファイル読込
		// ※file_get_contents()はPHP4.3.0以降で動作します。
		$strPage = file_get_contents($pagePath, true);
		if (!$strPage) {
			$this->exception =
				new GPayException("リダイレクトページの作成に失敗しました。", $this->exception);
			return mb_convert_encoding("リダイレクトページの作成に失敗しました。", 'SJIS', 'UTF-8');
		}

		// $encodeが指定されていれば指定文字コードへ変換
		if (!is_null($encode)) {
			$strPage = mb_convert_encoding($strPage, $encode, 'EUC-JP,UTF-8,SJIS,ASCII');
		}

		$urlMap = new ConnectUrlMap();
		$url = $urlMap->getUrl('recruitContinuanceStart');
		// 雛形ページ中のパラメータ項目を置き換え
		$strPage = str_replace('${RecruitContinuanceStartURL}', $url, $strPage);
		$strPage = str_replace('${AccessID}', $accessID, $strPage);
		$strPage = str_replace('${Token}', $token, $strPage);


		return $strPage;
	}
	/**
	 * リダイレクトページの内容を作成する
	 *
	 * @param string $pagePath    雛形ページファイルへのパス
	 * @param SbStartInput param    支払手続き開始パラメタ
	 * @param string $encode    雛形ページファイルの文字コード
	 * @reutnr string 雛形htmlの文字列
	 */
	public function docomoAcceptStart($pagePath, $param, $encode = null) {
		$accessID = $param->getAccessID();
		$token = $param->getToken();


		if (
			empty($accessID) ||
			empty($token)
		) {
			$this->exception =
				new GPayException("必須ドコモ払い_随時決済手続き開始パラメータに値が入っていません。", $this->exception);
			return null;
		}

		// 雛形ページファイル読込
		// ※file_get_contents()はPHP4.3.0以降で動作します。
		$strPage = file_get_contents($pagePath, true);
		if (!$strPage) {
			$this->exception =
				new GPayException("リダイレクトページの作成に失敗しました。", $this->exception);
			return mb_convert_encoding("リダイレクトページの作成に失敗しました。", 'SJIS', 'UTF-8');
		}

		// $encodeが指定されていれば指定文字コードへ変換
		if (!is_null($encode)) {
			$strPage = mb_convert_encoding($strPage, $encode, 'EUC-JP,UTF-8,SJIS,ASCII');
		}

		$urlMap = new ConnectUrlMap();
		$url = $urlMap->getUrl('docomoAcceptStart');
		// 雛形ページ中のパラメータ項目を置き換え
		$strPage = str_replace('${DocomoAcceptStartURL}', $url, $strPage);
		$strPage = str_replace('${AccessID}', $accessID, $strPage);
		$strPage = str_replace('${Token}', $token, $strPage);


		return $strPage;
	}
	/**
	 * リダイレクトページの内容を作成する
	 *
	 * @param string $pagePath    雛形ページファイルへのパス
	 * @param SbStartInput param    支払手続き開始パラメタ
	 * @param string $encode    雛形ページファイルの文字コード
	 * @reutnr string 雛形htmlの文字列
	 */
	public function auAcceptStart($pagePath, $param, $encode = null) {
		$accessID = $param->getAccessID();
		$token = $param->getToken();


		if (
			empty($accessID) ||
			empty($token)
		) {
			$this->exception =
				new GPayException("必須auかんたん決済支払い（利用承諾）手続き開始パラメータに値が入っていません。", $this->exception);
			return null;
		}

		// 雛形ページファイル読込
		// ※file_get_contents()はPHP4.3.0以降で動作します。
		$strPage = file_get_contents($pagePath, true);
		if (!$strPage) {
			$this->exception =
				new GPayException("リダイレクトページの作成に失敗しました。", $this->exception);
			return mb_convert_encoding("リダイレクトページの作成に失敗しました。", 'SJIS', 'UTF-8');
		}

		// $encodeが指定されていれば指定文字コードへ変換
		if (!is_null($encode)) {
			$strPage = mb_convert_encoding($strPage, $encode, 'EUC-JP,UTF-8,SJIS,ASCII');
		}

		$urlMap = new ConnectUrlMap();
		$url = $urlMap->getUrl('auAcceptStart');
		// 雛形ページ中のパラメータ項目を置き換え
		$strPage = str_replace('${AuAcceptStartURL}', $url, $strPage);
		$strPage = str_replace('${AccessID}', $accessID, $strPage);
		$strPage = str_replace('${Token}', $token, $strPage);


		return $strPage;
	}
	/**
	 * リダイレクトページの内容を作成する
	 *
	 * @param string $pagePath    雛形ページファイルへのパス
	 * @param SbStartInput param    支払手続き開始パラメタ
	 * @param string $encode    雛形ページファイルの文字コード
	 * @reutnr string 雛形htmlの文字列
	 */
	public function sbAcceptStart($pagePath, $param, $encode = null) {
		$accessID = $param->getAccessID();
		$token = $param->getToken();


		if (
			empty($accessID) ||
			empty($token)
		) {
			$this->exception =
				new GPayException("必須ソフトバンクまとめて支払い(Ｂ)(利用承諾)手続き開始パラメータに値が入っていません。", $this->exception);
			return null;
		}

		// 雛形ページファイル読込
		// ※file_get_contents()はPHP4.3.0以降で動作します。
		$strPage = file_get_contents($pagePath, true);
		if (!$strPage) {
			$this->exception =
				new GPayException("リダイレクトページの作成に失敗しました。", $this->exception);
			return mb_convert_encoding("リダイレクトページの作成に失敗しました。", 'SJIS', 'UTF-8');
		}

		// $encodeが指定されていれば指定文字コードへ変換
		if (!is_null($encode)) {
			$strPage = mb_convert_encoding($strPage, $encode, 'EUC-JP,UTF-8,SJIS,ASCII');
		}

		$urlMap = new ConnectUrlMap();
		$url = $urlMap->getUrl('sbAcceptStart');
		// 雛形ページ中のパラメータ項目を置き換え
		$strPage = str_replace('${SbAcceptStartURL}', $url, $strPage);
		$strPage = str_replace('${AccessID}', $accessID, $strPage);
		$strPage = str_replace('${Token}', $token, $strPage);


		return $strPage;
	}


	/**
	 * リダイレクトページの内容を作成する
	 *
	 * @param string $pagePath    雛形ページファイルへのパス
	 * @param SbStartInput param    支払手続き開始パラメタ
	 * @param string $encode    雛形ページファイルの文字コード
	 * @reutnr string 雛形htmlの文字列
	 */
	public function bankAccountStart($pagePath, $param, $encode = null) {
		$tranID = $param->getTranID();
		$token = $param->getToken();


		if (
			empty($tranID) ||
			empty($token)
		) {
			$this->exception =
				new GPayException("必須口振オンライン手続き開始パラメータに値が入っていません。", $this->exception);
			return null;
		}

		// 雛形ページファイル読込
		// ※file_get_contents()はPHP4.3.0以降で動作します。
		$strPage = file_get_contents($pagePath, true);
		if (!$strPage) {
			$this->exception =
				new GPayException("リダイレクトページの作成に失敗しました。", $this->exception);
			return mb_convert_encoding("リダイレクトページの作成に失敗しました。", 'SJIS', 'UTF-8');
		}

		// $encodeが指定されていれば指定文字コードへ変換
		if (!is_null($encode)) {
			$strPage = mb_convert_encoding($strPage, $encode, 'EUC-JP,UTF-8,SJIS,ASCII');
		}

		$urlMap = new ConnectUrlMap();
		$url = $urlMap->getUrl('bankAccountStart');
		// 雛形ページ中のパラメータ項目を置き換え
		$strPage = str_replace('${BankAccountStartURL}', $url, $strPage);
		$strPage = str_replace('${TranID}', $tranID, $strPage);
		$strPage = str_replace('${Token}', $token, $strPage);


		return $strPage;
	}

	/**
	 * 例外の発生を判定する
	 *
	 * @return  判定結果
	 */
	public function isExceptionOccured() {
		return false == is_null($this->exception);
	}

	/**
	 * 例外を返す
	 *
	 * @return  GPayException 例外
	 */
	public function &getException() {
		return $this->exception;
	}

}
?>
