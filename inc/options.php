<?php
$open_table_widget_options = array(
    array('name' => __('About', $open_table_widget->textdomain), 'type' => 'opentab'),
    array('type' => 'about'),
    array('type' => 'closetab', 'actions' => false),

    array(
        'name' => __('Options', $open_table_widget->textdomain),
        'type' => 'opentab'
    ),

    array(
        'name' => __('Disable Plugin CSS', $open_table_widget->textdomain),
        'desc' => __('Useful to style your own widget and for theme integration and optimization.', $open_table_widget->textdomain),
        'std' => '',
        'id' => 'disable_css',
        'type' => 'checkbox',
        'label' => __('Yes', $open_table_widget->textdomain)
    ),
    array('type' => 'closetab')
);