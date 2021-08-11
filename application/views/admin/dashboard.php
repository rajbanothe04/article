<?php include('admin_header.php'); ?>



<div class="container">
    <table class="table">
        <thead>
            <th>Sr.No.</th>
            <th>Title</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php if (!is_null($articles)) : ?>
            <!-- used count instance of !is_null -->
            <?php foreach ($articles as $article) : ?>
            <tr>
                <td>1</td>
                <td>
                    <?= $article->title ?>
                </td>
                <td>
                    <a href="" class="btn btn-success">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php else : ?>
            <tr>
                <td colspan="3">No Records Found</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>

</div>
<?php include('admin_footer.php'); ?>
