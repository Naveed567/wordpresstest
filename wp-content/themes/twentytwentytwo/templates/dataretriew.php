<?php
/*Template Name: data*/
$taxonomies = array( 
    'project_type',
);

$args = array(
    'orderby'           => 'name', 
    'order'             => 'ASC',
    'hide_empty'        => true, 
    'exclude'           => array(), 
    'exclude_tree'      => array(), 
    'include'           => array(),
    'number'            => '', 
    'fields'            => 'all', 
    'slug'              => '', 
    'parent'            => '',
    'hierarchical'      => true, 
    'child_of'          => 0, 
    'get'               => '', 
    'name__like'        => '',
    'description__like' => '',
    'pad_counts'        => false, 
    'offset'            => '', 
    'search'            => '', 
    'cache_domain'      => 'core'
); 

$terms = get_terms( $taxonomies, $args );
foreach ( $terms as $term ) {
    print_r($term);

$posts_array = get_posts(
                        array( 'showposts' => -1,
                            'post_type' => 'projects',
                            'tax_query' => array(
                                array(
                                'taxonomy' => 'project_type',
                                'field' => 'name',
                                'terms' => 'Architecture',
                                )
                            )
                        )
                    );
    print_r( $posts_array ); 
}
  ?>