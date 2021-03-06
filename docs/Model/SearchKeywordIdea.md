# # SearchKeywordIdea

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**desktop_search_volume** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; PCでのリーチ数です。&lt;br&gt; ※1000件未満の場合は&lt;br&gt; 0が取得されます。&lt;br&gt; ※サーチキーワードの停止日以降はnullが返却されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Reach numbers on PC.&lt;br&gt; *If it is less than 1000 times, the value &amp;#34;0&amp;#34; will be responded.&lt;br&gt; *After the stop date of search keyword, null will be returned. &lt;/div&gt; | [optional]
**release_date** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;サーチキーワード追加日です。&lt;br&gt; ※フォーマット：yyyyMMdd&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Additional date of keyword.&lt;br&gt; * Format: yyyyMMdd&lt;/div&gt; | [optional]
**search_keyword** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;サーチキーワードです。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Search keyword.&lt;/div&gt; | [optional]
**search_keyword_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;サーチキーワードIDです。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Search keyword ID.&lt;/div&gt; | [optional]
**smart_phone_search_volume** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; スマートフォンでのリーチ数です。&lt;br&gt; ※1000件未満の場合は&lt;br&gt; 0が取得されます。&lt;br&gt; ※サーチキーワードの停止日以降はnullが返却されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Reach numbers on Smartphone.&lt;br&gt; *If it is less than 1000 times, the value &amp;#34;0&amp;#34; will be responded.&lt;br&gt; *After the stop date of search keyword, null will be returned. &lt;/div&gt; | [optional]
**tablet_search_volume** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; タブレットでのリーチ数です。&lt;br&gt; ※1000件未満の場合は&lt;br&gt; 0が取得されます。&lt;br&gt; ※サーチキーワードの停止日以降はnullが返却されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Reach numbers on Tablet.&lt;br&gt; *If it is less than 1000 times, the value &amp;#34;0&amp;#34; will be responded.&lt;br&gt; *After the stop date of search keyword, null will be returned. &lt;/div&gt; | [optional]
**close_date** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;サーチキーワード停止日です。&lt;br&gt; ※フォーマット：yyyyMMdd&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Stop date of keyword.&lt;br&gt; * Format: yyyyMMdd&lt;/div&gt; | [optional]
**availability_status** | [**\YahooAdsDisplayApi\Client\Model\SearchKeywordIdeaServiceAvailabilityStatus**](SearchKeywordIdeaServiceAvailabilityStatus.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
