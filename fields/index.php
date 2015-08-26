<?php

?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>index</title>
  <style type="text/css">
    table{
      border-collapse:collapse;
    }
    td{
      border:1px solid #000;

    }
  </style>
  <script src="/jquery.2.1.4.js"></script>
</head>
<body>
<div id="basis">


  <table id="tb">
    <tr id="header">
      <th>Наименование</th>
      <th>Артикул</th>
      <th>Кол-во</th>
      <th>Ед.</th>
      <th>Цена</th>
      <th>Сумма</th>
    </tr>
    <tr class="r">
      <td><input name="items[name]" type="text" value=""></td>
      <td><input type="text" name="items[article]" value=""></td>
      <td><input type="text" name="items[quantity]" class="qnt" value=""></td>
      <td><input type="text" name="items[units]" class="unt" value=""></td>
      <td><input type="text" name="items[price]" class="prc" value=""></td>
      <td><input type="text" readonly name="items[total_price]" class="sum" value=""></td>
    </tr>
    <tr>
      <td colspan="6">
        <button id="add">Добавить поле</button>
        <button id="remove">Убрать поле</button>
      </td>
    </tr>
  </table>

<!--  https://service-online.su/forms/buh/tovarnyiy-chek/-->
  <div id="push"></div>
</div>
<footer>

</footer>
<script type="text/javascript">
  var d = document;


  function addRow(){

    // Находим нужную таблицу
    var tbody = d.getElementById('tab1').getElementsByTagName('TBODY')[0];

    // Создаем строку таблицы и добавляем ее
    var row = d.createElement("TR");
    tbody.appendChild(row);

    // Создаем ячейки в вышесозданной строке
    // и добавляем тх
    var td1 = d.createElement("TD");
    var td2 = d.createElement("TD");
    var td3 = d.createElement("TD");
    var td4 = d.createElement("TD");
    var td5 = d.createElement("TD");
    var td6 = d.createElement("TD");

    row.appendChild(td1);
    row.appendChild(td2);
    row.appendChild(td3);
    row.appendChild(td4);
    row.appendChild(td5);
    row.appendChild(td6);
    // Наполняем ячейки
    td1.innerHTML = '<input type="text" name="tovar_name[]" id="tovar_name" />';
    td2.innerHTML = '<input type="text" name="tovar_ed[]" id="tovar_ed" />';
    td3.innerHTML = '<input type="text" name="tovar_kol[]" id="tovar_kol" class="tovar_kol" />';
    td4.innerHTML = '<input type="text" name="tovar_cena[]" id="tovar_cena" class="tovar_cena" />';
    td5.innerHTML = '<input type="text" name="tovar_sum[]" id="tovar_sum" class="tovar_sum" />';
    td6.innerHTML = '<img src="../../images/cut_red.gif" alt="уд" width="16" height="16" class="delete" onclick="deleteRow(this);">';

  }
  function deleteRow(r){
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById('tab1').deleteRow(i);
  }


</script>
<?php


?>
</body>
</html>