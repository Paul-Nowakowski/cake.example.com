<h1><?php echo $article->title ?></h1>
<div><?php echo $article->body; ?></div>
<div>Created: <?php echo $article->created; ?></div>
<div>
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
        ?>
        </div>
