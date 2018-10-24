
<?php if (count($results) > 0) { ?>
<table class="table table-striped table-hover table-bordered ">
<thead>
  <tr>
    <th style="width: 10%;"></th>
    <th style="text-align: left;width: 80%;">Item</th>
    <th style="width: 10%;"></th>
  </tr>
</thead>
<tbody>
<?php 
foreach ($results as $res) {
  $item_status = intval($res["itl_status"]);
?>
<tr>
  <td style="text-align: center;vertical-align: middle;">
    <input type="checkbox" name="item[]" value="<?php echo intval($res["itl_id"]); ?>" <?php echo ($item_status == 1) ? 'checked' : ''; ?> class="chk" >
  </td>
  <td style="text-align: left;vertical-align: middle;"><?php echo trim($res["itl_items"]); ?></td>
  <td style="vertical-align: middle;text-align: center;">
   <a style="color: #f00;" href="process_form.php?mode=delete&id=<?php echo intval($res["itl_id"]); ?>" onclick="return confirm('Are you sure you want to delete [<?php echo addslashes(trim($res["itl_items"])); ?>] ?')"><span class="glyphicon glyphicon-remove-circle" style="font-size:18px;"></span> </a> 
  </td>
</tr>
<?php } ?>
</tbody>
</table>
<?php } else { ?>
<div class="well well-lg">No items in the list.</div>
<?php } ?>