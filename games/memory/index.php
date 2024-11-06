<!DOCTYPE html>
<html lang="fr">

<?php
    require_once __DIR__ . '/../../utils/common.php';
    $css_file = 'memory.css';
    include '../../partials/head.php';
$db=connectToDbAndGetPdo();
    ?>


<body>
    <?php include '../../partials/header.php'; ?>

  <div class="header_image_container">
      <img src="../../assets/images/header.png" alt="paysage" class="header_image">
      <div class="overlay-text">MEMORY</div>
  </div>

  <main>



    <details open>
      <summary><img src="../../assets/images/playstation-brands-solid.svg" alt="playstation" class="theme_icon"></summary>
      <details open>
        <summary>Facile</summary>
        <div class="memory-grid">
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cross.png" alt="square" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_square.png" alt="square" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cercle.png" alt="cercle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_triangle.png" alt="triangle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cross.png" alt="cross" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_square.png" alt="square" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cercle.png" alt="cercle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_triangle.png" alt="triangle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cross.png" alt="cross" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_square.png" alt="square" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cercle.png" alt="cercle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_triangle.png" alt="triangle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cross.png" alt="cross" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_square.png" alt="square" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cercle.png" alt="cercle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_triangle.png" alt="triangle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>

        </div>
      </details>
      <details >
        <summary>Difficile</summary>
        <div class="memory-grid_difficult">
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cross.png" alt="square" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_square.png" alt="square" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cercle.png" alt="cercle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_triangle.png" alt="triangle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cross.png" alt="cross" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_square.png" alt="square" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cercle.png" alt="cercle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_triangle.png" alt="triangle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cross.png" alt="cross" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_square.png" alt="square" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cercle.png" alt="cercle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_triangle.png" alt="triangle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cross.png" alt="cross" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_square.png" alt="square" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cercle.png" alt="cercle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_triangle.png" alt="triangle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cross.png" alt="square" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_square.png" alt="square" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cercle.png" alt="cercle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_triangle.png" alt="triangle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cross.png" alt="cross" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_square.png" alt="square" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cercle.png" alt="cercle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_triangle.png" alt="triangle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cross.png" alt="cross" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_square.png" alt="square" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cercle.png" alt="cercle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_triangle.png" alt="triangle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cross.png" alt="cross" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_square.png" alt="square" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cercle.png" alt="cercle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_triangle.png" alt="triangle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cross.png" alt="cross" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_square.png" alt="square" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cercle.png" alt="cercle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_triangle.png" alt="triangle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cross.png" alt="square" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_square.png" alt="square" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cercle.png" alt="cercle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_triangle.png" alt="triangle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cross.png" alt="cross" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_square.png" alt="square" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cercle.png" alt="cercle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_triangle.png" alt="triangle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cross.png" alt="cross" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_square.png" alt="square" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cercle.png" alt="cercle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_triangle.png" alt="triangle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cross.png" alt="cross" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_square.png" alt="square" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cercle.png" alt="cercle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_triangle.png" alt="triangle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cross.png" alt="square" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_square.png" alt="square" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cercle.png" alt="cercle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_triangle.png" alt="triangle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cross.png" alt="cross" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_square.png" alt="square" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cercle.png" alt="cercle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_triangle.png" alt="triangle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cross.png" alt="cross" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_square.png" alt="square" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_cercle.png" alt="cercle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/button_triangle.png" alt="triangle" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>







        </div>
      </details>

    </details>
    <details >
      <summary><img src="../../assets/images/xbox-brands-solid%20(1).svg" alt="Xbox" class="theme_icon"></summary>
      <details open>
        <summary>Facile</summary>
        <div class="memory-grid">
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_a.png" alt="xbox button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_b.png" alt="xbox button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_x.png" alt="xbox button x" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_y.png" alt="xbox button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_a.png" alt="xbox button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_b.png" alt="xbox button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_x.png" alt="xbox button x" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_y.png" alt="xbox button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_a.png" alt="xbox button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_b.png" alt="xbox button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_x.png" alt="xbox button x" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_y.png" alt="xbox button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_a.png" alt="xbox button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_b.png" alt="xbox button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_x.png" alt="xbox button x" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_y.png" alt="xbox button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
        </div>
      </details>
      <details >
        <summary>Difficile</summary>
        <div class="memory-grid_difficult">
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_a.png" alt="xbox button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_b.png" alt="xbox button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_x.png" alt="xbox button x" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_y.png" alt="xbox button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_a.png" alt="xbox button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_b.png" alt="xbox button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_x.png" alt="xbox button x" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_y.png" alt="xbox button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_a.png" alt="xbox button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_b.png" alt="xbox button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_x.png" alt="xbox button x" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_y.png" alt="xbox button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_a.png" alt="xbox button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_b.png" alt="xbox button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_x.png" alt="xbox button x" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_y.png" alt="xbox button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_a.png" alt="xbox button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_b.png" alt="xbox button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_x.png" alt="xbox button x" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_y.png" alt="xbox button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_a.png" alt="xbox button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_b.png" alt="xbox button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_x.png" alt="xbox button x" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_y.png" alt="xbox button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_a.png" alt="xbox button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_b.png" alt="xbox button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_a.png" alt="xbox button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_b.png" alt="xbox button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_x.png" alt="xbox button x" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_y.png" alt="xbox button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_a.png" alt="xbox button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_b.png" alt="xbox button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_x.png" alt="xbox button x" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_y.png" alt="xbox button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_a.png" alt="xbox button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_b.png" alt="xbox button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_a.png" alt="xbox button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_b.png" alt="xbox button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_x.png" alt="xbox button x" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_y.png" alt="xbox button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_a.png" alt="xbox button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_b.png" alt="xbox button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_x.png" alt="xbox button x" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_y.png" alt="xbox button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_a.png" alt="xbox button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_b.png" alt="xbox button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_a.png" alt="xbox button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_b.png" alt="xbox button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_x.png" alt="xbox button x" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_y.png" alt="xbox button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_a.png" alt="xbox button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_b.png" alt="xbox button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_x.png" alt="xbox button x" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_y.png" alt="xbox button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_a.png" alt="xbox button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_b.png" alt="xbox button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_a.png" alt="xbox button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_b.png" alt="xbox button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_x.png" alt="xbox button x" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_y.png" alt="xbox button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_a.png" alt="xbox button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_b.png" alt="xbox button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_x.png" alt="xbox button x" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/xbox_y.png" alt="xbox button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>





        </div>
      </details>
    </details>
    <details >
      <summary><img src="../../assets/images/nintendo-2.svg" alt="Xbox" class="theme_icon"></summary>
      <details open>
        <summary>Facile</summary>
        <div class="memory-grid">
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_a.png" alt="nintendo button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_y.png" alt="nintendo button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_b.png" alt="nintendo button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_c.png" alt="nintendo button c" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_a.png" alt="nintendo button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_y.png" alt="nintendo button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_b.png" alt="nintendo button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_c.png" alt="nintendo button c" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_a.png" alt="nintendo button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_y.png" alt="nintendo button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_b.png" alt="nintendo button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_c.png" alt="nintendo button c" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_a.png" alt="nintendo button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_y.png" alt="nintendo button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_b.png" alt="nintendo button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_c.png" alt="nintendo button c" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>


        </div>
      </details>
      <details>
        <summary>Difficile</summary>
        <div class="memory-grid_difficult">
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_a.png" alt="nintendo button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_y.png" alt="nintendo button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_b.png" alt="nintendo button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_c.png" alt="nintendo button c" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_a.png" alt="nintendo button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_y.png" alt="nintendo button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_b.png" alt="nintendo button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_c.png" alt="nintendo button c" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_a.png" alt="nintendo button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_y.png" alt="nintendo button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_b.png" alt="nintendo button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_c.png" alt="nintendo button c" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_a.png" alt="nintendo button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_y.png" alt="nintendo button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_b.png" alt="nintendo button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_c.png" alt="nintendo button c" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_a.png" alt="nintendo button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_y.png" alt="nintendo button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_b.png" alt="nintendo button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_c.png" alt="nintendo button c" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_b.png" alt="nintendo button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_c.png" alt="nintendo button c" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_a.png" alt="nintendo button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_y.png" alt="nintendo button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_b.png" alt="nintendo button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_c.png" alt="nintendo button c" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_a.png" alt="nintendo button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_y.png" alt="nintendo button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_b.png" alt="nintendo button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_c.png" alt="nintendo button c" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_b.png" alt="nintendo button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_c.png" alt="nintendo button c" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_a.png" alt="nintendo button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_y.png" alt="nintendo button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_b.png" alt="nintendo button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_c.png" alt="nintendo button c" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_a.png" alt="nintendo button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_y.png" alt="nintendo button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_b.png" alt="nintendo button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_c.png" alt="nintendo button c" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_b.png" alt="nintendo button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_c.png" alt="nintendo button c" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_a.png" alt="nintendo button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_y.png" alt="nintendo button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_b.png" alt="nintendo button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_c.png" alt="nintendo button c" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_a.png" alt="nintendo button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_y.png" alt="nintendo button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_b.png" alt="nintendo button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_c.png" alt="nintendo button c" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_b.png" alt="nintendo button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_c.png" alt="nintendo button c" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_a.png" alt="nintendo button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_y.png" alt="nintendo button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_b.png" alt="nintendo button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_c.png" alt="nintendo button c" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_a.png" alt="nintendo button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_y.png" alt="nintendo button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_b.png" alt="nintendo button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_c.png" alt="nintendo button c" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_b.png" alt="nintendo button b" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_c.png" alt="nintendo button c" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_a.png" alt="nintendo button a" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>
          <label>
            <input type="checkbox">
            <div class="card">
              <div class="card-front">
                <img src="../../assets/images/nintendo_y.png" alt="nintendo button y" class="memory_card">
              </div>
              <div class="card-back">?</div>
            </div>
          </label>






        </div>
      </details>
    </details>



    <div class="body">



        <a href="#chat" class="button">ChatBox</a>
        <?php
        $req = $db->prepare("SELECT sender.id AS sender, receiver.id AS receiver, `content`,message_date FROM `message` INNER JOIN `user` sender on sender.id = message.sender_id INNER JOIN `user` receiver on receiver.id = message.receiver_id WHERE message_date >= NOW() - INTERVAL 1 DAY  ORDER BY message_date ASC");
        $req->execute();
        $content_tab= array();
        $sender_tab= array();
        $receiver_tab= array();
        while ($data = $req->fetch()) {
            $content_tab[] = htmlspecialchars($data['content']);
            $receiver_tab[] = htmlspecialchars($data['receiver']);
            $sender_tab[] = htmlspecialchars($data['sender']);
        }
        ?>
      <div id="chat" class="chat-box">
        <div class="chat-header">
          <span>Chat</span>
          <a href="#" class="close-button">x</a>
        </div>


            <?php $line=0;
            foreach($content_tab as $msg) : ?>
                <div class="<?php echo ($sender_tab[$line] == $_SESSION['userId']) ?  'message-sent': 'message-answer';?>">

                    <?php
                    $line++;
                    echo $msg;
                    ?>
                </div>
            <?php endforeach;?>


        <div class="chat-messages">
          <p>Bienvenue dans le chat !</p>
        </div>
          <form action="" method="post">
              <label for="Message"><input type="text" placeholder="Écrivez un message..." class="chat-input" name="Message" id="Message"></label>
          </form>
          <?php
            $search = (isset($_POST['Message']) AND $_POST['Message']!="") ? "'".$_POST['Message']."'" . header('Location: index.php?sendmessage') : '';
            ($search!='') ? $req = $db->prepare("INSERT INTO `message`(`game_id`,`sender_id`, `receiver_id`, `content`, `message_date`) VALUES (1," . $_SESSION['userId'] . ",2," . $search . ", NOW())") : null;
            $req->execute();


          ?>
      </div>

    </div>


  </main>


    <?php include '../../partials/footer.php'; ?>
</body>
</html>