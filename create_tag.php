<?php

include('functions.php');
$pdo = pdo_connect_mysql();

if (isset($_POST['bouton'])) {
//id
  $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
//tag
  $tag = isset($_POST['tag']) ? $_POST['tag'] : '';
  
//prepare l'insertion
  $query = $pdo->prepare('INSERT INTO `produits`(`id`,`tag``) VALUES (?,?)');
  $query->execute([$id,$tag]);

}

?>

<?= template_header('Add New Article') ?>



 <!-- Conteneur principal -->


<div id="mainContainer">
    <div class="form">
      <!-- Contenu principal -->
      <main class="main-content">
        <!-- En-tête -->
        <div class="heading">
          <span class="material-icons"> add </span>
          Ajouter un tag
        </div>
        <form action="create_tag.php" method="get" enctype=multipart/form-data>
          <!-- Contenu -->
          <div class="content">
            <!-- Ajout de produit -->
            <div id="addProductForm" class="product-form">
              <!-- Nom et type-->
              <div class="input-row">
                <div class="input-group">
                  <label for="id">ID</label>
                  <input type="text" name="id" placeholder="26" value="auto" id="id"> 
                  <label for="tag">Tag</label>
                  <input type="text" name="tag" placeholder="Tag"  required />
               
              </div>
                  <!-- Bouton --> 
                <input  type="submit" name="bouton"value="Ajouter" class="validate-button">
                </br>
            </div>
      	</form>
	  	</div>
	  </main>
	</div>
</div>



</body>

</html>
<?= template_footer() ?>