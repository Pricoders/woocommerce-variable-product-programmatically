<?php
/**
 * Create a variable product on woocommerce
 * @return int Product ID
 */
function pricode_create_product(){
	$product = new WC_Product_Variable();
	$product->set_description('T-shirt variable description');
	$product->set_name('T-shirt variable');
	$product->set_sku('test-shirt');
	$product->set_price(1);
	$product->set_regular_price(1);
	$product->set_stock_status();
	return $product->save();
}

/**
 * Create Product Attributes 
 * @param  string $name    Attribute name
 * @param  array $options Options values
 * @return Object          WC_Product_Attribute 
 */
function pricode_create_attributes( $name, $options ){
	$attribute = new WC_Product_Attribute();
	$attribute->set_id(0);
	$attribute->set_name($name);
	$attribute->set_options($options);
	$attribute->set_visible(true);
	$attribute->set_variation(true);
	return $attribute;
}

/**
 * [pricode_create_variations description]
 * @param  [type] $product_id [description]
 * @param  [type] $values     [description]
 * @return [type]             [description]
 */
function pricode_create_variations( $product_id, $values ){
	$variation = new WC_Product_Variation();
	$variation->set_parent_id( $product_id );
	$variation->set_attributes($values);
	$variation->set_status('publish');
	$variation->set_sku($data->sku);
	$variation->set_price($data->price);
	$variation->set_regular_price($data->price);
	$variation->set_stock_status();
	$variation->save();
	$product = wc_get_product($product_id);
	$product->save();

}
