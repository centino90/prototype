<?php
  require_once "db.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div class="page-wrapper">
      <table class="table">
        <caption>
          <form action="www.google.com" method="post" class="table-controls">
            <div class="pagination-wrapper">
              <button class="btn prev" type="button">Prev</button>
              <button class="btn next" type="button">Next</button>
            </div>
            <div class="input-wrapper">
              <input class="inp input" type="search" placeholder="input details..." />
              <input class="inp submit" type="submit" value="search" />
            </div>
          </form>
        </caption>
        <caption>
          <div class="title-wrapper">
            <div class="left"><i class="fas fa-user"></i>users</div>
            <div class="right limit">
              <label for="limit">set limit</label>
              <select name="" id="limit" class="inp">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
              </select>
            </div>
          </div>
        </caption>
        <thead class="table__thead">
          <tr>
            <th>Fname</th>
            <th>Lname</th>
            <th>Job</th>
            <th>Address</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="table__tbody">
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <i class="fas fa-ellipsis-v"></i>
              <i class="far fa-trash-alt"></i>
              <i class="far fa-edit"></i>
            </td>
        <?php 
        ?>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td>Reminder: further details can be accessed within action</td>
          </tr>
        </tfoot>
      </table>
    </div>
    <script src="./query.js"></script>
    <script src="./index.js"></script>
  </body>
</html>
