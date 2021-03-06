
<section id="profile" class="flex white">
    <?php
    $value = $data['activity'];
    ?>
    <div class="flex">
        <h2>Mise à jour de l'activité</h2>
        <div id="admin" class="flex">
            <div id="add-activity">
                <h3>Modifier l'Activites : <?= $value->getName() ?></h3>
                <span>* = champ obligatoire</span>
                <form action="/index.php?c=activity&a=upAct&id=<?= $value->getId() ?>" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="title">Titre * :</label>
                        <input type="text" id="title" name="title" value="<?= $value->getName() ?>">
                    </div>
                    <div>
                        <label for="category-type">Categorie * :</label>
                        <select name="category-type" id="category-type">
                            <option value="sport">Activité sportive</option>
                            <option value="cultural">Activité culturelle</option>
                            <option value="numerical">Numérique</option>
                        </select>
                    </div>
                    <div>
                        <label for="activity-type">Type * :</label>
                        <select name="activity-type" id="activity-type">
                            <option value="club">Club</option>
                            <option value="event">Evenement</option>
                            <option value="place">Lieux</option>
                        </select>
                    </div>
                    <div>
                        <label for="picture">image : </label>
                        <input type="file" id="picture" name="picture" accept=".image/jpeg, .jpg, .png">&nbsp;(Max: 3Mo)
                    </div>
                    <textarea name="content" id="content" cols="40" rows="10"><?= $value->getDescription() ?></textarea>*
                    <div>
                        <label for="location">Localisation * :</label>
                        <input type="text" id="location" name="location" value="<?= $value->getLocation() ?>">
                    </div>
                    <div>
                        <label for="email">Email :</label>
                        <input type="email" id="email" name="email" value="<?= $value->getEmail() ?>">
                    </div>
                    <div>
                        <label for="phone">Téléphone :</label>
                        <input type="text" id="phone" name="phone" value="<?= $value->getPhone() ?>">
                    </div>
                    <div>
                        <label for="schedules">Date & Horaires * :</label>
                        <input type="text" id="schedules" name="schedules" value="<?= $value->getSchedules() ?>">
                    </div>
                    <div>
                        <label for="url">Lien :</label>
                        <input type="url" id="url" name="url" value="<?= $value->getLink() ?>">
                    </div>
                    <div>
                        <input type="submit" name="updateAct">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>