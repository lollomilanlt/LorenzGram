<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>



<html>

    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <style>
            .footer {
            
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
            height: 50px;
            width: 100%;
            } 

            .ciao {

                z-index: 10000;
                position: fixed;
                top: 0px;
                left: 0;
                right: 0;
                width: 100%;
            }  

            .fill {
                display: flex;
                justify-content: center;
                align-items: center;
                overflow: hidden
            }

            .fill img {
                flex-shrink: 0;
                min-width: 100%;
                min-height: 100%
            }     


            

    </style>
    
    <script>
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
            location.reload();
        }

        $( "#target" ).dblclick(function() {
            alert( "Ciao" );
        });
        
    </script>


    </head>

    <body class="bg-dark">
    
    <!-- Image and text -->
<nav class="navbar navbar-light text-white bg-dark ciao">
    <a class="navbar-brand">
    <img src="/IG/webroot/res/logo.png" width="30" height="30" class="d-inline-block align-top " alt="">
    LorenzGram
    </a>
</nav>    

<?php foreach ($posts as $post): ?>
                <tr>
                    <div id="target" class="container bg-light col align-self-center fill">
                        <div class="col align-self-center text-center">
                            <td><?= $this->Html->image($post->urlPhoto, ['alt' => 'CakePHP', 'width' => '150']); ?></td>
                            
                        </div>
                    </div>
                    <div class="container bg-dark text-white">
                        <p></p>
                        <p> Mi piace: 666</p>
                        <p>@user :<?=$post->id_user ?></p>
                        
                        <td><?= h($post->description) ?></td>
                    
                    </div>
                    <br>
                    
                    
                </tr>
                <?php endforeach; ?>
    
                

    <footer class="footer">
        <div class="container">
            <div class="row bg-dark">
                <div class="col text-center">
                <?= $this->Html->image("/webroot/res/home.svg", ['alt' => 'CakePHP', 'width' => '50', 'onclick' => 'topFunction()']); ?>
                </div>
                <div class="col text-center">
                    <?= $this->Html->image("/webroot/res/logo.svg", ['alt' => 'CakePHP', 'width' => '50', 'data-toggle' => 'modal', 'data-target' => '#myModal']); ?>
                    
                </div>
                <div class="col text-center">
                    <?= $this->Html->image("/webroot/res/profile.svg", ['alt' => 'CakePHP', 'width' => '50']); ?>
                </div>
                
            </div>
        </div>
    </footer>

    

<!-- Modal -->
<div id="myModal" class="modal fade bg-dark" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Carica una foto</h4>
    </div>

    <div class="modal-body">

        <div class="container">
        <div class="users form content">
        <div class="container text-center">
        <?= $this->Form->create(null, [
            'url' => ['controller' => 'users', 'action' => 'addPost'] ]);?>
            <fieldset>
                <legend><?= __('Add Post') ?></legend>
                <?php
                    echo $this->Form->file('image');
                    echo $this->Form->control('urlPhoto');
                    echo $this->Form->control('description');
                    echo $this->Form->control('id_user');
                ?>
        
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
        </div>
        </div>    
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Chiudi</button>
    </div>
    </div>

</div>
</div>

    </body>
</html>
