<?php
/**
 * Created by PhpStorm.
 * User: LeHieu
 * Date: 7/12/2017
 * Time: 12:36 AM
 */
?>

<div>

    <table border="1">
        <tr>
            <td>User id</td>
            <td>Fullname</td>
            <td>Phone</td>
            <td>Email</td>
            <td colspan="2">Action</td>
<!--            <td>Action</td>-->
        </tr>
        <?php foreach ($result as $item) {
            echo '<tr>';
            echo '<td>'.$item['user_id'].'</td>';
            echo '<td>'.$item['username'].'</td>';
            echo '<td>'.$item['phone'].'</td>';
            echo '<td>'.$item['email'].'</td>';
            echo '<td><a href="?action=editPage&id='.$item['user_id'].'">Edit</a>
                      <a href="?action=deletePage&id='.$item['user_id'].'">Delete</a></td>';
            echo '</tr>';

        }?>
    </table>
</div>
