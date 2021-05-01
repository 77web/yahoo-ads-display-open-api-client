<?php
/**
 * AccountAuthorityTest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Yahoo!広告 ディスプレイ広告 API リファレンス / Yahoo! JAPAN Ads Display Ads API Reference
 *
 * <div lang=\"ja\">Yahoo!広告 ディスプレイ広告 APIのWebサービスについて説明します。</div> <div lang=\"en\">Display Ads API Web Services supported in Yahoo! JAPAN Ads API.</div> <div><a target=\"_blank\" href=\"https://github.com/yahoojp-marketing/ads-display-api-documents/blob/master/design/v4/Route.yaml\">OpenAPI Specification</a></div> <div lang=\"ja\"><a target=\"_blank\" href=\"https://github.com/yahoojp-marketing/ads-display-api-documents/blob/master/bestpractice/ja\">Best Practice</a></div> <div lang=\"en\"><a target=\"_blank\" href=\"https://github.com/yahoojp-marketing/ads-display-api-documents/blob/master/bestpractice/en\">Best Practice</a></div>
 *
 * The version of the OpenAPI document: v4
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Client\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * AccountAuthorityTest Class Doc Comment
 *
 * @category    Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;AccountAuthorityオブジェクトは、アカウント権限情報を示します。&lt;br&gt; authoritiesで返却される値は、以下のとおりです。   &lt;table border&#x3D;&#39;1&#39;&gt;     &lt;tr&gt;       &lt;th&gt;accountAuthorities&lt;/th&gt;       &lt;th&gt;説明&lt;/th&gt;       &lt;th&gt;権限種別&lt;/th&gt;     &lt;/tr&gt;     &lt;tr&gt;       &lt;td&gt;WEBSITE_TRAFFIC&lt;/td&gt;       &lt;td&gt;運用型：サイト誘導&lt;/td&gt;       &lt;td&gt;キャンペーン目的&lt;/td&gt;     &lt;/tr&gt;     &lt;tr&gt;       &lt;td&gt;VIDEO_VIEW&lt;/td&gt;       &lt;td&gt;運用型：動画再生&lt;/td&gt;       &lt;td&gt;キャンペーン目的&lt;/td&gt;     &lt;/tr&gt;     &lt;tr&gt;       &lt;td&gt;APP_PROMOTION&lt;/td&gt;       &lt;td&gt;運用型：アプリ訴求&lt;/td&gt;       &lt;td&gt;キャンペーン目的&lt;/td&gt;     &lt;/tr&gt;     &lt;tr&gt;       &lt;td&gt;CONVERSION&lt;/td&gt;       &lt;td&gt;運用型：コンバージョン&lt;/td&gt;       &lt;td&gt;キャンペーン目的&lt;/td&gt;     &lt;/tr&gt;     &lt;tr&gt;       &lt;td&gt;ITEM_LIST&lt;/td&gt;       &lt;td&gt;運用型：商品リスト訴求&lt;/td&gt;       &lt;td&gt;キャンペーン目的&lt;/td&gt;     &lt;/tr&gt;     &lt;tr&gt;       &lt;td&gt;BRAND_AWARENESS&lt;/td&gt;       &lt;td&gt;運用型：ブランド認知&lt;/td&gt;       &lt;td&gt;キャンペーン目的&lt;/td&gt;     &lt;/tr&gt;     &lt;tr&gt;       &lt;td&gt;BRAND_AWARENESS_GUARANTEED&lt;/td&gt;       &lt;td&gt;予約型：ブランド認知&lt;/td&gt;       &lt;td&gt;キャンペーン目的&lt;/td&gt;     &lt;/tr&gt;     &lt;tr&gt;       &lt;td&gt;SHOPPING_ADS&lt;/td&gt;       &lt;td&gt;eコマース&lt;/td&gt;       &lt;td&gt;キャンペーン掲載タイプ&lt;/td&gt;     &lt;/tr&gt;   &lt;/table&gt; それぞれのキャンペーン目的の詳細については、&lt;a href&#x3D;\&quot;https://ads-help.yahoo.co.jp/yahooads/display/articledetail?lan&#x3D;ja&amp;aid&#x3D;51512\&quot;&gt;目的別キャンペーン作成について&lt;/a&gt;をご確認ください。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;AccountAuthority objects serve account authority information.&lt;br&gt; Responded values of &#x60;authorities&#x60; are as follows.   &lt;table border&#x3D;&#39;1&#39;&gt;     &lt;tr&gt;       &lt;th&gt;accountAuthorities&lt;/th&gt;       &lt;th&gt;description&lt;/th&gt;       &lt;th&gt;authority type&lt;/th&gt;     &lt;/tr&gt;     &lt;tr&gt;       &lt;td&gt;WEBSITE_TRAFFIC&lt;/td&gt;       &lt;td&gt;AUCTION : Website traffic&lt;/td&gt;       &lt;td&gt;Campaign goal&lt;/td&gt;     &lt;/tr&gt;     &lt;tr&gt;       &lt;td&gt;VIDEO_VIEW&lt;/td&gt;       &lt;td&gt;AUCTION : Video view&lt;/td&gt;       &lt;td&gt;Campaign goal&lt;/td&gt;     &lt;/tr&gt;     &lt;tr&gt;       &lt;td&gt;APP_PROMOTION&lt;/td&gt;       &lt;td&gt;AUCTION : App promotion&lt;/td&gt;       &lt;td&gt;Campaign goal&lt;/td&gt;     &lt;/tr&gt;     &lt;tr&gt;       &lt;td&gt;CONVERSION&lt;/td&gt;       &lt;td&gt;AUCTION : Conversion&lt;/td&gt;       &lt;td&gt;Campaign goal&lt;/td&gt;     &lt;/tr&gt;     &lt;tr&gt;       &lt;td&gt;ITEM_LIST&lt;/td&gt;       &lt;td&gt;AUCTION : Item list promotion&lt;/td&gt;       &lt;td&gt;Campaign goal&lt;/td&gt;     &lt;/tr&gt;     &lt;tr&gt;       &lt;td&gt;BRAND_AWARENESS&lt;/td&gt;       &lt;td&gt;AUCTION : Brand awareness&lt;/td&gt;       &lt;td&gt;Campaign goal&lt;/td&gt;     &lt;/tr&gt;     &lt;tr&gt;       &lt;td&gt;BRAND_AWARENESS_GUARANTEED&lt;/td&gt;       &lt;td&gt;GUARANTEED : Brand awareness&lt;/td&gt;       &lt;td&gt;Campaign goal&lt;/td&gt;     &lt;/tr&gt;     &lt;tr&gt;       &lt;td&gt;SHOPPING_ADS&lt;/td&gt;       &lt;td&gt;Ecommerce&lt;/td&gt;       &lt;td&gt;Campaign delivery type&lt;/td&gt;     &lt;/tr&gt;   &lt;/table&gt; Details of these campaign goal are described on &lt;a href&#x3D;\&quot;https://ads-help.yahoo.co.jp/yahooads/display/articledetail?lan&#x3D;ja&amp;aid&#x3D;51512\&quot;&gt;目的別キャンペーン作成について&lt;/a&gt; (Japanese context only). &lt;/div&gt;
 * @package     OpenAPI\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class AccountAuthorityTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "AccountAuthority"
     */
    public function testAccountAuthority()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "account_id"
     */
    public function testPropertyAccountId()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "authorities"
     */
    public function testPropertyAuthorities()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}