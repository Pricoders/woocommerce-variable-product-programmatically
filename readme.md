# Woocommerce Variable Product and Variations Programmatically

Creating variable products in woocommerce is easy but adding adding variations is a totally different thing, this script can help you to do that.

## Usage

You can copy these functions in your functions.php file inside your theme or create a plugin using the functions

```php

//Adding product
$product = pricode_create_product();

//Creating Attributes 
$atts = [];
$atts[] = pricode_create_attributes('color',['red', 'green']);
$atts[] = pricode_create_attributes('size',['S', 'M']);

//Adding attributes to the created product
$product->set_attributes( $atts );
$product->save();

//Create variations
pricode_create_variations( $product->get_id(), ['color' => 'red', 'size' => 'M']);

```

## License
[MIT](https://choosealicense.com/licenses/mit/)
