<div class="container mt-5">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h3>Site de démonstration</h3>
<?php if(isLogin()){ echo '<p>Bienvenue '<?= $_SESSION['user'] ?>'</p>';}?>
                <p>Bienvenue <?= $_SESSION['user'] ?></p>
<?php }?>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, commodi delectus eaque eos esse ex illum laboriosam laborum modi, molestias necessitatibus non provident quidem quis repellat soluta tempore, veritatis vitae.
                </p>
                <div class="text-center">Page générée le <?= $date ?></div>
            </div>
        </div>
        <img src="public/img/valbrosseau.jpg" class="imgval">

    
    </div>
    
    
   
</div>

