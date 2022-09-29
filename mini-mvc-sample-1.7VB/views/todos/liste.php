<div class="container p-3">
    <div class="card">
        <div class="card-body p-2">
            <!-- Action -->
            <form action="./ajouter" method="post" class="add">
                <div class="input-group">
                    <input id="texte" name="texte" type="text" class="form-control" placeholder="Prendre une note…" aria-label="My new idea" aria-describedby="basic-addon1"/>
                </div>
            </form>

            <!-- Liste -->
            <ul class="list-group pt-3">
                <?php
                foreach ($todos as $todo) {
                    ?>
                    <li class="list-group-item">
                        <div class="d-flex">
                            <div class="flex-grow-1 align-self-center"><?= $todo['texte'] ?></div>
                            <div>
                                <?php if($todo['termine'] == 0){?>
                                    
                                <a href="./terminer?id=<?= $todo['id'] ?>" class="btn btn-outline-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
  <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
</svg>                

                                </a>
                                <?php }else{?>
                                    <a href="./supprimer?id=<?= $todo['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
</svg></a>
<?php }?>
                                <!-- Action à ajouter pour Supprimer -->
                            </div>
                        </div>
                    </li>
                    <?php
                }

                if (sizeof($todos) == 0) {
                    ?>
                    <li class="list-group-item text-center">C'est vide !</li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>