<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package AxC\GEA\Updates
 */

namespace AxC\GEA\Updates;

use AxC\DataManagement\Models\Email;

/**
 * Add data to Email DB scheme.
 */
class SeedEmailTable extends \Seeder
{
	/**
	 * Add data to DB scheme
	 * @return null;
	 */
	public function run()
	{
		Email::truncate();

		$pos = 1;

		Email::create( [
			'type' => 'work',
			'position' => $pos++, 'published' => true, 'address' => 'info@geasrlsolution.com',
			'principal' => true
		] );
	}
}