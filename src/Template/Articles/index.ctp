<h1>Articles</h1>
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Created</th>
            <th>Actions</th>

    </tr>


</thead>
<tbody>


    <?php foreach($articles as $article): ?>
        <tr>
            <td>
                <?php
                echo $this->Html->link(
                 $article->title,
                 [
                    'action'=>'view',
                    $article->slug
                 ]
                 );
                 ?>
                 </td>

            <td>
                <td><?php echo $article->created; ?></td>
                <td>
              <?php
            echo $this->Html->link(
            'edit',
        [
            'action'=>'edit',
            $article->id
        ]
        );
        echo '&nbsp; |&nbsp;';
        echo $this->Form->postLink(
            'Delete'
            ['action'=>'delete', $article->id],
            ['confirm'=>__('are you sure {0}',
            $article->title
            )]
        );


        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<div>
    <?php
    echo $this->Html->link(
        'create article',
        [
            'action'=>'create'
        ]
        );

        ?>
        </div>
