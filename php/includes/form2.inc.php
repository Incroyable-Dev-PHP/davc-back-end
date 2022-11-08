<form action="/" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="card col-md-7 mx-auto my-1">
            <div class="mb-3">
                <input type="text" class="form-control" name="name" placeholder="Prénom">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" name="surname" placeholder="Nom">
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Age (18 à 70 ans)</label>
                <input type="number" class="form-control" id="age" name="age" placeholder="Renseignez votre age">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Taille (1,26m à 3m)</span>
                <input type="number" class="form-control" name="height" step=".01" placeholder="1.7">
                <span class="input-group-text">m</span>
            </div>

            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="gender" id="genderFemale" value="Femme">
                <label class="form-check-label" for="genderFemale">Femme</label>
            </div>

            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="gender" id="genderMale" value="Homme">
                <label class="form-check-label" for="genderMale">Homme</label>
            </div>
        </div>

        <div class="card col-md-4 mx-auto my-1">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" value="html" id="html" name="knowledges">
                <label for="html" class="form-check-label">HTML</label>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" value="css" id="css" name="knowledges">
                <label for="css" class="form-check-label">CSS</label>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" value="javascript" id="javascript" name="knowledges">
                <label for="javascript" class="form-check-label">JavaScript</label>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" value="php" id="php" name="knowledges">
                <label for="php" class="form-check-label">PHP</label>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" value="mysql" id="mysql" name="knowledges">
                <label for="mysql" class="form-check-label">MySQL</label>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" value="bootstrap" id="bootstrap" name="knowledges">
                <label for="bootstrap" class="form-check-label">Bootstrap</label>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" value="symfony" id="symfony" name="knowledges">
                <label for="symfony" class="form-check-label">Symfony</label>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" value="react" id="react" name="knowledges">
                <label for="react" class="form-check-label">React</label>
            </div>

            <div class="form-group">
                <label for="color" class="form-label">Couleur préférée</label>
                <input type="color" class="form-control" name="color" id="color">
            </div>

            <div class="form-group">
                <label for="date" class="form-label">Date de naissance</label>
                <input type="date" class="form-control" name="date" id="date">
            </div>
        </div>

        <div class="card col-11 mx-auto my-1">
            <div class="mb-3">
                <label for="file" class="form-label">Joindre une image (jpg ou png)</label>
                <input class="form-control" type="file" id="file">
            </div>
        </div>

        <div class="col-12 text-end">
            <button class="btn btn-primary" type="submit">Enregistrer les données</button>
        </div>
    </div>
</form>