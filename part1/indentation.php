<!-- The PHP and the HTML should each be indented so that they are correct with respect to themselves in source form
    means organize code with proper indentation -->

<!-- wrong way -->

<table>
  <?php foreach ($rows as $row): ?>
    <tr>
    <?php if ($row->foo()): ?>
    <?php echo $row ?>
    <?php else: ?>
        Something else
    <?php endif ?>
    </tr>
  <?php endforeach ?>
</table>

<!-- Correct way -->

<table>
<?php foreach ($rows as $row): ?>
    <tr>
    <?php if ($row->foo()): ?>
        <?php echo $row ?>
    <?php else: ?>
        Something else
    <?php endif ?>
    </tr>
<?php endforeach ?>
</table>