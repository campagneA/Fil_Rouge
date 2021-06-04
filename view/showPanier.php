<?php
include_once(__DIR__ . '/showNav.php');
include_once(__DIR__ . '/showHeader.php');
include_once(__DIR__ . '/showFooter.php');
function showPanier(array $items = null)
{
  showHeader();
  showNav();
?>

  <body>
    <div class="page_cart">
      <div id="promo_code">
        <a>vous avez un code promo?</a>
      </div>
      <table class="cart_display">
        <tr>
          <th>img</th>
          <th>Produit</th>
          <th>Quantité</th>
          <th>Prix</th>
        </tr>
        <tr>

          <td>truc</td>
          <td>truc</td>
          <td class='quantity_td noselect'>
            <label for="" class="minus">-</label>
            <span id="amount" class="amount">0</span>
            <label for="" class="plus">+</label>
          </td>
          <td>truc</td>

        </tr>
        <tr>
          <td>truc</td>
          <td>truc</td>
          <td>truc</td>
          <td>truc</td>
        </tr>
        <tr>
          <td>truc</td>
          <td>truc</td>
          <td>truc</td>
          <td>truc</td>
        </tr>
      </table>
      <div class="cart_nav">
        <button>Précédent</button>
        <button>Suivant</button>
      </div>

      <?php
      showFooter();
      ?>

    </div>

    <script src="../js/jquery-3.6.0.js"></script>
    <script src="../js/panier.js"></script>
  </body>

  </html>
<?php
}
?>