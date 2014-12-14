<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package AxC\GEA\Updates
 */

namespace AxC\GEA\Updates;

use AxC\GEA\Models\Settings;
use AxC\AddThis\Models\Settings as AddThisSettings;
use AxC\Segment\Models\Settings as SegmentSettings;
use AxC\reCAPTCHA\Models\Settings as reCAPTCHASettings;
use RainLab\GoogleAnalytics\Models\Settings as GoogleAnalyticsSettings;
use System\Models\MailSettings;
use AnandPatel\SeoExtension\models\Settings as SeoExtensionSettings;
use Backend\Models\BrandSettings;

/**
 * Add data to GEA Settings DB scheme.
 */
class SeedSettingsTable extends \Seeder
{
	/**
	 * Add data to DB scheme
	 * @return null;
	 */
	public function run()
	{
		Settings::set('name', 'GEA');
		Settings::set('full_name', 'Gea Informatica S.r.L.');
		Settings::set('slogan', 'Not only a company but a family friend!');
		Settings::set('about', implode("\n", [
			'Young and innovative company',
			'Innovation services to households and businesses',
			'Call center dedicated to your needs',
			'Highly qualified technicians and identifiable'
		] ) );

		Settings::set('address_street_name', 'via Matteotti');
		Settings::set('address_street_number', '13');
		Settings::set('address_street_int', '3');
		Settings::set('address_zip', '15065');
		Settings::set('address_city', 'Frugarolo');
		Settings::set('address_province', 'AL');
		Settings::set('address_country', 'IT');

		Settings::set('vat', '02337310060');
		Settings::set('rea', 'AL246878');

		AddThisSettings::set('pubid', 'ra-5481b8241694a120');

		SegmentSettings::set('write_key', 'mjd2ml4pbr');

		$ga_settings = GoogleAnalyticsSettings::instance();
		$ga_settings->project_name = 'gea-srl';
		$ga_settings->client_id = '346682800255-nddhugfkv4uu0fq1rqocuna2us073aeb.apps.googleusercontent.com';
		$ga_settings->app_email =  '346682800255-nddhugfkv4uu0fq1rqocuna2us073aeb@developer.gserviceaccount.com';
		$ga_settings->profile_id = '83576393';
		$ga_settings->tracking_id = 'UA-49090074-1';
		$ga_settings->domain_name = 'gea-srl';
		$ga_settings->save();

		$mail_settings = MailSettings::instance();
		$mail_settings->send_mode = 'smtp';
		$mail_settings->sender_name = 'GEA Informatica';
		$mail_settings->sender_email = 'info@geasrlsolution.com';
		$mail_settings->smtp_address ='smtp.aruba.it';
		$mail_settings->smtp_port = '465';
		$mail_settings->smtp_user = 'info@geasrlsolution.com';
		$mail_settings->smtp_password = 'gea-srl-solution';
		$mail_settings->smtp_authorization = '1';
		$mail_settings->smtp_ssl = '1';
		$mail_settings->save();

		$seo_extension_settings = SeoExtensionSettings::instance();
		$seo_extension_settings->enable_title = '1';
		$seo_extension_settings->enable_canonical_url = '1';
		$seo_extension_settings->title = '| GEA';
		$seo_extension_settings->title_position = 'suffix';
		$seo_extension_settings->other_tags = "<meta name=\"author\" content=\"Alex Carrega (AxC - http:\/\/www.alexcarrega.com)\">\r\n<meta name=\"apple-mobile-web-app-capable\" content=\"yes\" \/>\r\n<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\" \/>\r\n<meta name=\"description\" content=\"Contact page\" \/>\r\n<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
		$seo_extension_settings->save();

		$brand_settings = BrandSettings::instance();
		$brand_settings->app_name = 'GEA';
		$brand_settings->app_tagline = 'GEA Informatica S.r.L.';
		$brand_settings->primary_color_light = '#48b28c';
		$brand_settings->primary_color_dark = '#0f6679';
		$brand_settings->secondary_color_light = '#f5deb3';
		$brand_settings->secondary_color_dark = '#B22222';
		$brand_settings->save();

		$recaptcha_settings = reCAPTCHASettings::instance();
		$recaptcha_settings->public_key = '6LeaAvASAAAAAG8j3iMF5jwe_AX7zKag2G_1Ku9x';
		$recaptcha_settings->private_key = '6LeaAvASAAAAAEIBv0TsK9g4OxcywSW5zL6c2-FB';
		$recaptcha_settings->save();

		// twitter
		// 'widget-id' => '468707745055518720'

		// @p-color: #0f6679;
		// @s-color: #48b28c;
		// @bg-color: #FFFFFF;
		// @i-color: #f5deb3;
		// @w-color: #f0ad4e;
		// @d-color: #B22222;
	}
}