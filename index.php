<?php 
    require_once './locale/bootstrap.php';
    $frFRChecked = (!isset($_GET['lang']) || $_GET['lang'] == 'fr_FR') ? 'checked' : null;
    $ptBRChecked = (isset($_GET['lang']) && $_GET['lang'] == 'pt_BR') ? 'checked' : null;
?>

<form method="get">
    <fieldset>
        <legend>Selecione o idioma</legend>

        <div>
            <input type="radio" id="fr_FR" name="lang" value="fr_FR" <?php echo $frFRChecked?> />
            <label for="fr_FR">Francês</label>
        </div>

        <div>
            <input type="radio" id="pt_BR" name="lang" value="pt_BR" <?php echo $ptBRChecked?> />
            <label for="pt_BR">Português</label>
        </div>
    </fieldset>    
    <input type="submit" value="Trocar idioma" />
</form>

<p><?php echo _("hello") ?>, <?php echo _("good_morning") ?>!</p>