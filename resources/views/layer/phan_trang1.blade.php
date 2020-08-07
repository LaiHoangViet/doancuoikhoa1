    <?php $page = isset($_GET['page']) ? $_GET['page'] : 0;?>
    <?php $pag = ceil($all / $limit) ?>
    @if ($all > $limit)
    <div class="pagination-container wow zoomIn mar-b-1x" data-wow-duration="0.5s">
        <ul class="pagination">
            <?php if ($page != 0) { ?>
            <li class="pagination-item--wide first">
                <a class="pagination-link--wide first" href="?page=<?php echo $page - 1 ?>">Previous</a>
            </li>
            <?php } ?>
            <?php $row = 0; ?>
            <?php for($x = $page - 3; $x <= $page + 3; $x++) { ?>
            <?php if ($x >= 0 && $x < $pag) { ?>
            <li class="pagination-item<?php if ($row == 0) echo ' first-number'; ?>
                <?php if ($page == $x) echo ' is-active'; ?>">
                <a class="pagination-link" href="?page=<?php echo $x ?>"><?php echo $x + 1 ?></a>
            </li>
            <?php $row++; ?>
            <?php } ?>
            <?php } ?>
            <?php if ($page + 1 < $pag) { ?>
            <li class="pagination-item--wide last">
                <a class="pagination-link--wide last" href="?page=<?php echo $page + 1 ?>">Next</a>
            </li>
            <?php } ?>
        </ul>
    </div>
    @endif