<h1>Blog Posts</h1>

<?php 

echo $this->Html->link(
    'Add Post',
    array('controller' => 'posts', 'action' => 'add')
); 

?>

<table>
    <tr>
        <td>Id</td>
        <td>Title</td>
        <td>Action</td>
        <td>Created</td>
    </tr>

    <?php 
    
    foreach($posts as $post) : 
    
    ?>
        <tr>
            <td><?php echo $post['Post']['id']; ?></td>
            <td>
                <?php 
                echo $this->Html->link($post['Post']['title'], 
                array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); 
                ?>
            </td>
            <td>
                <?php
                    echo $this->Html->link(
                        'Edit ',
                        array('action' => 'edit', $post['Post']['id'])
                    );

                    echo $this->Form->postLink(
                        'Delete',
                        array('action' => 'delete', $post['Post']['id']),
                        array('confirm' => 'Are you sure?')
                    );
                ?>
            </td>
            <td><?php echo $post['Post']['created']; ?></td>
        </tr>
    <?php 
    
    endforeach; 
    unset($post);

    ?>
</table>