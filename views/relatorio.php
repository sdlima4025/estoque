<h1>Relatório de Pedido de Compra</h1>

<table border="1" width="500">
    <tr>
        <th>Cód</th>
        <th>Nome do Produto</th>
        <th>Qtd.</th>
        <th>Qtd. Min</th>
        <th>Diferença</th>
    </tr>
    <?php foreach($list as $item): ?>
    <tr>
        <td><?php echo $item['cod']; ?></td>
        <td><?php echo $item['name']; ?></td>
        <td><?php echo $item['quantity']; ?></td>
        <td><?php echo $item['min_quantity']; ?></td>
        <td><?php echo (floatval($item['min_quantity'])  - floatval($item['quantity'])); ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<script type="text/javascript">
    window.print();
</script>