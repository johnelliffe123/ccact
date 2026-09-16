// Add "Does Not Contain" to Gravity Forms Conditional Logic
// Not used or tested -- keep in case we want to add this in the future
add_filter( 'gform_conditional_logic_operators', function( $operators ) {
    $operators['not_contain'] = __( 'Does Not Contain', 'gravityforms' );
    return $operators;
} );