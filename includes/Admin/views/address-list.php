<div class="wrap">


    <?php if(isset($_GET['inserted'])) { ?>

    <div class="notice notice-success">


        <p> <?php    _e('Address has been added', 'hossenmaruf')?> </p>

    </div>


    <?php }?>





    <h1 class="wp-heading-inline"> Address Books </h1>

    <a class="page-title-action" href=" <?php echo admin_url('admin.php?page=test_plugin&action=new')   ?>    ">
        <?php _e('Add_NEW', 'hossenmaruf')   ?> </a>



    <form action="" method="POST">

        <?php

    $table = new \test\plugin\Admin\Address_List();
    $table->prepare_items();
    $table-> search_box('search', 'search_id') ;
    $table->display();

    ?>

    </form>



</div>