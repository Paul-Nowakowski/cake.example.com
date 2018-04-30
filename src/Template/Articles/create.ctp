<h1>create an article</h1>
<?php
    echo $this->Form->create($article);
    echo $this->Form->control('title');
    echo $this->Form->control('body', ['rows'=>5]);
    echo $this->Form->button('Save article');
    echo $this->Form->end();

