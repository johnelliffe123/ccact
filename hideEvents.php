add_filter( 'tribe_events_views_v2_view_repository_args', 'tec_exclude_events_category', 10, 3 );
 
function tec_exclude_events_category( $repository_args, $context, $view ) {
    // Get the category we are looking at.
    $context_category  = $context->get( 'event_category' );
 
    // List of category slugs to be excluded
    $excluded_categories = [
        'my-category-slug',
        'my-other-category-slug',
    ];
 
    // Bail if we are looking at a category archive.
    if ( in_array( $context_category, $excluded_categories, true ) ) {
        return $repository_args;
    }
 
    // Otherwise exclude events in the given categories.
    $repository_args['category_not_in'] = $excluded_categories;
 
    return $repository_args;
}