/**
* EcomitizeDynamic related module
*
* @category    YanMalinovsky
* @package     YanMalinovsky_EcomitizeDynamic
* @copyright   Copyright (c) 2016 Yan Malinovsky
* @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/

Dynamic Values

Module dynamically add new data with a value such as "dynamic value" to a product that can then be output
on the product detail page (view.phtml template) by adding: <?php echo $_product->getCustomAttribute() ?>