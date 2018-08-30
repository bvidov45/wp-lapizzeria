<?php

function lapizzeria_options(){

add_menu_page('La Pizzeria', 'La Pizzeria Options', 'administrator', 'lapizzeria_options', 
              'lapizzeria_adjustments', '',20 );

   add_submenu_page('lapizzeria_options','Resevations','Reservations', 'administrator', 
              'lapizzeria_reservations','lapizzeria_reservations' );
}

add_action('admin_menu','lapizzeria_options');

function lapizzeria_adjustments(){
    
}

function lapizzeria_reservations(){ ?>

    <div class="wrap">
        <h1>Reservations</h1>
        <table class="wp-list-table widefat striped">
            <thead>
                <tr>
                    <th class="manage-column">ID</th>
                    <th class="manage-column">Name</th>
                    <th class="manage-column">Date for Reservations</th>
                    <th class="manage-column">Email</th>
                    <th class="manage-column">Phone</th>
                    <th class="manage-column">Message</th>
                </tr>
            </thead>

            <tbody>
            <?php
            global $wpdb;
            $table = $wpdb->prefix . 'reservations';
            $reservations = $wpdb->get_results("SELECT * FROM $table", ARRAY_A);
            foreach($reservations as $resevation): ?>

            <tr>
                <td><?php echo $resevation['id'];   ?></td>
                <td><?php echo $resevation['name'];   ?></td>
                <td><?php echo $resevation['date'];   ?></td>
                <td><?php echo $resevation['email'];   ?></td>
                <td><?php echo $resevation['phone'];   ?></td>
                <td><?php echo $resevation['message'];   ?></td>
            </tr>

            <?php  endforeach; ?> 
            </tbody>
        </table>
    </div>

<?php } ?>