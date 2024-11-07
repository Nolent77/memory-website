<!doctype html>
<html class="no-js" lang="fr">

<?php
    require_once __DIR__ . '/../../utils/common.php';
    $css_file = 'scores.css';
    include '../../partials/head.php';
    $db=connectToDbAndGetPdo();
?>
<?php function () {

}?>
<body>
    <?php include '../../partials/header.php'; ?>

    <div class="header_image_container">
        <img src="../../assets/images/header.png" alt="paysage" class="header_image">
        <div class="overlay-text">Tableau des Scores</div>
    </div>

    <form name="form" action="" method="post">
        <label for="Pseudo"><input class="input_user" type="text" name="Pseudo" id="Pseudo" placeholder="Pseudo"></label>
    </form>

    <?php
        $search = (isset($_POST['Pseudo']) AND $_POST['Pseudo']!="") ? "user.username='".$_POST['Pseudo']."'" : 1;
        $req = $db->prepare("SELECT user.id,user.username,game.name,difficulty,score_game FROM `score` INNER JOIN game ON game.id=score.game_id INNER JOIN `user` ON user.id=score.player_id WHERE ".$search." ORDER BY score_game DESC LIMIT 10");
        $req->execute();
        $id_tab = array();
        $score_tab = array();
        $game_tab = array();
        $name_tab = array();
        $diff_tab = array();
        $p=0;
        while ($data = $req->fetch()) {
            $id_tab[] = htmlspecialchars($data['id']);
            $score_tab[] = htmlspecialchars($data['score_game']);
            $game_tab[] = htmlspecialchars($data['name']);
            $name_tab[] = htmlspecialchars($data['username']);
            $diff_tab[] = htmlspecialchars($data['difficulty']);
        }?>

    <div class="Tab"><table>
        <tr class="Columns">                                                                                                <th class="Classement">CLASSEMENT</th>  <th>JEU</th>                                                        <th>SCORE</th>                                                      <th>NOM</th>    <th>PSEUDO</th>                                                     <th>DIFFICULTÉ</th>                                                 <th>DATE ET HEURE</th>  </tr>
        <tr class="<?php echo ($id_tab[$p] == $_SESSION['userId'] && $_SESSION['userId']!=Null) ? 'tab_active' : ''; ?>">   <th class="First">1</th>                <td><?php echo isset($game_tab[$p]) ? $game_tab[$p] :"" ?></td>     <td><?php echo isset($score_tab[$p]) ? $score_tab[$p] :"" ?></td>   <td></td>       <td><?php echo isset($name_tab[$p]) ? $name_tab[$p] :"" ?></td>     <td><?php echo isset($diff_tab[$p]) ? $diff_tab[$p] :"" ?></td>     <td></td>               </tr> <?php $p++ ?>
        <tr class="<?php echo ($id_tab[$p] == $_SESSION['userId'] && $_SESSION['userId']!=Null) ? 'tab_active' : ''; ?>">   <th class="Second">2</th>               <td><?php echo isset($game_tab[$p]) ? $game_tab[$p] :"" ?></td>     <td><?php echo isset($score_tab[$p]) ? $score_tab[$p] :"" ?></td>   <td></td>       <td><?php echo isset($name_tab[$p]) ? $name_tab[$p] :"" ?></td>     <td><?php echo isset($diff_tab[$p]) ? $diff_tab[$p] :"" ?></td>     <td></td>               </tr> <?php $p++ ?>
        <tr class="<?php echo ($id_tab[$p] == $_SESSION['userId'] && $_SESSION['userId']!=Null) ? 'tab_active' : ''; ?>">   <th class="Third">3</th>                <td><?php echo isset($game_tab[$p]) ? $game_tab[$p] :"" ?></td>     <td><?php echo isset($score_tab[$p]) ? $score_tab[$p] :"" ?></td>   <td></td>       <td><?php echo isset($name_tab[$p]) ? $name_tab[$p] :"" ?></td>     <td><?php echo isset($diff_tab[$p]) ? $diff_tab[$p] :"" ?></td>     <td></td>               </tr> <?php $p++ ?>
        <tr class="<?php echo ($id_tab[$p] == $_SESSION['userId'] && $_SESSION['userId']!=Null) ? 'tab_active' : ''; ?>">   <th class="below_three">4</th>          <td><?php echo isset($game_tab[$p]) ? $game_tab[$p] :"" ?></td>     <td><?php echo isset($score_tab[$p]) ? $score_tab[$p] :"" ?></td>   <td></td>       <td><?php echo isset($name_tab[$p]) ? $name_tab[$p] :"" ?></td>     <td><?php echo isset($diff_tab[$p]) ? $diff_tab[$p] :"" ?></td>     <td></td>               </tr> <?php $p++ ?>
        <tr class="<?php echo ($id_tab[$p] == $_SESSION['userId'] && $_SESSION['userId']!=Null) ? 'tab_active' : ''; ?>">   <th class="below_three">5</th>          <td><?php echo isset($game_tab[$p]) ? $game_tab[$p] :"" ?></td>     <td><?php echo isset($score_tab[$p]) ? $score_tab[$p] :"" ?></td>   <td></td>       <td><?php echo isset($name_tab[$p]) ? $name_tab[$p] :"" ?></td>     <td><?php echo isset($diff_tab[$p]) ? $diff_tab[$p] :"" ?></td>     <td></td>               </tr> <?php $p++ ?>
        <tr class="<?php echo ($id_tab[$p] == $_SESSION['userId'] && $_SESSION['userId']!=Null) ? 'tab_active' : ''; ?>">   <th class="below_three">6</th>          <td><?php echo isset($game_tab[$p]) ? $game_tab[$p] :"" ?></td>     <td><?php echo isset($score_tab[$p]) ? $score_tab[$p] :"" ?></td>   <td></td>       <td><?php echo isset($name_tab[$p]) ? $name_tab[$p] :"" ?></td>     <td><?php echo isset($diff_tab[$p]) ? $diff_tab[$p] :"" ?></td>     <td></td>               </tr> <?php $p++ ?>
        <tr class="<?php echo ($id_tab[$p] == $_SESSION['userId'] && $_SESSION['userId']!=Null) ? 'tab_active' : ''; ?>">   <th class="below_three">7</th>          <td><?php echo isset($game_tab[$p]) ? $game_tab[$p] :"" ?></td>     <td><?php echo isset($score_tab[$p]) ? $score_tab[$p] :"" ?></td>   <td></td>       <td><?php echo isset($name_tab[$p]) ? $name_tab[$p] :"" ?></td>     <td><?php echo isset($diff_tab[$p]) ? $diff_tab[$p] :"" ?></td>     <td></td>               </tr> <?php $p++ ?>
        <tr class="<?php echo ($id_tab[$p] == $_SESSION['userId'] && $_SESSION['userId']!=Null) ? 'tab_active' : ''; ?>">   <th class="below_three">8</th>          <td><?php echo isset($game_tab[$p]) ? $game_tab[$p] :"" ?></td>     <td><?php echo isset($score_tab[$p]) ? $score_tab[$p] :"" ?></td>   <td></td>       <td><?php echo isset($name_tab[$p]) ? $name_tab[$p] :"" ?></td>     <td><?php echo isset($diff_tab[$p]) ? $diff_tab[$p] :"" ?></td>     <td></td>               </tr> <?php $p++ ?>
        <tr class="<?php echo ($id_tab[$p] == $_SESSION['userId'] && $_SESSION['userId']!=Null) ? 'tab_active' : ''; ?>">   <th class="below_three">9</th>          <td><?php echo isset($game_tab[$p]) ? $game_tab[$p] :"" ?></td>     <td><?php echo isset($score_tab[$p]) ? $score_tab[$p] :"" ?></td>   <td></td>       <td><?php echo isset($name_tab[$p]) ? $name_tab[$p] :"" ?></td>     <td><?php echo isset($diff_tab[$p]) ? $diff_tab[$p] :"" ?></td>     <td></td>               </tr> <?php $p++ ?>
        <tr class="<?php echo ($id_tab[$p] == $_SESSION['userId'] && $_SESSION['userId']!=Null) ? 'tab_active' : ''; ?>">   <th class="below_three">10</th>         <td><?php echo isset($game_tab[$p]) ? $game_tab[$p] :"" ?></td>     <td><?php echo isset($score_tab[$p]) ? $score_tab[$p] :"" ?></td>   <td></td>       <td><?php echo isset($name_tab[$p]) ? $name_tab[$p] :"" ?></td>     <td><?php echo isset($diff_tab[$p]) ? $diff_tab[$p] :"" ?></td>     <td></td>               </tr>
    </table></div>

    <?php include '../../partials/footer.php'; ?>
</body>

</html>