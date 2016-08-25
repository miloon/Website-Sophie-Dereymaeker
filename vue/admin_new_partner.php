<!DOCTYPE html>
<html lang="fr">
<?php include "admin_header.php"; ?>
<!--je ferme la balise là ici au cas où vous souhaitier rajouter un truc (exemple : un fichier javascript) qui ne devrait pas être présent sur toutes les pages admin.-->
</head>
<body>

<div id="wrapper">

    <?php include "admin_menu.php"; ?>

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1><?= $titre ?></h1>
                    <?php if ($affiche_insertion) {
                        ?>
                        <form class="well" action="" name="miam" method="POST">

                            <div class="form-group"><label>Nom du partenaire</label>
                                <input class="form-control" type="text" name="lenom" placeholder="Nom" required/>
                            </div>
                            <div class="form-group"><label>lien</label>
                                <input class="form-control" type="text" name="url" placeholder="lien partenaire"
                                       required/>
                            </div>

                            <input class="btn btn-success" name="inserer" type="submit" value="Insérer"/><br/>

                        </form>
                        <?php
                    }

                    if ($affiche_success) {
                        ?>
                        <h2>Félicitations ! Le partenaire a bien été ajouté !</h2>
                        <p><a href="javascript:history.go(-2)">Retour</a></p>
                        <?php
                    } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="vue/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vue/js/bootstrap.min.js"></script>

</body>
</html>