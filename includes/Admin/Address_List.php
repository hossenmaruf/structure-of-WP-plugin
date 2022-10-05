<?php



namespace test\plugin\Admin;

if (!class_exists('WP_List_Table')) {

    require_once ABSPATH . 'wp-admin/includes/class-wp-list-table.php';
}




class Address_List  extends \WP_List_Table
{

    function __construct()
    {
        parent::__construct([

            'singular' => 'contact',
            'plural'   => 'contacts',
            'ajax'     => false


        ]);
    }


    public function get_columns()
    {

        return [


            'cb'       => '<input type = "checkbox"  />',
            'name'     =>  __('Name', 'hossenmaruf'),
            'address'  =>  __('Address', 'hossenmaruf'),
            'phone'     =>  __('Phone', 'hossenmaruf'),
            'create_at' => __('Date', 'hossenmaruf'),


        ];
    }


    protected function column_default($item, $coloum_name)
    {

        switch ($coloum_name) {


            case 'value':
                break;

            default:

                return isset($item->$coloum_name) ? $item->$coloum_name : '';
        }
    }



    public function prepare_items()
    {

        $per_page = 20;

        $coloumns = $this->get_columns();
        $hidden = [];
        $sortable = $this->get_sortable_columns();


        $this->_column_headers = [$coloumns, $hidden, $sortable];


        $this->items = m_ac_get_addresses();

        $this->set_pagination_args([
            'total_items' => m_ac_addresses_count(),
            'per_page'    => $per_page
        ]);
    }
}
